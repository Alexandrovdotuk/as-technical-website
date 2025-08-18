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
  <title>CRM AS EXport - Kalender</title>
  <link rel="manifest" href="/CRM/manifest.json">

  <style>
    html,
    body {
      margin: 0;
      padding: 0;
      width: 100%;
      height: 100%;
      box-sizing: border-box;
      overflow-x: hidden;
    }

    *,
    *:before,
    *:after {
      box-sizing: inherit;
    }

    body {
      font-family: 'Arial', sans-serif;
      background-color: #f4f6f9;
      display: flex;
      min-height: 100vh;
    }

    .container {
      display: flex;
      width: 100%;
      min-height: 100vh;
    }

    .sidebar {
      width: 250px;
      background-color: #ffffff;
      box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
      padding: 20px;
      position: fixed;
      top: 0;
      left: 0;
      height: 100%;
      overflow-y: auto;
      transition: transform 0.3s ease;
      z-index: 50;
    }

    .sidebar.hidden {
      transform: translateX(-250px);
    }

    .sidebar img {
      width: 100%;
      max-width: 150px;
      margin-bottom: 20px;
    }

    .sidebar nav a {
      display: block;
      padding: 10px;
      color: #333;
      text-decoration: none;
      border-radius: 5px;
      margin-bottom: 5px;
    }

    .sidebar nav a.active {
      background-color: #e0e7ff;
      color: #4f46e5;
    }

    .sidebar nav a:hover {
      background-color: #f1f5f9;
    }

    .menu-btn {
      position: fixed;
      top: 10px;
      left: 10px;
      background: none;
      border: none;
      cursor: pointer;
      z-index: 60;
      display: none;
    }

    .menu-btn svg {
      width: 24px;
      height: 24px;
    }

    .main-content {
      padding: 20px;
      flex: 1;
      overflow-y: auto;
      transition: margin-left 0.3s ease, width 0.3s ease;
      z-index: 1;
    }

    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
    }

    .header h1 {
      font-size: 24px;
      color: #333;
    }

    .controls {
      display: flex;
      gap: 10px;
      flex-wrap: wrap;
    }

    .controls select,
    .controls input,
    .controls button {
      padding: 8px 12px;
      border: 1px solid #d1d5db;
      border-radius: 5px;
      font-size: 14px;
    }

    .controls button {
      background-color: #4f46e5;
      color: white;
      border: none;
      cursor: pointer;
    }

    .controls button:hover {
      background-color: #4338ca;
    }

    .legend {
      background-color: #ffffff;
      padding: 15px;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
    }

    .legend h3 {
      font-size: 18px;
      margin-bottom: 10px;
    }

    .legend .legend-items {
      display: flex;
      gap: 15px;
      flex-wrap: wrap;
    }

    .legend .legend-item {
      display: flex;
      align-items: center;
      gap: 5px;
    }

    .legend .color-box {
      width: 16px;
      height: 16px;
      border-radius: 50%;
    }

    .month-container,
    .week-container {
      max-height: calc(100vh - 200px);
      overflow-y: auto;
      position: relative;
    }

    .month-section,
    .week-section {
      margin-bottom: 30px;
    }

    .month-title {
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 10px;
      position: sticky;
      top: 0;
      background-color: #f4f6f9;
      padding: 10px 0;
      z-index: 20;
    }

    .week-title {
      font-size: 18px;
      font-weight: bold;
      text-align: center;
      margin-bottom: 10px;
      background-color: #f4f6f9;
      padding: 8px 0;
      position: sticky;
      top: 0;
      z-index: 20;
    }

    .month-grid {
      display: grid;
      grid-template-columns: repeat(7, 1fr);
      gap: 1px;
      background: #e5e7eb;
      border-radius: 8px;
      overflow: hidden;
    }

    .month-grid>div {
      background: white;
      padding: 5px;
      position: relative;
      z-index: 1;
    }

    .month-grid .day-header {
      background: #f1f5f9;
      text-align: center;
      font-weight: bold;
      padding: 10px;
      z-index: 2;
    }

    .month-grid .day-number {
      text-align: center;
      font-weight: bold;
      position: relative;
      z-index: 15;
    }

    .event-band {
      position: absolute;
      left: 5px;
      right: 5px;
      height: 25px;
      border-radius: 5px;
      cursor: pointer;
      z-index: 10;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
      pointer-events: auto;
    }

    .event-band::after {
      content: '';
      position: absolute;
      left: 0;
      right: 0;
      bottom: 0;
      height: 2px;
      border: 1px dashed white;
      opacity: 0.7;
    }

    .event-band.alexander {
      background-color: #d1fae5;
    }

    .event-band.robert {
      background-color: #dbeafe;
    }

    .event-band.eugen {
      background-color: #ffedd5;
    }

    .event-details {
      display: block;
      padding: 5px;
      font-size: 12px;
      line-height: 1.2;
      pointer-events: none;
    }

    .event-details.hidden {
      visibility: hidden;
    }

    .global-tooltip {
      position: fixed;
      background: rgba(0, 0, 0, 0.8);
      color: white;
      padding: 4px 8px;
      border-radius: 4px;
      font-size: 12px;
      z-index: 1000;
      white-space: nowrap;
      min-width: 100px;
      display: none;
    }

    .toast {
      position: fixed;
      top: 20px;
      right: 20px;
      background-color: #10b981;
      color: white;
      padding: 10px 20px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
      z-index: 200;
      display: none;
    }

    .modal {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 1000;
      display: none;
    }

    .modal-content {
      background: white;
      padding: 20px;
      border-radius: 8px;
      width: 90%;
      max-width: 500px;
      max-height: 80vh;
      overflow-y: auto;
      position: relative;
    }

    .modal-content h2 {
      font-size: 20px;
      margin-bottom: 15px;
    }

    .modal-content form {
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .modal-content label {
      font-weight: bold;
    }

    .modal-content input,
    .modal-content textarea {
      padding: 8px;
      border: 1px solid #d1d5db;
      border-radius: 5px;
      width: 100%;
      box-sizing: border-box;
    }

    .modal-content textarea {
      resize: vertical;
      min-height: 80px;
    }

    .modal-content .buttons {
      display: flex;
      gap: 10px;
      justify-content: flex-end;
    }

    .modal-content button {
      padding: 8px 16px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .modal-content .close-btn,
    .modal-content .cancel-btn {
      background-color: #d1d5db;
    }

    .modal-content .save-btn {
      background-color: #4f46e5;
      color: white;
    }

    .modal-content .edit-btn {
      background-color: #f59e0b;
      color: white;
    }

    .modal-content .delete-btn {
      background-color: #ef4444;
      color: white;
    }

    .modal-content .confirm-btn {
      background-color: #ef4444;
      color: white;
    }

    @media (max-width: 768px) {
      .sidebar {
        transform: translateX(-250px);
      }

      .sidebar.active {
        transform: translateX(0);
      }

      .main-content {
        margin-left: 0 !important;
        width: 100% !important;
      }

      .menu-btn {
        display: block;
      }

      .month-grid>div {
        min-height: 80px;
      }
    }

    @media (min-width: 769px) {
      .main-content {
        margin-left: 250px !important;
        width: calc(100% - 250px) !important;
      }

      .sidebar {
        transform: translateX(0) !important;
      }
    }
  </style>
</head>

<body>
  <div id="globalTooltip" class="global-tooltip"></div>

  <div class="container">
    <div class="sidebar" id="sidebar">
      <img src="/CRM/assets/logo.png" alt="Logo" class="h-10 md:h-12">
      <nav>
        <a href="/CRM/index.php">Customers</a>
        <a href="/CRM/offers.php">Offers</a>
        <a href="/CRM/manufacturer.php">Manufact</a>
        <a href="/CRM/calendar.php" class="active">Calendar</a>
        <a href="/CRM/next_steps.php" class="block p-4 text-gray-600 hover:bg-gray-100">Next Steps</a>

        <a href="#">Overdue Warning</a>
        <a href="/CRM/about.php">About</a>
        <a href="#">App Gallery</a>
        <a href="/CRM/logout.php" style="color: #ef4444;">Logout</a>
      </nav>
    </div>

    <button id="menuBtn" class="menu-btn">
      <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
      </svg>
    </button>

    <div class="main-content">
      <div class="header">
        <h1>Calendar</h1>
        <div class="controls">
          <select id="viewSelect">
            <option value="month">Monat</option>
            <option value="week" selected>Woche</option>
            <option value="day">Tag</option>
          </select>
          <input type="date" id="datePicker" value="<?php echo date('Y-m-d'); ?>">
          <button id="addEventBtn">+ Add</button>
        </div>
      </div>

      <div class="legend">
        <h3>Farbzuordnung</h3>
        <div class="legend-items">
          <div class="legend-item">
            <div class="color-box" style="background-color: #d1fae5;"></div>
            <span>Alexander Alexandrov</span>
          </div>
          <div class="legend-item">
            <div class="color-box" style="background-color: #dbeafe;"></div>
            <span>Robert Kutschke</span>
          </div>
          <div class="legend-item">
            <div class="color-box" style="background-color: #ffedd5;"></div>
            <span>Eugen Schütz</span>
          </div>
        </div>
      </div>

      <div id="toast" class="toast">
        Aktion erfolgreich!
      </div>

      <div id="deleteConfirmModal" class="modal">
        <div class="modal-content">
          <h2>Löschen bestätigen</h2>
          <p>Möchten Sie diesen Termin wirklich löschen?</p>
          <div class="buttons">
            <button id="cancelDeleteBtn" class="cancel-btn">Abbrechen</button>
            <button id="confirmDeleteBtn" class="confirm-btn">Löschen</button>
          </div>
        </div>
      </div>

      <div id="calendarView">
        <div id="monthView" style="display: none;">
          <div class="header">
            <button id="prevMonthBtn">Vorheriger Monat</button>
            <h2 id="monthTitle"></h2>
            <button id="nextMonthBtn">Nächster Monat</button>
          </div>
          <div id="monthContainer" class="month-container"></div>
        </div>
        <div id="weekView">
          <div id="weekContainer" class="week-container"></div>
        </div>
        <div id="dayView" style="display: none;">
          <h2 id="dayTitle"></h2>
          <div id="dayHours"></div>
        </div>
      </div>
    </div>
  </div>

  <div id="addEventModal" class="modal">
    <div class="modal-content">
      <button id="closeAddModalBtn" class="close-btn" style="position: absolute; top: 10px; right: 10px;">X</button>
      <h2>Event Form</h2>
      <form id="addEventForm">
        <div>
          <label>Titel *</label>
          <input type="text" name="title" required>
        </div>
        <div>
          <label>Startdatum *</label>
          <input type="date" name="date" required>
        </div>
        <div>
          <label>Enddatum</label>
          <input type="date" name="end_date">
        </div>
        <div>
          <label>Uhrzeit *</label>
          <input type="time" name="time" required>
        </div>
        <div>
          <label>Kunde</label>
          <input type="text" id="customerSearchAdd" list="customerSuggestionsAdd" placeholder="Kunden suchen...">
          <datalist id="customerSuggestionsAdd">
            <?php
            $stmt = $db->query("SELECT id, name, company FROM customers ORDER BY name");
            while ($customer = $stmt->fetch(PDO::FETCH_ASSOC)) {
              $display = htmlspecialchars($customer['name']);
              if (!empty($customer['company'])) {
                $display .= ' (' . htmlspecialchars($customer['company']) . ')';
              }
              echo "<option value='$display' data-id='{$customer['id']}'>";
            }
            ?>
          </datalist>
          <input type="hidden" name="customer_id" id="customerIdAdd">
        </div>
        <div>
          <label>Beschreibung</label>
          <textarea name="description" rows="3"></textarea>
        </div>
        <div class="buttons">
          <button type="button" id="cancelAddBtn" class="cancel-btn">Cancel</button>
          <button type="submit" class="save-btn">Save</button>
        </div>
      </form>
    </div>
  </div>

  <div id="editEventModal" class="modal">
    <div class="modal-content">
      <button id="closeEditModalBtn" class="close-btn" style="position: absolute; top: 10px; right: 10px;">X</button>
      <h2>Event Details</h2>
      <form id="editEventForm">
        <input type="hidden" name="id">
        <div>
          <label>Titel</label>
          <input type="text" name="title" readonly>
        </div>
        <div>
          <label>Startdatum</label>
          <input type="date" name="date" readonly>
        </div>
        <div>
          <label>Enddatum</label>
          <input type="date" name="end_date" readonly>
        </div>
        <div>
          <label>Uhrzeit</label>
          <input type="time" name="time" readonly>
        </div>
        <div>
          <label>Kunde</label>
          <input type="text" id="customerSearchEdit" list="customerSuggestionsEdit" readonly>
          <datalist id="customerSuggestionsEdit">
            <?php
            $stmt = $db->query("SELECT id, name, company FROM customers ORDER BY name");
            while ($customer = $stmt->fetch(PDO::FETCH_ASSOC)) {
              $display = htmlspecialchars($customer['name']);
              if (!empty($customer['company'])) {
                $display .= ' (' . htmlspecialchars($customer['company']) . ')';
              }
              echo "<option value='$display' data-id='{$customer['id']}'>";
            }
            ?>
          </datalist>
          <input type="hidden" name="customer_id" id="customerIdEdit">
        </div>
        <div>
          <label>Beschreibung</label>
          <textarea name="description" rows="3" readonly></textarea>
        </div>
        <div>
          <label>Erstellt von</label>
          <input type="text" name="created_by" readonly>
        </div>
        <div>
          <label>Erstellt am</label>
          <input type="text" name="created_at" readonly>
        </div>
        <div>
          <label>Zuletzt geändert von</label>
          <input type="text" name="last_modified_by" readonly>
        </div>
        <div>
          <label>Zuletzt geändert am</label>
          <input type="text" name="last_modified_at" readonly>
        </div>
        <div class="buttons">
          <button type="button" id="closeEditBtn" class="close-btn">Close</button>
          <button type="button" id="editBtn" class="edit-btn">Edit</button>
          <button type="button" id="deleteBtn" class="delete-btn">Delete</button>
          <button type="submit" id="saveEditBtn" class="save-btn" style="display: none;">Save</button>
        </div>
      </form>
    </div>
  </div>

  <script>
    const menuBtn = document.getElementById('menuBtn');
    const sidebar = document.getElementById('sidebar');
    const mainContent = document.querySelector('.main-content');

    menuBtn.addEventListener('click', () => {
      sidebar.classList.toggle('hidden');
      sidebar.classList.toggle('active');
      if (window.innerWidth <= 768) {
        if (sidebar.classList.contains('hidden')) {
          mainContent.style.marginLeft = '0';
          mainContent.style.width = '100%';
        } else {
          mainContent.style.marginLeft = '250px';
          mainContent.style.width = 'calc(100% - 250px)';
        }
      }
    });

    window.addEventListener('resize', () => {
      if (window.innerWidth <= 768) {
        sidebar.classList.add('hidden');
        mainContent.style.marginLeft = '0';
        mainContent.style.width = '100%';
      } else {
        sidebar.classList.remove('hidden');
        mainContent.style.marginLeft = '250px';
        mainContent.style.width = 'calc(100% - 250px)';
      }
    });

    if (window.innerWidth <= 768) {
      sidebar.classList.add('hidden');
      mainContent.style.marginLeft = '0';
      mainContent.style.width = '100%';
    } else {
      sidebar.classList.remove('hidden');
      mainContent.style.marginLeft = '250px';
      mainContent.style.width = 'calc(100% - 250px)';
    }

    let events = [];
    <?php
    $stmt = $db->query("SELECT ce.*, c.name AS customer_name, c.company AS customer_company FROM calendar_events ce LEFT JOIN customers c ON ce.customer_id = c.id");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      echo "events.push(" . json_encode($row) . ");\n";
    }
    ?>

    const viewSelect = document.getElementById('viewSelect');
    const datePicker = document.getElementById('datePicker');
    const monthView = document.getElementById('monthView');
    const monthTitle = document.getElementById('monthTitle');
    const monthContainer = document.getElementById('monthContainer');
    const weekView = document.getElementById('weekView');
    const weekContainer = document.getElementById('weekContainer');
    const dayView = document.getElementById('dayView');
    const dayTitle = document.getElementById('dayTitle');
    const dayHours = document.getElementById('dayHours');
    const prevMonthBtn = document.getElementById('prevMonthBtn');
    const nextMonthBtn = document.getElementById('nextMonthBtn');
    const globalTooltip = document.getElementById('globalTooltip');

    const today = new Date();
    let currentDate = new Date(today);
    datePicker.value = currentDate.toISOString().split('T')[0];
    let displayedMonths = [];
    let displayedWeeks = [];

    function getDatesBetween(startDate, endDate) {
      const dates = [];
      let current = new Date(startDate);
      const end = new Date(endDate || startDate);
      while (current <= end) {
        dates.push(current.toISOString().split('T')[0]);
        current.setDate(current.getDate() + 1);
      }
      return dates;
    }

    function calculateDuration(startDate, endDate) {
      const start = new Date(startDate);
      const end = new Date(endDate || startDate);
      const diffTime = Math.abs(end - start);
      return Math.ceil(diffTime / (1000 * 60 * 60 * 24)) + 1;
    }

    function getWeekNumber(date) {
      const startOfYear = new Date(date.getFullYear(), 0, 1);
      const pastDaysOfYear = (date - startOfYear) / 86400000;
      return Math.ceil((pastDaysOfYear + startOfYear.getDay() + 1) / 7);
    }

    function renderEventBand(event, isFirstDay, topPosition) {
      const colorClass = event.created_by === 'Alexander Alexandrov' ? 'alexander' :
        event.created_by === 'Robert Kutschke' ? 'robert' :
        event.created_by === 'Eugen Schütz' ? 'eugen' : '';
      const duration = event.end_date ? calculateDuration(event.date, event.end_date) : 1;
      const tooltipContent = `${event.title} (${duration} Tag${duration > 1 ? 'e' : ''})${event.customer_name ? ', Kunde: ' + event.customer_name + (event.customer_company ? ' (' + event.customer_company + ')' : '') : ''}, ${event.time}`;
      return `
        <div class="event-band ${colorClass}" data-id="${event.id}" style="top: ${topPosition}px;" onmousemove="showTooltip(event, '${tooltipContent}')" onmouseout="hideTooltip()">
          <div class="event-details ${isFirstDay ? '' : 'hidden'}">
            <p class="font-bold">${event.title}</p>
          </div>
        </div>`;
    }

    function showTooltip(e, content) {
      globalTooltip.textContent = content;
      globalTooltip.style.display = 'block';
      globalTooltip.style.left = `${e.clientX + 10}px`;
      globalTooltip.style.top = `${e.clientY + 10}px`;
    }

    function hideTooltip() {
      globalTooltip.style.display = 'none';
    }

    async function fetchEvents() {
      try {
        const response = await fetch('/CRM/get_events.php', {
          method: 'GET',
          headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json'
          },
          credentials: 'same-origin' // Session-Cookies senden
        });
        if (!response.ok) {
          console.error('HTTP-Fehler:', response.status, response.statusText);
          const text = await response.text();
          console.error('Serverantwort:', text);
          return;
        }
        const result = await response.json();
        if (result.success) {
          events = result.events || [];
          console.log('Termine geladen:', events.length);
        } else {
          console.error('Fehler beim Abrufen der Termine:', result.error);
        }
      } catch (error) {
        console.error('Netzwerkfehler beim Abrufen der Termine:', error.message);
      }
    }

    // Debugging: Testaufruf für get_event.php mit einer bekannten ID
    (async () => {
      const testId = '1'; // Ersetze mit einer gültigen Termin-ID aus der Datenbank
      const response = await fetch(`/CRM/get_event.php?id=${testId}`);
      const text = await response.text();
      console.log('Testaufruf get_event.php:', text);
    })();

    function assignEventLevels(events, dateRange) {
      const eventPositions = {};
      const levelsPerDay = dateRange.map(() => []); // Verfolgt belegte Ebenen pro Tag

      events.forEach(event => {
        if (!event.id) return; // Überspringe ungültige Termine
        const eventDates = event.end_date ? getDatesBetween(event.date, event.end_date) : [event.date];
        const startIndex = dateRange.findIndex(date => eventDates.includes(date));
        if (startIndex === -1) return; // Termin außerhalb des Bereichs

        let level = 0; // Starte auf oberster Ebene
        while (true) {
          let isFree = true;
          for (let i = startIndex; i < dateRange.length && eventDates.includes(dateRange[i]); i++) {
            if (levelsPerDay[i].includes(level)) {
              isFree = false;
              break;
            }
          }
          if (isFree) {
            for (let i = startIndex; i < dateRange.length && eventDates.includes(dateRange[i]); i++) {
              levelsPerDay[i].push(level);
            }
            eventPositions[event.id] = 5 + (level * 30);
            break;
          }
          level++;
        }
      });

      return eventPositions;
    }

    function renderMonth(monthDate) {
      const month = monthDate.getMonth();
      const year = monthDate.getFullYear();
      const monthName = monthDate.toLocaleString('de-DE', {
        month: 'long'
      });
      const daysInMonth = new Date(year, month + 1, 0).getDate();
      const firstDay = new Date(year, month, 1).getDay() || 7;

      const monthDiv = document.createElement('div');
      monthDiv.className = 'month-section';
      monthDiv.dataset.month = `${year}-${month + 1}`;
      monthDiv.innerHTML = `<div class="month-title">${monthName} ${year}</div>`;

      const daysGrid = document.createElement('div');
      daysGrid.className = 'month-grid';

      ['Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa', 'So'].forEach(day => {
        daysGrid.innerHTML += `<div class="day-header">${day}</div>`;
      });

      for (let i = 1; i < firstDay; i++) {
        daysGrid.innerHTML += `<div></div>`;
      }

      const dateRange = [];
      for (let day = 1; day <= daysInMonth; day++) {
        dateRange.push(`${year}-${String(month + 1).padStart(2, '0')}-${String(day).padStart(2, '0')}`);
      }

      const monthEvents = events.filter(e => {
        if (!e.date) return false;
        const eventDates = e.end_date ? getDatesBetween(e.date, e.end_date) : [e.date];
        return eventDates.some(date => dateRange.includes(date));
      });

      const eventPositions = assignEventLevels(monthEvents, dateRange);

      let maxEventsPerDay = 0;
      dateRange.forEach(dateStr => {
        const eventCount = events.filter(e => {
          if (!e.date) return false;
          const eventDates = e.end_date ? getDatesBetween(e.date, e.end_date) : [e.date];
          return eventDates.includes(dateStr);
        }).length;
        if (eventCount > maxEventsPerDay) {
          maxEventsPerDay = eventCount;
        }
      });
      const baseHeight = 120;
      const eventHeight = 30;
      const minHeight = baseHeight + (maxEventsPerDay * eventHeight);

      for (let day = 1; day <= daysInMonth; day++) {
        const dateStr = `${year}-${String(month + 1).padStart(2, '0')}-${String(day).padStart(2, '0')}`;
        let eventHtml = '';

        const dayEvents = events.filter(e => {
          if (!e.date) return false;
          const eventDates = e.end_date ? getDatesBetween(e.date, e.end_date) : [e.date];
          return eventDates.includes(dateStr);
        });

        dayEvents.forEach(event => {
          const eventDates = event.end_date ? getDatesBetween(event.date, event.end_date) : [event.date];
          const firstDayInMonth = eventDates.find(d => {
            const eventDate = new Date(d);
            return eventDate.getMonth() === month && eventDate.getFullYear() === year;
          });
          const firstDayNum = firstDayInMonth ? new Date(firstDayInMonth).getDate() : day;
          const isFirstDay = day === firstDayNum;
          const topPosition = eventPositions[event.id] || 5;
          eventHtml += renderEventBand(event, isFirstDay, topPosition);
        });

        daysGrid.innerHTML += `
      <div class="p-2" style="min-height: ${minHeight}px;">
        <div class="day-number">${day}</div>
        <div class="mt-1">${eventHtml}</div>
      </div>`;
      }

      monthDiv.appendChild(daysGrid);
      return monthDiv;
    }

    function renderMonthView(scrollToCurrent = false) {
      monthView.style.display = 'block';
      weekView.style.display = 'none';
      dayView.style.display = 'none';

      monthContainer.innerHTML = '';
      displayedMonths = [];

      const startDate = new Date(currentDate);
      startDate.setFullYear(currentDate.getFullYear() - 1);
      startDate.setMonth(currentDate.getMonth());

      const endDate = new Date(currentDate);
      endDate.setFullYear(currentDate.getFullYear() + 1);
      endDate.setMonth(currentDate.getMonth());

      let currentMonth = new Date(startDate);
      while (currentMonth <= endDate) {
        const monthDiv = renderMonth(currentMonth);
        monthContainer.appendChild(monthDiv);
        displayedMonths.push(`${currentMonth.getFullYear()}-${currentMonth.getMonth() + 1}`);
        currentMonth.setMonth(currentMonth.getMonth() + 1);
      }

      monthTitle.textContent = currentDate.toLocaleString('de-DE', {
        month: 'long',
        year: 'numeric'
      });

      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            const monthDiv = entry.target;
            const [year, month] = monthDiv.dataset.month.split('-').map(Number);
            const firstMonth = displayedMonths[0].split('-').map(Number);
            const lastMonth = displayedMonths[displayedMonths.length - 1].split('-').map(Number);

            if (month === firstMonth[1] && year === firstMonth[0]) {
              const prevMonth = new Date(year, month - 1, 1);
              if (prevMonth >= new Date(currentDate.getFullYear() - 1, currentDate.getMonth(), 1)) {
                const newMonthDiv = renderMonth(prevMonth);
                monthContainer.prepend(newMonthDiv);
                displayedMonths.unshift(`${prevMonth.getFullYear()}-${prevMonth.getMonth() + 1}`);
                if (displayedMonths.length > 36) {
                  monthContainer.removeChild(monthContainer.lastChild);
                  displayedMonths.pop();
                }
              }
            } else if (month === lastMonth[1] && year === lastMonth[0]) {
              const nextMonth = new Date(year, month + 1, 1);
              if (nextMonth <= new Date(currentDate.getFullYear() + 1, currentDate.getMonth(), 1)) {
                const newMonthDiv = renderMonth(nextMonth);
                monthContainer.appendChild(newMonthDiv);
                displayedMonths.push(`${nextMonth.getFullYear()}-${nextMonth.getMonth() + 1}`);
                if (displayedMonths.length > 36) {
                  monthContainer.removeChild(monthContainer.firstChild);
                  displayedMonths.shift();
                }
              }
            }
          }
        });
      }, {
        threshold: 0.1
      });

      monthContainer.querySelectorAll('div[data-month]').forEach(div => observer.observe(div));

      if (scrollToCurrent) {
        const currentMonthStr = `${today.getFullYear()}-${today.getMonth() + 1}`;
        const currentMonthElement = monthContainer.querySelector(`div[data-month="${currentMonthStr}"]`);
        if (currentMonthElement) {
          currentMonthElement.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      }
    }

    function renderWeek(weekStart) {
      const startOfWeek = new Date(weekStart);
      startOfWeek.setDate(weekStart.getDate() - (weekStart.getDay() || 7) + 1);
      const endOfWeek = new Date(startOfWeek);
      endOfWeek.setDate(startOfWeek.getDate() + 6);

      const monthName = startOfWeek.toLocaleString('de-DE', {
        month: 'long'
      });
      const weekNumber = getWeekNumber(startOfWeek);
      const weekTitle = `${monthName} KW${weekNumber}`;

      const weekDiv = document.createElement('div');
      weekDiv.className = 'week-section';
      weekDiv.dataset.weekStart = startOfWeek.toISOString().split('T')[0];
      weekDiv.innerHTML = `<div class="week-title">${weekTitle}</div>`;

      const daysGrid = document.createElement('div');
      daysGrid.className = 'month-grid';

      ['Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa', 'So'].forEach(day => {
        daysGrid.innerHTML += `<div class="day-header">${day}</div>`;
      });

      const weekDates = [];
      for (let i = 0; i < 7; i++) {
        const day = new Date(startOfWeek);
        day.setDate(startOfWeek.getDate() + i);
        weekDates.push(day.toISOString().split('T')[0]);
      }

      const weekEvents = events.filter(e => {
        if (!e.date) return false;
        const eventDates = e.end_date ? getDatesBetween(e.date, e.end_date) : [e.date];
        return eventDates.some(date => weekDates.includes(date));
      });

      const eventPositions = assignEventLevels(weekEvents, weekDates);

      let maxEventsPerDay = 0;
      weekDates.forEach(dateStr => {
        const eventCount = events.filter(e => {
          if (!e.date) return false;
          const eventDates = e.end_date ? getDatesBetween(e.date, e.end_date) : [e.date];
          return eventDates.includes(dateStr);
        }).length;
        if (eventCount > maxEventsPerDay) {
          maxEventsPerDay = eventCount;
        }
      });
      const baseHeight = 120;
      const eventHeight = 30;
      const minHeight = baseHeight + (maxEventsPerDay * eventHeight);

      for (let i = 0; i < 7; i++) {
        const dateStr = weekDates[i];
        const dayEvents = events.filter(e => {
          if (!e.date) return false;
          const eventDates = e.end_date ? getDatesBetween(e.date, e.end_date) : [e.date];
          return eventDates.includes(dateStr);
        });

        let eventBands = '';
        dayEvents.forEach(event => {
          const eventDates = event.end_date ? getDatesBetween(event.date, event.end_date) : [event.date];
          const firstDayInWeek = eventDates.find(d => weekDates.includes(d));
          const firstDayNum = firstDayInWeek ? new Date(firstDayInWeek).getDate() : new Date(dateStr).getDate();
          const isFirstDay = new Date(dateStr).getDate() === firstDayNum;
          const topPosition = eventPositions[event.id] || 5;
          eventBands += renderEventBand(event, isFirstDay, topPosition);
        });

        daysGrid.innerHTML += `
      <div style="border: 1px solid #d1d5db; padding: 8px; min-height: ${minHeight}px;">
        <div class="day-number">${new Date(dateStr).getDate()}</div>
        <div style="margin-top: 4px;">${eventBands}</div>
      </div>`;
      }

      weekDiv.appendChild(daysGrid);
      return weekDiv;
    }

    function renderWeekView(scrollToCurrent = false) {
      weekView.style.display = 'block';
      monthView.style.display = 'none';
      dayView.style.display = 'none';

      weekContainer.innerHTML = '';
      displayedWeeks = [];

      const startDate = new Date(currentDate);
      startDate.setFullYear(currentDate.getFullYear() - 1);
      startDate.setDate(currentDate.getDate() - (currentDate.getDay() || 7) + 1);

      const endDate = new Date(currentDate);
      endDate.setFullYear(currentDate.getFullYear() + 1);
      endDate.setDate(currentDate.getDate() - (currentDate.getDay() || 7) + 1);

      let currentWeek = new Date(startDate);
      while (currentWeek <= endDate) {
        const weekDiv = renderWeek(currentWeek);
        weekContainer.appendChild(weekDiv);
        displayedWeeks.push(currentWeek.toISOString().split('T')[0]);
        currentWeek.setDate(currentWeek.getDate() + 7);
      }

      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            const weekDiv = entry.target;
            const weekStart = new Date(weekDiv.dataset.weekStart);
            const firstWeek = new Date(displayedWeeks[0]);
            const lastWeek = new Date(displayedWeeks[displayedWeeks.length - 1]);

            if (weekStart <= firstWeek) {
              const prevWeek = new Date(weekStart);
              prevWeek.setDate(weekStart.getDate() - 7);
              if (prevWeek >= new Date(currentDate.getFullYear() - 1, currentDate.getMonth(), currentDate.getDate())) {
                const newWeekDiv = renderWeek(prevWeek);
                weekContainer.prepend(newWeekDiv);
                displayedWeeks.unshift(prevWeek.toISOString().split('T')[0]);
                if (displayedWeeks.length > 104) {
                  weekContainer.removeChild(weekContainer.lastChild);
                  displayedWeeks.pop();
                }
              }
            } else if (weekStart >= lastWeek) {
              const nextWeek = new Date(weekStart);
              nextWeek.setDate(weekStart.getDate() + 7);
              if (nextWeek <= new Date(currentDate.getFullYear() + 1, currentDate.getMonth(), currentDate.getDate())) {
                const newWeekDiv = renderWeek(nextWeek);
                weekContainer.appendChild(newWeekDiv);
                displayedWeeks.push(nextWeek.toISOString().split('T')[0]);
                if (displayedWeeks.length > 104) {
                  monthContainer.removeChild(monthContainer.firstChild);
                  displayedWeeks.shift();
                }
              }
            }
          }
        });
      }, {
        threshold: 0.1
      });

      weekContainer.querySelectorAll('div[data-week-start]').forEach(div => observer.observe(div));

      if (scrollToCurrent) {
        const currentWeekStart = new Date(today);
        currentWeekStart.setDate(today.getDate() - (today.getDay() || 7) + 1);
        const currentWeekElement = weekContainer.querySelector(`div[data-week-start="${currentWeekStart.toISOString().split('T')[0]}"]`);
        if (currentWeekElement) {
          currentWeekElement.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      }
    }

    function renderDayView() {
      dayView.style.display = 'block';
      monthView.style.display = 'none';
      weekView.style.display = 'none';

      dayTitle.textContent = currentDate.toLocaleDateString('de-DE');
      const dateStr = currentDate.toISOString().split('T')[0];
      const dayEvents = events.filter(e => {
        if (e.end_date) {
          const eventDates = getDatesBetween(e.date, e.end_date);
          return eventDates.includes(dateStr);
        }
        return e.date === dateStr;
      });

      dayHours.innerHTML = '';

      for (let hour = 8; hour <= 20; hour++) {
        const hourStart = `${String(hour).padStart(2, '0')}:00`;
        const hourEnd = `${String(hour + 1).padStart(2, '0')}:00`;
        const hourEvents = dayEvents.filter(e => {
          const eventTime = e.time;
          const eventHour = parseInt(eventTime.split(':')[0], 10);
          return eventHour === hour;
        });

        let eventBands = '';
        const eventPositions = {};
        hourEvents.forEach((event, index) => {
          eventPositions[event.id] = 5 + (index * 30);
        });

        hourEvents.forEach(event => {
          const topPosition = eventPositions[event.id] || 5;
          eventBands += renderEventBand(event, true, topPosition);
        });

        const baseHeight = 120;
        const eventHeight = 30;
        const minHeight = baseHeight + (hourEvents.length * eventHeight);

        dayHours.innerHTML += `
          <div style="display: flex; border-bottom: 1px solid #d1d5db; min-height: ${minHeight}px;">
            <div style="width: 60px; padding: 8px; font-weight: bold;">${hourStart}</div>
            <div style="flex: 1; padding: 8px;">${eventBands}</div>
          </div>`;
      }
    }

    viewSelect.addEventListener('change', () => {
      const view = viewSelect.value;
      if (view === 'month') {
        renderMonthView(true);
      } else if (view === 'week') {
        renderWeekView(true);
      } else if (view === 'day') {
        renderDayView();
      }
    });

    datePicker.addEventListener('change', () => {
      currentDate = new Date(datePicker.value);
      const view = viewSelect.value;
      if (view === 'month') {
        renderMonthView(true);
      } else if (view === 'week') {
        renderWeekView(true);
      } else if (view === 'day') {
        renderDayView();
      }
    });

    prevMonthBtn.addEventListener('click', () => {
      currentDate.setMonth(currentDate.getMonth() - 1);
      datePicker.value = currentDate.toISOString().split('T')[0];
      renderMonthView();
    });

    nextMonthBtn.addEventListener('click', () => {
      currentDate.setMonth(currentDate.getMonth() + 1);
      datePicker.value = currentDate.toISOString().split('T')[0];
      renderMonthView();
    });

    document.addEventListener('click', (e) => {
      const band = e.target.closest('.event-band');
      if (band) {
        const id = band.dataset.id;
        console.log('Klick auf Termin mit ID:', id, 'Element:', band); // Debugging
        if (id && !isNaN(id)) {
          fetchEventDetails(id);
        } else {
          console.error('Ungültige oder fehlende Termin-ID:', id);
          showToast('Fehler: Ungültige Termin-ID');
        }
      }
    });

    // Beim Laden direkt die Wochenansicht anzeigen
    (async () => {
      renderWeekView(true); // Sofort mit PHP-Daten rendern
      await fetchEvents(); // Termine im Hintergrund aktualisieren
      if (events.length > 0) {
        renderWeekView(true); // Bei erfolgreichem Fetch neu rendern
      }
    })();

    function showToast(message) {
      const toast = document.getElementById('toast');
      toast.textContent = message;
      toast.style.display = 'block';
      setTimeout(() => {
        toast.style.display = 'none';
      }, 2000);
    }

    const addModal = document.getElementById('addEventModal');
    const addBtn = document.getElementById('addEventBtn');
    const closeAddBtn = document.getElementById('closeAddModalBtn');
    const cancelAddBtn = document.getElementById('cancelAddBtn');

    const editModal = document.getElementById('editEventModal');
    const closeEditBtn = document.getElementById('closeEditBtn');
    const closeEditModalBtn = document.getElementById('closeEditModalBtn');
    const editBtn = document.getElementById('editBtn');
    const saveEditBtn = document.getElementById('saveEditBtn');
    const deleteBtn = document.getElementById('deleteBtn');

    const deleteConfirmModal = document.getElementById('deleteConfirmModal');
    const confirmDeleteBtn = document.getElementById('confirmDeleteBtn');
    const cancelDeleteBtn = document.getElementById('cancelDeleteBtn');

    const customerSearchAdd = document.getElementById('customerSearchAdd');
    const customerSuggestionsAdd = document.getElementById('customerSuggestionsAdd');
    const customerIdAdd = document.getElementById('customerIdAdd');
    const originalOptionsAdd = Array.from(customerSuggestionsAdd.querySelectorAll('option'));

    const customerSearchEdit = document.getElementById('customerSearchEdit');
    const customerSuggestionsEdit = document.getElementById('customerSuggestionsEdit');
    const customerIdEdit = document.getElementById('customerIdEdit');
    const originalOptionsEdit = Array.from(customerSuggestionsEdit.querySelectorAll('option'));

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

    const filterCustomerSuggestionsAdd = debounce(() => {
      const searchTerm = customerSearchAdd.value.trim().toLowerCase();
      customerSuggestionsAdd.innerHTML = '';

      const filteredOptions = originalOptionsAdd.filter(option => {
        return option.value.toLowerCase().includes(searchTerm);
      }).slice(0, 10);

      filteredOptions.forEach(option => {
        const newOption = document.createElement('option');
        newOption.value = option.value;
        newOption.setAttribute('data-id', option.getAttribute('data-id'));
        customerSuggestionsAdd.appendChild(newOption);
      });
    }, 300);

    customerSearchAdd.addEventListener('input', filterCustomerSuggestionsAdd);

    customerSearchAdd.addEventListener('change', () => {
      const selectedOption = Array.from(customerSuggestionsAdd.querySelectorAll('option')).find(
        option => option.value === customerSearchAdd.value
      );
      customerIdAdd.value = selectedOption ? selectedOption.getAttribute('data-id') || '' : '';
    });

    const filterCustomerSuggestionsEdit = debounce(() => {
      const searchTerm = customerSearchEdit.value.trim().toLowerCase();
      customerSuggestionsEdit.innerHTML = '';

      const filteredOptions = originalOptionsEdit.filter(option => {
        return option.value.toLowerCase().includes(searchTerm);
      }).slice(0, 10);

      filteredOptions.forEach(option => {
        const newOption = document.createElement('option');
        newOption.value = option.value;
        newOption.setAttribute('data-id', option.getAttribute('data-id'));
        customerSuggestionsEdit.appendChild(newOption);
      });
    }, 300);

    customerSearchEdit.addEventListener('input', filterCustomerSuggestionsEdit);

    customerSearchEdit.addEventListener('change', () => {
      const selectedOption = Array.from(customerSuggestionsEdit.querySelectorAll('option')).find(
        option => option.value === customerSearchEdit.value
      );
      customerIdEdit.value = selectedOption ? selectedOption.getAttribute('data-id') || '' : '';
    });

    addBtn.addEventListener('click', () => {
      addModal.style.display = 'flex';
      const addForm = document.getElementById('addEventForm');
      addForm.querySelector('[name="date"]').value = datePicker.value;
    });

    closeAddBtn.addEventListener('click', () => {
      addModal.style.display = 'none';
      document.getElementById('addEventForm').reset();
    });

    cancelAddBtn.addEventListener('click', () => {
      addModal.style.display = 'none';
      document.getElementById('addEventForm').reset();
    });

    async function fetchEventDetails(id) {
      try {
        if (!id) {
          console.error('Keine Termin-ID übergeben');
          showToast('Fehler: Keine Termin-ID verfügbar');
          return;
        }
        console.log('Aufruf von get_event.php mit ID:', id); // Debugging
        const response = await fetch(`/CRM/get_event.php?id=${id}`, {
          method: 'GET',
          headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json'
          },
          credentials: 'same-origin' // Session-Cookies senden
        });
        if (!response.ok) {
          console.error('HTTP-Fehler:', response.status, response.statusText);
          const text = await response.text();
          console.error('Serverantwort:', text);
          showToast('Fehler beim Abrufen der Termindetails: Serverfehler');
          return;
        }
        const event = await response.json();
        console.log('Antwort von get_event.php:', event); // Debugging
        if (event.success && event.data) {
          const form = document.getElementById('editEventForm');
          form.querySelector('[name="id"]').value = event.data.id || '';
          form.querySelector('[name="title"]').value = event.data.title || '';
          form.querySelector('[name="date"]').value = event.data.date || '';
          form.querySelector('[name="end_date"]').value = event.data.end_date || '';
          form.querySelector('[name="time"]').value = event.data.time || '';
          form.querySelector('[name="description"]').value = event.data.description || '';
          form.querySelector('[name="created_by"]').value = event.data.created_by || '';
          form.querySelector('[name="created_at"]').value = event.data.created_at || '';
          form.querySelector('[name="last_modified_by"]').value = event.data.last_modified_by || '';
          form.querySelector('[name="last_modified_at"]').value = event.data.last_modified_at || '';

          const customerDisplay = event.data.customer_name ?
            `${event.data.customer_name}${event.data.customer_company ? ' (' + event.data.customer_company + ')' : ''}` :
            '';
          customerSearchEdit.value = customerDisplay;
          customerIdEdit.value = event.data.customer_id || '';

          editModal.style.display = 'flex';
        } else {
          console.error('Fehlerhafte Antwort:', event);
          showToast(`Fehler: ${event.error || 'Ungültige Antwort vom Server'}`);
        }
      } catch (error) {
        console.error('Netzwerkfehler beim Abrufen der Termindetails:', error.message);
        showToast('Fehler beim Abrufen der Termindetails: Netzwerkfehler');
      }
    }

    closeEditBtn.addEventListener('click', () => {
      editModal.style.display = 'none';
      resetEditForm();
    });

    closeEditModalBtn.addEventListener('click', () => {
      editModal.style.display = 'none';
      resetEditForm();
    });

    editBtn.addEventListener('click', () => {
      const form = document.getElementById('editEventForm');
      form.querySelectorAll('input:not([name="id"]):not([name="created_by"]):not([name="created_at"]):not([name="last_modified_by"]):not([name="last_modified_at"])').forEach(input => {
        input.removeAttribute('readonly');
      });
      form.querySelector('textarea[name="description"]').removeAttribute('readonly');
      customerSearchEdit.removeAttribute('readonly');
      editBtn.style.display = 'none';
      saveEditBtn.style.display = 'block';
      editModal.style.display = 'flex';
    });

    deleteBtn.addEventListener('click', () => {
      deleteConfirmModal.style.display = 'flex';
    });

    cancelDeleteBtn.addEventListener('click', () => {
      deleteConfirmModal.style.display = 'none';
    });

    confirmDeleteBtn.addEventListener('click', async () => {
      const eventId = document.getElementById('editEventForm').querySelector('[name="id"]').value;
      try {
        const response = await fetch('/CRM/delete_event.php', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json'
          },
          body: JSON.stringify({
            id: eventId
          })
        });
        const result = await response.json();

        if (result.success) {
          deleteConfirmModal.style.display = 'none';
          editModal.style.display = 'none';
          showToast('Termin erfolgreich gelöscht!');
          await fetchEvents(); // Termine dynamisch aktualisieren
          const view = viewSelect.value;
          if (view === 'month') {
            renderMonthView(true);
          } else if (view === 'week') {
            renderWeekView(true);
          } else if (view === 'day') {
            renderDayView();
          }
        } else {
          alert('Fehler beim Löschen: ' + result.error);
        }
      } catch (error) {
        alert('Fehler beim Löschen: ' + error.message);
      }
    });

    document.getElementById('addEventForm').addEventListener('submit', async (e) => {
      e.preventDefault();
      const formData = new FormData(e.target);

      try {
        const response = await fetch('/CRM/save_event.php', {
          method: 'POST',
          body: formData
        });
        const result = await response.json();

        if (result.success) {
          addModal.style.display = 'none';
          e.target.reset();
          showToast('Termin erfolgreich hinzugefügt!');
          await fetchEvents(); // Termine dynamisch aktualisieren
          const view = viewSelect.value;
          if (view === 'month') {
            renderMonthView(true);
          } else if (view === 'week') {
            renderWeekView(true);
          } else if (view === 'day') {
            renderDayView();
          }
        } else {
          alert('Fehler: ' + result.error);
        }
      } catch (error) {
        alert('Fehler beim Speichern: ' + error.message);
      }
    });

    document.getElementById('editEventForm').addEventListener('submit', async (e) => {
      e.preventDefault();
      const formData = new FormData(e.target);

      try {
        const response = await fetch('/CRM/update_event.php', {
          method: 'POST',
          body: formData
        });
        const result = await response.json();

        if (result.success) {
          editModal.style.display = 'none';
          resetEditForm();
          showToast('Termin erfolgreich aktualisiert!');
          await fetchEvents(); // Termine dynamisch aktualisieren
          const view = viewSelect.value;
          if (view === 'month') {
            renderMonthView(true);
          } else if (view === 'week') {
            renderWeekView(true);
          } else if (view === 'day') {
            renderDayView();
          }
        } else {
          alert('Fehler: ' + result.error);
        }
      } catch (error) {
        alert('Fehler beim Aktualisieren: ' + error.message);
      }
    });

    function resetEditForm() {
      const form = document.getElementById('editEventForm');
      form.querySelectorAll('input:not([name="id"]):not([name="created_by"]):not([name="created_at"]):not([name="last_modified_by"]):not([name="last_modified_at"])').forEach(input => {
        input.setAttribute('readonly', true);
      });
      form.querySelector('textarea[name="description"]').setAttribute('readonly', true);
      customerSearchEdit.setAttribute('readonly', true);
      editBtn.style.display = 'block';
      saveEditBtn.style.display = 'none';
    }

    document.addEventListener('keydown', (e) => {
      if (e.ctrlKey && e.key === 's') {
        e.preventDefault();
        if (addModal.style.display === 'flex') {
          document.getElementById('addEventForm').dispatchEvent(new Event('submit'));
        }
        if (editModal.style.display === 'flex') {
          document.getElementById('editEventForm').dispatchEvent(new Event('submit'));
        }
      }
    });

    // Service Worker registrieren
    /* if ('serviceWorker' in navigator) {
      window.addEventListener('load', () => {
        navigator.serviceWorker.register('/CRM/sw.js').then(registration => {
          console.log('Service Worker registriert:', registration);
        }).catch(error => {
          console.error('Fehler bei der Registrierung des Service Workers:', error);
        });
      });
    } */
  </script>
</body>

</html>