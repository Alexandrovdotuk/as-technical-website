<?php
// darmschweissgeraet.php

// Prüfen, ob die Datei direkt aufgerufen wird oder eingebunden
$swiper_id = $GLOBALS['current_swiper_id'] ?? 'mySwiper1';
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
        <title>Darmschweißgerät Thermo-Fix | Heinrich GmbH | Service & Beratung</title>
        <meta name="description"
            content="Entdecken Sie das Darmschweißgerät Thermo-Fix von Heinrich GmbH für automatisches Verschweißen von Därmen in der Wurstproduktion. Ideal für Metzgereien und Lebensmittelproduzenten mit Service und Beratung von AS Technicals." />
        <meta name="keywords"
            content="Darmschweißgerät, Thermo-Fix, Heinrich GmbH, Därme verschweißen, Wurstproduktion, Fleischereimaschinen, Metzgereimaschinen, Verkauf, Angebot, Service, Reparatur, technische Beratung" />
        <meta name="robots" content="index, follow" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="/styles/swiper-bundle.min.css" />
        <link rel="stylesheet" href="swiperpic.css" />

    </head>

    <body>
        <?php include 'header.php'; ?>
        <!-- Einführung -->
        <div class="leistungen">
            <h2>Darmschweißgerät Thermo-Fix – Automatisches Verschweißen für effiziente Wurstproduktion</h2>
            <p>Benötigen Sie eine zuverlässige Lösung zum Verschweißen von Därmen? Mit dem Thermo-Fix von Heinrich GmbH
                bieten wir Ihnen eine innovative Maschine, die Clips und Knoten überflüssig macht. Profitieren Sie von
                unserem Service, Reparatur und individueller Beratung.</p>
            <p>Wir konfigurieren Ihre Anlage nach Ihren Bedürfnissen, damit Sie optimale Ergebnisse erzielen. Lassen Sie
                sich von unserer Expertise überzeugen!</p>
        </div>
        <div id="image-overlay">
            <img src="" alt="Vollbildansicht Darmschweißgerät" />
            <video controls style="display: none;"></video>
        </div>
    <?php } ?>

    <?php
    // Produkt: Thermo-Fix
    if ($selected_product === null || $selected_product === 'thermo-fix') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_thermofix';
        ?>
        <div class="product-container" data-product-id="thermo-fix">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <video width="100%" height="auto" controls>
                                <source src="/Product/heinrich/Thermofix/Thermofix.mp4" type="video/mp4">
                                Dein Browser unterstützt das Video-Tag nicht.
                            </video>
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/heinrich/Thermofix/Thermofix1.jpg" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="Thermo-Fix Darmschweißgerät">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/heinrich/Thermofix/Thermofix2.jpg" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="Thermo-Fix Anwendung">
                        </div>


                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Miniaturansichten -->
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/assets/video.png" alt="Thermo-Fix Thumbnail 1">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/heinrich/Thermofix/Thermofix1.jpg" alt="Thermo-Fix Thumbnail 2">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(2, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/heinrich/Thermofix/Thermofix2.jpg" alt="Thermo-Fix Thumbnail 3">
                    </div>

                </div>
            </div>
            <div class="product-info">
                <h2>Thermo-Fix – Automatisches Darmschweißgerät</h2>
                <p>Das <strong>Heinrich Thermo-Fix</strong> ist ein Gerät zum automatischen Verschweißen von Schweine-,
                    Schaf- und Kollagendärmen, das weltweit in der Wurstproduktion eingesetzt wird. Es eliminiert den Bedarf
                    an Clips und Knoten, reduziert Kosten und optimiert ergonomische Arbeitsabläufe.</p>

                <h3>Ihre Vorteile:</h3>
                <ul>
                    <li>Erspart Clips und Knoten, reduziert Kosten</li>
                    <li>Optimierte ergonomische Arbeitsabläufe</li>
                    <li>Hohe Flexibilität für große und kleine Produktionen</li>
                    <li>Hygienisch durch Edelstahl und lebensmittelechte Kunststoffe</li>
                    <li>Mobile und vielseitig einsetzbar</li>
                </ul>

                <h3>Innovative Funktionen:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Funktionen</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Mikroprozessor mit 11 Programmen für konsistente Verschweißergebnisse</li>
                                <li>Verschweißt und trennt Därme oder zwei Würstchen in einem Durchgang</li>
                                <li>Mobiles Gerät für Tisch- oder Hängeliniennutzung</li>
                                <li>Komplett aus rostfreiem Edelstahl und lebensmittelechten Kunststoffen</li>
                                <li>Besteht aus zwei Einheiten für effiziente Handhabung</li>
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
                                        <td>Betriebstemperatur</td>
                                        <td>Bis +500°C</td>
                                    </tr>
                                    <tr>
                                        <td>Material</td>
                                        <td>Rostfreier Edelstahl und lebensmittelechte Kunststoffe</td>
                                    </tr>
                                    <tr>
                                        <td>Programme</td>
                                        <td>11 Programme im Mikroprozessor</td>
                                    </tr>
                                    <tr>
                                        <td>Anwendung</td>
                                        <td>Schweine-, Schaf- und Kollagendärme</td>
                                    </tr>
                                    <tr>
                                        <td>Einheiten</td>
                                        <td>Zwei Einheiten</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <h3>Lieferumfang:</h3>
                <ul>
                    <li>Darmschweißgerät Thermo-Fix</li>
                    <li>Mikroprozessor mit 11 Programmen</li>
                    <li>Zwei Einheiten</li>
                </ul>

                <p><em>Interesse? Kontaktieren Sie uns für ein maßgeschneidertes Angebot!</em></p>
            </div>
        </div>
        <!-- Strukturierte Daten für SEO -->
        <script type="application/ld+json">
                        {
                            "@context": "https://schema.org",
                            "@type": "Product",
                            "name": "Heinrich Thermo-Fix Darmschweißgerät",
                            "description": "Automatisches Verschweißgerät für Därme in der Wurstproduktion.",
                            "brand": {
                                "@type": "Brand",
                                "name": "Heinrich GmbH"
                            },
                            "offers": {
                                "@type": "Offer",
                                "priceCurrency": "EUR",
                                "availability": "https://schema.org/InStock",
                                "url": "https://as-technical.de/darmschweissgeraet.php"
                            },
                            "image": "https://as-technical.de/Product/heinrich/darmschweiss/Thermo-Fix_iffa_2025_04_edited.jpg"
                        }
                        </script>
    <?php } ?>

    <?php
    if (!$is_included) {
        ?>
        <script>
            // Definiere changeSlide global, damit sie immer verfügbar ist
            function changeSlide(index, swiperClass) {
                const swiperElement = document.querySelector(`.${swiperClass}`);
                if (swiperElement && swiperElement.swiper) {
                    console.log(`Wechsle zu Slide-Index: ${index} für Swiper-Klasse: ${swiperClass}`);
                    swiperElement.swiper.slideTo(index, 300, true);
                    console.log(`Aktueller Slide-Index nach Wechsel: ${swiperElement.swiper.activeIndex}`);
                } else {
                    console.error(`Swiper-Instanz für Klasse nicht gefunden: ${swiperClass}`);
                }
            }

            document.addEventListener("DOMContentLoaded", function () {
                // Initialisiere alle Swiper-Instanzen
                document.querySelectorAll('.swiper').forEach(swiperElement => {
                    const swiperClass = swiperElement.classList[1];
                    console.log(`Initialisiere Swiper für Klasse: ${swiperClass}`);
                    new Swiper(`.${swiperClass}`, {
                        navigation: {
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev'
                        },
                        pagination: {
                            el: '.swiper-pagination',
                            clickable: true,
                        },
                        slidesPerView: 1,
                        spaceBetween: 0,
                        initialSlide: 0,
                        watchSlidesProgress: true,
                    });
                });

                // Akkordeon-Funktionalität
                document.querySelectorAll('.accordion-header').forEach(button => {
                    button.addEventListener('click', () => {
                        const content = button.nextElementSibling;
                        const isOpen = content.style.display === 'block';

                        // Schließe alle anderen offenen Akkordeon-Elemente
                        document.querySelectorAll('.accordion-content').forEach(item => {
                            item.style.display = 'none';
                            item.previousElementSibling.classList.remove('active');
                        });

                        // Öffne oder schließe das aktuelle Akkordeon-Element
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
                            console.error("Bild-Overlay-Element nicht gefunden");
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
                    console.error("Bild-Overlay-Element nicht gefunden");
                }
            });
        </script>
        <?php include 'footer.php'; ?>
    </body>

    </html>
<?php } ?>