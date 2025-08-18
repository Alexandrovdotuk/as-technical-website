<?php
// fine-food-mixers.php

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
    <title>Vacuum Mixers & Tumblers | Service & Consulting</title>
    <meta name="description" content="Discover high-quality vacuum mixers, fine food mixers, and tumblers from Vakona and Nowicki. Tailored solutions with service, repair, and technical consulting for your production." />
    <meta name="keywords" content="vacuum mixer, fine food mixer, tumbler, Vakona, Nowicki, service, offer, repair, technical consulting" />
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
      <h2>Your Perfect Mixing and Tumbling Solution – Efficient, Reliable, Tailored</h2>
      <p>Looking for a vacuum mixer, fine food mixer, or tumbler to optimize your production? With our partners Vakona and Nowicki, we offer top-notch equipment, technical support, and personalized consulting – all from a single source.</p>
      <p>Our solutions ensure effective marination, improved texture, and the highest product quality. Discover our versatile mixers and tumblers, flexibly tailored to your requirements!</p>
    </div>
    <div id="image-overlay">
      <img src="" alt="Full-screen view of mixer or tumbler" />
    </div>
  <?php } ?>

  <?php
  // Product 1: FM 60-250 STL
  if ($selected_product === null || $selected_product === 'fm-60-250-stl') {
    $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_fm60250stl';
  ?>
    <div class="product-container" data-product-id="fm-60-250-stl">
      <div class="product-image">
        <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="../Product/vakona/FM-100-STL.PNG" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Vakona FM 60-250 STL Fine Food Mixer"></div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
        <div class="thumbnail-container">
          <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/vakona/FM-100-STL.PNG" alt="FM 60-250 STL Thumbnail"></div>
        </div>
      </div>
      <div class="product-info">
        <h2>FM 60-250 STL – Versatile Fine Food Mixer</h2>
        <p>The FM 60-250 STL from Vakona is a versatile fine food mixer, ideal for small to medium-sized productions. With adjustable speeds and a robust design, it ensures optimal mixing results.</p>
        <h4>Standard Features:</h4>
        <ul>
          <li>Arm rotation with various speeds (FM 60–220).</li>
          <li>Infinitely adjustable rotation speed (FM 250).</li>
          <li>Mixing arm with scraper and push-button system.</li>
          <li>Manually tiltable container (FM 60–220).</li>
          <li>Electric tilting of the container (FM 250).</li>
          <li>Double-braked wheels with locks (up to FM 250).</li>
        </ul>
        <h4>Options:</h4>
        <ul>
          <li>Computer control or touchscreen control.</li>
          <li>Hydraulic loading or pole loading for 200-liter standard carts.</li>
          <li>Electric tilting of the container (FM 60–220).</li>
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
              <td>Container Volume</td>
              <td>60–250 liters</td>
            </tr>
            <tr>
              <td>Control System</td>
              <td>Manual or computer/touchscreen (optional)</td>
            </tr>
            <tr>
              <td>Tilting System</td>
              <td>Manual or electric</td>
            </tr>
            <tr>
              <td>Mobility</td>
              <td>Double-braked wheels with locks (up to FM 250)</td>
            </tr>
          </tbody>
        </table>
        <p><em>Interested? Contact us for a tailored offer!</em></p>
      </div>
    </div>
  <?php } ?>

  <?php
  // Product 2: VM 250-500/STL
  if ($selected_product === null || $selected_product === 'vm-250-500-stl') {
    $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_vm250500stl';
  ?>
    <div class="product-container" data-product-id="vm-250-500-stl">
      <div class="product-image">
        <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="../Product/vakona/VM-300-STL.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Vakona VM 250-500/STL Vacuum Mixer"></div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
        <div class="thumbnail-container">
          <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/vakona/VM-300-STL.png" alt="VM 250-500/STL Thumbnail"></div>
        </div>
      </div>
      <div class="product-info">
        <h2>VM 250-500/STL – Powerful Vacuum Mixer</h2>
        <p>The VM 250-500/STL is a cutting-edge vacuum mixer for medium-sized productions, equipped with touchscreen control and an automatic vacuum pump for efficient results.</p>
        <h4>Standard Features:</h4>
        <ul>
          <li>Touchscreen control.</li>
          <li>Infinitely variable gear motor.</li>
          <li>High-performance vacuum pump with automatic vacuum.</li>
          <li>Mixing arm with scraper and push-button system.</li>
          <li>Electric tilting of the container.</li>
          <li>Lid operation with operator assistance.</li>
        </ul>
        <h4>Options:</h4>
        <ul>
          <li>Automatic tilting system and container positioning.</li>
          <li>Hydraulic loading or pole loading for 200-liter standard carts.</li>
          <li>Electric lid operation.</li>
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
              <td>Container Volume</td>
              <td>250–500 liters</td>
            </tr>
            <tr>
              <td>Control System</td>
              <td>Touchscreen</td>
            </tr>
            <tr>
              <td>Vacuum Pump</td>
              <td>High-performance, automatic</td>
            </tr>
            <tr>
              <td>Tilting System</td>
              <td>Electric</td>
            </tr>
          </tbody>
        </table>
        <p><em>Curious? Let us find your perfect solution!</em></p>
      </div>
    </div>
  <?php } ?>

  <?php
  // Product 3: VM 750-1800/STL
  if ($selected_product === null || $selected_product === 'vm-750-1800-stl') {
    $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_vm7501800stl';
  ?>
    <div class="product-container" data-product-id="vm-750-1800-stl">
      <div class="product-image">
        <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="../Product/vakona/VM-750-STL-B.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Vakona VM 750-1800/STL Vacuum Mixer"></div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
        <div class="thumbnail-container">
          <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/vakona/VM-750-STL-B.png" alt="VM 750-1800/STL Thumbnail"></div>
        </div>
      </div>
      <div class="product-info">
        <h2>VM 750-1800/STL – Vacuum Mixer for Large-Scale Production</h2>
        <p>The VM 750-1800/STL is designed for large production volumes, offering cutting-edge technology with electric lid operation and touchscreen control.</p>
        <h4>Standard Features:</h4>
        <ul>
          <li>Touchscreen control.</li>
          <li>Infinitely variable gear motor.</li>
          <li>High-performance vacuum pump with automatic vacuum.</li>
          <li>Mixing arm with scraper and push-button system.</li>
          <li>Electric tilting of the container.</li>
          <li>Electric lid operation.</li>
        </ul>
        <h4>Options:</h4>
        <ul>
          <li>Automatic tilting system and container positioning.</li>
          <li>Hydraulic loading or pole loading for 200-liter standard carts.</li>
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
              <td>Container Volume</td>
              <td>750–1800 liters</td>
            </tr>
            <tr>
              <td>Control System</td>
              <td>Touchscreen</td>
            </tr>
            <tr>
              <td>Vacuum Pump</td>
              <td>High-performance, automatic</td>
            </tr>
            <tr>
              <td>Tilting System</td>
              <td>Electric</td>
            </tr>
            <tr>
              <td>Lid Operation</td>
              <td>Electric</td>
            </tr>
          </tbody>
        </table>
        <p><em>Ready for big results? Contact us for an offer!</em></p>
      </div>
    </div>
  <?php } ?>

  <?php
  // Product 4: Nowicki Vacuum Tumbler
  if ($selected_product === null || $selected_product === 'nowicki-vakuum-tumbler') {
    $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_nowickitumbler';
  ?>
    <div class="product-container" data-product-id="nowicki-vakuum-tumbler">
      <div class="product-image">
        <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="../Product/nowicki/tumbler/MA-2800 PSCH.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Nowicki MA-2800 PSCH Vacuum Tumbler"></div>
            <div class="swiper-slide"><img src="../Product/nowicki/tumbler/MA-3600 PSCH.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Nowicki MA-3600 PSCH Vacuum Tumbler"></div>
            <div class="swiper-slide"><img src="../Product/nowicki/tumbler/BC.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Control System"></div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
        <div class="thumbnail-container">
          <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/nowicki/tumbler/MA-2800 PSCH.png" alt="MA-2800 PSCH Thumbnail"></div>
          <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/nowicki/tumbler/MA-3600 PSCH.png" alt="MA-3600 PSCH Thumbnail"></div>
          <div class="thumbnail" onclick="changeSlide(2, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/nowicki/tumbler/BC.png" alt="Control System Thumbnail"></div>
        </div>
      </div>
      <div class="product-info">
        <h2>Nowicki Vacuum Tumbler – Effective Marination</h2>
        <p>Nowicki vacuum tumblers enhance the texture and flavor of your products through effective marination. Ideal for meat and food processing in large volumes.</p>
        <h4>Standard Features:</h4>
        <ul>
          <li>Robust design for industrial applications.</li>
          <li>Automatic vacuum control.</li>
          <li>Infinitely adjustable tumbler speed.</li>
          <li>Ergonomic operation.</li>
        </ul>
        <h4>Options:</h4>
        <ul>
          <li>Advanced control systems (touchscreen).</li>
          <li>Cooling or heating functions for specific applications.</li>
          <li>Automatic loading systems.</li>
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
              <td>Models</td>
              <td>MA-2800 PSCH, MA-3600 PSCH</td>
            </tr>
            <tr>
              <td>Container Volume</td>
              <td>2800–3600 liters</td>
            </tr>
            <tr>
              <td>Control System</td>
              <td>Automatic, optional touchscreen</td>
            </tr>
            <tr>
              <td>Vacuum System</td>
              <td>High-performance</td>
            </tr>
          </tbody>
        </table>
        <p><em>Optimize your production! Contact us for details!</em></p>
      </div>
    </div>
  <?php } ?>

  <?php
  if (!$is_included) {
  ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
      // Initialize Swiper for each product
      var swiper_fm60250stl = new Swiper('.mySwiper_fm60250stl', {
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev'
        },
      });
      var swiper_vm250500stl = new Swiper('.mySwiper_vm250500stl', {
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev'
        },
      });
      var swiper_vm7501800stl = new Swiper('.mySwiper_vm7501800stl', {
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev'
        },
      });
      var swiper_nowickitumbler = new Swiper('.mySwiper_nowickitumbler', {
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