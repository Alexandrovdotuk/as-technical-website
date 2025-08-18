<?php
// kochkessel.php

// Prüfen, ob die Datei direkt aufgerufen wird oder eingebunden
$swiper_id = $GLOBALS['current_swiper_id'] ?? 'mySwiper1';
$is_included = defined('IS_INCLUDED');
// Produkt-ID für selektive Ausgabe
$selected_product = $GLOBALS['selected_product'] ?? null;

if (!$is_included) {
    define('IS_INCLUDED', true);
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <title>Kochkessel & Kühlbecken kaufen | Bastra Vertrieb & Service</title>
        <meta name="description" content="Entdecken Sie hochwertige Kochkessel und Kühlbecken von Bastra – mit Vertrieb, Service, Reparatur und individueller Beratung für Ihre Produktion." />
        <meta name="keywords" content="Kochkessel kaufen, Kühlbecken kaufen, Bastra Kochkessel, Elektrokochkessel, Dampfkochkessel, Gaskochkessel, Ölkochkessel, Glyzerinbad-Kochkessel, Service, technische Beratung" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    </head>

    <body>
        <?php include 'header.php'; ?>
        <!-- Einführung -->
        <div class="leistungen">
            <h1>Ihre Lösung für Kochkessel & Kühlbecken – Qualität von Bastra</h1>
            <p>Suchen Sie einen zuverlässigen Kochkessel oder ein Kühlbecken, das Ihre Produktion perfektioniert? Als Partner von Bastra, dem Experten für hochwertige Lebensmitteltechnik, bieten wir Ihnen erstklassige Produkte, maßgeschneiderte Beratung und umfassenden Service – alles aus einer Hand.</p>
            <p>Wir sorgen dafür, dass werkseitige und bauseitige Komponenten optimal harmonieren, damit Ihre Produktion reibungslos läuft. Lernen Sie unsere Kochkessel und Kühlbecken kennen – in verschiedenen Größen und mit flexiblen Beheizungsarten für Ihre individuellen Anforderungen!</p>
        </div>
        <div id="image-overlay">
            <img src="" alt="Vollbildansicht Kochkessel" />
        </div>
    <?php } ?>

    <?php
    // Produkt 1: Kochkessel 2000PLUS
    if ($selected_product === null || $selected_product === '2000plus') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_2000plus';
    ?>
        <div class="product-container" data-product-id="2000plus">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="Product/Bastra/2000Plus.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Bastra Kochkessel 2000PLUS"></div>
                        <div class="swiper-slide"><img src="Product/Bastra/Profi200.jpg" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Mikroprozessorsteuerung BASTRA-Profi-200K"></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="Product/Bastra/2000Plus.png" alt="Kochkessel 2000PLUS Miniatur"></div>
                    <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="Product/Bastra/Profi200.jpg" alt="Profi-200K Steuerung Miniatur"></div>
                </div>
            </div>
            <div class="product-info">
                <h2>Bastra Kochkessel 2000PLUS – Flexibel & Langlebig</h2>
                <p>Der Bastra Kochkessel 2000PLUS ist Ihre Lösung für vielseitiges Kochen. Wählen Sie zwischen Elektro-, Gas-, Öl- oder Dampfbeheizung und vertrauen Sie auf hochwertigen Chromnickelstahl mit effizienter Rundum-Isolierung – ideal für Kapazitäten von 200 bis 1200 Litern.</p>
                <h4>Ihre Vorteile:</h4>
                <ul>
                    <li>Robuster Chromnickelstahl für lange Haltbarkeit</li>
                    <li>Energieeffiziente Rundum-Isolierung</li>
                    <li>Flexibles Fassungsvermögen: 200–1200 Liter</li>
                </ul>
                <h4>Optionale Features:</h4>
                <ul>
                    <li><strong>Präzision:</strong> BASTRA-Profi-200K Mikroprozessorsteuerung mit Kern-Temperatur-Verfahren</li>
                    <li><strong>Komfort:</strong> Integrierte Warmwasserzuführung</li>
                    <li><strong>Vielseitigkeit:</strong> Wasserbad oder Glyzerinbad</li>
                    <li><strong>Modern:</strong> Einwandiger Deckel & PC-Schnittstelle für ProfiNet</li>
                    <li><strong>Profi-Optionen:</strong> Delta-Temperaturverfahren, F- und C-Wert-Eingabe</li>
                </ul>
                <p><em>Bereit für Ihren perfekten Kochkessel? Lassen Sie sich jetzt beraten!</em></p>
            </div>
        </div>
    <?php } ?>

    <?php
    // Produkt 2: KDN 50/120/150
    if ($selected_product === null || $selected_product === 'kdn-50-120-150') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_kdn50120150';
    ?>
        <div class="product-container" data-product-id="kdn-50-120-150">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="Product/Bastra/KDN.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Bastra Glyzerinbad-Kochkessel KDN"></div>
                        <div class="swiper-slide"><img src="Product/Bastra/KDNrollen.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="KDN Kochkessel mit Rollen"></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="Product/Bastra/KDN.png" alt="KDN Kochkessel Miniatur"></div>
                    <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="Product/Bastra/KDNrollen.png" alt="KDN mit Rollen Miniatur"></div>
                </div>
            </div>
            <div class="product-info">
                <h2>Bastra Glyzerinbad-Kochkessel KDN 50/120/150 – Präzision trifft Hygiene</h2>
                <p>Der KDN Kochkessel aus Chromnickelstahl (1.4301) mit glasperlgestrahlter Oberfläche bietet präzise Temperatursteuerung von 50–220°C. Sein Glyzerin-Doppelmantel und die Elektro-Direktbeheizung mit Thermostat machen ihn ideal für hygienisches Kochen in Größen von 50, 120 oder 150 Litern.</p>
                <h4>Ihre Vorteile:</h4>
                <ul>
                    <li>Hochwertiger Chromnickelstahl für Langlebigkeit</li>
                    <li>Glyzerinbad für gleichmäßige Wärme</li>
                    <li>Flexible Kapazitäten: 50, 120 oder 150 Liter</li>
                </ul>
                <h4>Praktische Features:</h4>
                <ul>
                    <li>Isolierte Tragegriffe für einfache Handhabung</li>
                    <li>Schauglas & Nachfüllstutzen für Glyzerin</li>
                    <li>Sicherheitsüberdruckrohr für sicheren Betrieb</li>
                </ul>
                <p><em>Lust auf perfekte Kochergebnisse? Kontaktieren Sie uns!</em></p>
            </div>
        </div>
    <?php } ?>

    <?php
    // Produkt 3: KDN 200
    if ($selected_product === null || $selected_product === 'kdn-200') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_kdn200';
    ?>
        <div class="product-container" data-product-id="kdn-200">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="Product/Bastra/KDN200.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Bastra Glyzerinbad-Kochkessel KDN 200 Liter"></div>
                        <div class="swiper-slide"><img src="Product/Bastra/MC40.jpg" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Steuerung MC40 für KDN Kochkessel"></div>

                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="Product/Bastra/KDN200.png" alt="KDN 200 Liter Miniatur"></div>
                    <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="Product/Bastra/MC40.jpg" alt="MC40 Steuerung Miniatur"></div>

                </div>
            </div>
            <div class="product-info">
                <h2>Bastra Glyzerinbad-Kochkessel KDN 200 – Mobil & Leistungsstark</h2>
                <p>Der KDN 200 ist ein mobiler Kochkessel aus Chromnickelstahl (1.4301) mit gebürsteter Oberfläche und 200 Litern Fassungsvermögen. Mit doppelwandiger Konstruktion, Vollisolierung und Lenkrollen ist er ideal für flexible und hygienische Einsätze in Ihrer Küche.</p>
                <h4>Ihre Vorteile:</h4>
                <ul>
                    <li>Robuste, selbsttragende Chromnickelstahl-Konstruktion</li>
                    <li>Hygienisch dank fugenloser Verarbeitung</li>
                    <li>Mobil mit vier Lenkrollen (zwei feststellbar)</li>
                </ul>
                <h4>Praktische Details:</h4>
                <ul>
                    <li>CNS-Ablasshahn (1 1/4 Zoll) für einfaches Entleeren</li>
                    <li>Doppelwandiger Deckel mit Scharnier</li>
                    <li>Steckerfertig mit 3m Kabel & CEE-Stecker (16A)</li>
                </ul>
                <p><em>Bereit für mehr Effizienz? Lassen Sie sich beraten!</em></p>
            </div>
        </div>
    <?php } ?>

    <?php
    if (!$is_included) {
    ?>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script>
            // Initialisiere Swiper für jedes Produkt
            var swiper_2000plus = new Swiper('.mySwiper_2000plus', {
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev'
                },
            });
            var swiper_kdn50120150 = new Swiper('.mySwiper_kdn50120150', {
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev'
                },
            });
            var swiper_kdn200 = new Swiper('.mySwiper_kdn200', {
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev'
                },
            });

            function changeSlide(index, swiperClass) {
                const swiper = document.querySelector(`.${swiperClass}`).swiper;
                swiper.slideTo(index);
            }

            document.addEventListener("DOMContentLoaded", function() {
                document.addEventListener("click", function(event) {
                    if (event.target.classList.contains("fullscreen-toggle")) {
                        const overlay = document.querySelector("#image-overlay");
                        const overlayImage = document.querySelector("#image-overlay img");
                        overlayImage.src = event.target.src;
                        overlay.classList.add("active");
                        document.body.style.overflow = "hidden";
                    }
                });

                const overlay = document.querySelector("#image-overlay");
                if (overlay) {
                    overlay.addEventListener("click", function(event) {
                        if (event.target === this || event.target.tagName === "IMG") {
                            this.classList.remove("active");
                            document.body.style.overflow = "auto";
                        }
                    });
                }
            });
        </script>
        <?php include 'footer.php'; ?>
    </body>

    </html>
<?php } ?>