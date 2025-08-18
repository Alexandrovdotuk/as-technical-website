<?php
// Debugging: Logge Start der Datei
error_log('Starte auth.php in ' . __FILE__);

// Lade Session-Einstellungen
$file_path = __DIR__ . '/session_config.php';
error_log('Versuche, session_config.php zu laden: ' . $file_path);
if (!file_exists($file_path)) {
    error_log('Fehlende Datei: ' . $file_path);
    die('Fehlende Datei: session_config.php');
}
require_once $file_path;
error_log('session_config.php geladen');

// Setze session.cookie_lifetime basierend auf Checkbox
if (isset($_SESSION['stay_logged_in']) && $_SESSION['stay_logged_in'] === true) {
    ini_set('session.cookie_lifetime', 2592000); // 30 Tage
} else {
    ini_set('session.cookie_lifetime', 0); // Bis Browser geschlossen
}

session_start();
error_log('Session gestartet: ' . print_r($_SESSION, true));

// Lade Konfiguration
$file_path = __DIR__ . '/config.php';
error_log('Versuche, config.php zu laden: ' . $file_path);
if (!file_exists($file_path)) {
    error_log('Fehlende Datei: ' . $file_path);
    die('Fehlende Datei: config.php');
}
require_once $file_path;
error_log('config.php geladen');

// Session-Timeout prüfen
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $session_timeout) {
    error_log('Session abgelaufen für Benutzer: ' . ($_SESSION['selected_user'] ?? 'unbekannt'));
    session_unset();
    session_destroy();
    session_start();
    error_log('Neue Session gestartet');
}

// Prüfen, ob der Benutzer authentifiziert ist
function isAuthenticated()
{
    error_log('isAuthenticated aufgerufen. Session-Daten: ' . print_r($_SESSION, true));
    return isset($_SESSION['authenticated']) && $_SESSION['authenticated'] === true && isset($_SESSION['selected_user']);
}

if (!isAuthenticated()) {
    error_log('Benutzer nicht authentifiziert. Überprüfe POST-Daten...');
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username']) && isset($_POST['password'])) {
        $username = trim($_POST['username']);
        $input_password = $_POST['password'];

        error_log("Authentifizierungsversuch für Benutzer: $username");

        // Prüfe, ob der Benutzer existiert und das Passwort korrekt ist
        if (isset($users[$username]) && password_verify($input_password, $users[$username])) {
            error_log("Authentifizierung erfolgreich für Benutzer: $username");
            $_SESSION['authenticated'] = true;
            $_SESSION['selected_user'] = $username;
            $_SESSION['last_activity'] = time();
            // Speichere Checkbox-Wert
            $_SESSION['stay_logged_in'] = isset($_POST['stay_logged_in']) && $_POST['stay_logged_in'] == '1';
            // Weiterleitung zur ursprünglich angefragten Seite
            $redirect = isset($_SESSION['redirect']) ? $_SESSION['redirect'] : 'index.php';
            error_log("Weiterleitung zu: $redirect");
            header("Location: $redirect");
            exit;
        } else {
            error_log("Authentifizierung fehlgeschlagen für Benutzer: $username");
            $error = "Falscher Benutzername oder Passwort. Bitte versuche es erneut.";
        }
    }

    // Speichere die ursprünglich angefragte Seite
    $_SESSION['redirect'] = basename($_SERVER['PHP_SELF']) . (isset($_SERVER['QUERY_STRING']) ? '?' . $_SERVER['QUERY_STRING'] : '');
    error_log('Benutzer nicht authentifiziert. Leite zu login.php um. Redirect gespeichert: ' . $_SESSION['redirect']);
    header("Location: login.php");
    exit;
}

// Aktualisiere die letzte Aktivität
$_SESSION['last_activity'] = time();
error_log('Letzte Aktivität aktualisiert für Benutzer: ' . $_SESSION['selected_user']);