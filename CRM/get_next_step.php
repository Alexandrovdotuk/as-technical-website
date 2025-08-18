<?php
ob_start();
header('Content-Type: application/json');
require_once 'session_config.php';
session_start();
require_once 'auth.php';
require_once 'db_connect.php';

try {
    if (!isset($_GET['customer_id']) || !is_numeric($_GET['customer_id'])) {
        throw new Exception('Ungültige Kunden-ID');
    }

    $customer_id = (int)$_GET['customer_id'];
    $stmt = $db->prepare("
        SELECT id, customer_id, description, due_date, created_by, notified_users
        FROM next_steps
        WHERE customer_id = :customer_id
    ");
    $stmt->execute(['customer_id' => $customer_id]);
    $next_step = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($next_step) {
        $next_step['due_date'] = $next_step['due_date'] ? (new DateTime($next_step['due_date']))->format('Y-m-d H:i:s') : null;
        $next_step['notified_users'] = json_decode($next_step['notified_users'] ?? '[]', true);
        ob_end_clean();
        echo json_encode(['success' => true, 'data' => $next_step]);
    } else {
        ob_end_clean();
        echo json_encode(['success' => true, 'data' => []]);
    }
} catch (Exception $e) {
    ob_end_clean();
    echo json_encode(['success' => false, 'error' => $e->getMessage()]);
}
?>
