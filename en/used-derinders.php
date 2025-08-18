<?php
// used_derinders.php

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
    <title>Used Derinder</title>
    <meta name="description" content="Discover the used Weber ASB 600/1 Belt Derinder – fully functional and ready for immediate use." />
    <meta name="keywords" content="offer, derinder, Weber, refurbished, butcher supplies, butcher machines" />
    <meta name="robots" content="index, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/styles/swiper-bundle.min.css" />
    <link rel="stylesheet" href="/styles/swiperpic.css" />
</head>
<body>
    <?php include 'header.php'; ?>
    <!-- Introduction -->
    <div class="leistungen">
        <h2>Your Perfect Used Derinder</h2>
        <p>We offer you a fully functional, tested, and immediately operational automatic belt derinder from the renowned manufacturer Weber – Model ASB 600/1. This machine efficiently removes rind or fat layers, depending on your settings, making it ideal for butcher shops and meat processing. With our expertise in maintenance and repair, we provide a reliable solution tailored to your production needs.</p>
        <p>Contact us for a customized offer or technical consultation!</p>
    </div>
    <!-- Image Overlay -->
    <div id="image-overlay">
        <img src="" alt="Full-screen view of Derinder" />
        <video controls style="display: none;"></video>
    </div>
<?php } ?>

<?php
// Product: Weber ASB 600/1
if ($selected_product === null || $selected_product === 'weber-asb600') {
    $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_weberASB600';
?>
    <div class="product-container" data-product-id="weber-asb600">
        <div class="product-image">
            <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="/Product/Gebraucht/Abschwarter/weber1.JPG" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Weber ASB 600/1 Derinder Front View">
                    </div>
                    <div class="swiper-slide">
                        <img src="/Product/Gebraucht/Abschwarter/weber2.JPG" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Weber ASB 600/1 Derinder Side View">
                    </div>
                    <div class="swiper-slide">
                        <img src="/Product/Gebraucht/Abschwarter/weber3.JPG" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Weber ASB 600/1 Derinder Detail View">
                    </div>
                    <div class="swiper-slide">
                        <img src="/Product/Gebraucht/Abschwarter/weber4.JPG" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Weber ASB 600/1 Derinder Close-Up">
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
            <!-- Thumbnails -->
            <div class="thumbnail-container">
                <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                    <img src="/Product/Gebraucht/Abschwarter/weber1.JPG" alt="Weber ASB 600/1 Thumbnail 1">
                </div>
                <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                    <img src="/Product/Gebraucht/Abschwarter/weber2.JPG" alt="Weber ASB 600/1 Thumbnail 2">
                </div>
                <div class="thumbnail" onclick="changeSlide(2, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                    <img src="/Product/Gebraucht/Abschwarter/weber3.JPG" alt="Weber ASB 600/1 Thumbnail 3">
                </div>
                <div class="thumbnail" onclick="changeSlide(3, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                    <img src="/Product/Gebraucht/Abschwarter/weber4.JPG" alt="Weber ASB 600/1 Thumbnail 4">
                </div>
            </div>
        </div>
        <div class="product-info">
            <h2>Weber ASB 600/1 Belt Derinder</h2>
            <p>For sale is a fully functional, tested, and immediately operational <strong>Weber ASB 600/1 Belt Derinder</strong>. This automatic belt derinder from the renowned manufacturer Weber efficiently removes rind or fat layers based on your settings, making it perfect for butcher shops and meat processing.</p>
            <h4>Your Advantages:</h4>
            <ul>
                <li>**Automatic Rind Removal**: Efficiently removes rind or fat layers depending on your settings.</li>
                <li>**Adjustable Cutting Depth**: Precisely adjustable to meet individual product requirements – remove just the skin or fat as needed.</li>
                <li>**Continuous Operation with Conveyor Belt**: Ideal for production lines with continuous processing via an integrated belt.</li>
                <li>**Hygienic Design**: High-quality stainless steel construction for durability, hygiene, and easy cleaning.</li>
                <li>**Ready for Immediate Use**: Professionally tested and cleaned, ready to operate right away.</li>
            </ul>
            <h4>Technical Data:</h4>
            <div class="accordion">
                <div class="accordion-item">
                    <button class="accordion-header">Technical Data</button>
                    <div class="accordion-content">
                        <ul>
                            <li><strong>Model:</strong> Weber ASB 600/1</li>
                            <li><strong>Voltage:</strong> 380 V / 50 Hz</li>
                            <li><strong>Motor Power:</strong> 0.85 kW</li>
                            <li><strong>Condition:</strong> Used, fully functional</li>
                        </ul>
                    </div>
                </div>
            </div>
            <h4>Service and Consultation:</h4>
            <p>We offer comprehensive service, repair, and technical consultation for your derinder. Contact us for customized offers and support! For any questions or additional pictures, we are happy to assist you.</p>
            <p><em>Interested? Get in touch now!</em></p>
        </div>
    </div>
    <!-- Structured Data for SEO -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Product",
        "name": "Weber ASB 600/1 Belt Derinder",
        "description": "Fully functional used belt derinder Weber ASB 600/1 for butcher shops and meat processing.",
        "category": "Used Equipment",
        "image": "https://as-technical.de/Product/used/derinders/weber1.JPG",
        "brand": {
            "@type": "Brand",
            "name": "Weber"
        }
    }
    </script>
<?php } ?>

<?php
if (!$is_included) {
?>
    <script src="/scripts/swiper-bundle.min.js"></script>
    <script>
        // Initialize Swiper
        var swiper_weberASB600 = new Swiper('.mySwiper_weberASB600', {
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

        document.addEventListener("DOMContentLoaded", function() {
            // Initialize all accordions
            document.querySelectorAll('.accordion-header').forEach(button => {
                button.addEventListener('click', () => {
                    const content = button.nextElementSibling;
                    const isOpen = content.style.display === 'block';
                    document.querySelectorAll('.accordion-content').forEach(item => {
                        item.style.display = 'none';
                        item.previousElementSibling.classList.remove('active');
                    });
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