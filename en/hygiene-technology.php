<?php
// hygiene-technology.php

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
        <title>Hygiene Technology from Mohn GmbH | AS Technical Solutions</title>
        <meta name="description" content="Discover high-quality hygiene technology and stainless steel solutions from Mohn GmbH for the food industry, gastronomy, hospitality, and cleanrooms. Quality and innovation guaranteed." />
        <meta name="keywords" content="Hygiene Technology, Stainless Steel Processing, Mohn GmbH, Hygiene Locks, Washing Stations, Disinfectant Dispensers, Food Industry, Gastronomy, Hospitality" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
       
    </head>

    <body>
        <?php include 'header.php'; ?>
        <!-- Introduction -->
        <div class="leistungen">
            <h2>Top-Level Hygiene Technology – Quality from Mohn GmbH</h2>
            <p>Do you want to ensure the highest hygiene standards in your production or business? In partnership with Mohn GmbH, we offer innovative and practical solutions in the field of hygiene technology and stainless steel processing. For decades, Mohn has stood for quality and reliability – ideal for the food industry, gastronomy, hospitality, hospitals, and cleanrooms.</p>
            <p>From hygiene locks to stainless steel washbasins and custom-made solutions: Mohn's products meet the highest hygiene and safety standards such as HACCP and IFS. Explore our range and benefit from tailored solutions for your needs!</p>
        </div>

        <div id="image-overlay">
            <img src="" alt="Full-screen view of Hygiene Technology" />
            <video controls style="display: none;"></video>
        </div>
    <?php } ?>

    <!-- Product 1: Mohn Hygiene Technology Range -->
    <?php
    if ($selected_product === null || $selected_product === 'mohn-hygienetechnik') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_mohnHygienetechnik';
    ?>
        <div class="product-container" data-product-id="mohn-hygienetechnik">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <!-- Image Placeholders -->
                        <div class="swiper-slide"><img src="../Product/Mohn/Handwaschbecken.webp" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Mohn Hand Washbasin"></div>
                        <div class="swiper-slide"><img src="../Product/Mohn/Hygieneschleuse.jpg" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Mohn Hygiene Lock"></div>
                        <div class="swiper-slide"><img src="../Product/Mohn/Sackhalter.jpg" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Mohn Bag Holder"></div>
                        <div class="swiper-slide"><img src="../Product/Mohn/Schlauchaufroller.webp" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Mohn Hose Reel"></div>
                        <div class="swiper-slide"><img src="../Product/Mohn/Seifenspender.jpg" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Mohn Soap Dispenser"></div>
                        <div class="swiper-slide"><img src="../Product/Mohn/Stiefeltrockner.webp" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Mohn Boot Dryer"></div>
                        <div class="swiper-slide"><img src="../Product/Mohn/Waschbecken.jpg" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Mohn Washbasin"></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/Mohn/Handwaschbecken.webp" alt="Mohn Hand Washbasin Thumbnail"></div>
                    <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/Mohn/Hygieneschleuse.jpg" alt="Mohn Hygiene Lock Thumbnail"></div>
                    <div class="thumbnail" onclick="changeSlide(2, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/Mohn/Sackhalter.jpg" alt="Mohn Bag Holder Thumbnail"></div>
                    <div class="thumbnail" onclick="changeSlide(3, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/Mohn/Schlauchaufroller.webp" alt="Mohn Hose Reel Thumbnail"></div>
                    <div class="thumbnail" onclick="changeSlide(4, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/Mohn/Seifenspender.jpg" alt="Mohn Soap Dispenser Thumbnail"></div>
                    <div class="thumbnail" onclick="changeSlide(5, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/Mohn/Stiefeltrockner.webp" alt="Mohn Boot Dryer Thumbnail"></div>
                    <div class="thumbnail" onclick="changeSlide(6, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/Mohn/Waschbecken.jpg" alt="Mohn Washbasin Thumbnail"></div>
                </div>
            </div>
            <div class="product-info">
                <h2>Mohn GmbH – Your Solution for Hygiene Technology and Stainless Steel Processing</h2>
                <p>For decades, Mohn GmbH has been a reliable partner for innovative hygiene technology and high-quality stainless steel processing. Their product range includes a wide variety of solutions specifically designed for the food industry, gastronomy, hospitality, hospitals, and cleanrooms. Every product is manufactured to the highest hygiene and safety standards (HACCP, IFS), ensuring maximum safety and efficiency.</p>
                <h4>Core Competencies:</h4>
                <ul>
                    <li><strong>Hygiene Locks & Washing Stations:</strong> Reliable systems to ensure personnel hygiene when entering production areas.</li>
                    <li><strong>Stainless Steel Washbasins & Disinfectant Dispensers:</strong> Robust and hygienic solutions for hand hygiene and disinfection.</li>
                    <li><strong>Pallet and Container Cleaning Systems:</strong> Efficient cleaning systems to maintain the highest hygiene standards in material cleaning.</li>
                    <li><strong>Custom Stainless Steel Solutions:</strong> Tailored custom-made products to meet specific customer requirements.</li>
                    <li><strong>High Standards:</strong> All products comply with the strictest hygiene and safety regulations (HACCP, IFS).</li>
                </ul>
                <p><em>Interested? Contact us for personalized advice!</em></p>
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