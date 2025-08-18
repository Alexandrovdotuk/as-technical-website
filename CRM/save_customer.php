<?php
ob_start();
header('Content-Type: application/json');
require_once 'session_config.php';
session_start();
require_once 'auth.php';
require_once 'db_connect.php';
require_once 'config.php';

try {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception('Ungültige Anfrage');
    }

    if (!isset($_SESSION['selected_user']) || !array_key_exists($_SESSION['selected_user'], $users)) {
        throw new Exception('Kein Benutzer eingeloggt oder ungültiger Benutzer.');
    }

    $created_by = $_SESSION['selected_user'];
    $company = trim($_POST['company'] ?? '');
    $country = trim($_POST['country'] ?? '');
    $next_step = trim($_POST['next_step'] ?? '');
    $due_date = !empty($_POST['due_date']) ? (new DateTime($_POST['due_date']))->format('Y-m-d H:i:s') : null;
    $notified_users = isset($_POST['notified_users']) && is_array($_POST['notified_users']) ? array_filter($_POST['notified_users'], function ($user) use ($users) {
        return array_key_exists($user, $users);
    }) : [];

    if (!$company || !$country) {
        throw new Exception('Pflichtfelder "Firma" und "Land" müssen ausgefüllt sein.');
    }

    $db->beginTransaction();

    // Kunde speichern
    $stmt = $db->prepare("
        INSERT INTO customers (
            customer_id, company, name, first_name, role, street, zip_code, city, country,
            industry, phone, mobile, email, website, contact_person, notes, notes_2, next_step,
            created_by, created_at, last_modified_by, last_modified_at
        ) VALUES (
            :customer_id, :company, :name, :first_name, :role, :street, :zip_code, :city, :country,
            :industry, :phone, :mobile, :email, :website, :contact_person, :notes, :notes_2, :next_step,
            :created_by, NOW(), :last_modified_by, NOW()
        )
    ");
    $stmt->execute([
        ':customer_id' => trim($_POST['customer_id'] ?? '') ?: null,
        ':company' => $company,
        ':name' => trim($_POST['name'] ?? ''),
        ':first_name' => trim($_POST['first_name'] ?? ''),
        ':role' => trim($_POST['role'] ?? ''),
        ':street' => trim($_POST['street'] ?? ''),
        ':zip_code' => trim($_POST['zip_code'] ?? ''),
        ':city' => trim($_POST['city'] ?? ''),
        ':country' => $country,
        ':industry' => trim($_POST['industry'] ?? ''),
        ':phone' => trim($_POST['phone'] ?? ''),
        ':mobile' => trim($_POST['mobile'] ?? ''),
        ':email' => trim($_POST['email'] ?? ''),
        ':website' => trim($_POST['website'] ?? ''),
        ':contact_person' => trim($_POST['contact_person'] ?? ''),
        ':notes' => trim($_POST['notes'] ?? ''),
        ':notes_2' => trim($_POST['notes_2'] ?? ''),
        ':next_step' => $next_step,
        ':created_by' => $created_by,
        ':last_modified_by' => $created_by
    ]);
    $customer_id = $db->lastInsertId();

    // Next Step speichern
    if ($next_step || $due_date) {
        $stmt = $db->prepare("
            INSERT INTO next_steps (
                customer_id, description, due_date, created_by, notified_users
            ) VALUES (
                :customer_id, :description, :due_date, :created_by, :notified_users
            )
        ");
        $stmt->execute([
            ':customer_id' => $customer_id,
            ':description' => $next_step,
            ':due_date' => $due_date,
            ':created_by' => $created_by,
            ':notified_users' => json_encode($notified_users)
        ]);
    }

    // Dateien speichern (Bilder und PDFs)
    $upload_dir = $_SERVER['DOCUMENT_ROOT'] . dirname($_SERVER['PHP_SELF']) . '/uploads/';
    if (!file_exists($upload_dir)) {
        mkdir($upload_dir, 0755, true);
    }

    $allowed_image_types = ['image/jpeg', 'image/png', 'image/gif'];
    $allowed_pdf_types = ['application/pdf'];
    $max_size = 64 * 1024 * 1024; // 64MB

    $file_stmt = $db->prepare("
        INSERT INTO customer_files (
            customer_id, file_path, file_type, description
        ) VALUES (
            :customer_id, :file_path, :file_type, :description
        )
    ");

    if (!empty($_FILES['images']['name'][0])) {
        foreach ($_FILES['images']['name'] as $key => $name) {
            if ($_FILES['images']['error'][$key] === UPLOAD_ERR_OK) {
                $tmp_name = $_FILES['images']['tmp_name'][$key];
                $file_type = $_FILES['images']['type'][$key];
                $file_size = $_FILES['images']['size'][$key];
                $description = trim($_POST['image_descriptions'][$key] ?? '');

                if (!in_array($file_type, $allowed_image_types)) {
                    throw new Exception('Ungültiger Bildtyp: ' . $name);
                }
                if ($file_size > $max_size) {
                    throw new Exception('Bild zu groß: ' . $name);
                }

                $ext = pathinfo($name, PATHINFO_EXTENSION);
                $filename = uniqid('img_') . '.' . $ext;
                $dest_path = $upload_dir . $filename;

                if (move_uploaded_file($tmp_name, $dest_path)) {
                    $file_stmt->execute([
                        ':customer_id' => $customer_id,
                        ':file_path' => BASE_PATH . 'uploads/' . $filename,
                        ':file_type' => 'image',
                        ':description' => $description
                    ]);
                } else {
                    throw new Exception('Fehler beim Hochladen des Bildes: ' . $name);
                }
            }
        }
    }

    if (!empty($_FILES['pdfs']['name'][0])) {
        foreach ($_FILES['pdfs']['name'] as $key => $name) {
            if ($_FILES['pdfs']['error'][$key] === UPLOAD_ERR_OK) {
                $tmp_name = $_FILES['pdfs']['tmp_name'][$key];
                $file_type = $_FILES['pdfs']['type'][$key];
                $file_size = $_FILES['pdfs']['size'][$key];
                $description = trim($_POST['pdf_descriptions'][$key] ?? '');

                if (!in_array($file_type, $allowed_pdf_types)) {
                    throw new Exception('Ungültiger PDF-Typ: ' . $name);
                }
                if ($file_size > $max_size) {
                    throw new Exception('PDF zu groß: ' . $name);
                }

                $ext = pathinfo($name, PATHINFO_EXTENSION);
                $filename = uniqid('pdf_') . '.' . $ext;
                $dest_path = $upload_dir . $filename;

                if (move_uploaded_file($tmp_name, $dest_path)) {
                    $file_stmt->execute([
                        ':customer_id' => $customer_id,
                        ':file_path' => BASE_PATH . 'uploads/' . $filename,
                        ':file_type' => 'pdf',
                        ':description' => $description
                    ]);
                } else {
                    throw new Exception('Fehler beim Hochladen des PDFs: ' . $name);
                }
            }
        }
    }

    // Interessen speichern
    if (isset($_POST['interests']) && is_array($_POST['interests'])) {
        $stmt = $db->prepare("INSERT INTO customer_interests (customer_id, manufacturer_id, original_machine) VALUES (:customer_id, :manufacturer_id, (SELECT machine FROM manufacturers WHERE id = :manufacturer_id))");
        foreach ($_POST['interests'] as $manufacturer_id) {
            if (is_numeric($manufacturer_id)) {
                $stmt->execute([
                    ':customer_id' => $customer_id,
                    ':manufacturer_id' => (int) $manufacturer_id
                ]);
            }
        }
    }

    $db->commit();
    ob_end_clean();
    echo json_encode(['success' => true]);
} catch (Exception $e) {
    if ($db->inTransaction()) {
        $db->rollBack();
    }
    ob_end_clean();
    echo json_encode(['success' => false, 'error' => $e->getMessage()]);
}