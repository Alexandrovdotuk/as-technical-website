<?php
// Datenbankverbindungsinformationen
$host = 'localhost'; // Oder der Hostname von United Domains, z. B. 'mysqlXX.united-domains.de'
$dbname = 'crm_local';
$username = 'root';
$password = '';

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Datenbankverbindung fehlgeschlagen: " . $e->getMessage());
}
?>