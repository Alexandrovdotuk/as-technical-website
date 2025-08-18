<?php
// used_delicatessen_mixers.php

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
    <title>Used Deli Mixer</title>
    <meta name="description" content="We offer used deli mixers and batch mixers from Vakona." />
    <meta name="keywords" content="offer, batch mixer, deli mixer, tumbler, refurbished, butcher supplies, butcher machines, Vakona" />
    <meta name="robots" content="index, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/styles/swiper-bundle.min.css" />
    <link rel="stylesheet" href="/styles/swiperpic.css" />
  </head>

  <body>
    <?php include 'header.php'; ?>
    <!-- Introduction -->
    <div class="leistungen">
      <h2>Your Perfect Used Deli Mixer</h2>
      <p>Discover our refurbished Vakona FM 60 deli mixer, ideal for butcher shops and food production. This versatile machine is perfect for mixing and blending salads, meat products, fish, poultry, and convenience products. With our expertise in maintenance and repair, we offer you a reliable solution for your production needs.</p>
      <p>Contact us for a customized offer or technical consultation!</p>
    </div>
    <!-- Image Overlay -->
    <div id="image-overlay">
      <img src="" alt="Full-screen view of Deli Mixer" />
      <video controls style="display: none;"></video>
    </div>
  <?php } ?>

  <?php
  // Product: Vakona FM 60
  if ($selected_product === null || $selected_product === 'vakona-fm60') {
    $local_swiper_id = $is_included ? $swiper_id : 'mySwiper1';
  ?>
    <div class="product-container" data-product-id="vakona-fm60">
      <div class="product-image">
        <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="/Product/Gebraucht/Feinkostmischer/vakona1.JPG" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Vakona FM 60 Deli Mixer Front View">
            </div>
            <div class="swiper-slide">
              <img src="/Product/Gebraucht/Feinkostmischer/vakona2.JPG" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Vakona FM 60 Deli Mixer Side View">
            </div>
            <div class="swiper-slide">
              <img src="/Product/Gebraucht/Feinkostmischer/vakona3.JPG" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Vakona FM 60 Deli Mixer Detail View">
            </div>
            <div class="swiper-slide">
              <img src="/Product/Gebraucht/Feinkostmischer/vakona4.JPG" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Vakona FM 60 Deli Mixer Close-Up">
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div>
        </div>
        <!-- Thumbnails -->
        <div class="thumbnail-container">
          <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
            <img src="/Product/Gebraucht/Feinkostmischer/vakona1.JPG" alt="Vakona FM 60 Thumbnail 1">
          </div>
          <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
            <img src="/Product/Gebraucht/Feinkostmischer/vakona2.JPG" alt="Vakona FM 60 Thumbnail 2">
          </div>
          <div class="thumbnail" onclick="changeSlide(2, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
            <img src="/Product/Gebraucht/Feinkostmischer/vakona3.JPG" alt="Vakona FM 60 Thumbnail 3">
          </div>
          <div class="thumbnail" onclick="changeSlide(3, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
            <img src="/Product/Gebraucht/Feinkostmischer/vakona4.JPG" alt="Vakona FM 60 Thumbnail 4">
          </div>
        </div>
      </div>
      <div class="product-info">
        <h2>Vakona FM 60 Deli Mixer</h2>
        <p>For sale is a used and refurbished <strong>Vakona FM 60 Deli Mixer</strong> from 2018. This versatile machine is ideal for mixing and blending food products such as salads, meat products, fish, poultry, and convenience products in butcher shops and food productions.</p>
        <h4>Your Advantages:</h4>
        <ul>
          <li>Versatile for various food products</li>
          <li>Refurbished and immediately ready for use</li>
          <li>Manually tiltable 60-liter container</li>
          <li>Variable arm speeds for flexible applications</li>
          <li>Two braked wheels with locks for mobility</li>
          <li>Filling capacity from 5 kg to 40 kg, depending on the product</li>
        </ul>
        <h4>Technical Data:</h4>
        <div class="accordion">
          <div class="accordion-item">
            <button class="accordion-header">Technical Data</button>
            <div class="accordion-content">
              <ul>
                <li><strong>Year of Manufacture:</strong> 2018</li>
                <li><strong>Container Volume:</strong> 60 liters (manually tiltable)</li>
                <li><strong>Filling Capacity:</strong> 5–40 kg (depending on the product)</li>
                <li><strong>Arm Speeds:</strong> Variable</li>
                <li><strong>Mobility:</strong> Two braked wheels with locks</li>
                <li><strong>Condition:</strong> Refurbished, fully functional</li>
              </ul>
            </div>
          </div>
        </div>
        <h4>Service and Consultation:</h4>
        <p>We offer comprehensive service, repair, and technical consultation for your deli mixer. Contact us for customized offers and support!</p>
        <p><em>Interested? Get in touch now!</em></p>
      </div>
    </div>
    <!-- Structured Data for SEO -->
    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "Product",
        "name": "Vakona FM 60 Deli Mixer",
        "description": "Refurbished used deli mixer Vakona FM 60 for butcher shops and food production.",
        "category": "Used Equipment",
        "image": "https://as-technical.de/Product/used/Feinkostmischer/vakona1.JPG",
        "brand": {
          "@type": "Brand",
          "name": "Vakona"
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
      var swiper_vakonaFM60 = new Swiper('.mySwiper1', {
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