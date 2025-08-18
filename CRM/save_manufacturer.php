<?php
ob_start();
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

    if (!isset($_SESSION['selected_user']) || !array_key_exists($_SESSION['selected_user'], $users)) {
        error_log('Session-Fehler in save_manufacturer.php: selected_user nicht gesetzt oder ungültig. Session: ' . print_r($_SESSION, true));
        throw new Exception('Kein Benutzer eingeloggt oder ungültiger Benutzer.');
    }
    $created_by = $_SESSION['selected_user'];

    $machine = trim($_POST['machine'] ?? '');
    $manufacturer = trim($_POST['manufacturer'] ?? '');
    $contact_person = trim($_POST['contact_person'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $notes = trim($_POST['notes'] ?? '');
    $links = trim($_POST['links'] ?? '');

    if (!$machine || !$manufacturer) {
        throw new Exception('Alle Pflichtfelder (Maschine, Hersteller) müssen ausgefüllt sein.');
    }

    $db->beginTransaction();

    $stmt = $db->prepare("
        INSERT INTO manufacturers (machine, manufacturer, contact_person, phone, notes, links, created_by, created_at, last_modified_by, last_modified_at)
        VALUES (:machine, :manufacturer, :contact_person, :phone, :notes, :links, :created_by, NOW(), :created_by, NOW())
    ");
    $stmt->execute([
        ':machine' => $machine,
        ':manufacturer' => $manufacturer,
        ':contact_person' => $contact_person,
        ':phone' => $phone,
        ':notes' => $notes,
        ':links' => $links,
        ':created_by' => $created_by
    ]);

    $manufacturer_id = $db->lastInsertId();

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
                    $stmt = $db->prepare("INSERT INTO manufacturer_files (manufacturer_id, file_path, file_type, description) VALUES (?, ?, 'image', ?)");
                    $stmt->execute([$manufacturer_id, $imagePath, $description ?: null]);
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
                    $stmt = $db->prepare("INSERT INTO manufacturer_files (manufacturer_id, file_path, file_type, description) VALUES (?, ?, 'pdf', ?)");
                    $stmt->execute([$manufacturer_id, $pdfPath, $description ?: null]);
                } else {
                    throw new Exception("Fehler beim Hochladen der PDF-Datei '$fileName'. Zielpfad: $fullPath");
                }
            } elseif ($pdfs['error'][$i] !== UPLOAD_ERR_NO_FILE) {
                throw new Exception("Fehler beim Hochladen der PDF-Datei '$fileName'. Fehlercode: " . $pdfs['error'][$i]);
            }
        }
    }

    $db->commit();
    ob_end_clean();
    echo json_encode(['success' => true, 'data' => ['id' => $manufacturer_id, 'machine' => $machine, 'manufacturer' => $manufacturer]]);
} catch (Exception $e) {
    if ($db->inTransaction()) {
        $db->rollBack();
    }
    ob_end_clean();
    echo json_encode(['success' => false, 'error' => $e->getMessage()]);
}