<?php
require_once 'auth.php';
require_once 'db_connect.php';

header('Content-Type: application/json');
$response = ['success' => false, 'data' => [], 'error' => ''];

try {
    if (!isset($_GET['customer_id'])) {
        throw new Exception('Kunden-ID fehlt');
    }

    $customerId = (int)$_GET['customer_id'];
    $stmt = $db->prepare("SELECT * FROM customer_emails WHERE customer_id = :customer_id ORDER BY sent_at DESC");
    $stmt->execute(['customer_id' => $customerId]);
    $emails = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Anhänge abrufen
    foreach ($emails as &$email) {
        $stmt = $db->prepare("SELECT file_path, description FROM customer_files WHERE customer_id = :customer_id AND email_id = :email_id AND file_type = 'email_attachment'");
        $stmt->execute(['customer_id' => $customerId, 'email_id' => $email['email_id']]);
        $email['attachments'] = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    $response['success'] = true;
    $response['data'] = $emails;
} catch (Exception $e) {
    $response['error'] = $e->getMessage();
}

echo json_encode($response);
?>
