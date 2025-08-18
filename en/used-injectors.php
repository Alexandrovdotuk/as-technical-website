<?php
// used_injectors.php

// Check if the file is directly accessed or included
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
        <title>Used Retus Brine Injector</title>
        <meta name="description" content="Discover the used Retus PSM 24/48 Brine Injector – refurbished, reliable, and versatile for butcher shops and food production." />
        <meta name="keywords" content="offer, brine injector, retus, refurbished, butcher supplies, butcher machines, food processing" />
        <meta name="robots" content="index, follow" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="https://unpkg.com/swiper@11.2.6/swiper-bundle.min.css" />
    </head>

    <body>
        <?php include 'header.php'; ?>
        <!-- Introduction -->
        <div class="leistungen">
            <h2>Your Reliable Used Retus Brine Injector</h2>
            <p>Our tested brine injector, ideal for butcher shops and food production.</p>
        </div>
        <div id="image-overlay">
            <img src="" alt="Full-screen view of the brine injector" />
            <video controls style="display: none;"></video>
        </div>
    <?php } ?>

    <?php
    // Product: Retus Injector
    if ($selected_product === null || $selected_product === 'retus') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_retus';
    ?>
        <div class="product-container" data-product-id="Retus">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/Product/gebraucht/injektor/1.JPG" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Retus Brine Injector Image 1">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/gebraucht/injektor/2.JPG" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Retus Brine Injector Image 2">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/gebraucht/injektor/3.JPG" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Retus Brine Injector Image 3">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/gebraucht/injektor/4.JPG" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Retus Brine Injector Image 4">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/gebraucht/injektor/5.JPG" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Retus Brine Injector Image 5">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/gebraucht/injektor/6.JPG" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Retus Brine Injector Image 6">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/gebraucht/injektor/7.JPG" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Retus Brine Injector Image 7">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Thumbnails -->
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/gebraucht/injektor/1.JPG" alt="Retus Brine Injector Thumbnail 1">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/gebraucht/injektor/2.JPG" alt="Retus Brine Injector Thumbnail 2">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(2, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/gebraucht/injektor/3.JPG" alt="Retus Brine Injector Thumbnail 3">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(3, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/gebraucht/injektor/4.JPG" alt="Retus Brine Injector Thumbnail 4">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(4, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/gebraucht/injektor/5.JPG" alt="Retus Brine Injector Thumbnail 5">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(5, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/gebraucht/injektor/6.JPG" alt="Retus Brine Injector Thumbnail 6">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(6, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/gebraucht/injektor/7.JPG" alt="Retus Brine Injector Thumbnail 7">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>Retus Brine Injector PSM 24/48 4.0 ZD</h2>
                <p>For sale is a used and tested <strong>Retus Brine Injector PSM 24/48 4.0 ZD</strong>. This robust stainless steel machine is ideal for butcher shops and food production facilities looking to efficiently inject meat with brine or marinades.</p>

                <h4>Your Benefits:</h4>
                <ul>
                    <li>High-quality stainless steel construction for durability and hygiene</li>
                    <li>Tested and ready for immediate use</li>
                    <li>Easy operation with an intuitive control panel</li>
                    <li>Flexible injection with 24/48 needles for precise brine distribution</li>
                    <li>Mobility with wheels for flexible deployment</li>
                    <li>Optimal temperature control with heat exchanger</li>
                </ul>

                <h4>Technical Specifications:</h4>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Technical Specifications</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Model:</strong> PSM 24/48 4.0 ZD</li>
                                <li><strong>Manufacturer:</strong> Retus, Erwin Suter AG</li>
                                <li><strong>Year of Manufacture:</strong> 2018</li>
                                <li><strong>Material:</strong> Stainless Steel</li>
                                <li><strong>Needles:</strong> 24/48 (adjustable)</li>
                                <li><strong>Function:</strong> Injection of brine or marinades</li>
                                <li><strong>Operation:</strong> Intuitive control panel with emergency stop switch</li>
                                <li><strong>Mobility:</strong> Equipped with wheels for easy movement</li>
                                <li><strong>Condition:</strong> Used, fully functional</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <h4>Service and Support:</h4>
                <p>We offer comprehensive service, repair, and technical support for your brine injector. Contact us for customized offers and assistance!</p>
                <p><em>Interested? Get in touch now!</em></p>
            </div>
        </div>
        <!-- Structured Data for SEO -->
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Product",
                "name": "Retus Brine Injector",
                "description": "Tested used Retus Brine Injector for butcher shops and food production.",
                "category": "Used Equipment",
                "image": "https://as-technical.de/Product/used/injectors/1.JPG",
                "brand": {
                    "@type": "Brand",
                    "name": "Retus"
                }
            }
        </script>
    <?php } ?>

    <?php if (!$is_included) { ?>
        <script>
            // Define changeSlide globally to ensure it’s always available
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