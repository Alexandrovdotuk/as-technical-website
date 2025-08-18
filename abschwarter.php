<?php
// abschwarter.php

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
        <title>Foodlogistik Abschwarter | Präzision für Metzgereien & Gastronomie</title>
        <meta name="description"
            content="Entdecken Sie Foodlogistik Entschwartungsmaschinen für präzises Entschwarten. Perfekt für Metzgereien und Gastronomie mit Service und Beratung von AS Technicals." />
        <meta name="keywords"
            content="Foodlogistik, Abschwarter, Entschwartungsmaschine, Entschwarten, Metzgerei, Gastronomie, AS Technicals, Service, Beratung, DerindR Classic 450, DerindR Comfort 450" />
        <meta name="robots" content="index, follow" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="/styles/swiper-bundle.min.css" />
        <link rel="stylesheet" href="swiperpic.css" />


    </head>

    <body>
        <?php include 'header.php'; ?>
        <!-- Einführung -->
        <div class="leistungen">
            <h2>Foodlogistik Entschwartungsmaschinen – Präzision und Effizienz</h2>
            <p>AS Technicals ist Ihr Partner für Foodlogistik Abschwarter, die in Metzgereien, Gastronomiebetrieben und der
                Lebensmittelindustrie Maßstäbe setzen. Unsere Maschinen bieten präzises Entschwarten, hohe Effizienz und
                maximale Hygiene – ideal für Fleisch, Wurst und mehr.</p>
            <p>Profitieren Sie von langlebigen, flexiblen Lösungen mit erstklassigem Service und individueller Beratung.
                Entdecken Sie unsere Entschwartungsmaschinen für Ihre Produktion!</p>
        </div>
        <div id="image-overlay">
            <img src="" alt="Vollbildansicht Entschwartungsmaschine" />
            <video controls style="display: none;"></video>
        </div>
    <?php } ?>

    <?php
    // Produkt 1: DerindR Classic 450
    if ($selected_product === null || $selected_product === 'derindr-classic-450') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_derindrclassic450';
        ?>
        <div class="product-container" data-product-id="derindr-classic-450">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/Product/foodlogistik/DerindR/Classic450.png" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="Foodlogistik DerindR Classic 450 Entschwartungsmaschine">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Miniaturansichten -->
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/foodlogistik/DerindR/Classic450.png" alt="DerindR Classic 450 Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>DerindR Classic 450 – Manuelles Entschwarten</h2>
                <p>Die <strong>Foodlogistik DerindR Classic 450</strong> ist ideal für das manuelle Entschwarten in
                    Handwerks- und Industriebetrieben. Sie bietet einfache Bedienung, hohe Hygiene und Langlebigkeit für die
                    Verarbeitung von Fleischprodukten.</p>

                <h3>Ihre Vorteile:</h3>
                <ul>
                    <li>Manuelle Bedienung für präzises Entschwarten</li>
                    <li>Robustes Maschinengestell aus rostfreiem Edelstahl</li>
                    <li>Einfache Reinigung durch schnellen Ausbau der Schneidwerkzeuge</li>
                    <li>Mobile Konstruktion für flexible Nutzung</li>
                    <li>Hoher Sicherheitsstandard</li>
                </ul>

                <h3>Innovative Funktionen:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Funktionen</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Manueller Betrieb mit Fußschalter für Rundstücke</li>
                                <li>Schneller Ausbau der Schneidwerkzeuge für einfache Reinigung</li>
                                <li>Robustes Maschinengestell für Dauereinsatz</li>
                                <li>Fahrbar mit Lenkrollen</li>
                                <li>Hoher Sicherheitsstandard nach internationalen Normen</li>
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
                                        <td>Betriebsart</td>
                                        <td>Manuell mit Fußschalter</td>
                                    </tr>
                                    <tr>
                                        <td>Material</td>
                                        <td>Rostfreier Edelstahl</td>
                                    </tr>
                                    <tr>
                                        <td>Arbeitsbreite</td>
                                        <td>450 mm</td>
                                    </tr>
                                    <tr>
                                        <td>Mobilität</td>
                                        <td>Fahrbar mit Lenkrollen</td>
                                    </tr>
                                    <tr>
                                        <td>Sicherheitsstandard</td>
                                        <td>International zertifiziert</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <h3>Lieferumfang:</h3>
                <ul>
                    <li>DerindR Classic 450 Entschwartungsmaschine</li>
                    <li>Fußschalter</li>
                    <li>Lenkrollen</li>
                </ul>

                <p><em>Interesse? Kontaktieren Sie uns für ein Angebot!</em></p>
            </div>
        </div>
        <!-- Strukturierte Daten für SEO -->
        <script type="application/ld+json">
                {
                    "@context": "https://schema.org",
                    "@type": "Product",
                    "name": "Foodlogistik DerindR Classic 450",
                    "description": "Manuelle Entschwartungsmaschine für präzises Entschwarten in Handwerks- und Industriebetrieben.",
                    "brand": {
                        "@type": "Brand",
                        "name": "Foodlogistik"
                    },
                    "offers": {
                        "@type": "Offer",
                        "priceCurrency": "EUR",
                        "availability": "https://schema.org/InStock",
                        "url": "https://as-technical.de/abschwarter.php"
                    },
                    "image": "https://as-technical.de/Product/foodlogistik/DerindR/Classic450.png"
                }
                </script>
    <?php } ?>

    <?php
    // Produkt 2: DerindR Comfort 450
    if ($selected_product === null || $selected_product === 'derindr-comfort-450') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_derindrcomfort450';
        ?>
        <div class="product-container" data-product-id="derindr-comfort-450">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/Product/foodlogistik/DerindR/Comfort450.png" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="Foodlogistik DerindR Comfort 450 Entschwartungsmaschine">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Miniaturansichten -->
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/foodlogistik/DerindR/Comfort450.png" alt="DerindR Comfort 450 Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>DerindR Comfort 450 – Allrounder für Entschwarten</h2>
                <p>Die <strong>Foodlogistik DerindR Comfort 450</strong> kombiniert automatisches und manuelles Entschwarten
                    sowie Scheibenschneiden. Sie bietet hohe Flexibilität und präzise Ergebnisse für flache und runde
                    Teilstücke in Metzgereien und Gastronomiebetrieben.</p>

                <h3>Ihre Vorteile:</h3>
                <ul>
                    <li>Automatisches und manuelles Entschwarten in einer Maschine</li>
                    <li>Präzise Schneiddicke für flexible Anwendungen</li>
                    <li>Hygienisches Design für einfache Reinigung</li>
                    <li>Robustes Maschinengestell aus rostfreiem Edelstahl</li>
                    <li>Mobile Konstruktion für flexible Nutzung</li>
                </ul>

                <h3>Innovative Funktionen:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Funktionen</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Automatisches Entschwarten mit Zuführband und optionalem Austrageband</li>
                                <li>Manueller Betrieb mit Fußschalter für Rundstücke</li>
                                <li>Stufenlose Schneiddicke (0–4 mm) für Flexibilität</li>
                                <li>Federnd gelagerte Andruckwalzen für hohe Schneidqualität</li>
                                <li>Fahrbar mit Lenkrollen</li>
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
                                        <td>Betriebsart</td>
                                        <td>Automatisch und manuell</td>
                                    </tr>
                                    <tr>
                                        <td>Schneiddicke</td>
                                        <td>0–4 mm (stufenlos)</td>
                                    </tr>
                                    <tr>
                                        <td>Produkthöhe</td>
                                        <td>Bis 90 mm (automatisch)</td>
                                    </tr>
                                    <tr>
                                        <td>Arbeitsbreite</td>
                                        <td>450 mm</td>
                                    </tr>
                                    <tr>
                                        <td>Mobilität</td>
                                        <td>Fahrbar mit Lenkrollen</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <h3>Lieferumfang:</h3>
                <ul>
                    <li>DerindR Comfort 450 Entschwartungsmaschine</li>
                    <li>Zuführband</li>
                    <li>Fußschalter</li>
                    <li>Lenkrollen</li>
                </ul>

                <p><em>Optimieren Sie Ihre Produktion! Kontaktieren Sie uns!</em></p>
            </div>
        </div>
        <!-- Strukturierte Daten für SEO -->
        <script type="application/ld+json">
                {
                    "@context": "https://schema.org",
                    "@type": "Product",
                    "name": "Foodlogistik DerindR Comfort 450",
                    "description": "Allrounder für automatisches und manuelles Entschwarten sowie Scheibenschneiden.",
                    "brand": {
                        "@type": "Brand",
                        "name": "Foodlogistik"
                    },
                    "offers": {
                        "@type": "Offer",
                        "priceCurrency": "EUR",
                        "availability": "https://schema.org/InStock",
                        "url": "https://as-technical.de/abschwarter.php"
                    },
                    "image": "https://as-technical.de/Product/foodlogistik/DerindR/Comfort450.png"
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