<?php
// waschautomaten.php

// Prüfen, ob die Datei direkt aufgerufen wird oder eingebunden
$swiper_id = $GLOBALS['current_swiper_id'] ?? 'mySwiper_kistenwaschmaschine';
$is_included = defined('IS_INCLUDED');
// Produkt-ID für selektive Ausgabe
$selected_product = $GLOBALS['selected_product'] ?? null;

if (!$is_included) {
    define('IS_INCLUDED', true);
    ?>
    <!DOCTYPE html>
    <html lang="de">

    <head>
        <meta charset="UTF-8">
        <title>Waschautomaten von NOMA Nowicki | Service & Beratung</title>
        <meta name="description"
            content="Entdecken Sie hochwertige Kistenwaschmaschinen und Behälterwaschanlagen von NOMA Nowicki. Perfekt für die Lebensmittelindustrie mit modularen Lösungen und höchster Effizienz." />
        <meta name="keywords"
            content="Waschautomaten, Kistenwaschmaschine, Behälterwaschmaschine, Palettenwaschmaschine, NOMA Nowicki, Kistenwaschanlage, Lebensmittelindustrie, Verkauf, Angebot" />
        <meta name="robots" content="index, follow" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="/styles/swiper-bundle.min.css" />
        <link rel="stylesheet" href="swiperpic.css" />

    </head>

    <body>
        <?php include 'header.php'; ?>
        <!-- Einführung -->
        <div class="leistungen">
            <h2>NOMA Nowicki Waschautomaten – Effizienz und Hygiene</h2>
            <p>Als Vertriebspartner von NOMA Nowicki Machinery bieten wir innovative Waschanlagen für die
                Lebensmittelindustrie. Unsere Kistenwaschmaschinen und Behälterwaschanlagen garantieren optimale
                Wascheffekte, höchste Hygiene und Effizienz.</p>
            <p>Profitieren Sie von modularen Lösungen, langlebiger Qualität und individuellem Service. Entdecken Sie die
                perfekte Waschanlage für Ihre Anforderungen!</p>
        </div>
        <div id="image-overlay">
            <img src="" alt="Vollbildansicht Waschautomat" />
            <video controls style="display: none;"></video>
        </div>
    <?php } ?>

    <?php
    // Produkt: Kistenwaschmaschine
    if ($selected_product === null || $selected_product === 'kistenwaschmaschine') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_kistenwaschmaschine';
        ?>
        <div class="product-container" data-product-id="kistenwaschmaschine">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/Product/nowicki/Waschanlage/mpp-150" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="Kistenwaschmaschine MPP-150">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/nowicki/waschanlage/mpu-600-2023" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="Kistenwaschmaschine MPU-600">
                        </div>
                        <div class="swiper-slide">
                            <video controls>
                                <source src="/video/waschen.mp4" type="video/mp4">
                                Dein Browser unterstützt das Video-Tag nicht.
                            </video>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Miniaturansichten -->
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/nowicki/Waschanlage/mpp-150" alt="MPP-150 Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/nowicki/waschanlage/mpu-600-2023" alt="MPU-600 Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(2, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/assets/video.png" alt="Video Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>Kistenwaschmaschine</h2>
                <p>Die Kistenwaschmaschinen von NOMA Nowicki (z. B. MP-300 und MPU-600) bieten optimale Wascheffekte für
                    Kunststoffbehälter, Deckel und Europaletten. Mit modularer Bauweise und modernster Technologie sind sie
                    ideal für die Lebensmittelindustrie.</p>

                <h3>Ihre Vorteile:</h3>
                <ul>
                    <li>Modulare Version: Erweiterbar mit Vorwasch- und Luftabblasmodulen</li>
                    <li>Hohe Effizienz: Bis zu 600 Behälter pro Stunde (MPU-600)</li>
                    <li>Geschlossenes Wasserkreislaufsystem: Spart Wasser und Ressourcen</li>
                    <li>Touchscreen-Bedienfeld: Intuitive Bedienung</li>
                    <li>Vielfältige Heizsysteme: Elektrisch, Dampf, Gas, Öl oder Warmwasser</li>
                    <li>Edelstahl-Kreiselpumpe: Langlebig und zuverlässig</li>
                    <li>Sicherheitsfunktionen: Schutz gegen unbeabsichtigtes Öffnen</li>
                </ul>

                <h3>Innovative Funktionen:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Funktionen</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Automatische Waschanlage für Kunststoffbehälter, Deckel und Europaletten</li>
                                <li>Modulare Bauweise mit Wasch- und Spülmodul</li>
                                <li>Geschlossenes Wasserkreislaufsystem mit regulierbarer Spülintensität</li>
                                <li>Edelstahl-Kreiselpumpe für langlebigen Betrieb</li>
                                <li>Heizsysteme: Elektrisch, Dampf, Gas, Öl oder Warmwasser</li>
                                <li>Touchscreen-Bedienfeld für einfache Steuerung</li>
                                <li>Sicherheitsschalter gegen unbeabsichtigtes Öffnen</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <h3>Technische Daten:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Technische Daten</button>
                        <div class="accordion-content">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Eigenschaft</th>
                                        <th>Wert</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Durchsatzleistung</td>
                                        <td>Bis 600 Behälter/h (MPU-600)</td>
                                    </tr>
                                    <tr>
                                        <td>Modularität</td>
                                        <td>Vorwasch- und Luftabblasmodule optional</td>
                                    </tr>
                                    <tr>
                                        <td>Wasserkreislauf</td>
                                        <td>Geschlossen, mit Spülintensität-Regulierung</td>
                                    </tr>
                                    <tr>
                                        <td>Heizsysteme</td>
                                        <td>Elektrisch, Dampf, Gas, Öl, Warmwasser</td>
                                    </tr>
                                    <tr>
                                        <td>Bedienung</td>
                                        <td>Touchscreen-Bedienfeld</td>
                                    </tr>
                                    <tr>
                                        <td>Sicherheit</td>
                                        <td>Schutz gegen unbeabsichtigtes Öffnen</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <h3>Lieferumfang:</h3>
                <ul>
                    <li>Kistenwaschmaschine (z. B. MP-300 oder MPU-600)</li>
                    <li>Wasch- und Spülmodul</li>
                    <li>Edelstahl-Kreiselpumpe</li>
                    <li>Touchscreen-Bedienfeld</li>
                </ul>

                <p><em>Interesse? Kontaktieren Sie uns für ein maßgeschneidertes Angebot!</em></p>
            </div>
        </div>
        <!-- Strukturierte Daten für SEO -->
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Product",
                "name": "NOMA Nowicki Kistenwaschmaschine",
                "description": "Hochwertige Waschautomaten für Kunststoffbehälter, Deckel und Europaletten.",
                "brand": {
                    "@type": "Brand",
                    "name": "NOMA Nowicki"
                },
                "offers": {
                    "@type": "Offer",
                    "priceCurrency": "EUR",
                    "availability": "https://schema.org/InStock",
                    "url": "https://as-technical.de/waschautomaten.php"
                },
                "image": "https://as-technical.de/Product/nowicki/Waschanlage/mpp-150"
            }
            </script>
    <?php } ?>

    <?php
    if (!$is_included) {
        ?>
        <script src="/scripts/swiper-bundle.min.js"></script>
        <script>
            // Initialisiere Swiper für jedes Produkt
            var swiper_kistenwaschmaschine = new Swiper('.mySwiper_kistenwaschmaschine', {
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

            document.addEventListener("DOMContentLoaded", function () {
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
                document.addEventListener("click", function (event) {
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
                    overlay.addEventListener("click", function (event) {
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