<?php
require_once 'auth.php';
require_once 'db_connect.php';
?>
<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#3b82f6">
  <title>CRM AS EXport - Hersteller</title>
  <link rel="manifest" href="<?php echo BASE_PATH; ?>manifest.json">
  <link rel="stylesheet" href="<?php echo BASE_PATH; ?>assets/css/output.css">
  <style>
    @keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    .fade-in {
      animation: fadeIn 0.3s ease-in;
    }

    .card-hover {
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .card-hover:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
    }

    .modal-content {
      max-height: 80vh;
      overflow-y: auto;
    }

    .open-btn {
      display: block !important;
      background-color: #2563eb;
      /* Tailwind's blue-600 */
      color: white;
      padding: 0.25rem 0.75rem;
      border-radius: 0.5rem;
      font-size: 0.875rem;
      line-height: 1.25rem;
      transition: background-color 0.2s;
    }

    .open-btn:hover {
      background-color: #1d4ed8;
      /* Tailwind's blue-700 */
    }
  </style>
</head>

<body class="bg-gray-50 font-sans">
  <div class="flex flex-col md:flex-row min-h-screen">
    <!-- Sidebar -->
    <div id="sidebar"
      class="w-full md:w-64 bg-white shadow-lg fixed md:static top-0 left-0 h-full md:h-auto z-20 transform -translate-x-full md:translate-x-0 transition-transform duration-300">
      <div class="p-6">
        <img src="<?php echo BASE_PATH; ?>assets/logo.png" alt="Logo" class="h-12">
      </div>
      <nav class="mt-4">
        <a href="<?php echo BASE_PATH; ?>index.php"
          class="block p-4 text-gray-700 hover:bg-blue-50 hover:text-blue-600">Kunden</a>
        <a href="<?php echo BASE_PATH; ?>offers.php"
          class="block p-4 text-gray-700 hover:bg-blue-50 hover:text-blue-600">Angebote</a>
        <a href="<?php echo BASE_PATH; ?>manufacturer.php" class="block p-4 text-blue-600 bg-blue-100">Hersteller</a>
        <a href="<?php echo BASE_PATH; ?>calendar.php"
          class="block p-4 text-gray-700 hover:bg-blue-50 hover:text-blue-600">Kalender</a>
        <a href="<?php echo BASE_PATH; ?>next_steps.php"
          class="block p-4 text-gray-700 hover:bg-blue-50 hover:text-blue-600">Nächste Schritte</a>
        <a href="#" class="block p-4 text-gray-700 hover:bg-blue-50 hover:text-blue-600">Überfällige Warnungen</a>
        <a href="<?php echo BASE_PATH; ?>about.php"
          class="block p-4 text-gray-700 hover:bg-blue-50 hover:text-blue-600">Über</a>
        <a href="#" class="block p-4 text-gray-700 hover:bg-blue-50 hover:text-blue-600">App-Galerie</a>
        <a href="<?php echo BASE_PATH; ?>logout.php" class="block p-4 text-red-600 hover:bg-red-50">Abmelden</a>
      </nav>
    </div>

    <!-- Mobile Menu Button -->
    <button id="menuBtn" class="md:hidden p-4 fixed top-0 left-0 z-30 text-gray-700" aria-label="Menü öffnen">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
      </svg>
    </button>

    <!-- Main Content -->
    <div class="flex-1 p-4 md:p-8 mt-16 md:mt-0">
      <div class="flex flex-col md:flex-row justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Hersteller</h1>
        <div class="flex items-center space-x-4 mt-4 md:mt-0">
          <label class="flex items-center text-gray-600">
            <input type="checkbox" id="selectAllVisible" class="mr-2 rounded text-blue-600"
              aria-label="Alle sichtbaren auswählen">
            Alle sichtbaren auswählen
          </label>
          <button id="addManufacturerBtn"
            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition"
            aria-label="Hersteller hinzufügen">+ Hinzufügen</button>
        </div>
      </div>

      <!-- Search and Filter -->
      <div class="flex flex-col md:flex-row gap-4 mb-6">
        <div class="relative flex-1">
          <input type="text" id="machineSearchInput" list="machineSuggestions" placeholder="Nach Maschine suchen"
            class="w-full border rounded-lg p-3 pl-10 focus:ring-2 focus:ring-blue-500"
            aria-label="Suche nach Maschine">
          <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 w-5 h-5" fill="none"
            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
          </svg>
          <datalist id="machineSuggestions"></datalist>
        </div>
        <div class="relative flex-1">
          <input type="text" id="manufacturerSearchInput" list="manufacturerSuggestions"
            placeholder="Nach Hersteller suchen"
            class="w-full border rounded-lg p-3 pl-10 focus:ring-2 focus:ring-blue-500"
            aria-label="Suche nach Hersteller">
          <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 w-5 h-5" fill="none"
            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
          </svg>
          <datalist id="manufacturerSuggestions"></datalist>
        </div>
        <button id="deleteBtn" class="bg-red-600 text-white px-4 py-2 rounded-lg hidden hover:bg-red-700 transition"
          aria-label="Ausgewählte löschen">Löschen</button>
      </div>

      <!-- Toast Notification -->
      <div id="toast" class="fixed top-4 right-4 bg-green-600 text-white px-6 py-3 rounded-lg shadow-lg hidden fade-in"
        role="alert">
        Aktion erfolgreich!
      </div>

      <!-- Delete Confirmation Modal -->
      <div id="deleteConfirmModal" class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center"
        role="dialog" aria-labelledby="deleteConfirmTitle">
        <div class="bg-white rounded-lg shadow-lg w-11/12 md:w-1/3 p-6">
          <h2 id="deleteConfirmTitle" class="text-xl font-bold mb-4">Löschen bestätigen</h2>
          <p class="mb-4">Möchten Sie die ausgewählten Hersteller wirklich löschen?</p>
          <div class="flex justify-end space-x-2">
            <button id="cancelDeleteBtn" class="border border-gray-300 px-4 py-2 rounded-lg hover:bg-gray-100"
              aria-label="Abbrechen">Abbrechen</button>
            <button id="confirmDeleteBtn" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700"
              aria-label="Löschen">Löschen</button>
          </div>
        </div>
      </div>

      <!-- Manufacturer Cards -->
      <div id="manufacturerCards" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php
        try {
          $stmt = $db->query("SELECT * FROM manufacturers");
          while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<div class='manufacturer-card bg-white shadow-lg rounded-lg p-6 card-hover' data-id='" . htmlspecialchars($row['id']) . "' data-machine='" . htmlspecialchars($row['machine']) . "' data-manufacturer='" . htmlspecialchars($row['manufacturer']) . "' data-contact-person='" . htmlspecialchars($row['contact_person'] ?? '') . "' data-phone='" . htmlspecialchars($row['phone'] ?? '') . "' data-notes='" . htmlspecialchars($row['notes'] ?? '') . "' data-links='" . htmlspecialchars($row['links'] ?? '') . "' data-created-by='" . htmlspecialchars($row['created_by']) . "' data-created-at='" . htmlspecialchars($row['created_at']) . "' data-last-modified-by='" . htmlspecialchars($row['last_modified_by']) . "' data-last-modified-at='" . htmlspecialchars($row['last_modified_at']) . "'>";
            echo "<div class='flex items-center justify-between mb-4'>";
            echo "<input type='checkbox' class='select-manufacturer rounded text-blue-600' data-id='" . htmlspecialchars($row['id']) . "' aria-label='Hersteller auswählen'>";
            echo "<button class='open-btn' style='background-color: #2563eb; color: white; padding: 0.25rem 0.75rem; border-radius: 0.5rem; display: block; font-size: 0.875rem; line-height: 1.25rem; transition: background-color 0.2s;' onmouseover='this.style.backgroundColor=\"#1d4ed8\"' onmouseout='this.style.backgroundColor=\"#2563eb\"' aria-label='Details öffnen'>Öffnen</button>";
            echo "</div>";
            echo "<h3 class='text-lg font-semibold mt-2'>" . htmlspecialchars($row['machine']) . "</h3>";
            echo "<p class='text-gray-600'>" . htmlspecialchars($row['manufacturer']) . "</p>";
            if (!empty($row['links'])) {
              echo "<div class='mt-2'>";
              $links = explode("\n", $row['links']);
              foreach ($links as $link) {
                $link = trim($link);
                if ($link) {
                  echo "<a href='" . htmlspecialchars($link) . "' class='text-blue-500 hover:underline block' target='_blank' rel='noopener noreferrer'>" . htmlspecialchars($link) . "</a>";
                }
              }
              echo "</div>";
            }
            $stmtFiles = $db->prepare("SELECT file_path, file_type, description FROM manufacturer_files WHERE manufacturer_id = ?");
            $stmtFiles->execute([$row['id']]);
            $files = $stmtFiles->fetchAll(PDO::FETCH_ASSOC);
            echo "<div class='mt-4 flex flex-wrap gap-2'>";
            foreach ($files as $file) {
              if ($file['file_type'] === 'image') {
                echo "<div class='relative'>";
                echo "<a href='" . htmlspecialchars($file['file_path']) . "' target='_blank' rel='noopener noreferrer'><img src='" . htmlspecialchars($file['file_path']) . "' alt='" . htmlspecialchars($file['description'] ?? 'Bild') . "' class='w-16 h-16 object-cover rounded'></a>";
                if (!empty($file['description'])) {
                  echo "<p class='text-xs text-gray-500 mt-1'>" . htmlspecialchars($file['description']) . "</p>";
                }
                echo "</div>";
              } elseif ($file['file_type'] === 'pdf') {
                echo "<div>";
                echo "<a href='" . htmlspecialchars($file['file_path']) . "' target='_blank' class='text-blue-500 hover:underline' rel='noopener noreferrer'>" . htmlspecialchars($file['description'] ?? 'PDF anzeigen') . "</a>";
                echo "</div>";
              }
            }
            echo "</div>";
            echo "</div>";
          }
        } catch (PDOException $e) {
          echo "<div class='bg-white shadow-lg rounded-lg p-6 text-red-600'>Fehler beim Laden der Hersteller: " . htmlspecialchars($e->getMessage()) . "</div>";
        }
        ?>
      </div>
    </div>
  </div>

  <!-- Add Manufacturer Modal -->
  <div id="addManufacturerModal" class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center"
    role="dialog" aria-labelledby="addModalTitle">
    <div class="bg-white rounded-lg shadow-lg w-11/12 md:w-1/2 modal-content p-6 relative">
      <button id="closeAddModalBtn" class="absolute top-4 right-4 text-gray-600 hover:text-gray-800"
        aria-label="Modal schließen">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
          <path
            d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z" />
        </svg>
      </button>
      <h2 id="addModalTitle" class="text-2xl font-bold mb-6">Hersteller hinzufügen</h2>
      <form id="addManufacturerForm" class="space-y-4" enctype="multipart/form-data">
        <div>
          <label for="machine" class="block font-semibold text-gray-700">Maschine *</label>
          <input type="text" id="machine" name="machine"
            class="w-full border rounded-lg p-3 focus:ring-2 focus:ring-blue-500" required aria-required="true">
        </div>
        <div>
          <label for="manufacturer" class="block font-semibold text-gray-700">Hersteller *</label>
          <input type="text" id="manufacturer" name="manufacturer"
            class="w-full border rounded-lg p-3 focus:ring-2 focus:ring-blue-500" required aria-required="true">
        </div>
        <div>
          <label for="contact_person" class="block font-semibold text-gray-700">Kontaktperson</label>
          <input type="text" id="contact_person" name="contact_person"
            class="w-full border rounded-lg p-3 focus:ring-2 focus:ring-blue-500">
        </div>
        <div>
          <label for="phone" class="block font-semibold text-gray-700">Telefon</label>
          <input type="text" id="phone" name="phone"
            class="w-full border rounded-lg p-3 focus:ring-2 focus:ring-blue-500">
        </div>
        <div>
          <label for="notes" class="block font-semibold text-gray-700">Notizen</label>
          <textarea id="notes" name="notes" class="w-full border rounded-lg p-3 focus:ring-2 focus:ring-blue-500"
            rows="4"></textarea>
        </div>
        <div>
          <label for="links" class="block font-semibold text-gray-700">Links</label>
          <textarea id="links" name="links" class="w-full border rounded-lg p-3 focus:ring-2 focus:ring-blue-500"
            rows="4"></textarea>
        </div>
        <div>
          <label class="block font-semibold text-gray-700">Bilder hochladen (JPEG, PNG, GIF, max. 64MB)</label>
          <div id="imageInputsAdd" class="space-y-2">
            <div class="image-input-group flex space-x-2">
              <input type="file" name="images[]" class="w-full border p-2 rounded"
                accept="image/jpeg,image/png,image/gif" aria-label="Bild auswählen">
              <input type="text" name="image_descriptions[]" class="w-full border p-2 rounded"
                placeholder="Bezeichnung (z. B. Bild_2025)" aria-label="Bildbeschreibung">
            </div>
          </div>
          <button type="button" id="addImageInputBtn" class="mt-2 text-blue-500 hover:underline"
            aria-label="Weiteres Bild hinzufügen">+ Weiteres Bild hinzufügen</button>
        </div>
        <div>
          <label class="block font-semibold text-gray-700">PDFs hochladen (max. 64MB)</label>
          <div id="pdfInputsAdd" class="space-y-2">
            <div class="pdf-input-group flex space-x-2">
              <input type="file" name="pdfs[]" class="w-full border p-2 rounded" accept="application/pdf"
                aria-label="PDF auswählen">
              <input type="text" name="pdf_descriptions[]" class="w-full border p-2 rounded"
                placeholder="Bezeichnung (z. B. Vertrag)" aria-label="PDF-Beschreibung">
            </div>
          </div>
          <button type="button" id="addPdfInputBtn" class="mt-2 text-blue-500 hover:underline"
            aria-label="Weiteres PDF hinzufügen">+ Weiteres PDF hinzufügen</button>
        </div>
        <div class="flex justify-end space-x-2">
          <button type="button" id="cancelAddBtn" class="border border-gray-300 px-4 py-2 rounded-lg hover:bg-gray-100"
            aria-label="Abbrechen">Abbrechen</button>
          <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700"
            aria-label="Speichern">Speichern</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Edit Manufacturer Modal -->
  <div id="editManufacturerModal" class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center"
    role="dialog" aria-labelledby="editModalTitle">
    <div class="bg-white rounded-lg shadow-lg w-11/12 md:w-1/2 modal-content p-6 relative">
      <button id="closeEditModalBtn" class="absolute top-4 right-4 text-gray-600 hover:text-gray-800"
        aria-label="Modal schließen">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
          <path
            d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z" />
        </svg>
      </button>
      <h2 id="editModalTitle" class="text-2xl font-bold mb-6">Hersteller Details</h2>
      <form id="editManufacturerForm" class="space-y-4" enctype="multipart/form-data">
        <input type="hidden" name="id">
        <input type="hidden" name="files_to_delete" id="filesToDelete" value="[]">
        <div>
          <label for="edit_machine" class="block font-semibold text-gray-700">Maschine</label>
          <input type="text" id="edit_machine" name="machine" class="w-full border rounded-lg p-3 bg-gray-100" readonly>
        </div>
        <div>
          <label for="edit_manufacturer" class="block font-semibold text-gray-700">Hersteller</label>
          <input type="text" id="edit_manufacturer" name="manufacturer" class="w-full border rounded-lg p-3 bg-gray-100"
            readonly>
        </div>
        <div>
          <label for="edit_contact_person" class="block font-semibold text-gray-700">Kontaktperson</label>
          <input type="text" id="edit_contact_person" name="contact_person"
            class="w-full border rounded-lg p-3 bg-gray-100" readonly>
        </div>
        <div>
          <label for="phoneField" class="block font-semibold text-gray-700">Telefon</label>
          <input type="text" id="phoneField" name="phone" class="w-full border rounded-lg p-3 bg-gray-100" readonly>
        </div>
        <div>
          <label for="edit_notes" class="block font-semibold text-gray-700">Notizen</label>
          <textarea id="edit_notes" name="notes" class="w-full border rounded-lg p-3 bg-gray-100" rows="4"
            readonly></textarea>
        </div>
        <div id="linksContainer">
          <label for="linksField" class="block font-semibold text-gray-700">Links</label>
          <div id="linksView" class="w-full border rounded-lg p-3 bg-gray-100"></div>
          <textarea id="linksField" name="links" class="w-full border rounded-lg p-3 hidden" rows="4"></textarea>
        </div>
        <div>
          <label class="block font-semibold text-gray-700">Aktuelle Bilder</label>
          <div id="currentImages" class="mt-2 flex flex-wrap gap-4"></div>
          <div id="imageInputsEdit" class="space-y-2 mt-2">
            <div class="image-input-group flex space-x-2">
              <input type="file" name="images[]" id="imageInput" class="w-full border p-2 rounded"
                accept="image/jpeg,image/png,image/gif" style="display: none;" aria-label="Bild auswählen">
              <input type="text" name="image_descriptions[]" class="w-full border p-2 rounded"
                placeholder="Bezeichnung (z. B. Bild_2025)" style="display: none;" aria-label="Bildbeschreibung">
            </div>
          </div>
          <button type="button" id="addImageInputEditBtn" class="mt-2 text-blue-500 hover:underline hidden"
            aria-label="Weiteres Bild hinzufügen">+ Weiteres Bild hinzufügen</button>
        </div>
        <div>
          <label class="block font-semibold text-gray-700">Aktuelle PDFs</label>
          <div id="currentPdfs" class="mt-2 space-y-2"></div>
          <div id="pdfInputsEdit" class="space-y-2 mt-2">
            <div class="pdf-input-group flex space-x-2">
              <input type="file" name="pdfs[]" id="pdfInput" class="w-full border p-2 rounded" accept="application/pdf"
                style="display: none;" aria-label="PDF auswählen">
              <input type="text" name="pdf_descriptions[]" class="w-full border p-2 rounded"
                placeholder="Bezeichnung (z. B. Vertrag)" style="display: none;" aria-label="PDF-Beschreibung">
            </div>
          </div>
          <button type="button" id="addPdfInputEditBtn" class="mt-2 text-blue-500 hover:underline hidden"
            aria-label="Weiteres PDF hinzufügen">+ Weiteres PDF hinzufügen</button>
        </div>
        <div>
          <label for="created_by" class="block font-semibold text-gray-700">Erstellt von</label>
          <input type="text" id="created_by" name="created_by" class="w-full border rounded-lg p-3 bg-gray-100"
            readonly>
        </div>
        <div>
          <label for="created_at" class="block font-semibold text-gray-700">Erstellt am</label>
          <input type="text" id="created_at" name="created_at" class="w-full border rounded-lg p-3 bg-gray-100"
            readonly>
        </div>
        <div>
          <label for="last_modified_by" class="block font-semibold text-gray-700">Zuletzt geändert von</label>
          <input type="text" id="last_modified_by" name="last_modified_by"
            class="w-full border rounded-lg p-3 bg-gray-100" readonly>
        </div>
        <div>
          <label for="last_modified_at" class="block font-semibold text-gray-700">Zuletzt geändert am</label>
          <input type="text" id="last_modified_at" name="last_modified_at"
            class="w-full border rounded-lg p-3 bg-gray-100" readonly>
        </div>
        <div class="flex justify-end space-x-2">
          <button type="button" id="closeEditBtn" class="border border-gray-300 px-4 py-2 rounded-lg hover:bg-gray-100"
            aria-label="Schließen">Schließen</button>
          <button type="button" id="editBtn" class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600"
            aria-label="Bearbeiten">Bearbeiten</button>
          <button type="button" id="deleteBtnModal"
            class="bg-red-600 text-white px-4 py-2 rounded-lg hidden hover:bg-red-700"
            aria-label="Löschen">Löschen</button>
          <button type="button" id="undoBtn"
            class="bg-gray-500 text-white px-4 py-2 rounded-lg hidden hover:bg-gray-600"
            aria-label="Löschen rückgängig machen">Rückgängig</button>
          <button type="submit" id="saveEditBtn"
            class="bg-blue-600 text-white px-4 py-2 rounded-lg hidden hover:bg-blue-700"
            aria-label="Speichern">Speichern</button>
        </div>
      </form>
    </div>
  </div>

  <script>
    // Utility: Debounce function
    function debounce(func, wait) {
      let timeout;
      return function (...args) {
        clearTimeout(timeout);
        timeout = setTimeout(() => func.apply(this, args), wait);
      };
    }

    // Sidebar Toggle
    const menuBtn = document.getElementById('menuBtn');
    const sidebar = document.getElementById('sidebar');
    menuBtn.addEventListener('click', () => {
      sidebar.classList.toggle('-translate-x-full');
      menuBtn.setAttribute('aria-expanded', sidebar.classList.contains('-translate-x-full') ? 'false' : 'true');
    });

    // Search and Filter
    const machineSearchInput = document.getElementById('machineSearchInput');
    const manufacturerSearchInput = document.getElementById('manufacturerSearchInput');
    const manufacturerCardsContainer = document.getElementById('manufacturerCards');
    let manufacturerCards = Array.from(manufacturerCardsContainer.querySelectorAll('.manufacturer-card'));

    const selectAllVisible = document.getElementById('selectAllVisible');
    const deleteBtn = document.getElementById('deleteBtn');

    // Populate Suggestions
    const machines = [...new Set(manufacturerCards.map(card => card.dataset.machine).filter(machine => machine !== ''))];
    const manufacturers = [...new Set(manufacturerCards.map(card => card.dataset.manufacturer).filter(manufacturer => manufacturer !== ''))];
    const machineSuggestions = document.getElementById('machineSuggestions');
    const manufacturerSuggestions = document.getElementById('manufacturerSuggestions');

    machines.forEach(machine => {
      const option = document.createElement('option');
      option.value = machine;
      machineSuggestions.appendChild(option);
    });

    manufacturers.forEach(manufacturer => {
      const option = document.createElement('option');
      option.value = manufacturer;
      manufacturerSuggestions.appendChild(option);
    });

    function filterManufacturers() {
      const machineSearchTerm = machineSearchInput.value.trim().toLowerCase();
      const manufacturerSearchTerm = manufacturerSearchInput.value.trim().toLowerCase();

      manufacturerCards = Array.from(manufacturerCardsContainer.querySelectorAll('.manufacturer-card')); // Update cards
      let filteredCards = manufacturerCards.filter(card => {
        const machine = card.dataset.machine.toLowerCase();
        const manufacturer = card.dataset.manufacturer.toLowerCase();
        return (machineSearchTerm === '' || machine.includes(machineSearchTerm)) &&
          (manufacturerSearchTerm === '' || manufacturer.includes(manufacturerSearchTerm));
      });

      manufacturerCards.forEach(card => card.style.display = 'none');
      filteredCards.forEach(card => card.style.display = 'block');

      selectAllVisible.checked = false;
      document.querySelectorAll('.select-manufacturer').forEach(checkbox => checkbox.checked = false);
      deleteBtn.classList.add('hidden');
    }

    const debouncedFilter = debounce(filterManufacturers, 300);
    machineSearchInput.addEventListener('input', debouncedFilter);
    manufacturerSearchInput.addEventListener('input', debouncedFilter);

    // Select All
    selectAllVisible.addEventListener('change', () => {
      const isChecked = selectAllVisible.checked;
      manufacturerCards.forEach(card => {
        if (card.style.display !== 'none') {
          card.querySelector('.select-manufacturer').checked = isChecked;
        }
      });
      deleteBtn.classList.toggle('hidden', !document.querySelectorAll('.select-manufacturer:checked').length);
    });

    document.addEventListener('change', (e) => {
      if (e.target.classList.contains('select-manufacturer')) {
        deleteBtn.classList.toggle('hidden', !document.querySelectorAll('.select-manufacturer:checked').length);
      }
    });

    // Delete Functionality
    deleteBtn.addEventListener('click', () => {
      if (document.querySelectorAll('.select-manufacturer:checked').length) {
        deleteConfirmModal.classList.remove('hidden');
      }
    });

    cancelDeleteBtn.addEventListener('click', () => {
      deleteConfirmModal.classList.add('hidden');
      document.querySelectorAll('.select-manufacturer').forEach(checkbox => checkbox.checked = false);
      deleteBtn.classList.add('hidden');
      selectAllVisible.checked = false;
    });

    confirmDeleteBtn.addEventListener('click', async () => {
      const selectedIds = Array.from(document.querySelectorAll('.select-manufacturer:checked')).map(checkbox => checkbox.dataset.id);
      try {
        const response = await fetch('<?php echo BASE_PATH; ?>delete_manufacturer.php', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify({ ids: selectedIds })
        });
        const result = await response.json();
        if (result.success) {
          deleteConfirmModal.classList.add('hidden');
          showToast('Hersteller erfolgreich gelöscht!');
          setTimeout(() => location.reload(), 2000);
        } else {
          showToast('Fehler beim Löschen: ' + result.error, 'error');
        }
      } catch (error) {
        showToast('Fehler beim Löschen: ' + error.message, 'error');
      }
    });

    // Toast Notification
    function showToast(message, type = 'success') {
      const toast = document.getElementById('toast');
      toast.textContent = message;
      toast.className = `fixed top-4 right-4 text-white px-6 py-3 rounded-lg shadow-lg fade-in ${type === 'error' ? 'bg-red-600' : 'bg-green-600'}`;
      toast.classList.remove('hidden');
      setTimeout(() => toast.classList.add('hidden'), 3000);
    }

    // Modal Controls
    const addModal = document.getElementById('addManufacturerModal');
    const addBtn = document.getElementById('addManufacturerBtn');
    const closeAddBtn = document.getElementById('closeAddModalBtn');
    const cancelAddBtn = document.getElementById('cancelAddBtn');

    const editModal = document.getElementById('editManufacturerModal');
    const closeEditBtn = document.getElementById('closeEditBtn');
    const closeEditModalBtn = document.getElementById('closeEditModalBtn');
    const editBtn = document.getElementById('editBtn');
    const saveEditBtn = document.getElementById('saveEditBtn');
    const deleteBtnModal = document.getElementById('deleteBtnModal');
    const undoBtn = document.getElementById('undoBtn');

    let filesToDelete = [];

    // File Input Handlers
    const addImageInputBtn = document.getElementById('addImageInputBtn');
    const imageInputsAdd = document.getElementById('imageInputsAdd');
    addImageInputBtn.addEventListener('click', () => {
      const newInputGroup = document.createElement('div');
      newInputGroup.className = 'image-input-group flex space-x-2';
      newInputGroup.innerHTML = `
        <input type="file" name="images[]" class="w-full border p-2 rounded" accept="image/jpeg,image/png,image/gif" aria-label="Bild auswählen">
        <input type="text" name="image_descriptions[]" class="w-full border p-2 rounded" placeholder="Bezeichnung (z. B. Bild_2025)" aria-label="Bildbeschreibung">
      `;
      imageInputsAdd.appendChild(newInputGroup);
    });

    const addPdfInputBtn = document.getElementById('addPdfInputBtn');
    const pdfInputsAdd = document.getElementById('pdfInputsAdd');
    addPdfInputBtn.addEventListener('click', () => {
      const newInputGroup = document.createElement('div');
      newInputGroup.className = 'pdf-input-group flex space-x-2';
      newInputGroup.innerHTML = `
        <input type="file" name="pdfs[]" class="w-full border p-2 rounded" accept="application/pdf" aria-label="PDF auswählen">
        <input type="text" name="pdf_descriptions[]" class="w-full border p-2 rounded" placeholder="Bezeichnung (z. B. Vertrag)" aria-label="PDF-Beschreibung">
      `;
      pdfInputsAdd.appendChild(newInputGroup);
    });

    const addImageInputEditBtn = document.getElementById('addImageInputEditBtn');
    const imageInputsEdit = document.getElementById('imageInputsEdit');
    addImageInputEditBtn.addEventListener('click', () => {
      const newInputGroup = document.createElement('div');
      newInputGroup.className = 'image-input-group flex space-x-2';
      newInputGroup.innerHTML = `
        <input type="file" name="images[]" class="w-full border p-2 rounded" accept="image/jpeg,image/png,image/gif" aria-label="Bild auswählen">
        <input type="text" name="image_descriptions[]" class="w-full border p-2 rounded" placeholder="Bezeichnung (z. B. Bild_2025)" aria-label="Bildbeschreibung">
      `;
      imageInputsEdit.appendChild(newInputGroup);
    });

    const addPdfInputEditBtn = document.getElementById('addPdfInputEditBtn');
    const pdfInputsEdit = document.getElementById('pdfInputsEdit');
    addPdfInputEditBtn.addEventListener('click', () => {
      const newInputGroup = document.createElement('div');
      newInputGroup.className = 'pdf-input-group flex space-x-2';
      newInputGroup.innerHTML = `
        <input type="file" name="pdfs[]" class="w-full border p-2 rounded" accept="application/pdf" aria-label="PDF auswählen">
        <input type="text" name="pdf_descriptions[]" class="w-full border p-2 rounded" placeholder="Bezeichnung (z. B. Vertrag)" aria-label="PDF-Beschreibung">
      `;
      pdfInputsEdit.appendChild(newInputGroup);
    });

    // Modal Event Listeners
    addBtn.addEventListener('click', () => {
      addModal.classList.remove('hidden');
      addModal.focus();
    });
    closeAddBtn.addEventListener('click', resetAddModal);
    cancelAddBtn.addEventListener('click', resetAddModal);

    function resetAddModal() {
      addModal.classList.add('hidden');
      document.getElementById('addManufacturerForm').reset();
      while (imageInputsAdd.children.length > 1) {
        imageInputsAdd.removeChild(imageInputsAdd.lastChild);
      }
      while (pdfInputsAdd.children.length > 1) {
        pdfInputsAdd.removeChild(pdfInputsAdd.lastChild);
      }
    }

    // Fetch Manufacturer Details
    document.addEventListener('click', (e) => {
      if (e.target.classList.contains('open-btn')) {
        console.log('Open button clicked:', e.target); // Debugging
        const id = e.target.closest('.manufacturer-card').dataset.id;
        fetchManufacturerDetails(id);
      }
    });

    async function fetchManufacturerDetails(id) {
      try {
        const response = await fetch(`<?php echo BASE_PATH; ?>get_manufacturer.php?id=${id}`);
        if (!response.ok) throw new Error('Netzwerkfehler');
        const manufacturer = await response.json();
        if (manufacturer.success) {
          const form = document.getElementById('editManufacturerForm');
          form.querySelector('[name="id"]').value = manufacturer.data.id;
          form.querySelector('[name="machine"]').value = manufacturer.data.machine || '';
          form.querySelector('[name="manufacturer"]').value = manufacturer.data.manufacturer || '';
          form.querySelector('[name="contact_person"]').value = manufacturer.data.contact_person || '';
          form.querySelector('[name="phone"]').value = manufacturer.data.phone || '';
          form.querySelector('[name="notes"]').value = manufacturer.data.notes || '';
          form.querySelector('[name="links"]').value = manufacturer.data.links || '';
          const linksView = document.getElementById('linksView');
          linksView.innerHTML = manufacturer.data.links ? manufacturer.data.links.split('\n').filter(link => link.trim()).map(link => `<a href="${link}" class="text-blue-500 hover:underline block" target="_blank" rel="noopener noreferrer">${link}</a>`).join('') : '-';
          form.querySelector('[name="created_by"]').value = manufacturer.data.created_by || '';
          form.querySelector('[name="created_at"]').value = manufacturer.data.created_at || '';
          form.querySelector('[name="last_modified_by"]').value = manufacturer.data.last_modified_by || '';
          form.querySelector('[name="last_modified_at"]').value = manufacturer.data.last_modified_at || '';

          const phoneField = document.getElementById('phoneField');
          phoneField.parentElement.innerHTML = manufacturer.data.phone ? `
            <label for="phoneField" class="block font-semibold text-gray-700">Telefon</label>
            <a href="tel:${manufacturer.data.phone}" class="text-blue-500 hover:underline">${manufacturer.data.phone}</a>
            <input type="text" id="phoneField" name="phone" class="w-full border rounded-lg p-3 hidden" value="${manufacturer.data.phone || ''}">
          ` : `
            <label for="phoneField" class="block font-semibold text-gray-700">Telefon</label>
            <input type="text" id="phoneField" name="phone" class="w-full border rounded-lg p-3 bg-gray-100" value="" readonly>
          `;

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
          newImageInputGroup.className = 'image-input-group flex space-x-2';
          newImageInputGroup.innerHTML = `
            <input type="file" name="images[]" id="imageInput" class="w-full border p-2 rounded" accept="image/jpeg,image/png,image/gif" style="display: none;" aria-label="Bild auswählen">
            <input type="text" name="image_descriptions[]" class="w-full border p-2 rounded" placeholder="Bezeichnung (z. B. Bild_2025)" style="display: none;" aria-label="Bildbeschreibung">
          `;
          imageInputsEdit.appendChild(newImageInputGroup);

          const newPdfInputGroup = document.createElement('div');
          newPdfInputGroup.className = 'pdf-input-group flex space-x-2';
          newPdfInputGroup.innerHTML = `
            <input type="file" name="pdfs[]" id="pdfInput" class="w-full border p-2 rounded" accept="application/pdf" style="display: none;" aria-label="PDF auswählen">
            <input type="text" name="pdf_descriptions[]" class="w-full border p-2 rounded" placeholder="Bezeichnung (z. B. Vertrag)" style="display: none;" aria-label="PDF-Beschreibung">
          `;
          pdfInputsEdit.appendChild(newPdfInputGroup);

          const currentImagesDiv = document.getElementById('currentImages');
          currentImagesDiv.innerHTML = manufacturer.data.files.filter(file => file.file_type === 'image').length ? manufacturer.data.files.filter(file => file.file_type === 'image').map(image => `
            <div class="relative image-container border-2 border-transparent p-2" data-path="${image.file_path}">
              <input type="text" name="existing_image_descriptions[${image.file_path}]" class="w-full border rounded-lg p-2 mb-1 existing-description" value="${image.description || ''}" readonly aria-label="Bildbeschreibung">
              <a href="${image.file_path}" target="_blank" rel="noopener noreferrer"><img src="${image.file_path}" alt="${image.description || 'Bild'}" class="w-20 h-20 object-cover rounded"></a>
              <button class="delete-file absolute top-0 right-0 bg-red-500 text-white rounded-full w-6 h-6 flex items-center justify-center disabled:bg-gray-400" data-path="${image.file_path}" disabled aria-label="Bild löschen">×</button>
            </div>`).join('') : 'Keine Bilder vorhanden';

          const currentPdfsDiv = document.getElementById('currentPdfs');
          currentPdfsDiv.innerHTML = manufacturer.data.files.filter(file => file.file_type === 'pdf').length ? manufacturer.data.files.filter(file => file.file_type === 'pdf').map(pdf => `
            <div class="relative pdf-container border-2 border-transparent p-2" data-path="${pdf.file_path}">
              <input type="text" name="existing_pdf_descriptions[${pdf.file_path}]" class="w-full border rounded-lg p-2 mb-1 existing-description" value="${pdf.description || ''}" readonly aria-label="PDF-Beschreibung">
              <a href="${pdf.file_path}" target="_blank" class="text-blue-500 hover:underline" rel="noopener noreferrer">PDF anzeigen</a>
              <button class="delete-file absolute top-0 right-0 bg-red-500 text-white rounded-full w-6 h-6 flex items-center justify-center disabled:bg-gray-400" data-path="${pdf.file_path}" disabled aria-label="PDF löschen">×</button>
            </div>`).join('') : 'Keine PDFs vorhanden';

          editModal.classList.remove('hidden');
          editModal.focus();
        } else {
          showToast('Fehler: ' + manufacturer.error, 'error');
        }
      } catch (error) {
        showToast('Fehler beim Abrufen der Daten: ' + error.message, 'error');
      }
    }

    // Edit Modal Controls
    closeEditBtn.addEventListener('click', resetEditForm);
    closeEditModalBtn.addEventListener('click', resetEditForm);

    editBtn.addEventListener('click', () => {
      const form = document.getElementById('editManufacturerForm');
      form.querySelectorAll('input:not([name="id"]):not([name="created_by"]):not([name="created_at"]):not([name="last_modified_by"]):not([name="last_modified_at"])').forEach(input => {
        if (!input.classList.contains('existing-description')) {
          input.removeAttribute('readonly');
          input.classList.remove('bg-gray-100');
        }
        if (input.id === 'phoneField') {
          input.classList.remove('hidden');
          if (input.previousElementSibling?.tagName === 'A') input.previousElementSibling.style.display = 'none';
        }
      });
      document.querySelectorAll('.existing-description').forEach(input => {
        input.removeAttribute('readonly');
        input.classList.remove('bg-gray-100');
      });
      form.querySelector('textarea[name="notes"]').removeAttribute('readonly');
      form.querySelector('textarea[name="notes"]').classList.remove('bg-gray-100');
      form.querySelector('textarea[name="links"]').removeAttribute('readonly');
      document.getElementById('linksView').classList.add('hidden');
      document.getElementById('linksField').classList.remove('hidden');
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

      document.querySelectorAll('.delete-file').forEach(button => {
        button.disabled = false;
        button.addEventListener('click', handleDeleteFile, { once: true });
      });
    });

    function handleDeleteFile(e) {
      e.preventDefault();
      const filePath = e.target.dataset.path;
      if (confirm('Möchten Sie diese Datei wirklich löschen?')) {
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
    }

    // Form Submissions
    document.getElementById('addManufacturerForm').addEventListener('submit', async (e) => {
      e.preventDefault();
      const form = e.target;
      const machine = form.querySelector('[name="machine"]').value.trim();
      const manufacturer = form.querySelector('[name="manufacturer"]').value.trim();

      if (!machine || !manufacturer) {
        showToast('Bitte füllen Sie die Pflichtfelder "Maschine" und "Hersteller" aus.', 'error');
        return;
      }

      const formData = new FormData(form);
      try {
        const response = await fetch('<?php echo BASE_PATH; ?>save_manufacturer.php', {
          method: 'POST',
          body: formData
        });
        const result = await response.json();
        if (result.success) {
          resetAddModal();
          showToast('Hersteller erfolgreich hinzugefügt!');
          setTimeout(() => location.reload(), 2000);
        } else {
          showToast('Fehler: ' + result.error, 'error');
        }
      } catch (error) {
        showToast('Fehler beim Speichern: ' + error.message, 'error');
      }
    });

    document.getElementById('editManufacturerForm').addEventListener('submit', async (e) => {
      e.preventDefault();
      const formData = new FormData(e.target);
      formData.append('files_to_delete', JSON.stringify(filesToDelete));
      try {
        const response = await fetch('<?php echo BASE_PATH; ?>update_manufacturer.php', {
          method: 'POST',
          body: formData
        });
        const result = await response.json();
        if (result.success) {
          resetEditForm();
          showToast('Hersteller erfolgreich aktualisiert!');
          setTimeout(() => location.reload(), 2000);
        } else {
          showToast('Fehler: ' + result.error, 'error');
        }
      } catch (error) {
        showToast('Fehler beim Aktualisieren: ' + error.message, 'error');
      }
    });

    function resetEditForm() {
      const form = document.getElementById('editManufacturerForm');
      editModal.classList.add('hidden');
      form.querySelectorAll('input:not([name="id"]):not([name="created_by"]):not([name="created_at"]):not([name="last_modified_by"]):not([name="last_modified_at"])').forEach(input => {
        if (!input.classList.contains('existing-description')) {
          input.setAttribute('readonly', true);
          input.classList.add('bg-gray-100');
        }
        if (input.type === 'file') input.value = '';
      });
      document.querySelectorAll('.existing-description').forEach(input => {
        input.setAttribute('readonly', true);
        input.classList.add('bg-gray-100');
      });
      form.querySelector('textarea[name="notes"]').setAttribute('readonly', true);
      form.querySelector('textarea[name="notes"]').classList.add('bg-gray-100');
      form.querySelector('textarea[name="links"]').setAttribute('readonly', true);
      document.getElementById('linksView').classList.remove('hidden');
      document.getElementById('linksField').classList.add('hidden');
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
      // Remove existing delete-file listeners to prevent memory leaks
      document.querySelectorAll('.delete-file').forEach(button => {
        button.removeEventListener('click', handleDeleteFile);
      });
    }

    // Keyboard Shortcuts
    document.addEventListener('keydown', (e) => {
      if (e.ctrlKey && e.key === 's') {
        e.preventDefault();
        if (!addModal.classList.contains('hidden')) document.getElementById('addManufacturerForm').dispatchEvent(new Event('submit'));
        if (!editModal.classList.contains('hidden')) document.getElementById('editManufacturerForm').dispatchEvent(new Event('submit'));
      }
      if (e.key === 'Escape') {
        if (!addModal.classList.contains('hidden')) resetAddModal();
        if (!editModal.classList.contains('hidden')) resetEditForm();
        if (!deleteConfirmModal.classList.contains('hidden')) cancelDeleteBtn.click();
      }
    });

    // Undo Delete
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
        if (deleteBtn) deleteBtn.style.display = 'flex';
      });
    });

    // Service Worker
    if ('serviceWorker' in navigator) {
      window.addEventListener('load', () => {
        navigator.serviceWorker.register('<?php echo BASE_PATH; ?>sw.js')
          .then(registration => console.log('Service Worker registriert:', registration))
          .catch(error => console.error('Fehler bei der Registrierung des Service Workers:', error));
      });
    }
  </script>
</body>

</html>