<?php
ob_start();
header('Content-Type: application/json');
require_once 'db_connect.php';
require_once 'auth.php';

try {
    if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
        throw new Exception('Ungültige Angebots-ID');
    }

    $id = (int)$_GET['id'];
    $stmt = $db->prepare("
        SELECT o.*, c.name AS customer_name, c.customer_id AS customer_number, c.company AS customer_company,
               ns.description AS next_step, ns.due_date AS next_step_due_date, ns.notified_users AS next_step_notified_users
        FROM offers o
        LEFT JOIN customers c ON o.customer_id = c.id
        LEFT JOIN next_steps ns ON o.customer_id = ns.customer_id
        WHERE o.id = :id
    ");
    $stmt->execute(['id' => $id]);
    $offer = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($offer) {
        $data = [
            'id' => $offer['id'],
            'customer_id' => $offer['customer_id'],
            'customer_name' => $offer['customer_name'],
            'customer_number' => $offer['customer_number'],
            'customer_company' => $offer['customer_company'],
            'offer_number' => $offer['offer_number'],
            'manufacturer' => $offer['manufacturer'],
            'date' => $offer['date'],
            'product' => $offer['product'],
            'status' => $offer['status'],
            'notes' => $offer['notes'],
            'company' => $offer['company'],
            'created_by' => $offer['created_by'],
            'created_at' => $offer['created_at'],
            'last_modified_by' => $offer['last_modified_by'],
            'last_modified_at' => $offer['last_modified_at'],
            'next_step' => $offer['next_step'],
            'next_step_due_date' => $offer['next_step_due_date'],
            'next_step_notified_users' => json_decode($offer['next_step_notified_users'] ?? '[]', true)
        ];

        // Zugehörige Dateien abrufen
        $stmtFiles = $db->prepare("SELECT file_path, file_type, description FROM offer_files WHERE offer_id = :offer_id");
        $stmtFiles->execute(['offer_id' => $id]);
        $data['files'] = $stmtFiles->fetchAll(PDO::FETCH_ASSOC);

        ob_end_clean();
        echo json_encode(['success' => true, 'data' => $data]);
    } else {
        ob_end_clean();
        echo json_encode(['success' => false, 'error' => 'Angebot nicht gefunden']);
    }
} catch (Exception $e) {
    ob_end_clean();
    error_log('Get Offer Error for ID ' . ($_GET['id'] ?? 'unknown') . ': ' . $e->getMessage());
    http_response_code(500);
    echo json_encode(['success' => false, 'error' => $e->getMessage()]);
}
?>
