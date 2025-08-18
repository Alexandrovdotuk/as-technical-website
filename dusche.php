<?php
// dusche.php
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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>WUDU Kühltechnik – Nachhaltige Wassereinsparung | Beratung & Verkauf</title>
        <meta name="description" content="Entdecken Sie WUDU Kühltechnik: Nachhaltige Kühlsysteme mit bis zu 95% Wassereinsparung. Umweltfreundlich, effizient und maßgeschneidert für Ihre Anforderungen.">
        <meta name="keywords" content="WUDU Kühltechnik, nachhaltige Kühlsysteme, Wassereinsparung, umweltfreundliche Kühlung, Kühltechnik Beratung, Verdunstungskühlung, Fleischkühlung">
        <meta name="robots" content="index, follow">
        <meta name="author" content="Your Company Name">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
        
    </head>

    <body>
        <?php include 'header.php'; ?>
    <?php } ?>

    <?php
    // Produkt 1: Kühldusche
    if ($selected_product === null || $selected_product === 'Wudu') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_Wudu';
    ?>
        <div class="leistungen">
            <h1>WUDU – Revolutionäre Kühltechnik für Nachhaltigkeit</h1>
            <p>Entdecken Sie WUDU, die umweltfreundliche Alternative zur herkömmlichen Wurstdusche. Mit bis zu 95% Wassereinsparung und innovativer Verdunstungskühlung bietet WUDU maximale Effizienz und Qualität für Ihre Produkte. Lassen Sie sich von uns beraten!</p>
        </div>
        <div id="image-overlay">
            <img src="" alt="Vollbildansicht WUDU Kühltechnik" />
            <video controls style="display: none;"></video>
        </div>


        <div class="product-container" data-product-id="Wudu">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="Product/heinrich/dusche1.jpg" class="fullscreen-toggle" style="cursor:zoom-in;" alt="WUDU Kühltechnik Dusche Vorderansicht">
                        </div>
                        <div class="swiper-slide">
                            <img src="Product/heinrich/dusche2.jpg" class="fullscreen-toggle" style="cursor:zoom-in;" alt="WUDU Kühltechnik Seitenansicht">
                        </div>
                        <div class="swiper-slide">
                            <video playsinline muted controls class="fullscreen-toggle" style="cursor:zoom-in;">
                                <source src="video/wudu.mp4" type="video/mp4">
                                Ihr Browser unterstützt das Video-Format nicht.
                            </video>
                        </div>
                        
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="Product/heinrich/dusche1.jpg" alt="WUDU Dusche Vorderansicht Miniatur">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="Product/heinrich/dusche2.jpg" alt="WUDU Dusche Seitenansicht Miniatur">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(2, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="assets/video.png" alt="WUDU Video Miniatur">
                    </div>
                    
                </div>
            </div>
            <div class="product-info">
                <h2>WUDU – Nachhaltige Kühltechnik</h2>
                <p>Erleben Sie die Revolution in der Kühltechnik mit WUDU – umweltfreundlich, effizient und nachhaltig. Sparen Sie bis zu 95% Wasser und optimieren Sie Ihre Produktionsprozesse.</p>
                <h3>Ihre Vorteile:</h3>
                <ul>
                    <li><strong>95% Wassereinsparung:</strong> Reduziert Trinkwasserverbrauch im Vergleich zu herkömmlichen Duschanlagen.</li>
                    <li><strong>Verdunstungskühlung:</strong> Mikrofeiner Nebel kühlt gezielt Produkte, nicht den Raum.</li>
                    <li><strong>Qualitätserhalt:</strong> Stabile Farbe, minimaler Gewichtsverlust und bewahrte Aromen.</li>
                    <li><strong>Flexibler Einbau:</strong> Keine separate Kabine erforderlich.</li>
                    <li><strong>Vielfältige Anwendung:</strong> Geeignet für Würstchen, Aufschnitt, Braten und mehr.</li>
                    <li><strong>Genusssäure-Zudosierung:</strong> Optional für optimierten Geschmack.</li>
                </ul>
                <p><em>Interesse? Lassen Sie sich jetzt beraten!</em></p>
            </div>
        </div>
    <?php } ?>

    <?php if (!$is_included) { ?>

        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script>
            // Initialisiere Swiper für jedes Produkt
            var swiper_Wudu = new Swiper('.mySwiper_Wudu', {
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