<?php
// konvectomat.php

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
        <title>ATOSA Gastro-Kombidämpfer 5 Ebenen GN1/1</title>
        <meta name="description"
            content="Entdecken Sie den ATOSA EPC-0511E1 Gastro-Kombidämpfer mit 5 Ebenen GN1/1 – ideal für Gastronomie, Bäckerei & Konditorei. Smart Cooking, Wi-Fi, Touchscreen & mehr!" />
        <meta name="keywords"
            content="ATOSA EPC-0511E1, Gastro-Kombidämpfer, Kombidämpfer Gastronomie, Smart Cooking, 5 Ebenen GN1/1, Wi-Fi Kombidämpfer, Touchscreen Kombidämpfer, professionelle Küche" />
        <meta name="robots" content="index, follow" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="/styles/swiper-bundle.min.css" />
        <link rel="stylesheet" href="swiperpic.css" />

    </head>

    <body>
        <?php include 'header.php'; ?>
        <!-- Einführung -->
        <div class="leistungen">
            <h2>Ihr perfekter Gastro-Kombidämpfer</h2>
            <p>Der ATOSA EPC-0511E1 Gastro-Kombidämpfer revolutioniert die professionelle Küche mit modernster Technologie
                und innovativen Funktionen. Ideal für Gastronomie, Bäckerei und Konditorei, bietet dieser Kombidämpfer mit 5
                Ebenen im GN1/1-Format höchste Präzision und Effizienz. Dank der Smart Cooking-Technologie, einem
                reaktionsschnellen 10-Zoll-Touchscreen und Wi-Fi-Konnektivität meistern Sie jede kulinarische
                Herausforderung – vom À-la-carte-Service bis hin zu Banketten.</p>
            <p>Profitieren Sie von unserem Service, Reparatur und individueller Beratung. Lassen Sie sich von unserer
                Expertise überzeugen!</p>
        </div>
        <div id="image-overlay">
            <img src="" alt="Vollbildansicht ATOSA EPC-0511E1 Gastro-Kombidämpfer" />
            <video controls style="display: none;"></video>
        </div>
    <?php } ?>

    <?php
    // Produkt 1: Atosa1
    if ($selected_product === null || $selected_product === 'Atosa1') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_Atosa1';
        ?>
        <div class="product-container" data-product-id="Atosa1">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/Product/atosa/atosa1.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="ATOSA EPC-0511E1 Gastro-Kombidämpfer Frontansicht">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/atosa/atosa2.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="ATOSA EPC-0511E1 Gastro-Kombidämpfer Seitenansicht">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/atosa/atosa3.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="ATOSA EPC-0511E1 Gastro-Kombidämpfer Innenraum">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/atosa/atosa4.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="ATOSA EPC-0511E1 Kombidämpfer Bedienfeld Touchscreen">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/atosa/atosa5.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="ATOSA EPC-0511E1 Gastro-Kombidämpfer Detailansicht">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/atosa/atosa6.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="ATOSA EPC-0511E1 Kombidämpfer 5 Ebenen GN1/1">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/atosa/atosa7.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="ATOSA EPC-0511E1 Gastro-Kombidämpfer Tür geöffnet">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/atosa/atosa8.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="ATOSA EPC-0511E1 Kombidämpfer Seitenperspektive">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/atosa/atosa9.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="ATOSA EPC-0511E1 Gastro-Kombidämpfer Nahaufnahme">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/atosa/atosa10.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="ATOSA EPC-0511E1 Kombidämpfer Rückansicht">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/atosa/atosa11.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="ATOSA EPC-0511E1 Gastro-Kombidämpfer mit Zubehör">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/atosa/atosa12.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="ATOSA EPC-0511E1 Kombidämpfer in der Küche">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Miniaturansichten -->
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/atosa/atosa1.png"
                            alt="ATOSA EPC-0511E1 Gastro-Kombidämpfer Frontansicht Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/atosa/atosa2.png"
                            alt="ATOSA EPC-0511E1 Gastro-Kombidämpfer Seitenansicht Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(2, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/atosa/atosa3.png" alt="ATOSA EPC-0511E1 Gastro-Kombidämpfer Innenraum Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(3, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/atosa/atosa4.png" alt="ATOSA EPC-0511E1 Kombidämpfer Bedienfeld Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(4, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/atosa/atosa5.png"
                            alt="ATOSA EPC-0511E1 Gastro-Kombidämpfer Detailansicht Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(5, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/atosa/atosa6.png" alt="ATOSA EPC-0511E1 Kombidämpfer 5 Ebenen GN1/1 Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(6, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/atosa/atosa7.png"
                            alt="ATOSA EPC-0511E1 Gastro-Kombidämpfer Tür geöffnet Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(7, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/atosa/atosa8.png"
                            alt="ATOSA EPC-0511E1 Kombidämpfer Seitenperspektive Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(8, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/atosa/atosa9.png"
                            alt="ATOSA EPC-0511E1 Gastro-Kombidämpfer Nahaufnahme Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(9, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/atosa/atosa10.png" alt="ATOSA EPC-0511E1 Kombidämpfer Rückansicht Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(10, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/atosa/atosa11.png"
                            alt="ATOSA EPC-0511E1 Gastro-Kombidämpfer mit Zubehör Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(11, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/atosa/atosa12.png" alt="ATOSA EPC-0511E1 Kombidämpfer in der Küche Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>ATOSA EPC-0511E1 Gastro-Kombidämpfer 5 Ebenen GN1/1</h2>
                <p>Der <strong>ATOSA EPC-0511E1 Gastro-Kombidämpfer</strong> revolutioniert die professionelle Küche mit
                    modernster Technologie und innovativen Funktionen. Ideal für Gastronomie, Bäckerei und Konditorei,
                    bietet dieser Kombidämpfer mit 5 Ebenen im GN1/1-Format höchste Präzision und Effizienz. Dank der
                    <strong>Smart Cooking</strong>-Technologie, einem reaktionsschnellen 10-Zoll-Touchscreen und
                    Wi-Fi-Konnektivität meistern Sie jede kulinarische Herausforderung – vom À-la-carte-Service bis hin zu
                    Banketten.</p>

                <h3>Ihre Vorteile:</h3>
                <ul>
                    <li><strong>Smart Cooking</strong>: Automatische Überwachung von Temperatur, Feuchtigkeit und Beladung
                        für perfekte Garergebnisse</li>
                    <li>Reaktionsschneller 10-Zoll-HD-Touchscreen mit intuitiver Rezeptverwaltung</li>
                    <li>Wi-Fi-Selbstdiagnose und Fernsteuerung über iOS/Android-App</li>
                    <li>Automatisches Waschsystem mit 5 Spülmodi und Tiefen-Entkalkung</li>
                    <li>Smart Touch Rack Timing für gemischtes Chargenkochen</li>
                    <li>Dreifach verglaste Tür und hocheffiziente Isolierung für Energieeinsparung</li>
                    <li>Kompakte Stellfläche – ideal für enge Küchen</li>
                </ul>

                <h3>Innovative Funktionen:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Funktionen</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Intuitive Bedienung</strong>: Manuelle, automatische und mehrstufige Koch-, Gar-
                                    und Backprozesse</li>
                                <li><strong>Automatische Innenraumüberwachung</strong>: Präzise Kontrolle von Temperatur,
                                    Feuchtigkeit und Dampfsättigung</li>
                                <li><strong>Wi-Fi-Selbstdiagnosesystem</strong>: Ferndiagnose durch Servicetechniker</li>
                                <li><strong>iOS/Android-App</strong>: Fernbedienung und Programmierung</li>
                                <li><strong>Smart Touch Rack Timing</strong>: Für gemischtes Chargenkochen</li>
                                <li><strong>HACCP-Protokollspeicher</strong>: Für Hygienestandards</li>
                                <li><strong>Ventilatoren</strong>: 8 Geschwindigkeiten mit Umkehrfunktion</li>
                                <li><strong>Mehrpunkt-Temperaturfühler</strong>: 4-Punkt-Sonde</li>
                                <li><strong>Automatisches Waschsystem</strong>: 5 Spülmodi, Entkalkung</li>
                                <li><strong>LED-Innenraumbeleuchtung</strong>: Optimale Sicht</li>
                                <li><strong>USB-Anschluss</strong>: Für Rezepte und Protokolle</li>
                                <li><strong>Turmfähigkeit</strong>: 2 Geräte stapelbar (optional)</li>
                                <li><strong>Bäckerei-kompatibel</strong>: EN-Norm (optional)</li>
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
                                <li><strong>Abmessungen (LxBxH):</strong> 786 x 870 x 712 mm</li>
                                <li><strong>Einschübe:</strong> 5 x GN1/1</li>
                                <li><strong>Anschluss:</strong> 400 V / 3P</li>
                                <li><strong>Heißluftbetrieb:</strong> 30°C bis 260°C</li>
                                <li><strong>Energieart:</strong> Elektro</li>
                                <li><strong>Einschubeabstand:</strong> 68 mm</li>
                                <li><strong>Gewicht (brutto):</strong> 95 kg</li>
                                <li><strong>Energieeffizienz:</strong> 13,1 kW (380 V) – 15,5 kW (415 V)</li>
                                <li><strong>Reinigungssystem:</strong> Ja</li>
                                <li><strong>Wasserdruck:</strong> 2–3 bar</li>
                                <li><strong>Wasserablauf:</strong> 32 mm</li>
                                <li><strong>Füße:</strong> 4 x höhenverstellbare Füße</li>
                                <li><strong>Optional:</strong> Untergestell für Kombidämpfer</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <h3>Lieferumfang:</h3>
                <ul>
                    <li>Mehrpunkt-Temperaturfühler (4-Punkt-Sonde)</li>
                    <li>Ausziehbare Handbrause mit automatischem Aufrollen</li>
                    <li>LED-Innenraumbeleuchtung</li>
                    <li>USB-Anschluss für Rezepte und HACCP-Protokolle</li>
                </ul>

                <p><em>Interesse? Lassen Sie sich jetzt beraten!</em></p>
            </div>
        </div>
        <!-- Strukturierte Daten für SEO -->
        <script type="application/ld+json">
                {
                    "@context": "https://schema.org",
                    "@type": "Product",
                    "name": "ATOSA EPC-0511E1 Gastro-Kombidämpfer",
                    "description": "ATOSA EPC-0511E1 Gastro-Kombidämpfer mit 5 Ebenen GN1/1 für Gastronomie, Bäckerei und Konditorei. Smart Cooking, Wi-Fi, 10-Zoll-Touchscreen und mehr.",
                    "brand": {
                        "@type": "Brand",
                        "name": "ATOSA"
                    },
                    "offers": {
                        "@type": "Offer",
                        "priceCurrency": "EUR",
                        "availability": "https://schema.org/InStock",
                        "url": "https://as-technical.de/konvectomat.php"
                    },
                    "image": "https://as-technical.de/Product/atosa/atosa1.png"
                }
            </script>
    <?php } ?>

    <?php
    if (!$is_included) {
        ?>
        <script src="/scripts/swiper-bundle.min.js"></script>
        <script>
            // Initialisiere Swiper für jedes Produkt
            var swiper_Atosa1 = new Swiper('.mySwiper_Atosa1', {
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