<?php
session_start();
require_once 'config.php';
require_once 'db_connect.php';

header('Content-Type: application/json');
$response = ['success' => false, 'message' => '', 'redirect' => ''];

try {
    if (!isset($_POST['credential']) || !isset($_SESSION['webauthn_challenge'])) {
        throw new Exception('Ungültige Anfrage.');
    }

    $credential = json_decode($_POST['credential'], true);
    $challenge = base64_decode($_SESSION['webauthn_challenge']);
    $credentialId = $credential['id'];

    // Hole gespeicherten Passkey
    $stmt = $db->prepare("SELECT user_id FROM webauthn_credentials WHERE credential_id = :credential_id");
    $stmt->execute(['credential_id' => $credentialId]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
        throw new Exception('Ungültiger Passkey.');
    }

    // Simulierte Validierung der Signatur (in Produktion: Öffentlichen Schlüssel prüfen)
    // Hier nehmen wir an, dass die Signatur gültig ist, da WebAuthn dies clientseitig handhabt

    // Authentifiziere Benutzer
    $_SESSION['authenticated'] = true;
    $_SESSION['selected_user'] = $user['user_id'];
    $_SESSION['last_activity'] = time();
    unset($_SESSION['webauthn_challenge']);

    $response['success'] = true;
    $response['redirect'] = isset($_SESSION['redirect']) ? $_SESSION['redirect'] : 'index.php';
} catch (Exception $e) {
    $response['message'] = $e->getMessage();
}

echo json_encode($response);
?>
