<?php
// Pökelinjektor.php

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
        <title>Pökelinjektoren von Vakona & Nowicki | Service & Beratung</title>
        <meta name="description"
            content="Entdecken Sie Nowicki und Vakona Pökelinjektoren für präzise Fleischverarbeitung. Ideal für rotes Fleisch, Geflügel und Fisch – mit Touchscreen-Steuerung und hygienischem Design." />
        <meta name="keywords"
            content="Pökelinjektor, Soleinjektor, Nowicki Injektor, Fleischverarbeitung, Vakona, Service, PI 54, PI 75, PI 105, PI 81, PI 124, PI 184, PI 17 V, PI 21 V, PI 26 V, PI 52 V" />
        <meta name="robots" content="index, follow" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="/styles/swiper-bundle.min.css" />
        <link rel="stylesheet" href="swiperpic.css" />


    </head>

    <body>
        <?php include 'header.php'; ?>
        <!-- Einführung -->
        <div class="leistungen">
            <h2>Ihre Lösung für Pökelinjektoren – Präzision und Effizienz</h2>
            <p>Benötigen Sie einen zuverlässigen Pökelinjektor für Ihre Fleischverarbeitung? Mit den fortschrittlichen
                Injektoren von Vakona und Nowicki bieten wir Ihnen modernste Technologie für präzise Einsalzung von Fleisch,
                Geflügel oder Fisch, mit oder ohne Knochen. Profitieren Sie von unserem Service, Reparatur und individueller
                Beratung.</p>
            <p>Wir konfigurieren Ihre Anlage nach Ihren Bedürfnissen, damit Sie optimale Ergebnisse erzielen. Lassen Sie
                sich von unserer Expertise überzeugen!</p>
        </div>
        <div id="image-overlay">
            <img src="" alt="Vollbildansicht Pökelinjektor" />
            <video controls style="display: none;"></video>
        </div>
    <?php } ?>

    <?php
    // Produkt 1: Pökelinjektor PI 54-105
    if ($selected_product === null || $selected_product === 'pi-54-105') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_pi54105';
        ?>
        <div class="product-container" data-product-id="pi-54-105">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/Product/Vakona/VAKONA_PI_54-105-1.png" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="VAKONA Pökelinjektor PI 54-105">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Miniaturansichten -->
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/Vakona/VAKONA_PI_54-105-1.png" alt="VAKONA Pökelinjektor PI 54-105 Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>Pökelinjektor PI 54-105</h2>
                <p>Der <strong>VAKONA Pökelinjektor PI 54-105</strong> ist die ideale Lösung für die vollautomatische
                    Fleischverarbeitung in mittelgroßen und großen Betrieben. Mit robustem Design und modernster Technologie
                    ermöglicht dieser Injektor eine präzise und effiziente Einsalzung von Fleisch, Geflügel oder Fisch – mit
                    oder ohne Knochen. Dank der fortschrittlichen Touchscreen-Steuerung und anpassbaren Prozessparametern
                    optimieren Sie Ihre Produktion und erzielen gleichbleibend hochwertige Ergebnisse.</p>

                <h3>Ihre Vorteile:</h3>
                <ul>
                    <li>Robuste Verarbeitung für den Dauereinsatz</li>
                    <li>Kompakte Bauweise für platzsparende Integration</li>
                    <li>Hohe Einspritzgenauigkeit für gleichmäßige Ergebnisse</li>
                    <li>Einfache Handhabung und Wartungsfreundlichkeit</li>
                    <li>Hohe Funktionalität und Flexibilität</li>
                    <li>Einfache Reinigung für maximale Hygiene</li>
                </ul>

                <h3>Innovative Funktionen:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Serienausstattung</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Bedienerfreundliches und ergonomisches Industriedesign</li>
                                <li>Direkter Antrieb durch Servotechnik</li>
                                <li>Präzisionsnadelköpfe mit Schnellwechsel-Nadel-Brücken-System</li>
                                <li>Vollständige Trennung des gesamten Pumpenkreislaufs von allen elektromechanischen
                                    Komponenten</li>
                                <li>Produktbezogene Pumpenauswahl</li>
                                <li>Vorfiltersystem mit elektronischer Überwachung</li>
                                <li>Vollautomatische Rotationsfilteranlagen</li>
                                <li>Prozessparameter stufenlos einstellbar</li>
                                <li>Spezialförderband aus Polyäthylen – einfach herausnehmbar</li>
                                <li>Touch-Screen Steuerung mit 100 Programmplätzen für Rezepturverwaltung, stufenloser
                                    Hubhöhenvorwahl, Taktzahl bis zu 50 Hübe/Minute, automatischem Stand-by Betrieb für
                                    Nadelkopf und Lakepumpe, hoher Injektionsgenauigkeit durch positioniergesteuertes
                                    Lakeventil</li>
                                <li>Stichbildveränderung über Bandpositionierung</li>
                                <li>Automatisches Reinigungsprogramm</li>
                                <li>USB/Ethernet und CAN-Bus serienmäßig</li>
                                <li>Pneumatische Einzelnadelfederung</li>
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
                                        <th>Model</th>
                                        <th>Injektionsnadeln</th>
                                        <th>Länge</th>
                                        <th>Breite</th>
                                        <th>Höhe</th>
                                        <th>Länge Förderband</th>
                                        <th>Arbeitsbreite</th>
                                        <th>max. Durchlasshöhe</th>
                                        <th>Arbeitshöhe</th>
                                        <th>Anschlusswert</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>PI 54</td>
                                        <td>54</td>
                                        <td>1750 mm</td>
                                        <td>860 mm</td>
                                        <td>2200 mm</td>
                                        <td>365 mm</td>
                                        <td>74/37/24,5 mm</td>
                                        <td>220 mm</td>
                                        <td>1130 mm</td>
                                        <td>7,0 kW</td>
                                    </tr>
                                    <tr>
                                        <td>PI 75</td>
                                        <td>75</td>
                                        <td>1750 mm</td>
                                        <td>860 mm</td>
                                        <td>2200 mm</td>
                                        <td>365 mm</td>
                                        <td>74/37/24,5 mm</td>
                                        <td>220 mm</td>
                                        <td>1130 mm</td>
                                        <td>7,0 kW</td>
                                    </tr>
                                    <tr>
                                        <td>PI 105</td>
                                        <td>105</td>
                                        <td>1750 mm</td>
                                        <td>860 mm</td>
                                        <td>2200 mm</td>
                                        <td>365 mm</td>
                                        <td>74/37/24,5 mm</td>
                                        <td>220 mm</td>
                                        <td>1130 mm</td>
                                        <td>7,0 kW</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <h3>Lieferumfang:</h3>
                <ul>
                    <li>Pökelinjektor PI 54-105 mit ausgewählter Konfiguration</li>
                    <li>Touch-Screen Steuerung</li>
                    <li>Spezialförderband</li>
                    <li>Filtersystem</li>
                </ul>

                <p><em>Interesse? Lassen Sie sich jetzt beraten!</em></p>
            </div>
        </div>
        <!-- Strukturierte Daten für SEO -->
        <script type="application/ld+json">
                {
                    "@context": "https://schema.org",
                    "@type": "Product",
                    "name": "VAKONA Pökelinjektor PI 54-105",
                    "description": "Automatische Pökelinjektoren speziell für die Anforderungen des Handwerks und Betrieben des Mittelstandes.",
                    "brand": {
                        "@type": "Brand",
                        "name": "VAKONA"
                    },
                    "offers": {
                        "@type": "Offer",
                        "priceCurrency": "EUR",
                        "availability": "https://schema.org/InStock",
                        "url": "https://as-technical.de/poekelinjektor.php"
                    },
                    "image": "https://as-technical.de/Product/Vakona/VAKONA_PI_54-105-1.png"
                }
                </script>
    <?php } ?>

    <?php
    // Produkt 2: Pökelinjektor PI 81-184
    if ($selected_product === null || $selected_product === 'pi-81-184') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_pi81184';
        ?>
        <div class="product-container" data-product-id="pi-81-184">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/Product/Vakona/VAKONA_PI_81-184.png" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="VAKONA Pökelinjektor PI 81-184">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Miniaturansichten -->
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/Vakona/VAKONA_PI_81-184.png" alt="VAKONA Pökelinjektor PI 81-184 Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>Pökelinjektor PI 81-184</h2>
                <p>Der <strong>VAKONA Pökelinjektor PI 81-184</strong> ist für große Produktionsmengen konzipiert und bietet
                    präzise Einsalzung mit hoher Effizienz. Ideal für industrielle Anwendungen in der Fleischverarbeitung.
                </p>

                <h3>Ihre Vorteile:</h3>
                <ul>
                    <li>Robuste Verarbeitung für den Dauereinsatz</li>
                    <li>Kompakte Bauweise für platzsparende Integration</li>
                    <li>Hohe Einspritzgenauigkeit für gleichmäßige Ergebnisse</li>
                    <li>Einfache Handhabung und Wartungsfreundlichkeit</li>
                    <li>Hohe Funktionalität und Flexibilität</li>
                    <li>Einfache Reinigung für maximale Hygiene</li>
                </ul>

                <h3>Innovative Funktionen:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Serienausstattung</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Bedienerfreundliches und ergonomisches Industriedesign</li>
                                <li>Direkter Antrieb durch Servotechnik</li>
                                <li>Präzisionsnadelköpfe mit Schnellwechsel-Nadel-Brücken-System</li>
                                <li>Vollständige Trennung des gesamten Pumpenkreislaufs von allen elektromechanischen
                                    Komponenten</li>
                                <li>Produktbezogene Pumpenauswahl</li>
                                <li>Vorfiltersystem mit elektronischer Überwachung</li>
                                <li>Vollautomatische Rotationsfilteranlagen</li>
                                <li>Prozessparameter stufenlos einstellbar</li>
                                <li>Spezialförderband aus Polyäthylen – einfach herausnehmbar</li>
                                <li>Touch-Screen Steuerung mit 100 Programmplätzen für Rezepturverwaltung, stufenloser
                                    Hubhöhenvorwahl, Taktzahl bis zu 50 Hübe/Minute, automatischem Stand-by Betrieb für
                                    Nadelkopf und Lakepumpe, hoher Injektionsgenauigkeit durch positioniergesteuertes
                                    Lakeventil</li>
                                <li>Stichbildveränderung über Bandpositionierung</li>
                                <li>Automatisches Reinigungsprogramm</li>
                                <li>USB/Ethernet und CAN-Bus serienmäßig</li>
                                <li>Pneumatische Einzelnadelfederung</li>
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
                                        <th>Model</th>
                                        <th>Injektionsnadeln</th>
                                        <th>Länge</th>
                                        <th>Breite</th>
                                        <th>Höhe</th>
                                        <th>Länge Förderband</th>
                                        <th>Arbeitsbreite</th>
                                        <th>max. Durchlasshöhe</th>
                                        <th>Arbeitshöhe</th>
                                        <th>Anschlusswert</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>PI 81</td>
                                        <td>81</td>
                                        <td>2250 mm</td>
                                        <td>1120 mm</td>
                                        <td>2400 mm</td>
                                        <td>480 mm</td>
                                        <td>90/45/30 mm</td>
                                        <td>220 mm</td>
                                        <td>1150 mm</td>
                                        <td>14,5 kW</td>
                                    </tr>
                                    <tr>
                                        <td>PI 124</td>
                                        <td>124</td>
                                        <td>2250 mm</td>
                                        <td>1120 mm</td>
                                        <td>2400 mm</td>
                                        <td>480 mm</td>
                                        <td>90/45/30 mm</td>
                                        <td>220 mm</td>
                                        <td>1150 mm</td>
                                        <td>14,5 kW</td>
                                    </tr>
                                    <tr>
                                        <td>PI 184</td>
                                        <td>184</td>
                                        <td>2250 mm</td>
                                        <td>1120 mm</td>
                                        <td>2400 mm</td>
                                        <td>480 mm</td>
                                        <td>90/45/30 mm</td>
                                        <td>220 mm</td>
                                        <td>1150 mm</td>
                                        <td>14,5 kW</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <h3>Lieferumfang:</h3>
                <ul>
                    <li>Pökelinjektor PI 81-184 mit ausgewählter Konfiguration</li>
                    <li>Touch-Screen Steuerung</li>
                    <li>Spezialförderband</li>
                    <li>Filtersystem</li>
                </ul>

                <p><em>Interesse? Lassen Sie sich jetzt beraten!</em></p>
            </div>
        </div>
        <!-- Strukturierte Daten für SEO -->
        <script type="application/ld+json">
                {
                    "@context": "https://schema.org",
                    "@type": "Product",
                    "name": "VAKONA Pökelinjektor PI 81-184",
                    "description": "Automatische Pökelinjektoren für große Produktionsmengen.",
                    "brand": {
                        "@type": "Brand",
                        "name": "VAKONA"
                    },
                    "offers": {
                        "@type": "Offer",
                        "priceCurrency": "EUR",
                        "availability": "https://schema.org/InStock",
                        "url": "https://as-technical.de/poekelinjektor.php"
                    },
                    "image": "https://as-technical.de/Product/Vakona/VAKONA_PI_81-184.png"
                }
                </script>
    <?php } ?>

    <?php
    // Produkt 3: Modell PI 17 V
    if ($selected_product === null || $selected_product === 'pi-17-v') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_pi17v';
        ?>
        <div class="product-container" data-product-id="pi-17-v">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/Product/vakona/PI17V.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="VAKONA Pökelinjektor PI 17 V">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Miniaturansichten -->
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/vakona/PI17V.png" alt="VAKONA Pökelinjektor PI 17 V Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>Modell PI 17 V</h2>
                <p>Der <strong>VAKONA Pökelinjektor PI 17 V</strong> ist speziell für kleinere Betriebe und
                    Handwerksanwendungen konzipiert. Mit einem direkten mechanischen Antrieb und präzisen Nadelköpfen bietet
                    er zuverlässige Einsalzung für Fleisch, Geflügel und Fisch.</p>

                <h3>Ihre Vorteile:</h3>
                <ul>
                    <li>Robuste Verarbeitung für den Dauereinsatz</li>
                    <li>Kompakte Bauweise für platzsparende Integration</li>
                    <li>Hohe Einspritzgenauigkeit für gleichmäßige Ergebnisse</li>
                    <li>Einfache Handhabung und Wartungsfreundlichkeit</li>
                </ul>

                <h3>Innovative Funktionen:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Serienausstattung</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Direkter mechanischer Antrieb für Nadelkopf und Band oberhalb des Pökelraums</li>
                                <li>Präzisionsnadelköpfe mit Schnellwechsel-Nadel-Brücken-System</li>
                                <li>Mechanische Federung jeder einzelnen Nadel für Produkte mit Knochen</li>
                                <li>Vollständige Trennung des gesamten Pumpenkreislaufs von allen elektromechanischen
                                    Komponenten</li>
                                <li>Standardausführung mit Edelstahl Kreiselpumpe</li>
                                <li>Produktbezogene Pumpenauswahl</li>
                                <li>Vorfiltersystem</li>
                                <li>Spezialförderband aus Polyäthylen, einfach herausnehmbar</li>
                                <li>Stichbildveränderung über mechanische Bandvorschubeinstellung</li>
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
                                <li>Halbautomatische Filteranlage</li>
                                <li>VHF H-Ausführung für Fisch und Geflügel</li>
                                <li>Steakermesservorsatz für knochenlose Produkte</li>
                                <li>Handspritzanschluss</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <h3>Lieferumfang:</h3>
                <ul>
                    <li>Pökelinjektor PI 17 V</li>
                    <li>Spezialförderband</li>
                    <li>Vorfiltersystem</li>
                </ul>

                <p><em>Interesse? Lassen Sie sich jetzt beraten!</em></p>
            </div>
        </div>
        <!-- Strukturierte Daten für SEO -->
        <script type="application/ld+json">
                {
                    "@context": "https://schema.org",
                    "@type": "Product",
                    "name": "VAKONA Pökelinjektor PI 17 V",
                    "description": "Automatische Pökelinjektoren speziell für die Anforderungen des Handwerks.",
                    "brand": {
                        "@type": "Brand",
                        "name": "VAKONA"
                    },
                    "offers": {
                        "@type": "Offer",
                        "priceCurrency": "EUR",
                        "availability": "https://schema.org/InStock",
                        "url": "https://as-technical.de/poekelinjektor.php"
                    },
                    "image": "https://as-technical.de/Product/vakona/PI17V.png"
                }
                </script>
    <?php } ?>

    <?php
    // Produkt 4: Modell PI 21 V
    if ($selected_product === null || $selected_product === 'pi-21-v') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_pi21v';
        ?>
        <div class="product-container" data-product-id="pi-21-v">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/Product/vakona/VAKONA_PI_21_V_offen.png" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="VAKONA Pökelinjektor PI 21 V">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Miniaturansichten -->
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/vakona/VAKONA_PI_21_V_offen.png" alt="VAKONA Pökelinjektor PI 21 V Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>Modell PI 21 V</h2>
                <p>Der <strong>VAKONA Pökelinjektor PI 21 V</strong> ist ein kompaktes Modell für Handwerksbetriebe mit
                    flexiblen Einsatzmöglichkeiten. Die moderne Steuerung ermöglicht präzise Anpassung für optimale
                    Einsalzung.</p>

                <h3>Ihre Vorteile:</h3>
                <ul>
                    <li>Robuste Verarbeitung für den Dauereinsatz</li>
                    <li>Kompakte Bauweise für platzsparende Integration</li>
                    <li>Hohe Einspritzgenauigkeit für gleichmäßige Ergebnisse</li>
                    <li>Einfache Handhabung und Wartungsfreundlichkeit</li>
                </ul>

                <h3>Innovative Funktionen:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Serienausstattung</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Direkter mechanischer Antrieb für Nadelkopf und Band oberhalb des Pökelraums</li>
                                <li>Präzisionsnadelköpfe mit Schnellwechsel-Nadel-Brücken-System</li>
                                <li>Mechanische Federung jeder einzelnen Nadel für Produkte mit Knochen</li>
                                <li>Vollständige Trennung des gesamten Pumpenkreislaufs von allen elektromechanischen
                                    Komponenten</li>
                                <li>Standardausführung mit Edelstahl Kreiselpumpe</li>
                                <li>Produktbezogene Pumpenauswahl</li>
                                <li>Vorfiltersystem</li>
                                <li>Spezialförderband aus Polyäthylen, einfach herausnehmbar</li>
                                <li>Stichbildveränderung über mechanische Bandvorschubeinstellung</li>
                                <li>Steuerung für stufenlose Regelung der Prozessparameter</li>
                                <li>20 Programmplätze für Rezepturverwaltung</li>
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
                                <li>Halbautomatische Filteranlage VHF</li>
                                <li>H-Ausführung für Fisch und Geflügel</li>
                                <li>Steakermesservorsatz für knochenlose Produkte</li>
                                <li>Handspritzanschluss</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <h3>Lieferumfang:</h3>
                <ul>
                    <li>Pökelinjektor PI 21 V</li>
                    <li>Spezialförderband</li>
                    <li>Vorfiltersystem</li>
                </ul>

                <p><em>Interesse? Lassen Sie sich jetzt beraten!</em></p>
            </div>
        </div>
        <!-- Strukturierte Daten für SEO -->
        <script type="application/ld+json">
                {
                    "@context": "https://schema.org",
                    "@type": "Product",
                    "name": "VAKONA Pökelinjektor PI 21 V",
                    "description": "Automatische Pökelinjektoren speziell für Handwerksbetriebe mit moderner Steuerung.",
                    "brand": {
                        "@type": "Brand",
                        "name": "VAKONA"
                    },
                    "offers": {
                        "@type": "Offer",
                        "priceCurrency": "EUR",
                        "availability": "https://schema.org/InStock",
                        "url": "https://as-technical.de/poekelinjektor.php"
                    },
                    "image": "https://as-technical.de/Product/vakona/VAKONA_PI_21_V_offen.png"
                }
                </script>
    <?php } ?>

    <?php
    // Produkt 5: Modell PI 26 V
    if ($selected_product === null || $selected_product === 'pi-26-v') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_pi26v';
        ?>
        <div class="product-container" data-product-id="pi-26-v">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/Product/vakona/PI26.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="VAKONA Pökelinjektor PI 26 V">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Miniaturansichten -->
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/vakona/PI26.png" alt="VAKONA Pökelinjektor PI 26 V Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>Modell PI 26 V</h2>
                <p>Der <strong>VAKONA Pökelinjektor PI 26 V</strong> bietet erweiterte Funktionalität mit unabhängigem
                    Bandantrieb und moderner Steuerung für präzise Einsalzung in Handwerksbetrieben.</p>

                <h3>Ihre Vorteile:</h3>
                <ul>
                    <li>Robuste Verarbeitung für den Dauereinsatz</li>
                    <li>Kompakte Bauweise für platzsparende Integration</li>
                    <li>Hohe Einspritzgenauigkeit für gleichmäßige Ergebnisse</li>
                    <li>Einfache Handhabung und Wartungsfreundlichkeit</li>
                </ul>

                <h3>Innovative Funktionen:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Serienausstattung</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Direkter mechanischer Antrieb für Nadelkopf und Band oberhalb des Pökelraums</li>
                                <li>Präzisionsnadelköpfe mit Schnellwechsel-Nadel-Brücken-System</li>
                                <li>Mechanische Federung jeder einzelnen Nadel für Produkte mit Knochen</li>
                                <li>Vollständige Trennung des gesamten Pumpenkreislaufs von allen elektromechanischen
                                    Komponenten</li>
                                <li>Standardausführung mit Edelstahl Kreiselpumpe</li>
                                <li>Produktbezogene Pumpenauswahl</li>
                                <li>Vorfiltersystem</li>
                                <li>Spezialförderband aus Polyäthylen, einfach herausnehmbar</li>
                                <li>Stichbildveränderung über mechanische Bandvorschubeinstellung</li>
                                <li>Steuerung für stufenlose Regelung der Prozessparameter und 20 Programmplätzen für
                                    Rezepturverwaltung</li>
                                <li>Stichbild ist über die Steuerung wählbar</li>
                                <li>Zusätzlich mit einem unabhängigen Bandantrieb</li>
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
                                <li>Halbautomatische Filteranlage VHF</li>
                                <li>H-Ausführung für Fisch und Geflügel</li>
                                <li>Steakermesservorsatz für knochenlose Produkte</li>
                                <li>Handspritzanschluss</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <h3>Lieferumfang:</h3>
                <ul>
                    <li>Pökelinjektor PI 26 V</li>
                    <li>Spezialförderband</li>
                    <li>Vorfiltersystem</li>
                </ul>

                <p><em>Interesse? Lassen Sie sich jetzt beraten!</em></p>
            </div>
        </div>
        <!-- Strukturierte Daten für SEO -->
        <script type="application/ld+json">
                {
                    "@context": "https://schema.org",
                    "@type": "Product",
                    "name": "VAKONA Pökelinjektor PI 26 V",
                    "description": "Automatische Pökelinjektoren mit unabhängigem Bandantrieb für Handwerksbetriebe.",
                    "brand": {
                        "@type": "Brand",
                        "name": "VAKONA"
                    },
                    "offers": {
                        "@type": "Offer",
                        "priceCurrency": "EUR",
                        "availability": "https://schema.org/InStock",
                        "url": "https://as-technical.de/poekelinjektor.php"
                    },
                    "image": "https://as-technical.de/Product/vakona/PI26.png"
                }
                </script>
    <?php } ?>

    <?php
    // Produkt 6: Modell PI 52 V
    if ($selected_product === null || $selected_product === 'pi-52-v') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_pi52v';
        ?>
        <div class="product-container" data-product-id="pi-52-v">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/Product/vakona/PI_52_V-1.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="VAKONA Pökelinjektor PI 52 V">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Miniaturansichten -->
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/vakona/PI_52_V-1.png" alt="VAKONA Pökelinjektor PI 52 V Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>Modell PI 52 V</h2>
                <p>Der <strong>VAKONA Pökelinjektor PI 52 V</strong> bietet erweiterte Funktionalität mit unabhängigem
                    Bandantrieb und moderner Steuerung für präzise Einsalzung in Handwerksbetrieben.</p>

                <h3>Ihre Vorteile:</h3>
                <ul>
                    <li>Robuste Verarbeitung für den Dauereinsatz</li>
                    <li>Kompakte Bauweise für platzsparende Integration</li>
                    <li>Hohe Einspritzgenauigkeit für gleichmäßige Ergebnisse</li>
                    <li>Einfache Handhabung und Wartungsfreundlichkeit</li>
                </ul>

                <h3>Innovative Funktionen:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Serienausstattung</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Direkter mechanischer Antrieb für Nadelkopf und Band oberhalb des Pökelraums</li>
                                <li>Präzisionsnadelköpfe mit Schnellwechsel-Nadel-Brücken-System</li>
                                <li>Mechanische Federung jeder einzelnen Nadel für Produkte mit Knochen</li>
                                <li>Vollständige Trennung des gesamten Pumpenkreislaufs von allen elektromechanischen
                                    Komponenten</li>
                                <li>Standardausführung mit Edelstahl Kreiselpumpe</li>
                                <li>Produktbezogene Pumpenauswahl</li>
                                <li>Vorfiltersystem</li>
                                <li>Spezialförderband aus Polyäthylen, einfach herausnehmbar</li>
                                <li>Stichbildveränderung über mechanische Bandvorschubeinstellung</li>
                                <li>Steuerung für stufenlose Regelung der Prozessparameter und 20 Programmplätzen für
                                    Rezepturverwaltung</li>
                                <li>Stichbild ist über die Steuerung wählbar</li>
                                <li>Zusätzlich mit einem unabhängigen Bandantrieb</li>
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
                                <li>Halbautomatische Filteranlage VHF</li>
                                <li>H-Ausführung für Fisch und Geflügel</li>
                                <li>Steakermesservorsatz für knochenlose Produkte</li>
                                <li>Handspritzanschluss</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <h3>Lieferumfang:</h3>
                <ul>
                    <li>Pökelinjektor PI 52 V</li>
                    <li>Spezialförderband</li>
                    <li>Vorfiltersystem</li>
                </ul>

                <p><em>Interesse? Lassen Sie sich jetzt beraten!</em></p>
            </div>
        </div>
        <!-- Strukturierte Daten für SEO -->
        <script type="application/ld+json">
                {
                    "@context": "https://schema.org",
                    "@type": "Product",
                    "name": "VAKONA Pökelinjektor PI 52 V",
                    "description": "Automatische Pökelinjektoren mit unabhängigem Bandantrieb für Handwerksbetriebe.",
                    "brand": {
                        "@type": "Brand",
                        "name": "VAKONA"
                    },
                    "offers": {
                        "@type": "Offer",
                        "priceCurrency": "EUR",
                        "availability": "https://schema.org/InStock",
                        "url": "https://as-technical.de/poekelinjektor.php"
                    },
                    "image": "https://as-technical.de/Product/vakona/PI_52_V-1.png"
                }
                </script>
    <?php } ?>

    <?php
    // Produkt 7: Nowicki Pökelinjektoren
    if ($selected_product === null || $selected_product === 'nowicki-injektor') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_nowickiinjektor';
        ?>
        <div class="product-container" data-product-id="nowicki-injektor">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/Product/nowicki/injector/MHM-21-84.png" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="Nowicki MHM-21 Pökelinjektor">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/nowicki/injector/MHM-39-156.png" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="Nowicki MHM-39 Pökelinjektor">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/nowicki/injector/nadeln.png" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="Nadeln für Nowicki Pökelinjektoren">
                        </div>
                        <div class="swiper-slide">
                            <video width="100%" height="400" controls>
                                <source src="/video/MHM68injector.mp4" type="video/mp4">
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
                        <img src="/Product/nowicki/injector/MHM-21-84.png" alt="Nowicki MHM-21 Pökelinjektor Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/nowicki/injector/MHM-39-156.png" alt="Nowicki MHM-39 Pökelinjektor Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(2, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/nowicki/injector/nadeln.png" alt="Nadeln für Nowicki Pökelinjektoren Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(3, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/assets/video.png" alt="Video für Nowicki Pökelinjektoren Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>Nowicki Pökelinjektoren</h2>
                <p>Entdecken Sie die hochmodernen <strong>Brine-Injectors</strong> von NOMA Nowicki Machinery – die perfekte
                    Lösung für präzise und effiziente Fleischverarbeitung! Unsere fortschrittlichen MHM-Injektoren sind
                    ideal für die Injektion von Pökellake in rotes Fleisch, Geflügel oder Fisch, mit oder ohne Knochen. Dank
                    innovativer Funktionen wie intuitiver Touchscreen-Steuerung, gleichmäßiger Pökelverteilung und einem
                    hygienischen, leicht zu reinigenden Design bieten sie maximale Flexibilität und Produktivität.</p>

                <h3>Ihre Vorteile:</h3>
                <ul>
                    <li>Niedrige und hohe Injektionsmengen</li>
                    <li>Stufenlose Regulierung der Geschwindigkeit von Kopf und Förderer (beim Modell MHM 21 optional)</li>
                    <li>Intuitives Touchscreen-Bedienfeld für einfache Bedienung</li>
                    <li>Gleichmäßige Verteilung der Sole für optimale Ergebnisse</li>
                    <li>Hocheffiziente Solekreiselpumpe aus Edelstahl</li>
                    <li>Stufenlose Soledruckregelung</li>
                    <li>Funktion zum Mischen und Abpumpen der Sole aus dem Tank (für FBN-Rotationsfilter)</li>
                    <li>Geschlossenes Solekreislaufsystem</li>
                    <li>Leicht zu reinigendes, mehrstufiges Solefiltersystem</li>
                </ul>

                <h3>Innovative Funktionen:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Injektionskopf</button>
                        <div class="accordion-content">
                            <ul>
                                <li>System multifunktionaler Injektionsköpfe (je nach Modell mit 2, 3 oder 4 Nadeln)</li>
                                <li>Austauschbarer Injektionskopf mit schneller Montage und Demontage</li>
                                <li>Individuell anpassbare Nadeln aus dem Nadelkatalog oder kundenspezifische
                                    Sonderanfertigungen</li>
                                <li>Optional: Schneckenpumpe für schwere Sole</li>
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
                                        <th>Typ</th>
                                        <th>Anzahl der Nadelhalter</th>
                                        <th>Max. Anzahl der Nadeln</th>
                                        <th>Länge (L)</th>
                                        <th>Breite (B)</th>
                                        <th>Höhe (H)</th>
                                        <th>Gewicht</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>MHM-21/84</td>
                                        <td>21 Stück</td>
                                        <td>bis zu 84</td>
                                        <td>1440 mm</td>
                                        <td>760 mm</td>
                                        <td>1850 mm</td>
                                        <td>330 kg</td>
                                    </tr>
                                    <tr>
                                        <td>MHM-39/156</td>
                                        <td>39 Stück</td>
                                        <td>bis zu 156</td>
                                        <td>1770 mm</td>
                                        <td>840 mm</td>
                                        <td>2000 mm</td>
                                        <td>430 kg</td>
                                    </tr>
                                    <tr>
                                        <td>MHM-68/204</td>
                                        <td>68 Stück</td>
                                        <td>bis zu 204</td>
                                        <td>1820 mm</td>
                                        <td>990 mm</td>
                                        <td>1970 mm</td>
                                        <td>490 kg</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <h3>Markierungen der Pökelinjektoren:</h3>
                <ul>
                    <li><strong>M</strong> – rotes Fleisch; Nadel-Durchmesser von 4 mm</li>
                    <li><strong>P</strong> – Geflügel; Nadel-Durchmesser von 3 mm</li>
                    <li><strong>PM</strong> – rotes Fleisch (Nadel-Durchmesser von 3 mm) und Geflügel (Nadel-Durchmesser von
                        3 mm)</li>
                    <li><strong>K</strong> – frisches Fleisch; Nadel-Durchmesser von 2 mm</li>
                    <li><strong>KS</strong> – kulinarische Injektion; Nadel-Durchmesser von 2 mm</li>
                </ul>

                <h3>Lieferumfang:</h3>
                <ul>
                    <li>Nowicki Pökelinjektor (MHM-Modell nach Wahl)</li>
                    <li>Touchscreen-Bedienfeld</li>
                    <li>Solekreiselpumpe</li>
                    <li>Solefiltersystem</li>
                </ul>

                <p><em>Interesse? Lassen Sie sich jetzt beraten!</em></p>
            </div>
        </div>
        <!-- Strukturierte Daten für SEO -->
        <script type="application/ld+json">
                {
                    "@context": "https://schema.org",
                    "@type": "Product",
                    "name": "Nowicki Pökelinjektoren",
                    "description": "Hochmoderne Brine-Injectors von NOMA Nowicki Machinery für präzise Fleischverarbeitung.",
                    "brand": {
                        "@type": "Brand",
                        "name": "NOMA Nowicki"
                    },
                    "offers": {
                        "@type": "Offer",
                        "priceCurrency": "EUR",
                        "availability": "https://schema.org/InStock",
                        "url": "https://as-technical.de/poekelinjektor.php"
                    },
                    "image": "https://as-technical.de/Product/nowicki/injector/MHM-21-84.png"
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