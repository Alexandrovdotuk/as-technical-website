<?php
// speckschneider.php

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
        <title>Foodlogistik Schneidmaschinen | Präzision für Metzgereien & Gastronomie</title>
        <meta name="description"
            content="Entdecken Sie Foodlogistik Schneidmaschinen für präzises Würfeln, Streifenschneiden und Entschwarten. Perfekt für Metzgereien und Gastronomie mit Service und Beratung von AS Technicals." />
        <meta name="keywords"
            content="Foodlogistik, Schneidmaschinen, Würfelschneider, Speckschneider, Metzgerei, Gastronomie, AS Technicals, Service, Beratung, DicR Classic, DicR Comfort, DicR Capacity, Shreddr, DerindR" />
        <meta name="robots" content="index, follow" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="/styles/swiper-bundle.min.css" />
        <link rel="stylesheet" href="swiperpic.css" />

    </head>

    <body>
        <?php include 'header.php'; ?>
        <!-- Einführung -->
        <div class="leistungen">
            <h2>Foodlogistik Schneidmaschinen – Präzision und Effizienz</h2>
            <p>AS Technicals ist Ihr Partner für Foodlogistik Schneidmaschinen, die in Metzgereien, Gastronomiebetrieben und
                der Lebensmittelindustrie Maßstäbe setzen. Unsere Maschinen bieten präzise Schnitte, hohe Effizienz und
                maximale Hygiene – ideal für Fleisch, Wurst, Käse, Gemüse und mehr.</p>
            <p>Profitieren Sie von langlebigen, flexiblen Lösungen mit erstklassigem Service und individueller Beratung.
                Entdecken Sie unsere Würfelschneider und Shredder für Ihre Produktion!</p>
        </div>
        <div id="image-overlay">
            <img src="" alt="Vollbildansicht Foodlogistik Schneidmaschine" />
            <video controls style="display: none;"></video>
        </div>
    <?php } ?>

    <?php
    // Produkt 1: DicR Classic
    if ($selected_product === null || $selected_product === 'dicr-classic') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_dicrclassic';
        ?>
        <div class="product-container" data-product-id="dicr-classic">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="Product/foodlogistik/classic/classic.png" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="DicR Classic Würfelschneider">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Miniaturansichten -->
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="Product/foodlogistik/classic/classic.png" alt="DicR Classic Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>DicR Classic – Leistungsstarker Würfelschneider</h2>
                <p>Der DicR Classic ist der stärkste Würfelschneider/Speckschneider seiner Klasse, ideal für präzises
                    Würfeln, Streifenschneiden, Scheibenschneiden oder Raspeln. Mit hoher Durchsatzleistung und hygienischem
                    Design optimiert er Ihre Produktion.</p>

                <h3>Ihre Vorteile:</h3>
                <ul>
                    <li>Starke Motorleistung von 2,6 kW für hohe Effizienz.</li>
                    <li>Stufenlos einstellbare Abschnittlänge bis 45 mm.</li>
                    <li>Hohe Durchsatzleistung mit bis zu 560 Abschnitten pro Minute.</li>
                    <li>Hygienetür für sauberes Arbeiten.</li>
                    <li>Fahrbar mit Lenkrollen für flexible Einsatzmöglichkeiten.</li>
                </ul>

                <h3>Innovative Funktionen:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Funktionen</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Starke Motorleistung</strong>: 2,6 kW für effiziente Verarbeitung.</li>
                                <li><strong>Abschnittlänge</strong>: Stufenlos einstellbar bis 45 mm.</li>
                                <li><strong>Durchsatzleistung</strong>: Bis 560 Abschnitte pro Minute.</li>
                                <li><strong>Hygienetür</strong>: Für sauberes und sicheres Arbeiten.</li>
                                <li><strong>Mobilität</strong>: Fahrbar mit Lenkrollen.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <h3>Technische Daten:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Technische Daten</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Motorleistung:</strong> 2,6 kW</li>
                                <li><strong>Abschnittlänge:</strong> Stufenlos bis 45 mm</li>
                                <li><strong>Durchsatzleistung:</strong> Bis 560 Abschnitte/Minute</li>
                                <li><strong>Mobilität:</strong> Fahrbar mit Lenkrollen</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <h3>Lieferumfang:</h3>
                <ul>
                    <li>DicR Classic Würfelschneider</li>
                    <li>Hygienetür</li>
                    <li>Lenkrollen</li>
                </ul>

                <p><em>Interesse geweckt? Kontaktieren Sie uns für ein maßgeschneidertes Angebot!</em></p>
            </div>
        </div>
        <!-- Strukturierte Daten für SEO -->
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Product",
                "name": "DicR Classic Würfelschneider",
                "description": "Der DicR Classic ist der stärkste Würfelschneider/Speckschneider seiner Klasse, ideal für präzises Würfeln, Streifenschneiden, Scheibenschneiden oder Raspeln.",
                "brand": {
                    "@type": "Brand",
                    "name": "Foodlogistik"
                },
                "offers": {
                    "@type": "Offer",
                    "priceCurrency": "EUR",
                    "availability": "https://schema.org/InStock",
                    "url": "https://as-technical.de/speckschneider.php"
                },
                "image": "https://as-technical.de/Product/foodlogistik/classic/classic.png"
            }
            </script>
    <?php } ?>

    <?php
    // Produkt 2: DicR Comfort
    if ($selected_product === null || $selected_product === 'dicr-comfort') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_dicrcomfort';
        ?>
        <div class="product-container" data-product-id="dicr-comfort">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="Product/foodlogistik/comfort/comfort1.png" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="DicR Comfort Würfelschneider">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Miniaturansichten -->
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="Product/foodlogistik/comfort/comfort1.png" alt="DicR Comfort Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>DicR Comfort – Vielseitiger Würfelschneider, Speckschneider</h2>
                <p>Der DicR Comfort bietet maximale Flexibilität mit moderner Steuerung und optionaler Beschickung. Perfekt
                    für Würfeln, Streifenschneiden, Scheibenschneiden oder Raspeln in anspruchsvollen Produktionen.</p>

                <h3>Ihre Vorteile:</h3>
                <ul>
                    <li>SPS-Steuerung mit Farb-Touchscreen oder mechanische Bedienelemente.</li>
                    <li>Optionale Säulenbeschickung für 200-Liter-Wagen oder Lift für Euro-Kisten.</li>
                    <li>Kontinuierlicher Abtransport über Austrageband oder Produktauslass.</li>
                    <li>Hygienisches Design für einfache Reinigung.</li>
                </ul>

                <h3>Innovative Funktionen:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Funktionen</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Steuerung</strong>: SPS mit Farb-Touchscreen oder mechanisch.</li>
                                <li><strong>Beschickung</strong>: Säulenbeschickung oder Lift (optional).</li>
                                <li><strong>Abtransport</strong>: Austrageband oder Produktauslass.</li>
                                <li><strong>Hygienisches Design</strong>: Für einfache Reinigung.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <h3>Technische Daten:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Technische Daten</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Steuerung:</strong> SPS mit Farb-Touchscreen oder mechanisch</li>
                                <li><strong>Beschickung:</strong> Säulenbeschickung oder Lift (optional)</li>
                                <li><strong>Abtransport:</strong> Austrageband oder Produktauslass</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <h3>Lieferumfang:</h3>
                <ul>
                    <li>DicR Comfort Würfelschneider</li>
                    <li>Optionale Beschickung</li>
                    <li>Austrageband oder Produktauslass</li>
                </ul>

                <p><em>Neugierig? Lassen Sie uns Ihre perfekte Lösung finden!</em></p>
            </div>
        </div>
        <!-- Strukturierte Daten für SEO -->
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Product",
                "name": "DicR Comfort Würfelschneider",
                "description": "Der DicR Comfort bietet maximale Flexibilität mit moderner Steuerung und optionaler Beschickung.",
                "brand": {
                    "@type": "Brand",
                    "name": "Foodlogistik"
                },
                "offers": {
                    "@type": "Offer",
                    "priceCurrency": "EUR",
                    "availability": "https://schema.org/InStock",
                    "url": "https://as-technical.de/speckschneider.php"
                },
                "image": "https://as-technical.de/Product/foodlogistik/comfort/comfort1.png"
            }
            </script>
    <?php } ?>

    <?php
    // Produkt 3: DicR Capacity
    if ($selected_product === null || $selected_product === 'dicr-capacity') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_dicrcapacity';
        ?>
        <div class="product-container" data-product-id="dicr-capacity">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="Product/foodlogistik/capacity/1.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="DicR Capacity Würfelschneider">
                        </div>
                        <div class="swiper-slide">
                            <img src="Product/foodlogistik/capacity/2.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="DicR Capacity Würfelschneider">
                        </div>
                        <div class="swiper-slide">
                            <img src="Product/foodlogistik/capacity/3.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="DicR Capacity Würfelschneider">
                        </div>
                        <div class="swiper-slide">
                            <img src="Product/foodlogistik/capacity/4.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="DicR Capacity Würfelschneider">
                        </div>
                        <div class="swiper-slide">
                            <img src="Product/foodlogistik/capacity/5.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="DicR Capacity Würfelschneider">
                        </div>
                        <div class="swiper-slide">
                            <img src="Product/foodlogistik/capacity/6.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="DicR Capacity Würfelschneider">
                        </div>
                        <div class="swiper-slide">
                            <img src="Product/foodlogistik/capacity/7.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="DicR Capacity Würfelschneider">
                        </div>
                        <div class="swiper-slide">
                            <img src="Product/foodlogistik/capacity/8.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="DicR Capacity Würfelschneider">
                        </div>
                        <div class="swiper-slide">
                            <img src="Product/foodlogistik/capacity/9.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="DicR Capacity Würfelschneider">
                        </div>
                        <div class="swiper-slide">
                            <img src="Product/foodlogistik/capacity/10.png" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="DicR Capacity Würfelschneider">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Miniaturansichten -->
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="Product/foodlogistik/capacity/1.png" alt="DicR Capacity Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="Product/foodlogistik/capacity/2.png" alt="DicR Capacity Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(2, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="Product/foodlogistik/capacity/3.png" alt="DicR Capacity Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(3, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="Product/foodlogistik/capacity/4.png" alt="DicR Capacity Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(4, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="Product/foodlogistik/capacity/5.png" alt="DicR Capacity Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(5, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="Product/foodlogistik/capacity/6.png" alt="DicR Capacity Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(6, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="Product/foodlogistik/capacity/7.png" alt="DicR Capacity Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(7, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="Product/foodlogistik/capacity/8.png" alt="DicR Capacity Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(8, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="Product/foodlogistik/capacity/9.png" alt="DicR Capacity Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(9, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="Product/foodlogistik/capacity/10.png" alt="DicR Capacity Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>DicR Capacity – Großvolumiger Würfelschneider</h2>
                <p>Der DicR Capacity ist ein halbautomatischer Würfelschneider mit einer großen Schneidkammer für hohe
                    Produktmengen. Ideal für Würfeln, Streifenschneiden oder Raspeln ohne umfangreiches Vorschneiden.</p>

                <h3>Ihre Vorteile:</h3>
                <ul>
                    <li>Große Schneidkammer mit bis zu 10,8 Litern Volumen.</li>
                    <li>Zeitersparnis durch minimales Vorschneiden.</li>
                    <li>Hohe Durchsatzleistung für große Produktionsmengen.</li>
                    <li>Robustes Design für den Dauereinsatz.</li>
                </ul>

                <h3>Innovative Funktionen:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Funktionen</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Schneidkammervolumen</strong>: Bis 10,8 Liter.</li>
                                <li><strong>Verarbeitungsmenge</strong>: Große Mengen pro Zyklus.</li>
                                <li><strong>Betriebsart</strong>: Halbautomatisch.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <h3>Technische Daten:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Technische Daten</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Schneidkammervolumen:</strong> Bis 10,8 Liter</li>
                                <li><strong>Verarbeitungsmenge:</strong> Große Mengen pro Zyklus</li>
                                <li><strong>Betriebsart:</strong> Halbautomatisch</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <h3>Lieferumfang:</h3>
                <ul>
                    <li>DicR Capacity Würfelschneider</li>
                </ul>

                <p><em>Bereit für Großproduktionen? Kontaktieren Sie uns für Details!</em></p>
            </div>
        </div>
        <!-- Strukturierte Daten für SEO -->
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Product",
                "name": "DicR Capacity Würfelschneider",
                "description": "Der DicR Capacity ist ein halbautomatischer Würfelschneider mit einer großen Schneidkammer für hohe Produktmengen.",
                "brand": {
                    "@type": "Brand",
                    "name": "Foodlogistik"
                },
                "offers": {
                    "@type": "Offer",
                    "priceCurrency": "EUR",
                    "availability": "https://schema.org/InStock",
                    "url": "https://as-technical.de/speckschneider.php"
                },
                "image": "https://as-technical.de/Product/foodlogistik/capacity/1.png"
            }
            </script>
    <?php } ?>

    <?php
    // Produkt 4: Shreddr
    if ($selected_product === null || $selected_product === 'shreddr') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_shreddr';
        ?>
        <div class="product-container" data-product-id="shreddr">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="Product/foodlogistik/Shreddr/Shreddr.png" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="Shreddr Schneidemaschine">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Miniaturansichten -->
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="Product/foodlogistik/Shreddr/Shreddr.png" alt="Shreddr Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>Shreddr – Spezialist für Gemüse und Obst</h2>
                <p>Der Shreddr ist optimiert für das kontinuierliche Schneiden von Gemüse und Obst in Würfel, Streifen und
                    Scheiben. Sein robustes Design und die einfache Reinigung machen ihn ideal für den Dauereinsatz.</p>

                <h3>Ihre Vorteile:</h3>
                <ul>
                    <li>Robustes Edelstahlgestell für hohe Belastungen.</li>
                    <li>Stufenlos regelbare Drehzahl für präzise Schnitte.</li>
                    <li>Perfekte Hygiene durch vollverschweißten Rahmen.</li>
                    <li>Wasseranschluss zum Durchspülen während des Schneidens.</li>
                    <li>Fahrbar mit Lenkrollen.</li>
                </ul>

                <h3>Innovative Funktionen:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Funktionen</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Material</strong>: Rostfreier Edelstahl.</li>
                                <li><strong>Drehzahl</strong>: Stufenlos regelbar.</li>
                                <li><strong>Mobilität</strong>: Fahrbar mit Lenkrollen.</li>
                                <li><strong>Sicherheitsstandard</strong>: International zertifiziert.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <h3>Technische Daten:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Technische Daten</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Material:</strong> Rostfreier Edelstahl</li>
                                <li><strong>Drehzahl:</strong> Stufenlos regelbar</li>
                                <li><strong>Mobilität:</strong> Fahrbar mit Lenkrollen</li>
                                <li><strong>Sicherheitsstandard:</strong> International zertifiziert</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <h3>Lieferumfang:</h3>
                <ul>
                    <li>Shreddr Schneidemaschine</li>
                    <li>Lenkrollen</li>
                </ul>

                <p><em>Optimieren Sie Ihre Verarbeitung! Kontaktieren Sie uns!</em></p>
            </div>
        </div>
        <!-- Strukturierte Daten für SEO -->
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Product",
                "name": "Shreddr Schneidemaschine",
                "description": "Der Shreddr ist optimiert für das kontinuierliche Schneiden von Gemüse und Obst in Würfel, Streifen und Scheiben.",
                "brand": {
                    "@type": "Brand",
                    "name": "Foodlogistik"
                },
                "offers": {
                    "@type": "Offer",
                    "priceCurrency": "EUR",
                    "availability": "https://schema.org/InStock",
                    "url": "https://as-technical.de/speckschneider.php"
                },
                "image": "https://as-technical.de/Product/foodlogistik/Shreddr/Shreddr.png"
            }
            </script>
    <?php } ?>

    <?php
    if (!$is_included) {
        ?>
        <script src="/scripts/swiper-bundle.min.js"></script>
        <script>
            // Initialisiere Swiper für jedes Produkt
            var swiper_dicrclassic = new Swiper('.mySwiper_dicrclassic', {
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev'
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });
            var swiper_dicrcomfort = new Swiper('.mySwiper_dicrcomfort', {
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev'
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });
            var swiper_dicrcapacity = new Swiper('.mySwiper_dicrcapacity', {
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev'
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });
            var swiper_shreddr = new Swiper('.mySwiper_shreddr', {
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