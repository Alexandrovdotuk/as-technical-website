<?php
// derinding-machines.php

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
        <title>Foodlogistik Dicing Machines | Precision for Butcher Shops & Catering</title>
        <meta name="description" content="Discover Foodlogistik dicing machines for precise dicing, strip cutting, and derinding. Perfect for butcher shops and catering with service and consulting from AS Technicals." />
        <meta name="keywords" content="Foodlogistik, derinding machines, derinding, butcher shop, catering, AS Technicals, service, consulting, DicR Classic, DicR Comfort, DicR Capacity, Shreddr, DerindR" />
        <meta name="robots" content="index, follow">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        
    </head>

    <body>
        <?php include 'header.php'; ?>
        <!-- Introduction -->
        <div class="leistungen">
            <h2>Foodlogistik Derindig Machines – Precision and Efficiency</h2>
            <p>AS Technicals is your partner for Foodlogistik derinding machines, setting standards in butcher shops, catering businesses, and the food industry. Our machines deliver precise cuts, high efficiency, and maximum hygiene – ideal for meat, sausages, cheese, vegetables, and more.</p>
            <p>Benefit from durable, flexible solutions with top-notch service and personalized consulting. Discover our derinding machines for your production!</p>
        </div>
        <div id="image-overlay">
            <img src="" alt="Full-screen view of dicing machine" />
        </div>
    <?php } ?>

    

    <?php
    // Product 5: DerindR Classic 450
    if ($selected_product === null || $selected_product === 'derindr-classic-450') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_derindrclassic450';
    ?>
        <div class="product-container" data-product-id="derindr-classic-450">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="../Product/foodlogistik/DerindR/Classic450.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Foodlogistik DerindR Classic 450 Derinding Machine"></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/foodlogistik/DerindR/Classic450.png" alt="DerindR Classic 450 Thumbnail"></div>
                </div>
            </div>
            <div class="product-info">
                <h2>DerindR Classic 450 – Manual Derinding</h2>
                <p>The DerindR Classic 450 is ideal for manual derinding in artisan and industrial settings. It offers easy operation, high hygiene, and durability.</p>
                <h4>Highlights:</h4>
                <ul>
                    <li>Manual operation with foot pedal for round pieces.</li>
                    <li>Quick removal of cutting tools for easy cleaning.</li>
                    <li>Robust machine frame for continuous use.</li>
                    <li>Mobile with casters.</li>
                    <li>High safety standard compliant with international norms.</li>
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
                            <td>Operation Mode</td>
                            <td>Manual with foot pedal</td>
                        </tr>
                        <tr>
                            <td>Material</td>
                            <td>Stainless steel</td>
                        </tr>
                        <tr>
                            <td>Mobility</td>
                            <td>Mobile with casters</td>
                        </tr>
                        <tr>
                            <td>Safety Standard</td>
                            <td>Internationally certified</td>
                        </tr>
                    </tbody>
                </table>
                <p><em>Interested? Contact us for an offer!</em></p>
            </div>
        </div>
    <?php } ?>

    <?php
    // Product 6: DerindR Comfort 450
    if ($selected_product === null || $selected_product === 'derindr-comfort-450') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_derindrcomfort450';
    ?>
        <div class="product-container" data-product-id="derindr-comfort-450">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="../Product/foodlogistik/DerindR/Comfort450.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Foodlogistik DerindR Comfort 450 Derinding Machine"></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/foodlogistik/DerindR/Comfort450.png" alt="DerindR Comfort 450 Thumbnail"></div>
                </div>
            </div>
            <div class="product-info">
                <h2>DerindR Comfort 450 – All-Rounder for Derinding</h2>
                <p>The DerindR Comfort 450 combines automatic and manual derinding as well as slice cutting. It offers high flexibility and precise results for flat and round pieces.</p>
                <h4>Highlights:</h4>
                <ul>
                    <li>Automatic derinding with infeed belt and optional outfeed belt.</li>
                    <li>Manual operation with foot pedal for round pieces.</li>
                    <li>Infinitely adjustable cutting thickness (0–4 mm) for flexibility.</li>
                    <li>Spring-loaded pressure rollers for high cutting quality.</li>
                    <li>Mobile with casters.</li>
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
                            <td>Operation Mode</td>
                            <td>Automatic and manual</td>
                        </tr>
                        <tr>
                            <td>Cutting Thickness</td>
                            <td>0–4 mm (infinitely adjustable)</td>
                        </tr>
                        <tr>
                            <td>Product Height</td>
                            <td>Up to 90 mm (automatic)</td>
                        </tr>
                        <tr>
                            <td>Mobility</td>
                            <td>Mobile with casters</td>
                        </tr>
                    </tbody>
                </table>
                <p><em>Optimize your production! Contact us!</em></p>
            </div>
        </div>
    <?php } ?>

    <?php
    if (!$is_included) {
    ?>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script>
            // Initialize Swiper for each product
            var swiper_dicrclassic = new Swiper('.mySwiper_dicrclassic', {
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev'
                },
            });
            var swiper_dicrcomfort = new Swiper('.mySwiper_dicrcomfort', {
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev'
                },
            });
            var swiper_dicrcapacity = new Swiper('.mySwiper_dicrcapacity', {
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev'
                },
            });
            var swiper_shreddr = new Swiper('.mySwiper_shreddr', {
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev'
                },
            });
            var swiper_derindrclassic450 = new Swiper('.mySwiper_derindrclassic450', {
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev'
                },
            });
            var swiper_derindrcomfort450 = new Swiper('.mySwiper_derindrcomfort450', {
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