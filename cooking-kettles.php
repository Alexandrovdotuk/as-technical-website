<?php
// cooking-kettles.php

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
        <title>Buy Cooking kettles & Cooling Tanks | Bastra Sales & Service</title>
        <meta name="description" content="Discover high-quality cooking kettles and cooling tanks from Bastra – with sales, service, repair, and personalized consulting for your production needs." />
        <meta name="keywords" content="buy cooking kettles, buy cooling tanks, Bastra cooking kettles, electric cooking kettle, steam cooking kettle, gas cooking kettle, oil cooking kettle, glycerin bath cooking kettle, service, technical consulting" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <style>
            /* Container styles */
            .product-container {
                display: flex;
                flex-wrap: wrap;
                gap: 20px;
                padding: 20px;
                max-width: 1200px;
                /* Limits width */
                width: 100%;
                margin: 0 auto;
                box-sizing: border-box;
            }

            /* Product image section */
            .product-image {
                padding: 20px;
                width: 100%;
                max-width: 350px;
                /* Limits width */
                position: sticky;
                top: 70px;
                align-self: flex-start;
                box-sizing: border-box;
            }

            /* Swiper styles */
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
                /* Prevents overflow */
                width: 100%;
                height: auto;
                object-fit: contain;
            }

            .swiper-slide iframe,
            .swiper-slide video {
                width: 100%;
                max-width: 100%;
                /* Prevents overflow */
                height: 200px;
                box-sizing: border-box;
            }

            /* Thumbnail styles */
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

            /* Image overlay */
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

            /* Product info section */
            .product-info {
                flex: 1;
                min-width: 300px;
                width: 100%;
                color: white;
                /* Retains white font color */
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
                /* Accent color for headings */
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

            /* Table styles */
            table {
                width: 100% !important;
                /* Adapts to container width */
                max-width: 100%;
                /* Prevents overflow */
                border-collapse: collapse;
                margin: 15px 0;
                border-radius: 10px solid #4a4a4a;
                box-sizing: border-box;
                overflow-x: auto;
                /* Enables horizontal scrolling within the table if needed */
                display: block;
                /* Enables responsive behavior */
            }

            th,
            td {
                border: 1px solid rgb(255, 255, 255);
                padding: 10px;
                text-align: left;
                /* Left-aligned for better readability */
                color: white;
                font-size: 14px;
                /* Smaller font for tables */
                word-break: break-word;
                /* Text wrap for long content */
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

            /* Services section */
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

            /* General image styles */
            img {
                min-width: 0 !important;
                max-width: 100%;
                /* Prevents overflow */
                height: auto;
            }

            /* Responsive design */
            @media screen and (max-width: 768px) {
                .product-container {
                    flex-direction: column;
                    /* Stacks content vertically */
                    padding: 15px;
                }

                .product-image {
                    max-width: 100%;
                    /* Full width on mobile devices */
                    padding: 10px;
                    position: static;
                    /* Removes sticky positioning */
                }

                .product-info {
                    min-width: 100%;
                }

                .swiper-slide img {
                    max-width: 200px;
                    /* Smaller images on mobile devices */
                    align-items: center;
                }

                .swiper-slide iframe,
                .swiper-slide video {
                    height: 150px;
                }

                table {
                    font-size: 12px;
                    /* Smaller font on mobile devices */
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
        <!-- Introduction -->
        <div class="leistungen">
            <h1>Your Solution for Cooking kettles & Cooling Tanks – Bastra Quality</h1>
            <p>Looking for a reliable cooking kettle or cooling tank to perfect your production? As a partner of Bastra, the expert in high-quality food technology, we offer top-notch products, tailored consulting, and comprehensive service – all from a single source.</p>
            <p>We ensure that factory and on-site components work seamlessly together, keeping your production running smoothly. Discover our cooking kettles and cooling tanks – available in various sizes and with flexible heating options to meet your specific needs!</p>
        </div>
        <div id="image-overlay">
            <img src="" alt="Full-screen view of cooking kettle" />
        </div>
    <?php } ?>

    <?php
    // Product 1: Cooking kettle 2000PLUS
    if ($selected_product === null || $selected_product === '2000plus') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_2000plus';
    ?>
        <div class="product-container" data-product-id="2000plus">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="../Product/Bastra/2000Plus.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Bastra Cooking kettle 2000PLUS"></div>
                        <div class="swiper-slide"><img src="../Product/Bastra/Profi200.jpg" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Microprocessor Control BASTRA-Profi-200K"></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/Bastra/2000Plus.png" alt="Cooking kettle 2000PLUS Thumbnail"></div>
                    <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/Bastra/Profi200.jpg" alt="Profi-200K Control Thumbnail"></div>
                </div>
            </div>
            <div class="product-info">
                <h2>Bastra Cooking kettle 2000PLUS – Flexible & Durable</h2>
                <p>The Bastra Cooking kettle 2000PLUS is your solution for versatile cooking. Choose between electric, gas, oil, or steam heating and rely on high-quality chromium-nickel steel with efficient all-around insulation – ideal for capacities from 200 to 1200 liters.</p>
                <h4>Your Benefits:</h4>
                <ul>
                    <li>Robust chromium-nickel steel for long durability</li>
                    <li>Energy-efficient all-around insulation</li>
                    <li>Flexible capacity: 200–1200 liters</li>
                </ul>
                <h4>Optional Features:</h4>
                <ul>
                    <li><strong>Precision:</strong> BASTRA-Profi-200K microprocessor control with core temperature method</li>
                    <li><strong>Convenience:</strong> Integrated hot water supply</li>
                    <li><strong>Versatility:</strong> Water bath or glycerin bath</li>
                    <li><strong>Modern:</strong> Single-walled lid & PC interface for ProfiNet</li>
                    <li><strong>Professional Options:</strong> Delta temperature method, F and C value input</li>
                </ul>
                <p><em>Ready for your perfect cooking kettle? Get advised now!</em></p>
            </div>
        </div>
    <?php } ?>

    <?php
    // Product 2: KDN 50/120/150
    if ($selected_product === null || $selected_product === 'kdn-50-120-150') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_kdn50120150';
    ?>
        <div class="product-container" data-product-id="kdn-50-120-150">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="../Product/Bastra/KDN.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Bastra Glycerin Bath Cooking kettle KDN"></div>
                        <div class="swiper-slide"><img src="../Product/Bastra/KDNrollen.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="KDN Cooking kettle with Casters"></div>
                        <div class="swiper-slide"><img src="../Product/Bastra/MC40.jpg" class="fullscreen-toggle" style="cursor:zoom-in;" alt="MC40 Control for KDN Cooking kettle"></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/Bastra/KDN.png" alt="KDN Cooking kettle Thumbnail"></div>
                    <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/Bastra/KDNrollen.png" alt="KDN with Casters Thumbnail"></div>
                    <div class="thumbnail" onclick="changeSlide(2, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/Bastra/MC40.jpg" alt="MC40 Control Thumbnail"></div>
                </div>
            </div>
            <div class="product-info">
                <h2>Bastra Glycerin Bath Cooking kettle KDN 50/120/150 – Precision Meets Hygiene</h2>
                <p>The KDN cooking kettle, made of chromium-nickel steel (1.4301) with a glass-bead blasted surface, offers precise temperature control from 50–220°C. Its glycerin double jacket and electric direct heating with thermostat make it ideal for hygienic cooking in sizes of 50, 120, or 150 liters.</p>
                <h4>Your Benefits:</h4>
                <ul>
                    <li>High-quality chromium-nickel steel for durability</li>
                    <li>Glycerin bath for even heat distribution</li>
                    <li>Flexible capacities: 50, 120, or 150 liters</li>
                </ul>
                <h4>Practical Features:</h4>
                <ul>
                    <li>Insulated handles for easy handling</li>
                    <li>Sight glass & refill nozzle for glycerin</li>
                    <li>Safety overpressure pipe for secure operation</li>
                </ul>
                <p><em>Excited for perfect cooking results? Contact us!</em></p>
            </div>
        </div>
    <?php } ?>

    <?php
    // Product 3: KDN 200
    if ($selected_product === null || $selected_product === 'kdn-200') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_kdn200';
    ?>
        <div class="product-container" data-product-id="kdn-200">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="../Product/Bastra/KDN200.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Bastra Glycerin Bath Cooking kettle KDN 200 Liters"></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/Bastra/KDN200.png" alt="KDN 200 Liters Thumbnail"></div>
                </div>
            </div>
            <div class="product-info">
                <h2>Bastra Glycerin Bath Cooking kettle KDN 200 – Mobile & Powerful</h2>
                <p>The KDN 200 is a mobile cooking kettle made of chromium-nickel steel (1.4301) with a brushed surface and a 200-liter capacity. With its double-walled construction, full insulation, and casters, it is ideal for flexible and hygienic use in your kitchen.</p>
                <h4>Your Benefits:</h4>
                <ul>
                    <li>Robust, self-supporting chromium-nickel steel construction</li>
                    <li>Hygienic thanks to seamless processing</li>
                    <li>Mobile with four casters (two lockable)</li>
                </ul>
                <h4>Practical Details:</h4>
                <ul>
                    <li>Chromium-nickel steel drain valve (1 1/4 inch) for easy emptying</li>
                    <li>Double-walled lid with hinge</li>
                    <li>Plug-and-play with 3m cable & CEE plug (16A)</li>
                </ul>
                <p><em>Ready for more efficiency? Get advised!</em></p>
            </div>
        </div>
    <?php } ?>

    <?php
    if (!$is_included) {
    ?>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script>
            // Initialize Swiper for each product
            var swiper_2000plus = new Swiper('.mySwiper_2000plus', {
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev'
                },
            });
            var swiper_kdn50120150 = new Swiper('.mySwiper_kdn50120150', {
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev'
                },
            });
            var swiper_kdn200 = new Swiper('.mySwiper_kdn200', {
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
                        overlayImage.src = event.target.src;
                        overlay.classList.add("active");
                        document.body.style.overflow = "hidden";
                    }
                });

                const overlay = document.querySelector("#image-overlay");
                if (overlay) {
                    overlay.addEventListener("click", function(event) {
                        if (event.target === this || event.target.tagName === "IMG") {
                            this.classList.remove("active");
                            document.body.style.overflow = "auto";
                        }
                    });
                }
            });
        </script>
        <?php include 'footer.php'; ?>
    </body>

    </html>
<?php } ?>