<?php
// bandsaegen.php

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
        <title>MADO Bandsägen | Service & Beratung</title>
        <meta name="description" content="Wir bieten Ihnen Service, Reparatur und Technische Beratung für Ihre Bandsäge. Lassen Sie sich ein Angebot von uns nach Ihren Anforderungen konfigurieren." />
        <meta name="keywords" content="verkauf,angebot,bandsäge,bandsaege,knochensäge,bandsege,mado,kolbe" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <style>
            /* Container-Stile */
            .product-container {
                display: flex;
                flex-wrap: wrap;
                gap: 20px;
                padding: 20px;
                max-width: 1200px;
                /* Begrenzt die Breite */
                width: 100%;
                margin: 0 auto;
                box-sizing: border-box;
            }

            /* Produktbild-Sektion */
            .product-image {
                padding: 20px;
                width: 100%;
                max-width: 350px;
                /* Begrenzt die Breite */
                position: sticky;
                top: 70px;
                align-self: flex-start;
                box-sizing: border-box;
            }

            /* Swiper-Stile */
            .swiper {
                width: 100%;
                height: auto;
                background: transparent;
                box-sizing: border-box;
            }

            .swiper-slide {
                text-align: center;
                font-size: 18px;
                background: transparent;
                display: flex;
                justify-content: center;
                align-items: center;
                width: 100%;
            }

            .swiper-slide img {
                display: block;
                max-width: 250px;
                /* Verhindert Überläufe */
                width: 100%;
                height: auto;
                object-fit: contain;
            }

            .swiper-slide iframe,
            .swiper-slide video {
                width: 100%;
                max-width: 100%;
                /* Verhindert Überläufe */
                height: 200px;
                box-sizing: border-box;
            }

            /* Thumbnail-Stile */
            .thumbnail-container {
                display: flex;
                justify-content: center;
                margin-top: 10px;
                flex-wrap: wrap;
                gap: 5px;
                width: 100%;
                box-sizing: border-box;
            }

            .thumbnail {
                margin: 3px;
                cursor: pointer;
            }

            .thumbnail img {
                width: 50px !important;
                height: auto !important;
                max-width: 50px !important;
                transform: scale(1);
                transition: transform 0.3s ease;
            }

            .thumbnail img:hover {
                transform: scale(1.5);
            }

            /* Bild-Overlay */
            #image-overlay {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.9);
                justify-content: center;
                align-items: center;
                z-index: 2000;
                box-sizing: border-box;
            }

            #image-overlay.active {
                display: flex;
            }

            #image-overlay img {
                max-width: 90%;
                max-height: 90%;
                width: auto;
                height: auto;
            }

            /* Produktinfo-Sektion */
            .product-info {
                flex: 1;
                min-width: 300px;
                width: 100%;
                color: white;
                /* Beibehaltung der weißen Schriftfarbe */
                box-sizing: border-box;
            }

            .product-info h2 {
                font-size: 24px;
                margin-bottom: 15px;
                color: #fff;
            }

            .product-info h4 {
                font-size: 18px;
                margin-top: 20px;
                margin-bottom: 10px;
                color: #ff9900;
                /* Akzentfarbe für Überschriften */
            }

            .product-info p {
                font-size: 16px;
                line-height: 1.6;
                margin-bottom: 15px;
            }

            .product-info ul {
                margin: 10px 0 20px 20px;
                text-align: left;
            }

            .product-info li {
                margin-bottom: 10px;
                font-size: 16px;
                line-height: 1.5;
            }

            /* Tabellen-Stile */
            table {
                width: 100% !important;
                /* Passt sich der Container-Breite an */
                max-width: 100%;
                /* Verhindert Überläufe */
                border-collapse: collapse;
                margin: 15px 0;
                border-radius: 10px solid #4a4a4a;
                box-sizing: border-box;
                overflow-x: auto;
                /* Ermöglicht horizontales Scrollen innerhalb der Tabelle bei Bedarf */
                display: block;
                /* Ermöglicht responsives Verhalten */
            }

            th,
            td {
                border: 1px solid rgb(255, 255, 255);
                padding: 10px;
                text-align: left;
                /* Links ausgerichtet für bessere Lesbarkeit */
                color: white;
                font-size: 14px;
                /* Kleinere Schrift für Tabellen */
                word-break: break-word;
                /* Textumbruch für lange Inhalte */
                box-sizing: border-box;
            }

            th {
                background-color: #1a3c5e;
                font-weight: bold;
            }

            td {
                background-color: #1c1c1c;
            }

            tbody tr:nth-child(even) {
                background-color: #2a2a2a;
            }

            tbody tr:hover {
                background-color: #355e8b;
            }

            /* Leistungen-Sektion */
            .leistungen {
                padding: 20px;
                text-align: center;
                color: white;
                width: 100%;
                max-width: 1200px;
                margin: 0 auto;
                box-sizing: border-box;
            }

            .leistungen h2 {
                font-size: 24px;
                margin-bottom: 10px;
                color: #ff9900;
            }

            .leistungen p {
                font-size: 16px;
                line-height: 1.5;
                margin-bottom: 15px;
            }

            /* Allgemeine Bild-Stile */
            img {
                min-width: 0 !important;
                max-width: 100%;
                /* Verhindert Überläufe */
                height: auto;
            }

            /* Responsives Design */
            @media screen and (max-width: 768px) {
                .product-container {
                    flex-direction: column;
                    /* Stapelt Inhalte vertikal */
                    padding: 15px;
                }

                .product-image {
                    max-width: 100%;
                    /* Volle Breite auf Mobilgeräten */
                    padding: 10px;
                    position: static;
                    /* Entfernt Sticky-Positionierung */
                }

                .product-info {
                    min-width: 100%;
                }

                .swiper-slide img {
                    max-width: 200px;
                    /* Kleinere Bilder auf Mobilgeräten */
                    align-items: center;
                }

                .swiper-slide iframe,
                .swiper-slide video {
                    height: 150px;
                }

                table {
                    font-size: 12px;
                    /* Kleinere Schrift auf Mobilgeräten */
                }

                th,
                td {
                    padding: 8px;
                }

                .leistungen {
                    padding: 15px;
                }

                .leistungen h2 {
                    font-size: 20px;
                }

                .leistungen p {
                    font-size: 14px;
                }
            }
        </style>
    </head>

    <body>
        <?php include 'header.php'; ?>
        <!-- Einführung -->
        <div class="leistungen">
            <h1>Ihre Lösung für Bandsägen – Präzision und Sicherheit</h1>
            <p>Benötigen Sie eine zuverlässige Bandsäge für Ihre Fleischverarbeitung? Mit den hochwertigen Bandsägen von MADO bieten wir Ihnen modernste Technologie für präzises Schneiden und maximale Sicherheit. Profitieren Sie von unserem Service, Reparatur und individueller Beratung.</p>
            <p>Wir konfigurieren Ihre Anlage nach Ihren Bedürfnissen, damit Sie optimale Ergebnisse erzielen. Lassen Sie sich von unserer Expertise überzeugen!</p>
        </div>
        <div id="image-overlay">
            <img src="" alt="Fullscreen Image" />
            <video controls style="display: none;"></video>
        </div>
    <?php } ?>

    <?php
    // Produkt 1: Bandsäge MKB 753
    if ($selected_product === null || $selected_product === 'mkb-753') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_mkb753';
    ?>
        <div class="product-container" data-product-id="mkb-753">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="Product/MADO/Bandsaege.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Bandsäge MKB 753"></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="Product/MADO/Bandsaege.png" alt=""></div>
                </div>
            </div>
            <div class="product-info">
                <h2>Bandsäge MKB 753</h2>
                <p>Mit einem Schnittdurchlass von 230 – 500 mm umfasst das Sortiment an Bandsägen für jede Anwendung die richtige Durchlasshöhe.</p>
                <ul>
                    <li>Das Finger Protection System (FPS) sorgt für optimale Sicherheit des Bedieners.</li>
                    <li>Löst der integrierte optische Sensor der Säge aus, wird die Bandsäge automatisch innerhalb weniger Millisekunden durch das Sicherheitssystem gestoppt.</li>
                    <li>Im Anschluss kann die Maschine wieder wie gewohnt gestartet werden.</li>
                    <li>Eine Erneuerung des Sägebandes ist auch nach mehrmaligem Auslösen der Sicherheitsfunktion nicht erforderlich.</li>
                </ul>
            </div>
        </div>
    <?php } ?>

    <?php
    if (!$is_included) {
    ?>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script>
            // Initialisiere Swiper für das Produkt
            var swiper_mkb753 = new Swiper('.mySwiper_mkb753', {
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev'
                },
            });

            function changeSlide(index, swiperClass) {
                const swiper = document.querySelector(`.${swiperClass}`).swiper;
                swiper.slideTo(index);
            }

            document.addEventListener("DOMContentLoaded", function() {
                document.addEventListener("click", function(event) {
                    if (event.target.classList.contains("fullscreen-toggle")) {
                        const overlay = document.querySelector("#image-overlay");
                        const overlayImage = document.querySelector("#image-overlay img");
                        const overlayVideo = document.querySelector("#image-overlay video");
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
                            const overlayVideo = document.querySelector("#image-overlay video");
                            overlayVideo.pause();
                            overlayVideo.src = "";
                        }
                    });
                }
            });
        </script>
        <?php include 'footer.php'; ?>
    </body>

    </html>
<?php } ?>