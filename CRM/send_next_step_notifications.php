<?php
require_once 'db_connect.php';
require_once 'config.php';

try {
    // Hole aktuelle Minute (z. B. 2025-06-07 18:50:00 bis 18:50:59)
    $current_minute_start = date('Y-m-d H:i:00');
    $current_minute_end = date('Y-m-d H:i:59');

    // Hole fällige Termine
    $stmt = $db->prepare("
        SELECT ns.id, ns.customer_id, ns.description, ns.due_date, ns.created_by, ns.notified_users, c.company
        FROM next_steps ns
        JOIN customers c ON ns.customer_id = c.id
        WHERE ns.due_date BETWEEN :start AND :end AND ns.is_notified = FALSE
    ");
    $stmt->execute(['start' => $current_minute_start, 'end' => $current_minute_end]);
    $due_events = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (empty($due_events)) {
        error_log('Keine fälligen Next Step-Termine in Minute: ' . $current_minute_start);
        return;
    }

    foreach ($due_events as $event) {
        // Benachrichtigte Benutzer aus notified_users oder Fallback auf created_by
        $notified_users = json_decode($event['notified_users'] ?? '[]', true);
        if (!is_array($notified_users)) {
            error_log('Ungültige notified_users für Termin ID ' . $event['id']);
            $notified_users = [];
        }
        if (empty($notified_users) && !empty($event['created_by'])) {
            $notified_users = [$event['created_by']];
        }
        if (empty($notified_users)) {
            error_log('Keine Benutzer für Benachrichtigung bei Termin ID ' . $event['id']);
            continue;
        }

        foreach ($notified_users as $user) {
            if (!isset($emailConfig[$user]) || empty($emailConfig[$user]['email'])) {
                error_log('Keine E-Mail-Konfiguration für Benutzer: ' . $user);
                continue;
            }

            // E-Mail vorbereiten
            $to = $emailConfig[$user]['email'];
            $subject = 'Fälliger Next Step: ' . htmlspecialchars($event['company']);
            $message = "
                <p>Hallo {$user},</p>
                <p>Ein Next Step ist jetzt fällig:</p>
                <ul>
                    <li><strong>Kunde:</strong> " . htmlspecialchars($event['company']) . "</li>
                    <li><strong>Beschreibung:</strong> " . htmlspecialchars($event['description']) . "</li>
                    <li><strong>Fälligkeitsdatum:</strong> " . (new DateTime($event['due_date']))->format('d.m.Y H:i') . "</li>
                </ul>
                <p>Bitte überprüfe dies in der CRM-Anwendung: <a href='https://www.as-technical.de/CRM/next_steps.php'>Next Steps</a></p>
            ";
            $headers = [
                'MIME-Version: 1.0',
                'Content-type: text/html; charset=utf-8',
                'From: no-reply@as-technical.de',
                'Reply-To: no-reply@as-technical.de'
            ];

            // E-Mail senden
            if (mail($to, $subject, $message, implode("\r\n", $headers))) {
                // Markiere als benachrichtigt
                $update_stmt = $db->prepare("UPDATE next_steps SET is_notified = TRUE WHERE id = :id");
                $update_stmt->execute(['id' => $event['id']]);
                error_log('E-Mail gesendet an ' . $to . ' für Termin ID ' . $event['id']);
            } else {
                error_log('Fehler beim Senden der E-Mail an ' . $to . ' für Termin ID ' . $event['id']);
            }
        }
    }
} catch (Exception $e) {
    error_log('Fehler beim Senden der Next Step-Benachrichtigungen: ' . $e->getMessage());
}
?>
