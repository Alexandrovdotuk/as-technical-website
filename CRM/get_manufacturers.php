<?php
ob_start();
header('Content-Type: application/json');
require_once 'db_connect.php';
require_once 'auth.php';

try {
    $stmt = $db->query("SELECT id, machine, manufacturer FROM manufacturers ORDER BY machine");
    $manufacturers = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ob_end_clean();
    echo json_encode(['success' => true, 'data' => $manufacturers]);
} catch (Exception $e) {
    ob_end_clean();
    error_log('Get Manufacturers Error: ' . $e->getMessage());
    http_response_code(500);
    echo json_encode(['success' => false, 'error' => $e->getMessage()]);
}
?>
