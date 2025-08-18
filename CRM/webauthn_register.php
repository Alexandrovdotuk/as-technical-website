<?php
session_start();
require_once 'config.php';
require_once 'db_connect.php';

header('Content-Type: application/json');
$response = ['success' => false, 'error' => '', 'options' => []];

try {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception('Ungültige Anfragemethode.');
    }

    $input = json_decode(file_get_contents('php://input'), true);
    if (!isset($input['username']) || empty(trim($input['username']))) {
        throw new Exception('Benutzername fehlt oder ist leer.');
    }

    $username = trim($input['username']);
    if (!isset($users[$username])) {
        throw new Exception("Ungültiger Benutzer: '$username' existiert nicht.");
    }

    // Generiere eine Challenge
    $challenge = random_bytes(32);
    $_SESSION['webauthn_challenge'] = base64_encode($challenge);

    // Base64-URL-Safe Kodierung
    $challengeBase64 = rtrim(strtr(base64_encode($challenge), '+/', '-_'), '=');
    $userIdBase64 = rtrim(strtr(base64_encode($username), '+/', '-_'), '=');

    // WebAuthn-Registrierungsoptionen
    $publicKey = [
        'rp' => [
            'name' => 'CRM AS EXport',
            'id' => 'as-technical.de'
        ],
        'user' => [
            'id' => $userIdBase64,
            'name' => $username,
            'displayName' => $username
        ],
        'challenge' => $challengeBase64,
        'pubKeyCredParams' => [
            ['type' => 'public-key', 'alg' => -7], // ES256
            ['type' => 'public-key', 'alg' => -257] // RS256
        ],
        'timeout' => 60000,
        'authenticatorSelection' => [
            'authenticatorAttachment' => 'platform',
            'requireResidentKey' => false,
            'userVerification' => 'preferred'
        ],
        'attestation' => 'none'
    ];

    $options = ['publicKey' => $publicKey];

    $response['success'] = true;
    $response['options'] = $options;
} catch (Exception $e) {
    $response['error'] = $e->getMessage();
}

echo json_encode($response);
?>
