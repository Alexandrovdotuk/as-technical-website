<?php include 'header.php' ?>

<title>Used BASTRA B2000 Smokehouse – Refurbished & Customizable</title>

<meta name="description" content="Used and refurbished BASTRA B2000 smoke and cooking system – customizable with choice of heating, humidification, curing package, and more. Ideal for butcher shops!" />

<meta name="keywords" content="used smokehouse, BASTRA B2000, refurbished, butcher supplies, butcher machines, customizable, meat processing" />

<!-- Image Overlay -->
<div id="image-overlay">
  <img src="" alt="Full-screen view of product" />
</div>

<!-- BASTRA Smokehouse -->
<div class="product-container">
  <div class="product-image">
    <div class="swiper mySwiper1">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="../Product/gebraucht/rauchanlagen/bastra.jpg" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Used BASTRA B2000 Smoke and Cooking System">
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>

    <!-- Thumbnails -->
    <div class="thumbnail-container">
      <div class="thumbnail" onclick="changeSlide(0, 'mySwiper1')">
        <img src="../Product/gebraucht/rauchanlagen/bastra.jpg" alt="Used BASTRA B2000 Smoke and Cooking System Thumbnail">
      </div>
    </div>
  </div>

  <div class="product-info">
    <h2>Used and Refurbished BASTRA B2000 Smoke and Cooking System</h2>
    <p>Discover the <strong>BASTRA B2000 Smoke and Cooking System</strong> – used, refurbished, and customizable to your needs! This high-quality system is the perfect solution for butcher shops and meat processing plants that value flexibility, efficiency, and quality. We tailor the system precisely to your requirements – from heating to humidification.</p>

    <h4>Your Benefits at a Glance:</h4>
    <p>
      • Used and refurbished – reliable as new<br>
      • Fully customizable to your requirements<br>
      • Easy operation with the MC800 control system<br>
      • Versatile applications: smoking, cooking, curing<br>
      • Installation and training by our expert staff<br>
    </p>

    <h4>Standard Features:</h4>
    <p>
      • <strong>BASTRA B2000</strong> with wood chip smoke generator integrated in the door<br>
      • Intuitive MC800 control system for easy operation<br>
      • Compressed air foam cleaning for hygienic cleanliness<br>
    </p>

    <h4>Customization Options:</h4>
    <p>
      • <strong>Choice of Heating</strong>: Electric, gas, oil, or high-pressure steam<br>
      • <strong>Choice of Humidification</strong>: Atomization with compressed air, water pan, or low-pressure steam (pure steam)<br>
      • <strong>Curing Package</strong>: Additional second humidification, extra air circulation level, cooling evaporator (connection to on-site refrigeration system)<br>
      • <strong>Cooling Shower</strong>: Optional for rapid cooling<br>
      • <strong>Automatic Door Release</strong>: For enhanced user comfort<br>
      • <strong>Alternating Air Circulation System</strong>: For even cooking of flat products<br><br>
      • Further customizations possible based on customer requirements<br>
    </p>

    <h4>Service and Installation:</h4>
    <p>We handle on-site installation and provide comprehensive training so you can start immediately. Our experts are available for questions and maintenance even after installation.</p>
  </div>
</div>

<br><br><br><br><br><br><br><br><br><br>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  // Initialization for each Swiper instance
  var swiper1 = new Swiper(".mySwiper1", {
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  // Function to change slides based on thumbnail click
  function changeSlide(index, swiperClass) {
    const swiper = document.querySelector(`.${swiperClass}`).swiper;
    swiper.slideTo(index);
  }
</script>

<!-- Additional Content -->
<script>
  document.addEventListener("DOMContentLoaded", function() {
    // Event listener for images
    document.addEventListener("click", function(event) {
      if (event.target.classList.contains("fullscreen-toggle")) {
        const overlay = document.querySelector("#image-overlay");
        const overlayImage = document.querySelector("#image-overlay img");

        overlayImage.src = event.target.src;
        overlay.classList.add("active");
        document.body.style.overflow = "hidden";
      }
    });

    // Event listener for overlay
    const overlay = document.querySelector("#image-overlay");

    if (overlay) {
      overlay.addEventListener("click", function(event) {
        console.log("Overlay clicked");

        if (event.target === this || event.target.tagName === "IMG") {
          console.log("Closing overlay");
          this.classList.remove("active");
          document.body.style.overflow = "auto";
        }
      });
    } else {
      console.error("Element with ID 'image-overlay' not found.");
    }
  });
</script>

<style>
  /* !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! */

  .swiper {
    width: 100%;
    height: 100%;
    background: #00000000;
  }

  .swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #00000000;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .swiper-slide img {
    display: block;
    width: 80%;
    height: 100%;
    object-fit: cover;
    transition: 300ms;
  }

  .thumbnail-container {
    display: flex;
    justify-content: center;
    margin-top: 10px;
  }

  .thumbnail {
    margin: 0 5px;
    cursor: pointer;
  }

  .thumbnail img {
    width: 50px;
    height: auto;
    transform: scale(1);
    transition: transform 0.3s ease;
  }

  .thumbnail img:hover {
    transform: scale(1.6);
  }

  img.fullscreen {
    cursor: none;
  }

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
    cursor: zoom-out;
  }

  #image-overlay.active {
    display: flex;
  }

  #image-overlay img {
    max-width: 90%;
    max-height: 90%;
  }
</style>

<?php include 'footer.php' ?>