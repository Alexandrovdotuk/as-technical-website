<?php
header('Content-Type: application/json');

require_once 'db_connect.php';
require_once 'auth.php';
require_once 'config.php';

try {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception('Ungültige Anfragemethode.');
    }

    // Prüfe, ob ein Benutzer eingeloggt ist
    if (!isset($_SESSION['selected_user']) || !array_key_exists($_SESSION['selected_user'], $users)) {
        error_log('Session-Fehler in save_event.php: selected_user nicht gesetzt oder ungültig. Session: ' . print_r($_SESSION, true));
        throw new Exception('Kein Benutzer eingeloggt oder ungültiger Benutzer.');
    }
    $created_by = $_SESSION['selected_user'];

    // Formulardaten abrufen
    $title = $_POST['title'] ?? '';
    $date = $_POST['date'] ?? '';
    $end_date = $_POST['end_date'] ?? null;
    $time = $_POST['time'] ?? '';
    $customer_id = !empty($_POST['customer_id']) ? $_POST['customer_id'] : null;
    $description = $_POST['description'] ?? '';

    // Validierung
    if (!$title || !$date || !$time) {
        throw new Exception('Alle Pflichtfelder (Titel, Datum, Uhrzeit) müssen ausgefüllt sein.');
    }

    if ($end_date && $end_date < $date) {
        throw new Exception('Das Enddatum darf nicht vor dem Startdatum liegen.');
    }

    // Termin in die Datenbank einfügen
    $stmt = $db->prepare("
        INSERT INTO calendar_events (title, date, end_date, time, customer_id, description, created_by, last_modified_by)
        VALUES (:title, :date, :end_date, :time, :customer_id, :description, :created_by, :created_by)
    ");
    $stmt->execute([
        ':title' => $title,
        ':date' => $date,
        ':end_date' => $end_date,
        ':time' => $time,
        ':customer_id' => $customer_id,
        ':description' => $description,
        ':created_by' => $created_by
    ]);

    echo json_encode(['success' => true]);
} catch (Exception $e) {
    echo json_encode(['success' => false, 'error' => $e->getMessage()]);
}
?>