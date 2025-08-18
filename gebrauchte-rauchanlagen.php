<?php
// gebrauchte_rauchanlagen.php

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
        <title>Gebrauchte Rauchanlagen | Generalüberholt</title>
        <meta name="description" content="Entdecken Sie generalüberholte gebrauchte Rauchanlagen wie die BASTRA B2000 – individuell anpassbar und zuverlässig." />
        <meta name="keywords" content="gebrauchte Rauchanlage, BASTRA B2000, generalüberholt, Metzgereimaschinen" />
        <meta name="robots" content="noindex">
        <link rel="stylesheet" href="/styles/swiper-bundle.min.css" />
        <link rel="stylesheet" href="swiperpic.css" />
        
    </head>

    <body>
        <?php include 'header.php'; ?>
        <!-- Einführung -->
        <div class="leistungen">
            <h2>Ihre perfekte gebrauchte Rauchanlage</h2>
            <p>Entdecken Sie unsere generalüberholten gebrauchten Rauchanlagen, wie die BASTRA B2000, die speziell für Metzgereien und Fleischverarbeitungsbetriebe entwickelt wurden. Mit modernster Technik, individuellen Anpassungsmöglichkeiten und unserem umfassenden Service bieten wir Ihnen zuverlässige Lösungen für Ihre Produktion.</p>
            <p>Profitieren Sie von unserer Expertise bei der Modernisierung und Instandsetzung von Rauchanlagen. Kontaktieren Sie uns für eine Beratung oder ein maßgeschneidertes Angebot!</p>
        </div>
        <div id="image-overlay">
            <img src="" alt="Vollbildansicht Rauchanlage" />
            <video controls style="display: none;"></video>
        </div>
    <?php } ?>

    <?php
    // Produkt: BASTRA B2000
    if ($selected_product === null || $selected_product === 'bastra-b2000') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_bastraB2000';
    ?>
        <div class="product-container" data-product-id="bastra-b2000">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/Product/gebraucht/rauchanlagen/bastra.jpg" class="fullscreen-toggle" style="cursor:zoom-in;" alt="BASTRA B2000 Rauch- und Kochanlage gebraucht">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/gebraucht/rauchanlagen/bastra.jpg" alt="BASTRA B2000 Miniatur">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>Gebrauchte und Generalüberholte Rauch- und Kochanlage BASTRA B2000</h2>
                <p>Entdecken Sie die <strong>BASTRA B2000 Rauch- und Kochanlage</strong> – gebraucht, generalüberholt und nach Ihren Wünschen individualisierbar! Diese hochwertige Anlage ist die perfekte Lösung für Metzgereien und Fleischverarbeitungsbetriebe, die Wert auf Flexibilität, Effizienz und Qualität legen. Wir passen die Anlage exakt an Ihre Anforderungen an – von der Beheizung bis zur Befeuchtung.</p>

                <h4>Ihre Vorteile auf einen Blick:</h4>
                <ul>
                    <li>Gebraucht und generalüberholt – zuverlässig wie neu</li>
                    <li>Vollständig individualisierbar nach Ihren Anforderungen</li>
                    <li>Einfache Bedienung mit der MC800-Steuerung</li>
                    <li>Vielseitige Einsatzmöglichkeiten: Räuchern, Kochen, Reifen</li>
                    <li>Montage und Einweisung durch unser Fachpersonal</li>
                </ul>

                <h4>Serienausstattung:</h4>
                <ul>
                    <li><strong>BASTRA B2000</strong> mit Hackspanraucherzeuger in der Tür</li>
                    <li>Intuitive MC800-Steuerung für einfache Bedienung</li>
                    <li>Druckluftschaumreinigung für hygienische Sauberkeit</li>
                </ul>

                <h4>Individualisierungsmöglichkeiten:</h4>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Individualisierungsmöglichkeiten</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Wahl der Beheizung:</strong> Elektrisch, Gas, Öl oder Hochdruckdampf</li>
                                <li><strong>Wahl der Befeuchtung:</strong> Zerstäubung mit Druckluft, Wasserkasten oder Niederdruckdampf (Reindampf)</li>
                                <li><strong>Reifepaket:</strong> Zusätzliche zweite Befeuchtung, weitere Umluftstufe, Kühlverdampfer (Anschluss an bauseitige Kühlmaschine)</li>
                                <li><strong>Kühldusche:</strong> Optional für schnelles Abkühlen</li>
                                <li><strong>Automatische Türentriegelung:</strong> Für mehr Bedienkomfort</li>
                                <li><strong>Wechselumluftsystem:</strong> Für gleichmäßiges Garen von liegender Ware</li>
                                <li>Weitere Anpassungen nach Kundenwunsch möglich</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <h4>Technische Daten:</h4>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Technische Daten</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Beheizungsart:</strong> Elektrisch, Gas, Öl, Hochdruckdampf</li>
                                <li><strong>Raucherzeuger:</strong> Hackspanraucherzeuger in der Tür</li>
                                <li><strong>Steuerung:</strong> MC800</li>
                                <li><strong>Beschickungsmengen:</strong> 110–400 kg</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <h4>Service und Installation:</h4>
                <p>Wir übernehmen die Montage vor Ort und bieten eine umfassende Einweisung, damit Sie sofort loslegen können. Unsere Experten stehen Ihnen auch nach der Installation für Fragen und Wartung zur Verfügung.</p>
                <p><em>Interesse? Lassen Sie sich jetzt beraten!</em></p>
            </div>
        </div>
    <?php } ?>

    <?php
    if (!$is_included) {
    ?>
        <script src="/scripts/swiper-bundle.min.js"></script>
        <script>
            // Initialisiere Swiper für jedes Produkt
            var swiper_bastraB2000 = new Swiper('.mySwiper_bastraB2000', {
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev'
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });

            function changeSlide(index, swiperClass) {
                const swiper = document.querySelector(`.${swiperClass}`).swiper;
                if (swiper) {
                    swiper.slideTo(index);
                } else {
                    console.error(`Swiper instance not found for class: ${swiperClass}`);
                }
            }

            document.addEventListener("DOMContentLoaded", function() {
                // Initialisiere alle Akkordeons
                document.querySelectorAll('.accordion-header').forEach(button => {
                    button.addEventListener('click', () => {
                        const content = button.nextElementSibling;
                        const isOpen = content.style.display === 'block';

                        // Schließe alle anderen offenen Inhalte
                        document.querySelectorAll('.accordion-content').forEach(item => {
                            item.style.display = 'none';
                            item.previousElementSibling.classList.remove('active');
                        });

                        // Öffne oder schließe das aktuelle Inhaltselement
                        if (!isOpen) {
                            content.style.display = 'block';
                            button.classList.add('active');
                        }
                    });
                });

                // Overlay für Vollbildansicht
                document.addEventListener("click", function(event) {
                    if (event.target.classList.contains("fullscreen-toggle")) {
                        const overlay = document.querySelector("#image-overlay");
                        if (!overlay) {
                            console.error("Image overlay element not found");
                            return;
                        }
                        const overlayImage = overlay.querySelector("img");
                        const overlayVideo = overlay.querySelector("video");
                        if (event.target.tagName === "VIDEO") {
                            overlayVideo.src = event.target.querySelector("source").src;
                            overlayVideo.style.display = "block";
                            overlayImage.style.display = "none";
                            overlayVideo.play();
                        } else {
                            overlayImage.src = event.target.src;
                            overlayImage.style.display = "block";
                            overlayVideo.style.display = "none";
                        }
                        overlay.classList.add("active");
                        document.body.style.overflow = "hidden";
                    }
                });

                const overlay = document.querySelector("#image-overlay");
                if (overlay) {
                    overlay.addEventListener("click", function(event) {
                        if (event.target === this || event.target.tagName === "IMG" || event.target.tagName === "VIDEO") {
                            this.classList.remove("active");
                            document.body.style.overflow = "auto";
                            const overlayVideo = this.querySelector("video");
                            if (overlayVideo) {
                                overlayVideo.pause();
                                overlayVideo.src = "";
                            }
                        }
                    });
                } else {
                    console.error("Image overlay element not found");
                }
            });
        </script>
        <?php include 'footer.php'; ?>
    </body>

    </html>
<?php } ?>