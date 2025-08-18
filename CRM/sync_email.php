<?php
// Prüfe, ob Skript über HTTP-Trigger (Cron-Job) aufgerufen wird
if (isset($_GET['token']) && $_GET['token'] === '94236870565c78c8ebd5580f3a8ee050a46ae05cbe7a9de27c7aa26ee069c214') {
    // Keine Authentifizierung für Cron-Job erforderlich
} else {
    require_once 'auth.php';
}

require_once 'db_connect.php';
require_once 'config.php';

header('Content-Type: application/json');
// ... Rest des Codes unverändert ...
$response = ['success' => false, 'message' => '', 'added' => 0, 'skipped' => 0];

try {
    $addedCount = 0;
    $skippedCount = 0;

    // Hole Kunden-E-Mail-Adressen
    $stmt = $db->query("SELECT id, email FROM customers WHERE email IS NOT NULL AND email != ''");
    $customers = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $customerEmails = array_column($customers, 'email', 'id');

    // Verzeichnis für Anhänge
    $uploadDir = 'Uploads/customer_files/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // Funktion zum Dekodieren des Betreffs
    function decodeSubject($subject)
    {
        $decoded = '';
        foreach (imap_mime_header_decode($subject) as $part) {
            $decoded .= $part->text;
        }
        return $decoded ?: $subject;
    }

    // Funktion zum rekursiven Abrufen des Nachrichteninhalts
    function getMessageBody($inbox, $emailId, $structure, $partNum = '')
    {
        $body = '';
        if (!isset($structure->parts) || empty($structure->parts)) {
            // Einzelner Part
            $content = imap_fetchbody($inbox, $emailId, $partNum ?: 1);
            if ($structure->encoding == 3) { // Base64
                $content = base64_decode($content);
            } elseif ($structure->encoding == 4) { // Quoted-Printable
                $content = quoted_printable_decode($content);
            }
            if ($structure->subtype === 'PLAIN') {
                $body = $content;
            } elseif ($structure->subtype === 'HTML') {
                $body = strip_tags($content);
            }
        } else {
            // Mehrere Parts
            foreach ($structure->parts as $index => $part) {
                $newPartNum = $partNum ? "$partNum." . ($index + 1) : ($index + 1);
                if ($part->type == 0 && ($part->subtype === 'PLAIN' || $part->subtype === 'HTML')) {
                    $content = imap_fetchbody($inbox, $emailId, $newPartNum);
                    if ($part->encoding == 3) {
                        $content = base64_decode($content);
                    } elseif ($part->encoding == 4) {
                        $content = quoted_printable_decode($content);
                    }
                    if ($part->subtype === 'PLAIN') {
                        $body .= $content . "\n";
                    } elseif ($part->subtype === 'HTML') {
                        $body .= strip_tags($content) . "\n";
                    }
                } elseif ($part->type == 1) { // Multipart
                    $body .= getMessageBody($inbox, $emailId, $part, $newPartNum);
                }
            }
        }
        return trim($body);
    }

    // Iteriere über alle Benutzer in emailConfig
    foreach ($emailConfig as $user => $config) {
        // IMAP-Verbindung für jeden Benutzer
        $imapServer = '{imap.udag.de:993/imap/ssl}';
        $inbox = imap_open($imapServer, $config['email'], $config['password']);
        if (!$inbox) {
            throw new Exception("IMAP-Verbindung für $user fehlgeschlagen: " . imap_last_error());
        }

        // Suche nach E-Mails (letzte 30 Tage)
        $sinceDate = date('d-M-Y', strtotime('-30 days'));
        $emails = imap_search($inbox, "SINCE \"$sinceDate\"");
        if (!$emails) {
            $emails = [];
        }

        foreach ($emails as $emailId) {
            $overview = imap_fetch_overview($inbox, $emailId, 0)[0];
            $header = imap_headerinfo($inbox, $emailId);
            $structure = imap_fetchstructure($inbox, $emailId);

            $emailData = [
                'uid' => $overview->uid,
                'subject' => decodeSubject($overview->subject ?? 'Kein Betreff'),
                'sender' => $header->from[0]->mailbox . '@' . $header->from[0]->host,
                'recipient' => $header->to[0]->mailbox . '@' . $header->to[0]->host,
                'message' => getMessageBody($inbox, $emailId, $structure),
                'sent_at' => date('Y-m-d H:i:s', strtotime($overview->date))
            ];

            // Finde passenden Kunden
            $customerId = null;
            foreach ($customerEmails as $id => $customerEmail) {
                if (
                    strtolower($emailData['sender']) === strtolower($customerEmail) ||
                    strtolower($emailData['recipient']) === strtolower($customerEmail)
                ) {
                    $customerId = $id;
                    break;
                }
            }

            if ($customerId) {
                // Prüfe, ob E-Mail bereits existiert
                $stmt = $db->prepare("SELECT id FROM customer_emails WHERE email_id = :email_id AND created_by = :created_by");
                $stmt->execute(['email_id' => $emailData['uid'], 'created_by' => $user]);
                if ($stmt->fetch()) {
                    $skippedCount++;
                    continue;
                }

                // Füge E-Mail ein
                $stmt = $db->prepare("
                    INSERT INTO customer_emails (
                        customer_id, email_id, subject, sender, recipient, message_text, sent_at, created_by
                    ) VALUES (
                        :customer_id, :email_id, :subject, :sender, :recipient, :message_text, :sent_at, :created_by
                    )
                ");
                $stmt->execute([
                    'customer_id' => $customerId,
                    'email_id' => $emailData['uid'],
                    'subject' => $emailData['subject'],
                    'sender' => $emailData['sender'],
                    'recipient' => $emailData['recipient'],
                    'message_text' => $emailData['message'],
                    'sent_at' => $emailData['sent_at'],
                    'created_by' => $user
                ]);
                $emailDbId = $db->lastInsertId();
                $addedCount++;

                // Anhänge speichern
                if (isset($structure->parts) && count($structure->parts)) {
                    for ($i = 0; $i < count($structure->parts); $i++) {
                        if (
                            isset($structure->parts[$i]->disposition) &&
                            in_array(strtolower($structure->parts[$i]->disposition), ['attachment', 'inline'])
                        ) {
                            $filename = '';
                            if (isset($structure->parts[$i]->dparameters)) {
                                foreach ($structure->parts[$i]->dparameters as $param) {
                                    if (strtolower($param->attribute) === 'filename') {
                                        $filename = $param->value;
                                        break;
                                    }
                                }
                            }

                            if (!$filename && isset($structure->parts[$i]->parameters)) {
                                foreach ($structure->parts[$i]->parameters as $param) {
                                    if (strtolower($param->attribute) === 'name') {
                                        $filename = $param->value;
                                        break;
                                    }
                                }
                            }

                            if ($filename) {
                                $attachment = imap_fetchbody($inbox, $emailId, $i + 1);
                                if ($structure->parts[$i]->encoding == 3) { // Base64
                                    $attachment = base64_decode($attachment);
                                } elseif ($structure->parts[$i]->encoding == 4) { // Quoted-Printable
                                    $attachment = quoted_printable_decode($attachment);
                                }

                                $filePath = $uploadDir . uniqid() . '_' . basename($filename);
                                file_put_contents($filePath, $attachment);

                                // Speichere Anhang in customer_files
                                $stmt = $db->prepare("
                                    INSERT INTO customer_files (
                                        customer_id, file_path, file_type, description, email_id
                                    ) VALUES (
                                        :customer_id, :file_path, :file_type, :description, :email_id
                                    )
                                ");
                                $stmt->execute([
                                    'customer_id' => $customerId,
                                    'file_path' => $filePath,
                                    'file_type' => 'email_attachment',
                                    'description' => "Anhang von E-Mail: {$emailData['subject']}",
                                    'email_id' => $emailData['uid']
                                ]);
                            }
                        }
                    }
                }
            }
        }

        imap_close($inbox);
    }

    $response['success'] = true;
    $response['message'] = "E-Mail-Synchronisation abgeschlossen. $addedCount E-Mails hinzugefügt, $skippedCount übersprungen.";
    $response['added'] = $addedCount;
    $response['skipped'] = $skippedCount;

} catch (Exception $e) {
    $response['message'] = "Fehler bei der Synchronisation: " . $e->getMessage();
}

echo json_encode($response);
?>