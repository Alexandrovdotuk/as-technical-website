<?php
ob_start(); // Startet Output Buffering
header('Content-Type: application/json');
require_once 'auth.php';
require_once 'db_connect.php';
require_once 'config.php';
require_once 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    ob_end_clean();
    echo json_encode(['success' => false, 'error' => 'Ungültige Anfrage']);
    exit;
}

if (!isset($_FILES['excel_file']) || $_FILES['excel_file']['error'] !== UPLOAD_ERR_OK) {
    ob_end_clean();
    echo json_encode(['success' => false, 'error' => 'Keine gültige Datei hochgeladen']);
    exit;
}

try {
    // Prüfe, ob ein Benutzer eingeloggt ist
    if (!isset($_SESSION['selected_user']) || !array_key_exists($_SESSION['selected_user'], $users)) {
        error_log('Session-Fehler in import_customer_excel.php: selected_user nicht gesetzt oder ungültig. Session: ' . print_r($_SESSION, true));
        throw new Exception('Kein Benutzer eingeloggt oder ungültiger Benutzer.');
    }
    $created_by = $_SESSION['selected_user'];

    $db->beginTransaction();

    // Excel-Datei laden
    $file = $_FILES['excel_file']['tmp_name'];
    $spreadsheet = IOFactory::load($file);
    $sheet = $spreadsheet->getActiveSheet();
    $data = $sheet->toArray();

    // Kopfzeilen aus der ersten Zeile extrahieren
    $headers = array_shift($data);
    error_log('Kopfzeilen: ' . print_r($headers, true)); // Loggt Kopfzeilen
    $headers = array_map('trim', array_map('strtolower', $headers));

    // Mögliche Spaltennamen (case-insensitive, flexible)
    $columnMap = [
        'customer_id' => ['kundennummer', 'customer_id', 'customer id'],
        'company' => ['firma', 'company'],
        'name' => ['name', 'kunde'],
        'first_name' => ['vorname', 'first_name', 'first name'],
        'role' => ['funktion', 'role'],
        'street' => ['straße', 'strasse', 'street'],
        'zip_code' => ['plz', 'zip_code', 'zip code', 'postleitzahl'],
        'city' => ['ort', 'city', 'stadt'],
        'country' => ['land', 'country'],
        'industry' => ['branche', 'industry'],
        'phone' => ['telefon', 'phone'],
        'mobile' => ['mobilnummer', 'mobile', 'mobil'],
        'email' => ['e-mail', 'email'],
        'website' => ['webseite', 'website', 'web'],
        'contact_person' => ['kontaktperson', 'contact_person', 'contact person'],
        'notes' => ['notizen', 'notes'],
        'notes_2' => ['notizen 2', 'notes 2', 'zusätzliche notizen']
    ];

    // Spaltenzuordnung erstellen
    $fieldMap = [];
    foreach ($headers as $index => $header) {
        foreach ($columnMap as $dbField => $aliases) {
            if (in_array($header, array_map('strtolower', $aliases))) {
                $fieldMap[$dbField] = $index;
                break;
            }
        }
    }

    // Pflichtfelder prüfen
    if (!isset($fieldMap['company']) || !isset($fieldMap['country'])) {
        throw new Exception('Pflichtfelder "Firma" und "Land" fehlen in der Kopfzeile');
    }

    // Daten verarbeiten
    $stmt = $db->prepare("
        INSERT INTO customers (
            customer_id, company, name, first_name, role, street, zip_code, city, 
            country, industry, phone, mobile, email, website, contact_person, notes, notes_2,
            created_by, created_at, last_modified_by, last_modified_at
        ) VALUES (
            :customer_id, :company, :name, :first_name, :role, :street, :zip_code, :city, 
            :country, :industry, :phone, :mobile, :email, :website, :contact_person, :notes, :notes_2,
            :created_by, NOW(), :last_modified_by, NOW()
        )
    ");

    foreach ($data as $row) {
        $company = trim($row[$fieldMap['company']] ?? '');
        $country = trim($row[$fieldMap['country']] ?? '');

        if (!$company || !$country) {
            continue; // Überspringe ungültige Zeilen
        }

        $params = [
            ':customer_id' => isset($fieldMap['customer_id']) ? (trim($row[$fieldMap['customer_id']] ?? '') ?: null) : null,
            ':company' => $company,
            ':name' => isset($fieldMap['name']) ? trim($row[$fieldMap['name']] ?? '') : '',
            ':first_name' => isset($fieldMap['first_name']) ? trim($row[$fieldMap['first_name']] ?? '') : '',
            ':role' => isset($fieldMap['role']) ? trim($row[$fieldMap['role']] ?? '') : '',
            ':street' => isset($fieldMap['street']) ? trim($row[$fieldMap['street']] ?? '') : '',
            ':zip_code' => isset($fieldMap['zip_code']) ? trim($row[$fieldMap['zip_code']] ?? '') : '',
            ':city' => isset($fieldMap['city']) ? trim($row[$fieldMap['city']] ?? '') : '',
            ':country' => $country,
            ':industry' => isset($fieldMap['industry']) ? trim($row[$fieldMap['industry']] ?? '') : '',
            ':phone' => isset($fieldMap['phone']) ? trim($row[$fieldMap['phone']] ?? '') : '',
            ':mobile' => isset($fieldMap['mobile']) ? trim($row[$fieldMap['mobile']] ?? '') : '',
            ':email' => isset($fieldMap['email']) ? trim($row[$fieldMap['email']] ?? '') : '',
            ':website' => isset($fieldMap['website']) ? trim($row[$fieldMap['website']] ?? '') : '',
            ':contact_person' => isset($fieldMap['contact_person']) ? trim($row[$fieldMap['contact_person']] ?? '') : '',
            ':notes' => isset($fieldMap['notes']) ? trim($row[$fieldMap['notes']] ?? '') : '',
            ':notes_2' => isset($fieldMap['notes_2']) ? trim($row[$fieldMap['notes_2']] ?? '') : '',
            ':created_by' => $created_by,
            ':last_modified_by' => $created_by
        ];

        $stmt->execute($params);
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
?>