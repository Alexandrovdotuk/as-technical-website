<?php
// dicing-machines.php

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
        <title>Foodlogistik Dicing Machines | Precision for Butcher Shops & Catering</title>
        <meta name="description"
            content="Discover Foodlogistik dicing machines for precise dicing, strip cutting, and derinding. Perfect for butcher shops and catering with service and consulting from AS Technicals." />
        <meta name="keywords"
            content="Foodlogistik, dicing machines, dicer, bacon slicer, butcher shop, catering, AS Technicals, service, consulting, DicR Classic, DicR Comfort, DicR Capacity, Shreddr, DerindR" />
        <meta name="robots" content="index, follow" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="/styles/swiper-bundle.min.css" />
        <link rel="stylesheet" href="swiperpic.css" />
    </head>

    <body>
        <?php include 'header.php'; ?>
        <!-- Introduction -->
        <div class="leistungen">
            <h2>Foodlogistik Dicing Machines – Precision and Efficiency</h2>
            <p>AS Technicals is your partner for Foodlogistik dicing machines, setting standards in butcher shops, catering
                businesses, and the food industry. Our machines deliver precise cuts, high efficiency, and maximum hygiene –
                ideal for meat, sausages, cheese, vegetables, and more.</p>
            <p>Benefit from durable, flexible solutions with top-notch service and personalized consulting. Discover our
                dicers and shredders for your production!</p>
        </div>
        <div id="image-overlay">
            <img src="" alt="Full-screen view of Foodlogistik Dicing Machine" />
            <video controls style="display: none;"></video>
        </div>
    <?php } ?>

    <?php
    // Product 1: DicR Classic
    if ($selected_product === null || $selected_product === 'dicr-classic') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_dicrclassic';
        ?>
        <div class="product-container" data-product-id="dicr-classic">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/Product/foodlogistik/classic/classic.png" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="Foodlogistik DicR Classic Dicer">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Thumbnails -->
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/foodlogistik/classic/classic.png" alt="DicR Classic Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>DicR Classic – Powerful Dicer</h2>
                <p>The DicR Classic is the most powerful dicer/bacon slicer in its class, ideal for precise dicing, strip
                    cutting, slice cutting, or shredding. With high throughput and a hygienic design, it optimizes your
                    production.</p>

                <h3>Your Benefits:</h3>
                <ul>
                    <li>Powerful 2.6 kW motor for high efficiency.</li>
                    <li>Infinitely adjustable cutting length up to 45 mm.</li>
                    <li>High throughput with up to 560 cuts per minute.</li>
                    <li>Hygiene door for clean operation.</li>
                    <li>Mobile with casters for flexible use.</li>
                </ul>

                <h3>Innovative Features:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Features</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Powerful Motor</strong>: 2.6 kW for efficient processing.</li>
                                <li><strong>Cutting Length</strong>: Infinitely adjustable up to 45 mm.</li>
                                <li><strong>Throughput</strong>: Up to 560 cuts per minute.</li>
                                <li><strong>Hygiene Door</strong>: For clean and safe operation.</li>
                                <li><strong>Mobility</strong>: Mobile with casters.</li>
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
                                <li><strong>Motor Power:</strong> 2.6 kW</li>
                                <li><strong>Cutting Length:</strong> Infinitely adjustable up to 45 mm</li>
                                <li><strong>Throughput:</strong> Up to 560 cuts per minute</li>
                                <li><strong>Mobility:</strong> Mobile with casters</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <h3>Scope of Delivery:</h3>
                <ul>
                    <li>DicR Classic Dicer</li>
                    <li>Hygiene door</li>
                    <li>Casters</li>
                </ul>

                <p><em>Interested? Contact us for a tailored offer!</em></p>
            </div>
        </div>
        <!-- Structured Data for SEO -->
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Product",
                "name": "DicR Classic Dicer",
                "description": "The DicR Classic is the most powerful dicer/bacon slicer in its class, ideal for precise dicing, strip cutting, slice cutting, or shredding.",
                "brand": {
                    "@type": "Brand",
                    "name": "Foodlogistik"
                },
                "offers": {
                    "@type": "Offer",
                    "priceCurrency": "EUR",
                    "availability": "https://schema.org/InStock",
                    "url": "https://as-technical.de/en/dicing-machines.php"
                },
                "image": "https://as-technical.de/Product/foodlogistik/classic/classic.png"
            }
            </script>
    <?php } ?>

    <?php
    // Product 2: DicR Comfort
    if ($selected_product === null || $selected_product === 'dicr-comfort') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_dicrcomfort';
        ?>
        <div class="product-container" data-product-id="dicr-comfort">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/Product/foodlogistik/comfort/comfort1.png" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="Foodlogistik DicR Comfort Dicer">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Thumbnails -->
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/foodlogistik/comfort/comfort1.png" alt="DicR Comfort Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>DicR Comfort – Versatile Dicer, Bacon Slicer</h2>
                <p>The DicR Comfort offers maximum flexibility with modern control and optional loading. Perfect for dicing,
                    strip cutting, slice cutting, or shredding in demanding productions.</p>

                <h3>Your Benefits:</h3>
                <ul>
                    <li>PLC control with color touchscreen or mechanical controls.</li>
                    <li>Optional column loading for 200-liter carts or lift for Euro crates.</li>
                    <li>Continuous discharge via outfeed belt or product outlet.</li>
                    <li>Hygienic design for easy cleaning.</li>
                </ul>

                <h3>Innovative Features:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Features</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Control System</strong>: PLC with color touchscreen or mechanical.</li>
                                <li><strong>Loading</strong>: Column loading or lift (optional).</li>
                                <li><strong>Discharge</strong>: Outfeed belt or product outlet.</li>
                                <li><strong>Hygienic Design</strong>: For easy cleaning.</li>
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
                                <li><strong>Control System:</strong> PLC with color touchscreen or mechanical</li>
                                <li><strong>Loading:</strong> Column loading or lift (optional)</li>
                                <li><strong>Discharge:</strong> Outfeed belt or product outlet</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <h3>Scope of Delivery:</h3>
                <ul>
                    <li>DicR Comfort Dicer</li>
                    <li>Optional loading system</li>
                    <li>Outfeed belt or product outlet</li>
                </ul>

                <p><em>Curious? Let us find your perfect solution!</em></p>
            </div>
        </div>
        <!-- Structured Data for SEO -->
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Product",
                "name": "DicR Comfort Dicer",
                "description": "The DicR Comfort offers maximum flexibility with modern control and optional loading.",
                "brand": {
                    "@type": "Brand",
                    "name": "Foodlogistik"
                },
                "offers": {
                    "@type": "Offer",
                    "priceCurrency": "EUR",
                    "availability": "https://schema.org/InStock",
                    "url": "https://as-technical.de/en/dicing-machines.php"
                },
                "image": "https://as-technical.de/Product/foodlogistik/comfort/comfort1.png"
            }
            </script>
    <?php } ?>

    <?php
    // Product 3: DicR Capacity
    if ($selected_product === null || $selected_product === 'dicr-capacity') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_dicrcapacity';
        ?>
        <div class="product-container" data-product-id="dicr-capacity">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/Product/foodlogistik/capacity/1.png" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="Foodlogistik DicR Capacity Dicer">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/foodlogistik/capacity/2.png" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="Foodlogistik DicR Capacity Dicer">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/foodlogistik/capacity/3.png" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="Foodlogistik DicR Capacity Dicer">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/foodlogistik/capacity/4.png" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="Foodlogistik DicR Capacity Dicer">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/foodlogistik/capacity/5.png" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="Foodlogistik DicR Capacity Dicer">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/foodlogistik/capacity/6.png" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="Foodlogistik DicR Capacity Dicer">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/foodlogistik/capacity/7.png" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="Foodlogistik DicR Capacity Dicer">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/foodlogistik/capacity/8.png" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="Foodlogistik DicR Capacity Dicer">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/foodlogistik/capacity/9.png" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="Foodlogistik DicR Capacity Dicer">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/foodlogistik/capacity/10.png" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="Foodlogistik DicR Capacity Dicer">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Thumbnails -->
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/foodlogistik/capacity/1.png" alt="DicR Capacity Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/foodlogistik/capacity/2.png" alt="DicR Capacity Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(2, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/foodlogistik/capacity/3.png" alt="DicR Capacity Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(3, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/foodlogistik/capacity/4.png" alt="DicR Capacity Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(4, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/foodlogistik/capacity/5.png" alt="DicR Capacity Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(5, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/foodlogistik/capacity/6.png" alt="DicR Capacity Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(6, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/foodlogistik/capacity/7.png" alt="DicR Capacity Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(7, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/foodlogistik/capacity/8.png" alt="DicR Capacity Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(8, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/foodlogistik/capacity/9.png" alt="DicR Capacity Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(9, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/foodlogistik/capacity/10.png" alt="DicR Capacity Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>DicR Capacity – High-Volume Dicer</h2>
                <p>The DicR Capacity is a semi-automatic dicer with a large cutting chamber for high product volumes. Ideal
                    for dicing, strip cutting, or shredding without extensive pre-cutting.</p>

                <h3>Your Benefits:</h3>
                <ul>
                    <li>Large cutting chamber with up to 10.8 liters capacity.</li>
                    <li>Time savings due to minimal pre-cutting.</li>
                    <li>High throughput for large production volumes.</li>
                    <li>Robust design for continuous operation.</li>
                </ul>

                <h3>Innovative Features:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Features</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Cutting Chamber Volume</strong>: Up to 10.8 liters.</li>
                                <li><strong>Processing Capacity</strong>: Large quantities per cycle.</li>
                                <li><strong>Operation Mode</strong>: Semi-automatic.</li>
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
                                <li><strong>Cutting Chamber Volume:</strong> Up to 10.8 liters</li>
                                <li><strong>Processing Capacity:</strong> Large quantities per cycle</li>
                                <li><strong>Operation Mode:</strong> Semi-automatic</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <h3>Scope of Delivery:</h3>
                <ul>
                    <li>DicR Capacity Dicer</li>
                </ul>

                <p><em>Ready for large-scale production? Contact us for details!</em></p>
            </div>
        </div>
        <!-- Structured Data for SEO -->
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Product",
                "name": "DicR Capacity Dicer",
                "description": "The DicR Capacity is a semi-automatic dicer with a large cutting chamber for high product volumes.",
                "brand": {
                    "@type": "Brand",
                    "name": "Foodlogistik"
                },
                "offers": {
                    "@type": "Offer",
                    "priceCurrency": "EUR",
                    "availability": "https://schema.org/InStock",
                    "url": "https://as-technical.de/en/dicing-machines.php"
                },
                "image": "https://as-technical.de/Product/foodlogistik/capacity/1.png"
            }
            </script>
    <?php } ?>

    <?php
    // Product 4: Shreddr
    if ($selected_product === null || $selected_product === 'shreddr') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_shreddr';
        ?>
        <div class="product-container" data-product-id="shreddr">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/Product/foodlogistik/Shreddr/Shreddr.png" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="Foodlogistik Shreddr Cutting Machine">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Thumbnails -->
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/foodlogistik/Shreddr/Shreddr.png" alt="Shreddr Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>Shreddr – Specialist for Vegetables and Fruits</h2>
                <p>The Shreddr is optimized for continuous cutting of vegetables and fruits into cubes, strips, and slices.
                    Its robust design and easy cleaning make it ideal for continuous operation.</p>

                <h3>Your Benefits:</h3>
                <ul>
                    <li>Robust stainless steel frame for heavy-duty use.</li>
                    <li>Infinitely adjustable speed for precise cuts.</li>
                    <li>Perfect hygiene with a fully welded frame.</li>
                    <li>Water connection for rinsing during cutting.</li>
                    <li>Mobile with casters.</li>
                </ul>

                <h3>Innovative Features:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Features</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Material</strong>: Stainless steel.</li>
                                <li><strong>Speed</strong>: Infinitely adjustable.</li>
                                <li><strong>Mobility</strong>: Mobile with casters.</li>
                                <li><strong>Safety Standard</strong>: Internationally certified.</li>
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
                                <li><strong>Material:</strong> Stainless steel</li>
                                <li><strong>Speed:</strong> Infinitely adjustable</li>
                                <li><strong>Mobility:</strong> Mobile with casters</li>
                                <li><strong>Safety Standard:</strong> Internationally certified</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <h3>Scope of Delivery:</h3>
                <ul>
                    <li>Shreddr Cutting Machine</li>
                    <li>Casters</li>
                </ul>

                <p><em>Optimize your processing! Contact us!</em></p>
            </div>
        </div>
        <!-- Structured Data for SEO -->
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Product",
                "name": "Shreddr Cutting Machine",
                "description": "The Shreddr is optimized for continuous cutting of vegetables and fruits into cubes, strips, and slices.",
                "brand": {
                    "@type": "Brand",
                    "name": "Foodlogistik"
                },
                "offers": {
                    "@type": "Offer",
                    "priceCurrency": "EUR",
                    "availability": "https://schema.org/InStock",
                    "url": "https://as-technical.de/en/dicing-machines.php"
                },
                "image": "https://as-technical.de/Product/foodlogistik/Shreddr/Shreddr.png"
            }
            </script>
    <?php } ?>

    <?php
    if (!$is_included) {
        ?>
        <script src="/scripts/swiper-bundle.min.js"></script>
        <script>
            // Initialize Swiper for each product
            var swiper_dicrclassic = new Swiper('.mySwiper_dicrclassic', {
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev'
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });
            var swiper_dicrcomfort = new Swiper('.mySwiper_dicrcomfort', {
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev'
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });
            var swiper_dicrcapacity = new Swiper('.mySwiper_dicrcapacity', {
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev'
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });
            var swiper_shreddr = new Swiper('.mySwiper_shreddr', {
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