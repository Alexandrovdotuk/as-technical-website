<?php
// Setze Session-Einstellungen vor session_start()
ini_set('session.gc_maxlifetime', 2592000); // 30 Tage
// session.cookie_lifetime wird in auth.php basierend auf Checkbox gesetzt
?>
