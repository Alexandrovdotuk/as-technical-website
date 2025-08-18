<?php
// aufschnittschneidemaschinen.php

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
        <title>Aufschnittschneidemaschinen von Graef kaufen | Service & Beratung</title>
        <meta name="description"
            content="Entdecken Sie hochwertige Aufschnittschneidemaschinen von Graef – mit Service, Reparatur und Beratung. Vollautomaten & manuelle Slicer für Metzgerei und Gastronomie." />
        <meta name="keywords"
            content="Aufschnittschneidemaschinen kaufen, Graef Slicer,Vollautomat,Master, Angebot, Vollautomatische Schneidemaschine, ergonomisches Arbeiten, manuelle Aufschnittmaschine, Metzgereitechnik, Gastronomie Slicer, Service, technische Beratung" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    </head>

    <body>
        <?php include 'header.php'; ?>
        <!-- Einführung -->
        <div class="leistungen">
            <h2>Ihre perfekte Aufschnittschneidemaschine von Graef</h2>
            <p>Suchen Sie eine zuverlässige Aufschnittschneidemaschine für Theke oder Produktion? Mit Graef, dem
                Spezialisten für innovative Schneidetechnik, bieten wir Ihnen hochwertige Slicer – von manuellen Maschinen
                bis hin zu Vollautomaten. Profitieren Sie von ergonomischem Design, hoher Effizienz und unserem
                Rundum-Service inklusive Reparatur und Beratung.</p>
            <p>Dank der CERA-3-Beschichtung punkten unsere Maschinen mit besten Gleiteigenschaften und einfacher Reinigung.
                Ob Metzgerei, Gastronomie oder Catering – finden Sie die ideale Lösung für Ihre Anforderungen.
                <br><br>
                Testen Sie unsere vollautomatische Aufschnittschneidemaschine als Vorführmaschine und überzeugen Sie sich
                selbst!
            </p>
        </div>
        <div id="image-overlay">
            <img src="" alt="Vollbildansicht Aufschnittschneidemaschine" />
            <video controls style="display: none;"></video>
        </div>
    <?php } ?>

    <?php
    // Produkt 1: Master 2720
    if ($selected_product === null || $selected_product === 'master-2720') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_master2720';
        $product_name = 'Graef Master 2720 – Kompakt & Leistungsstark';
        ?>
        <div class="product-container" data-product-id="master-2720">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="Product/GRAEF/Master/2720/1.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="Graef Master 2720 Aufschnittschneidemaschine">
                        </div>
                        <div class="swiper-slide">
                            <img src="Product/GRAEF/Master/2720/2.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="Graef Master 2720 Aufschnittschneidemaschine">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="Product/GRAEF/Master/2720/1.png" alt="Master 2720 Miniatur">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="Product/GRAEF/Master/2720/2.png" alt="2720 Miniatur">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2><?php echo htmlspecialchars(string: $product_name); ?></h2>
                <p>Der Einstieg in die MASTER Line. Durch ihre Kompaktheit und Qualität die Lösung für kleine
                    Aufstellflächen. Auch ideal als Thekenmaschine einsetzbar. Der Graef Master 2720 ist die ideale
                    Aufschnittschneidemaschine für den Thekenbereich. Mit einem wartungsfreien Motor und der
                    CERA-3-Beschichtung garantiert sie präzises Schneiden und einfache Reinigung – perfekt für
                    Fleischereien, Gastronomie und Catering.</p>
                <h4>Ihre Vorteile:</h4>
                <ul>
                    <li>Wartungsfreier Motor mit Luftkühlsystem für Dauereinsatz</li>
                    <li>Ergonomisches Design für ermüdungsfreies Arbeiten</li>
                    <li>Hochleistungsmesser (Ø 270 mm) mit CERA-3-Beschichtung</li>
                    <li>Schnittstärke stufenlos einstellbar (0–15 mm)</li>
                    <li>Leicht laufender Schlitten – innenliegende Führung, 2-stufen Messerschärfaufsatz – abnehmbar,
                        entspanntes Arbeiten durch optimale Gleiteigenschaften – Cera 3, niedrige Bauweise</li>
                </ul>
                <h4>Praktische Features:</h4>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Features</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Piezo-Schaltertechnik – wasserdicht, sicher und unempfindlich</li>
                                <li>Leicht laufender Schlitten mit Restehalter</li>
                                <li>Schnelle Reinigung durch abnehmbare Teile – kein Antrocknen oder Anhaften von
                                    Schneidgut, Cera 3, glatte, überall frei zugängliche Flächen, freilaufendes Messer,
                                    Messerdeckplatte – abnehmbar, umlaufender Gummirahmen für einen sauberen Abschluß auf
                                    der Aufstellfläche, weit abklappbarer Schlitten – 45°</li>
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
                                <li><strong>Motorleistung:</strong> 300 Watt / 230V~ Wechsel- oder 400 V- Drehstrom</li>
                                <li><strong>Messerdurchmesser:</strong> 270 mm</li>
                                <li><strong>Schnittstärke:</strong> 0–15 mm</li>
                                <li><strong>Schnittlänge:</strong> 230 mm</li>
                                <li><strong>Schlittengröße:</strong> 230 x 250 mm</li>
                                <li><strong>Außenmaße:</strong> 540 x 510 x 490 mm</li>
                                <li><strong>Arbeitsraumaße:</strong> 545 x 520 x 490 mm</li>
                                <li><strong>Aufstellfläche:</strong> 470 x 370 mm</li>
                                <li><strong>Schwingungsgesamtwerte:</strong> 2,5 m/s²</li>
                                <li><strong>Emissions-Geräuschpegel:</strong>
                                    < 69 dBA</li>
                                <li><strong>Messerdrehzahl:</strong> 190 U/min</li>
                                <li><strong>Gewicht:</strong> 25,2 kg</li>
                                <li><strong>Betriebsdauer:</strong> Dauerlauf</li>
                                <li><strong>Investitionssicherheit:</strong> 2 Jahre Garantie, langjährige und
                                    kostengünstige Ersatzteilversorgung, servicefreundlicher Aufbau</li>
                                <li><strong>Zubehör:</strong> 2-stufen Messerschärfer, Spezialöl</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p><em>Interesse? Lassen Sie sich jetzt beraten!</em></p>
                <a href="https://wa.me/4916091658700?text=Hallo%20Herr%20Kutschke%2C%20ich%20m%C3%B6chte%20ein%20Angebot%20f%C3%BCr%20<?php echo urlencode($product_name); ?>%20anfragen."
                    target="_blank">
                    <img src="assets/images/WhatsAppButtonGreenLarge.png" class="whatsapp-button"
                        alt="Preisanfrage per WhatsApp" />
                </a>

            </div>
        </div>
    <?php } ?>

    <?php
    // Produkt 2: Master 3020
    if ($selected_product === null || $selected_product === 'master-3020') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_master3020';
        $product_name = 'Graef Master 3020 – Der Allrounder';
        ?>
        <div class="product-container" data-product-id="master-3020">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="Product/graef/master/3020.jpg" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="Graef Master 3020 Aufschnittschneidemaschine">
                        </div>
                        <div class="swiper-slide">
                            <img src="Product/graef/master/Bedienfeld.jpg" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="Bedienfeld Master 3020">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="Product/graef/master/3020.jpg" alt="Master 3020 Miniatur">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="Product/graef/master/Bedienfeld.jpg" alt="Bedienfeld Miniatur">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2><?php echo htmlspecialchars($product_name); ?></h2>
                <p>Der Graef Master 3020 ist ein vielseitiger Slicer mit einem Ø 300 mm Messer und präziser Schnittstärke
                    (0–24 mm), ideal für den Dauereinsatz in Metzgereien oder der Gastronomie. Er kombiniert Ergonomie mit
                    hoher Leistung und einfacher Reinigung. Erhältlich in mehreren Varianten: Basisschlitten,
                    Hauchschnitt-Schlitten (HS), Lachsschlitten (LS), Vario Slice (VS) und mit integrierter Waage (W).</p>
                <h4>Ihre Vorteile:</h4>
                <ul>
                    <li>Wartungsfreier Motor mit Luftkühlsystem für Dauereinsatz</li>
                    <li>CERA-3-Beschichtung für sauberes Schneiden – glatte, frei zugängliche Flächen, kein Anhaften von
                        Schneidgut</li>
                    <li>Schnittstärke bis 24 mm – stufenlos einstellbar (VS: zwei Funktionen für präzises Schneiden)</li>
                    <li>Varianten für spezielle Anforderungen: Hauchschnitt (HS) für dünne Scheiben, Lachsschlitten (LS) für
                        Fisch, Vario Slice (VS) für effizientes Arbeiten, Waage (W) für präzises Wiegen</li>
                </ul>
                <h4>Praktische Features der einzelnen Varianten:</h4>
                <div class="accordion">
                    <!-- Basisschlitten -->
                    <div class="accordion-item">
                        <button class="accordion-header">Basisschlitten</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Ergonomischer Schlitten mit Restehalter – großflächig und leicht laufend</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Hauchschnitt-Schlitten (HS) -->
                    <div class="accordion-item">
                        <button class="accordion-header">Hauchschnitt-Schlitten (HS)</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Ergonomischer Schlitten mit Restehalter – einstellbar von 30° bis 50° für hauchdünne
                                    Scheiben</li>
                                <li>Leicht zugängliche Flächen für schnelle Reinigung – einfaches Schneiden mehrerer Würste
                                    in einem Hub</li>
                                <li>Zusatzfunktion: Ideal für dekorative Thekenauslagen</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Lachsschlitten (LS) -->
                    <div class="accordion-item">
                        <button class="accordion-header">Lachsschlitten (LS)</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Ergonomischer Schlitten mit Restehalter – ideal für Fischfilets bei -8 °C bis -10 °C
                                </li>
                                <li>Leicht zugängliche Flächen für schnelle Reinigung – zur Reinigung abnehmbar</li>
                                <li>Zusatzfunktion: Für einfaches Fischfiletieren</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Vario Slice (VS) -->
                    <div class="accordion-item">
                        <button class="accordion-header">Vario Slice (VS)</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Ergonomischer Schlitten mit Restehalter – V-Stellung für effizientes Schneiden</li>
                                <li>Leicht zugängliche Flächen für schnelle Reinigung – vorbeugend gegen Sehnenerkrankungen
                                </li>
                                <li>Zusatzfunktion: Zwei Schneidefunktionen (V-Stellung für entspanntes Arbeiten)</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Mit Waage (W) -->
                    <div class="accordion-item">
                        <button class="accordion-header">Mit integrierter Waage (W)</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Ergonomischer Schlitten mit Restehalter – ergonomische Bedienung mit Waage</li>
                                <li>Leicht zugängliche Flächen für schnelle Reinigung – 100 % tara, nicht eichfähig</li>
                                <li>Zusatzfunktion: Integrierte Waage (Wiegebereich 0–5.000 g, Mehrgewicht durch
                                    Gewichtssteuerung)</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <h4>Technische Daten der einzelnen Varianten:</h4>
                <div class="accordion">
                    <!-- Basisschlitten -->
                    <div class="accordion-item">
                        <button class="accordion-header">Basisschlitten</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Schnittgröße (L x B):</strong> 260 x 195 mm</li>
                                <li><strong>Schlittengröße (L x B):</strong> 260 x 300 mm</li>
                                <li><strong>Messerdurchmesser:</strong> 300 mm</li>
                                <li><strong>Schnittstärke:</strong> 0–24 mm</li>
                                <li><strong>Motorleistung:</strong> 500 Watt / 230 V~ oder 400 V</li>
                                <li><strong>Messerdrehzahl:</strong> 200 U/min</li>
                                <li><strong>Außenmaße (L x B x H):</strong> 600 x 570 x 420 mm</li>
                                <li><strong>Arbeitsraumaße (L x B x H):</strong> 680 x 690 x 570 mm</li>
                                <li><strong>Aufstellfläche:</strong> 540 x 440 mm</li>
                                <li><strong>Gewicht:</strong> 37,1 kg</li>
                                <li><strong>Emissions-Geräuschpegel:</strong>
                                    < 69 dBA</li>
                                <li><strong>Schwingungsgesamtwerte:</strong> 2,5 m/s²</li>
                                <li><strong>Zubehör:</strong> 2-stufen Messerschärfer, Spezialöl</li>
                                <li><strong>Artikel-Nr.:</strong> master3020</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Hauchschnitt-Schlitten (HS) -->
                    <div class="accordion-item">
                        <button class="accordion-header">Hauchschnitt-Schlitten (HS)</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Schnittlänge:</strong> 260 mm</li>
                                <li><strong>Schlittengröße (L x B):</strong> 260 x 300 mm</li>
                                <li><strong>Messerdurchmesser:</strong> 300 mm</li>
                                <li><strong>Schnittstärke:</strong> 0–24 mm</li>
                                <li><strong>Motorleistung:</strong> 500 Watt / 230 V~ oder 400 V</li>
                                <li><strong>Messerdrehzahl:</strong> 200 U/min</li>
                                <li><strong>Außenmaße (L x B x H):</strong> 600 x 570 x 420 mm</li>
                                <li><strong>Arbeitsraumaße (L x B x H):</strong> 680 x 690 x 570 mm</li>
                                <li><strong>Aufstellfläche:</strong> 540 x 440 mm</li>
                                <li><strong>Gewicht:</strong> 37,1 kg</li>
                                <li><strong>Emissions-Geräuschpegel:</strong>
                                    < 69 dBA</li>
                                <li><strong>Schwingungsgesamtwerte:</strong> 2,5 m/s²</li>
                                <li><strong>Zubehör:</strong> 2-stufen Messerschärfer</li>
                                <li><strong>Artikel-Nr.:</strong> master3020hs</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Lachsschlitten (LS) -->
                    <div class="accordion-item">
                        <button class="accordion-header">Lachsschlitten (LS)</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Schneidgutgröße:</strong> 225 x 40 mm</li>
                                <li><strong>Schlittengröße (L x B):</strong> 260 x 300 mm</li>
                                <li><strong>Messerdurchmesser:</strong> 300 mm</li>
                                <li><strong>Schnittstärke:</strong> 0–24 mm</li>
                                <li><strong>Motorleistung:</strong> 500 Watt / 230 V~ oder 400 V</li>
                                <li><strong>Messerdrehzahl:</strong> 230 U/min</li>
                                <li><strong>Außenmaße (L x B x H):</strong> 600 x 570 x 420 mm</li>
                                <li><strong>Arbeitsraumaße (L x B x H):</strong> 680 x 690 x 570 mm</li>
                                <li><strong>Aufstellfläche:</strong> 540 x 440 mm</li>
                                <li><strong>Gewicht:</strong> 37,1 kg</li>
                                <li><strong>Emissions-Geräuschpegel:</strong>
                                    < 69 dBA</li>
                                <li><strong>Schwingungsgesamtwerte:</strong> 2,5 m/s²</li>
                                <li><strong>Zubehör:</strong> 2-stufen Messerschärfer</li>
                                <li><strong>Artikel-Nr.:</strong> master3020ls</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Vario Slice (VS) -->
                    <div class="accordion-item">
                        <button class="accordion-header">Vario Slice (VS)</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Schnittgröße (L x B):</strong> 260 x 195 mm</li>
                                <li><strong>Schlittengröße (L x B):</strong> 260 x 300 mm</li>
                                <li><strong>Messerdurchmesser:</strong> 300 mm</li>
                                <li><strong>Schnittstärke:</strong> 0–24 mm</li>
                                <li><strong>Motorleistung:</strong> 500 Watt / 230 V~ oder 400 V</li>
                                <li><strong>Messerdrehzahl:</strong> 230 U/min</li>
                                <li><strong>Außenmaße (L x B x H):</strong> 600 x 600 x 420 mm</li>
                                <li><strong>Arbeitsraumaße (L x B x H):</strong> 720 x 650 x 700 mm</li>
                                <li><strong>Aufstellfläche:</strong> 540 x 440 mm</li>
                                <li><strong>Gewicht:</strong> 38,5 kg</li>
                                <li><strong>Emissions-Geräuschpegel:</strong>
                                    < 69 dBA</li>
                                <li><strong>Schwingungsgesamtwerte:</strong> 2,5 m/s²</li>
                                <li><strong>Zubehör:</strong> 2-stufen Messerschärfer</li>
                                <li><strong>Artikel-Nr.:</strong> master3020vs</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Mit Waage (W) -->
                    <div class="accordion-item">
                        <button class="accordion-header">Mit integrierter Waage (W)</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Schnittlänge:</strong> 260 mm</li>
                                <li><strong>Schlittengröße (L x B):</strong> 260 x 300 mm</li>
                                <li><strong>Messerdurchmesser:</strong> 300 mm</li>
                                <li><strong>Schnittstärke:</strong> 0–24 mm</li>
                                <li><strong>Motorleistung:</strong> 500 Watt / 230 V~ oder 400 V</li>
                                <li><strong>Messerdrehzahl:</strong> 230 U/min</li>
                                <li><strong>Außenmaße (L x B x H):</strong> 600 x 570 x 420 mm</li>
                                <li><strong>Arbeitsraumaße (L x B x H):</strong> 680 x 720 x 570 mm</li>
                                <li><strong>Aufstellfläche:</strong> 540 x 440 mm</li>
                                <li><strong>Gewicht:</strong> 37,1 kg</li>
                                <li><strong>Emissions-Geräuschpegel:</strong>
                                    < 69 dBA</li>
                                <li><strong>Schwingungsgesamtwerte:</strong> 2,5 m/s²</li>
                                <li><strong>Zubehör:</strong> 2-stufen Messerschärfer</li>
                                <li><strong>Artikel-Nr.:</strong> master3020w</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p><em>Bereit für Effizienz? Kontaktieren Sie uns!</em></p>
                <a href="https://wa.me/4916091658700?text=Hallo%20Herr%20Kutschke%2C%20ich%20m%C3%B6chte%20ein%20Angebot%20f%C3%BCr%20<?php echo urlencode($product_name); ?>%20anfragen."
                    target="_blank">
                    <img src="assets/images/WhatsAppButtonGreenLarge.png" class="whatsapp-button"
                        alt="Preisanfrage per WhatsApp" />
                </a>
            </div>
        </div>
    <?php } ?>

    <?php
    // Produkt 3: Master 3310W
    if ($selected_product === null || $selected_product === 'master-3310w') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_master3310w';
        $product_name = 'Graef Master 3310W – Mit integrierter Waage';

        ?>
        <div class="product-container" data-product-id="master-3310w">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="Product/graef/master/3310.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="Graef Master 3310W mit Waage">
                        </div>
                        <div class="swiper-slide">
                            <img src="Product/graef/master/3310W-B.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="Master 3310W Seitenansicht">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="Product/graef/master/3310.png" alt="Master 3310W Miniatur">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="Product/graef/master/3310W-B.png" alt="Master mit Waage Miniatur">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2><?php echo htmlspecialchars($product_name); ?></h2>
                <p>Der Master 3310W optimiert Ihren Arbeitsablauf mit einer integrierten Waage (0–5000 g). Perfekt für
                    präzises Schneiden und Wiegen in einem Schritt – ideal für Metzgereien und Produktion. Erhältlich in
                    mehreren Varianten: Basis-Schlitten, Doppel-Schlitten (DS), Einspannarm-Schlitten (EA) und Version mit
                    Waage (W).</p>
                <h4>Ihre Vorteile:</h4>
                <ul>
                    <li>Integrierte Waage für mehr Effizienz</li>
                    <li>Wiegebereich: 0–5000 g (1 g Teilung)</li>
                    <li>Zeitersparnis durch Wegfall separater Waagen</li>
                    <li>Varianten für spezialisierte Anwendungen: Basis-Schlitten für Standardanwendungen, Doppel-Schlitten
                        (DS) für große Stücke mit zwei Zuführschlitten, Einspannarm-Schlitten (EA) für einfache Fixierung,
                        Version mit Waage (W) für Mehrgewichtsteuerung</li>
                </ul>
                <h4>Praktische Features:</h4>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Features</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Ergonomische Bedienung mit Waage</li>
                                <li>Leicht zugängliche Flächen für schnelle Reinigung – 100 % tara, nicht eichfähig</li>
                                <li>Integrierte Waage (Wiegebereich 0–5.000 g, Mehrgewicht durch Gewichtssteuerung)</li>
                                <li>Varianten: Basis-Schlitten (großflächig und leicht laufend), Doppel-Schlitten (DS, mit
                                    zwei Zuführschlitten für große Stücke), Einspannarm-Schlitten (EA, für einfache
                                    Fixierung), Version mit Waage (W, für präzises Wiegen)</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <h4>Technische Daten:</h4>
                <div class="accordion">
                    <!-- Gemeinsame Eigenschaften -->
                    <div class="accordion-item">
                        <button class="accordion-header">Gemeinsame Eigenschaften</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Hochwerte Bauteile:</strong> Piezo-Schaltertechnik – sicher, wasserdicht und
                                    unempfindlich, chemikalienresistente und bruchsichere Kunststoffe</li>
                                <li><strong>Reinigung:</strong> Freilaufendes Messer, Messerdeckplatte – abnehmbar,
                                    Schlitten und Abstreifer sind abnehmbar, umlaufender Gummirahmen für einen sauberen
                                    Abschluss auf der Aufstellfläche – Cera 3, glatte, überall frei zugängliche Flächen</li>
                                <li><strong>Investitionssicherheit:</strong> 2 Jahre Garantie, langjährige und
                                    kostengünstige Ersatzteilversorgung, servicefreundlicher Aufbau</li>
                                <li><strong>Motorleistung:</strong> 500 Watt / 230 V – Wechsel- oder 400 V – Drehstrom</li>
                                <li><strong>Schwingungsgesamtwert:</strong> 2,5 m/s²</li>
                                <li><strong>Emissions-Geräuschpegel:</strong>
                                    < 69 dBA</li>
                                <li><strong>Betriebsdauer:</strong> Dauerlauf</li>
                                <li><strong>Messerdurchmesser in mm:</strong> 330 mm</li>
                                <li><strong>Schnittstärke:</strong> 0–24 mm</li>
                                <li><strong>Aufstellfläche:</strong> 540 x 440 mm</li>
                                <li><strong>Zubehör:</strong> Spezialöl, 2-stufen Messerschärfer</li>
                                <li><strong>Schnittlänge:</strong> 300 mm</li>
                                <li><strong>Außenmaße (B x T x H):</strong> 650 x 605 x 445 mm</li>
                                <li><strong>Messerdrehzahl:</strong> 230 U/min</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Basis-Schlitten -->
                    <div class="accordion-item">
                        <button class="accordion-header">Basis-Schlitten</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Schlittenart:</strong> Basis-Schlitten</li>
                                <li><strong>Schlittengröße (L x B):</strong> 300 x 340 mm</li>
                                <li><strong>Arbeitsraumaße (B x T x H):</strong> 740 x 725 x 600 mm</li>
                                <li><strong>Gewicht:</strong> 37.9 kg</li>

                            </ul>
                        </div>
                    </div>
                    <!-- Doppel-Schlitten (DS) -->
                    <div class="accordion-item">
                        <button class="accordion-header">Doppel-Schlitten (DS)</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Schlittenart:</strong> Doppel-Schlitten</li>
                                <li><strong>Schlittengröße (L x B):</strong> 300 x 223 mm</li>
                                <li><strong>Arbeitsraumaße (B x T x H):</strong> 740 x 690 x 600 mm</li>
                                <li><strong>Gewicht:</strong> 41.2 kg</li>

                            </ul>
                        </div>
                    </div>
                    <!-- Einspannarm-Schlitten (EA) -->
                    <div class="accordion-item">
                        <button class="accordion-header">Einspannarm-Schlitten (EA)</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Schlittenart:</strong> Einspannarm-Schlitten</li>
                                <li><strong>Schlittengröße (L x B):</strong> 300 x 340 mm</li>
                                <li><strong>Arbeitsraumaße (B x T x H):</strong> 740 x 725 x 600 mm</li>
                                <li><strong>Gewicht:</strong> 45 kg</li>

                            </ul>
                        </div>
                    </div>
                    <!-- Version mit Waage (W) -->
                    <div class="accordion-item">
                        <button class="accordion-header">Version mit Waage (W)</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Schlittenart:</strong> Basis-Schlitten</li>
                                <li><strong>Schlittengröße (L x B):</strong> 300 x 340 mm</li>
                                <li><strong>Arbeitsraumaße (B x T x H):</strong> 740 x 725 x 600 mm</li>
                                <li><strong>Gewicht:</strong> 37.9 kg</li>

                            </ul>
                        </div>
                    </div>
                </div>
                <p><em>Neugierig? Lassen Sie sich beraten!</em></p>
                <a href="https://wa.me/4916091658700?text=Hallo%20Herr%20Kutschke%2C%20ich%20m%C3%B6chte%20ein%20Angebot%20f%C3%BCr%20<?php echo urlencode($product_name); ?>%20anfragen."
                    target="_blank">
                    <img src="assets/images/WhatsAppButtonGreenLarge.png" class="whatsapp-button"
                        alt="Preisanfrage per WhatsApp" />
                </a>
            </div>
        </div>
    <?php } ?>

    <?php
    // Produkt 4: Master 3370
    if ($selected_product === null || $selected_product === 'master-3370') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_master3370';
        $product_name = 'Graef Master 3370 – 18° Schlitten';

        ?>
        <div class="product-container" data-product-id="master-3370">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="Product/graef/master/3370-18grad.PNG" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="Graef Master 3370 18° Schlitten">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="Product/graef/master/3370-18grad.PNG" alt="Master 3370 Miniatur">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2><?php echo htmlspecialchars(string: $product_name); ?></h2>
                <p>Der Master 3370 mit 18° geneigtem Schlitten fixiert das Schneidgut sicher und erleichtert die Bedienung.
                    Ideal für schnelles, präzises Arbeiten in der Produktion.</p>
                <h4>Ihre Vorteile:</h4>
                <ul>
                    <li>18° Schlitten für sichere Fixierung</li>
                    <li>Einfache Bedienung und Reinigung</li>
                    <li>Abklappbarer Schlitten für Hygiene</li>
                </ul>
                <h4>Praktische Features:</h4>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Features</button>
                        <div class="accordion-content">
                            <ul>
                                <li>18° geneigter Schlitten – sichere Fixierung des Schneidguts</li>
                                <li>Abklappbarer Schlitten – erleichtert die Reinigung und sorgt für Hygiene</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p><em>Interesse geweckt? Fragen Sie nach Details!</em></p>
                <a href="https://wa.me/4916091658700?text=Hallo%20Herr%20Kutschke%2C%20ich%20m%C3%B6chte%20ein%20Angebot%20f%C3%BCr%20<?php echo urlencode($product_name); ?>%20anfragen."
                    target="_blank">
                    <img src="assets/images/WhatsAppButtonGreenLarge.png" class="whatsapp-button"
                        alt="Preisanfrage per WhatsApp" />
                </a>
            </div>
        </div>
    <?php } ?>

    <?php
    // Produkt 5: VA 802
    if ($selected_product === null || $selected_product === 'va-802') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_va802';
        $product_name = 'Graef VA 802 – Vollautomat für Profis';

        ?>
        <div class="product-container" data-product-id="va-802">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="Product/graef/Vollautomat.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="Graef VA 802 Vollautomatische Schneidemaschine">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="Product/graef/Vollautomat.png" alt="VA 802 Miniatur">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2><?php echo htmlspecialchars($product_name); ?></h2>
                <p>Der VA 802 (optional VA 802H mit Halbautomat) ist ein vollautomatischer Slicer mit 500 Watt Motor und Ø
                    300 mm Messer. Ideal für Metzgereien und Buffets, bietet er Dauerlauf und präzise Schnitte (0,5–10 mm).
                </p>
                <h4>Ihre Vorteile:</h4>
                <ul>
                    <li>Vollautomatische Bedienung für Effizienz</li>
                    <li>Leistungsstarker 500-Watt-Motor</li>
                    <li>Schnittlänge bis 250 mm</li>
                </ul>
                <h4>Praktische Features:</h4>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Features</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Vollautomatische Bedienung – optimiert für Effizienz</li>
                                <li>Optionale Halbautomatik (VA 802H) – flexibel einsetzbar</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <h4>Technische Details:</h4>
                <ul>
                    <li>Maße: 600 x 880 x 500 mm</li>
                    <li>Gewicht: 69 kg</li>
                    <li>Zubehör: Reinigungsbürste, Messerschärfer, Spezialöl</li>
                </ul>
                <p><em>Jetzt testen? Fragen Sie nach einer Vorführmaschine!</em></p>
                <a href="https://wa.me/4916091658700?text=Hallo%20Herr%20Kutschke%2C%20ich%20m%C3%B6chte%20ein%20Angebot%20f%C3%BCr%20<?php echo urlencode($product_name); ?>%20anfragen."
                    target="_blank">
                    <img src="assets/images/WhatsAppButtonGreenLarge.png" class="whatsapp-button"
                        alt="Preisanfrage per WhatsApp" />
                </a>
            </div>
        </div>
    <?php } ?>

    <?php
    // Produkt 6: VA 804
    if ($selected_product === null || $selected_product === 'va-804') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_va804';
        $product_name = 'Graef VA 804 – Vollautomat mit Platz';

        ?>
        <div class="product-container" data-product-id="va-804">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="Product/graef/VA804.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="Graef VA 804 Vollautomatische Schneidemaschine">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="Product/graef/VA804.png" alt="VA 804 Miniatur">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2><?php echo htmlspecialchars($product_name); ?></h2>
                <p>Der VA 804 bietet mit einem Ø 300 mm Messer und 500 Watt Motor maximale Effizienz. Sein abklappbarer
                    Schlitten erleichtert die Reinigung – perfekt für anspruchsvolle Produktionen.</p>
                <h4>Ihre Vorteile:</h4>
                <ul>
                    <li>Automatischer Betrieb für schnelle Ergebnisse</li>
                    <li>Einfache Reinigung dank abklappbarem Schlitten</li>
                    <li>Schnittstärke: 0,5–10 mm</li>
                </ul>
                <h4>Praktische Features:</h4>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Features</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Automatischer Betrieb – für schnelle und präzise Ergebnisse</li>
                                <li>Abklappbarer Schlitten – erleichtert die Reinigung</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <h4>Technische Details:</h4>
                <ul>
                    <li>Maße: 600 x 1060 x 500 mm</li>
                    <li>Gewicht: 70 kg</li>
                    <li>Zubehör: Bürste, Öl, Messerschärfer</li>
                </ul>
                <p><em>Bereit für mehr? Kontaktieren Sie uns!</em></p>
                <a href="https://wa.me/4916091658700?text=Hallo%20Herr%20Kutschke%2C%20ich%20m%C3%B6chte%20ein%20Angebot%20f%C3%BCr%20<?php echo urlencode($product_name); ?>%20anfragen."
                    target="_blank">
                    <img src="assets/images/WhatsAppButtonGreenLarge.png" class="whatsapp-button"
                        alt="Preisanfrage per WhatsApp" />
                </a>
            </div>
        </div>
    <?php } ?>

    <?php
    // Produkt 7: VA 804FB
    if ($selected_product === null || $selected_product === 'va-804fb') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_va804fb';
        $product_name = 'Graef VA 804FB – Vollautomat mit Förderband';

        ?>
        <div class="product-container" data-product-id="va-804fb">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="Product/graef/VA804FB.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="Graef VA 804FB mit Förderband">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="Product/graef/VA804FB.png" alt="VA 804FB Miniatur">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2><?php echo htmlspecialchars($product_name); ?></h2>
                <p>Der VA 804FB mit Förderband und Rollen ist die ultimative Lösung für große Produktionen. Mit 500 Watt und
                    einem Ø 300 mm Messer schneidet er präzise und effizient.</p>
                <h4>Ihre Vorteile:</h4>
                <ul>
                    <li>Förderband für automatische Ablage</li>
                    <li>Mobile Rollen für Flexibilität</li>
                    <li>Schnittstärke: 0,5–10 mm</li>
                </ul>
                <h4>Praktische Features:</h4>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Features</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Förderband – für automatische Ablage der geschnittenen Produkte</li>
                                <li>Mobile Rollen – für flexible Einsatzorte</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <h4>Technische Details:</h4>
                <ul>
                    <li>Maße: 1653 x 1074 x 1350 mm</li>
                    <li>Gewicht: 70 kg</li>
                    <li>Zubehör: Reinigungsbürste, Messerschärfer, Öl</li>
                </ul>
                <p><em>Effizienz steigern? Lassen Sie sich beraten!</em></p>
                <a href="https://wa.me/4916091658700?text=Hallo%20Herr%20Kutschke%2C%20ich%20m%C3%B6chte%20ein%20Angebot%20f%C3%BCr%20<?php echo urlencode($product_name); ?>%20anfragen."
                    target="_blank">
                    <img src="assets/images/WhatsAppButtonGreenLarge.png" class="whatsapp-button"
                        alt="Preisanfrage per WhatsApp" />
                </a>
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