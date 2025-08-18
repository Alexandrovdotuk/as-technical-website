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

    $id = isset($_POST['id']) ? (int) $_POST['id'] : 0;
    if ($id <= 0) {
        throw new Exception('Ungültige Kunden-ID');
    }

    $last_modified_by = $_SESSION['selected_user'];
    $next_step = trim($_POST['next_step'] ?? '');
    $due_date = !empty($_POST['due_date']) ? (new DateTime($_POST['due_date']))->format('Y-m-d H:i:s') : null;
    $notified_users = isset($_POST['notified_users']) && is_array($_POST['notified_users']) ? array_filter($_POST['notified_users'], function ($user) use ($users) {
        return array_key_exists($user, $users);
    }) : [];

    $db->beginTransaction();

    // Kunde aktualisieren
    $stmt = $db->prepare("
        UPDATE customers SET
            customer_id = :customer_id,
            company = :company,
            name = :name,
            first_name = :first_name,
            role = :role,
            street = :street,
            zip_code = :zip_code,
            city = :city,
            country = :country,
            industry = :industry,
            phone = :phone,
            mobile = :mobile,
            email = :email,
            website = :website,
            contact_person = :contact_person,
            notes = :notes,
            notes_2 = :notes_2,
            next_step = :next_step,
            last_modified_by = :last_modified_by,
            last_modified_at = NOW()
        WHERE id = :id
    ");
    $stmt->execute([
        ':id' => $id,
        ':customer_id' => trim($_POST['customer_id'] ?? '') ?: null,
        ':company' => trim($_POST['company'] ?? ''),
        ':name' => trim($_POST['name'] ?? ''),
        ':first_name' => trim($_POST['first_name'] ?? ''),
        ':role' => trim($_POST['role'] ?? ''),
        ':street' => trim($_POST['street'] ?? ''),
        ':zip_code' => trim($_POST['zip_code'] ?? ''),
        ':city' => trim($_POST['city'] ?? ''),
        ':country' => trim($_POST['country'] ?? ''),
        ':industry' => trim($_POST['industry'] ?? ''),
        ':phone' => trim($_POST['phone'] ?? ''),
        ':mobile' => trim($_POST['mobile'] ?? ''),
        ':email' => trim($_POST['email'] ?? ''),
        ':website' => trim($_POST['website'] ?? ''),
        ':contact_person' => trim($_POST['contact_person'] ?? ''),
        ':notes' => trim($_POST['notes'] ?? ''),
        ':notes_2' => trim($_POST['notes_2'] ?? ''),
        ':next_step' => $next_step,
        ':last_modified_by' => $last_modified_by
    ]);

    // Next Step aktualisieren
    $stmt = $db->prepare("SELECT id FROM next_steps WHERE customer_id = :customer_id");
    $stmt->execute(['customer_id' => $id]);
    $existing = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($next_step || $due_date) {
        if ($existing) {
            // Update bestehenden Termin
            $stmt = $db->prepare("
                UPDATE next_steps SET
                    description = :description,
                    due_date = :due_date,
                    notified_users = :notified_users,
                    is_notified = FALSE
                WHERE customer_id = :customer_id
            ");
            $stmt->execute([
                ':customer_id' => $id,
                ':description' => $next_step,
                ':due_date' => $due_date,
                ':notified_users' => json_encode($notified_users)
            ]);
        } else {
            // Neuen Termin erstellen
            $stmt = $db->prepare("
                INSERT INTO next_steps (
                    customer_id, description, due_date, created_by, notified_users
                ) VALUES (
                    :customer_id, :description, :due_date, :created_by, :notified_users
                )
            ");
            $stmt->execute([
                ':customer_id' => $id,
                ':description' => $next_step,
                ':due_date' => $due_date,
                ':created_by' => $last_modified_by,
                ':notified_users' => json_encode($notified_users)
            ]);
        }
    } else if ($existing) {
        // Lösche Termin, wenn kein Next Step oder Datum
        $stmt = $db->prepare("DELETE FROM next_steps WHERE customer_id = :customer_id");
        $stmt->execute(['customer_id' => $id]);
    }

    // Dateien verarbeiten
    $files_to_delete = isset($_POST['files_to_delete']) ? json_decode($_POST['files_to_delete'], true) : [];
    if (!is_array($files_to_delete)) {
        throw new Exception('Ungültiges Datei-Löschformat');
    }

    foreach ($files_to_delete as $file_path) {
        $file_path = trim($file_path);
        if ($file_path) {
            $stmt = $db->prepare("DELETE FROM customer_files WHERE customer_id = :customer_id AND file_path = :file_path");
            $stmt->execute(['customer_id' => $id, 'file_path' => $file_path]);
            $absolute_path = '/homepages/5/d4297798492/htdocs/AS2' . $file_path;
            if (file_exists($absolute_path)) {
                unlink($absolute_path);
            }
        }
    }

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
                        ':customer_id' => $id,
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
                        ':customer_id' => $id,
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

    // Bestehende Beschreibungen aktualisieren
    if (isset($_POST['existing_image_descriptions'])) {
        foreach ($_POST['existing_image_descriptions'] as $file_path => $description) {
            $description = trim($description);
            $stmt = $db->prepare("
                UPDATE customer_files
                SET description = :description
                WHERE customer_id = :customer_id AND file_path = :file_path AND file_type = 'image'
            ");
            $stmt->execute([
                ':customer_id' => $id,
                ':file_path' => $file_path,
                ':description' => $description
            ]);
        }
    }

    if (isset($_POST['existing_pdf_descriptions'])) {
        foreach ($_POST['existing_pdf_descriptions'] as $file_path => $description) {
            $description = trim($description);
            $stmt = $db->prepare("
                UPDATE customer_files
                SET description = :description
                WHERE customer_id = :customer_id AND file_path = :file_path AND (file_type = 'pdf' OR file_type = 'email_attachment')
            ");
            $stmt->execute([
                ':customer_id' => $id,
                ':file_path' => $file_path,
                ':description' => $description
            ]);
        }
    }

    // Interessen aktualisieren
    $interests = $_POST['interests'] ?? [];
    $existingInterests = [];
    $newInterests = [];

    foreach ($interests as $interest) {
        if (is_numeric($interest)) {
            $existingInterests[] = (int) $interest;
        } elseif (strpos($interest, 'new:') === 0) {
            $newMachineName = substr($interest, 4);
            $stmt = $db->prepare("INSERT INTO manufacturers (machine, manufacturer) VALUES (:machine, NULL)");
            $stmt->execute([':machine' => $newMachineName]);
            $newMachineId = $db->lastInsertId();
            $existingInterests[] = $newMachineId;
        }
    }

    $stmt = $db->prepare("DELETE FROM customer_interests WHERE customer_id = :customer_id");
    $stmt->execute(['customer_id' => $id]);

    if (!empty($existingInterests)) {
        $stmt = $db->prepare("INSERT INTO customer_interests (customer_id, manufacturer_id) VALUES (:customer_id, :manufacturer_id)");
        foreach ($existingInterests as $manufacturer_id) {
            $stmt->execute([
                ':customer_id' => $id,
                ':manufacturer_id' => $manufacturer_id
            ]);
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