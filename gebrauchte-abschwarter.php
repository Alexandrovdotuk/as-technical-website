<?php
// gebrauchte_abschwarter.php

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
        <title>Gebrauchte Abschwarter | Generalüberholt</title>
        <meta name="description" content="Entdecken Sie generalüberholte gebrauchte Abschwarter wie den Weber ASB 600/1 – zuverlässig und effizient für die Fleischverarbeitung." />
        <meta name="keywords" content="gebrauchter Abschwarter, Bandabschwarter, Weber ASB 600, generalüberholt, Metzgereimaschinen" />
        <link rel="stylesheet" href="/styles/swiper-bundle.min.css" />
        <link rel="stylesheet" href="swiperpic.css" />
        <style>
            /* Container-Stile */
            
        </style>
    </head>

    <body>
        <?php include 'header.php'; ?>
        <!-- Einführung -->
        <div class="leistungen">
            <h2>Ihre perfekte gebrauchte Abschwarter</h2>
            <p>Entdecken Sie unsere generalüberholten gebrauchten Abschwarter, wie den Weber ASB 600/1, die für präzise und effiziente Fleischverarbeitung entwickelt wurden. Mit robuster Konstruktion, einfacher Bedienung und unserem umfassenden Service bieten wir Ihnen zuverlässige Lösungen für Ihre Metzgerei.</p>
            <p>Profitieren Sie von unserer Expertise bei der Wartung und Reparatur von Abschwartern. Kontaktieren Sie uns für ein maßgeschneidertes Angebot oder technische Beratung!</p>
        </div>
        <div id="image-overlay">
            <img src="" alt="Vollbildansicht Abschwarter" />
            <video controls style="display: none;"></video>
        </div>
    <?php } ?>

    <?php
    // Produkt: Weber ASB 600/1
    if ($selected_product === null || $selected_product === 'weber-asb600') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_weberASB600';
    ?>
        <div class="product-container" data-product-id="weber-asb600">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <!-- <div class="sold-overlay">Verkauft</div> --> <!-- Entkommentieren, wenn das Produkt verkauft ist -->
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/Product/Gebraucht/Abschwarter/weber_1.jpg" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Weber ASB 600/1 Bandabschwarter">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/Gebraucht/Abschwarter/weber_2.jpg" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Weber ASB 600/1 Bandabschwarter">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/Gebraucht/Abschwarter/weber_3.jpg" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Weber ASB 600/1 Bandabschwarter">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/Gebraucht/Abschwarter/weber_4.jpg" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Weber ASB 600/1 Bandabschwarter">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/Gebraucht/Abschwarter/weber_5.jpg" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Weber ASB 600/1 Bandabschwarter">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/Gebraucht/Abschwarter/weber_6.jpg" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Weber ASB 600/1 Bandabschwarter">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/Gebraucht/Abschwarter/weber_7.jpg" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Weber ASB 600/1 Bandabschwarter">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/Gebraucht/Abschwarter/weber_8.jpg" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Weber ASB 600/1 Bandabschwarter">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/Gebraucht/Abschwarter/weber_1.jpg" alt="Weber ASB 600/1 Miniatur">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/Gebraucht/Abschwarter/weber_2.jpg" alt="Weber ASB 600/1 Miniatur">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(2, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/Gebraucht/Abschwarter/weber_3.jpg" alt="Weber ASB 600/1 Miniatur">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(3, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/Gebraucht/Abschwarter/weber_4.jpg" alt="Weber ASB 600/1 Miniatur">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(4, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/Gebraucht/Abschwarter/weber_5.jpg" alt="Weber ASB 600/1 Miniatur">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(5, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/Gebraucht/Abschwarter/weber_6.jpg" alt="Weber ASB 600/1 Miniatur">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(6, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/Gebraucht/Abschwarter/weber_7.jpg" alt="Weber ASB 600/1 Miniatur">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(7, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/Gebraucht/Abschwarter/weber_8.jpg" alt="Weber ASB 600/1 Miniatur">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>Bandabschwarter Weber ASB 600/1</h2>
                <p>Der <strong>Weber ASB 600/1</strong> ist eine hochwertige Maschine zur effizienten und schonenden Entfernung der Schwarte von Fleischprodukten. Dank des integrierten Förderbands erfolgt die Verarbeitung automatisch und präzise, wodurch Arbeitszeit eingespart und die Produktqualität verbessert wird.</p>

                <h4>Ihre Vorteile auf einen Blick:</h4>
                <ul>
                    <li>Automatischer Durchlaufbetrieb mit Transportband</li>
                    <li>Einstellbare Schnitttiefe für optimale Ergebnisse</li>
                    <li>Robuste & langlebige Edelstahl-Konstruktion</li>
                    <li>Einfache Bedienung & schnelle Reinigung</li>
                    <li>Zustand: Guter gebrauchter Zustand, getestet & einsatzbereit</li>
                </ul>

                <h4>Technische Daten:</h4>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Technische Daten</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Spannung:</strong> 380V | 50 Hz</li>
                                <li><strong>Leistung:</strong> 0,85 kW</li>
                                <li><strong>Material:</strong> Edelstahl – hygienisch & leicht zu reinigen</li>
                                <li><strong>Einsatzbereich:</strong> Perfekt für Metzgereien & Fleischverarbeitungsbetriebe</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <h4>Service und Beratung:</h4>
                <p>Wir bieten umfassenden Service, Reparatur und technische Beratung für Ihren Abschwarter. Kontaktieren Sie uns für maßgeschneiderte Angebote und Unterstützung!</p>
                <p><em>Interesse? Lassen Sie sich jetzt beraten!</em></p>
            </div>
        </div>
        <!-- Strukturierte Daten für SEO -->
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Product",
                "name": "weber-asb600",
                "description": "Generalüberholter gebrauchter Bandabschwarter für die Fleischverarbeitung.",
                "category": "Gebrauchte Anlagen",
                "image": "https://as-technical.de/Product/Gebraucht/Abschwarter/image.jpg",
                "brand": {
                    "@type": "Brand",
                    "name": "Weber"
                }
            }
        </script>
    <?php } ?>

    <?php
    if (!$is_included) {
    ?>
        <script src="/scripts/swiper-bundle.min.js"></script>
        <script>
            // Initialisiere Swiper für jedes Produkt
            var swiper_weberASB600 = new Swiper('.mySwiper_weberASB600', {
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

            document.addEventListener("DOMContentLoaded", function() {
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
                document.addEventListener("click", function(event) {
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
                    console.error("Image overlay element not found");
                }
            });
        </script>
        <?php include 'footer.php'; ?>
    </body>

    </html>
<?php } ?>