<?php
// kuehltechnik.php

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
        <title>Kühltechnik von Atosa | AS Technical Solutions</title>
        <meta name="description" content="Entdecken Sie professionelle Kühltechnik von Atosa für Gastronomie, Hotellerie und Lebensmittelverarbeitung. Robuste Qualität, hohe Energieeffizienz und modernes Design." />
        <meta name="keywords" content="Kühltechnik, Atosa, Gastronomie, Hotellerie, Kühlschränke, Gefrierschränke, Saladetten, Kühltheken, Lebensmittelverarbeitung" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    </head>

    <body>
        <?php include 'header.php'; ?>
        <!-- Einführung -->
        <div class="leistungen">
            <h2>Professionelle Kühltechnik von Atosa – Qualität für Ihren Betrieb</h2>
            <p>Benötigen Sie zuverlässige Kühltechnik für Ihre Gastronomie oder Hotellerie? Unser Partner Atosa bietet erstklassige Lösungen, die höchste Standards in Qualität, Energieeffizienz und Design vereinen. Als weltweit führender Hersteller von gewerblicher Kühltechnik liefert Atosa robuste Kühlschränke, Gefrierschränke, Saladetten und Kühltheken, die Ihren Arbeitsalltag spürbar erleichtern.</p>
            <p>Mit einem unschlagbaren Preis-Leistungs-Verhältnis und bis zu 5 Jahren Gewährleistung ist Atosa die ideale Wahl für Restaurants, Hotels, Imbisse und Großküchen. Entdecken Sie unser Sortiment und finden Sie die perfekte Kühltechnik für Ihre Anforderungen!</p>
        </div>

        <div id="image-overlay">
            <img src="" alt="Vollbildansicht Kühltechnik" />
            <video controls style="display: none;"></video>
        </div>
    <?php } ?>



    <!-- Produkt 1: 2-Türige Saladette mit Schiebedeckel 2 x GN1/1 -->
    <?php
    if ($selected_product === null || $selected_product === 'atosa-saladette-2tuerig') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_atosaSaladette2Tuerig';
    ?>
        <div class="product-container" data-product-id="atosa-saladette-2tuerig">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <!-- Platzhalter für Bilder -->
                        <div class="swiper-slide"><img src="../Product/Atosa/saladette/saladette1.jpg" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Atosa saladette1"></div>
                        <div class="swiper-slide"><img src="../Product/Atosa/saladette/saladette2.jpg" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Atosa saladette2"></div>
                        <div class="swiper-slide"><img src="../Product/Atosa/saladette/saladette3.jpg" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Atosa saladette3"></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/Atosa/saladette/saladette1.jpg" alt="Atosa saladette1 Thumbnail"></div>
                    <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/Atosa/saladette/saladette2.jpg" alt="Atosa saladette1 Thumbnai2"></div>
                    <div class="thumbnail" onclick="changeSlide(2, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/Atosa/saladette/saladette3.jpg" alt="Atosa saladette1 Thumbnai3"></div>
                </div>
            </div>
            <div class="product-info">
                <h2>2-Türige Saladette mit Schiebedeckel 2 x GN1/1 – Praktisch und Effizient</h2>
                <p>Die 2-türige Saladette mit Schiebedeckel von Atosa ist die perfekte Lösung für Gastronomiebetriebe, die Wert auf Frische, Hygiene und Effizienz legen. Mit einem großzügigen Fassungsvermögen und einer robusten Edelstahlkonstruktion ist sie ideal für die Zubereitung und Lagerung von frischen Zutaten in Restaurants, Imbissen oder Catering-Unternehmen.</p>
                <h4>Warum diese Saladette begeistert:</h4>
                <ul>
                    <li><strong>Hochwertige Materialien:</strong> Komplett aus Edelstahl AISI 201 – innen und außen – für Langlebigkeit und Hygiene.</li>
                    <li><strong>Energieeffizient:</strong> Umweltfreundliches Kühlmittel R600a (Isobutan) mit einem niedrigen GWP-Wert von 3.</li>
                    <li><strong>Praktisches Design:</strong> Selbstschließende und arretierbare Türen mit magnetischen Dichtungen für eine sichere Lagerung.</li>
                    <li><strong>Flexibilität:</strong> Ausgestattet mit Rollen und austauschbaren Füßen für einfache Mobilität und Anpassung.</li>
                    <li><strong>Zuverlässige Kühlung:</strong> Konstante Temperatur von +2 °C bis +8 °C, auch bei Umgebungstemperaturen von bis zu +30 °C.</li>
                </ul>
                <h4>Ihre Standardausstattung im Überblick:</h4>
                <p>Mit diesen Features starten Sie direkt durch:</p>
                <ul>
                    <li>Unten montierter Kompressor für platzsparende Nutzung.</li>
                    <li>Inklusive GN-Behälter (2 x GN1/1) für sofortige Einsatzbereitschaft.</li>
                    <li>Digitale Steuerung für präzise Temperaturregelung.</li>
                </ul>
                <h4>Technische Daten:</h4>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Technische Daten</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Abmessungen (B×T×H):</strong> 900 × 700 × 875 mm</li>
                                <li><strong>Innenmaße (B×T×H):</strong> 830 × 595 × 510 mm</li>
                                <li><strong>Anzahl Roste je Tür:</strong> 2</li>
                                <li><strong>Rostabmessungen:</strong> 335 × 590 mm / 340 × 590 mm</li>
                                <li><strong>Inhalt (Brutto/Netto):</strong> 300 / 169 Liter</li>
                                <li><strong>Gewicht (Brutto/Netto):</strong> 90 / 70 kg</li>
                                <li><strong>Temperaturbereich:</strong> +2 °C bis +8 °C</li>
                                <li><strong>Klimaklasse:</strong> 4C</li>
                                <li><strong>Stromversorgung:</strong> 220 V – 50 Hz</li>
                                <li><strong>Kühlmittel:</strong> R600a (Isobutan) – GWP 3</li>
                                <li><strong>Anschlusswert:</strong> 310 W</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p><em>Neugierig geworden? Kontaktieren Sie uns für eine maßgeschneiderte Beratung!</em></p>
            </div>
        </div>
    <?php } ?>

    <!-- Produkt: Eintüriger Glastürtiefkühlschrank MCF8720GR -->
    <?php
    if ($selected_product === null || $selected_product === 'atosa-glastuertiefkuehlschrank-mcf8720gr') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_atosaGlastuerTiefkuehlschrankMCF8720GR';
    ?>
        <div class="product-container" data-product-id="atosa-glastuertiefkuehlschrank-mcf8720gr">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <!-- Platzhalter für Bilder -->
                        <div class="swiper-slide"><img src="../Product/Atosa/kuehlschrank/kuehlschrank1.jpg" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Atosa Glastürtiefkühlschrank MCF8720GR"></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/Atosa/kuehlschrank/kuehlschrank1.jpg" alt="Atosa Glastürtiefkühlschrank MCF8720GR Thumbnail"></div>
                </div>
            </div>
            <div class="product-info">
                <h2>Eintüriger Glastürtiefkühlschrank MCF8720GR – Zuverlässige Tiefkühlung mit Stil</h2>
                <p>Der eintürige Glastürtiefkühlschrank MCF8720GR von Atosa ist die ideale Lösung für Gastronomiebetriebe, die eine zuverlässige Tiefkühlung mit ansprechendem Design suchen. Mit einer großzügigen Kapazität von 610 Litern (brutto) und moderner LED-Beleuchtung ist er perfekt für Restaurants, Hotels oder Imbisse geeignet, um tiefgekühlte Produkte stilvoll zu präsentieren.</p>
                <h4>Warum dieser Tiefkühlschrank begeistert:</h4>
                <ul>
                    <li><strong>Modernes Design:</strong> Glastür mit LED-Innenbeleuchtung für eine attraktive Produktpräsentation.</li>
                    <li><strong>Robuste Konstruktion:</strong> Hochwertige Verarbeitung für langfristige Nutzung in anspruchsvollen Umgebungen.</li>
                    <li><strong>Praktisches Handling:</strong> Selbstschließende und arretierbare Tür mit magnetischen Dichtungen für sichere Lagerung.</li>
                    <li><strong>Flexibilität:</strong> Ausgestattet mit 4 Rollen (2 mit Bremsen vorne) für einfache Mobilität in Ihrer Küche.</li>
                    <li><strong>Zuverlässige Leistung:</strong> Leistungsstarker Kompressor und Klimaklasse 4 für konstante Tiefkühlung bei -17 °C bis -20 °C.</li>
                </ul>
                <h4>Ihre Standardausstattung im Überblick:</h4>
                <p>Mit diesen Features starten Sie direkt durch:</p>
                <ul>
                    <li>Unten montierter Kompressor für platzsparende Nutzung.</li>
                    <li>5 vorinstallierte Roste (545 × 622 mm) für sofortige Einsatzbereitschaft.</li>
                    <li>LED-Innenbeleuchtung für optimale Sichtbarkeit.</li>
                    <li>Digitale Steuerung (Carel) für präzise Temperaturregelung.</li>
                </ul>
                <h4>Technische Daten:</h4>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Technische Daten</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Abmessungen (B×T×H):</strong> 685 × 805 × 2065 mm</li>
                                <li><strong>Innenmaße (B×T×H):</strong> 565 × 640 × 1525 mm</li>
                                <li><strong>Anzahl Roste:</strong> 5</li>
                                <li><strong>Rostabmessungen:</strong> 545 × 622 mm</li>
                                <li><strong>Inhalt (Brutto/Netto):</strong> 610 / 405 Liter</li>
                                <li><strong>Gewicht (Brutto/Netto):</strong> 155 / 140 kg</li>
                                <li><strong>Temperaturbereich:</strong> -17 °C bis -20 °C</li>
                                <li><strong>Klimaklasse:</strong> 4</li>
                                <li><strong>Energieeffizienzklasse:</strong> C</li>
                                <li><strong>Stromversorgung:</strong> 220 V – 50 Hz</li>
                                <li><strong>Kühlmittel:</strong> R290 (Propan) – GWP 3</li>
                                <li><strong>Anschlusswert:</strong> 750 W</li>
                                <li><strong>Rollen:</strong> 4 Rollen (2 mit Bremsen vorne)</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p><em>Neugierig geworden? Kontaktieren Sie uns für eine maßgeschneiderte Beratung!</em></p>
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