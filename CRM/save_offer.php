<?php
require_once 'db_connect.php';
require_once 'auth.php';
require_once 'config.php';
require_once 'session_config.php';
session_start();

header('Content-Type: application/json');

try {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception('Ungültige Anfragemethode.');
    }

    // Prüfe, ob ein Benutzer eingeloggt ist
    if (!isset($_SESSION['selected_user']) || !array_key_exists($_SESSION['selected_user'], $users)) {
        error_log('Session-Fehler in save_offer.php: selected_user nicht gesetzt oder ungültig. Session: ' . print_r($_SESSION, true));
        throw new Exception('Kein Benutzer eingeloggt oder ungültiger Benutzer.');
    }
    $created_by = $_SESSION['selected_user'];

    // Formulardaten abrufen
    $customer_id = $_POST['customer_id'] ?? '';
    $offer_number = $_POST['offer_number'] ?? '';
    $manufacturer = $_POST['manufacturer'] ?? '';
    $date = $_POST['date'] ?? '';
    $product = $_POST['product'] ?? '';
    $status = $_POST['status'] ?? '';
    $notes = $_POST['notes'] ?? '';
    $company = $_POST['company'] ?? '';

    // Validierung der Pflichtfelder
    if (!$customer_id || !$manufacturer || !$date || !$product || !$status) {
        throw new Exception('Alle Pflichtfelder (Kunde, Hersteller, Datum, Produkt, Status) müssen ausgefüllt sein.');
    }

    $db->beginTransaction();

    $stmt = $db->prepare("
        INSERT INTO offers (customer_id, offer_number, manufacturer, date, product, status, notes, company, created_by, created_at, last_modified_by, last_modified_at)
        VALUES (:customer_id, :offer_number, :manufacturer, :date, :product, :status, :notes, :company, :created_by, NOW(), :created_by, NOW())
    ");

    $stmt->execute([
        ':customer_id' => $customer_id,
        ':offer_number' => $offer_number,
        ':manufacturer' => $manufacturer,
        ':date' => $date,
        ':product' => $product,
        ':status' => $status,
        ':notes' => $notes,
        ':company' => $company,
        ':created_by' => $created_by
    ]);

    $offer_id = $db->lastInsertId();

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
                    $stmt->execute([$offer_id, $imagePath, $description ?: null]);
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
                    $stmt->execute([$offer_id, $pdfPath, $description ?: null]);
                } else {
                    throw new Exception("Fehler beim Hochladen der PDF-Datei '$fileName'. Zielpfad: $fullPath");
                }
            } elseif ($pdfs['error'][$i] !== UPLOAD_ERR_NO_FILE) {
                throw new Exception("Fehler beim Hochladen der PDF-Datei '$fileName'. Fehlercode: " . $pdfs['error'][$i]);
            }
        }
    }

    $db->commit();
    if (isset($_POST['next_step']) && trim($_POST['next_step']) !== '') {
        $next_step = trim($_POST['next_step']);
        $due_date = isset($_POST['due_date']) && $_POST['due_date'] ? $_POST['due_date'] : null;
        $notified_users = isset($_POST['notified_users']) ? json_encode($_POST['notified_users']) : '[]';

        // Next Step in der customers-Tabelle aktualisieren
        $stmt = $db->prepare("UPDATE customers SET next_step = :next_step WHERE id = :customer_id");
        $stmt->execute([
            ':next_step' => $next_step,
            ':customer_id' => $customer_id
        ]);

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
            ':created_by' => $created_by
        ]);
    }
    echo json_encode(['success' => true, 'offer_id' => $offer_id]);
} catch (Exception $e) {
    if ($db->inTransaction()) {
        $db->rollBack();
    }
    echo json_encode(['success' => false, 'error' => $e->getMessage()]);
}