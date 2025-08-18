<?php
// vakuummischer.php

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
        <title>Vakuummischer & Tumbler von Vakona & Nowicki | Service & Beratung</title>
        <meta name="description"
            content="Entdecken Sie hochwertige Vakuummischer, Feinkostmischer und Tumbler von Vakona und Nowicki. Maßgeschneiderte Lösungen mit Service, Reparatur und technischer Beratung für Ihre Produktion." />
        <meta name="keywords"
            content="Vakuummischer, Feinkostmischer, Tumbler, Vakona, Nowicki, Service, Angebot, Reparatur, technische Beratung, FM 60-250 STL, VM 250-500 STL, VM 750-1800 STL" />
        <meta name="robots" content="index, follow" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="/styles/swiper-bundle.min.css" />
        <link rel="stylesheet" href="swiperpic.css" />


    </head>

    <body>
        <?php include 'header.php'; ?>
        <!-- Einführung -->
        <div class="leistungen">
            <h2>Ihre perfekte Misch- und Tumblerlösung – Effizient, Zuverlässig, Maßgeschneidert</h2>
            <p>Suchen Sie einen Vakuummischer, Feinkostmischer oder Tumbler, der Ihre Produktion optimiert? Mit unseren
                Partnern Vakona und Nowicki bieten wir Ihnen erstklassige Geräte, technischen Support und individuelle
                Beratung – alles aus einer Hand.</p>
            <p>Unsere Lösungen garantieren eine effektive Marinierung, verbesserte Textur und höchste Qualität für Ihre
                Produkte. Lernen Sie unsere vielseitigen Mischer und Tumbler kennen, die flexibel an Ihre Anforderungen
                angepasst werden können!</p>
        </div>
        <div id="image-overlay">
            <img src="" alt="Vollbildansicht Vakuummischer" />
            <video controls style="display: none;"></video>
        </div>
    <?php } ?>

    <?php
    // Produkt 1: FM 60-250 STL
    if ($selected_product === null || $selected_product === 'fm-60-250-stl') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_fm60250stl';
        ?>
        <div class="product-container" data-product-id="fm-60-250-stl">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/Product/vakona/FM-100-STL.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="Vakona Feinkostmischer FM 60-250 STL">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Miniaturansichten -->
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/vakona/FM-100-STL.png" alt="Vakona Feinkostmischer FM 60-250 STL Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>FM 60-250 STL – Flexibler Feinkostmischer</h2>
                <p>Der <strong>Vakona Feinkostmischer FM 60-250 STL</strong> ist ideal für kleinere bis mittlere
                    Produktionen in der Lebensmittelindustrie. Mit anpassbaren Geschwindigkeiten und robustem Design sorgt
                    er für optimale Mischergebnisse bei der Verarbeitung von Feinkost, Fleisch- und Fischprodukten.</p>

                <h3>Ihre Vorteile:</h3>
                <ul>
                    <li>Hohe Flexibilität durch variable Geschwindigkeiten</li>
                    <li>Robustes Design aus rostfreiem Edelstahl</li>
                    <li>Einfache Handhabung und Reinigung</li>
                    <li>Optimale Mischergebnisse für verschiedene Produkte</li>
                    <li>Platzsparende Konstruktion</li>
                </ul>

                <h3>Innovative Funktionen:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Serienausstattung</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Umdrehung des Armes mit verschiedenen Geschwindigkeiten (FM 60–220)</li>
                                <li>Stufenlos regelbare Umdrehungsgeschwindigkeit (FM 250)</li>
                                <li>Mengarm inkl. Abstreifer mit Druckknopfsystem</li>
                                <li>Manuell kippbarer Behälter (FM 60–220)</li>
                                <li>Elektrisches Schwenken des Behälters (FM 250)</li>
                                <li>2-fach gebremste Räder mit Feststeller (bis FM 250)</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <h3>Optionen:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Optionen</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Computer-Steuerung oder Touch-Screen-Steuerung</li>
                                <li>Hydraulische Beschickung oder Mastbeschickung für 200 l Normwagen</li>
                                <li>Elektrisches Schwenken des Behälters (FM 60–220)</li>
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
                                        <th>FM 60</th>
                                        <th>FM 100</th>
                                        <th>FM 150</th>
                                        <th>FM 220</th>
                                        <th>FM 250</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Behältervolumen</td>
                                        <td>60 l</td>
                                        <td>100 l</td>
                                        <td>150 l</td>
                                        <td>220 l</td>
                                        <td>250 l</td>
                                    </tr>
                                    <tr>
                                        <td>Max. Füllmenge</td>
                                        <td>45 kg</td>
                                        <td>75 kg</td>
                                        <td>110 kg</td>
                                        <td>160 kg</td>
                                        <td>180 kg</td>
                                    </tr>
                                    <tr>
                                        <td>Anschlusswert</td>
                                        <td>0,55 kW</td>
                                        <td>0,75 kW</td>
                                        <td>1,1 kW</td>
                                        <td>1,5 kW</td>
                                        <td>2,2 kW</td>
                                    </tr>
                                    <tr>
                                        <td>Abmessungen (L x B x H)</td>
                                        <td>750 x 600 x 1100 mm</td>
                                        <td>900 x 700 x 1200 mm</td>
                                        <td>1000 x 800 x 1300 mm</td>
                                        <td>1100 x 900 x 1400 mm</td>
                                        <td>1200 x 1000 x 1500 mm</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <h3>Lieferumfang:</h3>
                <ul>
                    <li>Feinkostmischer FM 60-250 STL</li>
                    <li>Mengarm mit Abstreifer</li>
                    <li>2-fach gebremste Räder (bis FM 250)</li>
                </ul>

                <p><em>Interesse geweckt? Kontaktieren Sie uns für ein maßgeschneidertes Angebot!</em></p>
            </div>
        </div>
        <!-- Strukturierte Daten für SEO -->
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Product",
                "name": "Vakona Feinkostmischer FM 60-250 STL",
                "description": "Vielseitiger Feinkostmischer für kleinere bis mittlere Produktionen mit anpassbaren Geschwindigkeiten.",
                "brand": {
                    "@type": "Brand",
                    "name": "Vakona"
                },
                "offers": {
                    "@type": "Offer",
                    "priceCurrency": "EUR",
                    "availability": "https://schema.org/InStock",
                    "url": "https://as-technical.de/vakuummischer.php"
                },
                "image": "https://as-technical.de/Product/vakona/FM-100-STL.png"
            }
            </script>
    <?php } ?>

    <?php
    // Produkt 2: VM 250-500 STL
    if ($selected_product === null || $selected_product === 'vm-250-500-stl') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_vm250500stl';
        ?>
        <div class="product-container" data-product-id="vm-250-500-stl">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/Product/vakona/VM-300-STL.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="Vakona Vakuummischer VM 250-500 STL">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Miniaturansichten -->
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/vakona/VM-300-STL.png" alt="Vakona Vakuummischer VM 250-500 STL Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>VM 250-500 STL – Leistungsstarker Vakuummischer</h2>
                <p>Der <strong>Vakona Vakuummischer VM 250-500 STL</strong> ist ein hochmoderner Mischer für mittlere
                    Produktionen, ausgestattet mit Touch-Screen-Steuerung und automatischer Vakuumpumpe für effiziente
                    Ergebnisse bei der Verarbeitung von Fleisch, Fisch und anderen Lebensmitteln.</p>

                <h3>Ihre Vorteile:</h3>
                <ul>
                    <li>Hochleistungs-Vakuumpumpe für optimale Marinierung</li>
                    <li>Robustes Design aus rostfreiem Edelstahl</li>
                    <li>Präzise Steuerung durch Touch-Screen</li>
                    <li>Einfache Reinigung und Wartung</li>
                    <li>Flexible Anpassung an Produktionsanforderungen</li>
                </ul>

                <h3>Innovative Funktionen:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Serienausstattung</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Touch-Screen-Steuerung</li>
                                <li>Stufenloser Getriebemotor</li>
                                <li>Hochleistungs-Vakuumpumpe mit automatischem Vakuum</li>
                                <li>Massierarm inkl. Abstreifer mit Druckknopfsystem</li>
                                <li>Elektrisches Schwenken des Behälters</li>
                                <li>Deckelbetätigung mit Bedienerhilfe</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <h3>Optionen:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Optionen</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Automatisches Schwenksystem und Behälterpositionierung</li>
                                <li>Hydraulische Beschickung oder Mastbeschickung für 200 l Normwagen</li>
                                <li>Elektrische Deckelbetätigung</li>
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
                                        <th>VM 250</th>
                                        <th>VM 300</th>
                                        <th>VM 400</th>
                                        <th>VM 500</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Behältervolumen</td>
                                        <td>250 l</td>
                                        <td>300 l</td>
                                        <td>400 l</td>
                                        <td>500 l</td>
                                    </tr>
                                    <tr>
                                        <td>Max. Füllmenge</td>
                                        <td>180 kg</td>
                                        <td>220 kg</td>
                                        <td>300 kg</td>
                                        <td>360 kg</td>
                                    </tr>
                                    <tr>
                                        <td>Anschlusswert</td>
                                        <td>2,2 kW</td>
                                        <td>3,0 kW</td>
                                        <td>4,0 kW</td>
                                        <td>5,5 kW</td>
                                    </tr>
                                    <tr>
                                        <td>Abmessungen (L x B x H)</td>
                                        <td>1200 x 1000 x 1500 mm</td>
                                        <td>1300 x 1100 x 1600 mm</td>
                                        <td>1400 x 1200 x 1700 mm</td>
                                        <td>1500 x 1300 x 1800 mm</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <h3>Lieferumfang:</h3>
                <ul>
                    <li>Vakuummischer VM 250-500 STL</li>
                    <li>Touch-Screen-Steuerung</li>
                    <li>Massierarm mit Abstreifer</li>
                    <li>Hochleistungs-Vakuumpumpe</li>
                </ul>

                <p><em>Neugierig? Lassen Sie uns Ihre perfekte Lösung finden!</em></p>
            </div>
        </div>
        <!-- Strukturierte Daten für SEO -->
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Product",
                "name": "Vakona Vakuummischer VM 250-500 STL",
                "description": "Hochmoderner Vakuummischer für mittlere Produktionen mit Touch-Screen-Steuerung.",
                "brand": {
                    "@type": "Brand",
                    "name": "Vakona"
                },
                "offers": {
                    "@type": "Offer",
                    "priceCurrency": "EUR",
                    "availability": "https://schema.org/InStock",
                    "url": "https://as-technical.de/vakuummischer.php"
                },
                "image": "https://as-technical.de/Product/vakona/VM-300-STL.png"
            }
            </script>
    <?php } ?>

    <?php
    // Produkt 3: VM 750-1800 STL
    if ($selected_product === null || $selected_product === 'vm-750-1800-stl') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_vm7501800stl';
        ?>
        <div class="product-container" data-product-id="vm-750-1800-stl">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/Product/vakona/VM-750-STL-B.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="Vakona Vakuummischer VM 750-1800 STL">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Miniaturansichten -->
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/vakona/VM-750-STL-B.png" alt="Vakona Vakuummischer VM 750-1800 STL Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>VM 750-1800 STL – Vakuummischer für Großproduktionen</h2>
                <p>Der <strong>Vakona Vakuummischer VM 750-1800 STL</strong> ist für große Produktionsmengen konzipiert und
                    bietet modernste Technologie mit elektrischer Deckelbetätigung und Touch-Screen-Steuerung für effiziente
                    und präzise Verarbeitung.</p>

                <h3>Ihre Vorteile:</h3>
                <ul>
                    <li>Hochleistungs-Vakuumpumpe für optimale Marinierung</li>
                    <li>Robustes Design aus rostfreiem Edelstahl</li>
                    <li>Präzise Steuerung durch Touch-Screen</li>
                    <li>Einfache Reinigung und Wartung</li>
                    <li>Höchste Kapazität für industrielle Anwendungen</li>
                </ul>

                <h3>Innovative Funktionen:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Serienausstattung</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Touch-Screen-Steuerung</li>
                                <li>Stufenloser Getriebemotor</li>
                                <li>Hochleistungs-Vakuumpumpe mit automatischem Vakuum</li>
                                <li>Massierarm inkl. Abstreifer mit Druckknopfsystem</li>
                                <li>Elektrisches Schwenken des Behälters</li>
                                <li>Elektrische Deckelbetätigung</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <h3>Optionen:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Optionen</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Automatisches Schwenksystem und Behälterpositionierung</li>
                                <li>Hydraulische Beschickung oder Mastbeschickung für 200 l Normwagen</li>
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
                                        <th>VM 750</th>
                                        <th>VM 1000</th>
                                        <th>VM 1500</th>
                                        <th>VM 1800</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Behältervolumen</td>
                                        <td>750 l</td>
                                        <td>1000 l</td>
                                        <td>1500 l</td>
                                        <td>1800 l</td>
                                    </tr>
                                    <tr>
                                        <td>Max. Füllmenge</td>
                                        <td>550 kg</td>
                                        <td>750 kg</td>
                                        <td>1100 kg</td>
                                        <td>1300 kg</td>
                                    </tr>
                                    <tr>
                                        <td>Anschlusswert</td>
                                        <td>7,5 kW</td>
                                        <td>9,0 kW</td>
                                        <td>11,0 kW</td>
                                        <td>15,0 kW</td>
                                    </tr>
                                    <tr>
                                        <td>Abmessungen (L x B x H)</td>
                                        <td>1800 x 1400 x 2000 mm</td>
                                        <td>2000 x 1500 x 2200 mm</td>
                                        <td>2200 x 1600 x 2400 mm</td>
                                        <td>2400 x 1700 x 2600 mm</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <h3>Lieferumfang:</h3>
                <ul>
                    <li>Vakuummischer VM 750-1800 STL</li>
                    <li>Touch-Screen-Steuerung</li>
                    <li>Massierarm mit Abstreifer</li>
                    <li>Hochleistungs-Vakuumpumpe</li>
                    <li>Elektrische Deckelbetätigung</li>
                </ul>

                <p><em>Bereit für Großes? Kontaktieren Sie uns für ein Angebot!</em></p>
            </div>
        </div>
        <!-- Strukturierte Daten für SEO -->
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Product",
                "name": "Vakona Vakuummischer VM 750-1800 STL",
                "description": "Vakuummischer für große Produktionsmengen mit moderner Touch-Screen-Steuerung.",
                "brand": {
                    "@type": "Brand",
                    "name": "Vakona"
                },
                "offers": {
                    "@type": "Offer",
                    "priceCurrency": "EUR",
                    "availability": "https://schema.org/InStock",
                    "url": "https://as-technical.de/vakuummischer.php"
                },
                "image": "https://as-technical.de/Product/vakona/VM-750-STL-B.png"
            }
            </script>
    <?php } ?>

    <?php
    // Produkt 4: Nowicki Vakuum-Tumbler
    if ($selected_product === null || $selected_product === 'nowicki-vakuum-tumbler') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_nowickitumbler';
        ?>
        <div class="product-container" data-product-id="nowicki-vakuum-tumbler">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/Product/nowicki/tumbler/MA-2800 PSCH.png" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="Nowicki Vakuum-Tumbler MA-2800 PSCH">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/nowicki/tumbler/MA-3600 PSCH.png" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="Nowicki Vakuum-Tumbler MA-3600 PSCH">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/nowicki/tumbler/BC.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="Nowicki Steuerung">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Miniaturansichten -->
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/nowicki/tumbler/MA-2800 PSCH.png"
                            alt="Nowicki Vakuum-Tumbler MA-2800 PSCH Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/nowicki/tumbler/MA-3600 PSCH.png"
                            alt="Nowicki Vakuum-Tumbler MA-3600 PSCH Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(2, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/nowicki/tumbler/BC.png" alt="Nowicki Steuerung Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>Nowicki Vakuum-Tumbler – Effektive Marinierung</h2>
                <p>Die <strong>Nowicki Vakuum-Tumbler</strong> verbessern die Textur und den Geschmack Ihrer Produkte durch
                    effektive Marinierung. Ideal für Fleisch- und Lebensmittelverarbeitung in großen Mengen, mit robustem
                    Design und modernster Steuerung.</p>

                <h3>Ihre Vorteile:</h3>
                <ul>
                    <li>Hochwertige Verarbeitung aus rostfreiem Edelstahl</li>
                    <li>Effektive Marinierung für optimale Produktqualität</li>
                    <li>Hohe Kapazität für industrielle Anwendungen</li>
                    <li>Einfache Bedienung und Reinigung</li>
                    <li>Flexible Anpassung an Produktionsanforderungen</li>
                </ul>

                <h3>Innovative Funktionen:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Serienausstattung</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Robustes Design für industrielle Anwendungen</li>
                                <li>Automatische Vakuumsteuerung</li>
                                <li>Stufenlos einstellbare Tumbler-Geschwindigkeit</li>
                                <li>Ergonomische Bedienung</li>
                                <li>Touch-Screen-Steuerung mit programmierbaren Rezepten</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <h3>Optionen:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Optionen</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Erweiterte Steuerungssysteme (Touch-Screen)</li>
                                <li>Kühl- oder Heizfunktionen für spezifische Anwendungen</li>
                                <li>Automatische Beschickungssysteme</li>
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
                                        <th>MA-2800 PSCH</th>
                                        <th>MA-3600 PSCH</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Behältervolumen</td>
                                        <td>2800 l</td>
                                        <td>3600 l</td>
                                    </tr>
                                    <tr>
                                        <td>Max. Füllmenge</td>
                                        <td>2000 kg</td>
                                        <td>2600 kg</td>
                                    </tr>
                                    <tr>
                                        <td>Anschlusswert</td>
                                        <td>7,5 kW</td>
                                        <td>9,0 kW</td>
                                    </tr>
                                    <tr>
                                        <td>Abmessungen (L x B x H)</td>
                                        <td>3000 x 1800 x 2200 mm</td>
                                        <td>3200 x 1900 x 2400 mm</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <h3>Lieferumfang:</h3>
                <ul>
                    <li>Nowicki Vakuum-Tumbler (MA-2800 PSCH oder MA-3600 PSCH)</li>
                    <li>Touch-Screen-Steuerung</li>
                    <li>Automatische Vakuumsteuerung</li>
                </ul>

                <p><em>Optimieren Sie Ihre Produktion! Kontaktieren Sie uns für Details!</em></p>
            </div>
        </div>
        <!-- Strukturierte Daten für SEO -->
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Product",
                "name": "Nowicki Vakuum-Tumbler",
                "description": "Vakuum-Tumbler für effektive Marinierung in großen Mengen.",
                "brand": {
                    "@type": "Brand",
                    "name": "Nowicki"
                },
                "offers": {
                    "@type": "Offer",
                    "priceCurrency": "EUR",
                    "availability": "https://schema.org/InStock",
                    "url": "https://as-technical.de/vakuummischer.php"
                },
                "image": "https://as-technical.de/Product/nowicki/tumbler/MA-2800 PSCH.png"
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