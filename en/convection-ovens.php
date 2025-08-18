<?php
// convection-ovens.php

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
        <title>ATOSA EPC-0511E1 Commercial Convection Oven 5 Levels GN1/1</title>
        <meta name="description"
            content="Discover the ATOSA EPC-0511E1 commercial convection oven with 5 GN1/1 levels – ideal for catering, bakeries & patisseries. Smart Cooking, Wi-Fi, touchscreen & more!" />
        <meta name="keywords"
            content="ATOSA EPC-0511E1, commercial convection oven, convection oven catering, Smart Cooking, 5 GN1/1 levels, Wi-Fi convection oven, touchscreen convection oven, professional kitchen" />
        <meta name="robots" content="index, follow" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="/styles/swiper-bundle.min.css" />
        <link rel="stylesheet" href="swiperpic.css" />

    </head>

    <body>
        <?php include 'header.php'; ?>
        <!-- Introduction -->
        <div class="leistungen">
            <h2>Your perfect commercial convection oven</h2>
            <p>The ATOSA EPC-0511E1 commercial convection oven revolutionizes the professional kitchen with state-of-the-art
                technology and innovative features. Ideal for catering, bakeries, and patisseries, this convection oven with
                5 GN1/1 levels offers maximum precision and efficiency. Thanks to Smart Cooking technology, a responsive
                10-inch touchscreen, and Wi-Fi connectivity, you can master any culinary challenge – from à la carte service
                to banquets.</p>
            <p>Benefit from our service, repair, and personalized advice. Let our expertise convince you!</p>
        </div>
        <div id="image-overlay">
            <img src="" alt="Full-screen view ATOSA EPC-0511E1 Commercial Convection Oven" />
            <video controls style="display: none;"></video>
        </div>
    <?php } ?>

    <?php
    // Product 1: Atosa1
    if ($selected_product === null || $selected_product === 'Atosa1') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_Atosa1';
        ?>
        <div class="product-container" data-product-id="Atosa1">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/Product/atosa/atosa1.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="ATOSA EPC-0511E1 Commercial Convection Oven Front View">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/atosa/atosa2.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="ATOSA EPC-0511E1 Commercial Convection Oven Side View">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/atosa/atosa3.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="ATOSA EPC-0511E1 Commercial Convection Oven Interior">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/atosa/atosa4.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="ATOSA EPC-0511E1 Convection Oven Touchscreen Control Panel">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/atosa/atosa5.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="ATOSA EPC-0511E1 Commercial Convection Oven Detail View">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/atosa/atosa6.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="ATOSA EPC-0511E1 Convection Oven 5 GN1/1 Levels">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/atosa/atosa7.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="ATOSA EPC-0511E1 Commercial Convection Oven Door Open">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/atosa/atosa8.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="ATOSA EPC-0511E1 Convection Oven Side Perspective">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/atosa/atosa9.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="ATOSA EPC-0511E1 Commercial Convection Oven Close-Up">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/atosa/atosa10.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="ATOSA EPC-0511E1 Convection Oven Rear View">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/atosa/atosa11.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="ATOSA EPC-0511E1 Commercial Convection Oven with Accessories">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/atosa/atosa12.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="ATOSA EPC-0511E1 Convection Oven in Kitchen">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Thumbnails -->
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/atosa/atosa1.png"
                            alt="ATOSA EPC-0511E1 Commercial Convection Oven Front View Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/atosa/atosa2.png"
                            alt="ATOSA EPC-0511E1 Commercial Convection Oven Side View Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(2, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/atosa/atosa3.png"
                            alt="ATOSA EPC-0511E1 Commercial Convection Oven Interior Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(3, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/atosa/atosa4.png" alt="ATOSA EPC-0511E1 Convection Oven Control Panel Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(4, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/atosa/atosa5.png"
                            alt="ATOSA EPC-0511E1 Commercial Convection Oven Detail View Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(5, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/atosa/atosa6.png"
                            alt="ATOSA EPC-0511E1 Convection Oven 5 GN1/1 Levels Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(6, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/atosa/atosa7.png"
                            alt="ATOSA EPC-0511E1 Commercial Convection Oven Door Open Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(7, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/atosa/atosa8.png"
                            alt="ATOSA EPC-0511E1 Convection Oven Side Perspective Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(8, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/atosa/atosa9.png"
                            alt="ATOSA EPC-0511E1 Commercial Convection Oven Close-Up Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(9, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/atosa/atosa10.png" alt="ATOSA EPC-0511E1 Convection Oven Rear View Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(10, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/atosa/atosa11.png"
                            alt="ATOSA EPC-0511E1 Commercial Convection Oven with Accessories Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(11, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/atosa/atosa12.png" alt="ATOSA EPC-0511E1 Convection Oven in Kitchen Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>ATOSA EPC-0511E1 Commercial Convection Oven 5 Levels GN1/1</h2>
                <p>The <strong>ATOSA EPC-0511E1 Commercial Convection Oven</strong> revolutionizes the professional kitchen
                    with state-of-the-art technology and innovative features. Ideal for catering, bakeries, and patisseries,
                    this convection oven with 5 GN1/1 levels offers maximum precision and efficiency. Thanks to
                    <strong>Smart Cooking</strong> technology, a responsive 10-inch touchscreen, and Wi-Fi connectivity, you
                    can master any culinary challenge – from à la carte service to banquets.</p>

                <h3>Your Benefits:</h3>
                <ul>
                    <li><strong>Smart Cooking</strong>: Automatic monitoring of temperature, humidity, and load for perfect
                        cooking results</li>
                    <li>Responsive 10-inch HD touchscreen with intuitive recipe management</li>
                    <li>Wi-Fi self-diagnosis and remote control via iOS/Android app</li>
                    <li>Automatic cleaning system with 5 rinse modes and deep descaling</li>
                    <li>Smart Touch Rack Timing for mixed batch cooking</li>
                    <li>Triple-glazed door and high-efficiency insulation for energy savings</li>
                    <li>Compact footprint – ideal for tight kitchens</li>
                </ul>

                <h3>Innovative Features:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Features</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Intuitive Operation</strong>: Manual, automatic, and multi-stage cooking,
                                    roasting, and baking processes</li>
                                <li><strong>Automatic Interior Monitoring</strong>: Precise control of temperature,
                                    humidity, and steam saturation</li>
                                <li><strong>Wi-Fi Self-Diagnosis System</strong>: Remote diagnostics by service technicians
                                </li>
                                <li><strong>iOS/Android App</strong>: Remote control and programming</li>
                                <li><strong>Smart Touch Rack Timing</strong>: For mixed batch cooking</li>
                                <li><strong>HACCP Protocol Storage</strong>: For hygiene standards</li>
                                <li><strong>Fans</strong>: 8 speeds with reverse function</li>
                                <li><strong>Multi-Point Temperature Probe</strong>: 4-point probe</li>
                                <li><strong>Automatic Cleaning System</strong>: 5 rinse modes, descaling</li>
                                <li><strong>LED Interior Lighting</strong>: Optimal visibility</li>
                                <li><strong>USB Port</strong>: For recipes and protocols</li>
                                <li><strong>Stacking Capability</strong>: 2 units stackable (optional)</li>
                                <li><strong>Bakery-Compatible</strong>: EN standard (optional)</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <h3>Technical Specifications:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Technical Specifications</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Dimensions (LxWxH):</strong> 786 x 870 x 712 mm</li>
                                <li><strong>Racks:</strong> 5 x GN1/1</li>
                                <li><strong>Power Supply:</strong> 400 V / 3P</li>
                                <li><strong>Hot Air Operation:</strong> 30°C to 260°C</li>
                                <li><strong>Energy Type:</strong> Electric</li>
                                <li><strong>Rack Spacing:</strong> 68 mm</li>
                                <li><strong>Weight (Gross):</strong> 95 kg</li>
                                <li><strong>Energy Efficiency:</strong> 13.1 kW (380 V) – 15.5 kW (415 V)</li>
                                <li><strong>Cleaning System:</strong> Yes</li>
                                <li><strong>Water Pressure:</strong> 2–3 bar</li>
                                <li><strong>Water Drain:</strong> 32 mm</li>
                                <li><strong>Feet:</strong> 4 x adjustable feet</li>
                                <li><strong>Optional:</strong> Stand for convection oven</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <h3>Scope of Delivery:</h3>
                <ul>
                    <li>Multi-point temperature probe (4-point probe)</li>
                    <li>Retractable hand shower with automatic rewinding</li>
                    <li>LED interior lighting</li>
                    <li>USB port for recipes and HACCP protocols</li>
                </ul>

                <p><em>Interested? Get advice now!</em></p>
            </div>
        </div>
        <!-- Structured Data for SEO -->
        <script type="application/ld+json">
                    {
                        "@context": "https://schema.org",
                        "@type": "Product",
                        "name": "ATOSA EPC-0511E1 Commercial Convection Oven",
                        "description": "ATOSA EPC-0511E1 commercial convection oven with 5 GN1/1 levels for catering, bakeries, and patisseries. Smart Cooking, Wi-Fi, 10-inch touchscreen, and more.",
                        "brand": {
                            "@type": "Brand",
                            "name": "ATOSA"
                        },
                        "offers": {
                            "@type": "Offer",
                            "priceCurrency": "EUR",
                            "availability": "https://schema.org/InStock",
                            "url": "https://as-technical.de/en/convection-ovens.php"
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
            // Initialize Swiper for each product
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
                // Initialize all accordions
                document.querySelectorAll('.accordion-header').forEach(button => {
                    button.addEventListener('click', () => {
                        const content = button.nextElementSibling;
                        const isOpen = content.style.display === 'block';

                        // Close all other open contents
                        document.querySelectorAll('.accordion-content').forEach(item => {
                            item.style.display = 'none';
                            item.previousElementSibling.classList.remove('active');
                        });

                        // Open or close the current content
                        if (!isOpen) {
                            content.style.display = 'block';
                            button.classList.add('active');
                        }
                    });
                });

                // Overlay for full-screen view
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