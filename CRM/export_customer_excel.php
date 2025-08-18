<?php
ob_start(); // Startet Output Buffering
require_once 'session_config.php';
session_start();
require_once 'auth.php';
require_once 'db_connect.php';
require_once 'config.php';
require_once 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    ob_end_clean();
    http_response_code(400);
    echo json_encode(['success' => false, 'error' => 'Ungültige Anfrage']);
    exit;
}

try {
    // Prüfe, ob ein Benutzer eingeloggt ist
    if (!isset($_SESSION['selected_user']) || !array_key_exists($_SESSION['selected_user'], $users)) {
        throw new Exception('Kein Benutzer eingeloggt oder ungültiger Benutzer.');
    }

    $data = json_decode(file_get_contents('php://input'), true);
    if (!isset($data['ids']) || !is_array($data['ids'])) {
        throw new Exception('Keine gültigen Kunden-IDs übergeben.');
    }

    $ids = array_map('intval', $data['ids']);
    if (empty($ids)) {
        throw new Exception('Keine Kunden ausgewählt.');
    }

    // Hole Kundendaten
    $placeholders = implode(',', array_fill(0, count($ids), '?'));
    $stmt = $db->prepare("
        SELECT customer_id, company, name, first_name, role, street, zip_code, city,
               country, industry, phone, mobile, email, website, contact_person, notes, notes_2,
               next_step
        FROM customers
        WHERE id IN ($placeholders)
    ");
    $stmt->execute($ids);
    $customers = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (empty($customers)) {
        throw new Exception('Keine Kunden gefunden.');
    }

    // Erstelle Excel-Datei
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Kopfzeilen
    $headers = [
        'Kundennummer',
        'Firma',
        'Name',
        'Vorname',
        'Funktion',
        'Straße',
        'PLZ',
        'Ort',
        'Land',
        'Branche',
        'Telefon',
        'Mobilnummer',
        'E-Mail',
        'Webseite',
        'Kontaktperson',
        'Notizen',
        'Notizen 2',
        'Next Step'
    ];
    $col = 'A';
    foreach ($headers as $header) {
        $sheet->setCellValue($col . '1', $header);
        $sheet->getStyle($col . '1')->getFont()->setBold(true);
        $col++;
    }

    // Daten einfügen
    $rowNum = 2;
    foreach ($customers as $customer) {
        $sheet->setCellValue('A' . $rowNum, $customer['customer_id'] ?? '');
        $sheet->setCellValue('B' . $rowNum, $customer['company'] ?? '');
        $sheet->setCellValue('C' . $rowNum, $customer['name'] ?? '');
        $sheet->setCellValue('D' . $rowNum, $customer['first_name'] ?? '');
        $sheet->setCellValue('E' . $rowNum, $customer['role'] ?? '');
        $sheet->setCellValue('F' . $rowNum, $customer['street'] ?? '');
        $sheet->setCellValue('G' . $rowNum, $customer['zip_code'] ?? '');
        $sheet->setCellValue('H' . $rowNum, $customer['city'] ?? '');
        $sheet->setCellValue('I' . $rowNum, $customer['country'] ?? '');
        $sheet->setCellValue('J' . $rowNum, $customer['industry'] ?? '');
        $sheet->setCellValue('K' . $rowNum, $customer['phone'] ?? '');
        $sheet->setCellValue('L' . $rowNum, $customer['mobile'] ?? '');
        $sheet->setCellValue('M' . $rowNum, $customer['email'] ?? '');
        $sheet->setCellValue('N' . $rowNum, $customer['website'] ?? '');
        $sheet->setCellValue('O' . $rowNum, $customer['contact_person'] ?? '');
        $sheet->setCellValue('P' . $rowNum, $customer['notes'] ?? '');
        $sheet->setCellValue('Q' . $rowNum, $customer['notes_2'] ?? '');
        $sheet->setCellValue('R' . $rowNum, $customer['next_step'] ?? '');
        $rowNum++;
    }

    // Spaltenbreiten anpassen
    foreach (range('A', 'R') as $col) {
        $sheet->getColumnDimension($col)->setAutoSize(true);
    }

    // Datei speichern und ausgeben
    $writer = new Xlsx($spreadsheet);
    $filename = 'customers_export_' . date('Ymd_His') . '.xlsx';

    ob_end_clean();
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="' . $filename . '"');
    header('Cache-Control: max-age=0');
    $writer->save('php://output');
    exit;
} catch (Exception $e) {
    ob_end_clean();
    http_response_code(500);
    echo json_encode(['success' => false, 'error' => $e->getMessage()]);
    exit;
}
?>
