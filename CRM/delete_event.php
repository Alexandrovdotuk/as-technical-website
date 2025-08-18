<?php
header('Content-Type: application/json');

require_once 'db_connect.php';
require_once 'auth.php';

try {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception('Ungültige Anfragemethode.');
    }

    $input = json_decode(file_get_contents('php://input'), true);
    $event_id = $input['id'] ?? '';

    if (!$event_id) {
        throw new Exception('Termin-ID fehlt.');
    }

    $db->beginTransaction();

    $stmt = $db->prepare("DELETE FROM calendar_events WHERE id = ?");
    $stmt->execute([$event_id]);

    $db->commit();
    echo json_encode(['success' => true]);
} catch (Exception $e) {
    if ($db->inTransaction()) {
        $db->rollBack();
    }
    echo json_encode(['success' => false, 'error' => $e->getMessage()]);
}
?>