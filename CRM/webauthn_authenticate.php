<?php
session_start();
require_once 'config.php';
require_once 'db_connect.php';

header('Content-Type: application/json');
$response = ['success' => false, 'error' => '', 'options' => []];

try {
    // Generiere eine Challenge
    $challenge = random_bytes(32);
    $_SESSION['webauthn_challenge'] = base64_encode($challenge);

    // Base64-URL-Safe Kodierung
    $challengeBase64 = rtrim(strtr(base64_encode($challenge), '+/', '-_'), '=');

    // Hole alle gespeicherten Credential-IDs
    $stmt = $db->query("SELECT credential_id FROM webauthn_credentials");
    $credentials = $stmt->fetchAll(PDO::FETCH_COLUMN);

    if (empty($credentials)) {
        throw new Exception('Keine Passkeys registriert. Bitte zuerst registrieren.');
    }

    // WebAuthn-Authentifizierungsoptionen
    $options = [
        'publicKey' => [
            'rpId' => 'as-technical.de',
            'challenge' => $challengeBase64,
            'allowCredentials' => array_map(function($id) {
                return [
                    'type' => 'public-key',
                    'id' => rtrim(strtr($id, '+/', '-_'), '=')
                ];
            }, $credentials),
            'timeout' => 60000,
            'userVerification' => 'preferred'
        ]
    ];

    $response['success'] = true;
    $response['options'] = $options;
} catch (Exception $e) {
    $response['error'] = $e->getMessage();
}

echo json_encode($response);
?>
