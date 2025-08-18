<?php
// casing-sealer.php

// Check if the file is called directly or included
$swiper_id = $GLOBALS['current_swiper_id'] ?? 'mySwiper1';
$is_included = defined('IS_INCLUDED');
// Product ID for selective output
$selected_product = $GLOBALS['selected_product'] ?? null;

if (!$is_included) {
    define('IS_INCLUDED', true);
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Casing Sealer Thermo-Fix | Heinrich GmbH | Service & Consulting</title>
        <meta name="description"
            content="Discover the Casing Sealer Thermo-Fix from Heinrich GmbH for automatic sealing of casings in sausage production. Ideal for butcher shops and food producers with service and consulting from AS Technicals." />
        <meta name="keywords"
            content="Casing sealer, Thermo-Fix, Heinrich GmbH, seal casings, casing welding machine, sausage production, meat processing machines, butcher machines, sales, offer, service, repair, technical consulting" />
        <meta name="robots" content="index, follow" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="/styles/swiper-bundle.min.css" />
        <link rel="stylesheet" href="swiperpic.css" />

    </head>

    <body>
        <?php include 'header.php'; ?>
        <!-- Introduction -->
        <div class="leistungen">
            <h2>Casing Sealer Thermo-Fix – Automatic Sealing for Efficient Sausage Production</h2>
            <p>Do you need a reliable solution for sealing casings? With the Thermo-Fix from Heinrich GmbH, we offer an
                innovative machine that makes clips and knots unnecessary. Benefit from our service, repair, and
                personalized consulting.</p>
            <p>We configure your system to meet your needs, ensuring optimal results. Let our expertise convince you!</p>
        </div>
        <div id="image-overlay">
            <img src="" alt="Full-screen view of Casing Sealer" />
            <video controls style="display: none;"></video>
        </div>
    <?php } ?>

    <?php
    // Product: Thermo-Fix
    if ($selected_product === null || $selected_product === 'thermo-fix') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_thermofix';
        ?>
        <div class="product-container" data-product-id="thermo-fix">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <video controls class="fullscreen-toggle" style="cursor:zoom-in;">
                                <source src="../Product/heinrich/Thermofix/Thermofix.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="swiper-slide">
                            <img src="../Product/heinrich/Thermofix/Thermofix1.jpg" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="Thermo-Fix Casing Sealer">
                        </div>
                        <div class="swiper-slide">
                            <img src="../Product/heinrich/Thermofix/Thermofix2.jpg" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="Thermo-Fix Application">
                        </div>

                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Thumbnails -->
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/assets/video.png" alt="Thermo-Fix Thumbnail 1">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="../Product/heinrich/Thermofix/Thermofix1.jpg" alt="Thermo-Fix Thumbnail 2">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(2, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="../Product/heinrich/Thermofix/Thermofix2.jpg" alt="Thermo-Fix Thumbnail 3">
                    </div>

                </div>
            </div>
            <div class="product-info">
                <h2>Thermo-Fix – Automatic Casing Sealer</h2>
                <p>The <strong>Heinrich Thermo-Fix</strong> is a device for automatic sealing of pig, sheep, and collagen
                    casings, used worldwide in sausage production. It eliminates the need for clips and knots, reduces
                    costs, and optimizes ergonomic workflows.</p>

                <h3>Your Benefits:</h3>
                <ul>
                    <li>Saves clips and knots, reduces costs</li>
                    <li>Optimized ergonomic workflows</li>
                    <li>High flexibility for large and small productions</li>
                    <li>Hygienic through stainless steel and food-grade plastics</li>
                    <li>Mobile and versatile</li>
                </ul>

                <h3>Innovative Features:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Features</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Microprocessor with 11 programs for consistent sealing results</li>
                                <li>Seals and cuts casings or two sausages in one pass</li>
                                <li>Mobile device for table or hanging line use</li>
                                <li>Completely made of stainless steel and food-grade plastics</li>
                                <li>Consists of two units for efficient handling</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <h3>Technical Data:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Technical Data</button>
                        <div class="accordion-content">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Feature</th>
                                        <th>Value</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Operating temperature</td>
                                        <td>Up to +500°C</td>
                                    </tr>
                                    <tr>
                                        <td>Material</td>
                                        <td>Stainless steel and food-grade plastics</td>
                                    </tr>
                                    <tr>
                                        <td>Programs</td>
                                        <td>11 programs in microprocessor</td>
                                    </tr>
                                    <tr>
                                        <td>Application</td>
                                        <td>Pig, sheep, and collagen casings</td>
                                    </tr>
                                    <tr>
                                        <td>Units</td>
                                        <td>Two units</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <h3>Scope of Delivery:</h3>
                <ul>
                    <li>Casing Sealer Thermo-Fix</li>
                    <li>Microprocessor with 11 programs</li>
                    <li>Two units</li>
                </ul>

                <p><em>Interested? Contact us for a tailored offer!</em></p>
            </div>
        </div>
        <!-- Structured Data for SEO -->
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Product",
                "name": "Heinrich Thermo-Fix Casing Sealer",
                "description": "Automatic sealing device for casings in sausage production.",
                "brand": {
                    "@type": "Brand",
                    "name": "Heinrich GmbH"
                },
                "offers": {
                    "@type": "Offer",
                    "priceCurrency": "EUR",
                    "availability": "https://schema.org/InStock",
                    "url": "https://as-technical.de/en/casing-sealer.php"
                },
                "image": "https://as-technical.de/Product/heinrich/darmschweiss/Thermo-Fix_iffa_2025_04_edited.jpg"
            }
            </script>
    <?php } ?>

    <?php
    if (!$is_included) {
        ?>
        <script src="/scripts/swiper-bundle.min.js"></script>
        <script>
            // Initialisiere Swiper für das Produkt
            var swiper_thermofix = new Swiper('.mySwiper_thermofix', {
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