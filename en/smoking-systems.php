<?php
// smoking-systems.php

// Check if the file is called directly or included
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
    <title>Smoking Systems & Climate Maturing Systems by Bastra | Service & Consulting</title>
    <meta name="description" content="Discover high-quality smoking systems, climate maturing systems, and cooking systems by Bastra – with service, repair, and tailored consulting for your production." />
    <meta name="keywords" content="smoking systems, climate maturing systems, cooking systems, Bastra, smoke condensate, friction smoke, sawdust, wood chips, service, offer, repair, technical consulting" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  </head>

  <body>
    <?php include 'header.php'; ?>
    <!-- Introduction -->
    <div class="leistungen">
      <h2>Your Perfect Smoking Chamber – Reliable, Innovative, Tailored</h2>
      <p>Are you looking for a smoking system, climate maturing system, or climate maturing smoking system that delivers on its promises? Together with our partner Bastra, a renowned manufacturer of high-quality smoking systems, we offer top-notch products, technical support, and personalized consulting – all from a single source.</p>
      <p>Why is this so important? To ensure your production starts smoothly, factory and on-site components must work in perfect harmony. We help you find the exact solution that fits your requirements. Discover our diverse range of maturing systems, cooking chambers, and smoking systems – with various smoke generator systems and sizes for every need!</p>
    </div>

    <div id="image-overlay">
      <img src="" alt="Vollbildansicht Räucheranlage" />
      <video controls style="display: none;"></video>
    </div>
  <?php } ?>

  <?php
  // Product 1: Model 850
  if ($selected_product === null || $selected_product === 'modell-850') {
    $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_modell850';
  ?>
    <div class="product-container" data-product-id="modell-850">
      <div class="product-image">
        <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="../Product/Bastra/Modell850.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Liquid Smoke"></div>
            <div class="swiper-slide"><img src="../Product/Bastra/Duese.jpg" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Nozzle"></div>
            <div class="swiper-slide"><img src="../Product/Bastra/Profi500.jpg" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Control Unit"></div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
        <div class="thumbnail-container">
          <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/Bastra/Modell850.png" alt="Liquid Smoke"></div>
          <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/Bastra/Duese.jpg" alt="Nozzle"></div>
          <div class="thumbnail" onclick="changeSlide(2, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/Bastra/Profi500.jpg" alt="Control Unit"></div>
        </div>
      </div>
      <div class="product-info">
        <h2>Model 850 – Clean Smoking with Smoke Condensate</h2>
        <p>Discover an innovative solution for your smoking processes: The electrically heated smoking chamber Model 850 uses state-of-the-art smoke condensate atomization via compressed air. Let the benefits of this technology convince you!</p>
        <h4>Why This Smoking Technology Excites:</h4>
        <ul>
          <li><strong>Eco-Friendly:</strong> No smoke nuisance for your neighborhood.</li>
          <li><strong>Simple:</strong> No exhaust air purification required!</li>
          <li><strong>Flexible:</strong> Optionally combinable with a chimney.</li>
          <li><strong>Easy to Maintain:</strong> Minimal tar formation – cleaning made easy.</li>
          <li><strong>Safe:</strong> All pollutants are reliably filtered out.</li>
        </ul><br />
        <h4>Your Standard Equipment at a Glance:</h4>
        <p>With these features, you’re ready to go:</p>
        <ul>
          <li>Compressed air foam cleaning and humidification (for on-site compressor).</li>
          <li>Air circulation with two speeds for optimal results.</li>
        </ul><br />
        <h4>Customize Your System:</h4>
        <p>Make the Model 850 your perfect solution with these optional highlights:</p>
        <ul>
          <li><strong>More Visibility:</strong> System door with viewing window or illuminated glass door.</li>
          <li><strong>Precise Humidification:</strong> Low-pressure steam (for on-site steam generator).</li>
          <li><strong>Maturing Package:</strong> Slow air circulation stage, frequency converter, cooling evaporator & precise humidity control.</li>
          <li><strong>Smoke Variety:</strong> Combinable with sawdust, wood chips, or friction smoke – flexibly integrated.</li>
          <li><strong>Smart Operation:</strong> Touch panel (7" or 10.5") with ProfiNet software.</li>
          <li><strong>Convenience:</strong> Automatic door release & efficient cooling shower.</li>
          <li><strong>Adaptable:</strong> Foldable loading ramp for uneven floors.</li>
        </ul>
        <h4>Technical Data:</h4>
        <div class="accordion">
          <div class="accordion-item">
            <button class="accordion-header">Technical Data</button>
            <div class="accordion-content">
              <ul>
                <li><strong>Heating Type:</strong> Electric</li>
                <li><strong>Smoke Generator:</strong> Smoke Condensate</li>
                <li><strong>Dimensions without Door (W×D×H):</strong> 1220×845×2170 mm</li>
                <li><strong>Minimum Required Room Height:</strong> 2350 mm</li>
                <li><strong>Minimum Required Door Width:</strong> 940 mm</li>
                <li><strong>Smoke Stick Length:</strong> 800 mm</li>
                <li><strong>Smoke Trolley Outer Dimensions (W×D×H):</strong> 830×700×1360 mm</li>
                <li><strong>Load Capacity:</strong> 45–150 kg</li>
              </ul>
            </div>
          </div>
        </div>
        <p><em>Curious? Contact us for personalized consulting!</em></p>
      </div>
    </div>
  <?php } ?>

  <?php
  // Product 2: Model 851
  if ($selected_product === null || $selected_product === 'modell-851') {
    $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_modell851';
  ?>
    <div class="product-container" data-product-id="modell-851">
      <div class="product-image">
        <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="../Product/Bastra/Modell851.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Wood Chips"></div>
            <div class="swiper-slide"><img src="../Product/Bastra/Profi500.jpg" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Control Unit"></div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
        <div class="thumbnail-container">
          <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/Bastra/Modell851.png" alt="Wood Chips"></div>
          <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/Bastra/Profi500.jpg" alt="Control Unit"></div>
        </div>
      </div>
      <div class="product-info">
        <h2>Model 851 – Compact & Flavorful with Wood Chips</h2>
        <p>Experience the perfect combination of efficiency and flavor: The Model 851 is an electrically heated smoking system with a cleverly integrated wood chip smoke generator in the door. Be inspired by this space-saving solution!</p>
        <h4>What Makes the Wood Chip Smoke Generator Special:</h4>
        <ul>
          <li><strong>Space-Saving:</strong> Ideal for any production setup.</li>
          <li><strong>Simple:</strong> Easy system for quick deployment.</li>
          <li><strong>Flavorful:</strong> Intense smoke aroma through the smoldering of wood chips.</li>
        </ul>
        <h4>Your Standard Equipment at a Glance:</h4>
        <p>These features ensure a smooth start:</p>
        <ul>
          <li>Fire protection sensor in the smoke generator door for maximum safety.</li>
          <li>Cleaning sensor for easy monitoring.</li>
          <li>Compressed air foam cleaning & humidification (for on-site compressor).</li>
          <li>Two-stage air circulation for perfect results.</li>
        </ul>
        <h4>Make Your System Unique:</h4>
        <p>Customize the Model 851 to your needs with these optional extras:</p>
        <ul>
          <li><strong>More Visibility:</strong> System door with viewing window or illuminated glass door.</li>
          <li><strong>Optimal Humidification:</strong> Low-pressure steam (for on-site steam generator).</li>
          <li><strong>Maturing Package:</strong> Slow air circulation stage, frequency converter, cooling evaporator & precise humidity control.</li>
          <li><strong>Flexibility:</strong> Combinable with sawdust, wood chips, or friction smoke – integrated or standalone.</li>
          <li><strong>Freshness:</strong> Catalyst for clean exhaust air.</li>
          <li><strong>Convenience:</strong> Automatic door release & efficient cooling shower.</li>
          <li><strong>Adaptable:</strong> Foldable loading ramp for uneven floors.</li>
          <li><strong>Smart:</strong> Touch panel (7" or 10.5") with ProfiNet software.</li>
        </ul>
        <h4>Technical Data:</h4>
        <div class="accordion">
          <div class="accordion-item">
            <button class="accordion-header">Technical Data</button>
            <div class="accordion-content">
              <ul>
                <li><strong>Heating Type:</strong> Electric</li>
                <li><strong>Smoke Generator:</strong> Wood Chip Smoke Generator in the Door</li>
                <li><strong>Dimensions without Door (W×D×H):</strong> 1220×845×2170 mm</li>
                <li><strong>Minimum Required Room Height:</strong> 2350 mm</li>
                <li><strong>Minimum Required Door Width:</strong> 940 mm</li>
                <li><strong>Smoke Stick Length:</strong> 800 mm</li>
                <li><strong>Smoke Trolley Outer Dimensions (W×D×H):</strong> 830×700×1360 mm</li>
                <li><strong>Load Capacity:</strong> 45–150 kg</li>
                <li><strong>Wood Chip Size:</strong> 4.0–12.0 mm</li>
              </ul>
            </div>
          </div>
        </div>
        <p><em>Interested? Let’s find your perfect solution together!</em></p>
      </div>
    </div>
  <?php } ?>

  <?php
  // Product 3: Model 1201
  if ($selected_product === null || $selected_product === 'modell-1201') {
    $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_modell1201';
  ?>
    <div class="product-container" data-product-id="modell-1201">
      <div class="product-image">
        <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="../Product/Bastra/Modell1201.PNG" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Friction Smoke"></div>
            <div class="swiper-slide"><img src="../Product/Bastra/Profi700.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Control Unit"></div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
        <div class="thumbnail-container">
          <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/Bastra/Modell1201.png" alt="Friction Smoke"></div>
          <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/Bastra/Profi700.png" alt="Control Unit"></div>
        </div>
      </div>
      <div class="product-info">
        <h2>Bastramat Model 1201 RR – Efficient Smoking with Friction Smoke</h2>
        <p>Experience maximum efficiency and quality: The Bastramat Model 1201 RR is a versatile smoking system with an integrated friction smoke generator in the door. This solution offers flexibility for various heating types and delivers outstanding results!</p>
        <h4>Why the Friction Smoke Generator Impresses:</h4>
        <ul>
          <li><strong>Versatile:</strong> Compatible with electric, high-pressure steam, gas, or oil heating.</li>
          <li><strong>Easy to Use:</strong> Friction smoke system for quick and precise smoke development.</li>
          <li><strong>Quality:</strong> Perfect smoke aroma through the use of friction smoke.</li>
        </ul>
        <h4>Your Standard Equipment at a Glance:</h4>
        <p>These features ensure a reliable start:</p>
        <ul>
          <li>Fire protection system for maximum safety.</li>
          <li>Cleaning sensor for easy maintenance.</li>
          <li>Compressed air foam cleaning & humidification (for on-site compressor).</li>
          <li>Two-stage air circulation for optimal results.</li>
        </ul>
        <h4>Customize Your System:</h4>
        <p>Make the Model 1201 RR your tailored solution with these options:</p>
        <ul>
          <li><strong>Better Visibility:</strong> System door with viewing window or illuminated glass door.</li>
          <li><strong>Precise Humidification:</strong> Low-pressure steam (for on-site steam generator).</li>
          <li><strong>Maturing Package:</strong> Slow air circulation stage, frequency converter, cooling evaporator & precise humidity control.</li>
          <li><strong>Flexibility:</strong> Combinable with various smoke sources – integrated or separate.</li>
          <li><strong>Freshness:</strong> Catalyst for clean exhaust air.</li>
          <li><strong>Convenience:</strong> Automatic door release & efficient cooling shower.</li>
          <li><strong>Adaptable:</strong> Foldable loading ramp for uneven floors.</li>
          <li><strong>Smart:</strong> Touch panel (7" or 10.5") with ProfiNet software.</li>
        </ul>
        <h4>Technical Data:</h4>
        <div class="accordion">
          <div class="accordion-item">
            <button class="accordion-header">Technical Data</button>
            <div class="accordion-content">
              <ul>
                <li><strong>Heating Type:</strong> Electric, High-Pressure Steam, Gas, Oil</li>
                <li><strong>Smoke Generator:</strong> Friction Smoke in the Door</li>
                <li><strong>Dimensions without Door (W×D×H) – Electric Heating:</strong> 1395×990×2525 mm</li>
                <li><strong>Dimensions without Door (W×D×H) – Gas/Oil Heating:</strong> 1395×990×2580 mm</li>
                <li><strong>Minimum Required Room Height:</strong> 2630 mm</li>
                <li><strong>Minimum Required Door Width:</strong> 1120 mm</li>
                <li><strong>Smoke Stick Length:</strong> 900 mm</li>
                <li><strong>Smoke Trolley Outer Dimensions (W×D×H):</strong> 980×800×1500 mm</li>
                <li><strong>Load Capacity:</strong> 60–220 kg</li>
                <li><strong>Beam Dimensions W×D:</strong> 80×80 mm</li>
              </ul>
            </div>
          </div>
        </div>
        <p><em>Interested? Contact us for personalized consulting!</em></p>
      </div>
    </div>
  <?php } ?>

  <?php
  // Product 4: Model 1501
  if ($selected_product === null || $selected_product === 'modell-1501') {
    $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_modell1501';
  ?>
    <div class="product-container" data-product-id="modell-1501">
      <div class="product-image">
        <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="../Product/Bastra/Modell1501.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Sawdust"></div>
            <div class="swiper-slide"><img src="../Product/Bastra/Tür GS.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Door"></div>
            <div class="swiper-slide"><img src="../Product/Bastra/Profi700.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Control Unit"></div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
        <div class="thumbnail-container">
          <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/Bastra/Modell1501.png" alt="Sawdust"></div>
          <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/Bastra/Tür GS.png" alt="Door"></div>
          <div class="thumbnail" onclick="changeSlide(2, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/Bastra/Profi700.png" alt="Control Unit"></div>
        </div>
      </div>
      <div class="product-info">
        <h2>Bastramat Model 1501 UF/GS – Precise Smoking with Sawdust</h2>
        <p>Experience professional smoking at the highest level: The Bastramat Model 1501 UF/GS is a versatile smoking system with an integrated sawdust smoke generator in the door. This solution offers flexibility and top-notch results for various heating types!</p>
        <h4>Why the Sawdust Smoke Generator Impresses:</h4>
        <ul>
          <li><strong>Versatile:</strong> Compatible with electric, low-pressure steam, gas, or oil heating.</li>
          <li><strong>Easy to Use:</strong> Sawdust system for precise smoke development.</li>
          <li><strong>Quality:</strong> Intense smoke aroma through optimal use of sawdust.</li>
        </ul>
        <h4>Your Standard Equipment at a Glance:</h4>
        <p>These features ensure a reliable start:</p>
        <ul>
          <li>Fire protection system for maximum safety.</li>
          <li>Cleaning sensor for easy maintenance.</li>
          <li>Compressed air foam cleaning & humidification (for on-site compressor).</li>
          <li>Two-stage air circulation for optimal results.</li>
        </ul>
        <h4>Customize Your System:</h4>
        <p>Make the Model 1501 UF/GS your tailored solution with these options:</p>
        <ul>
          <li><strong>Better Visibility:</strong> System door with viewing window or illuminated glass door.</li>
          <li><strong>Precise Humidification:</strong> Low-pressure steam (for on-site steam generator).</li>
          <li><strong>Maturing Package:</strong> Slow air circulation stage, frequency converter, cooling evaporator & precise humidity control.</li>
          <li><strong>Flexibility:</strong> Combinable with various smoke sources – integrated or separate.</li>
          <li><strong>Freshness:</strong> Catalyst for clean exhaust air.</li>
          <li><strong>Convenience:</strong> Automatic door release & efficient cooling shower.</li>
          <li><strong>Adaptable:</strong> Foldable loading ramp for uneven floors.</li>
          <li><strong>Smart:</strong> Touch panel (7" or 10.5") with ProfiNet software.</li>
        </ul>
        <h4>Technical Data:</h4>
        <div class="accordion">
          <div class="accordion-item">
            <button class="accordion-header">Technical Data</button>
            <div class="accordion-content">
              <ul>
                <li><strong>Heating Type:</strong> Electric, Low-Pressure Steam, Gas, Oil</li>
                <li><strong>Smoke Generator:</strong> Sawdust Smoke Generator in the Door</li>
                <li><strong>Dimensions without Door (W×D×H) – Electric Heating:</strong> 1500×1140×2820 mm</li>
                <li><strong>Dimensions without Door (W×D×H) – Gas/Oil Heating:</strong> 1500×1140×2890 mm</li>
                <li><strong>Minimum Required Room Height:</strong> 3500 mm</li>
                <li><strong>Minimum Required Door Width:</strong> 1200 mm</li>
                <li><strong>Smoke Stick Length:</strong> 900/1000 mm</li>
                <li><strong>Smoke Trolley Outer Dimensions (W×D×H):</strong> 930×840×1690 mm or 1030×840×1690 mm</li>
                <li><strong>Load Capacity:</strong> 80–300 kg</li>
                <li><strong>Sawdust Size:</strong> 0.1–3 mm</li>
              </ul>
            </div>
          </div>
        </div>
        <p><em>Interested? Contact us for a tailored offer!</em></p>
      </div>
    </div>
  <?php } ?>

  <?php
  // Product 5: Model 2000
  if ($selected_product === null || $selected_product === 'modell-2000') {
    $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_modell2000';
  ?>
    <div class="product-container" data-product-id="modell-2000">
      <div class="product-image">
        <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="../Product/Bastra/Modell2000.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Wood Chips"></div>
            <div class="swiper-slide"><img src="../Product/Bastra/Profi700.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Control Unit"></div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
        <div class="thumbnail-container">
          <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/Bastra/Modell2000.png" alt="Wood Chips"></div>
          <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/Bastra/Profi700.png" alt="Control Unit"></div>
        </div>
      </div>
      <div class="product-info">
        <h2>Bastramat Model 2000 TF – Powerful Smoking with Wood Chips</h2>
        <p>Experience professional smoking technology at the highest level: The Bastramat Model 2000 TF is a powerful smoking system with a standalone wood chip smoke generator, distinguished by flexibility and top-notch results. Ideal for large-scale productions!</p>
        <h4>Why the Wood Chip Smoke Generator Impresses:</h4>
        <ul>
          <li><strong>Powerful:</strong> Suitable for large load capacities of 110–400 kg.</li>
          <li><strong>Versatile:</strong> Compatible with electric, low-pressure steam, high-pressure steam, gas, or oil heating.</li>
          <li><strong>Quality:</strong> Intense smoke aroma through the use of wood chips.</li>
        </ul>
        <h4>Your Standard Equipment at a Glance:</h4>
        <p>These features ensure a reliable start:</p>
        <ul>
          <li>Fire protection system for maximum safety.</li>
          <li>Cleaning sensor for easy maintenance.</li>
          <li>Compressed air foam cleaning & humidification (for on-site compressor).</li>
          <li>Two-stage air circulation for optimal results.</li>
        </ul>
        <h4>Customize Your System:</h4>
        <p>Make the Model 2000 TF your tailored solution with these options:</p>
        <ul>
          <li><strong>Better Visibility:</strong> System door with viewing window or illuminated glass door.</li>
          <li><strong>Precise Humidification:</strong> Low-pressure steam (for on-site steam generator).</li>
          <li><strong>Maturing Package:</strong> Slow air circulation stage, frequency converter, cooling evaporator & precise humidity control.</li>
          <li><strong>Flexibility:</strong> Combinable with various smoke sources – integrated or separate.</li>
          <li><strong>Freshness:</strong> Catalyst for clean exhaust air.</li>
          <li><strong>Convenience:</strong> Automatic door release & efficient cooling shower.</li>
          <li><strong>Adaptable:</strong> Foldable loading ramp for uneven floors.</li>
          <li><strong>Smart:</strong> Touch panel (7" or 10.5") with ProfiNet software.</li>
        </ul>
        <h4>Technical Data:</h4>
        <div class="accordion">
          <div class="accordion-item">
            <button class="accordion-header">Technical Data</button>
            <div class="accordion-content">
              <ul>
                <li><strong>Heating Type:</strong> Electric, Low-Pressure Steam, High-Pressure Steam, Gas, Oil</li>
                <li><strong>Smoke Generator:</strong> Standalone Wood Chip Smoke Generator</li>
                <li><strong>Dimensions without Door (W×D×H) – Electric Heating:</strong> 1500×1230×3455 mm</li>
                <li><strong>Dimensions without Door (W×D×H) – Gas/Oil Heating:</strong> 1500×1230×3155 mm</li>
                <li><strong>Dimensions without Door (W×D×H) – High/Low-Pressure Steam:</strong> 1500×1230×3245 mm</li>
                <li><strong>Minimum Required Room Height:</strong> 4000 mm</li>
                <li><strong>Minimum Required Door Width:</strong> 1300 mm</li>
                <li><strong>Smoke Stick Length:</strong> 1000 mm</li>
                <li><strong>Smoke Trolley Outer Dimensions (W×D×H):</strong> 1030×1000×1900 mm</li>
                <li><strong>Load Capacity:</strong> 110–400 kg</li>
                <li><strong>Wood Chip Size:</strong> 4.0–12.0 mm</li>
              </ul>
            </div>
          </div>
        </div>
        <p><em>Interested? Contact us for a tailored offer!</em></p>
      </div>
    </div>
  <?php } ?>

  <?php
  // Product 6: Smart 500
  if ($selected_product === null || $selected_product === 'smart-500') {
    $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_smart500';
  ?>
    <div class="product-container" data-product-id="smart-500">
      <div class="product-image">
        <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="../Product/Bastra/SmartBullauge.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Smart 500"></div>
            <div class="swiper-slide"><img src="../Product/Bastra/SmartBlack.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Smart 500"></div>
            <div class="swiper-slide"><img src="../Product/Bastra/Smart.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Smart 500"></div>
            <div class="swiper-slide"><img src="../Product/Bastra/Profi500.jpg" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Control Unit"></div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
        <div class="thumbnail-container">
          <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/Bastra/SmartBullauge.png" alt="Smart 500"></div>
          <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/Bastra/SmartBlack.png" alt="Smart 500"></div>
          <div class="thumbnail" onclick="changeSlide(2, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/Bastra/Smart.png" alt="Smart 500"></div>
          <div class="thumbnail" onclick="changeSlide(3, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/Bastra/Profi500.jpg" alt="Control Unit"></div>
        </div>
      </div>
      <div class="product-info">
        <h2>Smart 500 – Your All-Rounder for Freshness & Enjoyment</h2>
        <p>Bring flavor and versatility directly to your counter! The Smart 500 by BASTRA is the perfect universal system for classic smoked goods and more – whether cold or hot smoking, heating, drying, cooking, or roasting. With intuitive operation and patented smoke condensate technology, smoking has never been easier. Get inspired!</p>
        <h4>Why the Smart 500 Excites:</h4>
        <ul>
          <li><strong>Versatile:</strong> Smoking, roasting, drying – all in one device.</li>
          <li><strong>Intuitive:</strong> Easy control for quick results.</li>
          <li><strong>Innovative:</strong> Patented smoke condensate instead of traditional smoke generation.</li>
          <li><strong>Freshness:</strong> Perfect for your counter – ready to enjoy.</li>
        </ul>
        <h4>Standard Equipment:</h4>
        <ul>
          <li>BASTRA Smoke Condensate System</li>
          <li>Temperature Range up to 180°C</li>
          <li>Fully Automatic Compressed Air Foam Cleaning for Connection to On-Site Compressor</li>
          <li>Integrated Rack with 8 Shelves for Smoke Sticks with a Length of 570 mm as well as for GN 2/1 and GN 1/1 Containers or Racks</li>
          <li>Viewing Window</li>
          <li>Interior Lighting</li>
          <li>Built-In Cooling Shower</li>
          <li>BASTRAprof500 Touch Panel Control Built into the Top Surface</li>
        </ul>
        <h4>Optional Equipment:</h4>
        <ul>
          <li>Glass Door (Safety Glass)</li>
          <li>Cooling Evaporator for Connection to On-Site Cooling System</li>
          <li>Temperature Range up to 230°C with Heat-Resistant Glass Door</li>
          <li>Third Air Circulation Stage for Maturing</li>
          <li>Custom Paint, Customer Logo</li>
        </ul>
        <h4>Technical Data:</h4>
        <table>
          <thead>
            <tr>
              <th>Feature</th>
              <th>Value</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Heating Type</td>
              <td>Electric</td>
            </tr>
            <tr>
              <td>Smoke Generator</td>
              <td>Clean Smoke</td>
            </tr>
            <tr>
              <td>Dimensions (W×D×H)</td>
              <td>980×1020×2000 mm</td>
            </tr>
            <tr>
              <td>Minimum Required Room Height</td>
              <td>2020 mm</td>
            </tr>
            <tr>
              <td>Chamber Capacity</td>
              <td>430 Liters</td>
            </tr>
            <tr>
              <td>Minimum Required Door Width</td>
              <td>1100 mm</td>
            </tr>
            <tr>
              <td>Smoke Stick Length</td>
              <td>570 mm</td>
            </tr>
            <tr>
              <td>Load Capacity</td>
              <td>35–110 kg</td>
            </tr>
            <tr>
              <td>Heating Power</td>
              <td>15 kW</td>
            </tr>
          </tbody>
        </table>
        <p><em>Ready for the next step in your kitchen? Contact us and explore the possibilities!</em></p>
      </div>
    </div>
  <?php } ?>

  <?php
  // Product 7: Climate Maturing Smoking System
  if ($selected_product === null || $selected_product === 'klimareife') {
    $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_klimareife';
  ?>
    <div class="product-container" data-product-id="klimareife">
      <div class="product-image">
        <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="../Product/Bastra/Klimareife.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Climate Maturing"></div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
        <div class="thumbnail-container">
          <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/Bastra/Klimareife.png" alt="Climate Maturing"></div>
        </div>
      </div>
      <div class="product-info">
        <h2>Climate Maturing Smoking System – Flavorful Maturing, Perfect Smoking</h2>
        <p>Give your raw and long-life products an unparalleled flavor! BASTRA’s Climate Maturing Smoking Systems are your solution for precise maturing, drying, smoking, and post-maturing. Thanks to state-of-the-art technology, they create an ideal climate for a gentle maturing process – with plenty of space. Discover how your products can reach new heights!</p>
        <h4>What Makes This System Unbeatable:</h4>
        <ul>
          <li><strong>Precise Climate Control:</strong> Perfect conditions for flavorful results.</li>
          <li><strong>Gentle:</strong> Careful maturing process for the highest quality.</li>
          <li><strong>Space-Saving:</strong> Plenty of room for your products – flexible and efficient.</li>
          <li><strong>Versatile:</strong> Maturing, smoking, or post-maturing – all in one system.</li>
        </ul>
        <h4>Enormous Capacity for Your Needs:</h4>
        <p>Adapt the system to your production:</p>
        <ul>
          <li><strong>Maturing & Smoking:</strong> Up to 36 trolleys at +10°C to +30°C (3-row setup).</li>
          <li><strong>Post-Maturing:</strong> Up to 120 trolleys at +10°C to +20°C (8-row setup).</li>
        </ul>
        <p><em>Ready for top-notch results? Contact us for your tailored solution!</em></p>
      </div>
    </div>
  <?php } ?>

  <?php if (!$is_included) { ?>
    <script>
      // Definiere changeSlide global, damit sie immer verfügbar ist
      function changeSlide(index, swiperClass) {
        const swiperElement = document.querySelector(`.${swiperClass}`);
        if (swiperElement && swiperElement.swiper) {
          console.log(`Wechsle zu Slide-Index: ${index} für Swiper-Klasse: ${swiperClass}`);
          swiperElement.swiper.slideTo(index, 300, true);
          console.log(`Aktueller Slide-Index nach Wechsel: ${swiperElement.swiper.activeIndex}`);
        } else {
          console.error(`Swiper-Instanz für Klasse nicht gefunden: ${swiperClass}`);
        }
      }

      document.addEventListener("DOMContentLoaded", function() {
        // Initialisiere alle Swiper-Instanzen
        document.querySelectorAll('.swiper').forEach(swiperElement => {
          const swiperClass = swiperElement.classList[1];
          console.log(`Initialisiere Swiper für Klasse: ${swiperClass}`);
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

        // Akkordeon-Funktionalität
        document.querySelectorAll('.accordion-header').forEach(button => {
          button.addEventListener('click', () => {
            const content = button.nextElementSibling;
            const isOpen = content.style.display === 'block';

            // Schließe alle anderen offenen Akkordeon-Elemente
            document.querySelectorAll('.accordion-content').forEach(item => {
              item.style.display = 'none';
              item.previousElementSibling.classList.remove('active');
            });

            // Öffne oder schließe das aktuelle Akkordeon-Element
            if (!isOpen) {
              content.style.display = 'block';
              button.classList.add('active');
            }
          });
        });

        // Overlay für Vollbildansicht
        document.addEventListener("click", function(event) {
          if (event.target.classList.contains("fullscreen-toggle")) {
            const overlay = document.querySelector("#image-overlay");
            if (!overlay) {
              console.error("Bild-Overlay-Element nicht gefunden");
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
          console.error("Bild-Overlay-Element nicht gefunden");
        }
      });
    </script>
    <?php include 'footer.php'; ?>
  </body>

  </html>
<?php } ?>