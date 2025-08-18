<?php
// bandsaws.php

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
        <title>MADO Bandsaws | Service & Consulting</title>
        <meta name="description" content="We offer service, repair, and technical consulting for your bandsaw. Let us configure an offer tailored to your requirements." />
        <meta name="keywords" content="sales, offer, bandsaw, bone saw, MADO, Kolbe" />
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
            <h1>Your Solution for Bandsaws – Precision and Safety</h1>
            <p>Need a reliable bandsaw for your meat processing? With MADO’s high-quality bandsaws, we offer cutting-edge technology for precise cutting and maximum safety. Benefit from our service, repair, and personalized consulting.</p>
            <p>We configure your system to meet your specific needs, ensuring optimal results. Let our expertise convince you!</p>
        </div>
        <div id="image-overlay">
            <img src="" alt="Full-screen view of bandsaw" />
            <video controls style="display: none;"></video>
        </div>
    <?php } ?>

    <?php
    // Product 1: Bandsaw MKB 753
    if ($selected_product === null || $selected_product === 'mkb-753') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_mkb753';
    ?>
        <div class="product-container" data-product-id="mkb-753">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="../Product/MADO/Bandsaege.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="MADO MKB 753 Bandsaw"></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/MADO/Bandsaege.png" alt="MKB 753 Thumbnail"></div>
                </div>
            </div>
            <div class="product-info">
                <h2>Bandsaw MKB 753</h2>
                <p>With a cutting clearance of 230–500 mm, our range of bandsaws offers the right clearance height for every application.</p>
                <ul>
                    <li>The Finger Protection System (FPS) ensures optimal operator safety.</li>
                    <li>If the saw’s integrated optical sensor is triggered, the bandsaw is automatically stopped within milliseconds by the safety system.</li>
                    <li>The machine can then be restarted as usual.</li>
                    <li>No replacement of the saw blade is required, even after multiple activations of the safety function.</li>
                </ul>
            </div>
        </div>
    <?php } ?>

    <?php
    if (!$is_included) {
    ?>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script>
            // Initialize Swiper for the product
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