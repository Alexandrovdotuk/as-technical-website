<?php
// rauchanlagen.php

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
        <title>Rauchanlagen & Klimareifeanlagen von Bastra | Service & Beratung</title>
        <!-- <meta name="description" content="Entdecken Sie hochwertige Rauchanlagen, Klimareifeanlagen und Kochanlagen von Bastra – mit Service, Reparatur und maßgeschneiderter Beratung für Ihre Produktion." />
        <meta name="keywords" content="Rauchanlagen, Klimareifeanlagen, Kochanlagen, Bastra, Räucheranlagen, Rauchkondensat, Reibrauch, Sägemehl, Hackspan, Service, Angebot, Reparatur, technische Beratung" />
        <meta name="robots" content="index, follow" /> -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="/styles/swiper-bundle.min.css" />
        <link rel="stylesheet" href="swiperpic.css" />

    </head>

    <body>
        <?php include 'header.php'; ?>
        <!-- Einführung -->
        <div class="leistungen">
            <h2>Ihre perfekte Rauchkammer – Zuverlässig, Innovativ, Maßgeschneidert</h2>
            <p>Suchen Sie eine Rauchanlage, Klimareifeanlage oder Klimareiferauchanlage, die hält, was sie verspricht?
                Zusammen mit unserem Partner Bastra, dem renommierten Hersteller hochwertiger Räucheranlagen, bieten wir
                Ihnen erstklassige Produkte, technischen Support und individuelle Beratung – alles aus einer Hand.</p>
            <p>Warum das so wichtig ist? Damit Ihre Produktion reibungslos startet, müssen werkseitige und bauseitige
                Komponenten perfekt harmonieren. Wir helfen Ihnen, genau die Lösung zu finden, die zu Ihren Anforderungen
                passt. Lernen Sie unsere vielfältigen Reifeanlagen, Kochkammern und Rauchanlagen kennen – mit
                unterschiedlichen Raucherzeugersystemen und Größen für jeden Bedarf!</p>
        </div>
        <div id="image-overlay">
            <img src="" alt="Vollbildansicht Räucheranlage" />
            <video controls style="display: none;"></video>
        </div>
    <?php } ?>

    <?php
    // Produkt 1: Modell 850
    if ($selected_product === null || $selected_product === 'modell-850') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_modell850';
        ?>
        <div class="product-container" data-product-id="modell-850">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/Product/Bastra/Modell850.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="Bastra Modell 850 Rauchanlage">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/Bastra/Duese.jpg" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="Bastra Düse">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/Bastra/Profi500.jpg" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="Bastra Steuerung">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Miniaturansichten -->
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/Bastra/Modell850.png" alt="Modell 850 Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/Bastra/Duese.jpg" alt="Düse Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(2, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/Bastra/Profi500.jpg" alt="Steuerung Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>Modell 850 – Sauberes Räuchern mit Rauchkondensat</h2>
                <p>Entdecken Sie eine innovative Lösung für Ihre Räucherprozesse: Die elektrisch beheizte Räucherkammer
                    Modell 850 nutzt modernste Rauchkondensat-Zerstäubung per Druckluft. Lassen Sie sich von den Vorteilen
                    dieser Technologie überzeugen!</p>

                <h3>Ihre Vorteile:</h3>
                <ul>
                    <li>Umweltfreundlich: Keine Rauchbelästigung für Ihre Nachbarschaft</li>
                    <li>Unkompliziert: Abluftreinigung? Nicht nötig!</li>
                    <li>Flexibel: Optional mit Schornstein kombinierbar</li>
                    <li>Pflegeleicht: Wenig Teerbildung – Reinigung leicht gemacht</li>
                    <li>Sicher: Alle Schadstoffe werden zuverlässig herausgefiltert</li>
                </ul>

                <h3>Innovative Funktionen:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Funktionen</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Druckluftschaumreinigung und -befeuchtung (für bauseitigen Kompressor)</li>
                                <li>Luftumwälzung mit zwei Geschwindigkeiten für optimale Ergebnisse</li>
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
                                        <td>Beheizungsart</td>
                                        <td>Elektrisch</td>
                                    </tr>
                                    <tr>
                                        <td>Raucherzeuger</td>
                                        <td>Rauchkondensat</td>
                                    </tr>
                                    <tr>
                                        <td>Maße ohne Tür (B×T×H)</td>
                                        <td>1220×845×2170 mm</td>
                                    </tr>
                                    <tr>
                                        <td>Erforderliche Raumhöhe min.</td>
                                        <td>2350 mm</td>
                                    </tr>
                                    <tr>
                                        <td>Erforderliche Türbreite min.</td>
                                        <td>940 mm</td>
                                    </tr>
                                    <tr>
                                        <td>Rauchstocklänge</td>
                                        <td>800 mm</td>
                                    </tr>
                                    <tr>
                                        <td>Rauchwagen-Außenmaße (B×T×H)</td>
                                        <td>830×700×1360 mm</td>
                                    </tr>
                                    <tr>
                                        <td>Beschickungsmengen</td>
                                        <td>45–150 kg</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <h3>Lieferumfang:</h3>
                <ul>
                    <li>Druckluftschaumreinigung und -befeuchtung (für bauseitigen Kompressor)</li>
                    <li>Luftumwälzung mit zwei Geschwindigkeiten</li>
                </ul>

                <p><em>Neugierig geworden? Kontaktieren Sie uns für eine maßgeschneiderte Beratung!</em></p>



                
            </div>
        </div>
    <?php } ?>

    <?php
    // Produkt 2: Modell 851
    if ($selected_product === null || $selected_product === 'modell-851') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_modell851';
        ?>
        <div class="product-container" data-product-id="modell-851">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/Product/Bastra/Modell851.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="Bastra Modell 851 Rauchanlage">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/Bastra/Profi500.jpg" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="Bastra Steuerung">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Miniaturansichten -->
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/Bastra/Modell851.png" alt="Modell 851 Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/Bastra/Profi500.jpg" alt="Steuerung Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>Modell 851 – Kompakt & Geschmackvoll mit Hackspan</h2>
                <p>Erleben Sie die perfekte Kombination aus Effizienz und Aroma: Das Modell 851 ist eine elektrisch beheizte
                    Rauchanlage mit einem clever in der Tür integrierten Hackspan-Raucherzeuger. Lassen Sie sich von dieser
                    platzsparenden Lösung begeistern!</p>

                <h3>Ihre Vorteile:</h3>
                <ul>
                    <li>Platzsparend: Passt ideal in jede Produktion</li>
                    <li>Unkompliziert: Einfaches System für schnellen Einsatz</li>
                    <li>Geschmackvoll: Intensives Raucharoma durch die Verglimmung von Hackspänen</li>
                </ul>

                <h3>Innovative Funktionen:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Funktionen</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Brandschutzfühler in der Raucherzeugertür für maximale Sicherheit</li>
                                <li>Reinigungssensor zur einfachen Überwachung</li>
                                <li>Druckluftschaumreinigung & -befeuchtung (für bauseitigen Kompressor)</li>
                                <li>Zweistufige Luftumwälzung für perfekte Ergebnisse</li>
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
                                        <td>Beheizungsart</td>
                                        <td>Elektrisch</td>
                                    </tr>
                                    <tr>
                                        <td>Raucherzeuger</td>
                                        <td>Hackspanraucherzeuger in der Tür</td>
                                    </tr>
                                    <tr>
                                        <td>Maße ohne Tür (B×T×H)</td>
                                        <td>1220×845×2170 mm</td>
                                    </tr>
                                    <tr>
                                        <td>Erforderliche Raumhöhe min.</td>
                                        <td>2350 mm</td>
                                    </tr>
                                    <tr>
                                        <td>Erforderliche Türbreite min.</td>
                                        <td>940 mm</td>
                                    </tr>
                                    <tr>
                                        <td>Rauchstocklänge</td>
                                        <td>800 mm</td>
                                    </tr>
                                    <tr>
                                        <td>Rauchwagen-Außenmaße (B×T×H)</td>
                                        <td>830×700×1360 mm</td>
                                    </tr>
                                    <tr>
                                        <td>Beschickungsmengen</td>
                                        <td>45–150 kg</td>
                                    </tr>
                                    <tr>
                                        <td>Hackspangröße</td>
                                        <td>4.0–12.0 mm</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <h3>Lieferumfang:</h3>
                <ul>
                    <li>Brandschutzfühler in der Raucherzeugertür für maximale Sicherheit</li>
                    <li>Reinigungssensor zur einfachen Überwachung</li>
                    <li>Druckluftschaumreinigung & -befeuchtung (für bauseitigen Kompressor)</li>
                    <li>Zweistufige Luftumwälzung für perfekte Ergebnisse</li>
                </ul>

                <p><em>Interesse geweckt? Lassen Sie uns gemeinsam Ihre perfekte Lösung finden!</em></p>
            </div>
        </div>
    <?php } ?>

    <?php
    // Produkt 3: Modell 1201
    if ($selected_product === null || $selected_product === 'modell-1201') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_modell1201';
        ?>
        <div class="product-container" data-product-id="modell-1201">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/Product/Bastra/Modell1201.PNG" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="Bastra Modell 1201 RR Rauchanlage">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/Bastra/Profi700.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="Bastra Steuerung">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Miniaturansichten -->
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/Bastra/Modell1201.PNG" alt="Modell 1201 Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/Bastra/Profi700.png" alt="Steuerung Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>Bastramat Modell 1201 RR – Effizientes Räuchern mit Reibrauch</h2>
                <p>Erleben Sie höchste Effizienz und Qualität: Der Bastramat Modell 1201 RR ist eine vielseitige Rauchanlage
                    mit einem integrierten Reibrauch-Raucherzeuger in der Tür. Diese Lösung bietet Flexibilität für
                    verschiedene Heizungsarten und überzeugt mit erstklassigen Ergebnissen!</p>

                <h3>Ihre Vorteile:</h3>
                <ul>
                    <li>Vielseitig: Kompatibel mit elektrischer, HD-Dampf-, Gas- oder Öl-Heizung</li>
                    <li>Einfach zu bedienen: Reibrauch-System für schnelle und präzise Rauchentwicklung</li>
                    <li>Qualität: Perfektes Raucharoma durch den Einsatz von Reibrauch</li>
                </ul>

                <h3>Innovative Funktionen:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Funktionen</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Brandschutzsystem für maximale Sicherheit</li>
                                <li>Reinigungssensor für einfache Wartung</li>
                                <li>Druckluftschaumreinigung & -befeuchtung (für bauseitigen Kompressor)</li>
                                <li>Zweistufige Luftumwälzung für optimale Ergebnisse</li>
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
                                        <td>Beheizungsart</td>
                                        <td>Elektrisch, HD-Dampf, Gas, Öl</td>
                                    </tr>
                                    <tr>
                                        <td>Raucherzeuger</td>
                                        <td>Reibrauch in der Tür</td>
                                    </tr>
                                    <tr>
                                        <td>Maße ohne Tür (B×T×H) – Elektrische Heizung</td>
                                        <td>1395×990×2525 mm</td>
                                    </tr>
                                    <tr>
                                        <td>Maße ohne Tür (B×T×H) – Gas/Ölheizung</td>
                                        <td>1395×990×2580 mm</td>
                                    </tr>
                                    <tr>
                                        <td>Erforderliche Raumhöhe min.</td>
                                        <td>2630 mm</td>
                                    </tr>
                                    <tr>
                                        <td>Erforderliche Türbreite min.</td>
                                        <td>1120 mm</td>
                                    </tr>
                                    <tr>
                                        <td>Rauchstocklänge</td>
                                        <td>900 mm</td>
                                    </tr>
                                    <tr>
                                        <td>Rauchwagen-Außenmaße (B×T×H)</td>
                                        <td>980×800×1500 mm</td>
                                    </tr>
                                    <tr>
                                        <td>Beschickungsmengen</td>
                                        <td>60–220 kg</td>
                                    </tr>
                                    <tr>
                                        <td>Balkenmaße BxT</td>
                                        <td>80×80 mm</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <h3>Lieferumfang:</h3>
                <ul>
                    <li>Brandschutzsystem für maximale Sicherheit</li>
                    <li>Reinigungssensor für einfache Wartung</li>
                    <li>Druckluftschaumreinigung & -befeuchtung (für bauseitigen Kompressor)</li>
                    <li>Zweistufige Luftumwälzung für optimale Ergebnisse</li>
                </ul>

                <p><em>Interesse geweckt? Kontaktieren Sie uns für eine maßgeschneiderte Beratung!</em></p>
            </div>
        </div>
    <?php } ?>

    <?php

    // Produkt 4: Modell 1501
    if ($selected_product === null || $selected_product === 'modell-1501') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_modell1501';
        ?>
        <div class="product-container" data-product-id="modell-1501">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/Product/Bastra/Modell1501.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="Bastra Modell 1501 UF/GS Rauchanlage">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/Bastra/Tür GS.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="Bastra Tür">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/Bastra/Profi700.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="Bastra Steuerung">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Miniaturansichten -->
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/Bastra/Modell1501.png" alt="Modell 1501 Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/Bastra/Tür GS.png" alt="Tür Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(2, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/Bastra/Profi700.png" alt="Steuerung Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>Bastramat Modell 1501 UF/GS – Präzises Räuchern mit Sägemehl</h2>
                <p>Erleben Sie professionelles Räuchern auf höchstem Niveau: Der Bastramat Modell 1501 UF/GS ist eine
                    vielseitige Rauchanlage mit einem integrierten Sägemehlraucherzeuger in der Tür. Diese Lösung bietet
                    Flexibilität und erstklassige Ergebnisse für verschiedene Heizungsarten!</p>

                <h3>Ihre Vorteile:</h3>
                <ul>
                    <li>Vielseitig: Kompatibel mit elektrischer, ND-Dampf-, Gas- oder Öl-Heizung</li>
                    <li>Einfach zu bedienen: Sägemehl-System für präzise Rauchentwicklung</li>
                    <li>Qualität: Intensives Raucharoma durch die optimale Verwendung von Sägemehl</li>
                </ul>

                <h3>Innovative Funktionen:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Funktionen</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Brandschutzsystem für maximale Sicherheit</li>
                                <li>Reinigungssensor für einfache Wartung</li>
                                <li>Druckluftschaumreinigung & -befeuchtung (für bauseitigen Kompressor)</li>
                                <li>Zweistufige Luftumwälzung für optimale Ergebnisse</li>
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
                                        <td>Beheizungsart</td>
                                        <td>Elektrisch, ND-Dampf, Gas, Öl</td>
                                    </tr>
                                    <tr>
                                        <td>Raucherzeuger</td>
                                        <td>Sägemehlraucherzeuger in der Tür</td>
                                    </tr>
                                    <tr>
                                        <td>Maße ohne Tür (B×T×H) – Elektrische Heizung</td>
                                        <td>1500×1140×2820 mm</td>
                                    </tr>
                                    <tr>
                                        <td>Maße ohne Tür (B×T×H) – Gas/Ölheizung</td>
                                        <td>1500×1140×2890 mm</td>
                                    </tr>
                                    <tr>
                                        <td>Erforderliche Raumhöhe min.</td>
                                        <td>3500 mm</td>
                                    </tr>
                                    <tr>
                                        <td>Erforderliche Türbreite min.</td>
                                        <td>1200 mm</td>
                                    </tr>
                                    <tr>
                                        <td>Rauchstocklänge</td>
                                        <td>900/1000 mm</td>
                                    </tr>
                                    <tr>
                                        <td>Rauchwagen-Außenmaße (B×T×H)</td>
                                        <td>930×840×1690 mm oder 1030×840×1690 mm</td>
                                    </tr>
                                    <tr>
                                        <td>Beschickungsmengen</td>
                                        <td>80–300 kg</td>
                                    </tr>
                                    <tr>
                                        <td>Sägemehlgröße</td>
                                        <td>0,1–3 mm</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <h3>Lieferumfang:</h3>
                <ul>
                    <li>Brandschutzsystem für maximale Sicherheit</li>
                    <li>Reinigungssensor für einfache Wartung</li>
                    <li>Druckluftschaumreinigung & -befeuchtung (für bauseitigen Kompressor)</li>
                    <li>Zweistufige Luftumwälzung für optimale Ergebnisse</li>
                </ul>

                <p><em>Interesse geweckt? Kontaktieren Sie uns für ein maßgeschneidertes Angebot!</em></p>

            </div>

        </div>
        <!-- Abschnitt für Zubehör: Rauchstöcke kaufen -->

        <div class="product-container" data-product-id="zubehoer-rauchstoecke">
            <div class="product-image">
                <div class="swiper mySwiper_zubehoer">
                    <div class="swiper-wrapper">
                        <!-- Hier Bilder für das Zubehör hinzufügen, z.B. Rauchstöcke -->
                        <div class="swiper-slide">
                            <img src="/Product/Bastra/zubehoehr/rauchstock.png" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="Rauchstock Bild 1">
                        </div>
                        <div class="swiper-slide">
                            <img src="Product/Bastra/zubehoehr/rauchstock.png" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="Rauchstock Bild 2">
                        </div>
                        <!-- Füge mehr Slides hinzu, falls nötig -->
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Miniaturansichten -->
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, 'mySwiper_zubehoer')">
                        <img src="Product/Bastra/zubehoehr/rauchstock.png" alt="Rauchstock Thumbnail 1">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(1, 'mySwiper_zubehoer')">
                        <img src="Product/Bastra/zubehoehr/rauchstock.png" alt="Rauchstock Thumbnail 2">
                    </div>
                    <!-- Füge mehr Thumbnails hinzu, falls nötig -->
                </div>
            </div>
            <div class="product-info">
                <h2>Rauchstöcke – Passendes Zubehör für Ihre Anlage</h2>
                <p>Edelstahl Rauchstöcke</p>
                <p>Unsere hochwertigen Rauchstöcke aus Edelstahl sind die ideale Lösung für jeden Räuchervorgang. Sie
                    überzeugen nicht nur durch ihre Robustheit, sondern auch durch ihre unkomplizierte Handhabung und
                    Pflege.</p>

                <h3>Vorteile im Überblick:</h3>
                <ul>
                    <li>Extrem langlebig dank rostfreiem Edelstahl</li>
                    <li>Einfach zu reinigen – ideal während des automatischen Reinigungsprogramms der Räucherkammer</li>
                    <li>Bequem auf dem Räucherwagen platzierbar</li>
                    <li>Schnelles Abspülen und sofort wieder einsatzbereit</li>
                    <li>Diese Rauchstöcke sind eine perfekte Wahl für Metzgereien, Lebensmittelbetriebe und passionierte
                        Hobbyräucherer, die Wert auf Effizienz und Hygiene legen.</li>
                </ul>

                <p>Machen Sie Ihren Räucherprozess einfacher und sauberer mit unseren Edelstahl-Rauchstöcken!</p>

                <script
                    src="https://www.paypal.com/sdk/js?client-id=BAAtkHIBY0tUIMYXw--b0RLfK2JG3E2w5EANOiA8nmJoHJFG9p_eQFNMn5o1hAmHSwIf6YlMCOHVn_wg20&components=hosted-buttons&disable-funding=venmo&currency=EUR">
                    </script>


                <div id="paypal-container-DQS9FHFKHSN9U"></div>
                <script>
                    paypal.HostedButtons({
                        hostedButtonId: "DQS9FHFKHSN9U",
                    }).render("#paypal-container-DQS9FHFKHSN9U")
                </script>
                <style>
                    #paypal-form-fields-container-DQS9FHFKHSN9U .item-header {
                        display: flex;
                        justify-content: space-between;
                        align-items: flex-start;
                        margin-top: 0;
                        margin-bottom: 1rem;
                        overflow-wrap: anywhere;
                        gap: 1.5rem;
                    }


                    #paypal-form-fields-container-DQS9FHFKHSN9U .item-description {
                        white-space: pre-line;
                        overflow-wrap: anywhere;
                        color: green;
                    }

                    #paypal-form-fields-container-DQS9FHFKHSN9U .input-label {
                        display: none;
                        font-size: 0.875rem;
                        margin-bottom: 0.25rem;
                        overflow-wrap: anywhere;
                        color: blue;
                    }

                    .css-au42bs {
                        margin-top: 1rem;
                        margin-left: auto;
                        margin-right: auto;
                        display: none;
                        height: 1.5rem;
                        width: 10.875rem;
                    }

                    span {
                        margin: auto;
                    }

                    /* Zentriere den PayPal-container */
                    #paypal-container-DQS9FHFKHSN9U {
                        display: block;
                        /* Ersetzt flex, um Schmalheit zu vermeiden */
                        width: auto;
                        /* Ermöglicht natürliche Breite des Inhalts */
                        max-width: 500px;
                        /* Maximale Breite für bessere Optik – passe bei Bedarf an */
                        height: auto;
                        /* Verhindert vertikale Streckung */
                        margin: 0 auto;
                        /* Zentriert den Block-Element horizontal */
                        padding: 10px;
                        /* Fügt Abstand hinzu für bessere Optik */
                        box-sizing: border-box;
                        /* Stellt sicher, dass Padding in die Breite einfließt */
                    }
                </style>
            </div>
        </div>
    <?php } ?>

    <?php
    // Produkt 5: Modell 2000
    if ($selected_product === null || $selected_product === 'modell-2000') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_modell2000';
        ?>
        <div class="product-container" data-product-id="modell-2000">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/Product/Bastra/Modell2000.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="Bastra Modell 2000 TF Rauchanlage">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/Bastra/Profi700.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="Bastra Steuerung">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Miniaturansichten -->
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/Bastra/Modell2000.png" alt="Modell 2000 Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/Bastra/Profi700.png" alt="Steuerung Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>Bastramat Modell 2000 TF – Leistungsstarkes Räuchern mit Hackspan</h2>
                <p>Erleben Sie professionelle Räuchertechnologie auf höchstem Niveau: Der Bastramat Modell 2000 TF ist eine
                    leistungsstarke Rauchanlage mit einem nebenstehenden Hackspanraucherzeuger, die sich durch Flexibilität
                    und erstklassige Ergebnisse auszeichnet. Ideal für große Produktionen!</p>

                <h3>Ihre Vorteile:</h3>
                <ul>
                    <li>Leistungsstark: Geeignet für große Beschickungsmengen von 110–400 kg</li>
                    <li>Vielseitig: Kompatibel mit elektrischer, ND-Dampf-, HD-Dampf-, Gas- oder Öl-Heizung</li>
                    <li>Qualität: Intensives Raucharoma durch den Einsatz von Hackspänen</li>
                </ul>

                <h3>Innovative Funktionen:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Funktionen</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Brandschutzsystem für maximale Sicherheit</li>
                                <li>Reinigungssensor für einfache Wartung</li>
                                <li>Druckluftschaumreinigung & -befeuchtung (für bauseitigen Kompressor)</li>
                                <li>Zweistufige Luftumwälzung für optimale Ergebnisse</li>
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
                                        <td>Beheizungsart</td>
                                        <td>Elektrisch, ND-Dampf, HD-Dampf, Gas, Öl</td>
                                    </tr>
                                    <tr>
                                        <td>Raucherzeuger</td>
                                        <td>Hackspanraucherzeuger nebenstehend</td>
                                    </tr>
                                    <tr>
                                        <td>Maße ohne Tür (B×T×H) – Elektrische Heizung</td>
                                        <td>1500×1230×3455 mm</td>
                                    </tr>
                                    <tr>
                                        <td>Maße ohne Tür (B×T×H) – Gas/Ölheizung</td>
                                        <td>1500×1230×3155 mm</td>
                                    </tr>
                                    <tr>
                                        <td>Maße ohne Tür (B×T×H) – HD/ND</td>
                                        <td>1500×1230×3245 mm</td>
                                    </tr>
                                    <tr>
                                        <td>Erforderliche Raumhöhe min.</td>
                                        <td>4000 mm</td>
                                    </tr>
                                    <tr>
                                        <td>Erforderliche Türbreite min.</td>
                                        <td>1300 mm</td>
                                    </tr>
                                    <tr>
                                        <td>Rauchstocklänge</td>
                                        <td>1000 mm</td>
                                    </tr>
                                    <tr>
                                        <td>Rauchwagen-Außenmaße (B×T×H)</td>
                                        <td>1030×1000×1900 mm</td>
                                    </tr>
                                    <tr>
                                        <td>Beschickungsmengen</td>
                                        <td>110–400 kg</td>
                                    </tr>
                                    <tr>
                                        <td>Hackspangröße</td>
                                        <td>4.0–12.0 mm</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <h3>Lieferumfang:</h3>
                <ul>
                    <li>Brandschutzsystem für maximale Sicherheit</li>
                    <li>Reinigungssensor für einfache Wartung</li>
                    <li>Druckluftschaumreinigung & -befeuchtung (für bauseitigen Kompressor)</li>
                    <li>Zweistufige Luftumwälzung für optimale Ergebnisse</li>
                </ul>

                <p><em>Interesse geweckt? Kontaktieren Sie uns für ein maßgeschneidertes Angebot!</em></p>
            </div>
        </div>
    <?php } ?>

    <?php
    // Produkt 6: Smart 500
    if ($selected_product === null || $selected_product === 'smart-500') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_smart500';
        ?>
        <div class="product-container" data-product-id="smart-500">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/Product/Bastra/SmartBullauge.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="Bastra Smart 500">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/Bastra/SmartBlack.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="Bastra Smart 500">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/Bastra/Smart.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="Bastra Smart 500">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/Bastra/Profi500.jpg" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="Bastra Steuerung">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Miniaturansichten -->
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/Bastra/SmartBullauge.png" alt="Smart 500 Thumbnail 1">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/Bastra/SmartBlack.png" alt="Smart 500 Thumbnail 2">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(2, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/Bastra/Smart.png" alt="Smart 500 Thumbnail 3">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(3, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/Bastra/Profi500.jpg" alt="Steuerung Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>Smart 500 – Ihr Alleskönner für Frische & Genuss</h2>
                <p>Bringen Sie Geschmack und Vielseitigkeit direkt an Ihre Theke! Der Smart 500 von BASTRA ist die perfekte
                    Universalanlage für klassische Räucherwaren und mehr – ob Kalt- oder Heißräuchern, Erwärmen, Trocknen,
                    Brühen oder Braten. Mit intuitiver Bedienung und patentierter Rauchkondensat-Technologie wird Räuchern
                    so einfach wie nie zuvor. Lassen Sie sich inspirieren!</p>

                <h3>Ihre Vorteile:</h3>
                <ul>
                    <li>Vielseitig: Räuchern, Braten, Trocknen – alles in einem Gerät</li>
                    <li>Intuitiv: Einfache Steuerung für schnelle Ergebnisse</li>
                    <li>Innovativ: Patentiertes Rauchkondensat statt herkömmlicher Raucherzeugung</li>
                    <li>Frische: Perfekt für Ihre Theke – direkt zum Genießen</li>
                </ul>

                <h3>Innovative Funktionen:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Funktionen</button>
                        <div class="accordion-content">
                            <ul>
                                <li>BASTRA-Rauchkondensatsystem</li>
                                <li>Temperaturbereich bis 180°C</li>
                                <li>Vollautomatische Druckluftschäumreinigung zum Anschluss an bauseitigen Kompressor</li>
                                <li>Integrated rack with 8 levels for smoke sticks with a length of 570 mm as well as for GN
                                    2/1 and GN 1/1 containers or grates</li>
                                <li>Sichtfenster</li>
                                <li>Innenraumbeleuchtung</li>
                                <li>Eingebaute Kühldusche</li>
                                <li>Touchpanel-Steuerung BASTRAprof500 direkt in die Kopffläche eingebaut</li>
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
                                        <td>Beheizungsart</td>
                                        <td>Elektrisch</td>
                                    </tr>
                                    <tr>
                                        <td>Raucherzeuger</td>
                                        <td>Clean Smoke</td>
                                    </tr>
                                    <tr>
                                        <td>Maße (B×T×H)</td>
                                        <td>980×1020×2000 mm</td>
                                    </tr>
                                    <tr>
                                        <td>Erforderliche Raumhöhe min.</td>
                                        <td>2020 mm</td>
                                    </tr>
                                    <tr>
                                        <td>Kochrauminhalt</td>
                                        <td>430 Liter</td>
                                    </tr>
                                    <tr>
                                        <td>Erforderliche Türbreite min.</td>
                                        <td>1100 mm</td>
                                    </tr>
                                    <tr>
                                        <td>Rauchstocklänge</td>
                                        <td>570 mm</td>
                                    </tr>
                                    <tr>
                                        <td>Beschickungsmengen</td>
                                        <td>35–110 kg</td>
                                    </tr>
                                    <tr>
                                        <td>Heizleistung</td>
                                        <td>15 kW</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <h3>Lieferumfang:</h3>
                <ul>
                    <li>BASTRA-Rauchkondensatsystem</li>
                    <li>Temperaturbereich bis 180°C</li>
                    <li>Vollautomatische Druckluftschäumreinigung zum Anschluss an bauseitigen Kompressor</li>
                    <li>Integrated rack with 8 levels for smoke sticks with a length of 570 mm as well as for GN 2/1 and GN
                        1/1 containers or grates</li>
                    <li>Sichtfenster</li>
                    <li>Innenraumbeleuchtung</li>
                    <li>Eingebaute Kühldusche</li>
                    <li>Touchpanel-Steuerung BASTRAprof500 direkt in die Kopffläche eingebaut</li>
                </ul>

                <p><em>Bereit für den nächsten Schritt in Ihrer Küche? Kontaktieren Sie uns und entdecken Sie die
                        Möglichkeiten!</em></p>
            </div>
        </div>
    <?php } ?>

    <?php
    // Produkt 7: Klima-Reife-Rauchanlage
    if ($selected_product === null || $selected_product === 'klimareife') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_klimareife';
        ?>
        <div class="product-container" data-product-id="klimareife">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/Product/Bastra/Klimareife.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="Bastra Klima-Reife-Rauchanlage">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Miniaturansichten -->
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/Bastra/Klimareife.png" alt="Klima-Reife Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>Klima-Reife-Rauchanlage – Geschmackvoll Reifen, Perfekt Räuchern</h2>
                <p>Verleihen Sie Ihren Roh- und Dauerwaren unvergleichlichen Geschmack! Die Klima-Reife-Rauchanlagen von
                    BASTRA sind Ihre Lösung für präzises Reifen, Trocknen, Räuchern und Nachreifen. Dank modernster
                    Technologie schaffen sie ein ideales Klima für einen schonenden Reifeprozess – und bieten dabei jede
                    Menge Platz. Entdecken Sie, wie Ihre Produkte neue Höhen erreichen!</p>

                <h3>Ihre Vorteile:</h3>
                <ul>
                    <li>Präzise Klimatisierung: Perfekte Bedingungen für geschmackvolle Ergebnisse</li>
                    <li>Schonend: Sorgfältiger Reifeprozess für höchste Qualität</li>
                    <li>Raumwunder: Viel Platz für Ihre Waren – flexibel und effizient</li>
                    <li>Vielseitig: Reifen, Räuchern oder Nachreifen – alles in einem System</li>
                </ul>

                <h3>Innovative Funktionen:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Funktionen</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Präzise Klimatisierung für optimale Reifebedingungen</li>
                                <li>Schonender Reifeprozess</li>
                                <li>Viel Platz für Produkte</li>
                                <li>Vielseitig: Reifen, Räuchern oder Nachreifen</li>
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
                                        <td>Reifen & Räuchern</td>
                                        <td>Bis zu 36 Wagen bei +10°C bis +30°C (3-reihige Aufstellung)</td>
                                    </tr>
                                    <tr>
                                        <td>Nachreifen</td>
                                        <td>Bis zu 120 Wagen bei +10°C bis +20°C (8-reihige Aufstellung)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <h3>Lieferumfang:</h3>
                <ul>
                    <li>Klima-Reife-Rauchanlage</li>
                </ul>

                <p><em>Bereit für erstklassige Ergebnisse? Kontaktieren Sie uns für Ihre maßgeschneiderte Lösung!</em></p>
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