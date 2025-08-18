<?php
// wuerstchentrennmaschine.php

// Prüfen, ob die Datei direkt aufgerufen wird oder eingebunden
$swiper_id = $GLOBALS['current_swiper_id'] ?? 'mySwiper_trennfix';
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
        <title>Würstchentrennmaschine Trenn-Fix 2.0 und Trennfix Junior | Heinrich GmbH | Service & Beratung</title>
        <meta name="description"
            content="Entdecken Sie die Würstchentrennmaschine Trenn-Fix von Heinrich GmbH für präzises Trennen von Würstchen mit hoher Leistung. Ideal für Metzgereien und Lebensmittelproduzenten mit Service und Beratung von AS Technicals." />
        <meta name="keywords"
            content="Würstchentrennmaschine, Würstchen trennen, Heinrich GmbH, Trenn-Fix 2.0, Trenn-Fix Junior, Fleischereimaschinen, Metzgereimaschinen, Verkauf, Angebot, Service, Reparatur, technische Beratung" />
        <meta name="robots" content="index, follow" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="/styles/swiper-bundle.min.css" />
        <link rel="stylesheet" href="swiperpic.css" />

    </head>

    <body>
        <?php include 'header.php'; ?>
        <!-- Einführung -->
        <img src="/Product/heinrich/trennfix/trennfix0.jpg.avif" style="width:100%;" alt="Trenn-Fix 2.0 von Heinrich GmbH">

        <div class="leistungen">
            <h2>Würstchentrennmaschine Trenn-Fix 2.0 – Präzision und Effizienz</h2>
            <p>Die Trenn-Fix Maschinen von Heinrich GmbH sind die ideale Lösungen für Metzgereien und Lebensmittelproduzenten, die
                Würstchen präzise und effizient trennen möchten. Mit moderner Technologie und höchstem Hygienestandard
                optimiert sie Ihre Produktion.</p>
            <p>Profitieren Sie von flexiblen Lösungen, langlebiger Qualität und individuellem Service. Entdecken Sie die
                Möglichkeiten der Trenn-Fix Maschinen!</p>
        </div>
        <div id="image-overlay">
            <img src="" alt="Vollbildansicht Würstchentrennmaschine" />
            <video controls style="display: none;"></video>
        </div>
    <?php } ?>

    <?php
    // Produkt: Trenn-Fix 2.0
    if ($selected_product === null || $selected_product === 'trenn-fix') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_trennfix';
        ?>
        <div class="product-container" data-product-id="trenn-fix">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/Product/heinrich/trennfix/trennfix1.jpg.avif" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="Heinrich Trenn-Fix 2.0 Detailansicht">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/heinrich/trennfix/trennfix2.jpg.avif" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="Heinrich Trenn-Fix 2.0 Seitenansicht">
                        </div>
                        <div class="swiper-slide">
                            <video controls>
                                <source src="/video/wursttrenner.mp4" type="video/mp4">
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
                        <img src="/Product/heinrich/trennfix/trennfix1.jpg.avif" alt="Trenn-Fix 2.0 Detail Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/heinrich/trennfix/trennfix2.jpg.avif"
                            alt="Trenn-Fix 2.0 Seitenansicht Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(2, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/assets/video.png" alt="Video Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>Trenn-Fix 2.0 – Präziser Würstchentrenner</h2>
                <p>Die <strong>Heinrich Trenn-Fix 2.0</strong> ist das Herzstück für die präzise Trennung von Würstchen. Mit
                    patentierter Technologie und hoher Flexibilität optimiert sie Ihre Produktion und spart wertvolle
                    Arbeitszeit.</p>

                <h3>Ihre Vorteile:</h3>
                <ul>
                    <li>Hohe Durchsatzleistung: Bis zu 3.000 kg Würstchen pro Stunde</li>
                    <li>Flexibel einsetzbar: Geeignet für Würstchen von 3 g bis 300 g, in Natur- oder Collagendarm</li>
                    <li>Höchster Hygienestandard: Integriertes Reinigungsprogramm und Sicherheitsschalter</li>
                    <li>Patentiertes Messersystem: Präzises Trennen durch Eigengewicht</li>
                    <li>Automatischer Puffer: Ermöglicht dem Bedienpersonal, weitere Aufgaben zu erledigen</li>
                    <li>Sonderausstattung: Optional für Genusssäure oder Kochsalzlösung</li>
                </ul>

                <h3>Innovative Funktionen:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Funktionen</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Patentiertes Messersystem, das Würstchen am Drehpunkt erfasst für zuverlässige Trennung
                                </li>
                                <li>Sicherheitsschalter für Einlauf, Auslauf und Seitenpaneele</li>
                                <li>Integriertes Reinigungsprogramm für einfache Wartung</li>
                                <li>Funktioniert als Puffer, besonders nützlich in Kombination mit Fördersystemen</li>
                                <li>Kombinierbar mit "Fördertechnik" für zusätzliche Lösungen</li>
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
                                        <th>Modell</th>
                                        <th>Standard</th>
                                        <th>Junior</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Durchsatzleistung</td>
                                        <td>Bis 3.000 kg/h</td>
                                        <td>Bis 3.000 kg/h (abhängig von Produkt)</td>
                                    </tr>
                                    <tr>
                                        <td>Abmessungen (L x B)</td>
                                        <td>3.100 mm x 830 mm</td>
                                        <td>2.100 mm x 900 mm</td>
                                    </tr>
                                    <tr>
                                        <td>Anwendungsbereich</td>
                                        <td>Würstchen von 3 g bis 300 g</td>
                                        <td>Würstchen von 3 g bis 300 g</td>
                                    </tr>
                                    <tr>
                                        <td>Hygiene</td>
                                        <td>Integriertes Reinigungsprogramm</td>
                                        <td>Integriertes Reinigungsprogramm</td>
                                    </tr>
                                    <tr>
                                        <td>Sicherheit</td>
                                        <td>Sicherheitsschalter für Ein-/Auswurf</td>
                                        <td>Sicherheitsschalter für Ein-/Auswurf</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <h3>Lieferumfang:</h3>
                <ul>
                    <li>Würstchentrennmaschine Trenn-Fix 2.0</li>
                    <li>Patentiertes Messersystem</li>
                    <li>Integriertes Reinigungsprogramm</li>
                    <li>Sicherheitsschalter</li>
                </ul>

                <p><em>Interesse? Kontaktieren Sie uns für ein maßgeschneidertes Angebot!</em></p>
            </div>
        </div>
        <!-- Strukturierte Daten für SEO -->
        <script type="application/ld+json">
                                    {
                                        "@context": "https://schema.org",
                                        "@type": "Product",
                                        "name": "Heinrich Trenn-Fix 2.0 Würstchentrennmaschine",
                                        "description": "Präzise Würstchentrennmaschine für hohe Leistung und Flexibilität in Metzgereien und Lebensmittelproduktion.",
                                        "brand": {
                                            "@type": "Brand",
                                            "name": "Heinrich GmbH"
                                        },
                                        "offers": {
                                            "@type": "Offer",
                                            "priceCurrency": "EUR",
                                            "availability": "https://schema.org/InStock",
                                            "url": "https://as-technical.de/wuerstchentrennmaschine.php"
                                        },
                                        "image": "https://as-technical.de/Product/heinrich/trennfix/trennfix0.jpg.avif"
                                    }
                                </script>
    <?php } ?>
    <?php
    // Neues Produkt: Trenn-Fix Junior
    if ($selected_product === null || $selected_product === 'trenn-fix-junior') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_trennfixjunior';
        ?>
        <div class="product-container" data-product-id="trenn-fix-junior">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/Product/heinrich/trennfix/trennfix_junior1.png" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="Heinrich Trenn-Fix Junior">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/heinrich/trennfix/trennfix_junior2.png" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="Heinrich Trenn-Fix Junior">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/heinrich/trennfix/trennfix_junior3.png" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="Heinrich Trenn-Fix Junior">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Miniaturansichten -->
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/heinrich/trennfix/trennfix_junior1.png" alt="Trenn-Fix Junior Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/heinrich/trennfix/trennfix_junior2.png" alt="Trenn-Fix Junior Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(2, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/heinrich/trennfix/trennfix_junior3.png" alt="Trenn-Fix Junior Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>Trenn-Fix Junior – Kompakter Würstchentrenner</h2>
                <p>Ein Assistent aus dem Team stellt sich vor: Trenn-Fix Junior</p>

                <h3>Innovative Funktionen:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Funktionen</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Die Form des Messers ist so ausgelegt, dass es während der rotierenden Trommelbewegung
                                    die Würstchen auffangen und an der Abbiegstelle den V-förmigen Klingen zuführen kann.
                                </li>
                                <li>Die spezielle Ausformung sorgt dafür, dass die Würstchen in der Mitte ihrer Abbiegung
                                    geschnitten werden.</li>
                                <li>Die Klingen sind fest und dicht mit dem Kunststoff verbunden, eine Bakterienbildung am
                                    Messer ist somit ausgeschlossen.</li>
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
                                        <td>Bedienung</td>
                                        <td>mit Touchscreen</td>
                                    </tr>
                                    <tr>
                                        <td>Produktwechsel</td>
                                        <td>Problemloser, kein Umrüsten</td>
                                    </tr>
                                    <tr>
                                        <td>Material</td>
                                        <td>Komplett aus Edelstahl</td>
                                    </tr>
                                    <tr>
                                        <td>Antrieb</td>
                                        <td>mit 0,37 kW</td>
                                    </tr>
                                    <tr>
                                        <td>Anschluss</td>
                                        <td>über 230 V, 50 Hz</td>
                                    </tr>
                                    <tr>
                                        <td>Sonderausstattung</td>
                                        <td>für Genusssäure</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <h3>Lieferumfang:</h3>
                <ul>
                    <li>Würstchentrennmaschine Trenn-Fix Junior</li>
                    <li>Patentiertes Messersystem</li>
                    <li>Integriertes Reinigungsprogramm</li>
                    <li>Sicherheitsschalter</li>
                </ul>
                <p><em>Interesse? Kontaktieren Sie uns für ein maßgeschneidertes Angebot!</em></p>
            </div>
        </div>
        <!-- Strukturierte Daten für SEO -->
        <script type="application/ld+json">
                                    {
                                        "@context": "https://schema.org",
                                        "@type": "Product",
                                        "name": "Heinrich Trenn-Fix Junior Würstchentrennmaschine",
                                        "description": "Kompakte Version der Trenn-Fix-Serie für präzise Trennung von Würstchen in kleineren Betrieben.",
                                        "brand": {
                                            "@type": "Brand",
                                            "name": "Heinrich GmbH"
                                        },
                                        "offers": {
                                            "@type": "Offer",
                                            "priceCurrency": "EUR",
                                            "availability": "https://schema.org/InStock",
                                            "url": "https://as-technical.de/wuerstchentrennmaschine.php"
                                        },
                                        "image": "https://as-technical.de/Product/heinrich/trennfix/trennfix-junior-placeholder.jpg"
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