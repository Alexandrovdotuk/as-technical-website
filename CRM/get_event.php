<?php
header('Content-Type: application/json');

// Datenbankverbindung einbinden
require_once 'db_connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    try {
        // Termin abrufen
        $stmt = $db->prepare("SELECT * FROM calendar_events WHERE id = ?");
        $stmt->execute([$id]);
        $event = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($event) {
            echo json_encode(['success' => true, 'data' => $event]);
        } else {
            echo json_encode(['success' => false, 'error' => 'Termin nicht gefunden']);
        }
    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'error' => 'Fehler beim Abrufen: ' . $e->getMessage()]);
    }
} else {
    echo json_encode(['success' => false, 'error' => 'Ungültige Anfrage']);
}
?>