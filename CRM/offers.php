<?php
require_once 'config.php';
require_once 'auth.php';
require_once 'db_connect.php';
require_once 'send_next_step_notifications.php'; // Sende Benachrichtigungen
?>
<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#4f46e5">
  <title>CRM AS EXport - Angebote</title>
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
          class="block px-6 py-3 mx-2 text-gray-600 hover:bg-gray-100 rounded-lg transition-colors duration-200">Customers</a>
        <a href="<?php echo BASE_PATH; ?>offers.php"
          class="block px-6 py-3 mx-2 text-indigo-600 bg-indigo-50 rounded-lg font-medium transition-colors duration-200">Offers</a>
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
        <h1 class="text-2xl md:text-3xl font-bold text-gray-800">Angebotsübersicht</h1>
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
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4">
          <input type="text" id="searchInput" list="customerSuggestions" placeholder="Nach Kunde suchen"
            class="border border-gray-300 p-3 rounded-lg w-full focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition">
          <datalist id="customerSuggestions"></datalist>
          <select id="filterSelect"
            class="border border-gray-300 p-3 rounded-lg w-full focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition">
            <option value="all">Alle</option>
            <option value="open">Offen</option>
            <option value="completed">Abgeschlossen</option>
            <option value="rejected">Abgelehnt</option>
            <option value="over-2-weeks">Über 2 Wochen alt</option>
            <option value="has-next-step">Mit Next Step</option>
          </select>
          <select id="sortSelect"
            class="border border-gray-300 p-3 rounded-lg w-full focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition">
            <option value="customer-asc">Kunde A-Z</option>
            <option value="customer-desc">Kunde Z-A</option>
            <option value="date-desc">Neueste zuerst</option>
            <option value="date-asc">Älteste zuerst</option>
            <option value="status">Nach Status</option>
          </select>
          <input type="text" id="manufacturerSearchInput" list="manufacturerSuggestions"
            placeholder="Nach Hersteller suchen"
            class="border border-gray-300 p-3 rounded-lg w-full focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition">
          <datalist id="manufacturerSuggestions"></datalist>
          <input type="text" id="productSearchInput" list="productSuggestions" placeholder="Nach Produkt suchen"
            class="border border-gray-300 p-3 rounded-lg w-full focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition">
          <datalist id="productSuggestions"></datalist>
        </div>
        <div class="flex flex-col sm:flex-row items-center justify-between mt-4 gap-4">
          <div class="flex flex-col sm:flex-row gap-2 w-full sm:w-auto">
            <button id="exportBtn"
              class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition">Export Excel</button>
            <button id="deleteBtn"
              class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition hidden">Löschen</button>
            <button id="addOfferBtn"
              class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition flex items-center">
              <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
              </svg>
              Angebot hinzufügen
            </button>
          </div>
        </div>
      </div>

      <!-- Bestätigungsmeldung -->
      <div id="toast"
        class="fixed top-4 right-4 bg-green-600 text-white px-6 py-3 rounded-lg shadow-lg hidden transform transition-transform duration-300">
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
          <p class="text-gray-600 mb-6">Möchten Sie die ausgewählten Angebote wirklich löschen?</p>
          <div class="flex justify-end space-x-4">
            <button id="cancelDeleteBtn"
              class="border border-gray-300 px-6 py-2 rounded-lg text-gray-600 hover:bg-gray-100 transition">Abbrechen</button>
            <button id="confirmDeleteBtn"
              class="bg-red-600 text-white px-6 py-2 rounded-lg hover:bg-red-700 transition">Löschen</button>
          </div>
        </div>
      </div>

      <!-- Angebots-Karten -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="offerCards">
        <?php
        try {
          $stmt = $db->query("
            SELECT o.*, c.name AS customer_name, c.customer_id AS customer_number, c.company AS customer_company, ns.description AS next_step, ns.due_date AS next_step_due_date
            FROM offers o
            LEFT JOIN customers c ON o.customer_id = c.id
            LEFT JOIN next_steps ns ON o.customer_id = ns.customer_id
            ORDER BY o.created_at DESC
          ");
          while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $offerDate = new DateTime($row['date']);
            $now = new DateTime();
            $interval = $now->diff($offerDate);
            $daysOld = $interval->days;

            $ageClass = '';
            $ageMessage = '';
            $backgroundClass = 'bg-white';
            if ($daysOld > 14) {
              $ageClass = 'border-l-4 border-red-500';
              $ageMessage = "Über 2 Wochen alt ($daysOld Tage)";
              $backgroundClass = 'bg-yellow-50';
            } elseif ($daysOld > 7) {
              $ageClass = 'border-l-4 border-yellow-500';
              $ageMessage = "Über 1 Woche alt ($daysOld Tage)";
            }

            $statusClass = '';
            switch ($row['status']) {
              case 'Offen':
                $statusClass = 'border-t-4 border-yellow-500';
                break;
              case 'Abgeschlossen':
                $statusClass = 'border-t-4 border-green-500';
                break;
              case 'Abgelehnt':
                $statusClass = 'border-t-4 border-red-500';
                break;
            }

            echo "<div class='offer-card $backgroundClass p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 hover:scale-105 transform $statusClass $ageClass' data-id='" . htmlspecialchars($row['id']) . "' data-customer-name='" . htmlspecialchars($row['customer_name']) . "' data-status='" . htmlspecialchars($row['status']) . "' data-offer-date='" . htmlspecialchars($row['date']) . "' data-last-modified='" . htmlspecialchars($row['last_modified_at']) . "' data-manufacturer='" . htmlspecialchars($row['manufacturer']) . "' data-product='" . htmlspecialchars($row['product']) . "' data-next-step='" . htmlspecialchars($row['next_step'] ?? '') . "'>";
            echo "<div class='flex justify-between items-center mb-4'>";
            echo "<input type='checkbox' class='select-offer h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded' data-id='" . htmlspecialchars($row['id']) . "'>";
            echo "<span class='inline-block h-2 w-2 " . ($row['status'] === 'Abgeschlossen' ? 'bg-green-500' : ($row['status'] === 'Offen' ? 'bg-yellow-500' : 'bg-red-500')) . " rounded-full'></span>";
            echo "</div>";
            echo "<p class='text-sm text-gray-600 mt-1'><strong>Kunde:</strong> " . htmlspecialchars($row['customer_name'] ?? 'Unbekannt') . "</p>";
            if (!empty($row['customer_number'])) {
              echo "<p class='text-sm text-gray-600 mt-1'><strong>Kundennummer:</strong> " . htmlspecialchars($row['customer_number']) . "</p>";
            }
            if (!empty($row['customer_company'])) {
              echo "<p class='text-sm text-gray-600 mt-1'><strong>Firma:</strong> " . htmlspecialchars($row['customer_company']) . "</p>";
            }
            if (!empty($row['offer_number'])) {
              echo "<p class='text-sm text-gray-600 mt-1'><strong>Angebotsnummer:</strong> " . htmlspecialchars($row['offer_number']) . "</p>";
            } else {
              echo "<p class='text-sm text-gray-600 mt-1'><strong>Angebotsnummer:</strong> Angebot #" . htmlspecialchars($row['id']) . "</p>";
            }
            echo "<p class='text-sm text-gray-600 mt-1'><strong>Hersteller:</strong> " . htmlspecialchars($row['manufacturer']) . "</p>";
            echo "<p class='text-sm text-gray-600 mt-1'><strong>Datum:</strong> " . htmlspecialchars($row['date']) . "</p>";
            echo "<p class='text-sm text-gray-600 mt-1'><strong>Produkt:</strong> " . htmlspecialchars($row['product']) . "</p>";
            echo "<p class='text-sm text-gray-600 mt-1'><strong>Status:</strong> <span class='" . ($row['status'] === 'Offen' ? 'text-yellow-600' : ($row['status'] === 'Abgeschlossen' ? 'text-green-600' : 'text-red-600')) . "'>" . htmlspecialchars($row['status']) . "</span></p>";
            if (!empty($row['notes'])) {
              echo "<p class='text-sm text-gray-600 mt-1'><strong>Notizen:</strong> " . htmlspecialchars($row['notes']) . "</p>";
            }
            if (!empty($row['next_step'])) {
              echo "<p class='text-sm text-gray-600 mt-1'><strong>Next Step:</strong> <span class='text-green-600'>" . htmlspecialchars($row['next_step']) . "</span></p>";
              if (!empty($row['next_step_due_date'])) {
                echo "<p class='text-sm text-gray-600 mt-1'><strong>Fällig:</strong> <span class='text-red-600'>" . (new DateTime($row['next_step_due_date']))->format('d.m.Y H:i') . "</span></p>";
              }
            }
            echo "<p class='text-sm text-gray-500 mt-3'><strong>Erstellt von:</strong> " . htmlspecialchars($row['created_by']) . "</p>";
            echo "<p class='text-sm text-gray-500 mt-1'><strong>Erstellt am:</strong> " . htmlspecialchars($row['created_at']) . "</p>";
            echo "<p class='text-sm text-gray-500 mt-1'><strong>Zuletzt geändert von:</strong> " . htmlspecialchars($row['last_modified_by']) . "</p>";
            echo "<p class='text-sm text-gray-500 mt-1'><strong>Zuletzt geändert am:</strong> " . htmlspecialchars($row['last_modified_at']) . "</p>";
            if ($ageMessage) {
              echo "<p class='text-sm text-red-600 mt-2'>" . htmlspecialchars($ageMessage) . "</p>";
            }

            $stmtFiles = $db->prepare("SELECT file_path, file_type, description FROM offer_files WHERE offer_id = ?");
            $stmtFiles->execute([$row['id']]);
            $files = $stmtFiles->fetchAll(PDO::FETCH_ASSOC);

            foreach ($files as $file) {
              if ($file['file_type'] === 'image') {
                echo "<div class='mt-3'>";
                if (!empty($file['description'])) {
                  echo "<p class='text-sm text-gray-500'>" . htmlspecialchars($file['description']) . "</p>";
                }
                echo "<a href='" . htmlspecialchars($file['file_path']) . "' target='_blank'><img src='" . htmlspecialchars($file['file_path']) . "' alt='Angebot Bild' class='w-24 h-24 object-cover rounded-lg mt-1'></a>";
                echo "</div>";
              } elseif ($file['file_type'] === 'pdf') {
                echo "<div class='mt-3'>";
                if (!empty($file['description'])) {
                  echo "<p class='text-sm text-gray-500'>" . htmlspecialchars($file['description']) . "</p>";
                }
                echo "<p><a href='" . htmlspecialchars($file['file_path']) . "' target='_blank' class='text-indigo-600 hover:underline'>PDF anzeigen</a></p>";
                echo "</div>";
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
          echo "<div class='bg-white shadow-md rounded-xl p-6 text-red-600'>Fehler beim Laden der Angebote: " . htmlspecialchars($e->getMessage()) . "</div>";
        }
        ?>
      </div>
    </main>
  </div>

  <!-- Modales Fenster für Hinzufügen -->
  <div id="addOfferModal"
    class="fixed inset-0 bg-black bg-opacity-60 hidden flex items-center justify-center transition-opacity duration-300">
    <div
      class="bg-white rounded-xl shadow-2xl w-11/12 md:w-2/3 lg:w-1/2 max-h-[85vh] overflow-y-auto p-8 transform scale-95 transition-transform duration-300">
      <button id="closeAddModalBtn" class="absolute top-4 right-4 text-gray-500 hover:text-gray-700">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
      <h2 class="text-2xl font-bold text-gray-800 mb-6">Neues Angebot hinzufügen</h2>
      <form id="addOfferForm" class="space-y-6" enctype="multipart/form-data">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <label class="block text-sm font-semibold text-gray-700">Kunde *</label>
            <input type="text" id="customerSearch" list="customerSuggestionsAdd"
              class="mt-1 w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
              required placeholder="Kunden suchen...">
            <datalist id="customerSuggestionsAdd">
              <?php
              $stmt = $db->query("SELECT id, name, customer_id, company FROM customers ORDER BY name");
              while ($customer = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $display = htmlspecialchars($customer['name']);
                if (!empty($customer['company'])) {
                  $display .= ' (' . htmlspecialchars($customer['company']) . ')';
                }
                echo "<option value='$display' data-id='{$customer['id']}' data-customer-number='" . htmlspecialchars($customer['customer_id'] ?? '') . "' data-company='" . htmlspecialchars($customer['company'] ?? '') . "'>";
              }
              ?>
            </datalist>
            <input type="hidden" name="customer_id" id="customerId">
          </div>
          <div>
            <label class="block text-sm font-semibold text-gray-700">Kundennummer</label>
            <input type="text" name="customer_number" id="customerNumber"
              class="mt-1 w-full border border-gray-300 p-3 rounded-lg bg-gray-50" readonly>
          </div>
          <div>
            <label class="block text-sm font-semibold text-gray-700">Firma</label>
            <input type="text" name="company" id="company"
              class="mt-1 w-full border border-gray-300 p-3 rounded-lg bg-gray-50" readonly>
          </div>
          <div>
            <label class="block text-sm font-semibold text-gray-700">Angebotsnummer</label>
            <input type="text" name="offer_number"
              class="mt-1 w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition">
          </div>
          <div>
            <label class="block text-sm font-semibold text-gray-700">Hersteller *</label>
            <input type="text" name="manufacturer"
              class="mt-1 w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
              required>
          </div>
          <div>
            <label class="block text-sm font-semibold text-gray-700">Datum *</label>
            <input type="date" name="date"
              class="mt-1 w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
              required>
          </div>
          <div>
            <label class="block text-sm font-semibold text-gray-700">Produkt *</label>
            <input type="text" name="product"
              class="mt-1 w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
              required>
          </div>
          <div>
            <label class="block text-sm font-semibold text-gray-700">Status *</label>
            <select name="status"
              class="mt-1 w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
              required>
              <option value="Offen">Offen</option>
              <option value="Abgeschlossen">Abgeschlossen</option>
              <option value="Abgelehnt">Abgelehnt</option>
            </select>
          </div>
          <div class="md:col-span-2">
            <label class="block text-sm font-semibold text-gray-700">Notizen</label>
            <textarea name="notes"
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
                placeholder="Bezeichnung (z. B. Bild_2025)">
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
  <div id="editOfferModal"
    class="fixed inset-0 bg-black bg-opacity-60 hidden flex items-center justify-center transition-opacity duration-300">
    <div
      class="bg-white rounded-xl shadow-2xl w-11/12 md:w-2/3 lg:w-1/2 max-h-[85vh] overflow-y-auto p-8 transform scale-95 transition-transform duration-300">
      <button id="closeEditModalBtn" class="absolute top-4 right-4 text-gray-500 hover:text-gray-700">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
      <h2 class="text-2xl font-bold text-gray-800 mb-6">Angebotsdetails</h2>
      <form id="editOfferForm" class="space-y-6" enctype="multipart/form-data">
        <input type="hidden" name="id">
        <input type="hidden" name="files_to_delete" id="filesToDelete" value="[]">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <label class="block text-sm font-semibold text-gray-700">Kunde</label>
            <input type="text" id="editCustomerSearch" list="customerSuggestionsEdit"
              class="mt-1 w-full border border-gray-300 p-3 rounded-lg bg-gray-50" disabled>
            <datalist id="customerSuggestionsEdit">
              <?php
              $stmt = $db->query("SELECT id, name, customer_id, company FROM customers ORDER BY name");
              while ($customer = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $display = htmlspecialchars($customer['name']);
                if (!empty($customer['company'])) {
                  $display .= ' (' . htmlspecialchars($customer['company']) . ')';
                }
                echo "<option value='$display' data-id='{$customer['id']}' data-customer-number='" . htmlspecialchars($customer['customer_id'] ?? '') . "' data-company='" . htmlspecialchars($customer['company'] ?? '') . "'>";
              }
              ?>
            </datalist>
            <input type="hidden" name="customer_id" id="editCustomerId">
          </div>
          <div>
            <label class="block text-sm font-semibold text-gray-700">Kundennummer</label>
            <input type="text" name="customer_number" id="editCustomerNumber"
              class="mt-1 w-full border border-gray-300 p-3 rounded-lg bg-gray-50" readonly>
          </div>
          <div>
            <label class="block text-sm font-semibold text-gray-700">Firma</label>
            <input type="text" name="company" id="editCompany"
              class="mt-1 w-full border border-gray-300 p-3 rounded-lg bg-gray-50" readonly>
          </div>
          <div>
            <label class="block text-sm font-semibold text-gray-700">Angebotsnummer</label>
            <input type="text" name="offer_number" class="mt-1 w-full border border-gray-300 p-3 rounded-lg bg-gray-50"
              readonly>
          </div>
          <div>
            <label class="block text-sm font-semibold text-gray-700">Hersteller</label>
            <input type="text" name="manufacturer" class="mt-1 w-full border border-gray-300 p-3 rounded-lg bg-gray-50"
              readonly>
          </div>
          <div>
            <label class="block text-sm font-semibold text-gray-700">Datum</label>
            <input type="date" name="date" class="mt-1 w-full border border-gray-300 p-3 rounded-lg bg-gray-50"
              readonly>
          </div>
          <div>
            <label class="block text-sm font-semibold text-gray-700">Produkt</label>
            <input type="text" name="product" class="mt-1 w-full border border-gray-300 p-3 rounded-lg bg-gray-50"
              readonly>
          </div>
          <div>
            <label class="block text-sm font-semibold text-gray-700">Status</label>
            <select name="status" class="mt-1 w-full border border-gray-300 p-3 rounded-lg bg-gray-50" disabled>
              <option value="Offen">Offen</option>
              <option value="Abgeschlossen">Abgeschlossen</option>
              <option value="Abgelehnt">Abgelehnt</option>
            </select>
          </div>
          <div class="md:col-span-2">
            <label class="block text-sm font-semibold text-gray-700">Notizen</label>
            <textarea name="notes" class="mt-1 w-full border border-gray-300 p-3 rounded-lg bg-gray-50" rows="3"
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
                placeholder="Bezeichnung (z. B. Bild_2025)" style="display: none;">
            </div>
          </div>
          <button type="button" id="addImageInputEditBtn"
            class="mt-3 text-indigo-600 hover:text-indigo-700 underline transition" style="display: none;">+ Weiteres
            Bild hinzufügen</button>
        </div>
        <div>
          <label class="block text-sm font-semibold text-gray-700">Aktuelle PDFs</label>
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

  <script>
    // Hamburger-Menü
    const menuBtn = document.getElementById('menuBtn');
    const sidebar = document.getElementById('sidebar');
    menuBtn.addEventListener('click', () => {
      sidebar.classList.toggle('-translate-x-full');
    });

    // Elemente initialisieren
    const searchInput = document.getElementById('searchInput');
    const filterSelect = document.getElementById('filterSelect');
    const sortSelect = document.getElementById('sortSelect');
    const manufacturerSearchInput = document.getElementById('manufacturerSearchInput');
    const productSearchInput = document.getElementById('productSearchInput');
    const exportBtn = document.getElementById('exportBtn');
    const deleteBtn = document.getElementById('deleteBtn');
    const offerCardsContainer = document.getElementById('offerCards');
    let offerCards = Array.from(offerCardsContainer.querySelectorAll('.offer-card'));
    const selectAllVisible = document.getElementById('selectAllVisible');

    // Autovervollständigung für Suchfelder
    const customerNames = [...new Set(offerCards.map(card => card.dataset.customerName))];
    const manufacturers = [...new Set(offerCards.map(card => card.dataset.manufacturer))];
    const products = [...new Set(offerCards.map(card => card.dataset.product))];
    const customerSuggestions = document.getElementById('customerSuggestions');
    const manufacturerSuggestions = document.getElementById('manufacturerSuggestions');
    const productSuggestions = document.getElementById('productSuggestions');

    customerNames.forEach(customer => {
      const option = document.createElement('option');
      option.value = customer;
      customerSuggestions.appendChild(option);
    });

    manufacturers.forEach(manufacturer => {
      const option = document.createElement('option');
      option.value = manufacturer;
      manufacturerSuggestions.appendChild(option);
    });

    products.forEach(product => {
      const option = document.createElement('option');
      option.value = product;
      productSuggestions.appendChild(option);
    });

    // Filter und Sortierfunktion
    function filterAndSortOffers() {
      const searchTerm = searchInput.value.trim().toLowerCase();
      const filterValue = filterSelect.value;
      const sortValue = sortSelect.value;
      const manufacturerSearchTerm = manufacturerSearchInput.value.trim().toLowerCase();
      const productSearchTerm = productSearchInput.value.trim().toLowerCase();

      let filteredCards = offerCards.filter(card => {
        const customerName = card.dataset.customerName.toLowerCase();
        const status = card.dataset.status;
        const offerDate = new Date(card.dataset.offerDate);
        const now = new Date();
        const daysOld = Math.floor((now - offerDate) / (1000 * 60 * 60 * 24));
        const manufacturer = card.dataset.manufacturer.toLowerCase();
        const product = card.dataset.product.toLowerCase();
        const nextStep = card.dataset.nextStep;

        const searchMatch = searchTerm === '' || customerName.includes(searchTerm);
        const manufacturerMatch = manufacturerSearchTerm === '' || manufacturer.includes(manufacturerSearchTerm);
        const productMatch = productSearchTerm === '' || product.includes(productSearchTerm);
        let filterMatch = true;

        if (filterValue === 'open') {
          filterMatch = status === 'Offen';
        } else if (filterValue === 'completed') {
          filterMatch = status === 'Abgeschlossen';
        } else if (filterValue === 'rejected') {
          filterMatch = status === 'Abgelehnt';
        } else if (filterValue === 'over-2-weeks') {
          filterMatch = daysOld > 14;
        } else if (filterValue === 'has-next-step') {
          filterMatch = nextStep && nextStep.trim() !== '';
        }

        return searchMatch && filterMatch && manufacturerMatch && productMatch;
      });

      filteredCards.sort((a, b) => {
        if (sortValue === 'customer-asc') {
          return a.dataset.customerName.localeCompare(b.dataset.customerName);
        } else if (sortValue === 'customer-desc') {
          return b.dataset.customerName.localeCompare(a.dataset.customerName);
        } else if (sortValue === 'date-desc') {
          return new Date(b.dataset.offerDate) - new Date(a.dataset.offerDate);
        } else if (sortValue === 'date-asc') {
          return new Date(a.dataset.offerDate) - new Date(b.dataset.offerDate);
        } else if (sortValue === 'status') {
          const statusOrder = {
            'Offen': 1,
            'Abgeschlossen': 2,
            'Abgelehnt': 3
          };
          return statusOrder[a.dataset.status] - statusOrder[b.dataset.status];
        }
        return 0;
      });

      offerCards.forEach(card => {
        card.style.display = 'none';
      });
      filteredCards.forEach(card => {
        card.style.display = 'block';
      });

      selectAllVisible.checked = false;
      document.querySelectorAll('.select-offer').forEach(checkbox => {
        checkbox.checked = false;
      });
      deleteBtn.classList.add('hidden');
    }

    searchInput.addEventListener('input', filterAndSortOffers);
    filterSelect.addEventListener('change', filterAndSortOffers);
    sortSelect.addEventListener('change', filterAndSortOffers);
    manufacturerSearchInput.addEventListener('input', filterAndSortOffers);
    productSearchInput.addEventListener('input', filterAndSortOffers);

    selectAllVisible.addEventListener('change', () => {
      const isChecked = selectAllVisible.checked;
      offerCards.forEach(card => {
        if (card.style.display !== 'none') {
          const checkbox = card.querySelector('.select-offer');
          checkbox.checked = isChecked;
        }
      });
      deleteBtn.classList.toggle('hidden', document.querySelectorAll('.select-offer:checked').length === 0);
    });

    document.querySelectorAll('.select-offer').forEach(checkbox => {
      checkbox.addEventListener('change', () => {
        const selectedOffers = document.querySelectorAll('.select-offer:checked').length;
        deleteBtn.classList.toggle('hidden', selectedOffers === 0);
      });
    });

    // Export als Excel
    exportBtn.addEventListener('click', async () => {
      const selectedIds = Array.from(document.querySelectorAll('.select-offer:checked')).map(checkbox => parseInt(checkbox.dataset.id));

      if (selectedIds.length === 0) {
        alert('Bitte wähle mindestens ein Angebot zum Exportieren aus.');
        return;
      }

      try {
        const response = await fetch('<?php echo BASE_PATH; ?>export_offer_excel.php', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json'
          },
          body: JSON.stringify({
            ids: selectedIds
          })
        });

        if (response.ok) {
          const blob = await response.blob();
          const url = URL.createObjectURL(blob);
          const link = document.createElement('a');
          link.href = url;
          link.download = 'offers_export_' + new Date().toISOString().replace(/[:.]/g, '-') + '.xlsx';
          document.body.appendChild(link);
          link.click();
          document.body.removeChild(link);
          URL.revokeObjectURL(url);
          showToast('Angebote erfolgreich exportiert!');
        } else {
          const result = await response.json();
          alert('Fehler beim Export: ' + result.error);
        }
      } catch (error) {
        alert('Fehler beim Export: ' + error.message);
      }
    });

    // Toast-Benachrichtigung
    function showToast(message, isError = false) {
      const toast = document.getElementById('toast');
      toast.textContent = message;
      toast.classList.remove('bg-green-600', 'bg-red-600');
      toast.classList.add(isError ? 'bg-red-600' : 'bg-green-600');
      toast.classList.remove('hidden');
      setTimeout(() => {
        toast.classList.add('hidden');
      }, 3000);
    }

    // Lade-Indikator
    function showLoading(show) {
      const loadingIndicator = document.getElementById('loadingIndicator');
      loadingIndicator.classList.toggle('hidden', !show);
    }

    // Modal für Hinzufügen
    const addModal = document.getElementById('addOfferModal');
    const addBtn = document.getElementById('addOfferBtn');
    const closeAddBtn = document.getElementById('closeAddModalBtn');
    const cancelAddBtn = document.getElementById('cancelAddBtn');

    // Modal für Anzeigen/Editieren
    const editModal = document.getElementById('editOfferModal');
    const closeEditBtn = document.getElementById('closeEditBtn');
    const closeEditModalBtn = document.getElementById('closeEditModalBtn');
    const editBtn = document.getElementById('editBtn');
    const saveEditBtn = document.getElementById('saveEditBtn');
    const deleteBtnModal = document.getElementById('deleteBtn');
    const undoBtn = document.getElementById('undoBtn');
    const deleteConfirmModal = document.getElementById('deleteConfirmModal');
    const confirmDeleteBtn = document.getElementById('confirmDeleteBtn');
    const cancelDeleteBtn = document.getElementById('cancelDeleteBtn');

    let filesToDelete = [];

    // Debounce-Funktion
    function debounce(func, wait) {
      let timeout;
      return function executedFunction(...args) {
        const later = () => {
          clearTimeout(timeout);
          func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
      };
    }

    // Kundensuche für Add-Modal
    const customerSearch = document.getElementById('customerSearch');
    const customerSuggestionsAdd = document.getElementById('customerSuggestionsAdd');
    const customerIdInput = document.getElementById('customerId');
    const customerNumberInput = document.getElementById('customerNumber');
    const companyInput = document.getElementById('company');
    const originalOptionsAdd = Array.from(customerSuggestionsAdd.querySelectorAll('option'));

    const filterCustomerSuggestions = debounce(() => {
      const searchTerm = customerSearch.value.trim().toLowerCase();
      customerSuggestionsAdd.innerHTML = '';
      const filteredOptions = originalOptionsAdd.filter(option => option.value.toLowerCase().includes(searchTerm)).slice(0, 10);
      filteredOptions.forEach(option => {
        const newOption = document.createElement('option');
        newOption.value = option.value;
        newOption.setAttribute('data-id', option.getAttribute('data-id'));
        newOption.setAttribute('data-customer-number', option.getAttribute('data-customer-number'));
        newOption.setAttribute('data-company', option.getAttribute('data-company'));
        customerSuggestionsAdd.appendChild(newOption);
      });
    }, 300);

    customerSearch.addEventListener('input', filterCustomerSuggestions);
    customerSearch.addEventListener('change', () => {
      const selectedOption = Array.from(customerSuggestionsAdd.querySelectorAll('option')).find(option => option.value === customerSearch.value);
      if (selectedOption) {
        customerIdInput.value = selectedOption.getAttribute('data-id') || '';
        customerNumberInput.value = selectedOption.getAttribute('data-customer-number') || '';
        companyInput.value = selectedOption.getAttribute('data-company') || '';
      } else {
        customerIdInput.value = '';
        customerNumberInput.value = '';
        companyInput.value = '';
      }
    });

    // Kundensuche für Edit-Modal
    const editCustomerSearch = document.getElementById('editCustomerSearch');
    const customerSuggestionsEdit = document.getElementById('customerSuggestionsEdit');
    const editCustomerIdInput = document.getElementById('editCustomerId');
    const editCustomerNumberInput = document.getElementById('editCustomerNumber');
    const editCompanyInput = document.getElementById('editCompany');
    const originalOptionsEdit = Array.from(customerSuggestionsEdit.querySelectorAll('option'));

    const filterEditCustomerSuggestions = debounce(() => {
      const searchTerm = editCustomerSearch.value.trim().toLowerCase();
      customerSuggestionsEdit.innerHTML = '';
      const filteredOptions = originalOptionsEdit.filter(option => option.value.toLowerCase().includes(searchTerm)).slice(0, 10);
      filteredOptions.forEach(option => {
        const newOption = document.createElement('option');
        newOption.value = option.value;
        newOption.setAttribute('data-id', option.getAttribute('data-id'));
        newOption.setAttribute('data-customer-number', option.getAttribute('data-customer-number'));
        newOption.setAttribute('data-company', option.getAttribute('data-company'));
        customerSuggestionsEdit.appendChild(newOption);
      });
    }, 300);

    editCustomerSearch.addEventListener('input', filterEditCustomerSuggestions);
    editCustomerSearch.addEventListener('change', () => {
      const selectedOption = Array.from(customerSuggestionsEdit.querySelectorAll('option')).find(option => option.value === editCustomerSearch.value);
      if (selectedOption) {
        editCustomerIdInput.value = selectedOption.getAttribute('data-id') || '';
        editCustomerNumberInput.value = selectedOption.getAttribute('data-customer-number') || '';
        editCompanyInput.value = selectedOption.getAttribute('data-company') || '';
      } else {
        editCustomerIdInput.value = '';
        editCustomerNumberInput.value = '';
        editCompanyInput.value = '';
      }
    });

    // Dynamische Eingabefelder für Bilder und PDFs
    const addImageInputBtn = document.getElementById('addImageInputBtn');
    const imageInputsAdd = document.getElementById('imageInputsAdd');
    addImageInputBtn.addEventListener('click', () => {
      const newInputGroup = document.createElement('div');
      newInputGroup.className = 'image-input-group flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-3';
      newInputGroup.innerHTML = `
        <input type="file" name="images[]" class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition" accept="image/jpeg,image/png,image/gif">
        <input type="text" name="image_descriptions[]" class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition" placeholder="Bezeichnung (z. B. Bild_2025)">
      `;
      imageInputsAdd.appendChild(newInputGroup);
    });

    const addPdfInputBtn = document.getElementById('addPdfInputBtn');
    const pdfInputsAdd = document.getElementById('pdfInputsAdd');
    addPdfInputBtn.addEventListener('click', () => {
      const newInputGroup = document.createElement('div');
      newInputGroup.className = 'pdf-input-group flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-3';
      newInputGroup.innerHTML = `
        <input type="file" name="pdfs[]" class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition" accept="application/pdf">
        <input type="text" name="pdf_descriptions[]" class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition" placeholder="Bezeichnung (z. B. Vertrag)">
      `;
      pdfInputsAdd.appendChild(newInputGroup);
    });

    const addImageInputEditBtn = document.getElementById('addImageInputEditBtn');
    const imageInputsEdit = document.getElementById('imageInputsEdit');
    addImageInputEditBtn.addEventListener('click', () => {
      const newInputGroup = document.createElement('div');
      newInputGroup.className = 'image-input-group flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-3';
      newInputGroup.innerHTML = `
        <input type="file" name="images[]" class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition" accept="image/jpeg,image/png,image/gif">
        <input type="text" name="image_descriptions[]" class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition" placeholder="Bezeichnung (z. B. Bild_2025)">
      `;
      imageInputsEdit.appendChild(newInputGroup);
    });

    const addPdfInputEditBtn = document.getElementById('addPdfInputEditBtn');
    const pdfInputsEdit = document.getElementById('pdfInputsEdit');
    addPdfInputEditBtn.addEventListener('click', () => {
      const newInputGroup = document.createElement('div');
      newInputGroup.className = 'pdf-input-group flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-3';
      newInputGroup.innerHTML = `
        <input type="file" name="pdfs[]" class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition" accept="application/pdf">
        <input type="text" name="pdf_descriptions[]" class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition" placeholder="Bezeichnung (z. B. Vertrag)">
      `;
      pdfInputsEdit.appendChild(newInputGroup);
    });

    addBtn.addEventListener('click', () => {
      addModal.classList.remove('hidden');
    });

    closeAddBtn.addEventListener('click', () => {
      addModal.classList.add('hidden');
      document.getElementById('addOfferForm').reset();
      while (imageInputsAdd.children.length > 1) {
        imageInputsAdd.removeChild(imageInputsAdd.lastChild);
      }
      while (pdfInputsAdd.children.length > 1) {
        pdfInputsAdd.removeChild(pdfInputsAdd.lastChild);
      }
    });

    cancelAddBtn.addEventListener('click', () => {
      addModal.classList.add('hidden');
      document.getElementById('addOfferForm').reset();
      while (imageInputsAdd.children.length > 1) {
        imageInputsAdd.removeChild(imageInputsAdd.lastChild);
      }
      while (pdfInputsAdd.children.length > 1) {
        pdfInputsAdd.removeChild(pdfInputsAdd.lastChild);
      }
    });

    document.querySelectorAll('.open-btn').forEach(button => {
      button.addEventListener('click', (e) => {
        const id = e.target.closest('.offer-card').dataset.id;
        fetchOfferDetails(id);
      });
    });

    async function fetchOfferDetails(id) {
      try {
        const response = await fetch(`<?php echo BASE_PATH; ?>get_offer.php?id=${id}`);
        const offer = await response.json();
        if (offer.success) {
          const form = document.getElementById('editOfferForm');
          form.querySelector('[name="id"]').value = offer.data.id;
          editCustomerIdInput.value = offer.data.customer_id || '';

          let customerDisplay = offer.data.customer_name || '';
          if (offer.data.customer_company) {
            customerDisplay += ` (${offer.data.customer_company})`;
          }
          editCustomerSearch.value = customerDisplay || 'Unbekannter Kunde';

          editCustomerNumberInput.value = offer.data.customer_number || '';
          form.querySelector('[name="company"]').value = offer.data.customer_company || '';
          form.querySelector('[name="offer_number"]').value = offer.data.offer_number || '';
          form.querySelector('[name="manufacturer"]').value = offer.data.manufacturer || '';
          form.querySelector('[name="date"]').value = offer.data.date || '';
          form.querySelector('[name="product"]').value = offer.data.product || '';
          form.querySelector('[name="status"]').value = offer.data.status || 'Offen';
          form.querySelector('[name="notes"]').value = offer.data.notes || '';
          form.querySelector('[name="next_step"]').value = offer.data.next_step || '';
          form.querySelector('[name="created_by"]').value = offer.data.created_by || '';
          form.querySelector('[name="created_at"]').value = offer.data.created_at || '';
          form.querySelector('[name="last_modified_by"]').value = offer.data.last_modified_by || '';
          form.querySelector('[name="last_modified_at"]').value = offer.data.last_modified_at || '';

          const setDueDateEdit = document.getElementById('setDueDateEdit');
          const dueDateEditContainer = document.getElementById('dueDateEditContainer');
          if (offer.data.next_step_due_date) {
            setDueDateEdit.checked = true;
            dueDateEditContainer.classList.remove('hidden');
            dueDateEditContainer.querySelector('#due_date_edit').value = offer.data.next_step_due_date.replace(' ', 'T');
            const notifiedUsers = offer.data.next_step_notified_users || [];
            dueDateEditContainer.querySelectorAll('input[name="notified_users[]"]').forEach(checkbox => {
              checkbox.checked = notifiedUsers.includes(checkbox.value);
            });
          } else {
            setDueDateEdit.checked = false;
            dueDateEditContainer.classList.add('hidden');
            dueDateEditContainer.querySelector('#due_date_edit').value = '';
            dueDateEditContainer.querySelectorAll('input[name="notified_users[]"]').forEach(checkbox => {
              checkbox.checked = false;
            });
          }

          filesToDelete = [];
          document.getElementById('filesToDelete').value = JSON.stringify(filesToDelete);
          undoBtn.classList.add('hidden');

          const imageInputsEdit = document.getElementById('imageInputsEdit');
          const pdfInputsEdit = document.getElementById('pdfInputsEdit');
          while (imageInputsEdit.children.length > 0) {
            imageInputsEdit.removeChild(imageInputsEdit.lastChild);
          }
          while (pdfInputsEdit.children.length > 0) {
            pdfInputsEdit.removeChild(pdfInputsEdit.lastChild);
          }
          const newImageInputGroup = document.createElement('div');
          newImageInputGroup.className = 'image-input-group flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-3';
          newImageInputGroup.innerHTML = `
                <input type="file" name="images[]" class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition" accept="image/jpeg,image/png,image/gif" style="display: none;">
                <input type="text" name="image_descriptions[]" class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition" placeholder="Bezeichnung (z. B. Bild_2025)" style="display: none;">
            `;
          imageInputsEdit.appendChild(newImageInputGroup);

          const newPdfInputGroup = document.createElement('div');
          newPdfInputGroup.className = 'pdf-input-group flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-3';
          newPdfInputGroup.innerHTML = `
                <input type="file" name="pdfs[]" class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition" accept="application/pdf" style="display: none;">
                <input type="text" name="pdf_descriptions[]" class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition" placeholder="Bezeichnung (z. B. Vertrag)" style="display: none;">
            `;
          pdfInputsEdit.appendChild(newPdfInputGroup);

          const currentImagesDiv = document.getElementById('currentImages');
          currentImagesDiv.innerHTML = '';
          const images = offer.data.files.filter(file => file.file_type === 'image');
          if (images.length > 0) {
            images.forEach(image => {
              currentImagesDiv.innerHTML += `
                        <div class="relative image-container border-2 border-transparent p-2" data-path="${image.file_path}">
                            <input type="text" name="existing_image_descriptions[${image.file_path}]" class="w-full border border-gray-300 p-3 rounded-lg bg-gray-50 mb-2 existing-description" value="${image.description || ''}" readonly>
                            <a href="${image.file_path}" target="_blank">
                                <img src="${image.file_path}" alt="Angebot Bild" class="w-24 h-24 object-cover rounded-lg">
                            </a>
                            <button class="delete-file absolute top-0 right-0 bg-red-600 text-white rounded-full w-6 h-6 flex items-center justify-center disabled:bg-gray-400" data-path="${image.file_path}" disabled>
                                ×
                            </button>
                        </div>`;
            });
          } else {
            currentImagesDiv.innerHTML = '<p class="text-gray-500">Keine Bilder vorhanden</p>';
          }

          const currentPdfsDiv = document.getElementById('currentPdfs');
          currentPdfsDiv.innerHTML = '';
          const pdfs = offer.data.files.filter(file => file.file_type === 'pdf');
          if (pdfs.length > 0) {
            pdfs.forEach(pdf => {
              currentPdfsDiv.innerHTML += `
                        <div class="relative pdf-container border-2 border-transparent p-2" data-path="${pdf.file_path}">
                            <input type="text" name="existing_pdf_descriptions[${pdf.file_path}]" class="w-full border border-gray-300 p-3 rounded-lg bg-gray-50 mb-2 existing-description" value="${pdf.description || ''}" readonly>
                            <p><a href="${pdf.file_path}" target="_blank" class="text-indigo-600 hover:underline">PDF anzeigen</a></p>
                            <button class="delete-file absolute top-0 right-0 bg-red-600 text-white rounded-full w-6 h-6 flex items-center justify-center disabled:bg-gray-400" data-path="${pdf.file_path}" disabled>
                                ×
                            </button>
                        </div>`;
            });
          } else {
            currentPdfsDiv.innerHTML = '<p class="text-gray-500">Keine PDFs vorhanden</p>';
          }

          editModal.classList.remove('hidden');
        } else {
          alert('Fehler: ' + offer.error);
        }
      } catch (error) {
        alert('Fehler beim Abrufen der Daten: ' + error.message);
      }
    }


    closeEditBtn.addEventListener('click', () => {
      editModal.classList.add('hidden');
      resetEditForm();
    });

    closeEditModalBtn.addEventListener('click', () => {
      editModal.classList.add('hidden');
      resetEditForm();
    });

    editBtn.addEventListener('click', () => {
      const form = document.getElementById('editOfferForm');
      form.querySelectorAll('input:not([name="id"]):not([name="created_by"]):not([name="created_at"]):not([name="last_modified_by"]):not([name="last_modified_at"])').forEach(input => {
        if (input.id !== 'editCustomerNumber' && !input.classList.contains('existing-description')) {
          input.removeAttribute('readonly');
          input.classList.remove('bg-gray-50');
        }
      });
      document.querySelectorAll('.existing-description').forEach(input => {
        input.removeAttribute('readonly');
        input.classList.remove('bg-gray-50');
      });
      editCustomerSearch.removeAttribute('disabled');
      form.querySelector('textarea[name="notes"]').removeAttribute('readonly');
      form.querySelector('textarea[name="notes"]').classList.remove('bg-gray-50');
      form.querySelector('textarea[name="next_step"]').removeAttribute('readonly');
      form.querySelector('textarea[name="next_step"]').classList.remove('bg-gray-50');
      form.querySelector('select[name="status"]').removeAttribute('disabled');
      form.querySelector('input[name="images[]"]').style.display = 'block';
      form.querySelector('input[name="pdfs[]"]').style.display = 'block';
      document.getElementById('addImageInputEditBtn').style.display = 'block';
      document.getElementById('addPdfInputEditBtn').style.display = 'block';
      document.querySelectorAll('input[name="image_descriptions[]"]').forEach(input => {
        input.style.display = 'block';
      });
      document.querySelectorAll('input[name="pdf_descriptions[]"]').forEach(input => {
        input.style.display = 'block';
      });
      editBtn.classList.add('hidden');
      saveEditBtn.classList.remove('hidden');
      deleteBtnModal.classList.remove('hidden');

      const setDueDateEdit = document.getElementById('setDueDateEdit');
      setDueDateEdit.disabled = false;
      dueDateEditContainer.querySelectorAll('input[name="notified_users[]"]').forEach(checkbox => {
        checkbox.disabled = false;
      });

      document.querySelectorAll('.delete-file').forEach(button => {
        button.disabled = false;
        button.addEventListener('click', (e) => {
          e.preventDefault();
          const filePath = e.target.dataset.path;
          const confirmDelete = confirm('Möchten Sie diese Datei wirklich löschen?');
          if (confirmDelete) {
            const container = e.target.parentElement;
            container.classList.add('opacity-50');
            container.style.borderStyle = 'dashed';
            container.style.borderColor = 'red';
            container.querySelector('img, a').style.pointerEvents = 'none';
            e.target.style.display = 'none';

            filesToDelete.push(filePath);
            document.getElementById('filesToDelete').value = JSON.stringify(filesToDelete);
            undoBtn.classList.remove('hidden');
          }
        });
      });

      editModal.classList.remove('hidden');
    });

    deleteBtn.addEventListener('click', () => {
      const selectedOffers = document.querySelectorAll('.select-offer:checked').length;
      if (selectedOffers > 0) {
        deleteConfirmModal.classList.remove('hidden');
      }
    });

    cancelDeleteBtn.addEventListener('click', () => {
      deleteConfirmModal.classList.add('hidden');
      document.querySelectorAll('.select-offer').forEach(checkbox => {
        checkbox.checked = false;
      });
      deleteBtn.classList.add('hidden');
    });

    confirmDeleteBtn.addEventListener('click', async () => {
      const selectedIds = Array.from(document.querySelectorAll('.select-offer:checked')).map(checkbox => parseInt(checkbox.dataset.id));
      try {
        const response = await fetch('<?php echo BASE_PATH; ?>delete_offer.php', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json'
          },
          body: JSON.stringify({
            ids: selectedIds
          })
        });
        const result = await response.json();

        if (result.success) {
          deleteConfirmModal.classList.add('hidden');
          editModal.classList.add('hidden');
          showToast('Angebote erfolgreich gelöscht!');
          setTimeout(() => location.reload(), 2000);
        } else {
          alert('Fehler beim Löschen: ' + result.error);
        }
      } catch (error) {
        alert('Fehler beim Löschen: ' + error.message);
      }
    });

    undoBtn.addEventListener('click', () => {
      filesToDelete = [];
      document.getElementById('filesToDelete').value = JSON.stringify(filesToDelete);
      undoBtn.classList.add('hidden');

      document.querySelectorAll('.image-container, .pdf-container').forEach(container => {
        container.classList.remove('opacity-50');
        container.style.borderStyle = 'none';
        container.style.borderColor = 'transparent';
        container.querySelector('img, a').style.pointerEvents = 'auto';
        const deleteBtn = container.querySelector('.delete-file');
        if (deleteBtn) {
          deleteBtn.style.display = 'flex';
        }
      });
    });

    document.getElementById('addOfferForm').addEventListener('submit', async (e) => {
      e.preventDefault();
      const formData = new FormData(e.target);
      if (!formData.get('customer_id')) {
        alert('Bitte wählen Sie einen gültigen Kunden aus.');
        return;
      }

      try {
        const response = await fetch('<?php echo BASE_PATH; ?>save_offer.php', {
          method: 'POST',
          body: formData
        });
        const result = await response.json();

        if (result.success) {
          addModal.classList.add('hidden');
          e.target.reset();
          showToast('Angebot erfolgreich hinzugefügt!');
          setTimeout(() => {
            fetchOfferDetails(result.offer_id);
          }, 2000);
        } else {
          alert('Fehler: ' + result.error);
        }
      } catch (error) {
        alert('Fehler beim Speichern: ' + error.message);
      }
    });

    document.getElementById('editOfferForm').addEventListener('submit', async (e) => {
      e.preventDefault();
      const formData = new FormData(e.target);
      formData.append('files_to_delete', JSON.stringify(filesToDelete));

      try {
        const response = await fetch('<?php echo BASE_PATH; ?>update_offer.php', {
          method: 'POST',
          body: formData
        });
        const result = await response.json();

        if (result.success) {
          editModal.classList.add('hidden');
          resetEditForm();
          showToast('Angebot erfolgreich aktualisiert!');
          setTimeout(() => location.reload(), 2000);
        } else {
          alert('Fehler: ' + result.error);
        }
      } catch (error) {
        alert('Fehler beim Aktualisieren: ' + error.message);
      }
    });

    function resetEditForm() {
      const form = document.getElementById('editOfferForm');
      form.querySelectorAll('input:not([name="id"]):not([name="created_by"]):not([name="created_at"]):not([name="last_modified_by"]):not([name="last_modified_at"])').forEach(input => {
        if (!input.classList.contains('existing-description')) {
          input.setAttribute('readonly', true);
          input.classList.add('bg-gray-50');
        }
        if (input.type === 'file') {
          input.value = '';
        }
      });
      document.querySelectorAll('.existing-description').forEach(input => {
        input.setAttribute('readonly', true);
        input.classList.add('bg-gray-50');
      });
      editCustomerSearch.setAttribute('disabled', true);
      form.querySelector('textarea[name="notes"]').setAttribute('readonly', true);
      form.querySelector('textarea[name="notes"]').classList.add('bg-gray-50');
      form.querySelector('textarea[name="next_step"]').setAttribute('readonly', true);
      form.querySelector('textarea[name="next_step"]').classList.add('bg-gray-50');
      form.querySelector('select[name="status"]').setAttribute('disabled', true);
      editBtn.classList.remove('hidden');
      saveEditBtn.classList.add('hidden');
      deleteBtnModal.classList.add('hidden');
      undoBtn.classList.add('hidden');
      filesToDelete = [];
      document.getElementById('filesToDelete').value = JSON.stringify(filesToDelete);
      form.querySelector('input[name="images[]"]').style.display = 'none';
      form.querySelector('input[name="pdfs[]"]').style.display = 'none';
      document.getElementById('addImageInputEditBtn').style.display = 'none';
      document.getElementById('addPdfInputEditBtn').style.display = 'none';
      document.querySelectorAll('input[name="image_descriptions[]"]').forEach(input => {
        input.style.display = 'none';
      });
      document.querySelectorAll('input[name="pdf_descriptions[]"]').forEach(input => {
        input.style.display = 'none';
      });
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
      const setDueDateEdit = document.getElementById('setDueDateEdit');
      setDueDateEdit.disabled = true;
      setDueDateEdit.checked = false;
      dueDateEditContainer.classList.add('hidden');
      dueDateEditContainer.querySelector('#due_date_edit').value = '';
      dueDateEditContainer.querySelectorAll('input[name="notified_users[]"]').forEach(checkbox => {
        checkbox.disabled = true;
        checkbox.checked = false;
      });
    }

    document.addEventListener('keydown', (e) => {
      if (e.ctrlKey && e.key === 's') {
        e.preventDefault();
        if (!addModal.classList.contains('hidden')) {
          document.getElementById('addOfferForm').dispatchEvent(new Event('submit'));
        }
        if (!editModal.classList.contains('hidden')) {
          document.getElementById('editOfferForm').dispatchEvent(new Event('submit'));
        }
      }
    });

    setDueDate.addEventListener('change', () => {
      dueDateContainer.classList.toggle('hidden', !setDueDate.checked);
      if (!setDueDate.checked) {
        dueDateContainer.querySelector('#due_date').value = '';
        dueDateContainer.querySelectorAll('input[name="notified_users[]"]').forEach(checkbox => {
          checkbox.checked = false;
        });
      }
    });

    setDueDateEdit.addEventListener('change', () => {
      dueDateEditContainer.classList.toggle('hidden', !setDueDateEdit.checked);
      if (!setDueDateEdit.checked) {
        dueDateEditContainer.querySelector('#due_date_edit').value = '';
        dueDateEditContainer.querySelectorAll('input[name="notified_users[]"]').forEach(checkbox => {
          checkbox.checked = false;
        });
      }
    });

    if ('serviceWorker' in navigator) {
      window.addEventListener('load', () => {
        navigator.serviceWorker.register('<?php echo BASE_PATH; ?>sw.js').then(registration => {
          console.log('Service Worker registriert:', registration);
        }).catch(error => {
          console.error('Fehler bei der Registrierung des Service Workers:', error);
        });
      });
    }
  </script>
</body>

</html>