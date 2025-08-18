<?php
// used_meat_grinders.php

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
    <title>Used Bizerba Meat Grinder</title>
    <meta name="description" content="Discover the used Bizerba FM 60 Meat Grinder – refurbished, reliable, and versatile for butcher shops and food production." />
    <meta name="keywords" content="offer, meat grinder, bizerba, stuffing grinder, refurbished, butcher supplies, butcher machines, food processing" />
    <meta name="robots" content="index, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@11.2.6/swiper-bundle.min.css" />
</head>

<body>
    <?php include 'header.php'; ?>
    <!-- Introduction -->
    <div class="leistungen">
        <h2>Your Reliable Used Bizerba Meat Grinder</h2>
        <p>Our tested Bizerba meat grinder, ideal for butcher shops and food production.</p>
    </div>
    <div id="image-overlay">
        <img src="" alt="Full-screen view of the meat grinder" />
        <video controls style="display: none;"></video>
    </div>
<?php } ?>

<?php
// Product: Bizerba Meat Grinder
if ($selected_product === null || $selected_product === 'bizerba') {
    $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_bizerba';
?>
<div class="product-container" data-product-id="Bizerba">
    <div class="product-image">
        <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="/Product/gebraucht/fleischwolf/1.JPG" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Bizerba Meat Grinder Image 1">
                </div>
                <div class="swiper-slide">
                    <img src="/Product/gebraucht/fleischwolf/2.JPG" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Bizerba Meat Grinder Image 2">
                </div>
                <div class="swiper-slide">
                    <img src="/Product/gebraucht/fleischwolf/3.JPG" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Bizerba Meat Grinder Image 3">
                </div>
                <div class="swiper-slide">
                    <img src="/Product/gebraucht/fleischwolf/4.JPG" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Bizerba Meat Grinder Image 4">
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
        <!-- Thumbnails -->
        <div class="thumbnail-container">
            <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                <img src="/Product/gebraucht/fleischwolf/1.JPG" alt="Bizerba Meat Grinder Thumbnail 1">
            </div>
            <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                <img src="/Product/gebraucht/fleischwolf/2.JPG" alt="Bizerba Meat Grinder Thumbnail 2">
            </div>
            <div class="thumbnail" onclick="changeSlide(2, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                <img src="/Product/gebraucht/fleischwolf/3.JPG" alt="Bizerba Meat Grinder Thumbnail 3">
            </div>
            <div class="thumbnail" onclick="changeSlide(3, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                <img src="/Product/gebraucht/fleischwolf/4.JPG" alt="Bizerba Meat Grinder Thumbnail 4">
            </div>
        </div>
    </div>
    <div class="product-info">
        <h2>Bizerba Standwolf Size 32 Stuffing Grinder</h2>
        <p>For sale is a used and tested <strong>Bizerba Standwolf Size 32 Stuffing Grinder</strong>. This robust stainless steel machine is ideal for butcher shops and food production facilities looking to efficiently mince and process meat.</p>

        <h4>Your Benefits:</h4>
        <ul>
            <li>High-quality stainless steel construction for durability</li>
            <li>Tested and ready for immediate use</li>
            <li>Easy operation with foot switch</li>
            <li>Powerful motor for consistent grinding</li>
            <li>Mobility with wheels for flexible deployment</li>
            <li>Optimal size 32 for medium to large production volumes</li>
        </ul>

        <h4>Technical Specifications:</h4>
        <div class="accordion">
            <div class="accordion-item">
                <button class="accordion-header">Technical Specifications</button>
                <div class="accordion-content">
                    <ul>
                        <li><strong>Model:</strong> Bizerba Standwolf Size 32</li>
                        <li><strong>Material:</strong> Stainless Steel</li>
                        <li><strong>Function:</strong> Grinding and Stuffing</li>
                        <li><strong>Operation:</strong> Foot switch and manual control</li>
                        <li><strong>Mobility:</strong> Equipped with wheels for easy movement</li>
                        <li><strong>Condition:</strong> Used, fully functional</li>
                    </ul>
                </div>
            </div>
        </div>

        <h4>Service and Support:</h4>
        <p>We offer comprehensive service, repair, and technical support for your stuffing grinder. Contact us for customized offers and assistance!</p>
        <p><em>Interested? Get in touch now!</em></p>
    </div>
</div>
<!-- Structured Data for SEO -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Product",
    "name": "Bizerba Meat Grinder",
    "description": "Refurbished used Bizerba Meat Grinder for butcher shops and food production.",
    "category": "Used Equipment",
    "image": "https://as-technical.de/Product/gebraucht/fleischwolf/1.JPG",
    "brand": {
        "@type": "Brand",
        "name": "Bizerba"
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