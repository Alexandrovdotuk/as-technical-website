<?php
// packagingmachines.php

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
    <title>Packaging Machines from ZERMAT | AS Technical Solutions</title>
    <meta name="description" content="Discover high-quality heat sealing and vacuum packaging machines from ZERMAT – ideal for gastronomy, food production, and more. Quality and durability guaranteed." />
    <meta name="keywords" content="Packaging Machines, Heat Sealing Machines, Vacuum Packaging Machines, ZERMAT, Food Packaging, Gastronomy, Catering, Butchery" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  </head>

  <body>
    <?php include 'header.php'; ?>
    <!-- Introduction -->
    <div class="leistungen">
      <h2>Perfect Packaging Solutions – Preserve Freshness and Quality</h2>
      <p>Do you want to package your food hygienically and extend its shelf life? In collaboration with our partner ZERMAT, we offer you top-class packaging machines that meet the highest standards. Whether heat sealing machines for trays or vacuum packaging machines for bags – we have the right solution for butcher shops, gastronomy businesses, catering companies, and food manufacturers.</p>
      <p>Our machines impress with innovative technology, robust construction, and ease of use. Extend the freshness of your products, optimize your workflows, and present your goods in appealing packaging. Explore our range and find the perfect machine for your needs!</p>
    </div>

    <div id="image-overlay">
      <img src="" alt="Full-screen view of packaging machine" />
      <video controls style="display: none;"></video>
    </div>
  <?php } ?>

  <!-- Product 1: ZERMAT Heat Sealing Machine TBG -->
  <?php
  if ($selected_product === null || $selected_product === 'zermat-tbg') {
    $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_zermatTBG';
  ?>
    <div class="product-container" data-product-id="zermat-tbg">
      <div class="product-image">
        <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
          <div class="swiper-wrapper">
            <!-- Placeholder for images -->
            <div class="swiper-slide"><img src="../Product/ZERMAT/TBG.jpeg" class="fullscreen-toggle" style="cursor:zoom-in;" alt="ZERMAT TBG"></div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
        <div class="thumbnail-container">
          <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/ZERMAT/TBG.jpeg" alt="ZERMAT TBG"></div>
        </div>
      </div>
      <div class="product-info">
        <h2>ZERMAT Heat Sealing Machine TBG – Compact and Powerful</h2>
        <p>The ZERMAT Heat Sealing Machine TBG is the ideal solution for hygienically sealing food in trays. Perfect for butcher shops, gastronomy businesses, catering companies, and food manufacturers who value quality, durability, and clean presentation.</p>
        <h4>Highlights:</h4>
        <ul>
          <li>Fully automatic sealing process with integrated film cutting</li>
          <li>Option for standard sealing or with protective gas (MAP)</li>
          <li>Ergonomic drawer system with sealing chamber</li>
          <li>Programmable sealing time for perfect results</li>
          <li>Electronic temperature control with acoustic cycle indicator</li>
          <li>Hermetically sealed, hygienic sealing process</li>
          <li>Robust construction made of stainless steel and aluminum</li>
          <li>Control panel with 10 storable programs</li>
          <li>Maximum safety through internal welding and cutting device</li>
          <li>Optional gas supply for extended shelf life</li>
        </ul>
        <h4>Technical Data:</h4>
        <div class="accordion">
          <div class="accordion-item">
            <button class="accordion-header">Technical Data</button>
            <div class="accordion-content">
              <ul>
                <li><strong>Max. Tray Size:</strong> 190 x 260 mm</li>
                <li><strong>Max. Film Width:</strong> 200 mm</li>
                <li><strong>Max. Roll Diameter:</strong> 180 mm</li>
                <li><strong>Dimensions (open):</strong> 300 x 610 x 690 mm</li>
                <li><strong>Dimensions (closed):</strong> 300 x 610 x 465 mm</li>
                <li><strong>Power Supply:</strong> 230 V</li>
                <li><strong>Power Consumption:</strong> 750 W</li>
                <li><strong>Gas Connection:</strong> 2–4 mbar (optional)</li>
                <li><strong>Weight:</strong> approx. 30 kg</li>
              </ul>
            </div>
          </div>
        </div>
        <p><em>Interested? Contact us for personalized advice!</em></p>
      </div>
    </div>
  <?php } ?>

  <!-- Product 2: ZERMAT Heat Sealing Machine TBG PLUS -->
  <?php
  if ($selected_product === null || $selected_product === 'zermat-tbg-plus') {
    $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_zermatTBGPlus';
  ?>
    <div class="product-container" data-product-id="zermat-tbg-plus">
      <div class="product-image">
        <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
          <div class="swiper-wrapper">
            <!-- Placeholder for images -->
            <div class="swiper-slide"><img src="../Product/ZERMAT/TBGPlus.jpeg" class="fullscreen-toggle" style="cursor:zoom-in;" alt="ZERMAT TBG PLUS"></div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
        <div class="thumbnail-container">
          <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/ZERMAT/TBGPlus.jpeg" alt="ZERMAT TBG PLUS"></div>
        </div>
      </div>
      <div class="product-info">
        <h2>ZERMAT Heat Sealing Machine TBG PLUS – Precision and Efficiency</h2>
        <p>The TBG PLUS is the advanced version of the proven ZERMAT TBG. It offers the highest precision in sealing trays for fresh or prepared foods – ideal for gastronomy, food production, and catering.</p>
        <h4>Highlights:</h4>
        <ul>
          <li>Automatic sealing with integrated film cutting</li>
          <li>Optional protective gas flushing (MAP) for extended shelf life</li>
          <li>Fast and ergonomic drawer system</li>
          <li>Digital control with 10 programmable sealing profiles</li>
          <li>Electronic temperature control with acoustic cycle indicator</li>
          <li>Hygienic, hermetically sealed sealing</li>
          <li>Robust construction made of stainless steel and anodized aluminum</li>
          <li>Compact dimensions for smaller workspaces</li>
        </ul>
        <h4>Technical Data:</h4>
        <div class="accordion">
          <div class="accordion-item">
            <button class="accordion-header">Technical Data</button>
            <div class="accordion-content">
              <ul>
                <li><strong>Max. Tray Size:</strong> 190 x 260 mm</li>
                <li><strong>Max. Film Width:</strong> 200 mm</li>
                <li><strong>Max. Roll Diameter:</strong> 180 mm</li>
                <li><strong>Dimensions (open):</strong> 300 x 610 x 690 mm</li>
                <li><strong>Dimensions (closed):</strong> 300 x 610 x 465 mm</li>
                <li><strong>Power Supply:</strong> 230 V</li>
                <li><strong>Power Consumption:</strong> 750 W</li>
                <li><strong>Gas Connection:</strong> 2–4 mbar (optional)</li>
                <li><strong>Weight:</strong> approx. 30 kg</li>
              </ul>
            </div>
          </div>
        </div>
        <p><em>Ready for the next level in food packaging? Contact us!</em></p>
      </div>
    </div>
  <?php } ?>

  <!-- Product 3: ZERMAT JazzVac Mini -->
  <?php
  if ($selected_product === null || $selected_product === 'zermat-jazzvac-mini') {
    $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_zermatJazzVacMini';
  ?>
    <div class="product-container" data-product-id="zermat-jazzvac-mini">
      <div class="product-image">
        <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
          <div class="swiper-wrapper">
            <!-- Placeholder for images -->
            <div class="swiper-slide"><img src="../Product/ZERMAT/JazzVacMini.jpeg" class="fullscreen-toggle" style="cursor:zoom-in;" alt="ZERMAT JazzVac Mini"></div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
        <div class="thumbnail-container">
          <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/ZERMAT/JazzVacMini.jpeg" alt="ZERMAT JazzVac Mini"></div>
        </div>
      </div>
      <div class="product-info">
        <h2>ZERMAT JazzVac Mini – Compact Vacuum Packaging Machine</h2>
        <p>The JazzVac Mini is ZERMAT’s smallest professional vacuum packaging machine. It is perfect for kitchens, small shops, labs, or sales outlets with limited space.</p>
        <h4>Highlights:</h4>
        <ul>
          <li>Fully automatic vacuum and sealing cycle</li>
          <li>Digital control panel with easy program selection</li>
          <li>Adjustable vacuum time, sealing time, and optional gas flushing (MAP)</li>
          <li>High-quality vacuum pump for fast packaging</li>
          <li>Stainless steel chamber, easy to clean</li>
          <li>Transparent lid for visual monitoring</li>
          <li>Compact, mobile tabletop device</li>
          <li>Suitable for bags of different thicknesses and materials</li>
          <li>Optional gas flushing for extended shelf life</li>
        </ul>
        <h4>Application Areas:</h4>
        <ul>
          <li>Butcher shops</li>
          <li>Gastronomy businesses</li>
          <li>Cheese and fish processing</li>
          <li>Delicatessen & Catering</li>
          <li>Farm shops</li>
          <li>Self-service packaging</li>
        </ul>
        <h4>Technical Data:</h4>
        <div class="accordion">
          <div class="accordion-item">
            <button class="accordion-header">Technical Data</button>
            <div class="accordion-content">
              <ul>
                <li><strong>Chamber Size:</strong> 310 x 280 x 85 mm</li>
                <li><strong>Sealing Bar:</strong> 280 mm</li>
                <li><strong>Vacuum Pump:</strong> Busch 4 m³/h</li>
                <li><strong>Cycle Time:</strong> 15–50 seconds</li>
                <li><strong>Weight:</strong> 25 kg</li>
                <li><strong>Dimensions (closed):</strong> 450 x 330 x 295 mm</li>
                <li><strong>Dimensions (open):</strong> 450 x 330 x 565 mm</li>
              </ul>
            </div>
          </div>
        </div>
        <p><em>The perfect solution for small businesses – contact us!</em></p>
      </div>
    </div>
  <?php } ?>

  <!-- Product 4: ZERMAT BluesVac 52 -->
  <?php
  if ($selected_product === null || $selected_product === 'zermat-bluesvac-52') {
    $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_zermatBluesVac52';
  ?>
    <div class="product-container" data-product-id="zermat-bluesvac-52">
      <div class="product-image">
        <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
          <div class="swiper-wrapper">
            <!-- Placeholder for images -->
            <div class="swiper-slide"><img src="../Product/ZERMAT/BluesVac52.jpeg" class="fullscreen-toggle" style="cursor:zoom-in;" alt="ZERMAT BluesVac 52"></div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
        <div class="thumbnail-container">
          <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/ZERMAT/BluesVac52.jpeg" alt="ZERMAT BluesVac 52"></div>
        </div>
      </div>
      <div class="product-info">
        <h2>ZERMAT BluesVac 52 – Professional Tabletop Vacuum Packaging Machine</h2>
        <p>The BluesVac 52 is a powerful tabletop vacuum packaging machine, ideal for butcher shops, gastronomy businesses, and delicatessen stores. With a robust stainless steel construction and advanced features for reliable performance.</p>
        <h4>Highlights:</h4>
        <ul>
          <li>100% stainless steel construction (AISI 304) for durability and hygiene</li>
          <li>Seamlessly formed inner chamber with rounded corners</li>
          <li>Oval lid made of high-strength methacrylate</li>
          <li>Control panel with 10 programmable settings</li>
          <li>Sensor-based vacuum control with additional time function</li>
          <li>Sealing time control</li>
          <li>Vacuum pump maintenance program</li>
          <li>Soft air release (“Softair”) to prevent product damage</li>
          <li>Emergency stop button to interrupt the cycle</li>
          <li>3-year warranty</li>
        </ul>
        <h4>Optional Equipment:</h4>
        <ul>
          <li>Second sealing bar</li>
          <li>Tilted plate for liquid packaging</li>
          <li>Gas injection for extended shelf life</li>
          <li>Cut-off sealing</li>
          <li>Mobile trolley with shelves</li>
          <li>External vacuum kit for Gastrovac containers</li>
          <li>LED control panel with label printer option</li>
          <li>Boiling point detector for liquids</li>
        </ul>
        <h4>Technical Data:</h4>
        <div class="accordion">
          <div class="accordion-item">
            <button class="accordion-header">Technical Data</button>
            <div class="accordion-content">
              <ul>
                <li><strong>Usable Chamber Size:</strong> 520 mm</li>
                <li><strong>Chamber Dimensions:</strong> 520 × 410 × 185 mm</li>
                <li><strong>External Dimensions:</strong> 700 × 530 × 440 mm</li>
                <li><strong>Sealing Bar Length:</strong> 2 × 410 mm</li>
                <li><strong>Vacuum Pump:</strong> Busch 21 m³/h</li>
                <li><strong>Electrical Power:</strong> 0.75 kW</li>
                <li><strong>Power Supply:</strong> 220 V, single-phase</li>
                <li><strong>Weight:</strong> 49 kg</li>
              </ul>
            </div>
          </div>
        </div>
        <p><em>Optimize your packaging processes – contact us!</em></p>
      </div>
    </div>
  <?php } ?>

  <!-- Product 5: ZERMAT CV100 -->
  <?php
  if ($selected_product === null || $selected_product === 'zermat-cv100') {
    $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_zermatCV100';
  ?>
    <div class="product-container" data-product-id="zermat-cv100">
      <div class="product-image">
        <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
          <div class="swiper-wrapper">
            <!-- Placeholder for images -->
            <div class="swiper-slide"><img src="../Product/ZERMAT/CV100.jpeg" class="fullscreen-toggle" style="cursor:zoom-in;" alt="ZERMAT CV100"></div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
        <div class="thumbnail-container">
          <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/ZERMAT/CV100.jpeg" alt="ZERMAT CV100"></div>
        </div>
      </div>
      <div class="product-info">
        <h2>ZERMAT CV100 – Industrial Vacuum Packaging Machine</h2>
        <p>The ZERMAT CV100 is a powerful double-chamber vacuum packaging machine for industrial use. It impresses with reliability, speed, and hygienic design.</p>
        <h4>Highlights:</h4>
        <ul>
          <li>Double-chamber design for continuous operation</li>
          <li>Automatic lid swing for increased efficiency</li>
          <li>Housing made of stainless steel AISI 304</li>
          <li>Deep-drawn vacuum chambers with rounded corners</li>
          <li>High-quality vacuum pump for fast cycles</li>
          <li>User-friendly control panel with 10 programs</li>
          <li>Soft air release system (“Softair”)</li>
          <li>Optional MAP, second sealing bar, label printing</li>
        </ul>
        <h4>Optional Equipment:</h4>
        <ul>
          <li>MAP protective gas packaging</li>
          <li>Liquid separator / boiling point detection</li>
          <li>Second sealing seam</li>
          <li>Softair (adjustable air release)</li>
          <li>Mobile base frame</li>
          <li>Label printer, counting modules, maintenance indicator</li>
        </ul>
        <h4>Technical Data:</h4>
        <div class="accordion">
          <div class="accordion-item">
            <button class="accordion-header">Technical Data</button>
            <div class="accordion-content">
              <ul>
                <li><strong>Vacuum Pump:</strong> 100 m³/h</li>
                <li><strong>Chamber Dimensions:</strong> 800 × 530 × 180 mm</li>
                <li><strong>Sealing Bars:</strong> 2 × 800 mm</li>
                <li><strong>External Dimensions:</strong> 1,065 × 1,020 × 1,150 mm</li>
                <li><strong>Electrical Power:</strong> 2.2 kW</li>
                <li><strong>Power Supply:</strong> 400 V / Three-phase</li>
                <li><strong>Weight:</strong> approx. 300 kg</li>
                <li><strong>Production Capacity:</strong> up to 5 cycles/minute</li>
              </ul>
            </div>
          </div>
        </div>
        <p><em>Boost your production capacity – contact us!</em></p>
      </div>
    </div>
  <?php } ?>

  <!-- Product 6: ZERMAT CV200 -->
  <?php
  if ($selected_product === null || $selected_product === 'zermat-cv200') {
    $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_zermatCV200';
  ?>
    <div class="product-container" data-product-id="zermat-cv200">
      <div class="product-image">
        <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
          <div class="swiper-wrapper">
            <!-- Placeholder for images -->
            <div class="swiper-slide"><img src="../Product/ZERMAT/CV200.jpeg" class="fullscreen-toggle" style="cursor:zoom-in;" alt="ZERMAT CV200"></div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
        <div class="thumbnail-container">
          <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/ZERMAT/CV200.jpeg" alt="ZERMAT CV200"></div>
        </div>
      </div>
      <div class="product-info">
        <h2>ZERMAT CV200 – Vacuum Packaging Machine for Medium Production Volumes</h2>
        <p>The ZERMAT CV200 is ideal for businesses with medium production volumes. It combines powerful technology with user-friendly operation and is entirely made of stainless steel.</p>
        <h4>Highlights:</h4>
        <ul>
          <li>Robust stainless steel construction (AISI 304)</li>
          <li>Digital control panel with 20 storable programs</li>
          <li>Vacuum control via sensor + time</li>
          <li>Soft air release via programmable Softair system</li>
          <li>Individually adjustable sealing time</li>
          <li>Emergency stop function</li>
          <li>Flat, transparent methacrylate cover</li>
          <li>Maintenance-friendly with optional video support</li>
        </ul>
        <h4>Optional Equipment:</h4>
        <ul>
          <li>Protective gas injection (MAP)</li>
          <li>Busch vacuum pump 63 m³/h</li>
          <li>Oval methacrylate lid</li>
          <li>Cut-off sealing (deactivatable)</li>
          <li>Third sealing bar</li>
          <li>Tilted ramp for liquids</li>
          <li>Special vacuum cycle for liquid products (“pulmonary effect”)</li>
        </ul>
        <h4>Technical Data:</h4>
        <div class="accordion">
          <div class="accordion-item">
            <button class="accordion-header">Technical Data</button>
            <div class="accordion-content">
              <ul>
                <li><strong>External Dimensions:</strong> 720 × 680 × 1,000 mm</li>
                <li><strong>Chamber Dimensions:</strong> 590 × 470 × 170 mm</li>
                <li><strong>Power Supply:</strong> 3-phase, 380 V (optional: 220 V)</li>
                <li><strong>Electrical Power:</strong> 3.5 kW</li>
                <li><strong>Sealing Bars (variable):</strong> 1 × 520 mm + 1 × 420 mm, 2 × 450 mm, or 2 × 550 mm</li>
              </ul>
            </div>
          </div>
        </div>
        <p><em>Efficient packaging for your business – contact us!</em></p>
      </div>
    </div>
  <?php } ?>

  <!-- Product 7: ZERMAT CV1000 -->
  <?php
  if ($selected_product === null || $selected_product === 'zermat-cv1000') {
    $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_zermatCV1000';
  ?>
    <div class="product-container" data-product-id="zermat-cv1000">
      <div class="product-image">
        <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
          <div class="swiper-wrapper">
            <!-- Placeholder for images -->
            <div class="swiper-slide"><img src="../Product/ZERMAT/CV1000.jpeg" class="fullscreen-toggle" style="cursor:zoom-in;" alt="ZERMAT CV1000"></div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
        <div class="thumbnail-container">
          <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/ZERMAT/CV1000.jpeg" alt="ZERMAT CV1000"></div>
        </div>
      </div>
      <div class="product-info">
        <h2>ZERMAT CV1000 – High-Performance Vacuum Packaging Machine</h2>
        <p>The ZERMAT CV1000 is a chamber vacuum packaging machine from the Medium series, ideal for larger productions with high demands for performance, hygiene, and flexibility.</p>
        <h4>Highlights:</h4>
        <ul>
          <li>Robust stainless steel construction (AISI 304)</li>
          <li>Flat methacrylate lid (oval optional)</li>
          <li>2 sealing bars as standard (3rd or 4th optional)</li>
          <li>Double groove sealing seam for increased tightness</li>
          <li>20 programmable packaging programs</li>
          <li>Vacuum control via sensor + time</li>
          <li>Time-controlled sealing</li>
          <li>Vacuum pump maintenance indicator</li>
          <li>Emergency stop function</li>
          <li>Easily accessible maintenance unit</li>
        </ul>
        <h4>Optional Equipment:</h4>
        <ul>
          <li>Gas injection (MAP)</li>
          <li>Oval methacrylate lid</li>
          <li>Cut-off sealing (with/without deactivation)</li>
          <li>Additional sealing bars (3rd/4th)</li>
          <li>Automatic lid lowering</li>
          <li>Pulmonary vacuum mode (for liquids)</li>
          <li>Customized special solutions on request</li>
        </ul>
        <h4>Technical Data:</h4>
        <div class="accordion">
          <div class="accordion-item">
            <button class="accordion-header">Technical Data</button>
            <div class="accordion-content">
              <ul>
                <li><strong>External Dimensions:</strong> 1,180 × 835 × 1,010 mm</li>
                <li><strong>Chamber Dimensions:</strong> 1,054 × 630 × 170 mm</li>
                <li><strong>Vacuum Pump:</strong> Busch 100 m³/h</li>
                <li><strong>Voltage:</strong> 380 V / 3-phase (220 V optional)</li>
                <li><strong>Sealing Bar Variants:</strong> 1 × 900 mm + 1 × 550 mm, 2 × 1,000 mm, or 2 × 550 mm</li>
              </ul>
            </div>
          </div>
        </div>
        <p><em>High performance for your production – contact us!</em></p>
      </div>
    </div>
  <?php } ?>

  <!-- Product 8: ZERMAT DC750 -->
  <?php
  if ($selected_product === null || $selected_product === 'zermat-dc750') {
    $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_zermatDC750';
  ?>
    <div class="product-container" data-product-id="zermat-dc750">
      <div class="product-image">
        <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
          <div class="swiper-wrapper">
            <!-- Placeholder for images -->
            <div class="swiper-slide"><img src="../Product/ZERMAT/DC750.jpeg" class="fullscreen-toggle" style="cursor:zoom-in;" alt="ZERMAT DC750"></div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
        <div class="thumbnail-container">
          <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/ZERMAT/DC750.jpeg" alt="ZERMAT DC750"></div>
        </div>
      </div>
      <div class="product-info">
        <h2>ZERMAT DC750 – High-Performance Double-Chamber Vacuum Packaging Machine</h2>
        <p>The ZERMAT DC750 is an industrial vacuum packaging machine with a double-chamber system, designed for maximum efficiency in high production environments. Ideal for the food industry.</p>
        <h4>Highlights:</h4>
        <ul>
          <li>Housing and chamber made of stainless steel (AISI 304)</li>
          <li>Deep-drawn chamber with rounded corners</li>
          <li>Double-chamber design for continuous operation</li>
          <li>Digital control panel with 10 storable programs</li>
          <li>Sensor-based vacuum control</li>
          <li>Time-controlled sealing function</li>
          <li>Softair system for gentle air release</li>
          <li>Emergency stop function</li>
          <li>Maintenance-friendly design</li>
          <li>Support and training videos available at www.zermat.es</li>
        </ul>
        <h4>Optional Equipment:</h4>
        <ul>
          <li>MAP system (protective gas)</li>
          <li>Cut-off sealing (deactivatable)</li>
          <li>Bi-active sealing for thick bags</li>
          <li>Assisted lid lift (automatic)</li>
        </ul>
        <h4>Technical Data:</h4>
        <div class="accordion">
          <div class="accordion-item">
            <button class="accordion-header">Technical Data</button>
            <div class="accordion-content">
              <ul>
                <li><strong>External Dimensions:</strong> 1,545 × 1,150 × 1,180 mm</li>
                <li><strong>Chamber Dimensions:</strong> 620 × 840 × 250 mm</li>
                <li><strong>Vacuum Pump:</strong> Busch 160 m³/h</li>
                <li><strong>Machine Weight:</strong> 537 kg</li>
                <li><strong>Sealing Bar Variants:</strong> 2 × 620 mm or 2 × 840 mm</li>
              </ul>
            </div>
          </div>
        </div>
        <p><em>Maximum efficiency for your production – contact us!</em></p>
      </div>
    </div>
  <?php } ?>

  <!-- Product 9: ZERMAT DC950 -->
  <?php
  if ($selected_product === null || $selected_product === 'zermat-dc950') {
    $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_zermatDC950';
  ?>
    <div class="product-container" data-product-id="zermat-dc950">
      <div class="product-image">
        <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
          <div class="swiper-wrapper">
            <!-- Placeholder for images -->
            <div class="swiper-slide"><img src="../Product/ZERMAT/DC950.jpeg" class="fullscreen-toggle" style="cursor:zoom-in;" alt="ZERMAT DC950"></div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
        <div class="thumbnail-container">
          <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/ZERMAT/DC950.jpeg" alt="ZERMAT DC950"></div>
        </div>
      </div>
      <div class="product-info">
        <h2>ZERMAT DC950 – Industrial Double-Chamber Vacuum Packaging Machine</h2>
        <p>The DC950 is the flagship of ZERMAT’s LARGE series, designed specifically for the highest production volumes in the food industry. With a robust design and a 300 m³/h vacuum pump.</p>
        <h4>Highlights:</h4>
        <ul>
          <li>Entirely made of stainless steel (AISI 304)</li>
          <li>Double-chamber system for continuous cycles</li>
          <li>Control via digital panel with 10 programs</li>
          <li>Sensor-based vacuum control</li>
          <li>Softair function for delicate products</li>
          <li>Time-controlled sealing</li>
          <li>Vacuum pump maintenance indicator</li>
          <li>STOP button to interrupt the cycle</li>
          <li>Training and maintenance videos available at www.zermat.es</li>
        </ul>
        <h4>Optional Equipment:</h4>
        <ul>
          <li>Protective gas packaging (MAP)</li>
          <li>Cut-off sealing (deactivatable)</li>
          <li>Bi-active sealing (for thick bags)</li>
          <li>Automatic assisted lid lift</li>
        </ul>
        <h4>Technical Data:</h4>
        <div class="accordion">
          <div class="accordion-item">
            <button class="accordion-header">Technical Data</button>
            <div class="accordion-content">
              <ul>
                <li><strong>External Dimensions:</strong> 2,420 × 1,210 × 1,130 mm</li>
                <li><strong>Chamber Dimensions:</strong> 1,100 × 850 × 280 mm</li>
                <li><strong>Vacuum Pump:</strong> Busch 300 m³/h</li>
                <li><strong>Weight:</strong> 767 kg</li>
                <li><strong>Sealing Bar Variants:</strong> 2 × 1,100 mm or 2 × 850 mm</li>
              </ul>
            </div>
          </div>
        </div>
        <p><em>The best for your large-scale production – contact us!</em></p>
      </div>
    </div>
  <?php } ?>

  <?php if (!$is_included) { ?>
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