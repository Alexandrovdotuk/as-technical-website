<?php
// gebrauchte_fleischwolf.php

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
        <title>Bizerba Fleischwolf gebraucht</title>
        <meta name="description" content="Entdecken Sie den gebrauchten Fleischwolf Bizerba FM 60 – generalüberholt, zuverlässig und vielseitig für Metzgereien und Lebensmittelproduktion" />
        <meta name="keywords" content="angebot,fleischwolf,bizerba,stopfwolf,standwolf,generalüberholt,metzgereibedarf,metzgereimaschinen," />
        <meta name="robots" content="index, follow" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="https://unpkg.com/swiper@11.2.6/swiper-bundle.min.css" />

    </head>

    <body>
        <?php include 'header.php'; ?>
        <!-- Einführung -->
        <div class="leistungen">
            <h2>Ihr zuverlässiger gebrauchter Fleischwolf von Bizerba</h2>
            <p>Unser geprüfter Bizerba Fleischwolf, ideal für Metzgereien und Lebensmittelproduktion. </p>
        </div>
        <div id="image-overlay">
            <img src="" alt="Vollbildansicht Feinkostmischer" />
            <video controls style="display: none;"></video>
        </div>
    <?php } ?>

    <?php
    // Produkt: Bizerba Fleischwolf
    if ($selected_product === null || $selected_product === 'bizerba') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_bizerba';
    ?>
        <div class="product-container" data-product-id="Bizerba">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/Product/gebraucht/fleischwolf/1.JPG" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Bizerba Fleischwolf Bild 1">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/gebraucht/fleischwolf/2.JPG" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Bizerba Fleischwolf Bild 2">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/gebraucht/fleischwolf/3.JPG" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Bizerba Fleischwolf Bild 3">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/gebraucht/fleischwolf/4.JPG" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Bizerba Fleischwolf Bild 4">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Miniaturansichten -->
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/gebraucht/fleischwolf/1.JPG" alt="Bizerba Fleischwolf Miniatur 1">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/gebraucht/fleischwolf/2.JPG" alt="Bizerba Fleischwolf Miniatur 2">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(2, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/gebraucht/fleischwolf/3.JPG" alt="Bizerba Fleischwolf Miniatur 3">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(3, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/gebraucht/fleischwolf/4.JPG" alt="Bizerba Fleischwolf Miniatur 4">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>Bizerba Standwolf Größe 32 Stopfwolf</h2>
                <p>Zum Verkauf steht ein gebrauchter und geprüfter <strong>Bizerba Standwolf Größe 32 Stopfwolf</strong>. Diese robuste Maschine aus Edelstahl ist ideal für Metzgereien und Lebensmittelproduktionen, die Fleisch effizient zerkleinern und verarbeiten möchten.</p>

                <h4>Ihre Vorteile:</h4>
                <ul>
                    <li>Hochwertige Verarbeitung aus Edelstahl für Langlebigkeit</li>
                    <li>Geprüft und sofort einsatzbereit</li>
                    <li>Einfache Bedienung mit Fußschalter</li>
                    <li>Leistungsstarker Motor für gleichmäßiges Zerkleinern</li>
                    <li>Mobilität durch Räder für flexiblen Einsatz</li>
                    <li>Optimale Größe 32 für mittlere bis große Produktionsmengen</li>
                </ul>

                <h4>Technische Daten:</h4>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Technische Daten</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Modell:</strong> Bizerba Standwolf Größe 32</li>
                                <li><strong>Material:</strong> Edelstahl</li>
                                <li><strong>Funktion:</strong> Zerkleinern und Stopfen</li>
                                <li><strong>Bedienung:</strong> Fußschalter und manuelle Steuerung</li>
                                <li><strong>Mobilität:</strong> Mit Rollen für einfache Bewegung</li>
                                <li><strong>Zustand:</strong> Gebraucht, voll funktionsgeprüft</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <h4>Service und Beratung:</h4>
                <p>Wir bieten umfassenden Service, Reparatur und technische Beratung für Ihren Standwolf. Kontaktieren Sie uns für maßgeschneiderte Angebote und Unterstützung!</p>
                <p><em>Interesse? Lassen Sie sich jetzt beraten!</em></p>
            </div>
        </div>
        <!-- Strukturierte Daten für SEO -->
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Product",
                "name": "Bizerba Fleischwolf",
                "description": "Generalüberholter gebrauchter Fleischwolf Bizerba für Metzgereien und Lebensmittelproduktion.",
                "category": "Gebrauchte Anlagen",
                "image": "https://as-technical.de/Product/gebraucht/fleischwolf/1.JPG",
                "brand": {
                    "@type": "Brand",
                    "name": "Bizerba"
                }
            }
        </script>
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