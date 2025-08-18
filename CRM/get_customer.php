<?php
ob_start();
header('Content-Type: application/json; charset=utf-8');

// Fehlerprotokollierung aktivieren
ini_set('log_errors', 1);
ini_set('error_log', '/homepages/5/d4297798492/htdocs/AS2/CRM/php-error.log'); // Passe den Pfad an

try {
    // Debugging: Logge Start der Datei
    error_log('Starte get_customer.php für ID ' . ($_GET['id'] ?? 'unbekannt'));

    // Abhängigkeiten laden
    $required_files = ['session_config.php', 'auth.php', 'db_connect.php'];
    foreach ($required_files as $file) {
        $file_path = __DIR__ . '/' . $file;
        error_log('Versuche, Datei zu laden: ' . $file_path);
        if (!file_exists($file_path)) {
            throw new Exception("Fehlende Datei: $file_path");
        }
        require_once $file_path;
        error_log('Datei geladen: ' . $file_path);
    }

    // Authentifizierungsprüfung
    if (!function_exists('isAuthenticated')) {
        error_log('Authentifizierungsfunktion isAuthenticated nicht definiert. Überprüfe auth.php in ' . __DIR__);
        throw new Exception('Authentifizierungsfunktion isAuthenticated nicht verfügbar. Bitte überprüfe auth.php oder wende dich an den Administrator.');
    }
    error_log('isAuthenticated-Funktion gefunden. Prüfe Authentifizierung...');
    if (!isAuthenticated()) {
        ob_end_clean();
        http_response_code(401);
        echo json_encode(['success' => false, 'error' => 'Nicht authentifiziert. Bitte melde dich erneut an.']);
        exit;
    }
    error_log('Benutzer authentifiziert für ID ' . ($_GET['id'] ?? 'unbekannt'));

    // Eingabe validieren
    if (!isset($_GET['id']) || !is_numeric($_GET['id']) || $_GET['id'] <= 0) {
        throw new Exception('Ungültige oder fehlende Kunden-ID: ' . ($_GET['id'] ?? 'nicht gesetzt'));
    }
    $id = (int) $_GET['id'];

    // Datenbankverbindung prüfen
    if (!isset($db) || !($db instanceof PDO)) {
        throw new Exception('Datenbankverbindung nicht verfügbar');
    }

    // Kundeninformationen abrufen
    $stmtCustomer = $db->prepare("
        SELECT id, customer_id, company, name, first_name, role, street, zip_code, city, country,
               industry, phone, mobile, email, website, contact_person, notes, notes_2, next_step,
               created_by, created_at, last_modified_by, last_modified_at
        FROM customers
        WHERE id = :id
    ");
    if (!$stmtCustomer) {
        throw new Exception('Fehler beim Vorbereiten der Kundenabfrage');
    }
    $stmtCustomer->execute([':id' => $id]);
    $customer = $stmtCustomer->fetch(PDO::FETCH_ASSOC);

    if (!$customer) {
        throw new Exception("Kunde mit ID $id nicht gefunden");
    }

    // Datenstruktur initialisieren
    $data = [
        'id' => (int) $customer['id'],
        'customer_id' => $customer['customer_id'] ?? '',
        'company' => $customer['company'] ?? '',
        'name' => $customer['name'] ?? '',
        'first_name' => $customer['first_name'] ?? '',
        'role' => $customer['role'] ?? '',
        'street' => $customer['street'] ?? '',
        'zip_code' => $customer['zip_code'] ?? '',
        'city' => $customer['city'] ?? '',
        'country' => $customer['country'] ?? '',
        'industry' => $customer['industry'] ?? '',
        'phone' => $customer['phone'] ?? '',
        'mobile' => $customer['mobile'] ?? '',
        'email' => $customer['email'] ?? '',
        'website' => $customer['website'] ?? '',
        'contact_person' => $customer['contact_person'] ?? '',
        'notes' => $customer['notes'] ?? '',
        'notes_2' => $customer['notes_2'] ?? '',
        'next_step' => $customer['next_step'] ?? '',
        'created_by' => $customer['created_by'] ?? '',
        'created_at' => $customer['created_at'] ?? '',
        'last_modified_by' => $customer['last_modified_by'] ?? '',
        'last_modified_at' => $customer['last_modified_at'] ?? '',
        'files' => [],
        'interests' => []
    ];

    // Zugehörige Dateien abrufen
    $stmtFiles = $db->prepare("
        SELECT file_path, file_type, description 
        FROM customer_files 
        WHERE customer_id = :customer_id
    ");
    if (!$stmtFiles) {
        throw new Exception('Fehler beim Vorbereiten der Dateiabfrage');
    }
    $stmtFiles->execute([':customer_id' => $id]);
    $data['files'] = $stmtFiles->fetchAll(PDO::FETCH_ASSOC) ?: [];

    // Zugehörige Interessen abrufen
    $stmtInterests = $db->prepare("
        SELECT m.id, m.machine, m.manufacturer
        FROM customer_interests ci
        JOIN manufacturers m ON ci.manufacturer_id = m.id
        WHERE ci.customer_id = :customer_id
    ");
    if (!$stmtInterests) {
        throw new Exception('Fehler beim Vorbereiten der Interessenabfrage');
    }
    $stmtInterests->execute([':customer_id' => $id]);
    $data['interests'] = $stmtInterests->fetchAll(PDO::FETCH_ASSOC) ?: [];

    // Debugging-Log
    error_log("Erfolgreich Kundendaten für ID $id geladen: " . json_encode(array_keys($data)));

    ob_end_clean();
    echo json_encode(['success' => true, 'data' => $data]);
} catch (Exception $e) {
    $errorMessage = 'Fehler beim Abrufen der Kundendaten: ' . $e->getMessage();
    error_log($errorMessage . ' für ID ' . ($_GET['id'] ?? 'unbekannt') . ' in ' . __FILE__ . ' Zeile ' . $e->getLine());
    ob_end_clean();
    http_response_code(500);
    echo json_encode(['success' => false, 'error' => $errorMessage]);
} catch (Error $e) {
    $errorMessage = 'Kritischer Fehler: ' . $e->getMessage();
    error_log($errorMessage . ' für ID ' . ($_GET['id'] ?? 'unbekannt') . ' in ' . __FILE__ . ' Zeile ' . $e->getLine());
    ob_end_clean();
    http_response_code(500);
    echo json_encode(['success' => false, 'error' => $errorMessage]);
}
?>