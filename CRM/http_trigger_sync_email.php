<?php
ob_start();
header('Content-Type: application/json');

// Sicherheitstoken
// $expected_token = '94236870565c78c8ebd5580f3a8ee050a46ae05cbe7a9de27c7aa26ee069c214'; !!! Deaktiviert!!!
if (!isset($_GET['token']) || $_GET['token'] !== $expected_token) {
    ob_end_clean();
    http_response_code(403);
    echo json_encode(['success' => false, 'error' => 'Ungültiges Token']);
    exit;
}

try {
    require_once 'db_connect.php';
    require_once 'config.php';
    require_once 'sync_email.php';

    error_log('HTTP-Triggered Email Sync executed at ' . date('Y-m-d H:i:s'));
    ob_end_clean();
    echo json_encode(['success' => true, 'message' => 'E-Mail-Synchronisation ausgeführt']);
} catch (Exception $e) {
    error_log('Fehler beim HTTP-Trigger für E-Mail-Sync: ' . $e->getMessage());
    ob_end_clean();
    http_response_code(500);
    echo json_encode(['success' => false, 'error' => 'Interner Fehler: ' . $e->getMessage()]);
}
?>