<?php
header('Content-Type: application/json');

// Datenbankverbindung einbinden
require_once 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);
    $ids = $input['ids'] ?? [];

    if (empty($ids)) {
        echo json_encode(['success' => false, 'error' => 'Keine IDs angegeben']);
        exit;
    }

    try {
        $db->beginTransaction();

        // Platzhalter für die IDs erstellen
        $placeholders = implode(',', array_fill(0, count($ids), '?'));

        // Lösche zugehörige Dateien
        $stmtFiles = $db->prepare("SELECT file_path FROM customer_files WHERE customer_id IN ($placeholders)");
        $stmtFiles->execute($ids);
        $files = $stmtFiles->fetchAll(PDO::FETCH_ASSOC);

        foreach ($files as $file) {
            $fullPath = __DIR__ . $file['file_path'];
            if (file_exists($fullPath) && is_writable($fullPath)) {
                unlink($fullPath);
            }
        }

        $stmtFiles = $db->prepare("DELETE FROM customer_files WHERE customer_id IN ($placeholders)");
        $stmtFiles->execute($ids);

        // Lösche die Kunden
        $stmt = $db->prepare("DELETE FROM customers WHERE id IN ($placeholders)");
        $stmt->execute($ids);

        $db->commit();
        echo json_encode(['success' => true]);
    } catch (PDOException $e) {
        $db->rollBack();
        echo json_encode(['success' => false, 'error' => $e->getMessage()]);
    }
} else {
    echo json_encode(['success' => false, 'error' => 'Ungültige Anfrage']);
}
?>