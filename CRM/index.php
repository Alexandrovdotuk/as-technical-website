<?php
// Debugging aktivieren (entferne dies in der Produktion)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'config.php';
require_once 'auth.php';
require_once 'send_next_step_notifications.php'; // Sende Benachrichtigungen
?>
<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#4f46e5">
  <title>CRM AS EXport - Kunden</title>
  <link rel="manifest" href="<?php echo BASE_PATH; ?>manifest.json">
  <link rel="stylesheet" href="<?php echo BASE_PATH; ?>assets/css/output.css">
</head>

<body class="bg-gray-50 font-sans antialiased">
  <div class="flex flex-col md:flex-row min-h-screen">
    <!-- Seitenleiste -->
    <aside id="sidebar"
      class="w-full md:w-64 bg-white shadow-lg fixed md:static top-0 left-0 h-full z-30 transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out">
      <div class="p-6">
        <img src="<?php echo BASE_PATH; ?>assets/logo.png" alt="Logo" class="h-12 mx-auto">
      </div>
      <nav class="mt-2">
        <a href="<?php echo BASE_PATH; ?>index.php"
          class="block px-6 py-3 mx-2 text-indigo-600 bg-indigo-50 rounded-lg font-medium transition-colors duration-200">Customers</a>
        <a href="<?php echo BASE_PATH; ?>offers.php"
          class="block px-6 py-3 mx-2 text-gray-600 hover:bg-gray-100 rounded-lg transition-colors duration-200">Offers</a>
        <a href="<?php echo BASE_PATH; ?>manufacturer.php"
          class="block px-6 py-3 mx-2 text-gray-600 hover:bg-gray-100 rounded-lg transition-colors duration-200">Manufact</a>
        <a href="<?php echo BASE_PATH; ?>calendar.php"
          class="block px-6 py-3 mx-2 text-gray-600 hover:bg-gray-100 rounded-lg transition-colors duration-200">Calendar</a>
        <a href="<?php echo BASE_PATH; ?>next_steps.php"
          class="block px-6 py-3 mx-2 text-gray-600 hover:bg-gray-100 rounded-lg transition-colors duration-200">Next
          Steps</a>
        <a href="#"
          class="block px-6 py-3 mx-2 text-gray-600 hover:bg-gray-100 rounded-lg transition-colors duration-200">Overdue
          Warning</a>
        <a href="<?php echo BASE_PATH; ?>about.php"
          class="block px-6 py-3 mx-2 text-gray-600 hover:bg-gray-100 rounded-lg transition-colors duration-200">About</a>
        <a href="#"
          class="block px-6 py-3 mx-2 text-gray-600 hover:bg-gray-100 rounded-lg transition-colors duration-200">App
          Gallery</a>
        <a href="<?php echo BASE_PATH; ?>logout.php"
          class="block px-6 py-3 mx-2 text-red-600 hover:bg-red-50 rounded-lg transition-colors duration-200">Logout</a>
      </nav>
    </aside>

    <!-- Hamburger-Menü-Button -->
    <button id="menuBtn" class="md:hidden p-4 fixed top-0 left-0 z-40 bg-indigo-600 text-white rounded-full shadow-lg">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
      </svg>
    </button>

    <!-- Hauptbereich -->
    <main class="flex-1 p-6 md:p-8 mt-16 md:mt-0 bg-gray-50">
      <header class="flex flex-col md:flex-row justify-between items-center mb-8">
        <h1 class="text-2xl md:text-3xl font-bold text-gray-800">Kundenübersicht</h1>
        <div class="flex items-center space-x-4 mt-4 md:mt-0">
          <label class="flex items-center text-gray-600">
            <input type="checkbox" id="selectAllVisible"
              class="mr-2 h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
            Alle sichtbaren auswählen
          </label>
        </div>
      </header>

      <!-- Such- und Filterleiste -->
      <div class="bg-white p-6 rounded-xl shadow-md mb-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-6 gap-4">
          <input type="text" id="nameSearchInput" list="nameSuggestions" placeholder="Nach Name suchen"
            class="border border-gray-300 p-3 rounded-lg w-full focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition">
          <datalist id="nameSuggestions"></datalist>
          <input type="text" id="countrySearchInput" list="countrySuggestions" placeholder="Nach Land suchen"
            class="border border-gray-300 p-3 rounded-lg w-full focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition">
          <datalist id="countrySuggestions"></datalist>
          <input type="text" id="industrySearchInput" list="industrySuggestions" placeholder="Nach Branche suchen"
            class="border border-gray-300 p-3 rounded-lg w-full focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition">
          <datalist id="industrySuggestions"></datalist>
          <select id="roleSearchInput"
            class="border border-gray-300 p-3 rounded-lg w-full focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition">
            <option value="">Alle Funktionen</option>
          </select>
          <input type="text" id="companySearchInput" list="companySuggestions" placeholder="Nach Firma suchen"
            class="border border-gray-300 p-3 rounded-lg w-full focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition">
          <datalist id="companySuggestions"></datalist>
          <select id="sortSelect"
            class="border border-gray-300 p-3 rounded-lg w-full focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition">
            <option value="name-asc">Name A-Z</option>
            <option value="name-desc">Name Z-A</option>
            <option value="date-desc">Neueste zuerst</option>
            <option value="date-asc">Älteste zuerst</option>
          </select>
        </div>
        <div class="flex flex-col sm:flex-row items-center justify-between mt-4 gap-4">
          <label class="flex items-center text-gray-600">
            <input type="checkbox" id="filterNextStep"
              class="mr-2 h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
            Nur Kunden mit Next Step
          </label>
          <label class="flex items-center text-gray-600">
            <input type="checkbox" id="filterWithInterests"
              class="mr-2 h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
            Nur Kunden mit Interessen anzeigen
          </label>
          <div class="flex flex-col sm:flex-row gap-2 w-full sm:w-auto">
            <button id="exportBtn"
              class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition">Export Excel</button>
            <button id="importBtn"
              class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition">Import Excel</button>
            <button id="deleteBtn"
              class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition hidden">Löschen</button>
            <button id="addCustomerBtn"
              class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition flex items-center">
              <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
              </svg>
              Kunde hinzufügen
            </button>
          </div>
        </div>
      </div>

      <!-- Bestätigungsmeldung -->
      <div id="toast"
        class="fixed top-4 right-4 bg-green-600 text-white px-6 py-3 rounded-lg shadow-lg hidden z-[9999] box-shadow-[0_0_10px_rgba(0,0,0,0.5)]">
        Aktion erfolgreich!
      </div>

      <!-- Lade-Indikator -->
      <div id="loadingIndicator"
        class="fixed top-4 right-4 bg-indigo-600 text-white px-6 py-3 rounded-lg shadow-lg hidden transform transition-transform duration-300">
        Synchronisation läuft...
      </div>

      <!-- Bestätigungs-Popup für Löschen -->
      <div id="deleteConfirmModal"
        class="fixed inset-0 bg-black bg-opacity-60 hidden flex items-center justify-center transition-opacity duration-300 z-[1000]">
        <div
          class="bg-white rounded-xl shadow-2xl w-11/12 md:w-1/3 p-8 transform scale-95 transition-transform duration-300">
          <h2 class="text-2xl font-bold text-gray-800 mb-4">Löschen bestätigen</h2>
          <p class="text-gray-600 mb-6">Möchten Sie die ausgewählten Kunden wirklich löschen?</p>
          <div class="flex justify-end space-x-4">
            <button id="cancelDeleteBtn"
              class="border border-gray-300 px-6 py-2 rounded-lg text-gray-600 hover:bg-gray-100 transition">Abbrechen</button>
            <button id="confirmDeleteBtn"
              class="bg-red-600 text-white px-6 py-2 rounded-lg hover:bg-red-700 transition">Löschen</button>
          </div>
        </div>
      </div>

      <!-- Kunden-Karten -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="customerCards">
        <?php
        require_once 'db_connect.php';
        try {
          $stmtInterests = $db->prepare("SELECT COALESCE(m.machine, ci.original_machine, 'Unbekannte Maschine (gelöscht)') AS machine FROM customer_interests ci LEFT JOIN manufacturers m ON ci.manufacturer_id = m.id WHERE ci.customer_id = ?");
          $stmt = $db->query("SELECT * FROM customers");
          while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $stmtInterests->execute([$row['id']]);
            $interests = $stmtInterests->fetchAll(PDO::FETCH_COLUMN);
            echo "<div class='customer-card bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 hover:scale-105 transform' data-id='" . htmlspecialchars($row['id']) . "' data-name='" . htmlspecialchars($row['name']) . "' data-country='" . htmlspecialchars($row['country']) . "' data-last-modified='" . htmlspecialchars($row['last_modified_at']) . "' data-customer-id='" . htmlspecialchars($row['customer_id'] ?? '') . "' data-company='" . htmlspecialchars($row['company'] ?? '') . "' data-first-name='" . htmlspecialchars($row['first_name'] ?? '') . "' data-role='" . htmlspecialchars($row['role'] ?? '') . "' data-street='" . htmlspecialchars($row['street'] ?? '') . "' data-zip-code='" . htmlspecialchars($row['zip_code'] ?? '') . "' data-city='" . htmlspecialchars($row['city'] ?? '') . "' data-industry='" . htmlspecialchars($row['industry'] ?? '') . "' data-phone='" . htmlspecialchars($row['phone'] ?? '') . "' data-mobile='" . htmlspecialchars($row['mobile'] ?? '') . "' data-email='" . htmlspecialchars($row['email'] ?? '') . "' data-website='" . htmlspecialchars($row['website'] ?? '') . "' data-contact-person='" . htmlspecialchars($row['contact_person'] ?? '') . "' data-notes='" . htmlspecialchars($row['notes'] ?? '') . "' data-notes-2='" . htmlspecialchars($row['notes_2'] ?? '') . "' data-created-by='" . htmlspecialchars($row['created_by'] ?? '') . "' data-created-at='" . htmlspecialchars($row['created_at'] ?? '') . "' data-last-modified-by='" . htmlspecialchars($row['last_modified_by'] ?? '') . "' data-last-modified-at='" . htmlspecialchars($row['last_modified_at'] ?? '') . "' data-next-step='" . htmlspecialchars($row['next_step'] ?? '') . "' data-interests='" . htmlspecialchars(implode(', ', $interests ?? [])) . "'>";
            echo "<div class='flex justify-between items-center mb-4'>";
            echo "<input type='checkbox' class='select-customer h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded' data-id='" . htmlspecialchars($row['id']) . "'>";
            echo "<span class='inline-block h-2 w-2 bg-green-500 rounded-full'></span>";
            echo "</div>";
            if (!empty($row['customer_id'])) {
              echo "<p class='text-sm text-gray-500'><strong>Kundennummer:</strong> " . htmlspecialchars($row['customer_id']) . "</p>";
            }
            if (!empty($row['company'])) {
              echo "<p class='text-lg font-semibold text-gray-800 mt-2'>" . htmlspecialchars($row['company']) . "</p>";
            }
            echo "<p class='text-sm text-gray-600 mt-1'><strong>Name:</strong> " . htmlspecialchars($row['name']) . "</p>";
            if (!empty($row['first_name'])) {
              echo "<p class='text-sm text-gray-600 mt-1'><strong>Vorname:</strong> " . htmlspecialchars($row['first_name']) . "</p>";
            }
            if (!empty($row['role'])) {
              echo "<p class='text-sm text-gray-600 mt-1'><strong>Funktion:</strong> " . htmlspecialchars($row['role']) . "</p>";
            }
            if (!empty($row['street'])) {
              echo "<p class='text-sm text-gray-600 mt-1'><strong>Straße:</strong> " . htmlspecialchars($row['street']) . "</p>";
            }
            if (!empty($row['zip_code'])) {
              echo "<p class='text-sm text-gray-600 mt-1'><strong>PLZ:</strong> " . htmlspecialchars($row['zip_code']) . "</p>";
            }
            if (!empty($row['city'])) {
              echo "<p class='text-sm text-gray-600 mt-1'><strong>Ort:</strong> " . htmlspecialchars($row['city']) . "</p>";
            }
            echo "<p class='text-sm text-gray-600 mt-1'><strong>Land:</strong> " . htmlspecialchars($row['country']) . "</p>";
            if (!empty($row['industry'])) {
              echo "<p class='text-sm text-gray-600 mt-1'><strong>Branche:</strong> " . htmlspecialchars($row['industry']) . "</p>";
            }
            if (!empty($row['phone'])) {
              echo "<p class='text-sm text-gray-600 mt-1'><strong>Telefon:</strong> <a href='tel:" . htmlspecialchars($row['phone'], ENT_QUOTES, 'UTF-8') . "' class='text-indigo-600 hover:underline'>" . htmlspecialchars($row['phone'], ENT_QUOTES, 'UTF-8') . "</a></p>";
            }
            if (!empty($row['mobile'])) {
              echo "<p class='text-sm text-gray-600 mt-1'><strong>Mobilnummer:</strong> <a href='tel:" . htmlspecialchars($row['mobile'], ENT_QUOTES, 'UTF-8') . "' class='text-indigo-600 hover:underline'>" . htmlspecialchars($row['mobile'], ENT_QUOTES, 'UTF-8') . "</a></p>";
            }
            if (!empty($row['email'])) {
              echo "<p class='text-sm text-gray-600 mt-1'><strong>E-Mail:</strong> <a href='mailto:" . htmlspecialchars($row['email'], ENT_QUOTES, 'UTF-8') . "' class='text-indigo-600 hover:underline'>" . htmlspecialchars($row['email'], ENT_QUOTES, 'UTF-8') . "</a></p>";
            }
            if (!empty($row['website'])) {
              $website_url = preg_match('/^https?:\/\//', $row['website']) ? $row['website'] : 'https://' . $row['website'];
              echo "<p class='text-sm text-gray-600 mt-1'><strong>Webseite:</strong> <a href='" . htmlspecialchars($website_url, ENT_QUOTES, 'UTF-8') . "' target='_blank' rel='noopener noreferrer' class='text-indigo-600 hover:underline'>" . htmlspecialchars($row['website'], ENT_QUOTES, 'UTF-8') . "</a></p>";
            }
            if (!empty($row['contact_person'])) {
              echo "<p class='text-sm text-gray-600 mt-1'><strong>Kontaktperson:</strong> " . htmlspecialchars($row['contact_person']) . "</p>";
            }
            if (!empty($row['notes'])) {
              echo "<p class='text-sm text-gray-600 mt-1'><strong>Notizen:</strong> " . htmlspecialchars($row['notes']) . "</p>";
            }
            if (!empty($row['notes_2'])) {
              echo "<p class='text-sm text-gray-600 mt-1'><strong>Notizen 2:</strong> " . htmlspecialchars($row['notes_2']) . "</p>";
            }
            if (!empty($row['next_step'])) {
              echo "<p class='text-sm text-gray-600 mt-1'><strong>Next Step:</strong> <span class='text-green-600'>" . htmlspecialchars($row['next_step']) . "</span></p>";
              $stmt_next = $db->prepare("SELECT due_date FROM next_steps WHERE customer_id = ?");
              $stmt_next->execute([$row['id']]);
              $next_step = $stmt_next->fetch(PDO::FETCH_ASSOC);
              if ($next_step && !empty($next_step['due_date'])) {
                echo "<p class='text-sm text-gray-600 mt-1'><strong>Fällig:</strong> <span class='text-red-600'>" . (new DateTime($next_step['due_date']))->format('d.m.Y H:i') . "</span></p>";
              }
            }

            $stmtFiles = $db->prepare("SELECT file_path, file_type, description FROM customer_files WHERE customer_id = ?");
            $stmtFiles->execute([$row['id']]);
            $files = $stmtFiles->fetchAll(PDO::FETCH_ASSOC);

            foreach ($files as $file) {
              if ($file['file_type'] === 'image') {
                echo "<div class='mt-3'>";
                if (!empty($file['description'])) {
                  echo "<p class='text-sm text-gray-500'>" . htmlspecialchars($file['description']) . "</p>";
                }
                echo "<a href='" . htmlspecialchars($file['file_path']) . "' target='_blank'><img src='" . htmlspecialchars($file['file_path']) . "' alt='Kunden Bild' class='w-24 h-24 object-cover rounded-lg mt-1'></a>";
                echo "</div>";
              } elseif ($file['file_type'] === 'pdf' || $file['file_type'] === 'email_attachment') {
                echo "<div class='mt-3'>";
                if (!empty($file['description'])) {
                  echo "<p class='text-sm text-gray-500'>" . htmlspecialchars($file['description']) . "</p>";
                }
                echo "<p><a href='" . htmlspecialchars($file['file_path']) . "' target='_blank' class='text-indigo-600 hover:underline'>Datei anzeigen</a></p>";
                echo "</div>";
              }
            }

            echo "<p class='text-sm text-gray-500 mt-3'><strong>Erstellt von:</strong> " . htmlspecialchars($row['created_by']) . "</p>";
            if (!empty($row['created_at'])) {
              echo "<p class='text-sm text-gray-500 mt-1'><strong>Erstellt am:</strong> " . htmlspecialchars($row['created_at']) . "</p>";
            }
            echo "<p class='text-sm text-gray-500 mt-1'><strong>Zuletzt geändert von:</strong> " . htmlspecialchars($row['last_modified_by']) . "</p>";
            if (!empty($row['last_modified_at'])) {
              echo "<p class='text-sm text-gray-500 mt-1'><strong>Zuletzt geändert am:</strong> " . htmlspecialchars($row['last_modified_at']) . "</p>";
            }

            $stmtOffers = $db->prepare("SELECT id, offer_number, date, status FROM offers WHERE customer_id = ?");
            $stmtOffers->execute([$row['id']]);
            $offers = $stmtOffers->fetchAll(PDO::FETCH_ASSOC);
            if ($offers) {
              echo "<p class='text-sm text-gray-600 mt-3'><strong>Angebote:</strong></p>";
              echo "<ul class='text-sm text-gray-600 list-disc list-inside'>";
              foreach ($offers as $offer) {
                $statusColor = $offer['status'] === 'Offen' ? 'text-yellow-600' : ($offer['status'] === 'Abgeschlossen' ? 'text-green-600' : 'text-red-600');
                echo "<li class='{$statusColor}'>" . htmlspecialchars($offer['offer_number'] ?? 'Angebot #' . $offer['id']) . " (" . htmlspecialchars($offer['date']) . ", <span class='{$statusColor}'>" . htmlspecialchars($offer['status']) . "</span>)</li>";
              }
              echo "</ul>";
            }

            if (!empty($row['id'])) {
              if (!empty($interests)) {
                echo "<p class='text-sm text-gray-600 mt-1'><strong>Interesse an:</strong> " . htmlspecialchars(implode(', ', $interests)) . "</p>";
              } else {
                echo "<p class='text-sm text-gray-600 mt-1'><strong>Interesse an:</strong> Keine Interessen eingetragen</p>";
              }
            }
            echo "<div class='mt-6 flex space-x-3'>";
            echo "<button class='open-btn bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition flex items-center'>";
            echo "<svg class='w-4 h-4 mr-2' fill='none' stroke='currentColor' viewBox='0 0 24 24'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M15 12a3 3 0 11-6 0 3 3 0 016 0zM2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z'></path></svg>";
            echo "Anzeigen</button>";
            echo "</div>";
            echo "</div>";
          }
        } catch (PDOException $e) {
          echo "<div class='bg-white shadow-md rounded-xl p-6 text-red-600'>Fehler beim Laden der Kunden: " . htmlspecialchars($e->getMessage()) . "</div>";
        }
        ?>
      </div>
    </main>
  </div>

  <!-- Modales Fenster für Hinzufügen -->
  <div id="addCustomerModal"
    class="fixed inset-0 bg-black bg-opacity-60 hidden flex items-center justify-center transition-opacity duration-300">
    <div
      class="bg-white rounded-xl shadow-2xl w-11/12 md:w-2/3 lg:w-1/2 max-h-[85vh] overflow-y-auto p-8 transform scale-95 transition-transform duration-300">
      <button id="closeAddModalBtn" class="absolute top-4 right-4 text-gray-500 hover:text-gray-700">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
      <h2 class="text-2xl font-bold text-gray-800 mb-6">Neuen Kunden hinzufügen</h2>
      <form id="addCustomerForm" class="space-y-6" enctype="multipart/form-data">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <label class="block text-sm font-semibold text-gray-700">Kundennummer</label>
            <input type="text" name="customer_id"
              class="mt-1 w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition">
          </div>
          <div>
            <label class="block text-sm font-semibold text-gray-700">Firma *</label>
            <input type="text" name="company"
              class="mt-1 w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
              required>
          </div>
          <div>
            <label class="block text-sm font-semibold text-gray-700">Name</label>
            <input type="text" name="name"
              class="mt-1 w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition">
          </div>
          <div>
            <label class="block text-sm font-semibold text-gray-700">Vorname</label>
            <input type="text" name="first_name"
              class="mt-1 w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition">
          </div>
          <div>
            <label class="block text-sm font-semibold text-gray-700">Funktion</label>
            <input type="text" name="role"
              class="mt-1 w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition">
          </div>
          <div>
            <label class="block text-sm font-semibold text-gray-700">Straße</label>
            <input type="text" name="street"
              class="mt-1 w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition">
          </div>
          <div>
            <label class="block text-sm font-semibold text-gray-700">PLZ</label>
            <input type="text" name="zip_code"
              class="mt-1 w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition">
          </div>
          <div>
            <label class="block text-sm font-semibold text-gray-700">Ort</label>
            <input type="text" name="city"
              class="mt-1 w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition">
          </div>
          <div>
            <label class="block text-sm font-semibold text-gray-700">Land *</label>
            <input type="text" name="country"
              class="mt-1 w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
              required>
          </div>
          <div>
            <label class="block text-sm font-semibold text-gray-700">Branche</label>
            <input type="text" name="industry"
              class="mt-1 w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition">
          </div>
          <div>
            <label class="block text-sm font-semibold text-gray-700">Telefon</label>
            <input type="text" name="phone"
              class="mt-1 w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition">
          </div>
          <div>
            <label class="block text-sm font-semibold text-gray-700">Mobilnummer</label>
            <input type="text" name="mobile"
              class="mt-1 w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition">
          </div>
          <div>
            <label class="block text-sm font-semibold text-gray-700">E-Mail</label>
            <input type="email" name="email"
              class="mt-1 w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition">
          </div>
          <div>
            <label class="block text-sm font-semibold text-gray-700">Webseite</label>
            <input type="text" name="website"
              class="mt-1 w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition">
          </div>
          <div class="md:col-span-2">
            <label class="block text-sm font-semibold text-gray-700">Kontaktperson</label>
            <input type="text" name="contact_person"
              class="mt-1 w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition">
          </div>
          <div class="md:col-span-2">
            <label class="block text-sm font-semibold text-gray-700">Notizen</label>
            <textarea name="notes"
              class="mt-1 w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
              rows="3"></textarea>
          </div>
          <div class="md:col-span-2">
            <label class="block text-sm font-semibold text-gray-700">Notizen 2</label>
            <textarea name="notes_2"
              class="mt-1 w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
              rows="3"></textarea>
          </div>
          <div class="md:col-span-2">
            <label class="block text-sm font-semibold text-gray-700">Next Step</label>
            <textarea name="next_step"
              class="mt-1 w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
              rows="3" placeholder="Geben Sie hier die nächsten Schritte ein..."></textarea>
            <label class="flex items-center mt-3">
              <input type="checkbox" id="setDueDate"
                class="mr-2 h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
              Termin setzen
            </label>
            <div id="dueDateContainer" class="mt-3 hidden">
              <input type="datetime-local" id="due_date" name="due_date"
                class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition mb-3"
                step="300">
              <p class="text-sm font-semibold text-gray-700 mb-2">Benachrichtigungen senden an:</p>
              <?php foreach (array_keys($users) as $user): ?>
                <label class="flex items-center">
                  <input type="checkbox" name="notified_users[]" value="<?php echo htmlspecialchars($user); ?>"
                    class="mr-2 h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                  <?php echo htmlspecialchars($user); ?>
                </label>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
        <div>
          <label class="block text-sm font-semibold text-gray-700">Bilder hochladen (JPEG, PNG, GIF, max. 64MB)</label>
          <div id="imageInputsAdd" class="space-y-3 mt-2">
            <div class="image-input-group flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-3">
              <input type="file" name="images[]"
                class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
                accept="image/jpeg,image/png,image/gif">
              <input type="text" name="image_descriptions[]"
                class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
                placeholder="Bezeichnung (z. B. Rechnung_2025)">
            </div>
          </div>
          <button type="button" id="addImageInputBtn"
            class="mt-3 text-indigo-600 hover:text-indigo-700 underline transition">+ Weiteres Bild hinzufügen</button>
        </div>
        <div>
          <label class="block text-sm font-semibold text-gray-700">PDFs hochladen (max. 64MB)</label>
          <div id="pdfInputsAdd" class="space-y-3 mt-2">
            <div class="pdf-input-group flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-3">
              <input type="file" name="pdfs[]"
                class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
                accept="application/pdf">
              <input type="text" name="pdf_descriptions[]"
                class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
                placeholder="Bezeichnung (z. B. Vertrag)">
            </div>
          </div>
          <button type="button" id="addPdfInputBtn"
            class="mt-3 text-indigo-600 hover:text-indigo-700 underline transition">+ Weiteres PDF hinzufügen</button>
        </div>
        <div class="flex justify-end space-x-4">
          <button type="button" id="cancelAddBtn"
            class="border border-gray-300 px-6 py-2 rounded-lg text-gray-600 hover:bg-gray-100 transition">Abbrechen</button>
          <button type="submit"
            class="bg-indigo-600 text-white px-6 py-2 rounded-lg hover:bg-indigo-700 transition">Speichern</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Modales Fenster für Anzeigen/Editieren -->
  <div id="editCustomerModal"
    class="fixed inset-0 bg-black bg-opacity-60 hidden flex items-center justify-center transition-opacity duration-300">
    <div
      class="bg-white rounded-xl shadow-2xl w-11/12 md:w-2/3 lg:w-1/2 max-h-[85vh] overflow-y-auto p-8 transform scale-95 transition-transform duration-300">
      <button id="closeEditModalBtn" class="absolute top-4 right-4 text-gray-500 hover:text-gray-700">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
      <h2 class="text-2xl font-bold text-gray-800 mb-6">Kundendetails</h2>
      <form id="editCustomerForm" class="space-y-6" enctype="multipart/form-data">
        <input type="hidden" name="id">
        <input type="hidden" name="files_to_delete" id="filesToDelete" value="[]">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <label class="block text-sm font-semibold text-gray-700">Kundennummer</label>
            <input type="text" name="customer_id" class="mt-1 w-full border border-gray-300 p-3 rounded-lg bg-gray-50"
              readonly>
          </div>
          <div>
            <label class="block text-sm font-semibold text-gray-700">Firma</label>
            <input type="text" name="company" class="mt-1 w-full border border-gray-300 p-3 rounded-lg bg-gray-50"
              readonly>
          </div>
          <div>
            <label class="block text-sm font-semibold text-gray-700">Name</label>
            <input type="text" name="name" class="mt-1 w-full border border-gray-300 p-3 rounded-lg bg-gray-50"
              readonly>
          </div>
          <div>
            <label class="block text-sm font-semibold text-gray-700">Vorname</label>
            <input type="text" name="first_name" class="mt-1 w-full border border-gray-300 p-3 rounded-lg bg-gray-50"
              readonly>
          </div>
          <div>
            <label class="block text-sm font-semibold text-gray-700">Funktion</label>
            <input type="text" name="role" class="mt-1 w-full border border-gray-300 p-3 rounded-lg bg-gray-50"
              readonly>
          </div>
          <div>
            <label class="block text-sm font-semibold text-gray-700">Straße</label>
            <input type="text" name="street" class="mt-1 w-full border border-gray-300 p-3 rounded-lg bg-gray-50"
              readonly>
          </div>
          <div>
            <label class="block text-sm font-semibold text-gray-700">PLZ</label>
            <input type="text" name="zip_code" class="mt-1 w-full border border-gray-300 p-3 rounded-lg bg-gray-50"
              readonly>
          </div>
          <div>
            <label class="block text-sm font-semibold text-gray-700">Ort</label>
            <input type="text" name="city" class="mt-1 w-full border border-gray-300 p-3 rounded-lg bg-gray-50"
              readonly>
          </div>
          <div>
            <label class="block text-sm font-semibold text-gray-700">Land</label>
            <input type="text" name="country" class="mt-1 w-full border border-gray-300 p-3 rounded-lg bg-gray-50"
              readonly>
          </div>
          <div>
            <label class="block text-sm font-semibold text-gray-700">Branche</label>
            <input type="text" name="industry" class="mt-1 w-full border border-gray-300 p-3 rounded-lg bg-gray-50"
              readonly>
          </div>
          <div>
            <label class="block text-sm font-semibold text-gray-700">Telefon</label>
            <input type="text" id="phoneField" name="phone"
              class="mt-1 w-full border border-gray-300 p-3 rounded-lg bg-gray-50" readonly>
          </div>
          <div>
            <label class="block text-sm font-semibold text-gray-700">Mobilnummer</label>
            <input type="text" id="mobileField" name="mobile"
              class="mt-1 w-full border border-gray-300 p-3 rounded-lg bg-gray-50" readonly>
          </div>
          <div>
            <label class="block text-sm font-semibold text-gray-700">E-Mail</label>
            <input type="email" id="emailField" name="email"
              class="mt-1 w-full border border-gray-300 p-3 rounded-lg bg-gray-50" readonly>
          </div>
          <div>
            <label class="block text-sm font-semibold text-gray-700">Webseite</label>
            <input type="text" id="websiteField" name="website"
              class="mt-1 w-full border border-gray-300 p-3 rounded-lg bg-gray-50" readonly>
          </div>
          <div class="md:col-span-2">
            <label class="block text-sm font-semibold text-gray-700">Kontaktperson</label>
            <input type="text" name="contact_person"
              class="mt-1 w-full border border-gray-300 p-3 rounded-lg bg-gray-50" readonly>
          </div>
          <div class="md:col-span-2">
            <label class="block text-sm font-semibold text-gray-700">Notizen</label>
            <textarea name="notes" class="mt-1 w-full border border-gray-300 p-3 rounded-lg bg-gray-50" rows="3"
              readonly></textarea>
          </div>
          <div class="md:col-span-2">
            <label class="block text-sm font-semibold text-gray-700">Notizen 2</label>
            <textarea name="notes_2" class="mt-1 w-full border border-gray-300 p-3 rounded-lg bg-gray-50" rows="3"
              readonly></textarea>
          </div>
          <div class="md:col-span-2">
            <label class="block text-sm font-semibold text-gray-700">Next Step</label>
            <textarea name="next_step" class="mt-1 w-full border border-gray-300 p-3 rounded-lg bg-gray-50" rows="3"
              readonly placeholder="Geben Sie hier die nächsten Schritte ein..."></textarea>
            <label class="flex items-center mt-3">
              <input type="checkbox" id="setDueDateEdit"
                class="mr-2 h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded" disabled>
              Termin setzen
            </label>
            <div id="dueDateEditContainer" class="mt-3 hidden">
              <input type="datetime-local" id="due_date_edit" name="due_date"
                class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition mb-3"
                step="300">
              <p class="text-sm font-semibold text-gray-700 mb-2">Benachrichtigungen senden an:</p>
              <?php foreach (array_keys($users) as $user): ?>
                <label class="flex items-center">
                  <input type="checkbox" name="notified_users[]" value="<?php echo htmlspecialchars($user); ?>"
                    class="mr-2 h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded" disabled>
                  <?php echo htmlspecialchars($user); ?>
                </label>
              <?php endforeach; ?>
            </div>
          </div>
          <div class="md:col-span-2">
            <label class="block text-sm font-semibold text-gray-700">Interesse an</label>
            <select id="interestsSelect" name="interests[]" multiple
              class="mt-1 w-full border border-gray-300 p-3 rounded-lg bg-gray-50 focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
              style="height: 150px;" readonly>
              <!-- Options werden dynamisch eingefügt -->
            </select>
            <div class="mt-2 flex space-x-2">
              <input type="text" id="new-machine" placeholder="Neue Maschine hinzufügen"
                class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition hidden">
              <button type="button" id="add-machine"
                class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition hidden">Hinzufügen</button>
            </div>
            <input type="text" id="interestsSearch" list="interestsSuggestions" placeholder="Maschine suchen..."
              class="mt-2 w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition hidden">
            <datalist id="interestsSuggestions"></datalist>
            <button type="button" id="addManufacturerBtn"
              class="mt-2 text-indigo-600 hover:text-indigo-700 underline transition hidden">+ Neue Maschine hinzufügen
              (mit Hersteller)</button>
          </div>
        </div>
        <div>
          <button type="button" id="showEmailHistoryBtn"
            class="bg-indigo-600 text-white px-6 py-2 rounded-lg hover:bg-indigo-700 transition">E-Mail-Verlauf
            anzeigen</button>
        </div>
        <div>
          <label class="block text-sm font-semibold text-gray-700">Aktuelle Bilder</label>
          <div id="currentImages" class="mt-3 flex flex-wrap gap-4"></div>
          <div id="imageInputsEdit" class="space-y-3 mt-3">
            <div class="image-input-group flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-3">
              <input type="file" name="images[]"
                class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
                accept="image/jpeg,image/png,image/gif" style="display: none;">
              <input type="text" name="image_descriptions[]"
                class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
                placeholder="Bezeichnung (z. B. Rechnung_2025)" style="display: none;">
            </div>
          </div>
          <button type="button" id="addImageInputEditBtn"
            class="mt-3 text-indigo-600 hover:text-indigo-700 underline transition" style="display: none;">+ Weiteres
            Bild hinzufügen</button>
        </div>
        <div>
          <label class="block text-sm font-semibold text-gray-700">Aktuelle PDFs und Anhänge</label>
          <div id="currentPdfs" class="mt-3 space-y-3"></div>
          <div id="pdfInputsEdit" class="space-y-3 mt-3">
            <div class="pdf-input-group flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-3">
              <input type="file" name="pdfs[]"
                class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
                accept="application/pdf" style="display: none;">
              <input type="text" name="pdf_descriptions[]"
                class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
                placeholder="Bezeichnung (z. B. Vertrag)" style="display: none;">
            </div>
          </div>
          <button type="button" id="addPdfInputEditBtn"
            class="mt-3 text-indigo-600 hover:text-indigo-700 underline transition" style="display: none;">+ Weiteres
            PDF hinzufügen</button>
        </div>
        <div>
          <label class="block text-sm font-semibold text-gray-700">Erstellt von</label>
          <input type="text" name="created_by" class="mt-1 w-full border border-gray-300 p-3 rounded-lg bg-gray-50"
            readonly>
        </div>
        <div>
          <label class="block text-sm font-semibold text-gray-700">Erstellt am</label>
          <input type="text" name="created_at" class="mt-1 w-full border border-gray-300 p-3 rounded-lg bg-gray-50"
            readonly>
        </div>
        <div>
          <label class="block text-sm font-semibold text-gray-700">Zuletzt geändert von</label>
          <input type="text" name="last_modified_by"
            class="mt-1 w-full border border-gray-300 p-3 rounded-lg bg-gray-50" readonly>
        </div>
        <div>
          <label class="block text-sm font-semibold text-gray-700">Zuletzt geändert am</label>
          <input type="text" name="last_modified_at"
            class="mt-1 w-full border border-gray-300 p-3 rounded-lg bg-gray-50" readonly>
        </div>
        <div class="flex justify-end space-x-4">
          <button type="button" id="closeEditBtn"
            class="border border-gray-300 px-6 py-2 rounded-lg text-gray-600 hover:bg-gray-100 transition">Schließen</button>
          <button type="button" id="editBtn"
            class="bg-yellow-600 text-white px-6 py-2 rounded-lg hover:bg-yellow-700 transition">Bearbeiten</button>
          <button type="button" id="deleteBtn"
            class="bg-red-600 text-white px-6 py-2 rounded-lg hover:bg-red-700 transition hidden">Löschen</button>
          <button type="button" id="undoBtn"
            class="bg-gray-600 text-white px-6 py-2 rounded-lg hover:bg-gray-700 transition hidden">Rückgängig</button>
          <button type="submit" id="saveEditBtn"
            class="bg-indigo-600 text-white px-6 py-2 rounded-lg hover:bg-indigo-700 transition hidden">Speichern</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Modales Fenster für E-Mail-Verlauf -->
  <div id="emailHistoryModal"
    class="fixed inset-0 bg-black bg-opacity-60 hidden flex items-center justify-center transition-opacity duration-300 z-[1000]">
    <div
      class="bg-white rounded-xl shadow-2xl w-11/12 md:w-3/4 max-h-[85vh] overflow-y-auto p-8 transform scale-95 transition-transform duration-300">
      <button id="closeEmailHistoryModalBtn" class="absolute top-4 right-4 text-gray-500 hover:text-gray-700">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
      <h2 class="text-2xl font-bold text-gray-800 mb-6">E-Mail-Verlauf</h2>
      <div class="mb-6">
        <label for="userFilter" class="block text-sm font-semibold text-gray-700">Benutzer filtern:</label>
        <select id="userFilter"
          class="mt-1 w-full md:w-48 border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition">
          <option value="">Alle Benutzer</option>
          <?php foreach (array_keys($users) as $user): ?>
            <option value="<?php echo htmlspecialchars($user); ?>"><?php echo htmlspecialchars($user); ?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <div id="emailHistoryContent" class="space-y-4"></div>
      <div class="flex justify-end mt-6">
        <button id="closeEmailHistoryBtn"
          class="border border-gray-300 px-6 py-2 rounded-lg text-gray-600 hover:bg-gray-100 transition">Schließen</button>
      </div>
    </div>
  </div>

  <div id="addManufacturerModal"
    class="fixed inset-0 bg-black bg-opacity-60 hidden flex items-center justify-center transition-opacity duration-300">
    <div
      class="bg-white rounded-xl shadow-2xl w-11/12 md:w-1/2 max-h-[85vh] overflow-y-auto p-8 transform scale-95 transition-transform duration-300">
      <button id="closeAddManufacturerModalBtn" class="absolute top-4 right-4 text-gray-500 hover:text-gray-700">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
      <h2 class="text-2xl font-bold text-gray-800 mb-6">Neue Maschine hinzufügen</h2>
      <form id="addManufacturerForm" class="space-y-6">
        <div>
          <label class="block text-sm font-semibold text-gray-700">Maschinenname *</label>
          <input type="text" name="machine"
            class="mt-1 w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
            required>
        </div>
        <div>
          <label class="block text-sm font-semibold text-gray-700">Hersteller *</label>
          <input type="text" name="manufacturer"
            class="mt-1 w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
            required>
        </div>
        <div class="flex justify-end space-x-4">
          <button type="button" id="cancelAddManufacturerBtn"
            class="border border-gray-300 px-6 py-2 rounded-lg text-gray-600 hover:bg-gray-100 transition">Abbrechen</button>
          <button type="submit"
            class="bg-indigo-600 text-white px-6 py-2 rounded-lg hover:bg-indigo-700 transition">Speichern</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Modales Fenster für Excel-Import -->
  <div id="importCustomerModal"
    class="fixed inset-0 bg-black bg-opacity-60 hidden flex items-center justify-center transition-opacity duration-300">
    <div
      class="bg-white rounded-xl shadow-2xl w-11/12 md:w-1/2 max-h-[85vh] overflow-y-auto p-8 transform scale-95 transition-transform duration-300">
      <button id="closeImportModalBtn" class="absolute top-4 right-4 text-gray-500 hover:text-gray-700">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
      <h2 class="text-2xl font-bold text-gray-800 mb-6">Excel Import</h2>
      <form id="importCustomerForm" class="space-y-6" enctype="multipart/form-data">
        <div>
          <label class="block text-sm font-semibold text-gray-700">Excel-Datei auswählen (max. 5MB) *</label>
          <input type="file" name="excel_file"
            class="mt-1 w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
            accept=".xlsx" required>
        </div>
        <div class="flex justify-end space-x-4">
          <button type="button" id="cancelImportBtn"
            class="border border-gray-300 px-6 py-2 rounded-lg text-gray-600 hover:bg-gray-100 transition">Abbrechen</button>
          <button type="submit"
            class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 transition">Importieren</button>
        </div>
      </form>
    </div>
  </div>

  <!-- ... Vorausgehender HTML- und PHP-Code bleibt unverändert ... -->

  <script>
    // Globale Variablen
    let customerCards = [];
    let filesToDelete = [];
    let isDropdownEditable = false;

    // DOM-Initialisierung
    document.addEventListener('DOMContentLoaded', () => {
      initializeCustomerCards();
      setupEventListeners();
    });

    function initializeCustomerCards() {
      const customerCardsContainer = document.getElementById('customerCards');
      if (customerCardsContainer) {
        customerCards = Array.from(customerCardsContainer.querySelectorAll('.customer-card'));
        console.log(`Initialisierte Kundenkarten: ${customerCards.length}`);

        // Autovervollständigung für Filter
        const roles = [...new Set(customerCards.map(card => card.dataset.role).filter(role => role && role.trim()))];
        const names = [...new Set(customerCards.map(card => card.dataset.name))];
        const countries = [...new Set(customerCards.map(card => card.dataset.country))];
        const industries = [...new Set(customerCards.map(card => card.dataset.industry).filter(industry => industry && industry.trim()))];
        const companies = [...new Set(customerCards.map(card => card.dataset.company).filter(company => company && company.trim()))];

        populateDatalist('nameSuggestions', names);
        populateDatalist('countrySuggestions', countries);
        populateDatalist('industrySuggestions', industries);
        populateDatalist('companySuggestions', companies);
        populateSelect('roleSearchInput', roles, 'Alle Funktionen');

        filterAndSortCustomers();
      } else {
        console.error('customerCardsContainer nicht gefunden!');
      }
    }

    function populateDatalist(id, items) {
      const datalist = document.getElementById(id);
      if (datalist) {
        items.forEach(item => {
          const option = document.createElement('option');
          option.value = item;
          datalist.appendChild(option);
        });
      }
    }

    function populateSelect(id, items, defaultOption) {
      const select = document.getElementById(id);
      if (select) {
        select.innerHTML = `<option value="">${defaultOption}</option>`;
        items.forEach(item => {
          const option = document.createElement('option');
          option.value = item;
          option.textContent = item;
          select.appendChild(option);
        });
      }
    }

    function debounce(func, wait) {
      let timeout;
      return function (...args) {
        clearTimeout(timeout);
        timeout = setTimeout(() => func.apply(this, args), wait);
      };
    }

    function filterAndSortCustomers() {
      const nameSearch = document.getElementById('nameSearchInput')?.value.toLowerCase() || '';
      const countrySearch = document.getElementById('countrySearchInput')?.value.toLowerCase() || '';
      const industrySearch = document.getElementById('industrySearchInput')?.value.toLowerCase() || '';
      const roleSearch = document.getElementById('roleSearchInput')?.value.toLowerCase() || '';
      const companySearch = document.getElementById('companySearchInput')?.value.toLowerCase() || '';
      const sortOption = document.getElementById('sortSelect')?.value || 'name-asc';
      const filterNextStep = document.getElementById('filterNextStep')?.checked || false;
      const filterWithInterests = document.getElementById('filterWithInterests')?.checked || false;

      customerCards.forEach(card => {
        const name = card.dataset.name.toLowerCase();
        const country = card.dataset.country.toLowerCase();
        const industry = card.dataset.industry.toLowerCase();
        const role = card.dataset.role.toLowerCase();
        const company = card.dataset.company.toLowerCase();
        const nextStep = card.dataset.nextStep;
        const interests = card.dataset.interests;

        const matchesSearch = (
          name.includes(nameSearch) &&
          country.includes(countrySearch) &&
          industry.includes(industrySearch) &&
          (roleSearch === '' || role === roleSearch) &&
          company.includes(companySearch)
        );

        const matchesNextStep = !filterNextStep || (nextStep && nextStep.trim() !== '');
        const matchesInterests = !filterWithInterests || (interests && interests.trim() !== '' && interests !== 'Keine Interessen eingetragen');

        card.style.display = matchesSearch && matchesNextStep && matchesInterests ? '' : 'none';
      });

      // Sortierung
      const sortedCards = Array.from(customerCards).sort((a, b) => {
        if (sortOption === 'name-asc') return a.dataset.name.localeCompare(b.dataset.name);
        if (sortOption === 'name-desc') return b.dataset.name.localeCompare(a.dataset.name);
        if (sortOption === 'date-asc') return new Date(a.dataset.lastModified) - new Date(b.dataset.lastModified);
        if (sortOption === 'date-desc') return new Date(b.dataset.lastModified) - new Date(a.dataset.lastModified);
        return 0;
      });

      const container = document.getElementById('customerCards');
      container.innerHTML = '';
      sortedCards.forEach(card => container.appendChild(card));
    }

    function showToast(message, isError = false) {
      const toast = document.getElementById('toast');
      if (toast) {
        toast.textContent = message;
        toast.classList.remove('bg-green-600', 'bg-red-600');
        toast.classList.add(isError ? 'bg-red-600' : 'bg-green-600');
        toast.classList.remove('hidden');
        setTimeout(() => toast.classList.add('hidden'), 3000);
      }
    }

    function showLoading(show) {
      const loadingIndicator = document.getElementById('loadingIndicator');
      if (loadingIndicator) {
        loadingIndicator.classList.toggle('hidden', !show);
      }
    }

    function htmlspecialchars(str) {
      if (typeof str !== 'string') return '';
      const div = document.createElement('div');
      div.textContent = decodeURIComponent(encodeURIComponent(str));
      return div.innerHTML;
    }

    async function fetchCustomerDetails(id) {
      try {
        showLoading(true);
        console.log(`Lade Kundendaten für ID: ${id}`);
        const response = await fetch(`<?php echo BASE_PATH; ?>get_customer.php?id=${encodeURIComponent(id)}`, {
          headers: { 'Accept': 'application/json' }
        });

        const responseText = await response.text(); // Rohantwort für Debugging
        console.log(`Rohantwort von get_customer.php für ID ${id}:`, responseText);

        if (!response.ok) {
          throw new Error(`HTTP-Fehler: ${response.status} - ${responseText}`);
        }

        const customer = JSON.parse(responseText);
        console.log('Geparste Antwort von get_customer.php:', customer);

        if (!customer.success) {
          throw new Error(customer.error || 'Unbekannter Fehler vom Server');
        }

        const form = document.getElementById('editCustomerForm');
        if (!form) {
          throw new Error('editCustomerForm nicht gefunden');
        }

        // Formularfelder füllen
        form.querySelector('[name="id"]').value = customer.data.id || '';
        form.querySelector('[name="customer_id"]').value = customer.data.customer_id || '';
        form.querySelector('[name="company"]').value = customer.data.company || '';
        form.querySelector('[name="name"]').value = customer.data.name || '';
        form.querySelector('[name="first_name"]').value = customer.data.first_name || '';
        form.querySelector('[name="role"]').value = customer.data.role || '';
        form.querySelector('[name="street"]').value = customer.data.street || '';
        form.querySelector('[name="zip_code"]').value = customer.data.zip_code || '';
        form.querySelector('[name="city"]').value = customer.data.city || '';
        form.querySelector('[name="country"]').value = customer.data.country || '';
        form.querySelector('[name="industry"]').value = customer.data.industry || '';
        form.querySelector('[name="phone"]').value = customer.data.phone || '';
        form.querySelector('[name="mobile"]').value = customer.data.mobile || '';
        form.querySelector('[name="email"]').value = customer.data.email || '';
        form.querySelector('[name="website"]').value = customer.data.website || '';
        form.querySelector('[name="contact_person"]').value = customer.data.contact_person || '';
        form.querySelector('[name="notes"]').value = customer.data.notes || '';
        form.querySelector('[name="notes_2"]').value = customer.data.notes_2 || '';
        form.querySelector('[name="next_step"]').value = customer.data.next_step || '';
        form.querySelector('[name="created_by"]').value = customer.data.created_by || '';
        form.querySelector('[name="created_at"]').value = customer.data.created_at || '';
        form.querySelector('[name="last_modified_by"]').value = customer.data.last_modified_by || '';
        form.querySelector('[name="last_modified_at"]').value = customer.data.last_modified_at || '';

        // Links für Telefon, Mobil, E-Mail und Webseite
        const fields = [
          { id: 'emailField', name: 'email', type: 'mailto' },
          { id: 'phoneField', name: 'phone', type: 'tel' },
          { id: 'mobileField', name: 'mobile', type: 'tel' },
          { id: 'websiteField', name: 'website', type: 'url' }
        ];

        fields.forEach(field => {
          const input = document.getElementById(field.id);
          if (input && customer.data[field.name]) {
            let html = `<label class="block text-sm font-semibold text-gray-700">${input.previousElementSibling.textContent}</label>`;
            if (field.type === 'url') {
              const url = customer.data[field.name].match(/^https?:\/\//) ? customer.data[field.name] : `https://${customer.data[field.name]}`;
              html += `<a href="${encodeURIComponent(url)}" target="_blank" rel="noopener noreferrer" class="text-indigo-600 hover:underline">${customer.data[field.name]}</a>`;
            } else {
              html += `<a href="${field.type}:${encodeURIComponent(customer.data[field.name])}" class="text-indigo-600 hover:underline">${customer.data[field.name]}</a>`;
            }
            html += `<input type="${field.name === 'email' ? 'email' : 'text'}" id="${field.id}" name="${field.name}" class="mt-1 w-full border border-gray-300 p-3 rounded-lg bg-gray-50 hidden" value="${customer.data[field.name] || ''}" readonly>`;
            input.parentElement.innerHTML = html;
          } else if (input) {
            input.parentElement.innerHTML = `<label class="block text-sm font-semibold text-gray-700">${input.previousElementSibling.textContent}</label><input type="${field.name === 'email' ? 'email' : 'text'}" id="${field.id}" name="${field.name}" class="mt-1 w-full border border-gray-300 p-3 rounded-lg bg-gray-50" value="" readonly>`;
          }
        });

        // Bilder und PDFs
        const currentImages = document.getElementById('currentImages');
        const currentPdfs = document.getElementById('currentPdfs');
        currentImages.innerHTML = customer.data.files.filter(f => f.file_type === 'image').length ? '' : '<p class="text-gray-500">Keine Bilder vorhanden</p>';
        currentPdfs.innerHTML = customer.data.files.filter(f => f.file_type === 'pdf' || f.file_type === 'email_attachment').length ? '' : '<p class="text-gray-500">Keine PDFs oder Anhänge vorhanden</p>';

        customer.data.files.forEach(file => {
          if (file.file_type === 'image') {
            currentImages.innerHTML += `
                    <div class="relative image-container border-2 border-transparent p-2" data-path="${file.file_path}">
                        <input type="text" name="existing_image_descriptions[${file.file_path}]" class="w-full border border-gray-300 p-3 rounded-lg bg-gray-50 mb-2 existing-description" value="${file.description || ''}" readonly>
                        <a href="${file.file_path}" target="_blank"><img src="${file.file_path}" alt="Kundenbild" class="w-24 h-24 object-cover rounded-lg"></a>
                        <button class="delete-file absolute top-0 right-0 bg-red-600 text-white rounded-full w-6 h-6 flex items-center justify-center disabled:bg-gray-400" data-path="${file.file_path}" disabled>×</button>
                    </div>`;
          } else if (file.file_type === 'pdf' || file.file_type === 'email_attachment') {
            currentPdfs.innerHTML += `
                    <div class="relative pdf-container border-2 border-transparent p-2" data-path="${file.file_path}">
                        <input type="text" name="existing_pdf_descriptions[${file.file_path}]" class="w-full border border-gray-300 p-3 rounded-lg bg-gray-50 mb-2 existing-description" value="${file.description || ''}" readonly>
                        <p><a href="${file.file_path}" target="_blank" class="text-indigo-600 hover:underline">Datei anzeigen</a></p>
                        <button class="delete-file absolute top-0 right-0 bg-red-600 text-white rounded-full w-6 h-6 flex items-center justify-center disabled:bg-gray-400" data-path="${file.file_path}" disabled>×</button>
                    </div>`;
          }
        });

        // Interessen
        const interestsSelect = document.getElementById('interestsSelect');
        interestsSelect.innerHTML = '';
        const machinesResponse = await fetch('<?php echo BASE_PATH; ?>get_manufacturers.php');
        const machinesResult = await machinesResponse.json();
        if (machinesResult.success) {
          machinesResult.data.forEach(machine => {
            const option = document.createElement('option');
            option.value = machine.id;
            option.textContent = machine.machine;
            if (customer.data.interests.some(interest => interest.id == machine.id)) {
              option.selected = true;
            }
            interestsSelect.appendChild(option);
          });
        } else {
          showToast('Fehler beim Laden der Maschinen', true);
        }

        // Next Step und Fälligkeitsdatum
        const setDueDateEdit = document.getElementById('setDueDateEdit');
        const dueDateEditContainer = document.getElementById('dueDateEditContainer');
        const due_date_edit = document.getElementById('due_date_edit');
        const nsResponse = await fetch(`<?php echo BASE_PATH; ?>get_next_step.php?customer_id=${id}`);
        const nextStep = await nsResponse.json();
        if (nextStep.success && nextStep.data.due_date) {
          setDueDateEdit.checked = true;
          dueDateEditContainer.classList.remove('hidden');
          due_date_edit.value = nextStep.data.due_date.replace(' ', 'T');
          const notifiedUsers = nextStep.data.notified_users || [];
          dueDateEditContainer.querySelectorAll('input[name="notified_users[]"]').forEach(checkbox => {
            checkbox.checked = notifiedUsers.includes(checkbox.value);
          });
        } else {
          setDueDateEdit.checked = false;
          dueDateEditContainer.classList.add('hidden');
          due_date_edit.value = '';
          dueDateEditContainer.querySelectorAll('input[name="notified_users[]"]').forEach(checkbox => {
            checkbox.checked = false;
          });
        }

        document.getElementById('editCustomerModal').classList.remove('hidden');
        showToast('Kundendaten geladen');
      } catch (error) {
        console.error('Fehler in fetchCustomerDetails für ID ' + id + ':', error);
        showToast(`Fehler beim Abrufen der Kundendaten: ${error.message}`, true);
      } finally {
        showLoading(false);
      }
    }

    function setupEventListeners() {
      const elements = {
        menuBtn: document.getElementById('menuBtn'),
        sidebar: document.getElementById('sidebar'),
        selectAllVisible: document.getElementById('selectAllVisible'),
        nameSearchInput: document.getElementById('nameSearchInput'),
        countrySearchInput: document.getElementById('countrySearchInput'),
        industrySearchInput: document.getElementById('industrySearchInput'),
        roleSearchInput: document.getElementById('roleSearchInput'),
        companySearchInput: document.getElementById('companySearchInput'),
        sortSelect: document.getElementById('sortSelect'),
        filterNextStep: document.getElementById('filterNextStep'),
        filterWithInterests: document.getElementById('filterWithInterests'),
        exportBtn: document.getElementById('exportBtn'),
        importBtn: document.getElementById('importBtn'),
        deleteBtn: document.getElementById('deleteBtn'),
        addCustomerBtn: document.getElementById('addCustomerBtn'),
        addModal: document.getElementById('addCustomerModal'),
        closeAddModalBtn: document.getElementById('closeAddModalBtn'),
        cancelAddBtn: document.getElementById('cancelAddBtn'),
        editModal: document.getElementById('editCustomerModal'),
        closeEditModalBtn: document.getElementById('closeEditModalBtn'),
        editBtn: document.getElementById('editBtn'),
        saveEditBtn: document.getElementById('saveEditBtn'),
        deleteBtnModal: document.getElementById('deleteBtn'),
        undoBtn: document.getElementById('undoBtn'),
        showEmailHistoryBtn: document.getElementById('showEmailHistoryBtn'),
        emailHistoryModal: document.getElementById('emailHistoryModal'),
        closeEmailHistoryBtn: document.getElementById('closeEmailHistoryBtn'),
        closeEmailHistoryModalBtn: document.getElementById('closeEmailHistoryModalBtn'),
        emailHistoryContent: document.getElementById('emailHistoryContent'),
        userFilter: document.getElementById('userFilter'),
        interestsSelect: document.getElementById('interestsSelect'),
        newMachine: document.getElementById('new-machine'),
        addMachine: document.getElementById('add-machine'),
        interestsSearch: document.getElementById('interestsSearch'),
        interestsSuggestions: document.getElementById('interestsSuggestions'),
        addManufacturerBtn: document.getElementById('addManufacturerBtn'),
        addManufacturerModal: document.getElementById('addManufacturerModal'),
        closeAddManufacturerModalBtn: document.getElementById('closeAddManufacturerModalBtn'),
        cancelAddManufacturerBtn: document.getElementById('cancelAddManufacturerBtn'),
        addManufacturerForm: document.getElementById('addManufacturerForm'),
        addImageInputBtn: document.getElementById('addImageInputBtn'),
        imageInputsAdd: document.getElementById('imageInputsAdd'),
        addPdfInputBtn: document.getElementById('addPdfInputBtn'),
        pdfInputsAdd: document.getElementById('pdfInputsAdd'),
        addImageInputEditBtn: document.getElementById('addImageInputEditBtn'),
        imageInputsEdit: document.getElementById('imageInputsEdit'),
        addPdfInputEditBtn: document.getElementById('addPdfInputEditBtn'),
        pdfInputsEdit: document.getElementById('pdfInputsEdit'),
        setDueDate: document.getElementById('setDueDate'),
        setDueDateEdit: document.getElementById('setDueDateEdit'),
        dueDateContainer: document.getElementById('dueDateContainer'),
        dueDateEditContainer: document.getElementById('dueDateEditContainer'),
        deleteConfirmModal: document.getElementById('deleteConfirmModal'),
        confirmDeleteBtn: document.getElementById('confirmDeleteBtn'),
        cancelDeleteBtn: document.getElementById('cancelDeleteBtn'),
        importModal: document.getElementById('importCustomerModal'),
        closeImportModalBtn: document.getElementById('closeImportModalBtn'),
        cancelImportBtn: document.getElementById('cancelImportBtn'),
        addCustomerForm: document.getElementById('addCustomerForm'),
        editCustomerForm: document.getElementById('editCustomerForm'),
        importCustomerForm: document.getElementById('importCustomerForm')
      };

      // Hamburger-Menü
      if (elements.menuBtn && elements.sidebar) {
        elements.menuBtn.addEventListener('click', () => {
          elements.sidebar.classList.toggle('-translate-x-full');
        });
      }

      // Alle sichtbaren auswählen
      if (elements.selectAllVisible) {
        elements.selectAllVisible.addEventListener('change', () => {
          const isChecked = elements.selectAllVisible.checked;
          customerCards.forEach(card => {
            if (card.style.display !== 'none') {
              const checkbox = card.querySelector('.select-customer');
              if (checkbox) checkbox.checked = isChecked;
            }
          });
          elements.deleteBtn.classList.toggle('hidden', !document.querySelectorAll('.select-customer:checked').length);
        });
      }

      // Filter-Event-Listener
      if (elements.nameSearchInput) elements.nameSearchInput.addEventListener('input', debounce(filterAndSortCustomers, 300));
      if (elements.countrySearchInput) elements.countrySearchInput.addEventListener('input', debounce(filterAndSortCustomers, 300));
      if (elements.industrySearchInput) elements.industrySearchInput.addEventListener('input', debounce(filterAndSortCustomers, 300));
      if (elements.roleSearchInput) elements.roleSearchInput.addEventListener('change', filterAndSortCustomers);
      if (elements.companySearchInput) elements.companySearchInput.addEventListener('input', debounce(filterAndSortCustomers, 300));
      if (elements.sortSelect) elements.sortSelect.addEventListener('change', filterAndSortCustomers);
      if (elements.filterNextStep) elements.filterNextStep.addEventListener('change', filterAndSortCustomers);
      if (elements.filterWithInterests) elements.filterWithInterests.addEventListener('change', filterAndSortCustomers);

      // Export-Button
      if (elements.exportBtn) {
        elements.exportBtn.addEventListener('click', async () => {
          const selectedIds = Array.from(document.querySelectorAll('.select-customer:checked')).map(checkbox => parseInt(checkbox.dataset.id));
          if (selectedIds.length === 0) {
            showToast('Bitte wählen Sie mindestens einen Kunden aus.', true);
            return;
          }
          try {
            showLoading(true);
            const response = await fetch('<?php echo BASE_PATH; ?>export_customer_excel.php', {
              method: 'POST',
              headers: { 'Content-Type': 'application/json' },
              body: JSON.stringify({ ids: selectedIds })
            });
            if (response.ok) {
              const blob = await response.blob();
              const url = URL.createObjectURL(blob);
              const link = document.createElement('a');
              link.href = url;
              link.download = `customers_export_${new Date().toISOString().replace(/[:.]/g, '-')}.xlsx`;
              document.body.appendChild(link);
              link.click();
              document.body.removeChild(link);
              URL.revokeObjectURL(url);
              showToast('Kunden erfolgreich exportiert!');
            } else {
              const result = await response.json();
              showToast(`Fehler beim Export: ${result.error}`, true);
            }
          } catch (error) {
            showToast(`Fehler beim Export: ${error.message}`, true);
          } finally {
            showLoading(false);
          }
        });
      }

      // Import-Button
      if (elements.importBtn && elements.importModal && elements.closeImportModalBtn && elements.cancelImportBtn) {
        elements.importBtn.addEventListener('click', () => elements.importModal.classList.remove('hidden'));
        elements.closeImportModalBtn.addEventListener('click', () => {
          elements.importModal.classList.add('hidden');
          elements.importCustomerForm.reset();
        });
        elements.cancelImportBtn.addEventListener('click', () => {
          elements.importModal.classList.add('hidden');
          elements.importCustomerForm.reset();
        });
      }

      // Löschen
      if (elements.deleteBtn && elements.deleteConfirmModal && elements.confirmDeleteBtn && elements.cancelDeleteBtn) {
        document.querySelectorAll('.select-customer').forEach(checkbox => {
          checkbox.addEventListener('change', () => {
            const selectedCount = document.querySelectorAll('.select-customer:checked').length;
            elements.deleteBtn.classList.toggle('hidden', selectedCount === 0);
          });
        });

        elements.deleteBtn.addEventListener('click', () => {
          if (document.querySelectorAll('.select-customer:checked').length > 0) {
            elements.deleteConfirmModal.classList.remove('hidden');
          }
        });

        elements.cancelDeleteBtn.addEventListener('click', () => {
          elements.deleteConfirmModal.classList.add('hidden');
          document.querySelectorAll('.select-customer').forEach(checkbox => checkbox.checked = false);
          elements.deleteBtn.classList.add('hidden');
        });

        elements.confirmDeleteBtn.addEventListener('click', async () => {
          const selectedIds = Array.from(document.querySelectorAll('.select-customer:checked')).map(checkbox => parseInt(checkbox.dataset.id));
          try {
            showLoading(true);
            const response = await fetch('<?php echo BASE_PATH; ?>delete_customer.php', {
              method: 'POST',
              headers: { 'Content-Type': 'application/json' },
              body: JSON.stringify({ ids: selectedIds })
            });
            const result = await response.json();
            if (result.success) {
              elements.deleteConfirmModal.classList.add('hidden');
              showToast('Kunden erfolgreich gelöscht!');
              setTimeout(() => location.reload(), 2000);
            } else {
              showToast(`Fehler beim Löschen: ${result.error}`, true);
            }
          } catch (error) {
            showToast(`Fehler beim Löschen: ${error.message}`, true);
          } finally {
            showLoading(false);
          }
        });
      }

      // Kunde hinzufügen
      if (elements.addCustomerBtn && elements.closeAddModalBtn && elements.cancelAddBtn) {
        elements.addCustomerBtn.addEventListener('click', () => {
          elements.addModal.classList.remove('hidden');
        });
        elements.closeAddModalBtn.addEventListener('click', () => {
          elements.addModal.classList.add('hidden');
          elements.addCustomerForm.reset();
          while (elements.imageInputsAdd.children.length > 1) elements.imageInputsAdd.removeChild(elements.imageInputsAdd.lastChild);
          while (elements.pdfInputsAdd.children.length > 1) elements.pdfInputsAdd.removeChild(elements.pdfInputsAdd.lastChild);
        });
        elements.cancelAddBtn.addEventListener('click', () => {
          elements.addModal.classList.add('hidden');
          elements.addCustomerForm.reset();
          while (elements.imageInputsAdd.children.length > 1) elements.imageInputsAdd.removeChild(elements.imageInputsAdd.lastChild);
          while (elements.pdfInputsAdd.children.length > 1) elements.pdfInputsAdd.removeChild(elements.pdfInputsAdd.lastChild);
        });
      }

      // Kunde bearbeiten
      console.log('Überprüfe Bearbeiten- und Schließen-Buttons...');
      const editBtn = document.getElementById('editBtn');
      const closeEditBtn = document.getElementById('closeEditBtn');
      const closeEditModalBtn = document.getElementById('closeEditModalBtn');
      const saveEditBtn = document.getElementById('saveEditBtn');
      const deleteBtnModal = document.getElementById('deleteBtn');
      const undoBtn = document.getElementById('undoBtn');
      const editModal = document.getElementById('editCustomerModal');
      const editCustomerForm = document.getElementById('editCustomerForm');

      if (editBtn && closeEditBtn && closeEditModalBtn && saveEditBtn && deleteBtnModal && undoBtn && editModal && editCustomerForm) {
        console.log('Alle Bearbeiten- und Schließen-Buttons gefunden. Binde Event-Listener...');

        closeEditModalBtn.addEventListener('click', (e) => {
          console.log('Schließen-Button (X) geklickt');
          editModal.classList.add('hidden');
          resetEditForm();
        });

        closeEditBtn.addEventListener('click', (e) => {
          console.log('Schließen-Button (Formular) geklickt');
          editModal.classList.add('hidden');
          resetEditForm();
        });

        editBtn.addEventListener('click', (e) => {
          console.log('Bearbeiten-Button geklickt');
          try {
            editCustomerForm.querySelectorAll('input:not([name="id"]):not([name="created_by"]):not([name="created_at"]):not([name="last_modified_by"]):not([name="last_modified_at"])').forEach(input => {
              if (!input.classList.contains('existing-description')) {
                input.removeAttribute('readonly');
                input.classList.remove('bg-gray-50');
              }
              if (['emailField', 'phoneField', 'mobileField', 'websiteField'].includes(input.id)) {
                input.classList.remove('hidden');
                if (input.previousElementSibling?.tagName === 'A') {
                  input.previousElementSibling.style.display = 'none';
                }
              }
            });
            editCustomerForm.querySelectorAll('.existing-description').forEach(input => {
              input.removeAttribute('readonly');
              input.classList.remove('bg-gray-50');
            });
            editCustomerForm.querySelectorAll('textarea').forEach(textarea => {
              textarea.removeAttribute('readonly');
              textarea.classList.remove('bg-gray-50');
            });
            const imageInput = editCustomerForm.querySelector('input[name="images[]"]');
            if (imageInput) imageInput.style.display = 'block';
            const pdfInput = editCustomerForm.querySelector('input[name="pdfs[]"]');
            if (pdfInput) pdfInput.style.display = 'block';
            const addImageInputEditBtn = document.getElementById('addImageInputEditBtn');
            if (addImageInputEditBtn) addImageInputEditBtn.style.display = 'block';
            const addPdfInputEditBtn = document.getElementById('addPdfInputEditBtn');
            if (addPdfInputEditBtn) addPdfInputEditBtn.style.display = 'block';
            editCustomerForm.querySelectorAll('input[name="image_descriptions[]"]').forEach(input => input.style.display = 'block');
            editCustomerForm.querySelectorAll('input[name="pdf_descriptions[]"]').forEach(input => input.style.display = 'block');
            editBtn.classList.add('hidden');
            saveEditBtn.classList.remove('hidden');
            deleteBtnModal.classList.remove('hidden');

            const setDueDateEdit = document.getElementById('setDueDateEdit');
            const dueDateEditContainer = document.getElementById('dueDateEditContainer');
            if (setDueDateEdit && dueDateEditContainer) {
              setDueDateEdit.disabled = false;
              dueDateEditContainer.querySelectorAll('input[name="notified_users[]"]').forEach(checkbox => {
                checkbox.disabled = false;
              });
            }

            document.querySelectorAll('.delete-file').forEach(button => {
              button.disabled = false;
              button.addEventListener('click', (e) => {
                e.preventDefault();
                console.log('Löschen-Button für Datei geklickt:', button.dataset.path);
                const filePath = button.dataset.path;
                if (confirm('Möchten Sie diese Datei wirklich löschen?')) {
                  const container = button.parentElement;
                  container.classList.add('opacity-50');
                  container.style.borderStyle = 'dashed';
                  container.style.borderColor = 'red';
                  container.querySelector('img, a').style.pointerEvents = 'none';
                  button.style.display = 'none';
                  filesToDelete.push(filePath);
                  editCustomerForm.querySelector('#filesToDelete').value = JSON.stringify(filesToDelete);
                  undoBtn.classList.remove('hidden');
                }
              });
            });

            const interestsSelect = document.getElementById('interestsSelect');
            if (interestsSelect) {
              interestsSelect.removeAttribute('readonly');
              interestsSelect.classList.remove('bg-gray-50');
            }
            const newMachine = document.getElementById('new-machine');
            if (newMachine) newMachine.classList.remove('hidden');
            const addMachine = document.getElementById('add-machine');
            if (addMachine) addMachine.classList.remove('hidden');
            const interestsSearch = document.getElementById('interestsSearch');
            if (interestsSearch) interestsSearch.classList.remove('hidden');
            const addManufacturerBtn = document.getElementById('addManufacturerBtn');
            if (addManufacturerBtn) addManufacturerBtn.classList.remove('hidden');
            isDropdownEditable = true;
          } catch (error) {
            console.error('Fehler beim Aktivieren des Bearbeitungsmodus:', error);
            showToast('Fehler beim Aktivieren des Bearbeitungsmodus. Bitte wende dich an den Administrator.', true);
          }
        });

        undoBtn.addEventListener('click', (e) => {
          console.log('Rückgängig-Button geklickt');
          filesToDelete = [];
          editCustomerForm.querySelector('#filesToDelete').value = JSON.stringify(filesToDelete);
          undoBtn.classList.add('hidden');
          document.querySelectorAll('.image-container, .pdf-container').forEach(container => {
            container.classList.remove('opacity-50');
            container.style.borderStyle = 'none';
            container.style.borderColor = 'transparent';
            container.querySelector('img, a').style.pointerEvents = 'auto';
            const deleteBtn = container.querySelector('.delete-file');
            if (deleteBtn) {
              deleteBtn.style.display = 'flex';
              deleteBtn.disabled = true;
            }
          });
        });
      } else {
        console.error('Ein oder mehrere Bearbeiten-/Schließen-Buttons nicht gefunden:', {
          editBtn: !!editBtn,
          closeEditBtn: !!closeEditBtn,
          closeEditModalBtn: !!closeEditModalBtn,
          saveEditBtn: !!saveEditBtn,
          deleteBtnModal: !!deleteBtnModal,
          undoBtn: !!undoBtn,
          editModal: !!editModal,
          editCustomerForm: !!editCustomerForm
        });
      }

      // E-Mail-Verlauf
      if (elements.showEmailHistoryBtn && elements.emailHistoryModal && elements.closeEmailHistoryBtn && elements.closeEmailHistoryModalBtn && elements.emailHistoryContent && elements.userFilter) {
        elements.showEmailHistoryBtn.addEventListener('click', async () => {
          const customerId = parseInt(elements.editCustomerForm.querySelector('[name="id"]').value);
          if (isNaN(customerId)) {
            showToast('Ungültige Kunden-ID', true);
            return;
          }
          try {
            showLoading(true);
            const response = await fetch(`<?php echo BASE_PATH; ?>get_customer_emails.php?customer_id=${customerId}`);
            const result = await response.json();
            if (result.success) {
              const emails = result.data;
              elements.emailHistoryContent.innerHTML = emails.length === 0 ? '<p class="text-gray-600">Keine E-Mails gefunden.</p>' : '';
              emails.forEach((email, index) => {
                let cleanText = email.message_text || 'Kein Text';
                const signatureMarkers = ['Mit freundlichen Grüßen', 'Kind regards', '---', '\n\n\n'];
                for (const marker of signatureMarkers) {
                  const idx = cleanText.indexOf(marker);
                  if (idx !== -1) {
                    cleanText = cleanText.substring(0, idx).trim();
                    break;
                  }
                }
                cleanText = cleanText.replace(/ /g, ' ').replace(/\s+/g, ' ').trim();
                const shortText = cleanText.substring(0, 200) + (cleanText.length > 200 ? '...' : '');
                const fullText = cleanText;
                const emailDiv = document.createElement('div');
                emailDiv.className = 'border border-gray-200 p-4 rounded-lg bg-gray-50 mb-2 email-entry';
                emailDiv.dataset.emailIndex = index;
                emailDiv.innerHTML = `
                                    <div class="flex justify-between items-start">
                                        <div>
                                            <p><strong>Betreff:</strong> ${htmlspecialchars(email.subject || 'Kein Betreff')}</p>
                                            <p><strong>Absender:</strong> ${htmlspecialchars(email.sender)}</p>
                                            <p><strong>Empfänger:</strong> ${htmlspecialchars(email.recipient)}</p>
                                            <p><strong>Gesendet:</strong> ${new Date(email.sent_at).toLocaleString('de-DE')}</p>
                                            <p><strong>Erstellt von:</strong> ${htmlspecialchars(email.created_by || 'Unbekannt')}</p>
                                            <div class="message-container max-w-full overflow-x-hidden break-words overflow-wrap-normal text-sm leading-relaxed">
                                                <div class="message-content max-w-full whitespace-pre-wrap break-words">${htmlspecialchars(shortText).replace(/\[cid:image[^\]]+\]/g, '[Bild nicht verfügbar]')}</div>
                                            </div>
                                            ${cleanText.length > 200 ? '<button class="toggle-message-btn text-indigo-600 hover:text-indigo-700 focus:outline-none mt-2"><svg class="w-5 h-5 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>' : ''}
                                            ${email.attachments && email.attachments.length > 0 ? `<p><strong>Anhänge:</strong><ul class="list-disc list-inside">${email.attachments.map(att => `<li><a href="${htmlspecialchars(att.file_path)}" target="_blank" class="text-indigo-600 hover:underline">${htmlspecialchars(att.description || att.file_path)}</a></li>`).join('')}</ul>` : ''}
                                        </div>
                                    </div>
                                `;
                elements.emailHistoryContent.appendChild(emailDiv);
                if (cleanText.length > 200) {
                  const toggleBtn = emailDiv.querySelector('.toggle-message-btn');
                  const messageContent = emailDiv.querySelector('.message-content');
                  let isExpanded = false;
                  toggleBtn.addEventListener('click', () => {
                    isExpanded = !isExpanded;
                    messageContent.innerHTML = htmlspecialchars(isExpanded ? fullText : shortText).replace(/\[cid:image[^\]]+\]/g, '[Bild nicht verfügbar]');
                    toggleBtn.querySelector('svg').classList.toggle('rotate-180', isExpanded);
                  });
                }
              });
              elements.userFilter.innerHTML = '<option value="">Alle Benutzer</option>';
              [...new Set(emails.map(email => email.created_by).filter(Boolean))].forEach(user => {
                const option = document.createElement('option');
                option.value = user;
                option.textContent = user;
                elements.userFilter.appendChild(option);
              });
              elements.userFilter.value = '';
              const applyUserFilter = () => {
                const selectedUser = elements.userFilter.value.toLowerCase();
                elements.emailHistoryContent.querySelectorAll('.email-entry').forEach(div => {
                  const index = parseInt(div.dataset.emailIndex);
                  const createdBy = emails[index].created_by ? emails[index].created_by.toLowerCase() : '';
                  div.style.display = selectedUser === '' || createdBy === selectedUser ? 'block' : 'none';
                });
              };
              elements.userFilter.addEventListener('change', applyUserFilter);
              applyUserFilter();
              elements.emailHistoryModal.classList.remove('hidden');
              showToast('E-Mails erfolgreich geladen!');
            } else {
              showToast(`Fehler beim Abrufen der E-Mails: ${result.error}`, true);
            }
          } catch (error) {
            showToast(`Fehler beim Laden des E-Mail-Verlaufs: ${error.message}`, true);
          } finally {
            showLoading(false);
          }
        });

        elements.closeEmailHistoryBtn.addEventListener('click', () => {
          elements.emailHistoryModal.classList.add('hidden');
          elements.emailHistoryContent.innerHTML = '';
        });

        elements.closeEmailHistoryModalBtn.addEventListener('click', () => {
          elements.emailHistoryModal.classList.add('hidden');
          elements.emailHistoryContent.innerHTML = '';
        });
      }

      // Interessen und Maschinen
      if (elements.interestsSelect && elements.newMachine && elements.addMachine && elements.interestsSearch && elements.addManufacturerBtn && elements.addManufacturerModal) {
        elements.interestsSelect.addEventListener('change', (e) => {
          if (isDropdownEditable) {
            // Kein preventDefault(), da wir die natürliche Auswahl nutzen wollen
            console.log('Auswahl geändert:', Array.from(e.target.selectedOptions).map(opt => opt.value));
          }
        });

        elements.addMachine.addEventListener('click', () => {
          const newMachineName = elements.newMachine.value.trim();
          if (newMachineName) {
            const existingOption = Array.from(elements.interestsSelect.options).find(opt => opt.textContent.toLowerCase() === newMachineName.toLowerCase());
            if (existingOption) {
              existingOption.selected = true;
            } else {
              const option = document.createElement('option');
              option.value = `new:${newMachineName}`;
              option.textContent = newMachineName;
              option.selected = true;
              elements.interestsSelect.appendChild(option);
            }
            elements.newMachine.value = '';
          } else {
            showToast('Bitte geben Sie einen Maschinennamen ein.', true);
          }
        });

        elements.interestsSearch.addEventListener('input', debounce(async (e) => {
          const searchTerm = e.target.value.trim();
          if (searchTerm) {
            try {
              const response = await fetch('<?php echo BASE_PATH; ?>get_manufacturers.php');
              const result = await response.json();
              if (result.success) {
                elements.interestsSuggestions.innerHTML = '';
                result.data.forEach(manufacturer => {
                  if (manufacturer.machine.toLowerCase().includes(searchTerm.toLowerCase())) {
                    const option = document.createElement('option');
                    option.value = manufacturer.machine;
                    option.setAttribute('data-id', manufacturer.id);
                    elements.interestsSuggestions.appendChild(option);
                  }
                });
              }
            } catch (error) {
              showToast(`Fehler beim Laden der Maschinen: ${error.message}`, true);
            }
          } else {
            elements.interestsSuggestions.innerHTML = '';
          }
        }, 300));

        elements.interestsSearch.addEventListener('change', (e) => {
          const searchTerm = e.target.value.trim();
          const selectedOption = Array.from(elements.interestsSuggestions.querySelectorAll('option')).find(option => option.value === searchTerm);
          if (selectedOption) {
            const id = selectedOption.getAttribute('data-id');
            if (!Array.from(elements.interestsSelect.options).some(opt => opt.value === id)) {
              const option = document.createElement('option');
              option.value = id;
              option.textContent = searchTerm;
              option.selected = true;
              elements.interestsSelect.appendChild(option);
            }
            elements.interestsSearch.value = '';
            elements.interestsSuggestions.innerHTML = '';
          }
        });

        elements.addManufacturerBtn.addEventListener('click', () => {
          const newMachine = elements.interestsSearch.value.trim();
          if (newMachine) {
            elements.addManufacturerModal.classList.remove('hidden');
            elements.addManufacturerForm.querySelector('[name="machine"]').value = newMachine;
            elements.addManufacturerForm.querySelector('[name="manufacturer"]').focus();
          } else {
            showToast('Bitte geben Sie einen Maschinennamen ein.', true);
          }
        });

        elements.closeAddManufacturerModalBtn.addEventListener('click', () => {
          elements.addManufacturerModal.classList.add('hidden');
          elements.addManufacturerForm.reset();
        });

        elements.cancelAddManufacturerBtn.addEventListener('click', () => {
          elements.addManufacturerModal.classList.add('hidden');
          elements.addManufacturerForm.reset();
        });

        elements.addManufacturerForm.addEventListener('submit', async (e) => {
          e.preventDefault();
          const form = e.target;
          const machine = form.querySelector('[name="machine"]').value.trim();
          const manufacturer = form.querySelector('[name="manufacturer"]').value.trim();

          if (!machine || !manufacturer) {
            showToast('Bitte füllen Sie die Pflichtfelder "Maschine" und "Hersteller" aus.', true);
            return;
          }

          try {
            const formData = new FormData();
            formData.append('machine', machine);
            formData.append('manufacturer', manufacturer);
            const response = await fetch('<?php echo BASE_PATH; ?>save_manufacturer.php', { method: 'POST', body: formData });
            const result = await response.json();
            if (result.success) {
              elements.addManufacturerModal.classList.add('hidden');
              form.reset();
              showToast('Maschine erfolgreich hinzugefügt!');
              const option = document.createElement('option');
              option.value = result.data.id;
              option.textContent = machine;
              option.selected = true;
              elements.interestsSelect.appendChild(option);
              elements.interestsSearch.value = '';
              elements.interestsSuggestions.innerHTML = '';
            } else {
              showToast(`Fehler: ${result.error}`, true);
            }
          } catch (error) {
            showToast(`Fehler beim Speichern: ${error.message}`, true);
          }
        });
      }

      // Datei-Uploads
      if (elements.addImageInputBtn && elements.imageInputsAdd && elements.addPdfInputBtn && elements.pdfInputsAdd) {
        elements.addImageInputBtn.addEventListener('click', () => {
          const newInputGroup = document.createElement('div');
          newInputGroup.className = 'image-input-group flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-3';
          newInputGroup.innerHTML = `
                        <input type="file" name="images[]" class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition" accept="image/jpeg,image/png,image/gif">
                        <input type="text" name="image_descriptions[]" class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition" placeholder="Bezeichnung (z. B. Rechnung_2025)">
                    `;
          elements.imageInputsAdd.appendChild(newInputGroup);
        });

        elements.addPdfInputBtn.addEventListener('click', () => {
          const newInputGroup = document.createElement('div');
          newInputGroup.className = 'pdf-input-group flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-3';
          newInputGroup.innerHTML = `
                        <input type="file" name="pdfs[]" class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition" accept="application/pdf">
                        <input type="text" name="pdf_descriptions[]" class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition" placeholder="Bezeichnung (z. B. Vertrag)">
                    `;
          elements.pdfInputsAdd.appendChild(newInputGroup);
        });

        elements.addImageInputEditBtn.addEventListener('click', () => {
          const newInputGroup = document.createElement('div');
          newInputGroup.className = 'image-input-group flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-3';
          newInputGroup.innerHTML = `
                        <input type="file" name="images[]" class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition" accept="image/jpeg,image/png,image/gif">
                        <input type="text" name="image_descriptions[]" class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition" placeholder="Bezeichnung (z. B. Rechnung_2025)">
                    `;
          elements.imageInputsEdit.appendChild(newInputGroup);
        });

        elements.addPdfInputEditBtn.addEventListener('click', () => {
          const newInputGroup = document.createElement('div');
          newInputGroup.className = 'pdf-input-group flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-3';
          newInputGroup.innerHTML = `
                        <input type="file" name="pdfs[]" class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition" accept="application/pdf">
                        <input type="text" name="pdf_descriptions[]" class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition" placeholder="Bezeichnung (z. B. Vertrag)">
                    `;
          elements.pdfInputsEdit.appendChild(newInputGroup);
        });
      }

      // Fälligkeitsdatum
      if (elements.setDueDate && elements.dueDateContainer && elements.setDueDateEdit && elements.dueDateEditContainer) {
        elements.setDueDate.addEventListener('change', () => {
          elements.dueDateContainer.classList.toggle('hidden', !elements.setDueDate.checked);
          if (!elements.setDueDate.checked) {
            elements.dueDateContainer.querySelector('#due_date').value = '';
            elements.dueDateContainer.querySelectorAll('input[name="notified_users[]"]').forEach(checkbox => checkbox.checked = false);
          }
        });

        elements.setDueDateEdit.addEventListener('change', () => {
          elements.dueDateEditContainer.classList.toggle('hidden', !elements.setDueDateEdit.checked);
          if (!elements.setDueDateEdit.checked) {
            elements.dueDateEditContainer.querySelector('#due_date_edit').value = '';
            elements.dueDateEditContainer.querySelectorAll('input[name="notified_users[]"]').forEach(checkbox => checkbox.checked = false);
          }
        });
      }

      // Formular-Submits
      if (elements.addCustomerForm) {
        elements.addCustomerForm.addEventListener('submit', async (e) => {
          e.preventDefault();
          const form = e.target;
          const company = form.querySelector('[name="company"]').value.trim();
          const country = form.querySelector('[name="country"]').value.trim();
          const role = form.querySelector('[name="role"]').value.trim();

          if (!company || !country) {
            showToast('Bitte füllen Sie die Pflichtfelder "Firma" und "Land" aus.', true);
            return;
          }

          try {
            showLoading(true);
            const formData = new FormData(form);
            const response = await fetch('<?php echo BASE_PATH; ?>save_customer.php', { method: 'POST', body: formData });
            const result = await response.json();
            if (result.success) {
              elements.addModal.classList.add('hidden');
              form.reset();
              showToast('Kunde erfolgreich hinzugefügt!');
              if (role && !document.querySelector(`#roleSearchInput option[value="${role}"]`)) {
                const option = document.createElement('option');
                option.value = role;
                option.textContent = role;
                elements.roleSearchInput.appendChild(option);
              }
              setTimeout(() => location.reload(), 2000);
            } else {
              showToast(`Fehler: ${result.error}`, true);
            }
          } catch (error) {
            showToast(`Fehler beim Speichern: ${error.message}`, true);
          } finally {
            showLoading(false);
          }
        });
      }

      if (elements.editCustomerForm) {
        elements.editCustomerForm.addEventListener('submit', async (e) => {
          e.preventDefault();
          try {
            showLoading(true);
            const formData = new FormData(e.target);
            const response = await fetch('<?php echo BASE_PATH; ?>update_customer.php', { method: 'POST', body: formData });
            const result = await response.json();
            if (result.success) {
              elements.editModal.classList.add('hidden');
              resetEditForm();
              showToast('Kunde erfolgreich aktualisiert!');
              setTimeout(() => location.reload(), 2000);
            } else {
              showToast(`Fehler: ${result.error}`, true);
            }
          } catch (error) {
            showToast(`Fehler beim Aktualisieren: ${error.message}`, true);
          } finally {
            showLoading(false);
          }
        });
      }

      if (elements.importCustomerForm) {
        elements.importCustomerForm.addEventListener('submit', async (e) => {
          e.preventDefault();
          try {
            showLoading(true);
            const formData = new FormData(e.target);
            const response = await fetch('<?php echo BASE_PATH; ?>import_customer_excel.php', { method: 'POST', body: formData });
            const result = await response.json();
            if (result.success) {
              elements.importModal.classList.add('hidden');
              e.target.reset();
              showToast('Kunden erfolgreich importiert!');
              setTimeout(() => location.reload(), 2000);
            } else {
              showToast(`Fehler beim Import: ${result.error}`, true);
            }
          } catch (error) {
            showToast(`Fehler beim Import: ${error.message}`, true);
          } finally {
            showLoading(false);
          }
        });
      }

      // Öffnen der Kundenkarten
      document.querySelectorAll('.open-btn').forEach(button => {
        button.addEventListener('click', (e) => {
          const card = e.target.closest('.customer-card');
          if (card) {
            const id = card.dataset.id;
            if (id && !isNaN(parseInt(id))) {
              fetchCustomerDetails(id);
            } else {
              showToast('Ungültige Kunden-ID', true);
            }
          }
        });
      });

      // Tastenkombination für Speichern (Ctrl+S)
      document.addEventListener('keydown', (e) => {
        if (e.ctrlKey && e.key === 's') {
          e.preventDefault();
          if (!elements.addModal.classList.contains('hidden')) elements.addCustomerForm.dispatchEvent(new Event('submit'));
          if (!elements.editModal.classList.contains('hidden')) elements.editCustomerForm.dispatchEvent(new Event('submit'));
          if (!elements.importModal.classList.contains('hidden')) elements.importCustomerForm.dispatchEvent(new Event('submit'));
        }
      });
    }

    function resetEditForm() {
      console.log('resetEditForm aufgerufen');
      try {
        const form = document.getElementById('editCustomerForm');
        if (!form) {
          throw new Error('editCustomerForm nicht gefunden');
        }

        form.querySelectorAll('input:not([name="id"]):not([name="created_by"]):not([name="created_at"]):not([name="last_modified_by"]):not([name="last_modified_at"])').forEach(input => {
          if (!input.classList.contains('existing-description')) {
            input.setAttribute('readonly', 'true');
            input.classList.add('bg-gray-50');
          }
          if (input.type === 'file') {
            input.value = '';
          }
        });
        form.querySelectorAll('.existing-description').forEach(input => {
          input.setAttribute('readonly', 'true');
          input.classList.add('bg-gray-50');
        });
        form.querySelectorAll('textarea').forEach(textarea => {
          textarea.setAttribute('readonly', 'true');
          textarea.classList.add('bg-gray-50');
        });
        const editBtn = document.getElementById('editBtn');
        if (editBtn) editBtn.classList.remove('hidden');
        const saveEditBtn = document.getElementById('saveEditBtn');
        if (saveEditBtn) saveEditBtn.classList.add('hidden');
        const deleteBtn = document.getElementById('deleteBtn');
        if (deleteBtn) deleteBtn.classList.add('hidden');
        const undoBtn = document.getElementById('undoBtn');
        if (undoBtn) undoBtn.classList.add('hidden');
        filesToDelete = [];
        const filesToDeleteInput = form.querySelector('#filesToDelete');
        if (filesToDeleteInput) filesToDeleteInput.value = JSON.stringify(filesToDelete);
        const imageInput = form.querySelector('input[name="images[]"]');
        if (imageInput) imageInput.style.display = 'none';
        const pdfInput = form.querySelector('input[name="pdfs[]"]');
        if (pdfInput) pdfInput.style.display = 'none';
        const addImageInputEditBtn = document.getElementById('addImageInputEditBtn');
        if (addImageInputEditBtn) addImageInputEditBtn.style.display = 'none';
        const addPdfInputEditBtn = document.getElementById('addPdfInputEditBtn');
        if (addPdfInputEditBtn) addPdfInputEditBtn.style.display = 'none';
        form.querySelectorAll('input[name="image_descriptions[]"]').forEach(input => input.style.display = 'none');
        form.querySelectorAll('input[name="pdf_descriptions[]"]').forEach(input => input.style.display = 'none');
        document.querySelectorAll('.image-container, .pdf-container').forEach(container => {
          container.classList.remove('opacity-50');
          container.style.borderStyle = 'none';
          container.style.borderColor = 'transparent';
          container.querySelector('img, a').style.pointerEvents = 'auto';
          const deleteBtn = container.querySelector('.delete-file');
          if (deleteBtn) {
            deleteBtn.style.display = 'flex';
            deleteBtn.disabled = true;
          }
        });
        const interestsSelect = document.getElementById('interestsSelect');
        if (interestsSelect) {
          interestsSelect.setAttribute('readonly', 'true');
          interestsSelect.classList.add('bg-gray-50');
        }
        const newMachine = document.getElementById('new-machine');
        if (newMachine) {
          newMachine.classList.add('hidden');
          newMachine.value = '';
        }
        const addMachine = document.getElementById('add-machine');
        if (addMachine) addMachine.classList.add('hidden');
        const interestsSearch = document.getElementById('interestsSearch');
        if (interestsSearch) {
          interestsSearch.classList.add('hidden');
          interestsSearch.value = '';
        }
        const addManufacturerBtn = document.getElementById('addManufacturerBtn');
        if (addManufacturerBtn) addManufacturerBtn.classList.add('hidden');
        isDropdownEditable = false;
        const setDueDateEdit = document.getElementById('setDueDateEdit');
        if (setDueDateEdit) {
          setDueDateEdit.disabled = true;
          setDueDateEdit.checked = false;
        }
        const dueDateEditContainer = document.getElementById('dueDateEditContainer');
        if (dueDateEditContainer) {
          dueDateEditContainer.classList.add('hidden');
          dueDateEditContainer.querySelector('#due_date_edit').value = '';
          dueDateEditContainer.querySelectorAll('input[name="notified_users[]"]').forEach(checkbox => {
            checkbox.disabled = true;
            checkbox.checked = false;
          });
        }
      } catch (error) {
        console.error('Fehler in resetEditForm:', error);
        showToast('Fehler beim Zurücksetzen des Formulars. Bitte wende dich an den Administrator.', true);
      }
    }
  </script>
</body>

</html>
</body>

</html>