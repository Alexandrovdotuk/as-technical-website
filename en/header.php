<?php
// /en/header.php
error_log("en/header.php - Geladen aus: " . __FILE__);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>

    <!-- Swiper -->
    <link rel="icon" type="image/vnd.microsoft.icon" href="../assets/logo.ico" alt="Logo AS Technical Solutions">
    <link rel="manifest" href="../manifest.json">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="../swiperpic.css" />


    <!-- Hreflang Tags -->
    <link rel="alternate" hreflang="de" href="https://as-technical.de/<?php echo basename($_SERVER['PHP_SELF']); ?>" />
    <link rel="alternate" hreflang="en"
        href="https://as-technical.de/en/<?php echo basename($_SERVER['PHP_SELF']); ?>" />

    <!-- Canvas für den Sternenhintergrund -->
    <canvas id="starfield"></canvas>

    <script src="../stars.js"></script>

    <style>
        #starfield {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: black;
            z-index: -1;
        }
    </style>

    <!-- Matomo Tracking-Code -->
    <script>
        function setCookie(name, value, days) {
            var expires = "";
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                expires = "; expires=" + date.toUTCString();
            }
            document.cookie = name + "=" + (value || "") + expires + "; path=/";
        }

        function getCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) === ' ') c = c.substring(1, c.length);
                if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
            }
            return null;
        }

        var _paq = window._paq = window._paq || [];
        _paq.push(['disableCookies']);
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);

        (function () {
            var u = "//as-technical.de/matomo/";
            _paq.push(['setTrackerUrl', u + 'matomo.php']);
            _paq.push(['setSiteId', '1']);
            var d = document,
                g = d.createElement('script'),
                s = d.getElementsByTagName('script')[0];
            g.async = true;
            g.src = u + 'matomo.js';
            s.parentNode.insertBefore(g, s);
        })();

        document.addEventListener('DOMContentLoaded', function () {
            var banner = document.getElementById("cookie-banner");
            var consentCookie = getCookie("matomoConsent");

            if (consentCookie) {
                banner.style.display = "none";
            } else {
                banner.style.display = "block";
            }

            document.getElementById("accept-btn").addEventListener("click", function () {
                setCookie("matomoConsent", "accepted", 365);
                banner.style.display = "none";
            });

            document.getElementById("decline-btn").addEventListener("click", function () {
                setCookie("matomoConsent", "declined", 365);
                banner.style.display = "none";
            });

            document.getElementById("cookie-settings-btn").addEventListener("click", function () {
                banner.style.display = "block";
            });
        });
    </script>
    <noscript>
        <p>
            <img referrerpolicy="no-referrer-when-downgrade" src="//as-technical.de/matomo/matomo.php?idsite=1&rec=1"
                style="border:0;" alt="" />
        </p>
    </noscript>

</head>

<body>
    <header id="header">
        <nav class="navbar">
            <a href="index.php"><img class="nav-logo" src="../assets/logo.png" alt="Logo"></a>
            <ul class="nav-menu">
                <div class="nav-menu-items">
                    <li class="nav-item dropdown">
                        <a class="nav-link-dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Downloads
                        </a>
                        <ul class="dropdown-menu product-dropdown">
                            <li><a class="dropdown-item" href="downloads.php">Catalog</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link-dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Products
                        </a>
                        <ul class="dropdown-menu product-dropdown">
                            <li><a class="dropdown-item" href="smoking-systems.php">Smoking Systems</a></li>
                            <li><a class="dropdown-item" href="cooking-kettles.php">Cooking Kettles</a></li>
                            <li><a class="dropdown-item" href="slicers.php">Slicers</a></li>
                            <li><a class="dropdown-item" href="mincers.php">Mincers</a></li>
                            <li><a class="dropdown-item" href="cutters.php">Cutters</a></li>
                            <li><a class="dropdown-item" href="bandsaws.php">Bandsaws</a></li>
                            <li><a class="dropdown-item" href="brine-injectors.php">Brine Injectors</a></li>
                            <li><a class="dropdown-item" href="fine-food-mixers.php">Fine Food Mixers</a></li>
                            <li><a class="dropdown-item" href="dicing-machines.php">Dicing Machines</a></li>
                            <li><a class="dropdown-item" href="derinding-machines.php">Derinding Machines</a></li>
                            
                            <li><a class="dropdown-item" href="casing-sealer.php">Casing Welding Machine</a></li>
                            <li><a class="dropdown-item" href="cooling-systems.php">Cooling Systems</a></li>
                            <li><a class="dropdown-item" href="sausage-separators.php">Sausage Separators</a></li>
                            <li><a class="dropdown-item" href="washing-machines.php">Washing Machines</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link-dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Gastro
                        </a>
                        <ul class="dropdown-menu product-dropdown">
                            <li><a class="dropdown-item" href="convection-ovens.php">Combi Steamers</a></li>
                            <li><a class="dropdown-item"
                                    href="refrigeration-technology.php">Refrigeration-technology</a></li>

                            <li><a class="dropdown-item" href="packagingmachines.php">Packagingmachines</a></li>
                            <li><a class="dropdown-item" href="hygiene-technology.php">Hygiene-technology</a></li>

                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link-dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Used Machines
                        </a>
                        <ul class="dropdown-menu product-dropdown">
                            <!--<li><a class="dropdown-item" href="used-smokehouses.php">Smoking Units</a></li>-->
                            <li><a class="dropdown-item" href="used-derinders.php">Skinners</a></li>
                            <li><a class="dropdown-item" href="used-delicatessen_mixers.php">Fine Food Mixers</a></li>
                            <li><a class="dropdown-item" href="used-injectors.php">Brine Injectors</a></li>
                            <li><a class="dropdown-item" href="used-meat-grinders.php">Meat Grinders</a></li>

                        </ul>


                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link-dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Company
                        </a>
                        <ul class="dropdown-menu product-dropdown">
                            <li><a class="dropdown-item" href="our-services.php">Our Services</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link-dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Contact
                        </a>
                        <ul class="dropdown-menu product-dropdown">
                            <li><a class="dropdown-item" href="contact-form.php">Contact Form</a></li>
                        </ul>
                    </li>
                </div>
                <div class="scroll-hint">scroll down</div>

            </ul>

            <div class="hamburger">
                <span class="circle-menu-icon">
                    <span class="dot dot1"></span>
                    <span class="dot dot2"></span>
                    <span class="dot dot3"></span>
                </span>
            </div>
        </nav>
        <!-- Cookie-Banner -->
        <div id="cookie-banner">
            <p>
                We use cookies to track your interactions on our website. This helps us continuously improve our
                offerings and better tailor them to your needs. For more information, please see our <a
                    href="privacy-policy.php">Privacy Policy</a>.
            </p>
            <button id="accept-btn">
                Accept
            </button>
            <button id="decline-btn">
                Decline
            </button>
        </div>
        <!-- Button zum erneuten Öffnen des Cookie-Banners -->
        <button id="cookie-settings-btn">
            <p>Cookie</p>
        </button>
        <!-- Instagram-Button -->
        <div class="social-fixed">
            <a href="https://www.instagram.com/astechnicalsolution/" target="_blank" rel="noopener noreferrer"
                class="instagram-btn">
                <i class="fab fa-instagram"></i> Instagram
            </a>
        </div>
        <!-- Sprachumschalter -->
        <div class="language-switcher">
            <a href="/index.php">DE</a> | <a href="/en/index.php">EN</a>
        </div>
        <style>
            .language-switcher {
                position: fixed;
                top: 10px;
                right: 10px;
                z-index: 1000;
            }

            .language-switcher a {
                color: white;
                text-decoration: none;
                margin: 0 5px;
            }

            .language-switcher a:hover {
                color: #0073e6;
            }
        </style>
    </header>

    <style>
        /* Translate Style */
        #google_translate_element {
            background-color: rgb(0, 0, 0);
            margin-right: 5px !important;
        }

        #google_translate_element a {
            color: rgb(0, 0, 0) !important;
            background-color: black;
        }

        .goog-te-banner-frame {
            display: none !important;
        }

        .VIpgJd-ZVi9od-ORHb-OEVmcd {
            display: none !important;
        }

        body {
            top: 0 !important;
        }

        .VIpgJd-yAWNEb-hvhgNd {
            display: none !important;
        }

        .VIpgJd-yAWNEb-VIpgJd-fmcmS-sn54Q {
            background-color: transparent !important;
            box-shadow: none !important;
        }

        .VIpgJd-yAWNEb-L7lbkb {
            border: 0 !important;
        }

        .VIpgJd-ZVi9od-l4eHX-hSRGPd img {
            display: none !important;
        }

        span {
            margin-left: -65px;
        }

        /* Cookie-Button */
        #cookie-settings-btn {
            position: fixed;
            bottom: 10px;
            left: 10px;
            padding: 6px 10px;
            background: #0073e6;
            color: #fff;
            border: none;
            cursor: pointer;
            z-index: 3000;
            border-radius: 50px;
            transition: background 0.3s ease;
        }

        #cookie-settings-btn p {
            font-size: 10px;
        }

        #cookie-settings-btn:hover {
            background: #005bb5;
        }

        /* Cookie-Banner */
        #cookie-banner {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgb(0, 0, 0);
            color: white;
            padding: 20px;
            border-top: 1px solid #ccc;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            text-align: center;
        }

        #cookie-banner p {
            margin: 0 0 10px 0;
            font-size: 14px;
        }

        #cookie-banner a {
            color: #0073e6;
            text-decoration: underline;
        }

        #accept-btn,
        #decline-btn {
            padding: 8px 16px;
            border: none;
            cursor: pointer;
            border-radius: 50px;
            transition: background 0.3s ease;
            display: inline-block;
            margin: 0 10px;
        }

        #accept-btn {
            background: #0073e6;
            color: #fff;
        }

        #accept-btn:hover {
            background: #005bb5;
        }

        #decline-btn {
            background: #0073e6;
            color: #fff;
        }

        #decline-btn:hover {
            background: #005bb5;
        }

        /* INSTAGRAM BUTTON */
        .social-fixed {
            position: fixed;
            bottom: 10px;
            left: 70px;
            z-index: 100;
        }

        .instagram-btn {
            background: linear-gradient(45deg, #405DE6, #5851DB, #833AB4, #C13584, #E1306C, #FD1D1D, #F56040, #FCAF45);
            color: white;
            padding: 6px 12px;
            border-radius: 20px;
            text-decoration: none;
            font-size: 0.8em;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.3);
        }

        .instagram-btn i {
            margin-right: 6px;
            font-size: 0.9em;
        }

        .instagram-btn:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 12px rgba(0, 0, 0, 0.4);
        }

        /* Hamburger */
        .scroll-hint {
            display: none !important;
        }

        @media screen and (max-width: 1223px) {
            .social-fixed {
                left: 60px;
                padding-left: 5px;
            }

            .instagram-btn {
                font-size: 0.7em;
            }

            .instagram-btn i {
                margin-right: 5px;
                font-size: 0.8em;
            }
        }
    </style>

    <style>
        @media screen and (max-width: 1223px) {

            /* Hamburger Icon */
            .hamburger {
                display: block;
                position: fixed;
                right: -70px;
                top: 20px;
                width: 12px;
                height: 50px;
                cursor: pointer;
                z-index: 2000;
                transition: transform 0.3s ease;
                color: #079ae3;

            }

            .circle-menu-icon {
                position: relative;
                width: 100%;
                height: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                color: #079ae3;

            }

            .dot {
                position: absolute;
                width: 30px;
                height: 7px;
                background: #0073e6;
                border-radius: 50%;
                transition: all 0.4s ease;

            }

            .dot1 {
                top: 15px;
            }

            .dot2 {
                top: 22px;
            }

            .dot3 {
                top: 29px;
            }

            .hamburger.active .dot1 {
                transform: translate(0, 7px) rotate(45deg);
            }

            .hamburger.active .dot2 {
                opacity: 0;
            }

            .hamburger.active .dot3 {
                transform: translate(0, -7px) rotate(-45deg);
            }

            /* Nav Menu */
            .nav-menu {
                position: fixed;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%) scale(0);
                width: 90vw;
                max-width: 400px;
                height: 90vh;
                max-height: 500px;
                background: rgba(0, 0, 0, 0.95);
                border-radius: 50%;
                display: flex;
                flex-direction: column;
                justify-content: flex-start;
                align-items: center;
                transition: all 0.5s ease;
                z-index: 1000;
                opacity: 0;
                visibility: hidden;
                box-shadow: 0 0 30px rgba(49, 26, 226, 0.5);
                overflow: hidden;
            }

            .nav-menu.active {
                transform: translate(-50%, -50%) scale(1);
                opacity: 1;
                visibility: visible;
            }

            /* Container für die Menüpunkte */
            .nav-menu-items {
                width: 100%;
                max-height: 80%;
                overflow-y: auto;
                overflow-x: hidden;
                padding: 20px 0;
                padding-bottom: 40px;
                /* Platz für den Scroll-Hinweis */
                display: flex;
                flex-direction: column;
                align-items: center;
                -webkit-overflow-scrolling: touch;
            }

            /* Scroll-Hinweis */
            .scroll-hint {
                display: block !important;
                color: #0073e6;
                font-size: 0.8em;
                opacity: 0.8;
                text-align: center;
                padding: 10px 0;
                animation: scrollHint 1.5s infinite ease-in-out;
            }

            /* Animation für den Scroll-Hinweis */
            @keyframes scrollHint {

                0%,
                100% {
                    transform: translateY(0);
                    opacity: 0.8;
                }

                50% {
                    transform: translateY(5px);
                    opacity: 1;
                }
            }

            .nav-item {
                margin: 8px 0;
                opacity: 0;
                transform: translateY(20px);
                transition: all 0.3s ease;
            }

            .nav-menu.active .nav-item {
                opacity: 1;
                transform: translateY(0);
            }

            .nav-menu.active .nav-item:nth-child(1) {
                transition-delay: 0.1s;
            }

            .nav-menu.active .nav-item:nth-child(2) {
                transition-delay: 0.2s;
            }

            .nav-menu.active .nav-item:nth-child(3) {
                transition-delay: 0.3s;
            }

            .nav-menu.active .nav-item:nth-child(4) {
                transition-delay: 0.4s;
            }

            .nav-menu.active .nav-item:nth-child(5) {
                transition-delay: 0.5s;
            }

            .nav-menu.active .nav-item:nth-child(6) {
                transition-delay: 0.6s;
            }

            .nav-item.hidden {
                display: none;
            }

            .nav-link-dropdown-toggle {
                color: white;
                font-size: 1em;
                font-weight: 600;
                padding: 8px 15px;
                text-transform: uppercase;
                letter-spacing: 1px;
                position: relative;
                overflow: hidden;
                display: block;
                text-align: center;
            }

            @media (hover: hover) and (pointer: fine) {
                .nav-link-dropdown-toggle::after {
                    content: '';
                    position: absolute;
                    bottom: 0;
                    left: -100%;
                    width: 100%;
                    height: 2px;
                    background: #0073e6;
                    transition: all 0.3s ease;
                }

                .nav-link-dropdown-toggle:hover::after {
                    left: 0;
                }

                .dropdown-item:hover {
                    background: #0073e6;
                    transform: translateX(10px);
                }
            }

            .dropdown-menu {
                position: static;
                width: 100%;
                background: rgba(26, 37, 38, 0.85);
                border-radius: 15px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
                display: none;
                padding: 10px 0;
            }

            .dropdown-menu.active {
                display: block;
            }

            .dropdown-item {
                color: #66b0ff !important;
                padding: 6px 15px 6px 30px;
                font-size: 0.85em;
                font-weight: 400;
                transition: all 0.3s ease;
                display: block;
                text-align: center;
                position: relative;
            }


            .dropdown-item::before {
                content: '>';
                position: absolute;
                left: 15px;
                color: #0073e6;
                font-size: 0.8em;
            }

            .dropdown-back {
                color: #0073e6;
                font-size: 0.9em;
                padding: 8px 15px;
                text-align: center;
                cursor: pointer;
                display: none;
            }

            .dropdown-back.active {
                display: block;
            }

            .nav-menu-items::-webkit-scrollbar {
                width: 8px;
            }

            .nav-menu-items::-webkit-scrollbar-track {
                background: rgba(255, 255, 255, 0.1);
                border-radius: 10px;
            }

            .nav-menu-items::-webkit-scrollbar-thumb {
                background: #0073e6;
                border-radius: 10px;
            }

            .nav-menu-items::-webkit-scrollbar-thumb:hover {
                background: #005bb5;
            }
        }
    </style>

    <!-- HAMBURGER -->
    <script>
        const hamburger = document.querySelector(".hamburger");
        const navMenu = document.querySelector(".nav-menu");
        const disableScrollButton = document.getElementById('disableScrollButton');
        const scrollHint = document.querySelector('.scroll-hint');
        const navMenuItems = document.querySelector('.nav-menu-items');

        function toggleMenu() {
            hamburger.classList.toggle("active");
            navMenu.classList.toggle("active");

            if (navMenu.classList.contains("active")) {
                disableScroll();
                updateScrollHint(); // Prüfe Scrollbarkeit sofort
            } else {
                enableScroll();
                document.querySelectorAll('.dropdown-menu').forEach(dropdown => {
                    dropdown.classList.remove('active');
                });
                document.querySelectorAll('.nav-item').forEach(item => {
                    item.classList.remove('hidden');
                });
                document.querySelectorAll('.dropdown-back').forEach(backBtn => {
                    backBtn.classList.remove('active');
                });
                scrollHint.style.display = 'none'; // Verstecke Scroll-Hinweis beim Schließen
            }
        }

        hamburger.addEventListener("click", toggleMenu);

        // Dropdown-Logik
        document.querySelectorAll(".nav-link-dropdown-toggle").forEach(link => {
            link.addEventListener("click", (e) => {
                const dropdown = link.nextElementSibling;
                if (dropdown && dropdown.classList.contains('dropdown-menu')) {
                    e.preventDefault();
                    document.querySelectorAll('.nav-item').forEach(item => {
                        if (item !== link.parentElement) {
                            item.classList.add('hidden');
                        }
                    });
                    dropdown.classList.add('active');
                    const backBtn = document.createElement('div');
                    backBtn.classList.add('dropdown-back');
                    backBtn.textContent = 'Zurück';
                    backBtn.addEventListener('click', () => {
                        dropdown.classList.remove('active');
                        document.querySelectorAll('.nav-item').forEach(item => {
                            item.classList.remove('hidden');
                        });
                        backBtn.classList.remove('active');
                        updateScrollHint(); // Prüfe Scrollbarkeit nach Schließen des Dropdowns
                    });
                    dropdown.insertBefore(backBtn, dropdown.firstChild);
                    backBtn.classList.add('active');
                    updateScrollHint(); // Prüfe Scrollbarkeit nach Öffnen des Dropdowns
                } else {
                    toggleMenu();
                }
            });
        });

        function disableScroll() {
            const scrollY = window.scrollY;
            document.body.style.position = 'fixed';
            document.body.style.top = `-${scrollY}px`;
            document.body.style.width = '100%';
        }

        function enableScroll() {
            const scrollY = parseInt(document.body.style.top, 10);
            document.body.style.position = '';
            document.body.style.top = '';
            document.body.style.width = '';
            window.scrollTo(0, Math.abs(scrollY));
        }

        // Prüfen, ob das Menü scrollbar ist, basierend auf der Anzahl der sichtbaren Menüpunkte
        function updateScrollHint() {
            // Zähle die sichtbaren Menüpunkte (inklusive Untermenüpunkte, wenn ein Dropdown geöffnet ist)
            let visibleItems = 0;
            const dropdown = document.querySelector('.dropdown-menu.active');

            if (dropdown) {
                // Wenn ein Dropdown geöffnet ist, zähle die Untermenüpunkte (inklusive "Zurück"-Button)
                visibleItems = dropdown.querySelectorAll('.dropdown-item').length + 1; // +1 für den "Zurück"-Button
                console.log("Dropdown geöffnet, sichtbare Elemente: ", visibleItems);
            } else {
                // Zähle die Hauptmenüpunkte
                visibleItems = document.querySelectorAll('.nav-item:not(.hidden)').length;
                console.log("Hauptmenü, sichtbare Elemente: ", visibleItems);
            }

            // Schwellenwert: Wenn mehr als 4 Elemente sichtbar sind, ist das Menü wahrscheinlich scrollbar
            const threshold = 4; // Reduziert, um sicherzustellen, dass der Hinweis bei "Produkte" erscheint
            if (visibleItems > threshold) {
                scrollHint.style.display = 'block';
            } else {
                scrollHint.style.display = 'none';
            }
        }

        document.addEventListener('DOMContentLoaded', updateScrollHint);
        navMenuItems.addEventListener('scroll', updateScrollHint);
    </script>
    <br /><br /><br />
</body>

</html>