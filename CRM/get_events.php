<?php
header('Content-Type: application/json');

// Datenbankverbindung einbinden
require_once 'db_connect.php';
require_once 'auth.php'; // Authentifizierung, um sicherzustellen, dass nur eingeloggte Benutzer Zugriff haben

try {
    // Alle Termine abrufen
    $stmt = $db->query("SELECT ce.*, c.name AS customer_name, c.company AS customer_company 
                        FROM calendar_events ce 
                        LEFT JOIN customers c ON ce.customer_id = c.id");
    $events = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode(['success' => true, 'events' => $events]);
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'error' => 'Fehler beim Abrufen: ' . $e->getMessage()]);
}
