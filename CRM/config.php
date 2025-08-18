<?php
// Dynamischer Basispfad
$base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://{$_SERVER['HTTP_HOST']}";
$request_uri = $_SERVER['REQUEST_URI'];
$base_path = dirname($request_uri);
if ($base_path === '/')
    $base_path = '';
define('BASE_PATH', $base_url . $base_path . '/');
// Benutzerliste mit gehashten Passwörtern
$users = [
    'Alexander Alexandrov' => password_hash('crmsecure2025', PASSWORD_DEFAULT),
    'Robert Kutschke' => password_hash('crmsecure2025', PASSWORD_DEFAULT),
    'Eugen Schütz' => password_hash('crmsecure2025', PASSWORD_DEFAULT)
];

// Session-Timeout (in Sekunden, 30 Tage = 2592000 Sekunden)
$session_timeout = 2592000;

// E-Mail-Konfiguration (United Domains)
$emailConfig = [
    'Alexander Alexandrov' => [
        'email' => 'a.alexandrov@as-technical.de',
        'password' => 'AS_Technical0723' // Ersetze mit tatsächlichem Passwort
    ],
    'Robert Kutschke' => [
        'email' => 'r.kutschke@as-technical.de',
        'password' => 'AS_Kutschke0723' // Ersetze mit tatsächlichem Passwort
    ],
    'Eugen Schütz' => [
        'email' => 'e.schuetz@as-technical.de',
        'password' => 'AS_Technical0723' // Ersetze mit tatsächlichem Passwort
    ]
];
?>