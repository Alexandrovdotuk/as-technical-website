<?php
// Entferne auth.php, da http_trigger_sync_icloud.php bereits durch Token geschützt ist
require_once 'db_connect.php';

// iCloud-Kalender-URLs für die drei Benutzer (ersetze diese mit den tatsächlichen URLs)
$icalUrls = [
    'Alexander Alexandrov' => 'webcal://p162-caldav.icloud.com/published/2/NTE1MDcxMDc4NTE1MDcxMOoTJKaB1U46a-k4tuM-9PqsbPMdxaeQyZyk2Oa2txJb',
    'Robert Kutschke' => 'webcal://p135-caldav.icloud.com/published/2/MTA5MDAwMTEzNTExMDkwMGzcBsXL-FnJT9hWXEXTpa0IrHMN9c9ugKAU_K7jMFNsHsZIsja470BEYJmt4X0nJ9xudhxSHwOOxXKM9kgGlJs',
    'Eugen Schütz' => 'webcal://p56-caldav.icloud.com/published/2/MTg0NTM4MTM5NzcxODQ1M8b8vZdLpMISEW-pwzdnWGAAIpOgjuVrCL1Dgqpkt9EZnGjRmXJ0EmC6JmUQk9FQrhdw7hA0Dt5ofdaPVKns8kU'
];

// Funktion zum Abrufen der .ics-Datei
function fetchIcalData($url) {
    $url = str_replace('webcal://', 'https://', $url); // Ersetze webcal:// durch https://
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}

// Funktion zum Parsen der .ics-Daten
function parseIcalData($icalData) {
    $events = [];
    $lines = explode("\n", $icalData);
    $event = null;

    foreach ($lines as $line) {
        $line = trim($line);
        if ($line === 'BEGIN:VEVENT') {
            $event = [];
        } elseif ($line === 'END:VEVENT') {
            if ($event) {
                // Nur Termine mit einem Startdatum hinzufügen
                if (isset($event['start_date'])) {
                    $events[] = $event;
                }
            }
        } elseif ($event !== null) {
            $parts = explode(':', $line, 2);
            if (count($parts) === 2) {
                $key = $parts[0];
                $value = $parts[1];
                if (strpos($key, 'DTSTART') === 0) {
                    $event['start_date'] = date('Y-m-d', strtotime($value));
                    $event['start_time'] = date('H:i', strtotime($value));
                } elseif (strpos($key, 'DTEND') === 0) {
                    $event['end_date'] = date('Y-m-d', strtotime($value));
                } elseif ($key === 'SUMMARY') {
                    $event['title'] = $value;
                } elseif ($key === 'DESCRIPTION') {
                    $event['description'] = $value;
                } elseif ($key === 'UID') {
                    $event['uid'] = $value;
                }
            }
        }
    }

    return $events;
}

// Funktion zum Einfügen eines Termins in die CRM-Datenbank
function insertEventIntoCRM($db, $event, $createdBy) {
    // Überprüfe, ob der Termin bereits existiert (basierend auf UID)
    $stmt = $db->prepare("SELECT id FROM calendar_events WHERE uid = :uid");
    $stmt->execute(['uid' => $event['uid']]);
    if ($stmt->fetch()) {
        return false; // Termin existiert bereits, überspringe
    }

    // Sicherstellen, dass alle erforderlichen Felder gesetzt sind
    if (!isset($event['start_date']) || empty($event['start_date'])) {
        return false; // Kein Startdatum, überspringe
    }

    // Füge den neuen Termin ein
    $stmt = $db->prepare("
        INSERT INTO calendar_events (
            title, date, end_date, time, description, created_by, created_at, last_modified_by, last_modified_at, uid
        ) VALUES (
            :title, :date, :end_date, :time, :description, :created_by, NOW(), :last_modified_by, NOW(), :uid
        )
    ");
    $stmt->execute([
        'title' => $event['title'] ?? 'Unbekannter Termin',
        'date' => $event['start_date'],
        'end_date' => $event['end_date'] ?? null,
        'time' => $event['start_time'] ?? '00:00',
        'description' => $event['description'] ?? '',
        'created_by' => $createdBy,
        'last_modified_by' => $createdBy,
        'uid' => $event['uid']
    ]);
    return true;
}

// Hauptlogik
header('Content-Type: application/json');
$response = ['success' => false, 'message' => '', 'skipped' => 0, 'added' => 0];

try {
    $newEventsCount = 0;
    $skippedEventsCount = 0;

    // Synchronisiere die Kalender für jeden Benutzer
    foreach ($icalUrls as $user => $url) {
        $icalData = fetchIcalData($url);
        if ($icalData) {
            $events = parseIcalData($icalData);
            foreach ($events as $event) {
                if (insertEventIntoCRM($db, $event, $user)) {
                    $newEventsCount++;
                } else {
                    $skippedEventsCount++;
                }
            }
        } else {
            $response['message'] .= "Fehler beim Abrufen der iCloud-Daten für $user. ";
        }
    }

    if ($response['message'] === '') {
        $response['success'] = true;
        $response['message'] = "Synchronisation abgeschlossen. $newEventsCount neue Termine hinzugefügt.";
    }
    $response['skipped'] = $skippedEventsCount;
    $response['added'] = $newEventsCount;
} catch (Exception $e) {
    $response['message'] = "Fehler bei der Synchronisation: " . $e->getMessage();
}

echo json_encode($response);
?>