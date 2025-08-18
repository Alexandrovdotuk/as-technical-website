<?php
require_once 'db_connect.php';
require_once 'auth.php';

header('Content-Type: application/json');

try {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception('Ungültige Anfragemethode.');
    }

    $input = json_decode(file_get_contents('php://input'), true);
    $offer_ids = $input['ids'] ?? []; // Erwartet ein Array von IDs

    if (empty($offer_ids)) {
        throw new Exception('Keine Angebots-IDs angegeben.');
    }

    $db->beginTransaction();

    foreach ($offer_ids as $offer_id) {
        // Dateipfade abrufen, um sie vom Server zu löschen
        $stmt = $db->prepare("SELECT file_path FROM offer_files WHERE offer_id = ?");
        $stmt->execute([$offer_id]);
        $files = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Dateien vom Server löschen
        foreach ($files as $file) {
            if (file_exists($file['file_path'])) {
                unlink($file['file_path']);
            }
        }

        // Dateieinträge aus der Datenbank löschen
        $stmt = $db->prepare("DELETE FROM offer_files WHERE offer_id = ?");
        $stmt->execute([$offer_id]);

        // Angebot löschen
        $stmt = $db->prepare("DELETE FROM offers WHERE id = ?");
        $stmt->execute([$offer_id]);
    }

    $db->commit();
    echo json_encode(['success' => true]);
} catch (Exception $e) {
    if ($db->inTransaction()) {
        $db->rollBack();
    }
    echo json_encode(['success' => false, 'error' => $e->getMessage()]);
}
?>