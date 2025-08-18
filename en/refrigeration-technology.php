<?php
// refrigeration-technology.php

// Check if the file is called directly or included
$swiper_id = $GLOBALS['current_swiper_id'] ?? 'mySwiper1';
$is_included = defined('IS_INCLUDED');
// Product ID for selective output
$selected_product = $GLOBALS['selected_product'] ?? null;

if (!$is_included) {
    define('IS_INCLUDED', true);
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <title>Refrigeration Technology from Atosa | AS Technical Solutions</title>
        <meta name="description" content="Discover professional refrigeration technology from Atosa for gastronomy, hospitality, and food processing. Robust quality, high energy efficiency, and modern design." />
        <meta name="keywords" content="Refrigeration Technology, Atosa, Gastronomy, Hospitality, Refrigerators, Freezers, Saladettes, Cooling Counters, Food Processing" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    </head>

    <body>
        <?php include 'header.php'; ?>
        <!-- Introduction -->
        <div class="leistungen">
            <h2>Professional Refrigeration Technology from Atosa – Quality for Your Business</h2>
            <p>Do you need reliable refrigeration technology for your gastronomy or hospitality business? Our partner Atosa offers top-class solutions that combine the highest standards in quality, energy efficiency, and design. As a global leader in commercial refrigeration technology, Atosa delivers robust refrigerators, freezers, saladettes, and cooling counters that noticeably simplify your daily operations.</p>
            <p>With an unbeatable price-performance ratio and up to 5 years of warranty, Atosa is the ideal choice for restaurants, hotels, snack bars, and commercial kitchens. Explore our range and find the perfect refrigeration solution for your needs!</p>
        </div>

        <div id="image-overlay">
            <img src="" alt="Full-screen view of Refrigeration Technology" />
            <video controls style="display: none;"></video>
        </div>
    <?php } ?>

    <!-- Product 1: 2-Door Saladette with Sliding Lid 2 x GN1/1 -->
    <?php
    if ($selected_product === null || $selected_product === 'atosa-saladette-2tuerig') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_atosaSaladette2Tuerig';
    ?>
        <div class="product-container" data-product-id="atosa-saladette-2tuerig">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <!-- Image Placeholders -->
                        <div class="swiper-slide"><img src="../Product/Atosa/saladette/saladette1.jpg" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Atosa Saladette 1"></div>
                        <div class="swiper-slide"><img src="../Product/Atosa/saladette/saladette2.jpg" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Atosa Saladette 2"></div>
                        <div class="swiper-slide"><img src="../Product/Atosa/saladette/saladette3.jpg" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Atosa Saladette 3"></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/Atosa/saladette/saladette1.jpg" alt="Atosa Saladette 1 Thumbnail"></div>
                    <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/Atosa/saladette/saladette2.jpg" alt="Atosa Saladette 2 Thumbnail"></div>
                    <div class="thumbnail" onclick="changeSlide(2, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/Atosa/saladette/saladette3.jpg" alt="Atosa Saladette 3 Thumbnail"></div>
                </div>
            </div>
            <div class="product-info">
                <h2>2-Door Saladette with Sliding Lid 2 x GN1/1 – Practical and Efficient</h2>
                <p>The 2-door saladette with sliding lid from Atosa is the perfect solution for gastronomy businesses that value freshness, hygiene, and efficiency. With its generous capacity and robust stainless steel construction, it is ideal for preparing and storing fresh ingredients in restaurants, snack bars, or catering companies.</p>
                <h4>Why This Saladette Impresses:</h4>
                <ul>
                    <li><strong>High-Quality Materials:</strong> Entirely made of AISI 201 stainless steel – inside and out – for durability and hygiene.</li>
                    <li><strong>Energy Efficient:</strong> Environmentally friendly refrigerant R600a (isobutane) with a low GWP value of 3.</li>
                    <li><strong>Practical Design:</strong> Self-closing and lockable doors with magnetic seals for secure storage.</li>
                    <li><strong>Flexibility:</strong> Equipped with wheels and interchangeable feet for easy mobility and adaptability.</li>
                    <li><strong>Reliable Cooling:</strong> Consistent temperature range from +2 °C to +8 °C, even at ambient temperatures up to +30 °C.</li>
                </ul>
                <h4>Standard Features Overview:</h4>
                <p>Get started right away with these features:</p>
                <ul>
                    <li>Bottom-mounted compressor for space-saving use.</li>
                    <li>Includes GN containers (2 x GN1/1) for immediate usability.</li>
                    <li>Digital control for precise temperature regulation.</li>
                </ul>
                <h4>Technical Specifications:</h4>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Technical Specifications</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Dimensions (W×D×H):</strong> 900 × 700 × 875 mm</li>
                                <li><strong>Interior Dimensions (W×D×H):</strong> 830 × 595 × 510 mm</li>
                                <li><strong>Number of Shelves per Door:</strong> 2</li>
                                <li><strong>Shelf Dimensions:</strong> 335 × 590 mm / 340 × 590 mm</li>
                                <li><strong>Capacity (Gross/Net):</strong> 300 / 169 liters</li>
                                <li><strong>Weight (Gross/Net):</strong> 90 / 70 kg</li>
                                <li><strong>Temperature Range:</strong> +2 °C to +8 °C</li>
                                <li><strong>Climate Class:</strong> 4C</li>
                                <li><strong>Power Supply:</strong> 220 V – 50 Hz</li>
                                <li><strong>Refrigerant:</strong> R600a (Isobutane) – GWP 3</li>
                                <li><strong>Power Consumption:</strong> 310 W</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p><em>Curious? Contact us for personalized advice!</em></p>
            </div>
        </div>
    <?php } ?>

    <!-- Product: Single Glass Door Freezer MCF8720GR -->
    <?php
    if ($selected_product === null || $selected_product === 'atosa-glastuertiefkuehlschrank-mcf8720gr') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_atosaGlastuerTiefkuehlschrankMCF8720GR';
    ?>
        <div class="product-container" data-product-id="atosa-glastuertiefkuehlschrank-mcf8720gr">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <!-- Image Placeholders -->
                        <div class="swiper-slide"><img src="../Product/Atosa/kuehlschrank/kuehlschrank1.jpg" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Atosa Glass Door Freezer MCF8720GR"></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/Atosa/kuehlschrank/kuehlschrank1.jpg" alt="Atosa Glass Door Freezer MCF8720GR Thumbnail"></div>
                </div>
            </div>
            <div class="product-info">
                <h2>Single Glass Door Freezer MCF8720GR – Reliable Freezing with Style</h2>
                <p>The single glass door freezer MCF8720GR from Atosa is the ideal solution for gastronomy businesses seeking reliable freezing with an appealing design. With a generous capacity of 610 liters (gross) and modern LED lighting, it is perfect for restaurants, hotels, or snack bars to stylishly showcase frozen products.</p>
                <h4>Why This Freezer Impresses:</h4>
                <ul>
                    <li><strong>Modern Design:</strong> Glass door with LED interior lighting for an attractive product presentation.</li>
                    <li><strong>Robust Construction:</strong> High-quality craftsmanship for long-term use in demanding environments.</li>
                    <li><strong>Practical Handling:</strong> Self-closing and lockable door with magnetic seals for secure storage.</li>
                    <li><strong>Flexibility:</strong> Equipped with 4 wheels (2 with front brakes) for easy mobility in your kitchen.</li>
                    <li><strong>Reliable Performance:</strong> Powerful compressor and climate class 4 for consistent freezing from -17 °C to -20 °C.</li>
                </ul>
                <h4>Standard Features Overview:</h4>
                <p>Get started right away with these features:</p>
                <ul>
                    <li>Bottom-mounted compressor for space-saving use.</li>
                    <li>5 pre-installed shelves (545 × 622 mm) for immediate usability.</li>
                    <li>LED interior lighting for optimal visibility.</li>
                    <li>Digital control (Carel) for precise temperature regulation.</li>
                </ul>
                <h4>Technical Specifications:</h4>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Technical Specifications</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Dimensions (W×D×H):</strong> 685 × 805 × 2065 mm</li>
                                <li><strong>Interior Dimensions (W×D×H):</strong> 565 × 640 × 1525 mm</li>
                                <li><strong>Number of Shelves:</strong> 5</li>
                                <li><strong>Shelf Dimensions:</strong> 545 × 622 mm</li>
                                <li><strong>Capacity (Gross/Net):</strong> 610 / 405 liters</li>
                                <li><strong>Weight (Gross/Net):</strong> 155 / 140 kg</li>
                                <li><strong>Temperature Range:</strong> -17 °C to -20 °C</li>
                                <li><strong>Climate Class:</strong> 4</li>
                                <li><strong>Energy Efficiency Class:</strong> C</li>
                                <li><strong>Power Supply:</strong> 220 V – 50 Hz</li>
                                <li><strong>Refrigerant:</strong> R290 (Propane) – GWP 3</li>
                                <li><strong>Power Consumption:</strong> 750 W</li>
                                <li><strong>Wheels:</strong> 4 wheels (2 with front brakes)</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p><em>Curious? Contact us for personalized advice!</em></p>
            </div>
        </div>
    <?php } ?>

    <?php
    if (!$is_included) {
    ?>
        <script>
            // Define changeSlide globally to ensure availability
            function changeSlide(index, swiperClass) {
                const swiperElement = document.querySelector(`.${swiperClass}`);
                if (swiperElement && swiperElement.swiper) {
                    console.log(`Switching to slide index: ${index} for Swiper class: ${swiperClass}`);
                    swiperElement.swiper.slideTo(index, 300, true);
                    console.log(`Current slide index after switch: ${swiperElement.swiper.activeIndex}`);
                } else {
                    console.error(`Swiper instance not found for class: ${swiperClass}`);
                }
            }

            document.addEventListener("DOMContentLoaded", function() {
                // Initialize all Swiper instances
                document.querySelectorAll('.swiper').forEach(swiperElement => {
                    const swiperClass = swiperElement.classList[1];
                    console.log(`Initializing Swiper for class: ${swiperClass}`);
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

                // Accordion functionality
                document.querySelectorAll('.accordion-header').forEach(button => {
                    button.addEventListener('click', () => {
                        const content = button.nextElementSibling;
                        const isOpen = content.style.display === 'block';

                        // Close all other open accordion items
                        document.querySelectorAll('.accordion-content').forEach(item => {
                            item.style.display = 'none';
                            item.previousElementSibling.classList.remove('active');
                        });

                        // Open or close the current accordion item
                        if (!isOpen) {
                            content.style.display = 'block';
                            button.classList.add('active');
                        }
                    });
                });

                // Overlay for full-screen view
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