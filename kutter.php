<?php
// cutter.php

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
        <title>Kutter von MADO, Nowicki & Düker-REX | Service & Beratung</title>
        <meta name="description"
            content="Wir bieten Ihnen hochwertige Kutter von MADO, Nowicki und Düker-REX für Ihre Lebensmittelproduktion sowie Service, Reparatur und technische Beratung nach Ihren Anforderungen." />
        <meta name="keywords" content="verkauf,angebot,cutter,Kutter,industriekutter,mado,nowicki,rex,blizzard" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    </head>

    <body>
        <?php include 'header.php'; ?>
        <!-- Einführung -->
        <div class="leistungen">
            <h1>Ihre Lösung für Industriekutter – Präzision und Service</h1>
            <p>Benötigen Sie einen leistungsstarken Kutter für Ihre Lebensmittelproduktion? Mit unseren hochwertigen Kuttern
                von MADO, Nowicki und unserem neuen Partner Düker-REX bieten wir Ihnen modernste Technologie für präzise
                Schnittergebnisse. Von kompakten Modellen wie der Blizzard-Serie bis hin zu vollautomatischen
                Industriekuttern – profitieren Sie von unserem Service, Reparatur und individueller Beratung.</p>
            <p>Wir konfigurieren Ihre Anlage nach Ihren Bedürfnissen, damit Sie optimale Ergebnisse erzielen. Lassen Sie
                sich von unserer Expertise überzeugen!</p>
        </div>
        <div id="image-overlay">
            <img src="" alt="Vollbildansicht Kutter" />
            <video controls style="display: none;"></video>
        </div>
    <?php } ?>

    <!-- Produkt 1: Blizzard 50 SLF P30-P -->
    <?php
    if ($selected_product === null || $selected_product === 'blizzard-50') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_blizzard50';
        ?>
        <div class="product-container" data-product-id="blizzard-50">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <!-- Platzhalter für Bilder -->
                        <div class="swiper-slide"><img src="../Product/REX/Blizzard50.jpeg" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="Blizzard 50 SLF P30-P"></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="../Product/REX/Blizzard50.jpeg" alt="Blizzard 50 SLF P30-P Thumbnail"></div>
                </div>
            </div>
            <div class="product-info">
                <h2>Blizzard 50 SLF P30-P – Kompakte Präzision für das Handwerk</h2>
                <p>Der Blizzard 50 SLF P30-P von Düker-REX ist ein leistungsstarker Kutter, der speziell für das
                    Fleischerhandwerk entwickelt wurde. Mit einer Schüsselkapazität von 50 Litern bietet er Vielseitigkeit
                    und Effizienz für kleine bis mittlere Metzgereien und Lebensmittelproduktionsstätten. Sein
                    leistungsstarker Antrieb, die Energieeffizienz, der geschlossene Edelstahlkorpus und das einzigartige
                    Hygienesystem erfüllen die hohen Anforderungen der modernen Fleischverarbeitung.</p>
                <h4>Ausstattung:</h4>
                <ul>
                    <li>6er-Messerkopf (System Düker SDU)</li>
                    <li>Stufenlose Regelung per Potentiometer</li>
                    <li>Edelstahl-Schüssel mit Wasserablauf</li>
                    <li>Digitalanzeige für Temperatur & Drehzahlen</li>
                    <li>Schwingmetallfüße (vibrationsarm)</li>
                    <li>Schutzhaube mit Hebeentlastung</li>
                    <li>Leicht zu reinigen, kompakt gebaut</li>
                </ul>
                <h4>Technische Daten:</h4>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Technische Daten</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Schüsselvolumen:</strong> 50 Liter</li>
                                <li><strong>Messerwellendrehzahl:</strong> 50 – 5000 U/min (stufenlos)</li>
                                <li><strong>Mischgeschwindigkeit:</strong> 50 – 500 U/min (vorwärts/rückwärts)</li>
                                <li><strong>Schüsseldrehzahlen:</strong> 5 / 11 / 16 U/min</li>
                                <li><strong>Motorleistung:</strong> 11 kW (Messerwelle, über Frequenzumrichter), 0,25 kW
                                    (Schüssel)</li>
                                <li><strong>Anschlusswerte:</strong> 400 V / 50 Hz / 35 A träge, 5 x 10 mm² Cu</li>
                                <li><strong>Gewicht:</strong> ca. 730 kg</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p><em>Interesse geweckt? Kontaktieren Sie uns für eine maßgeschneiderte Beratung!</em></p>
            </div>
        </div>
    <?php } ?>

    <!-- Produkt 2: Blizzard 70 SLF P30-P -->
    <?php
    if ($selected_product === null || $selected_product === 'blizzard-70') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_blizzard70';
        ?>
        <div class="product-container" data-product-id="blizzard-70">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <!-- Platzhalter für Bilder -->
                        <div class="swiper-slide"><img src="../Product/REX/Blizzard70.jpeg" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="Blizzard 70 SLF P30-P"></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="../Product/REX/Blizzard70.jpeg" alt="Blizzard 70 SLF P30-P Thumbnail"></div>
                </div>
            </div>
            <div class="product-info">
                <h2>Blizzard 70 SLF P30-P – Vielseitig und Robust</h2>
                <p>Der Blizzard 70 SLF P30-P von Düker-REX ist für größere Metzgereien und Lebensmittelproduktionsstätten
                    konzipiert. Mit einer Schüsselkapazität von 70 Litern kombiniert er Leistung und Hygiene für die moderne
                    Fleischverarbeitung. Sein leistungsstarker Antrieb, die Energieeffizienz, der geschlossene
                    Edelstahlkorpus und das einzigartige Hygienesystem machen ihn zur idealen Wahl für anspruchsvolle
                    Anwendungen.</p>
                <h4>Ausstattung:</h4>
                <ul>
                    <li>Optional: 3er-Messerkopf (System SDS)</li>
                    <li>Auslader manuell schwenkbar</li>
                    <li>Komplett Edelstahl, geschliffen</li>
                    <li>Wasserablauf integriert</li>
                    <li>Robuste Folientastatur</li>
                    <li>Pflegeleicht und hygienisch</li>
                </ul>
                <h4>Technische Daten:</h4>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Technische Daten</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Schüsselvolumen:</strong> 70 Liter</li>
                                <li><strong>Messerwellendrehzahl:</strong> 50 – 5000 U/min</li>
                                <li><strong>Mischgeschwindigkeit:</strong> 50 – 500 U/min</li>
                                <li><strong>Schüsseldrehzahlen:</strong> 5 / 11 / 16 U/min</li>
                                <li><strong>Motorleistung:</strong> 22 kW (Messerwelle, über Frequenzumrichter), 0,39 kW
                                    (Schüssel)</li>
                                <li><strong>Anschlusswerte:</strong> 400 V / 50 Hz / 63 A träge, 5 x 25 mm² Cu</li>
                                <li><strong>Gewicht:</strong> ca. 1300 kg</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p><em>Bereit, Ihre Produktion zu optimieren? Kontaktieren Sie uns!</em></p>
            </div>
        </div>
    <?php } ?>

    <!-- Produkt 3: Blizzard 130 SLF P30-P -->
    <?php
    if ($selected_product === null || $selected_product === 'blizzard-130') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_blizzard130';
        ?>
        <div class="product-container" data-product-id="blizzard-130">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <!-- Platzhalter für Bilder -->
                        <div class="swiper-slide"><img src="../Product/REX/Blizzard130.jpeg" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="Blizzard 130 SLF P30-P"></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="../Product/REX/Blizzard130.jpeg" alt="Blizzard 130 SLF P30-P Thumbnail"></div>
                </div>
            </div>
            <div class="product-info">
                <h2>Blizzard 130 SLF P30-P – Industrielle Hochleistung</h2>
                <p>Der Blizzard 130 SLF P30-P von Düker-REX ist für die industrielle Fleischverarbeitung ausgelegt. Mit
                    einer Schüsselkapazität von 130 Litern bietet er außergewöhnliche Leistung und Effizienz für große
                    Produktionsmengen. Der leistungsstarke Antrieb, die Energieeffizienz, der geschlossene Edelstahlkorpus
                    und das einzigartige Hygienesystem machen ihn zur perfekten Wahl für anspruchsvolle industrielle
                    Anwendungen.</p>
                <h4>Ausstattung:</h4>
                <ul>
                    <li>6er-Messerkopf (System Düker)</li>
                    <li>Digitalanzeige für Temperatur & Drehzahlen</li>
                    <li>Auslader hydraulisch einschwenkbar</li>
                    <li>Optional: Touchscreen-Steuerung (Perfect-Cut)</li>
                    <li>Für industrielle Hochleistung</li>
                    <li>Hygienisch, wartungsfreundlich, leistungsstark</li>
                </ul>
                <h4>Technische Daten:</h4>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Technische Daten</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Schüsselvolumen:</strong> 130 Liter</li>
                                <li><strong>Messerwellendrehzahl:</strong> 50 – 5000 U/min</li>
                                <li><strong>Mischgeschwindigkeit:</strong> 50 – 500 U/min</li>
                                <li><strong>Schüsseldrehzahlen:</strong> 3 Stufen</li>
                                <li><strong>Motorleistung:</strong> 45 kW (Messerwelle, über Frequenzumrichter)</li>
                                <li><strong>Anschlusswerte:</strong> 400 V / 50 Hz / 100 A träge</li>
                                <li><strong>Gewicht:</strong> 2150 kg</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p><em>Interesse an industriellen Lösungen? Kontaktieren Sie uns!</em></p>
            </div>
        </div>
    <?php } ?>

    <!-- Produkt 4: MSM 769 SL/VA -->
    <?php
    if ($selected_product === null || $selected_product === 'msm-769') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_msm769';
        ?>
        <div class="product-container" data-product-id="msm-769">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="Product/MADO/MSM-769-SL.png" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="MSM 769 SL Cutter"></div>
                        <div class="swiper-slide"><img src="Product/MADO/MSM-769-VA.png" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="MSM 769 VA Cutter"></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="Product/MADO/MSM-769-SL.png" alt=""></div>
                    <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="Product/MADO/MSM-769-VA.png" alt=""></div>
                </div>
            </div>
            <div class="product-info">
                <h2>MSM 769 SL / MSM 769 VA</h2>
                <p>Dieser Kutter verfügt über eine speicherprogrammierbare Steuerung, die die Verwaltung von Rezepturen und
                    Arbeitsschritten ermöglicht. Die Eingabe sämtlicher Sollwerte erfolgt über ein Touchdisplay, das eine
                    benutzerfreundliche Bedienung ermöglicht. Die Endabschaltung kann wahlweise über die Temperatur oder die
                    Anzahl der Schüsselumdrehungen erfolgen.</p>
                <h4>Ausstattung:</h4>
                <ul>
                    <li>Bis zu 8 Schnellwahltasten für Messerwellendrehzahl und 5 Schüsselstufen sind frei konfigurierbar.
                    </li>
                    <li>Die Geschwindigkeit für Schneiden und Mischen sind stufenlos regelbar.</li>
                    <li>Die Temperatur wird mit höchster Messgenauigkeit direkt im Produktfluss gemessen.</li>
                    <li>Hydraulische Schneidhaube und Lärmschutzdeckel mit Gewürzlücke.</li>
                    <li>Automatische Entleerungseinrichtung und Beschickungseinrichtung.</li>
                    <li>Ablassöffnung in Kutterschüssel.</li>
                    <li>Um bei Temperaturveränderungen immer die gleiche Spannkraft der Messer zu erhalten, wird eine
                        hydraulische Spannmutter eingesetzt.</li>
                    <li>Die Ausführung VA verfügt zusätzlich über einen automatischen hydraulischen Vakuumdeckel. Die
                        Vakuumeinstellung erfolgt über die Touchsteuerung.</li>
                    <li>Wartungsfreie Lager sind verantwortlich für das sonst lästige Schmieren der Messerwelle. Die Gefahr
                        von Fremdmaterial im Brät wird somit vermieden.</li>
                </ul>
                <p><em>Interesse geweckt? Kontaktieren Sie uns für weitere Details!</em></p>
            </div>
        </div>
    <?php } ?>

    <!-- Produkt 5: MSK 761/764 SL -->
    <?php
    if ($selected_product === null || $selected_product === 'msk-761-764') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_msk761764';
        ?>
        <div class="product-container" data-product-id="msk-761-764">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="Product/MADO/MSK 761 SL.png" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="MSK 761 SL Cutter"></div>
                        <div class="swiper-slide"><img src="Product/MADO/MSM-764-SL.png" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="MSM 764 SL Cutter"></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="Product/MADO/MSK 761 SL.png" alt=""></div>
                    <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="Product/MADO/MSM-764-SL.png" alt=""></div>
                </div>
            </div>
            <div class="product-info">
                <h2>MSK 761 SL / MSM 764 SL</h2>
                <h4>Serienausstattung:</h4>
                <ul>
                    <li>Touchdisplay zur Eingabe sämtlicher Sollwerte mit Digitalanzeige für Messerwellendrehzahl, Anzahl
                        der Schüsselumdrehungen, Temperatur, Endabschaltung für Temperatur und Schüsselumdrehungen.</li>
                    <li>Stufenlose Drehzahlregulierung der Messerwelle für Schneiden und Mischen (auch rückwärts).</li>
                    <li>Zwei Drehzahlstufen der Schüsselumdrehungen.</li>
                    <li>Reinigungsmodus für Schüsselumdrehung.</li>
                    <li>Programmierbare Steuerung zur Speicherung von Rezepturen mit Arbeitsschritten.</li>
                    <li>Temperatursensor für höchste Messgenauigkeit direkt im Produktfluss.</li>
                </ul>
                <p><em>Interesse geweckt? Kontaktieren Sie uns für weitere Details!</em></p>
            </div>
        </div>
    <?php } ?>

    <!-- Produkt 6: MSM 765 SL -->
    <?php
    if ($selected_product === null || $selected_product === 'msm-765') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_msm765';
        ?>
        <div class="product-container" data-product-id="msm-765">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="Product/MADO/MSM-765-SL.png" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="MSM 765 SL Cutter"></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="Product/MADO/MSM-765-SL.png" alt=""></div>
                </div>
            </div>
            <div class="product-info">
                <h2>MSM 765 SL</h2>
                <p>Dieser Kutter ist mit einem Touchdisplay ausgestattet, das die Eingabe sämtlicher Sollwerte ermöglicht.
                    Auf dem Display finden Sie eine Anzeige für die Messerwellendrehzahl, die Anzahl der
                    Schüsselumdrehungen, die Temperatur sowie die Endabschaltung für Temperatur und Schüsselumdrehungen.</p>
                <p><em>Interesse geweckt? Kontaktieren Sie uns für weitere Details!</em></p>
            </div>
        </div>
    <?php } ?>

    <!-- Produkt 7: MSM 766/767 SL -->
    <?php
    if ($selected_product === null || $selected_product === 'msm-766-767') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_msm766767';
        ?>
        <div class="product-container" data-product-id="msm-766-767">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="Product/MADO/MSM-767-SL.png" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="MSM 766/767 SL Cutter"></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="Product/MADO/MSM-767-SL.png" alt=""></div>
                </div>
            </div>
            <div class="product-info">
                <h2>MSM 766/767 SL</h2>
                <h4>Serienausstattung:</h4>
                <ul>
                    <li>Speicherprogrammierbare Steuerung für Rezepturen und Arbeitsschritte.</li>
                    <li>Touchdisplay zur Eingabe sämtlicher Sollwerte.</li>
                    <li>Endabschaltung über Temperatur oder Schüsselumdrehungen.</li>
                    <li>Bis zu 8 Schnellwahltasten für Messerwellendrehzahl (frei konfigurierbar).</li>
                    <li>5 Schüsselstufen (frei konfigurierbar).</li>
                    <li>Temperatursensor für höchste Messgenauigkeit direkt im Produktfluss.</li>
                    <li>Stufenlose Geschwindigkeitsregelung der Messerwelle für Schneiden und Mischen.</li>
                    <li>6er Messerkopf.</li>
                    <li>Ablassöffnung in Kutterschüssel.</li>
                    <li>Hydraulische Schneidhaube.</li>
                </ul>
                <p><em>Interesse geweckt? Kontaktieren Sie uns für weitere Details!</em></p>
            </div>
        </div>
    <?php } ?>

    <!-- Produkt 8: Nowicki Industriekutter -->
    <?php
    if ($selected_product === null || $selected_product === 'nowicki-cutter') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_nowickicutter';
        ?>
        <div class="product-container" data-product-id="nowicki-cutter">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="Product/nowicki/cutter/kn-60.png" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="Nowicki KN-60 Cutter"></div>
                        <div class="swiper-slide"><img src="Product/nowicki/cutter/kn-90.png" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="Nowicki KN-90 Cutter"></div>
                        <div class="swiper-slide"><img src="Product/nowicki/cutter/kn-125-hl.png" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="Nowicki KN-125 HL Cutter"></div>
                        <div class="swiper-slide"><img src="Product/nowicki/cutter/kn-125-s.png" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="Nowicki KN-125 S Cutter"></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="Product/nowicki/cutter/kn-60.png" alt=""></div>
                    <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="Product/nowicki/cutter/kn-90.png" alt=""></div>
                    <div class="thumbnail" onclick="changeSlide(2, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="Product/nowicki/cutter/kn-125-hl.png" alt=""></div>
                    <div class="thumbnail" onclick="changeSlide(3, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="Product/nowicki/cutter/kn-125-s.png" alt=""></div>
                </div>
            </div>
            <div class="product-info">
                <h2>Nowicki Industriekutter</h2>
                <p>Erzielen Sie präzise Schnittergebnisse mit unseren Industriekuttern, ideal für die Herstellung von
                    Wurstwaren und anderen Fleischprodukten.</p>
                <p><em>Interesse geweckt? Kontaktieren Sie uns für weitere Details!</em></p>
            </div>
        </div>
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