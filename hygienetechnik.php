<?php
// hygienetechnik.php

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
        <title>Hygienetechnik von Mohn GmbH | AS Technical Solutions</title>
        <meta name="description" content="Entdecken Sie hochwertige Hygienetechnik und Edelstahllösungen von Mohn GmbH für die Lebensmittelindustrie, Gastronomie, Hotellerie und Reinräume. Qualität und Innovation garantiert." />
        <meta name="keywords" content="Hygienetechnik, Edelstahlverarbeitung, Mohn GmbH, Hygieneschleusen, Waschstationen, Desinfektionsspender, Lebensmittelindustrie, Gastronomie, Hotellerie" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
       
    </head>

    <body>
        <?php include 'header.php'; ?>
        <!-- Einführung -->
        <div class="leistungen">
            <h2>Hygienetechnik auf höchstem Niveau – Qualität von Mohn GmbH</h2>
            <p>Möchten Sie höchste Hygienestandards in Ihrer Produktion oder Ihrem Betrieb sicherstellen? In Zusammenarbeit mit unserem Partner Mohn GmbH bieten wir Ihnen innovative und praxisnahe Lösungen im Bereich Hygienetechnik und Edelstahlverarbeitung. Seit Jahrzehnten steht Mohn für Qualität und Zuverlässigkeit – ideal für die Lebensmittelindustrie, Gastronomie, Hotellerie, Krankenhäuser und Reinräume.</p>
            <p>Von Hygieneschleusen über Edelstahlwaschbecken bis hin zu individuellen Sonderanfertigungen: Die Produkte von Mohn erfüllen höchste Hygiene- und Sicherheitsstandards wie HACCP und IFS. Entdecken Sie unser Sortiment und profitieren Sie von maßgeschneiderten Lösungen für Ihre Anforderungen!</p>
        </div>

        <div id="image-overlay">
            <img src="" alt="Vollbildansicht Hygienetechnik" />
            <video controls style="display: none;"></video>
        </div>
    <?php } ?>

    <!-- Produkt 1: Mohn Hygienetechnik-Sortiment -->
    <?php
    if ($selected_product === null || $selected_product === 'mohn-hygienetechnik') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_mohnHygienetechnik';
    ?>
        <div class="product-container" data-product-id="mohn-hygienetechnik">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <!-- Platzhalter für Bilder -->
                        <div class="swiper-slide"><img src="../Product/Mohn/Handwaschbecken.webp" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Mohn Handwaschbecken"></div>
                        <div class="swiper-slide"><img src="../Product/Mohn/Hygieneschleuse.jpg" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Mohn Hygieneschleuse"></div>
                        <div class="swiper-slide"><img src="../Product/Mohn/Sackhalter.jpg" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Mohn Hygieneschleuse"></div>
                        <div class="swiper-slide"><img src="../Product/Mohn/Schlauchaufroller.webp" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Mohn Hygieneschleuse"></div>
                        <div class="swiper-slide"><img src="../Product/Mohn/Seifenspender.jpg" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Mohn Hygieneschleuse"></div>
                        <div class="swiper-slide"><img src="../Product/Mohn/Stiefeltrockner.webp" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Mohn Hygieneschleuse"></div>
                        <div class="swiper-slide"><img src="../Product/Mohn/Waschbecken.jpg" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Mohn Hygieneschleuse"></div>

                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/Mohn/Handwaschbecken.webp" alt="Mohn Handwaschbecken Thumbnail"></div>
                    <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/Mohn/Hygieneschleuse.jpg" alt="Mohn Hygieneschleuse Thumbnail"></div>
                    <div class="thumbnail" onclick="changeSlide(2, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/Mohn/Sackhalter.jpg" alt="Mohn Hygieneschleuse Thumbnail"></div>
                    <div class="thumbnail" onclick="changeSlide(3, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/Mohn/Schlauchaufroller.webp" alt="Mohn Hygieneschleuse Thumbnail"></div>
                    <div class="thumbnail" onclick="changeSlide(4, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/Mohn/Seifenspender.jpg" alt="Mohn Hygieneschleuse Thumbnail"></div>
                    <div class="thumbnail" onclick="changeSlide(5, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/Mohn/Stiefeltrockner.webp" alt="Mohn Hygieneschleuse Thumbnail"></div>
                    <div class="thumbnail" onclick="changeSlide(6, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/Mohn/Waschbecken.jpg" alt="Mohn Hygieneschleuse Thumbnail"></div>

                </div>
            </div>
            <div class="product-info">
                <h2>Mohn GmbH – Ihre Lösung für Hygienetechnik und Edelstahlverarbeitung</h2>
                <p>Die Mohn GmbH ist seit Jahrzehnten ein verlässlicher Partner für innovative Hygienetechnik und hochwertige Edelstahlverarbeitung. Das Sortiment umfasst eine breite Palette an Lösungen, die speziell für die Anforderungen der Lebensmittelindustrie, Gastronomie, Hotellerie sowie für Krankenhäuser und Reinräume entwickelt wurden. Jedes Produkt wird nach höchsten Hygiene- und Sicherheitsstandards (HACCP, IFS) gefertigt, um maximale Sicherheit und Effizienz zu gewährleisten.</p>
                <h4>Kernkompetenzen:</h4>
                <ul>
                    <li><strong>Hygieneschleusen & Waschstationen:</strong> Zuverlässige Systeme zur Sicherstellung der Personalhygiene beim Zutritt zu Produktionsbereichen.</li>
                    <li><strong>Edelstahlwaschbecken & Desinfektionsspender:</strong> Robuste und hygienische Lösungen für Handhygiene und Desinfektion.</li>
                    <li><strong>Paletten- und Behälterreinigungssysteme:</strong> Effiziente Reinigungsanlagen zur Einhaltung höchster Hygienestandards bei der Materialreinigung.</li>
                    <li><strong>Individuelle Edelstahllösungen:</strong> Maßgeschneiderte Sonderanfertigungen nach Kundenwunsch für spezielle Anforderungen.</li>
                    <li><strong>Hohe Standards:</strong> Alle Produkte entsprechen den strengsten Hygiene- und Sicherheitsvorschriften (HACCP, IFS).</li>
                </ul>
                <p><em>Interesse geweckt? Kontaktieren Sie uns für eine maßgeschneiderte Beratung!</em></p>
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