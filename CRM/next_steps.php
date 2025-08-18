<?php
require_once 'session_config.php';
session_start();
require_once 'auth.php';
require_once 'db_connect.php';
require_once 'config.php';
require_once 'send_next_step_notifications.php'; // Sende Benachrichtigungen

// Hole Termine für Kalender
$stmt = $db->prepare("
    SELECT ns.id, ns.customer_id, ns.description, ns.due_date, ns.created_by, ns.notified_users, c.company
    FROM next_steps ns
    JOIN customers c ON ns.customer_id = c.id
    WHERE ns.due_date IS NOT NULL
");
$stmt->execute();
$events = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Farben für Benutzer
$creator_colors = [
    'Alexander Alexandrov' => '#1E90FF', // Blau
    'Robert Kutschke' => '#228B22',      // Grün
    'Eugen Schütz' => '#FF4500'          // Orange
];

// Events für JavaScript vorbereiten
$calendar_events = [];
foreach ($events as $event) {
    $notified_users = json_decode($event['notified_users'] ?? '[]', true);
    $color_user = !empty($notified_users) ? $notified_users[0] : $event['created_by'];
    $calendar_events[] = [
        'id' => htmlspecialchars($event['id']),
        'title' => htmlspecialchars($event['company'] . ': ' . substr($event['description'], 0, 20) . '...'),
        'start' => htmlspecialchars($event['due_date']),
        'extendedProps' => [
            'description' => htmlspecialchars($event['description'])
        ],
        'backgroundColor' => htmlspecialchars($creator_colors[$color_user] ?? '#808080'),
        'borderColor' => htmlspecialchars($creator_colors[$color_user] ?? '#808080'),
        'textColor' => '#FFFFFF'
    ];
}
?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#3b82f6">
    <title>CRM AS EXport - Next Steps</title>
    <link rel="manifest" href="/CRM/manifest.json">
    <!--     <script src="https://cdn.tailwindcss.com"></script>-->
    <link rel="stylesheet" href="/CRM/assets/css/output.css">
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
</head>

<body class="bg-gray-100 font-sans">
    <div class="flex flex-col md:flex-row min-h-screen">
        <!-- Seitenleiste -->
        <div id="sidebar" class="w-full md:w-64 bg-white shadow-md fixed md:static top-0 left-0 h-full md:h-auto z-20 transform -translate-x-full md:translate-x-0 transition-transform duration-300">
            <div class="p-4">
                <img src="/CRM/assets/logo.png" alt="Logo" class="h-10 md:h-12">
            </div>
            <nav class="mt-4">
                <a href="/CRM/index.php" class="block p-4 text-gray-600 hover:bg-gray-100">Customers</a>
                <a href="/CRM/offers.php" class="block p-4 text-gray-600 hover:bg-gray-100">Offers</a>
                <a href="/CRM/manufacturer.php" class="block p-4 text-gray-600 hover:bg-gray-100">Manufact</a>
                <a href="/CRM/calendar.php" class="block p-4 text-gray-600 hover:bg-gray-100">Calendar</a>
                <a href="/CRM/next_steps.php" class="block p-4 text-blue-600 bg-blue-100">Next Steps</a>
                <a href="#" class="block p-4 text-gray-600 hover:bg-gray-100">Overdue Warning</a>
                <a href="/CRM/about.php" class="block p-4 text-gray-600 hover:bg-gray-100">About</a>
                <a href="#" class="block p-4 text-gray-600 hover:bg-gray-100">App Gallery</a>
                <a href="/CRM/logout.php" class="block p-4 text-red-600 hover:bg-gray-100">Logout</a>
            </nav>
        </div>

        <!-- Hamburger-Menü-Button -->
        <button id="menuBtn" class="md:hidden p-4 fixed top-0 left-0 z-30">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>

        <!-- Hauptbereich -->
        <div class="flex-1 p-4 md:p-6 mt-16 md:mt-0">
            <h1 class="text-xl font-bold mb-4">Next Steps</h1>
            <div id="calendar" class="bg-white p-4 shadow rounded"></div>
        </div>
    </div>

    <script>
        // Hamburger-Menü
        const menuBtn = document.getElementById('menuBtn');
        const sidebar = document.getElementById('sidebar');
        menuBtn.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full');
        });

        // FullCalendar initialisieren
        document.addEventListener('DOMContentLoaded', function() {
            const calendarEl = document.getElementById('calendar');
            const calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',

                events: <?php echo json_encode($calendar_events); ?>,
                eventClick: function(info) {
                    alert(
                        'Kunde: ' + info.event.title +
                        '\nBeschreibung: ' + info.event.extendedProps.description +
                        '\nFällig: ' + info.event.start.toLocaleString()
                    );
                }
            });
            calendar.render();
        });
    </script>
</body>

</html>