# CDM-Projekt Dokumentation
- **Lokale Umgebung**: XAMPP 8.2.4-0 auf macOS
- **Pfad**: /Applications/XAMPP/xamppfiles/htdocs/AS2/CRM
- **Datenbank**: MySQL (MariaDB 10.4.28), Port: 3306, Datenbank: crm_local, Tabellen: customers, customer_files, next_steps, manufacturers, manufacturer_files, offers, offer_files
- **Setup**:
  1. Öffne XAMPP-Control-Panel und starte Apache und MySQL.
  2. Lösche den mysql-Ordner in /Applications/XAMPP/xamppfiles/var/ und starte MySQL neu.
  3. Installiere XAMPP neu, falls MySQL nicht startet.
  4. Exportiere Daten von United Domains phpMyAdmin und importiere sie in crm_local über localhost/phpmyadmin.
  5. Passe Berechtigungen für AS2 und CRM an („Lesen & Schreiben“ für Alle).
  6. Erstelle config.php mit dynamischem BASE_PATH und passe save_customer.php, update_customer.php, update_offer.php, save_offer.php, save_manufacturer.php, update_manufacturer.php an.
  7. Erstelle den uploads-Ordner und passe Berechtigungen an.
  8. Öffne http://localhost/AS2/CRM/index.php.
- **Hinweise**: 
  - Upload-Verzeichnis: /Applications/XAMPP/xamppfiles/htdocs/AS2/CRM/uploads/
  - Dynamischer Pfad: BASE_PATH wird automatisch an die Umgebung angepasst (lokal /AS2/CRM/, produktiv /CRM/).
  - „Interesse an“-Funktion: Maschinen können im Editiermodus ausgewählt werden; neue Maschinen können über das Hinzufügen-Feld erstellt werden.