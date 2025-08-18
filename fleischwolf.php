<?php
// fleischwolf.php

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
        <title>Fleischwölfe von MADO & Nowicki | Service & Beratung</title>
        <meta name="description"
            content="Entdecken Sie Fleischwölfe von MADO und Nowicki für präzise Fleischverarbeitung. Ideal für Metzgereien und Gastronomie – mit Touchscreen-Steuerung und hygienischem Design." />
        <meta name="keywords"
            content="Fleischwolf, Automatenwolf, Extruderwolf, MADO Fleischwolf, Nowicki Fleischwolf, Fleischverarbeitung, Service" />
        <meta name="robots" content="index, follow" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="/styles/swiper-bundle.min.css" />
        <link rel="stylesheet" href="swiperpic.css" />

    </head>

    <body>
        <?php include 'header.php'; ?>
        <!-- Einführung -->
        <div class="leistungen">
            <h2>Ihre Lösung für Fleischwölfe – Präzision und Effizienz</h2>
            <p>Benötigen Sie einen leistungsstarken Fleischwolf für Ihre Fleischverarbeitung? Mit den fortschrittlichen
                Fleischwölfen von MADO und Nowicki bieten wir Ihnen modernste Technologie für präzise Zerkleinerung von
                Fleisch, mit oder ohne Knochen. Profitieren Sie von unserem Service, Reparatur und individueller Beratung.
            </p>
            <p>Wir konfigurieren Ihre Anlage nach Ihren Bedürfnissen, damit Sie optimale Ergebnisse erzielen. Lassen Sie
                sich von unserer Expertise überzeugen!</p>
        </div>
        <div id="image-overlay">
            <img src="" alt="Vollbildansicht Fleischwolf" />
            <video controls style="display: none;"></video>
        </div>
    <?php } ?>

    <?php
    // Produkt 1: Automatenmischwolf MEW-724-D114-E52
    if ($selected_product === null || $selected_product === 'mew-724') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_mew724';
        ?>
        <div class="product-container" data-product-id="mew-724">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/Product/MADO/MEW-724.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="MADO Automatenmischwolf MEW-724-D114-E52">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Miniaturansichten -->
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/MADO/MEW-724.png" alt="MADO Automatenmischwolf MEW-724-D114-E52 Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>Automatenmischwolf MEW-724-D114-E52</h2>
                <p>Der <strong>MADO Automatenmischwolf MEW-724-D114-E52</strong> ist ein vielseitiger Fleischwolf für die
                    professionelle Fleischverarbeitung. Mit robustem Design und moderner Technologie ermöglicht er präzises
                    Mischen und Wolfen von Fleisch, ideal für Metzgereien und Gastronomie.</p>

                <h3>Ihre Vorteile:</h3>
                <ul>
                    <li>Komplett aus rostfreiem Edelstahl für maximale Hygiene</li>
                    <li>Hohe Effizienz durch kräftigen Motor mit zwei Geschwindigkeiten</li>
                    <li>Flexible Schneidsätze für verschiedene Anwendungen</li>
                    <li>Einfache Reinigung und Wartung</li>
                    <li>Optionale Kühlung für frische Produkte</li>
                </ul>

                <h3>Innovative Funktionen:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Funktionen</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Komplett mit Mengeinrichtung, Schneidsatz wahlweise System Unger D114 5-tlg. oder System
                                    Enterprise Gr. 52 SUPERLONGLIFE</li>
                                <li>Optionale Kühlung</li>
                                <li>Arbeitsschnecke aus Stahl und Kunststoff</li>
                                <li>Zentrale Mischwelle mit vier verschiedenen Mischerprofilen</li>
                                <li>Herausnehmbare Mischeinrichtung</li>
                                <li>Mechanischer Schneckenausstoßer</li>
                                <li>Edelstahlschnecke komplett auf Wunsch ohne Aufpreis</li>
                                <li>Optional Trennsatz zum Aussortieren von Knorpel und Sehnen</li>
                                <li>Hygienische, einfache Reinigung durch optimale Reinigungsmöglichkeiten</li>
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
                                        <td>Material</td>
                                        <td>Komplett aus rostfreiem Edelstahl</td>
                                    </tr>
                                    <tr>
                                        <td>Motor</td>
                                        <td>Kräftiger Motor mit zwei Geschwindigkeiten</td>
                                    </tr>
                                    <tr>
                                        <td>Schneidsatz</td>
                                        <td>System Unger D114 5-tlg. oder System Enterprise Gr. 52</td>
                                    </tr>
                                    <tr>
                                        <td>Optionen</td>
                                        <td>Kühlung, Trennsatz, Edelstahlschnecke</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <h3>Lieferumfang:</h3>
                <ul>
                    <li>Automatenmischwolf MEW-724-D114-E52</li>
                    <li>Mengeinrichtung</li>
                    <li>Schneidsatz (wahlweise)</li>
                    <li>Zentrale Mischwelle</li>
                </ul>

                <p><em>Interesse? Lassen Sie sich jetzt beraten!</em></p>
            </div>
        </div>
        <!-- Strukturierte Daten für SEO -->
        <script type="application/ld+json">
                    {
                        "@context": "https://schema.org",
                        "@type": "Product",
                        "name": "MADO Automatenmischwolf MEW-724-D114-E52",
                        "description": "Vielseitiger Fleischwolf für die professionelle Fleischverarbeitung mit robustem Design.",
                        "brand": {
                            "@type": "Brand",
                            "name": "MADO"
                        },
                        "offers": {
                            "@type": "Offer",
                            "priceCurrency": "EUR",
                            "availability": "https://schema.org/InStock",
                            "url": "https://as-technical.de/fleischwolf.php"
                        },
                        "image": "https://as-technical.de/Product/MADO/MEW-724.png"
                    }
                </script>
    <?php } ?>

    <?php
    // Produkt 2: Extruderwolf MMG 233-U200
    if ($selected_product === null || $selected_product === 'mmg-233') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_mmg233';
        ?>
        <div class="product-container" data-product-id="mmg-233">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/Product/MADO/MMG 233-U200.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="MADO Extruderwolf MMG 233-U200">
                        </div>
                        <div class="swiper-slide">
                            <video controls>
                                <source src="/video/ExtruderAnimation.mp4" type="video/mp4">
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
                        <img src="/Product/MADO/MMG 233-U200.png" alt="MADO Extruderwolf MMG 233-U200 Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/assets/video.png" alt="Video Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>Extruderwolf MMG 233-U200</h2>
                <p>Der <strong>MADO Extruderwolf MMG 233-U200</strong> ist ein leistungsstarker Fleischwolf für die
                    industrielle Fleischverarbeitung. Mit patentiertem Zwillingsschneidsystem und moderner Steuerung
                    optimiert er die Produktion für hohe Durchsatzleistungen.</p>

                <h3>Ihre Vorteile:</h3>
                <ul>
                    <li>Komplett aus rostfreiem Edelstahl für maximale Hygiene</li>
                    <li>Patentierter Zwillingsschneidsatz für präzise Verarbeitung</li>
                    <li>Stufenlose Regelung von Mischzeit und Drehzahl</li>
                    <li>Programmierbare Steuerung mit Touchscreen</li>
                    <li>Optionale automatische Beschickung</li>
                </ul>

                <h3>Innovative Funktionen:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Funktionen</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Patentierter Zwillingsschneidsystem, 5-tlg. Schneidsatz, 3-tlg. Misch-Schneidsatz</li>
                                <li>Elektrisch verriegelter Auslaufschutz</li>
                                <li>Zentrale Mischwelle</li>
                                <li>Stufenlos regelbare Mischzeit und Drehzahl der Zubringer und Arbeitsschnecken</li>
                                <li>Programmierbare Steuerung mit übersichtlichem Touchscreen</li>
                                <li>Alle Antriebe mit Frequenzumrichter gesteuert</li>
                                <li>Werkzeugwagen serienmäßig</li>
                                <li>Optional mit automatischer Beschickung für 200 Liter Normwagen</li>
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
                                        <td>Material</td>
                                        <td>Komplett aus rostfreiem Edelstahl</td>
                                    </tr>
                                    <tr>
                                        <td>Schneidsatz</td>
                                        <td>Patentierter Zwillingsschneidsatz, 5-tlg.</td>
                                    </tr>
                                    <tr>
                                        <td>Steuerung</td>
                                        <td>Programmierbare Steuerung mit Touchscreen</td>
                                    </tr>
                                    <tr>
                                        <td>Optionen</td>
                                        <td>Automatische Beschickung</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <h3>Lieferumfang:</h3>
                <ul>
                    <li>Extruderwolf MMG 233-U200</li>
                    <li>Patentierter Zwillingsschneidsatz</li>
                    <li>3-tlg. Misch-Schneidsatz</li>
                    <li>Werkzeugwagen</li>
                </ul>

                <p><em>Interesse? Lassen Sie sich jetzt beraten!</em></p>
            </div>
        </div>
        <!-- Strukturierte Daten für SEO -->
        <script type="application/ld+json">
                    {
                        "@context": "https://schema.org",
                        "@type": "Product",
                        "name": "MADO Extruderwolf MMG 233-U200",
                        "description": "Leistungsstarker Fleischwolf für industrielle Fleischverarbeitung mit patentiertem Zwillingsschneidsystem.",
                        "brand": {
                            "@type": "Brand",
                            "name": "MADO"
                        },
                        "offers": {
                            "@type": "Offer",
                            "priceCurrency": "EUR",
                            "availability": "https://schema.org/InStock",
                            "url": "https://as-technical.de/fleischwolf.php"
                        },
                        "image": "https://as-technical.de/Product/MADO/MMG 233-U200.png"
                    }
                </script>
    <?php } ?>

    <?php
    // Produkt 3: Extruderwolf MMG 235/239/243-U200
    if ($selected_product === null || $selected_product === 'mmg-235') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_mmg235';
        ?>
        <div class="product-container" data-product-id="mmg-235">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/Product/MADO/MMG235-239-243-U200.png" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="MADO Extruderwolf MMG 235/239/243-U200">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Miniaturansichten -->
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/MADO/MMG235-239-243-U200.png"
                            alt="MADO Extruderwolf MMG 235/239/243-U200 Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>Extruderwolf MMG 235/239/243-U200</h2>
                <p>Der <strong>MADO Extruderwolf MMG 235/239/243-U200</strong> ist eine Serie von leistungsstarken
                    Fleischwölfen für die industrielle Verarbeitung. Mit patentiertem Zwillingsschneidsystem und erweiterter
                    Ausstattung wie Reinigungsplattform optimiert er die Produktion für höchste Anforderungen.</p>

                <h3>Ihre Vorteile:</h3>
                <ul>
                    <li>Komplett aus rostfreiem Edelstahl für maximale Hygiene</li>
                    <li>Patentierter Zwillingsschneidsatz für präzise Verarbeitung</li>
                    <li>Stufenlose Regelung von Mischzeit und Drehzahl</li>
                    <li>Programmierbare Steuerung mit Touchscreen</li>
                    <li>Optionale automatische Beschickung</li>
                    <li>Reinigungsplattform für einfache Wartung</li>
                </ul>

                <h3>Innovative Funktionen:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Funktionen</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Patentierter Zwillingsschneidsystem, 5-tlg. Schneidsatz, 3-tlg. Misch-Schneidsatz</li>
                                <li>Elektrisch verriegelter Auslaufschutz</li>
                                <li>Zentrale Mischwelle</li>
                                <li>Reinigungsplattform</li>
                                <li>Stufenlos regelbare Mischzeit und Drehzahl der Zubringer und Arbeitsschnecken</li>
                                <li>Programmierbare Steuerung mit übersichtlichem Touchscreen</li>
                                <li>Alle Antriebe mit Frequenzumrichter gesteuert</li>
                                <li>Werkzeugwagen serienmäßig</li>
                                <li>Optional mit automatischer Beschickung für 200 Liter Normwagen</li>
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
                                        <td>Material</td>
                                        <td>Komplett aus rostfreiem Edelstahl</td>
                                    </tr>
                                    <tr>
                                        <td>Schneidsatz</td>
                                        <td>Patentierter Zwillingsschneidsatz, 5-tlg.</td>
                                    </tr>
                                    <tr>
                                        <td>Steuerung</td>
                                        <td>Programmierbare Steuerung mit Touchscreen</td>
                                    </tr>
                                    <tr>
                                        <td>Optionen</td>
                                        <td>Automatische Beschickung, Reinigungsplattform</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <h3>Lieferumfang:</h3>
                <ul>
                    <li>Extruderwolf MMG 235/239/243-U200</li>
                    <li>Patentierter Zwillingsschneidsatz</li>
                    <li>3-tlg. Misch-Schneidsatz</li>
                    <li>Werkzeugwagen</li>
                    <li>Reinigungsplattform</li>
                </ul>

                <p><em>Interesse? Lassen Sie sich jetzt beraten!</em></p>
            </div>
        </div>
        <!-- Strukturierte Daten für SEO -->
        <script type="application/ld+json">
                    {
                        "@context": "https://schema.org",
                        "@type": "Product",
                        "name": "MADO Extruderwolf MMG 235/239/243-U200",
                        "description": "Leistungsstarke Fleischwolf-Serie für industrielle Verarbeitung mit patentiertem Zwillingsschneidsystem.",
                        "brand": {
                            "@type": "Brand",
                            "name": "MADO"
                        },
                        "offers": {
                            "@type": "Offer",
                            "priceCurrency": "EUR",
                            "availability": "https://schema.org/InStock",
                            "url": "https://as-technical.de/fleischwolf.php"
                        },
                        "image": "https://as-technical.de/Product/MADO/MMG235-239-243-U200.png"
                    }
                </script>
    <?php } ?>

    <?php
    // Produkt 4: Werkzeugwagen MADO
    if ($selected_product === null || $selected_product === 'werkzeugwagen') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_werkzeugwagen';
        ?>
        <div class="product-container" data-product-id="werkzeugwagen">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/Product/MADO/Werkzeugwagen.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="MADO Werkzeugwagen">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Miniaturansichten -->
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/MADO/Werkzeugwagen.png" alt="MADO Werkzeugwagen Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>Werkzeugwagen MADO</h2>
                <p>Der <strong>MADO Werkzeugwagen</strong> ist das ideale Zubehör für Ihre Fleischwölfe. Er ermöglicht die
                    einfache Aufbewahrung und Organisation von Werkzeugen und Zubehör, hergestellt aus robustem rostfreiem
                    Edelstahl.</p>

                <h3>Ihre Vorteile:</h3>
                <ul>
                    <li>Robuste Konstruktion aus rostfreiem Edelstahl</li>
                    <li>Optimale Organisation und Aufbewahrung von Werkzeugen</li>
                    <li>Einfache Mobilität</li>
                    <li>Hygienisch und leicht zu reinigen</li>
                </ul>

                <h3>Innovative Funktionen:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Funktionen</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Praktische Aufbewahrung für Schneidsätze und Zubehör</li>
                                <li>Stabile Konstruktion für den täglichen Einsatz</li>
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
                                <li><strong>Funktion:</strong> Aufbewahrung und Transport von Werkzeugen</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <h3>Lieferumfang:</h3>
                <ul>
                    <li>Werkzeugwagen MADO</li>
                </ul>

                <p><em>Interesse? Lassen Sie sich jetzt beraten!</em></p>
            </div>
        </div>
        <!-- Strukturierte Daten für SEO -->
        <script type="application/ld+json">
                    {
                        "@context": "https://schema.org",
                        "@type": "Product",
                        "name": "MADO Werkzeugwagen",
                        "description": "Ideales Zubehör für Fleischwölfe zur Aufbewahrung und Organisation von Werkzeugen.",
                        "brand": {
                            "@type": "Brand",
                            "name": "MADO"
                        },
                        "offers": {
                            "@type": "Offer",
                            "priceCurrency": "EUR",
                            "availability": "https://schema.org/InStock",
                            "url": "https://as-technical.de/fleischwolf.php"
                        },
                        "image": "https://as-technical.de/Product/MADO/Werkzeugwagen.png"
                    }
                </script>
    <?php } ?>

    <?php
    // Produkt 5: Nowicki Automaten Winkelwolf
    if ($selected_product === null || $selected_product === 'nowicki') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_nowicki';
        ?>
        <div class="product-container" data-product-id="nowicki">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/Product/nowicki/fleischwolf/w-200b.png" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="Nowicki Automaten Winkelwolf W-200B">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/nowicki/fleischwolf/w-280b.png" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="Nowicki Automaten Winkelwolf W-280B">
                        </div>
                        <div class="swiper-slide">
                            <video controls>
                                <source src="/video/W-200B.mp4" type="video/mp4">
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
                        <img src="/Product/nowicki/fleischwolf/w-200b.png"
                            alt="Nowicki Automaten Winkelwolf W-200B Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/nowicki/fleischwolf/w-280b.png"
                            alt="Nowicki Automaten Winkelwolf W-280B Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(2, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/assets/video.png" alt="Video Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>Nowicki Automaten Winkelwolf</h2>
                <p>Der <strong>Nowicki Automaten Winkelwolf</strong> ist entwickelt zum Zerkleinern von gefrorenen
                    Fleischblöcken bis zu -22°C. Empfohlen für große Fleisch-, Fisch- und Tiernahrungsbetriebe mit hoher
                    Effizienz und hygienischem Design.</p>

                <h3>Ihre Vorteile:</h3>
                <ul>
                    <li>Hochwertige Ausführung aus Edelstahl</li>
                    <li>Hochwertiges Hackfleisch</li>
                    <li>Hohe Effizienz</li>
                    <li>Ausführung von Presskammer und Pressschnecke aus hochabriebfestem Edelstahl</li>
                    <li>Leicht zu reinigen</li>
                    <li>Kompatibel mit verschiedenen Ladesystemen</li>
                </ul>

                <h3>Innovative Funktionen:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Funktionen</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Zwei kompatible Antriebe der Zuführschnecke und der Pressschnecke für optimale
                                    Einstellung</li>
                                <li>Das Schneidsystem umfasst hochwertige Schneidgeräte</li>
                                <li>Reibungslose Steuerung der Futterschnecke</li>
                                <li>Automatische Anpassung der Vorschubgeschwindigkeit</li>
                                <li>Pressschnecke mit automatischem Ausstoßsystem</li>
                                <li>Einzigartige Konstruktion von Pressschnecken aus einem einzigen Stück Stahl</li>
                                <li>Je nach Produktpalette verschiedene Arten von Schnecken</li>
                                <li>Sicherheitssystem für sicheres Arbeiten</li>
                                <li>Mikroprozessor-Steuerungssystem für alle Arbeitsparameter</li>
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
                                        <th>W-200B</th>
                                        <th>W-280B</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Leistung</td>
                                        <td>Hohe Durchsatzleistung</td>
                                        <td>Hohe Durchsatzleistung</td>
                                    </tr>
                                    <tr>
                                        <td>Material</td>
                                        <td>Edelstahl</td>
                                        <td>Edelstahl</td>
                                    </tr>
                                    <tr>
                                        <td>Temperaturbereich</td>
                                        <td>Bis -22°C</td>
                                        <td>Bis -22°C</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <h3>Lieferumfang:</h3>
                <ul>
                    <li>Nowicki Automaten Winkelwolf (Modell nach Wahl)</li>
                    <li>Schneidsystem</li>
                    <li>Mikroprozessor-Steuerung</li>
                </ul>

                <p><em>Interesse? Lassen Sie sich jetzt beraten!</em></p>
            </div>
        </div>
        <!-- Strukturierte Daten für SEO -->
        <script type="application/ld+json">
                    {
                        "@context": "https://schema.org",
                        "@type": "Product",
                        "name": "Nowicki Automaten Winkelwolf",
                        "description": "Entwickelt zum Zerkleinern von gefrorenen Fleischblöcken bis zu -22°C für große Betriebe.",
                        "brand": {
                            "@type": "Brand",
                            "name": "Nowicki"
                        },
                        "offers": {
                            "@type": "Offer",
                            "priceCurrency": "EUR",
                            "availability": "https://schema.org/InStock",
                            "url": "https://as-technical.de/fleischwolf.php"
                        },
                        "image": "https://as-technical.de/Product/nowicki/fleischwolf/w-200b.png"
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