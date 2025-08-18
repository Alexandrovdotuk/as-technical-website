<?php
header('Content-Type: application/json');
require_once 'db_connect.php';
require_once 'auth.php';
require_once 'config.php';
require_once 'session_config.php';
session_start();

try {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception('Ungültige Anfragemethode.');
    }

    // Prüfe, ob ein Benutzer eingeloggt ist
    if (!isset($_SESSION['selected_user']) || !array_key_exists($_SESSION['selected_user'], $users)) {
        error_log('Session-Fehler in update_offer.php: selected_user nicht gesetzt oder ungültig. Session: ' . print_r($_SESSION, true));
        throw new Exception('Kein Benutzer eingeloggt oder ungültiger Benutzer.');
    }
    $last_modified_by = $_SESSION['selected_user'];

    // Daten aus dem Formular empfangen
    $id = $_POST['id'] ?? '';
    $customer_id = $_POST['customer_id'] ?? null;
    $offer_number = $_POST['offer_number'] ?? '';
    $manufacturer = $_POST['manufacturer'] ?? '';
    $date = $_POST['date'] ?? '';
    $product = $_POST['product'] ?? '';
    $notes = $_POST['notes'] ?? '';
    $status = $_POST['status'] ?? 'Offen';
    $company = $_POST['company'] ?? '';
    $filesToDelete = isset($_POST['files_to_delete']) ? json_decode($_POST['files_to_delete'], true) : [];
    $existing_image_descriptions = $_POST['existing_image_descriptions'] ?? [];
    $existing_pdf_descriptions = $_POST['existing_pdf_descriptions'] ?? [];

    // Validierung der Pflichtfelder
    if (!$id || !$customer_id || !$manufacturer || !$date || !$product || !$status) {
        throw new Exception('Alle Pflichtfelder (ID, Kunde, Hersteller, Datum, Produkt, Status) müssen ausgefüllt sein.');
    }

    $db->beginTransaction();

    // Kundennummer aus der Tabelle customers abrufen
    $stmt = $db->prepare("SELECT customer_id FROM customers WHERE id = ?");
    $stmt->execute([$customer_id]);
    $customer = $stmt->fetch(PDO::FETCH_ASSOC);
    $customer_number = $customer ? $customer['customer_id'] : '';

    // Angebot aktualisieren
    $stmt = $db->prepare("
        UPDATE offers 
        SET customer_id = ?, customer_number = ?, offer_number = ?, manufacturer = ?, date = ?, product = ?, notes = ?, status = ?, company = ?, last_modified_by = ?, last_modified_at = NOW()
        WHERE id = ?
    ");
    $stmt->execute([$customer_id, $customer_number, $offer_number, $manufacturer, $date, $product, $notes, $status, $company, $last_modified_by, $id]);

    // Zu löschende Dateien verarbeiten
    if (!empty($filesToDelete)) {
        foreach ($filesToDelete as $filePath) {
            // Sicherstellen, dass die Datei zum Angebot gehört
            $stmt = $db->prepare("SELECT COUNT(*) FROM offer_files WHERE offer_id = ? AND file_path = ?");
            $stmt->execute([$id, $filePath]);
            $count = $stmt->fetchColumn();

            if ($count > 0) {
                // Dateipfad aus der Datenbank löschen
                $stmt = $db->prepare("DELETE FROM offer_files WHERE offer_id = ? AND file_path = ?");
                $stmt->execute([$id, $filePath]);

                // Datei vom Server löschen
                $absolute_path = $_SERVER['DOCUMENT_ROOT'] . $filePath;
                if (file_exists($absolute_path) && is_writable($absolute_path)) {
                    unlink($absolute_path);
                }
            }
        }
    }

    // Bestehende Bezeichnungen aktualisieren
    foreach ($existing_image_descriptions as $file_path => $description) {
        $description = trim($description);
        $stmt = $db->prepare("UPDATE offer_files SET description = ? WHERE offer_id = ? AND file_path = ? AND file_type = 'image'");
        $stmt->execute([$description ?: null, $id, $file_path]);
    }

    foreach ($existing_pdf_descriptions as $file_path => $description) {
        $description = trim($description);
        $stmt = $db->prepare("UPDATE offer_files SET description = ? WHERE offer_id = ? AND file_path = ? AND file_type = 'pdf'");
        $stmt->execute([$description ?: null, $id, $file_path]);
    }

    // Upload-Verzeichnis definieren
    $upload_dir = $_SERVER['DOCUMENT_ROOT'] . dirname($_SERVER['PHP_SELF']) . '/uploads/';
    if (!is_dir($upload_dir)) {
        if (!mkdir($upload_dir, 0755, true)) {
            throw new Exception('Konnte das Upload-Verzeichnis nicht erstellen: ' . $upload_dir);
        }
    }

    if (!is_writable($upload_dir)) {
        throw new Exception('Upload-Verzeichnis ist nicht schreibbar: ' . $upload_dir);
    }

    // Bilder hochladen
    if (isset($_FILES['images']) && !empty($_FILES['images']['name'][0])) {
        $descriptions = $_POST['image_descriptions'] ?? [];
        $images = $_FILES['images'];
        for ($i = 0; $i < count($images['name']); $i++) {
            if ($images['error'][$i] === UPLOAD_ERR_OK) {
                $maxFileSize = 64 * 1024 * 1024; // 64 MB
                $fileType = $images['type'][$i];
                $fileName = $images['name'][$i];
                $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

                // Prüfe Dateityp (MIME-Typ und Dateiendung)
                $allowedImageTypes = ['image/jpeg', 'image/png', 'image/gif'];
                $allowedExtensions = ['jpeg', 'jpg', 'png', 'gif'];
                if (!in_array($fileType, $allowedImageTypes) || !in_array($fileExtension, $allowedExtensions)) {
                    throw new Exception("Ungültiges Bildformat für Datei '$fileName'. Erkannter MIME-Typ: $fileType");
                }
                if ($images['size'][$i] > $maxFileSize) {
                    throw new Exception("Datei '$fileName' ist zu groß. Maximale Größe: 64 MB, Dateigröße: " . round($images['size'][$i] / (1024 * 1024), 2) . " MB");
                }

                $description = isset($descriptions[$i]) ? trim($descriptions[$i]) : '';
                $description = preg_replace('/[^a-zA-Z0-9_-]/', '_', $description); // Ersetze ungültige Zeichen
                $imageName = uniqid() . '-' . ($description ? $description : basename($fileName, '.' . $fileExtension)) . '.' . $fileExtension;
                $imagePath = BASE_PATH . 'uploads/' . $imageName;
                $fullPath = $upload_dir . $imageName;

                if (move_uploaded_file($images['tmp_name'][$i], $fullPath)) {
                    $stmt = $db->prepare("INSERT INTO offer_files (offer_id, file_path, file_type, description) VALUES (?, ?, 'image', ?)");
                    $stmt->execute([$id, $imagePath, $description ?: null]);
                } else {
                    throw new Exception("Fehler beim Hochladen der Bilddatei '$fileName'. Zielpfad: $fullPath");
                }
            } elseif ($images['error'][$i] !== UPLOAD_ERR_NO_FILE) {
                throw new Exception("Fehler beim Hochladen der Bilddatei '$fileName'. Fehlercode: " . $images['error'][$i]);
            }
        }
    }

    // PDFs hochladen
    if (isset($_FILES['pdfs']) && !empty($_FILES['pdfs']['name'][0])) {
        $descriptions = $_POST['pdf_descriptions'] ?? [];
        $pdfs = $_FILES['pdfs'];
        for ($i = 0; $i < count($pdfs['name']); $i++) {
            if ($pdfs['error'][$i] === UPLOAD_ERR_OK) {
                $maxFileSize = 64 * 1024 * 1024; // 64 MB
                $fileType = $pdfs['type'][$i];
                $fileName = $pdfs['name'][$i];
                $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

                // Prüfe Dateityp (MIME-Typ und Dateiendung)
                $allowedPdfTypes = ['application/pdf', 'application/x-pdf'];
                $allowedExtensions = ['pdf'];
                if (!in_array($fileType, $allowedPdfTypes) || !in_array($fileExtension, $allowedExtensions)) {
                    throw new Exception("Ungültiges PDF-Format für Datei '$fileName'. Erkannter MIME-Typ: $fileType");
                }
                if ($pdfs['size'][$i] > $maxFileSize) {
                    throw new Exception("Datei '$fileName' ist zu groß. Maximale Größe: 64 MB, Dateigröße: " . round($pdfs['size'][$i] / (1024 * 1024), 2) . " MB");
                }

                $description = isset($descriptions[$i]) ? trim($descriptions[$i]) : '';
                $description = preg_replace('/[^a-zA-Z0-9_-]/', '_', $description); // Ersetze ungültige Zeichen
                $pdfName = uniqid() . '-' . ($description ? $description : basename($fileName, '.' . $fileExtension)) . '.' . $fileExtension;
                $pdfPath = BASE_PATH . 'uploads/' . $pdfName;
                $fullPath = $upload_dir . $pdfName;

                if (move_uploaded_file($pdfs['tmp_name'][$i], $fullPath)) {
                    $stmt = $db->prepare("INSERT INTO offer_files (offer_id, file_path, file_type, description) VALUES (?, ?, 'pdf', ?)");
                    $stmt->execute([$id, $pdfPath, $description ?: null]);
                } else {
                    throw new Exception("Fehler beim Hochladen der PDF-Datei '$fileName'. Zielpfad: $fullPath");
                }
            } elseif ($pdfs['error'][$i] !== UPLOAD_ERR_NO_FILE) {
                throw new Exception("Fehler beim Hochladen der PDF-Datei '$fileName'. Fehlercode: " . $pdfs['error'][$i]);
            }
        }
    }

    $db->commit();
    if (isset($_POST['next_step'])) {
        $next_step = trim($_POST['next_step']);
        $due_date = isset($_POST['due_date']) && $_POST['due_date'] ? $_POST['due_date'] : null;
        $notified_users = isset($_POST['notified_users']) ? json_encode($_POST['notified_users']) : '[]';

        // Next Step in der customers-Tabelle aktualisieren
        $stmt = $db->prepare("UPDATE customers SET next_step = :next_step WHERE id = :customer_id");
        $stmt->execute([
            ':next_step' => $next_step,
            ':customer_id' => $customer_id
        ]);

        if ($next_step !== '') {
            // Next Step in der next_steps-Tabelle speichern
            $stmt = $db->prepare("
                INSERT INTO next_steps (customer_id, description, due_date, notified_users, created_by, created_at, is_notified)
                VALUES (:customer_id, :description, :due_date, :notified_users, :created_by, NOW(), FALSE)
                ON DUPLICATE KEY UPDATE
                description = :description_update,
                due_date = :due_date_update,
                notified_users = :notified_users_update,
                is_notified = FALSE
            ");
            $stmt->execute([
                ':customer_id' => $customer_id,
                ':description' => $next_step,
                ':description_update' => $next_step,
                ':due_date' => $due_date,
                ':due_date_update' => $due_date,
                ':notified_users' => $notified_users,
                ':notified_users_update' => $notified_users,
                ':created_by' => $last_modified_by
            ]);
        } else {
            // Next Step löschen, wenn leer
            $stmt = $db->prepare("DELETE FROM next_steps WHERE customer_id = ?");
            $stmt->execute([$customer_id]);
        }
    }
    echo json_encode(['success' => true]);
} catch (Exception $e) {
    if ($db->inTransaction()) {
        $db->rollBack();
    }
    echo json_encode(['success' => false, 'error' => $e->getMessage()]);
}