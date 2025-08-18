<?php
// verpackungsmaschinen.php

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
        <title>Verpackungsmaschinen von ZERMAT | AS Technical Solutions</title>
        <meta name="description" content="Entdecken Sie hochwertige Thermosiegel- und Vakuumverpackungsmaschinen von ZERMAT – ideal für Gastronomie, Lebensmittelproduktion und mehr. Qualität und Haltbarkeit garantiert." />
        <meta name="keywords" content="Verpackungsmaschinen, Thermosiegelmaschinen, Vakuumverpackungsmaschinen, ZERMAT, Lebensmittelverpackung, Gastronomie, Catering, Metzgerei" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    </head>

    <body>
        <?php include 'header.php'; ?>
        <!-- Einführung -->
        <div class="leistungen">
            <h2>Perfekte Verpackungslösungen – Frische und Qualität bewahren</h2>
            <p>Möchten Sie Ihre Lebensmittel hygienisch verpacken und deren Haltbarkeit verlängern? In Zusammenarbeit mit unserem Partner ZERMAT bieten wir Ihnen erstklassige Verpackungsmaschinen, die höchste Standards erfüllen. Ob Thermosiegelmaschinen für Schalen oder Vakuumverpackungsmaschinen für Beutel – wir haben die passende Lösung für Metzgereien, Gastronomiebetriebe, Cateringunternehmen und Lebensmittelhersteller.</p>
            <p>Unsere Maschinen überzeugen durch innovative Technologie, robuste Bauweise und einfache Bedienung. Verlängern Sie die Frische Ihrer Produkte, optimieren Sie Ihre Arbeitsprozesse und präsentieren Sie Ihre Waren in ansprechender Verpackung. Lernen Sie unser Sortiment kennen und finden Sie die perfekte Maschine für Ihre Anforderungen!</p>
        </div>

        <div id="image-overlay">
            <img src="" alt="Vollbildansicht Verpackungsmaschine" />
            <video controls style="display: none;"></video>
        </div>
    <?php } ?>

    <!-- Produkt 1: ZERMAT Thermosiegelmaschine TBG -->
    <?php
    if ($selected_product === null || $selected_product === 'zermat-tbg') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_zermatTBG';
    ?>
        <div class="product-container" data-product-id="zermat-tbg">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <!-- Platzhalter für Bilder -->
                        <div class="swiper-slide"><img src="Product/ZERMAT/TBG.jpeg
                        " class="fullscreen-toggle" style="cursor:zoom-in;" alt="ZERMAT TBG"></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="Product/ZERMAT/TBG.jpeg
                    " alt="ZERMAT TBG"></div>
                </div>
            </div>
            <div class="product-info">
                <h2>ZERMAT Thermosiegelmaschine TBG – Kompakt und Leistungsstark</h2>
                <p>Die ZERMAT Thermosiegelmaschine TBG ist die ideale Lösung für das hygienische Versiegeln von Lebensmitteln in Schalen. Perfekt für Metzgereien, Gastronomiebetriebe, Cateringunternehmen und Lebensmittelhersteller, die Wert auf Qualität, Haltbarkeit und saubere Präsentation legen.</p>
                <h4>Highlights:</h4>
                <ul>
                    <li>Vollautomatischer Siegelvorgang mit integriertem Folienschnitt</li>
                    <li>Möglichkeit zur Standardversiegelung oder mit Schutzgas (MAP)</li>
                    <li>Ergonomisches Schubladensystem mit Siegelkammer</li>
                    <li>Programmierbare Siegelzeit für perfekte Ergebnisse</li>
                    <li>Elektronische Temperaturkontrolle mit akustischer Zyklusanzeige</li>
                    <li>Hermetisch dichter, hygienischer Siegelprozess</li>
                    <li>Robuste Ausführung aus Edelstahl und Aluminium</li>
                    <li>Bedienfeld mit 10 speicherbaren Programmen</li>
                    <li>Maximale Sicherheit durch innenliegende Schweiß- und Schneidvorrichtung</li>
                    <li>Optionale Gaszufuhr zur Haltbarkeitsverlängerung</li>
                </ul>
                <h4>Technische Daten:</h4>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Technische Daten</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Max. Schalengröße:</strong> 190 x 260 mm</li>
                                <li><strong>Max. Folienbreite:</strong> 200 mm</li>
                                <li><strong>Max. Rollendurchmesser:</strong> 180 mm</li>
                                <li><strong>Abmessungen (offen):</strong> 300 x 610 x 690 mm</li>
                                <li><strong>Abmessungen (geschlossen):</strong> 300 x 610 x 465 mm</li>
                                <li><strong>Anschluss:</strong> 230 V</li>
                                <li><strong>Leistung:</strong> 750 W</li>
                                <li><strong>Gasanschluss:</strong> 2–4 mbar (optional)</li>
                                <li><strong>Gewicht:</strong> ca. 30 kg</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p><em>Interesse geweckt? Kontaktieren Sie uns für eine maßgeschneiderte Beratung!</em></p>
            </div>
        </div>
    <?php } ?>

    <!-- Produkt 2: ZERMAT Thermosiegelmaschine TBG PLUS -->
    <?php
    if ($selected_product === null || $selected_product === 'zermat-tbg-plus') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_zermatTBGPlus';
    ?>
        <div class="product-container" data-product-id="zermat-tbg-plus">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <!-- Platzhalter für Bilder -->
                        <div class="swiper-slide"><img src="Product/ZERMAT/TBGPlus.jpeg
                        " class="fullscreen-toggle" style="cursor:zoom-in;" alt="ZERMAT TBG PLUS"></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="Product/ZERMAT/TBGPlus.jpeg
                    " alt="ZERMAT TBG PLUS"></div>
                </div>
            </div>
            <div class="product-info">
                <h2>ZERMAT Thermosiegelmaschine TBG PLUS – Präzision und Effizienz</h2>
                <p>Die TBG PLUS ist die weiterentwickelte Version der bewährten ZERMAT TBG. Sie bietet höchste Präzision beim Versiegeln von Schalen für frische oder vorbereitete Lebensmittel – ideal für Gastronomie, Lebensmittelproduktion und Catering.</p>
                <h4>Highlights:</h4>
                <ul>
                    <li>Automatische Versiegelung mit integriertem Folienschnitt</li>
                    <li>Optionale Schutzgasbegasung (MAP) zur Haltbarkeitsverlängerung</li>
                    <li>Schnelles und ergonomisches Schubladensystem</li>
                    <li>Digitale Steuerung mit 10 programmierbaren Siegelprofilen</li>
                    <li>Elektronische Temperaturregelung mit akustischer Zyklusanzeige</li>
                    <li>Hygienische, hermetisch dichte Versiegelung</li>
                    <li>Robuste Bauweise aus Edelstahl und eloxiertem Aluminium</li>
                    <li>Kompakte Abmessungen für kleinere Arbeitsflächen</li>
                </ul>
                <h4>Technische Daten:</h4>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Technische Daten</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Max. Schalengröße:</strong> 190 x 260 mm</li>
                                <li><strong>Max. Folienbreite:</strong> 200 mm</li>
                                <li><strong>Max. Rollendurchmesser:</strong> 180 mm</li>
                                <li><strong>Maße (offen):</strong> 300 x 610 x 690 mm</li>
                                <li><strong>Maße (geschlossen):</strong> 300 x 610 x 465 mm</li>
                                <li><strong>Stromanschluss:</strong> 230 V</li>
                                <li><strong>Leistung:</strong> 750 W</li>
                                <li><strong>Gasanschluss:</strong> 2–4 mbar (optional)</li>
                                <li><strong>Gewicht:</strong> ca. 30 kg</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p><em>Bereit für die nächste Stufe in der Lebensmittelverpackung? Kontaktieren Sie uns!</em></p>
            </div>
        </div>
    <?php } ?>

    <!-- Produkt 3: ZERMAT JazzVac Mini -->
    <?php
    if ($selected_product === null || $selected_product === 'zermat-jazzvac-mini') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_zermatJazzVacMini';
    ?>
        <div class="product-container" data-product-id="zermat-jazzvac-mini">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <!-- Platzhalter für Bilder -->
                        <div class="swiper-slide"><img src="Product/ZERMAT/JazzVacMini.jpeg
                        " class="fullscreen-toggle" style="cursor:zoom-in;" alt="ZERMAT JazzVac Mini"></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="Product/ZERMAT/JazzVacMini.jpeg
                    " alt="ZERMAT JazzVac Mini"></div>
                </div>
            </div>
            <div class="product-info">
                <h2>ZERMAT JazzVac Mini – Kompakte Vakuumverpackungsmaschine</h2>
                <p>Die JazzVac Mini ist die kleinste professionelle Vakuumverpackungsmaschine von ZERMAT. Sie eignet sich hervorragend für Küchen, kleine Geschäfte, Labore oder Verkaufsstellen mit begrenztem Platzangebot.</p>
                <h4>Highlights:</h4>
                <ul>
                    <li>Vollautomatischer Vakuum- und Schweißzyklus</li>
                    <li>Digitales Bedienfeld mit einfacher Programmauswahl</li>
                    <li>Einstellbare Vakuumzeit, Schweißzeit und optionale Gaszufuhr (MAP)</li>
                    <li>Hochwertige Vakuumpumpe für schnelles Verpacken</li>
                    <li>Kammer aus rostfreiem Edelstahl, leicht zu reinigen</li>
                    <li>Transparenter Deckel zur Sichtkontrolle</li>
                    <li>Kompaktes, mobiles Tischgerät</li>
                    <li>Geeignet für Beutel unterschiedlicher Stärke und Materialien</li>
                    <li>Optionale Begasung zur Verlängerung der Haltbarkeit</li>
                </ul>
                <h4>Anwendungsbereiche:</h4>
                <ul>
                    <li>Metzgereien</li>
                    <li>Gastronomiebetriebe</li>
                    <li>Käse- und Fischverarbeitung</li>
                    <li>Feinkost & Catering</li>
                    <li>Hofläden</li>
                    <li>SB-Verpackung</li>
                </ul>
                <h4>Technische Daten:</h4>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Technische Daten</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Kammergröße:</strong> 310 x 280 x 85 mm</li>
                                <li><strong>Schweißbalken:</strong> 280 mm</li>
                                <li><strong>Vakuumpumpe:</strong> Busch 4 m³/h</li>
                                <li><strong>Zykluszeit:</strong> 15–50 Sekunden</li>
                                <li><strong>Gewicht:</strong> 25 kg</li>
                                <li><strong>Abmessungen (geschlossen):</strong> 450 x 330 x 295 mm</li>
                                <li><strong>Abmessungen (offen):</strong> 450 x 330 x 565 mm</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p><em>Die perfekte Lösung für kleine Betriebe – kontaktieren Sie uns!</em></p>
            </div>
        </div>
    <?php } ?>

    <!-- Produkt 4: ZERMAT BluesVac 52 -->
    <?php
    if ($selected_product === null || $selected_product === 'zermat-bluesvac-52') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_zermatBluesVac52';
    ?>
        <div class="product-container" data-product-id="zermat-bluesvac-52">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <!-- Platzhalter für Bilder -->
                        <div class="swiper-slide"><img src="Product/ZERMAT/BluesVac52.jpeg
                        " class="fullscreen-toggle" style="cursor:zoom-in;" alt="ZERMAT BluesVac 52"></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="Product/ZERMAT/BluesVac52.jpeg
                    " alt="ZERMAT BluesVac 52"></div>
                </div>
            </div>
            <div class="product-info">
                <h2>ZERMAT BluesVac 52 – Professionelle Tisch-Vakuumverpackungsmaschine</h2>
                <p>Die BluesVac 52 ist eine leistungsstarke Tisch-Vakuumverpackungsmaschine, ideal für Metzgereien, Gastronomiebetriebe und Feinkostläden. Mit robuster Edelstahlkonstruktion und fortschrittlichen Funktionen für zuverlässige Leistung.</p>
                <h4>Highlights:</h4>
                <ul>
                    <li>100% Edelstahlkonstruktion (AISI 304) für Langlebigkeit und Hygiene</li>
                    <li>Nahtlos gefertigte Innenkammer mit abgerundeten Ecken</li>
                    <li>Ovaler Deckel aus hochfestem Methacrylat</li>
                    <li>Steuerungspanel mit 10 programmierbaren Einstellungen</li>
                    <li>Sensorbasierte Vakuumkontrolle mit Zeitfunktion</li>
                    <li>Steuerung der Schweißzeit</li>
                    <li>Programm zur Wartung der Vakuumpumpe</li>
                    <li>Sanfter Lufteinlass („Softair“) zur Vermeidung von Produktschäden</li>
                    <li>Not-Aus-Taste zur Unterbrechung des Zyklus</li>
                    <li>3 Jahre Garantie</li>
                </ul>
                <h4>Optionale Ausstattung:</h4>
                <ul>
                    <li>Zweiter Schweißbalken</li>
                    <li>Schrägstellplatte für Flüssigkeiten</li>
                    <li>Gasinjektion zur Verlängerung der Haltbarkeit</li>
                    <li>Abschneidesiegelung</li>
                    <li>Fahrbarer Unterwagen mit Regalen</li>
                    <li>Externes Vakuum-Kit für Gastrovac-Behälter</li>
                    <li>LED-Steuerungspanel mit Etikettendruckeroption</li>
                    <li>Siedepunktdetektor für Flüssigkeiten</li>
                </ul>
                <h4>Technische Daten:</h4>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Technische Daten</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Nutzbare Kammergröße:</strong> 520 mm</li>
                                <li><strong>Kammerabmessungen:</strong> 520 × 410 × 185 mm</li>
                                <li><strong>Außenabmessungen:</strong> 700 × 530 × 440 mm</li>
                                <li><strong>Schweißbalkenlänge:</strong> 2 × 410 mm</li>
                                <li><strong>Vakuumpumpe:</strong> Busch 21 m³/h</li>
                                <li><strong>Elektrische Leistung:</strong> 0,75 kW</li>
                                <li><strong>Stromanschluss:</strong> 220 V, einphasig</li>
                                <li><strong>Gewicht:</strong> 49 kg</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p><em>Optimieren Sie Ihre Verpackungsprozesse – kontaktieren Sie uns!</em></p>
            </div>
        </div>
    <?php } ?>

    <!-- Produkt 5: ZERMAT CV100 -->
    <?php
    if ($selected_product === null || $selected_product === 'zermat-cv100') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_zermatCV100';
    ?>
        <div class="product-container" data-product-id="zermat-cv100">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <!-- Platzhalter für Bilder -->
                        <div class="swiper-slide"><img src="Product/ZERMAT/CV100.jpeg
                        " class="fullscreen-toggle" style="cursor:zoom-in;" alt="ZERMAT CV100"></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="Product/ZERMAT/CV100.jpeg
                    " alt="ZERMAT CV100"></div>
                </div>
            </div>
            <div class="product-info">
                <h2>ZERMAT CV100 – Industrie-Vakuumverpackungsmaschine</h2>
                <p>Die ZERMAT CV100 ist eine leistungsstarke Doppelkammer-Vakuumverpackungsmaschine für den industriellen Einsatz. Sie überzeugt durch Zuverlässigkeit, Geschwindigkeit und hygienische Bauweise.</p>
                <h4>Highlights:</h4>
                <ul>
                    <li>Doppelkammerausführung für kontinuierliches Arbeiten</li>
                    <li>Automatischer Deckelschwenk für mehr Effizienz</li>
                    <li>Gehäuse aus rostfreiem Edelstahl AISI 304</li>
                    <li>Tiefgezogene Vakuumkammern mit abgerundeten Ecken</li>
                    <li>Hochwertige Vakuumpumpe für schnelle Zyklen</li>
                    <li>Benutzerfreundliches Steuerpanel mit 10 Programmen</li>
                    <li>Sanftes Lufteinlasssystem („Softair“)</li>
                    <li>Optionales MAP, zweite Schweißleiste, Etikettendruck</li>
                </ul>
                <h4>Optionale Ausstattung:</h4>
                <ul>
                    <li>MAP-Schutzgasverpackung</li>
                    <li>Flüssigkeitsabscheider / Siedepunkt-Erkennung</li>
                    <li>Zweite Schweißnaht</li>
                    <li>Softair (regelbarer Lufteinlass)</li>
                    <li>Fahrbares Untergestell</li>
                    <li>Etikettendrucker, Zählmodule, Wartungsanzeige</li>
                </ul>
                <h4>Technische Daten:</h4>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Technische Daten</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Vakuumpumpe:</strong> 100 m³/h</li>
                                <li><strong>Kammermaße:</strong> 800 × 530 × 180 mm</li>
                                <li><strong>Schweißleisten:</strong> 2 × 800 mm</li>
                                <li><strong>Außenmaße:</strong> 1.065 × 1.020 × 1.150 mm</li>
                                <li><strong>Elektrische Leistung:</strong> 2,2 kW</li>
                                <li><strong>Anschluss:</strong> 400 V / Dreiphasen</li>
                                <li><strong>Gewicht:</strong> ca. 300 kg</li>
                                <li><strong>Produktionskapazität:</strong> bis zu 5 Zyklen/Minute</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p><em>Steigern Sie Ihre Produktionsleistung – kontaktieren Sie uns!</em></p>
            </div>
        </div>
    <?php } ?>

    <!-- Produkt 6: ZERMAT CV200 -->
    <?php
    if ($selected_product === null || $selected_product === 'zermat-cv200') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_zermatCV200';
    ?>
        <div class="product-container" data-product-id="zermat-cv200">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <!-- Platzhalter für Bilder -->
                        <div class="swiper-slide"><img src="Product/ZERMAT/CV200.jpeg
                        " class="fullscreen-toggle" style="cursor:zoom-in;" alt="ZERMAT CV200"></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="Product/ZERMAT/CV200.jpeg
                    " alt="ZERMAT CV200"></div>
                </div>
            </div>
            <div class="product-info">
                <h2>ZERMAT CV200 – Vakuumverpackungsmaschine für mittlere Produktionsmengen</h2>
                <p>Die ZERMAT CV200 ist ideal für Betriebe mit mittlerem Produktionsvolumen. Sie kombiniert leistungsstarke Technik mit benutzerfreundlicher Steuerung und ist vollständig aus Edelstahl gefertigt.</p>
                <h4>Highlights:</h4>
                <ul>
                    <li>Robuste Edelstahlkonstruktion (AISI 304)</li>
                    <li>Digitales Steuerpanel mit 20 speicherbaren Programmen</li>
                    <li>Vakuumsteuerung über Sensor + Zeit</li>
                    <li>Weicher Lufteintritt über Softair-System</li>
                    <li>Individuell einstellbare Schweißzeit</li>
                    <li>Not-Stopp-Funktion</li>
                    <li>Flache, transparente Methacrylat-Abdeckung</li>
                    <li>Wartungsfreundlich mit Video-Support</li>
                </ul>
                <h4>Optionale Ausstattung:</h4>
                <ul>
                    <li>Schutzgasinjektion (MAP)</li>
                    <li>Busch-Vakuumpumpe 63 m³/h</li>
                    <li>Ovaldeckel aus Methacrylat</li>
                    <li>Trennsiegel (abschaltbar)</li>
                    <li>Dritte Schweißleiste</li>
                    <li>Schrägrampe für Flüssigkeiten</li>
                    <li>Spezieller Vakuumzyklus für Flüssigkeiten („Pulmoneffekt“)</li>
                </ul>
                <h4>Technische Daten:</h4>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Technische Daten</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Außenmaße:</strong> 720 × 680 × 1000 mm</li>
                                <li><strong>Kammermaße:</strong> 590 × 470 × 170 mm</li>
                                <li><strong>Stromanschluss:</strong> 3-phasig, 380 V (optional: 220 V)</li>
                                <li><strong>Elektrische Leistung:</strong> 3,5 kW</li>
                                <li><strong>Schweißbalken (variabel):</strong> 1 × 520 mm + 1 × 420 mm, 2 × 450 mm, oder 2 × 550 mm</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p><em>Effiziente Verpackung für Ihren Betrieb – kontaktieren Sie uns!</em></p>
            </div>
        </div>
    <?php } ?>

    <!-- Produkt 7: ZERMAT CV1000 -->
    <?php
    if ($selected_product === null || $selected_product === 'zermat-cv1000') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_zermatCV1000';
    ?>
        <div class="product-container" data-product-id="zermat-cv1000">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <!-- Platzhalter für Bilder -->
                        <div class="swiper-slide"><img src="Product/ZERMAT/CV1000.jpeg
                        " class="fullscreen-toggle" style="cursor:zoom-in;" alt="ZERMAT CV1000"></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="Product/ZERMAT/CV1000.jpeg
                    " alt="ZERMAT CV1000"></div>
                </div>
            </div>
            <div class="product-info">
                <h2>ZERMAT CV1000 – Hochleistungs-Vakuumverpackungsmaschine</h2>
                <p>Die ZERMAT CV1000 ist eine Kammer-Vakuumverpackungsmaschine der Medium-Serie, ideal für größere Produktionen mit hohem Anspruch an Leistung, Hygiene und Flexibilität.</p>
                <h4>Highlights:</h4>
                <ul>
                    <li>Robuste Edelstahlkonstruktion (AISI 304)</li>
                    <li>Flacher Methacrylat-Deckel (oval optional)</li>
                    <li>2 Schweißbalken serienmäßig (3. oder 4. optional)</li>
                    <li>Doppelte Groove-Schweißnaht für erhöhte Dichtigkeit</li>
                    <li>20 programmierbare Verpackungsprogramme</li>
                    <li>Vakuumsteuerung über Sensor + Zeit</li>
                    <li>Zeitgesteuerte Versiegelung</li>
                    <li>Wartungsanzeige für Vakuumpumpe</li>
                    <li>Not-Stopp-Funktion</li>
                    <li>Leicht zugängliche Wartungseinheit</li>
                </ul>
                <h4>Optionale Ausstattung:</h4>
                <ul>
                    <li>Gasinjektion (MAP)</li>
                    <li>Ovaldeckel (Methacrylat)</li>
                    <li>Abtrenn-Schweißung (mit/ohne Deaktivierung)</li>
                    <li>Zusätzliche Schweißleisten (3./4.)</li>
                    <li>Automatische Deckelabsenkung</li>
                    <li>Pulmonaler Vakuum-Modus (für Flüssigkeiten)</li>
                    <li>Maßgeschneiderte Sonderlösungen</li>
                </ul>
                <h4>Technische Daten:</h4>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Technische Daten</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Außenmaße:</strong> 1.180 × 835 × 1.010 mm</li>
                                <li><strong>Kammermaße:</strong> 1.054 × 630 × 170 mm</li>
                                <li><strong>Vakuumpumpe:</strong> Busch 100 m³/h</li>
                                <li><strong>Spannung:</strong> 380 V / 3-phasig (auch 220 V optional)</li>
                                <li><strong>Schweißbalken-Varianten:</strong> 1 × 900 mm + 1 × 550 mm, 2 × 1.000 mm, oder 2 × 550 mm</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p><em>Hochleistung für Ihre Produktion – kontaktieren Sie uns!</em></p>
            </div>
        </div>
    <?php } ?>

    <!-- Produkt 8: ZERMAT DC750 -->
    <?php
    if ($selected_product === null || $selected_product === 'zermat-dc750') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_zermatDC750';
    ?>
        <div class="product-container" data-product-id="zermat-dc750">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <!-- Platzhalter für Bilder -->
                        <div class="swiper-slide"><img src="Product/ZERMAT/DC750.jpeg
                        " class="fullscreen-toggle" style="cursor:zoom-in;" alt="ZERMAT DC750"></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="Product/ZERMAT/DC750.jpeg
                    " alt="ZERMAT DC750"></div>
                </div>
            </div>
            <div class="product-info">
                <h2>ZERMAT DC750 – Hochleistungs-Doppelkammer-Vakuumverpackungsmaschine</h2>
                <p>Die ZERMAT DC750 ist eine industrielle Vakuumverpackungsmaschine mit Doppelkammer-System, ausgelegt für maximale Effizienz bei hoher Produktionsleistung. Ideal für die Lebensmittelindustrie.</p>
                <h4>Highlights:</h4>
                <ul>
                    <li>Gehäuse und Kammer aus Edelstahl (AISI 304)</li>
                    <li>Tiefgezogene Kammer mit abgerundeten Ecken</li>
                    <li>Doppelkammer-Ausführung für durchgehenden Betrieb</li>
                    <li>Digitales Bedienfeld mit 10 speicherbaren Programmen</li>
                    <li>Sensorbasierte Vakuumkontrolle</li>
                    <li>Zeitgesteuerte Schweißfunktion</li>
                    <li>Softair-System für sanften Lufteintritt</li>
                    <li>Not-Aus-Funktion</li>
                    <li>Wartungsfreundliche Konstruktion</li>
                    <li>Support- und Schulungsvideos auf www.zermat.es</li>
                </ul>
                <h4>Optionale Ausstattung:</h4>
                <ul>
                    <li>MAP-System (Schutzgas)</li>
                    <li>Abtrenn-Schweißung (abschaltbar)</li>
                    <li>Bi-aktive Schweißung für dicke Beutel</li>
                    <li>Unterstützter Deckelhub (automatisch)</li>
                </ul>
                <h4>Technische Daten:</h4>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Technische Daten</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Außenmaße:</strong> 1.545 × 1.150 × 1.180 mm</li>
                                <li><strong>Kammermaße:</strong> 620 × 840 × 250 mm</li>
                                <li><strong>Vakuumpumpe:</strong> Busch 160 m³/h</li>
                                <li><strong>Maschinengewicht:</strong> 537 kg</li>
                                <li><strong>Schweißleisten-Varianten:</strong> 2 × 620 mm oder 2 × 840 mm</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p><em>Maximale Effizienz für Ihre Produktion – kontaktieren Sie uns!</em></p>
            </div>
        </div>
    <?php } ?>

    <!-- Produkt 9: ZERMAT DC950 -->
    <?php
    if ($selected_product === null || $selected_product === 'zermat-dc950') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_zermatDC950';
    ?>
        <div class="product-container" data-product-id="zermat-dc950">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <!-- Platzhalter für Bilder -->
                        <div class="swiper-slide"><img src="Product/ZERMAT/DC950.jpeg
                        " class="fullscreen-toggle" style="cursor:zoom-in;" alt="ZERMAT DC950"></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="Product/ZERMAT/DC950.jpeg
                    " alt="ZERMAT DC950"></div>
                </div>
            </div>
            <div class="product-info">
                <h2>ZERMAT DC950 – Industrie-Doppelkammer-Vakuumverpackungsmaschine</h2>
                <p>Die DC950 ist das Flaggschiff der ZERMAT LARGE-Serie, speziell für höchste Produktionsvolumen in der Lebensmittelindustrie. Mit massiver Bauweise und 300 m³/h Vakuumpumpe.</p>
                <h4>Highlights:</h4>
                <ul>
                    <li>Komplett aus Edelstahl (AISI 304)</li>
                    <li>Doppelkammer-System für kontinuierliche Zyklen</li>
                    <li>Steuerung über Digitalpanel mit 10 Programmen</li>
                    <li>Sensorbasierte Vakuumkontrolle</li>
                    <li>Softair-Funktion für empfindliche Produkte</li>
                    <li>Zeitgesteuerte Versiegelung</li>
                    <li>Wartungsanzeige für die Vakuumpumpe</li>
                    <li>STOP-Taste zum Unterbrechen des Zyklus</li>
                    <li>Schulungs- und Wartungsvideos auf www.zermat.es</li>
                </ul>
                <h4>Optionale Ausstattung:</h4>
                <ul>
                    <li>Schutzgasverpackung (MAP)</li>
                    <li>Abtrenn-Schweißung (abschaltbar)</li>
                    <li>Bi-aktive Schweißung (für dicke Beutel)</li>
                    <li>Automatisch unterstützter Deckelhub</li>
                </ul>
                <h4>Technische Daten:</h4>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Technische Daten</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Außenmaße:</strong> 2.420 × 1.210 × 1.130 mm</li>
                                <li><strong>Kammermaße:</strong> 1.100 × 850 × 280 mm</li>
                                <li><strong>Vakuumpumpe:</strong> Busch 300 m³/h</li>
                                <li><strong>Gewicht:</strong> 767 kg</li>
                                <li><strong>Schweißbalken-Varianten:</strong> 2 × 1.100 mm oder 2 × 850 mm</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p><em>Das Beste für Ihre Großproduktion – kontaktieren Sie uns!</em></p>
            </div>
        </div>
    <?php } ?>

    <?php if (!$is_included) { ?>
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

            document.addEventListener("DOMContentLoaded", function() {
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
                document.addEventListener("click", function(event) {
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
                    console.error("Bild-Overlay-Element nicht gefunden");
                }
            });
        </script>
        <?php include 'footer.php'; ?>
    </body>

    </html>
<?php } ?>