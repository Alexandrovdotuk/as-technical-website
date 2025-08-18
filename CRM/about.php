<?php
require_once 'auth.php'; // Authentifizierung einbinden
?>
<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRM AS EXport - Über diese Anwendung</title>
  <link rel="stylesheet" href="<?php echo BASE_PATH; ?>assets/css/output.css">
</head>

<body class="bg-gray-100 font-sans">
  <div class="flex flex-col md:flex-row min-h-screen">
    <!-- Seitenleiste -->
    <div id="sidebar" class="w-full md:w-64 bg-white shadow-md fixed md:static top-0 left-0 h-full md:h-auto z-20 transform -translate-x-full md:translate-x-0 transition-transform duration-300">
      <div class="p-4">
        <img src="<?php echo BASE_PATH; ?>assets/logo.png" alt="Logo" class="h-10 md:h-12">
      </div>
      <nav class="mt-4">
        <a href="<?php echo BASE_PATH; ?>index.php" class="block p-4 text-gray-600 hover:bg-gray-100">Customers</a>
        <a href="<?php echo BASE_PATH; ?>offers.php" class="block p-4 text-gray-600 hover:bg-gray-100">Offers</a>
        <a href="<?php echo BASE_PATH; ?>manufacturer.php" class="block p-4 text-gray-600 hover:bg-gray-100">Manufact</a>
        <a href="<?php echo BASE_PATH; ?>calendar.php" class="block p-4 text-gray-600 hover:bg-gray-100">Calendar</a>
        <a href="<?php echo BASE_PATH; ?>next_steps.php" class="block p-4 text-gray-600 hover:bg-gray-100">Next Steps</a>

        <a href="#" class="block p-4 text-gray-600 hover:bg-gray-100">Overdue Warning</a>
        <a href="<?php echo BASE_PATH; ?>about.php" class="block p-4 text-blue-600 bg-blue-100">About</a>
        <a href="#" class="block p-4 text-gray-600 hover:bg-gray-100">App Gallery</a>
      </nav>
    </div>

    <!-- Hamburger-Menü-Button (nur auf Mobilgeräten sichtbar) -->
    <button id="menuBtn" class="md:hidden p-4 fixed top-0 left-0 z-30">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
      </svg>
    </button>

    <!-- Hauptbereich -->
    <div class="flex-1 p-4 md:p-6 mt-16 md:mt-0">
      <h1 class="text-xl font-bold mb-4">Über CRM AS EXport</h1>
      <div class="bg-white shadow rounded p-6">
        <p class="mb-4">Willkommen bei <strong>CRM AS EXport</strong> – Ihrer Lösung zur effizienten Verwaltung von Kunden, Angeboten und Herstellern. Diese Anwendung hilft Ihnen, Ihre Geschäftsdaten übersichtlich zu organisieren und schnell darauf zuzugreifen. Im Folgenden finden Sie eine kurze Anleitung zur Bedienung.</p>

        <h2 class="text-lg font-semibold mt-6 mb-2">Navigation</h2>
        <p class="mb-4">Nutzen Sie die Seitenleiste, um zwischen den verschiedenen Bereichen der Anwendung zu wechseln:</p>
        <ul class="list-disc list-inside mb-4">
          <li><strong>Customers:</strong> Verwalten Sie Ihre Kunden und deren Informationen.</li>
          <li><strong>Offers:</strong> Erstellen und verwalten Sie Angebote für Ihre Kunden.</li>
          <li><strong>Manufacturers:</strong> Verwalten Sie Hersteller und deren Details.</li>
          <li><strong>Calendar:</strong> Behalten Sie Termine im Blick (zukünftige Funktion).</li>
          <li><strong>Overdue Warning:</strong> Erhalten Sie Warnungen bei überfälligen Aufgaben (zukünftige Funktion).</li>
          <li><strong>About:</strong> Diese Seite mit Bedienungsanleitung.</li>
          <li><strong>App Gallery:</strong> Entdecken Sie weitere Apps (zukünftige Funktion).</li>
        </ul>
        <p class="mb-4">Auf mobilen Geräten können Sie die Seitenleiste über das <strong>Hamburger-Menü</strong> (≡) oben links ein- und ausblenden.</p>

        <h2 class="text-lg font-semibold mt-6 mb-2">Daten hinzufügen, bearbeiten und löschen</h2>
        <p class="mb-2">In jedem Bereich (Kunden, Angebote, Hersteller) können Sie:</p>
        <ul class="list-disc list-inside mb-4">
          <li><strong>Hinzufügen:</strong> Klicken Sie auf „+ Add“, um einen neuen Eintrag zu erstellen. Füllen Sie die erforderlichen Felder aus und speichern Sie mit „Save“.</li>
          <li><strong>Bearbeiten:</strong> Klicken Sie auf „Open“, um die Details eines Eintrags anzuzeigen, und dann auf „Edit“, um Änderungen vorzunehmen. Speichern Sie mit „Save“.</li>
          <li><strong>Löschen:</strong> Wählen Sie Einträge mit den Kontrollkästchen aus und klicken Sie auf „Löschen“, oder löschen Sie einen einzelnen Eintrag im Bearbeitungsmodus.</li>
        </ul>
        <p class="mb-4"><strong>Tipp:</strong> Verwenden Sie <kbd>Strg + S</kbd>, um ein Formular schnell zu speichern.</p>

        <h2 class="text-lg font-semibold mt-6 mb-2">Suche und Filterung</h2>
        <p class="mb-4">Nutzen Sie die Suchfelder und Filter, um Einträge schnell zu finden:</p>
        <ul class="list-disc list-inside mb-4">
          <li>Geben Sie Suchbegriffe ein, z. B. den Namen eines Kunden oder Herstellers.</li>
          <li>Sortieren Sie die Ergebnisse, z. B. alphabetisch oder nach Datum.</li>
          <li>Filtern Sie Angebote nach Status (z. B. „Offen“, „Abgeschlossen“).</li>
        </ul>

        <h2 class="text-lg font-semibold mt-6 mb-2">Datei-Uploads</h2>
        <p class="mb-4">Sie können Bilder und PDFs zu Ihren Einträgen hinzufügen:</p>
        <ul class="list-disc list-inside mb-4">
          <li>Klicken Sie auf die Felder „Bilder hochladen“ oder „PDFs hochladen“.</li>
          <li>Fügen Sie mehrere Dateien hinzu, indem Sie auf „+ Weiteres Bild hinzufügen“ oder „+ Weiteres PDF hinzufügen“ klicken.</li>
          <li>Geben Sie eine Bezeichnung für jede Datei ein, z. B. „Rechnung_2025“, um sie leichter zu identifizieren.</li>
          <li>Im Bearbeitungsmodus können Sie bestehende Dateien löschen oder deren Bezeichnungen ändern.</li>
        </ul>

        <h2 class="text-lg font-semibold mt-6 mb-2">Export und Import</h2>
        <p class="mb-4">In einigen Bereichen (z. B. Kunden) können Sie Daten exportieren und importieren:</p>
        <ul class="list-disc list-inside mb-4">
          <li><strong>Export CSV:</strong> Klicken Sie auf „Export CSV“, um sichtbare Einträge als CSV-Datei herunterzuladen.</li>
          <li><strong>Import Excel:</strong> Klicken Sie auf „Import Excel“, um Kunden aus einer Excel-Datei zu importieren (zukünftige Funktion).</li>
        </ul>

        <h2 class="text-lg font-semibold mt-6 mb-2">Wichtige Hinweise</h2>
        <p class="mb-4">Für einige Aktionen (z. B. Bearbeiten, Löschen) werden Sie aufgefordert, Ihren Benutzernamen auszuwählen, um Änderungen nachzuverfolgen. Stellen Sie sicher, dass Sie die korrekten Daten eingeben, bevor Sie speichern.</p>

        <p class="mt-6">Bei Fragen oder Problemen wenden Sie sich bitte an den Support. Viel Erfolg mit<?php echo BASE_PATH; ?>AS EXport!</p>
      </div>
    </div>
  </div>

  <script>
    // Hamburger-Menü
    const menuBtn = document.getElementById('menuBtn');
    const sidebar = document.getElementById('sidebar');
    menuBtn.addEventListener('click', () => {
      sidebar.classList.toggle('-translate-x-full');
    });
  </script>
</body>

</html>