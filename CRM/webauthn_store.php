<?php
session_start();
require_once 'config.php';
require_once 'db_connect.php';

header('Content-Type: application/json');
$response = ['success' => false, 'message' => ''];

try {
    if (!isset($_POST['username']) || !isset($_POST['credential']) || !isset($_SESSION['webauthn_challenge'])) {
        throw new Exception('Ungültige Anfrage.');
    }

    $username = trim($_POST['username']);
    $credential = json_decode($_POST['credential'], true);
    $challenge = base64_decode($_SESSION['webauthn_challenge']);

    if (!isset($users[$username])) {
        throw new Exception('Ungültiger Benutzer.');
    }

    // Validierung der Credential-ID und des öffentlichen Schlüssels
    $credentialId = $credential['id'];
    $publicKey = $credential['response']['publicKey'] ?? $credential['response']['clientDataJSON'];

    // Speichere Credential in der Datenbank
    $stmt = $db->prepare("
        INSERT INTO webauthn_credentials (user_id, credential_id, public_key)
        VALUES (:user_id, :credential_id, :public_key)
    ");
    $stmt->execute([
        'user_id' => $username,
        'credential_id' => $credentialId,
        'public_key' => json_encode($publicKey)
    ]);

    unset($_SESSION['webauthn_challenge']);
    $response['success'] = true;
    $response['message'] = 'Passkey erfolgreich registriert.';
} catch (Exception $e) {
    $response['message'] = $e->getMessage();
}

echo json_encode($response);
?>
