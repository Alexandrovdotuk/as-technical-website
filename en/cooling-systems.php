<?php
// cooling-systems.php

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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>WUDU Cooling Technology – Sustainable Water Savings | Consulting & Sales</title>
        <meta name="description" content="Discover WUDU cooling technology: Sustainable cooling systems with up to 95% water savings. Environmentally friendly, efficient, and tailored to your needs.">
        <meta name="keywords" content="WUDU cooling technology, sustainable cooling systems, water savings, eco-friendly cooling, cooling technology consulting, evaporative cooling, meat cooling">
        <meta name="robots" content="index, follow">
        <meta name="author" content="Your Company Name">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
        
    </head>

    <body>
        <?php include 'header.php'; ?>
    <?php } ?>

    <?php
    // Product 1: Cooling Shower
    if ($selected_product === null || $selected_product === 'Wudu') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_Wudu';
    ?>
        <div class="leistungen">
            <h1>WUDU – Revolutionary Cooling Technology for Sustainability</h1>
            <p>Discover WUDU, the eco-friendly alternative to conventional sausage showers. With up to 95% water savings and innovative evaporative cooling, WUDU offers maximum efficiency and quality for your products. Let us advise you!</p>
        </div>
        <div id="image-overlay">
            <img src="" alt="Full-screen view of WUDU cooling technology" />
            <video controls style="display: none;"></video>
        </div>


        <div class="product-container" data-product-id="Wudu">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="../Product/heinrich/dusche1.jpg" class="fullscreen-toggle" style="cursor:zoom-in;" alt="WUDU Cooling Technology Shower Front View">
                        </div>
                        <div class="swiper-slide">
                            <img src="../Product/heinrich/dusche2.jpg" class="fullscreen-toggle" style="cursor:zoom-in;" alt="WUDU Cooling Technology Shower Side View">
                        </div>
                        <div class="swiper-slide">
                            <video playsinline muted controls class="fullscreen-toggle" style="cursor:zoom-in;">
                                <source src="../video/wudu.mp4" type="video/mp4">
                                Your browser does not support the video format.
                            </video>
                        </div>
                       
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="../Product/heinrich/dusche1.jpg" alt="WUDU Shower Front View Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="../Product/heinrich/dusche2.jpg" alt="WUDU Shower Side View Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(2, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="../assets/video.png" alt="WUDU Video Thumbnail">
                    </div>
                    
                </div>
            </div>
            <div class="product-info">
                <h2>WUDU – Sustainable Cooling Technology</h2>
                <p>Experience the revolution in cooling technology with WUDU – eco-friendly, efficient, and sustainable. Save up to 95% water and optimize your production processes.</p>
                <h3>Your Benefits:</h3>
                <ul>
                    <li><strong>95% Water Savings:</strong> Reduces drinking water consumption compared to conventional shower systems.</li>
                    <li><strong>Evaporative Cooling:</strong> Micro-fine mist cools products precisely, not the room.</li>
                    <li><strong>Quality Preservation:</strong> Stable color, minimal weight loss, and preserved flavors.</li>
                    <li><strong>Flexible Installation:</strong> No separate cabin required.</li>
                    <li><strong>Versatile Application:</strong> Suitable for sausages, cold cuts, roasts, and more.</li>
                    <li><strong>Flavor Acid Dosing:</strong> Optional for optimized taste.</li>
                </ul>
                <p><em>Interested? Let us advise you now!</em></p>
            </div>
        </div>
    <?php } ?>

    <?php if (!$is_included) { ?>

        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script>
            // Initialize Swiper for each product
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