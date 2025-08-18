<?php
// sausage-separators.php

// Check if the file is called directly or included
$swiper_id = $GLOBALS['current_swiper_id'] ?? 'mySwiper_trennfix';
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
        <title>Sausage Separator | Heinrich GmbH</title>
        <meta name="description" content="Technical consulting and sales of sausage separators. Let us configure a system tailored to your requirements." />
        <meta name="keywords" content="sausage separator, sausage cutting, Heinrich GmbH, Trenn-Fix 2.0, butcher machines, meat processing equipment, sales, offer" />
        <meta name="robots" content="index, follow">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
       
    </head>

    <body>
        <?php include 'header.php'; ?>
        <!-- Introduction -->
        <img src="../Product/heinrich/trennfix/trennfix0.jpg.avif" style="width:100%;" alt="Trenn-Fix 2.0">

        <div class="leistungen">
            <h2>Sausage Separator – Precision and Efficiency</h2>
            <p>The Trenn-Fix 2.0 from Heinrich GmbH is the ideal solution for butcher shops and food producers looking to separate sausages with precision and efficiency. With cutting-edge technology and the highest hygiene standards, it optimizes your production.</p>
            <p>Benefit from flexible solutions, durable quality, and personalized service. Discover the possibilities of the Trenn-Fix 2.0!</p>
        </div>
        <div id="image-overlay">
            <img src="" alt="Full-screen view of sausage separator" />
        </div>
    <?php } ?>

    <?php
    // Product: Trenn-Fix 2.0
    if ($selected_product === null || $selected_product === 'trenn-fix') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_trennfix';
    ?>
        <div class="product-container" data-product-id="trenn-fix">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="../Product/heinrich/trennfix/trennfix1.jpg.avif" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Trenn-Fix 2.0 Detail"></div>
                        <div class="swiper-slide"><img src="../Product/heinrich/trennfix/trennfix2.jpg.avif" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Trenn-Fix 2.0 Side View"></div>
                        <div class="swiper-slide">
                            <video width="100%" height="auto" controls>
                                <source src="../video/wursttrenner.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/heinrich/trennfix/trennfix1.jpg.avif" alt="Trenn-Fix 1 Thumbnail"></div>
                    <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/heinrich/trennfix/trennfix2.jpg.avif" alt="Trenn-Fix 2 Thumbnail"></div>
                    <div class="thumbnail" onclick="changeSlide(2, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../assets/video.png" alt="Video Thumbnail"></div>
                </div>
            </div>
            <div class="product-info">
                <h2>Trenn-Fix 2.0 – Precise Sausage Separator</h2>
                <p>The Trenn-Fix 2.0 from Heinrich GmbH is the cornerstone for precise sausage separation. With patented technology and high flexibility, it optimizes your production and saves valuable working time.</p>
                <h4>Highlights:</h4>
                <ul>
                    <li>High throughput: Up to 3,000 kg of sausages per hour.</li>
                    <li>Versatile use: Suitable for sausages from 3 g to 300 g, in natural or collagen casings.</li>
                    <li>Highest hygiene standard: Integrated cleaning program and safety switch.</li>
                    <li>Patented knife system: Precise separation using the product’s own weight.</li>
                    <li>Automatic buffer: Allows operators to perform additional tasks.</li>
                    <li>Optional equipment: Available for flavor acid or saline solution.</li>
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
                            <td>Up to 3,000 kg/h (depending on product)</td>
                        </tr>
                        <tr>
                            <td>Sizes</td>
                            <td>3 different sizes available</td>
                        </tr>
                        <tr>
                            <td>Application Range</td>
                            <td>Sausages from 3 g to 300 g</td>
                        </tr>
                        <tr>
                            <td>Hygiene</td>
                            <td>Integrated cleaning program</td>
                        </tr>
                        <tr>
                            <td>Safety</td>
                            <td>Safety switch for infeed/outfeed</td>
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
            var swiper_trennfix = new Swiper('.mySwiper_trennfix', {
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