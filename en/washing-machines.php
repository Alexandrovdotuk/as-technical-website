<?php
// washing-machines.php

// Check if the file is called directly or included
$swiper_id = $GLOBALS['current_swiper_id'] ?? 'mySwiper_kistenwaschmaschine';
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
        <title>Washing Machines | NOMA Nowicki Machinery</title>
        <meta name="description" content="Discover high-quality crate washing machines and container washing systems from NOMA Nowicki. Perfect for the food industry with modular solutions and maximum efficiency." />
        <meta name="keywords" content="washing machines, crate washing machine, container washing machine, pallet washing machine, NOMA Nowicki, crate washing system, food industry, sales, offer" />
        <meta name="robots" content="index, follow">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <h2>NOMA Nowicki Washing Machines – Efficiency and Hygiene</h2>
            <p>As a distribution partner of NOMA Nowicki Machinery, we offer innovative washing systems for the food industry. Our crate washing machines and container washing systems guarantee optimal cleaning results, maximum hygiene, and efficiency.</p>
            <p>Benefit from modular solutions, durable quality, and personalized service. Discover the perfect washing system for your needs!</p>
        </div>
        <div id="image-overlay">
            <img src="" alt="Full-screen view of washing machine" />
        </div>
    <?php } ?>

    <?php
    // Product: Crate Washing Machine
    if ($selected_product === null || $selected_product === 'kistenwaschmaschine') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_kistenwaschmaschine';
    ?>
        <div class="product-container" data-product-id="kistenwaschmaschine">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="../Product/nowicki/Waschanlage/mpp-150" class="fullscreen-toggle" style="cursor:zoom-in;" alt="NOMA Nowicki MPP-150 Crate Washing Machine"></div>
                        <div class="swiper-slide"><img src="../Product/nowicki/waschanlage/mpu-600-2023" class="fullscreen-toggle" style="cursor:zoom-in;" alt="NOMA Nowicki MPU-600 Crate Washing Machine"></div>
                        <div class="swiper-slide">
                            <video width="100%" height="auto" controls>
                                <source src="../video/waschen.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                    <!-- Navigation arrows (displayed on hover via CSS) -->
                    <div class="swiper-button-next custom-nav"></div>
                    <div class="swiper-button-prev custom-nav"></div>
                </div>
                <!-- Thumbnails -->
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/nowicki/Waschanlage/mpp-150" alt="MPP-150 Thumbnail"></div>
                    <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/nowicki/waschanlage/mpu-600-2023" alt="MPU-600 Thumbnail"></div>
                    <div class="thumbnail" onclick="changeSlide(2, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../assets/video.png" alt="Video Thumbnail"></div>
                </div>
            </div>
            <div class="product-info">
                <h2>Crate Washing Machine</h2>
                <p>NOMA Nowicki crate washing machines (e.g., MP-300 and MPU-600) deliver optimal cleaning results for plastic crates, lids, and Euro pallets. With modular design and cutting-edge technology, they are ideal for the food industry.</p>
                <h4>Highlights:</h4>
                <ul>
                    <li>Modular version: Expandable with pre-wash and air blow-off modules.</li>
                    <li>High efficiency: Up to 600 crates per hour (MPU-600).</li>
                    <li>Closed water circulation system: Saves water and resources.</li>
                    <li>Touchscreen control panel: Intuitive operation.</li>
                    <li>Versatile heating systems: Electric, steam, gas, oil, or hot water.</li>
                    <li>Stainless steel centrifugal pump: Durable and reliable.</li>
                    <li>Safety features: Protection against unintended opening.</li>
                </ul>
                <h4>Technical Specifications:</h4>
                <table>
                    <thead>
                        <tr>
                            <th>Feature</th>
                            <th>Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Throughput</td>
                            <td>Up to 600 crates/h (MPU-600)</td>
                        </tr>
                        <tr>
                            <td>Modularity</td>
                            <td>Optional pre-wash and air blow-off modules</td>
                        </tr>
                        <tr>
                            <td>Water Circulation</td>
                            <td>Closed, with rinse intensity control</td>
                        </tr>
                        <tr>
                            <td>Heating Systems</td>
                            <td>Electric, steam, gas, oil, hot water</td>
                        </tr>
                        <tr>
                            <td>Operation</td>
                            <td>Touchscreen control panel</td>
                        </tr>
                        <tr>
                            <td>Safety</td>
                            <td>Protection against unintended opening</td>
                        </tr>
                    </tbody>
                </table>
                <p><em>Interested? Contact us for a tailored offer!</em></p>
            </div>
        </div>
    <?php } ?>

    <?php
    if (!$is_included) {
    ?>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script>
            // Initialize Swiper
            var swiper_kistenwaschmaschine = new Swiper('.mySwiper_kistenwaschmaschine', {
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev'
                },
                on: {
                    slideChange: function() {
                        // Update active thumbnail
                        const thumbnails = document.querySelectorAll('.thumbnail');
                        thumbnails.forEach((thumb, index) => {
                            thumb.classList.remove('active');
                            if (index === this.activeIndex) {
                                thumb.classList.add('active');
                            }
                        });
                    }
                }
            });

            function changeSlide(index, swiperClass) {
                const swiper = document.querySelector(`.${swiperClass}`).swiper;
                swiper.slideTo(index);
            }

            // Initial active thumbnail
            document.addEventListener("DOMContentLoaded", function() {
                const thumbnails = document.querySelectorAll('.thumbnail');
                thumbnails[0].classList.add('active'); // First thumbnail active

                // Full-screen overlay for images
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