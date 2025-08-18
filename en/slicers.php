<?php
// slicers.php

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
        <title>Buy Graef Slicers | Service & Consulting</title>
        <meta name="description" content="Discover high-quality Graef slicers – with service, repair, and consulting. Fully automatic & manual slicers for butcher shops and gastronomy." />
        <meta name="keywords" content="buy slicers, Graef slicer, offer, fully automatic slicer, ergonomic work, manual slicer, butcher shop technology, gastronomy slicer, service, technical consulting" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
       
    </head>

    <body>
        <?php include 'header.php'; ?>
        <!-- Introduction -->
        <div class="leistungen">
            <h2>Your Perfect Graef Slicer</h2>
            <p>Looking for a reliable slicer for your counter or production? With Graef, the specialist for innovative slicing technology, we offer high-quality slicers – from manual machines to fully automatic models. Benefit from ergonomic design, high efficiency, and our comprehensive service, including repair and consulting.</p>
            <p>Thanks to the CERA-3 coating, our machines excel with excellent gliding properties and easy cleaning. Whether for butcher shops, gastronomy, or catering – find the ideal solution for your needs.
                <br><br>
                Test our fully automatic slicer as a demo machine and see for yourself!
            </p>
        </div>
        <div id="image-overlay">
            <img src="" alt="Full-screen view of slicer" />
            <video controls style="display: none;"></video>
        </div>
    <?php } ?>

    <?php
    // Product 1: Master 2720
    if ($selected_product === null || $selected_product === 'master-2720') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_master2720';
    ?>
        <div class="product-container" data-product-id="master-2720">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="../Product/GRAEF/Master/2720/1.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Graef Master 2720 Slicer">
                        </div>
                        <div class="swiper-slide">
                            <img src="../Product/GRAEF/Master/2720/2.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Graef Master 2720 Slicer">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="../Product/GRAEF/Master/2720/1.png" alt="Master 2720 Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="../Product/GRAEF/Master/2720/2.png" alt="2720 Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>Graef Master 2720 – Compact & Powerful</h2>
                <p>The entry into the MASTER Line. Due to its compactness and quality, it’s the solution for small spaces. Also ideal as a counter machine. The Graef Master 2720 is the perfect slicer for counter use. With a maintenance-free motor and CERA-3 coating, it guarantees precise cutting and easy cleaning – ideal for butcher shops, gastronomy, and catering.</p>
                <h4>Your Benefits:</h4>
                <ul>
                    <li>Maintenance-free motor with air cooling system for continuous use</li>
                    <li>Ergonomic design for fatigue-free work</li>
                    <li>High-performance blade (Ø 270 mm) with CERA-3 coating</li>
                    <li>Slice thickness infinitely adjustable (0–15 mm)</li>
                    <li>Smooth-running carriage – internal guide, 2-stage blade sharpener – removable, relaxed operation due to optimal gliding properties – Cera 3, low-profile design</li>
                </ul>
                <h4>Practical Features:</h4>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Features</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Piezo switch technology – waterproof, safe, and durable</li>
                                <li>Smooth-running carriage with remnant holder</li>
                                <li>Quick cleaning due to removable parts – no drying or sticking of cut material, Cera 3, smooth, fully accessible surfaces, free-running blade, removable blade cover plate, surrounding rubber frame for a clean finish on the base, widely tiltable carriage – 45°</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <h4>Technical Specifications:</h4>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Technical Specifications</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Motor Power:</strong> 300 Watt / 230V~ AC or 400 V three-phase</li>
                                <li><strong>Blade Diameter:</strong> 270 mm</li>
                                <li><strong>Slice Thickness:</strong> 0–15 mm</li>
                                <li><strong>Cutting Length:</strong> 230 mm</li>
                                <li><strong>Carriage Size:</strong> 230 x 250 mm</li>
                                <li><strong>External Dimensions:</strong> 540 x 510 x 490 mm</li>
                                <li><strong>Workspace Dimensions:</strong> 545 x 520 x 490 mm</li>
                                <li><strong>Base Area:</strong> 470 x 370 mm</li>
                                <li><strong>Total Vibration Values:</strong> 2.5 m/s²</li>
                                <li><strong>Noise Emission Level:</strong>
                                    < 69 dBA</li>
                                <li><strong>Blade Speed:</strong> 190 rpm</li>
                                <li><strong>Weight:</strong> 25.2 kg</li>
                                <li><strong>Operating Time:</strong> Continuous operation</li>
                                <li><strong>Investment Security:</strong> 2-year warranty, long-term and cost-effective spare parts supply, service-friendly design</li>
                                <li><strong>Accessories:</strong> 2-stage blade sharpener, special oil</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p><em>Interested? Get advised now!</em></p>
            </div>
        </div>
    <?php } ?>

    <?php
    // Product 2: Master 3020
    if ($selected_product === null || $selected_product === 'master-3020') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_master3020';
    ?>
        <div class="product-container" data-product-id="master-3020">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="../Product/graef/master/3020.jpg" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Graef Master 3020 Slicer">
                        </div>
                        <div class="swiper-slide">
                            <img src="../Product/graef/master/Bedienfeld.jpg" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Master 3020 Control Panel">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper hakk-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="../Product/graef/master/3020.jpg" alt="Master 3020 Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="../Product/graef/master/Bedienfeld.jpg" alt="Control Panel Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>Graef Master 3020 – The All-Rounder</h2>
                <p>The Graef Master 3020 is a versatile slicer with a Ø 300 mm blade and precise slice thickness (0–24 mm), ideal for continuous use in butcher shops or gastronomy. It combines ergonomics with high performance and easy cleaning. Available in multiple variants: standard carriage, thin-slice carriage (TS), salmon carriage (SC), Vario Slice (VS), and with integrated scale (W).</p>
                <h4>Your Benefits:</h4>
                <ul>
                    <li>Maintenance-free motor with air cooling system for continuous use</li>
                    <li>CERA-3 coating for clean cutting – smooth, fully accessible surfaces, no sticking of cut material</li>
                    <li>Slice thickness up to 24 mm – infinitely adjustable (VS: two functions for precise cutting)</li>
                    <li>Variants for specific requirements: thin-slice (TS) for thin slices, salmon carriage (SC) for fish, Vario Slice (VS) for efficient work, scale (W) for precise weighing</li>
                </ul>
                <h4>Practical Features of Each Variant:</h4>
                <div class="accordion">
                    <!-- Standard Carriage -->
                    <div class="accordion-item">
                        <button class="accordion-header">Standard Carriage</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Ergonomic carriage with remnant holder – large and smooth-running</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Thin-Slice Carriage (TS) -->
                    <div class="accordion-item">
                        <button class="accordion-header">Thin-Slice Carriage (TS)</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Ergonomic carriage with remnant holder – adjustable from 30° to 50° for ultra-thin slices</li>
                                <li>Accessible surfaces for quick cleaning – easy cutting of multiple sausages in one stroke</li>
                                <li>Additional function: Ideal for decorative counter displays</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Salmon Carriage (SC) -->
                    <div class="accordion-item">
                        <button class="accordion-header">Salmon Carriage (SC)</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Ergonomic carriage with remnant holder – ideal for fish fillets at -8 °C to -10 °C</li>
                                <li>Accessible surfaces for quick cleaning – removable for cleaning</li>
                                <li>Additional function: For easy fish filleting</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Vario Slice (VS) -->
                    <div class="accordion-item">
                        <button class="accordion-header">Vario Slice (VS)</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Ergonomic carriage with remnant holder – V-position for efficient cutting</li>
                                <li>Accessible surfaces for quick cleaning – prevents tendon strain</li>
                                <li>Additional function: Two cutting functions (V-position for relaxed operation)</li>
                            </ul>
                        </div>
                    </div>
                    <!-- With Scale (W) -->
                    <div class="accordion-item">
                        <button class="accordion-header">With Integrated Scale (W)</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Ergonomic carriage with remnant holder – ergonomic operation with scale</li>
                                <li>Accessible surfaces for quick cleaning – 100% tare, not calibrated</li>
                                <li>Additional function: Integrated scale (weighing range 0–5,000 g, additional weight via weight control)</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <h4>Technical Specifications of Each Variant:</h4>
                <div class="accordion">
                    <!-- Standard Carriage -->
                    <div class="accordion-item">
                        <button class="accordion-header">Standard Carriage</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Cutting Size (L x W):</strong> 260 x 195 mm</li>
                                <li><strong>Carriage Size (L x W):</strong> 260 x 300 mm</li>
                                <li><strong>Blade Diameter:</strong> 300 mm</li>
                                <li><strong>Slice Thickness:</strong> 0–24 mm</li>
                                <li><strong>Motor Power:</strong> 500 Watt / 230 V~ or 400 V</li>
                                <li><strong>Blade Speed:</strong> 200 rpm</li>
                                <li><strong>External Dimensions (L x W x H):</strong> 600 x 570 x 420 mm</li>
                                <li><strong>Workspace Dimensions (L x W x H):</strong> 680 x 690 x 570 mm</li>
                                <li><strong>Base Area:</strong> 540 x 440 mm</li>
                                <li><strong>Weight:</strong> 37.1 kg</li>
                                <li><strong>Noise Emission Level:</strong>
                                    < 69 dBA</li>
                                <li><strong>Total Vibration Values:</strong> 2.5 m/s²</li>
                                <li><strong>Accessories:</strong> 2-stage blade sharpener, special oil</li>
                                <li><strong>Article No.:</strong> master3020</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Thin-Slice Carriage (TS) -->
                    <div class="accordion-item">
                        <button class="accordion-header">Thin-Slice Carriage (TS)</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Cutting Length:</strong> 260 mm</li>
                                <li><strong>Carriage Size (L x W):</strong> 260 x 300 mm</li>
                                <li><strong>Blade Diameter:</strong> 300 mm</li>
                                <li><strong>Slice Thickness:</strong> 0–24 mm</li>
                                <li><strong>Motor Power:</strong> 500 Watt / 230 V~ or 400 V</li>
                                <li><strong>Blade Speed:</strong> 200 rpm</li>
                                <li><strong>External Dimensions (L x W x H):</strong> 600 x 570 x 420 mm</li>
                                <li><strong>Workspace Dimensions (L x W x H):</strong> 680 x 690 x 570 mm</li>
                                <li><strong>Base Area:</strong> 540 x 440 mm</li>
                                <li><strong>Weight:</strong> 37.1 kg</li>
                                <li><strong>Noise Emission Level:</strong>
                                    < 69 dBA</li>
                                <li><strong>Total Vibration Values:</strong> 2.5 m/s²</li>
                                <li><strong>Accessories:</strong> 2-stage blade sharpener</li>
                                <li><strong>Article No.:</strong> master3020ts</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Salmon Carriage (SC) -->
                    <div class="accordion-item">
                        <button class="accordion-header">Salmon Carriage (SC)</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Cutting Material Size:</strong> 225 x 40 mm</li>
                                <li><strong>Carriage Size (L x W):</strong> 260 x 300 mm</li>
                                <li><strong>Blade Diameter:</strong> 300 mm</li>
                                <li><strong>Slice Thickness:</strong> 0–24 mm</li>
                                <li><strong>Motor Power:</strong> 500 Watt / 230 V~ or 400 V</li>
                                <li><strong>Blade Speed:</strong> 230 rpm</li>
                                <li><strong>External Dimensions (L x W x H):</strong> 600 x 570 x 420 mm</li>
                                <li><strong>Workspace Dimensions (L x W x H):</strong> 680 x 690 x 570 mm</li>
                                <li><strong>Base Area:</strong> 540 x 440 mm</li>
                                <li><strong>Weight:</strong> 37.1 kg</li>
                                <li><strong>Noise Emission Level:</strong>
                                    < 69 dBA</li>
                                <li><strong>Total Vibration Values:</strong> 2.5 m/s²</li>
                                <li><strong>Accessories:</strong> 2-stage blade sharpener</li>
                                <li><strong>Article No.:</strong> master3020sc</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Vario Slice (VS) -->
                    <div class="accordion-item">
                        <button class="accordion-header">Vario Slice (VS)</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Cutting Size (L x W):</strong> 260 x 195 mm</li>
                                <li><strong>Carriage Size (L x W):</strong> 260 x 300 mm</li>
                                <li><strong>Blade Diameter:</strong> 300 mm</li>
                                <li><strong>Slice Thickness:</strong> 0–24 mm</li>
                                <li><strong>Motor Power:</strong> 500 Watt / 230 V~ or 400 V</li>
                                <li><strong>Blade Speed:</strong> 230 rpm</li>
                                <li><strong>External Dimensions (L x W x H):</strong> 600 x 600 x 420 mm</li>
                                <li><strong>Workspace Dimensions (L x W x H):</strong> 720 x 650 x 700 mm</li>
                                <li><strong>Base Area:</strong> 540 x 440 mm</li>
                                <li><strong>Weight:</strong> 38.5 kg</li>
                                <li><strong>Noise Emission Level:</strong>
                                    < 69 dBA</li>
                                <li><strong>Total Vibration Values:</strong> 2.5 m/s²</li>
                                <li><strong>Accessories:</strong> 2-stage blade sharpener</li>
                                <li><strong>Article No.:</strong> master3020vs</li>
                            </ul>
                        </div>
                    </div>
                    <!-- With Scale (W) -->
                    <div class="accordion-item">
                        <button class="accordion-header">With Integrated Scale (W)</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Cutting Length:</strong> 260 mm</li>
                                <li><strong>Carriage Size (L x W):</strong> 260 x 300 mm</li>
                                <li><strong>Blade Diameter:</strong> 300 mm</li>
                                <li><strong>Slice Thickness:</strong> 0–24 mm</li>
                                <li><strong>Motor Power:</strong> 500 Watt / 230 V~ or 400 V</li>
                                <li><strong>Blade Speed:</strong> 230 rpm</li>
                                <li><strong>External Dimensions (L x W x H):</strong> 600 x 570 x 420 mm</li>
                                <li><strong>Workspace Dimensions (L x W x H):</strong> 680 x 720 x 570 mm</li>
                                <li><strong>Base Area:</strong> 540 x 440 mm</li>
                                <li><strong>Weight:</strong> 37.1 kg</li>
                                <li><strong>Noise Emission Level:</strong>
                                    < 69 dBA</li>
                                <li><strong>Total Vibration Values:</strong> 2.5 m/s²</li>
                                <li><strong>Accessories:</strong> 2-stage blade sharpener</li>
                                <li><strong>Article No.:</strong> master3020w</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p><em>Ready for efficiency? Contact us!</em></p>
            </div>
        </div>
    <?php } ?>

    <?php
    // Product 3: Master 3310W
    if ($selected_product === null || $selected_product === 'master-3310w') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_master3310w';
    ?>
        <div class="product-container" data-product-id="master-3310w">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="../Product/graef/master/3310.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Graef Master 3310W with Scale">
                        </div>
                        <div class="swiper-slide">
                            <img src="../Product/graef/master/3310W-B.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Master 3310W Side View">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="../Product/graef/master/3310.png" alt="Master 3310W Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="../Product/graef/master/3310W-B.png" alt="Master with Scale Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>Graef Master 3310W – With Integrated Scale</h2>
                <p>The Master 3310W optimizes your workflow with an integrated scale (0–5000 g). Perfect for precise cutting and weighing in one step – ideal for butcher shops and production. Available in multiple variants: standard carriage, double carriage (DC), clamping arm carriage (CA), and version with scale (W).</p>
                <h4>Your Benefits:</h4>
                <ul>
                    <li>Integrated scale for greater efficiency</li>
                    <li>Weighing range: 0–5000 g (1 g increments)</li>
                    <li>Time savings by eliminating separate scales</li>
                    <li>Variants for specialized applications: standard carriage for standard use, double carriage (DC) for large pieces with two feed carriages, clamping arm carriage (CA) for easy fixation, version with scale (W) for additional weight control</li>
                </ul>
                <h4>Practical Features:</h4>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Features</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Ergonomic operation with scale</li>
                                <li>Accessible surfaces for quick cleaning – 100% tare, not calibrated</li>
                                <li>Integrated scale (weighing range 0–5,000 g, additional weight via weight control)</li>
                                <li>Variants: standard carriage (large and smooth-running), double carriage (DC, with two feed carriages for large pieces), clamping arm carriage (CA, for easy fixation), version with scale (W, for precise weighing)</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <h4>Technical Specifications:</h4>
                <div class="accordion">
                    <!-- Common Features -->
                    <div class="accordion-item">
                        <button class="accordion-header">Common Features</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>High-Quality Components:</strong> Piezo switch technology – safe, waterproof, and durable, chemical-resistant and shatterproof plastics</li>
                                <li><strong>Cleaning:</strong> Free-running blade, removable blade cover plate, removable carriage and scraper, surrounding rubber frame for a clean finish on the base – Cera 3, smooth, fully accessible surfaces</li>
                                <li><strong>Investment Security:</strong> 2-year warranty, long-term and cost-effective spare parts supply, service-friendly design</li>
                                <li><strong>Motor Power:</strong> 500 Watt / 230 V – AC or 400 V – three-phase</li>
                                <li><strong>Total Vibration Value:</strong> 2.5 m/s²</li>
                                <li><strong>Noise Emission Level:</strong>
                                    < 69 dBA</li>
                                <li><strong>Operating Time:</strong> Continuous operation</li>
                                <li><strong>Blade Diameter:</strong> 330 mm</li>
                                <li><strong>Slice Thickness:</strong> 0–24 mm</li>
                                <li><strong>Base Area:</strong> 540 x 440 mm</li>
                                <li><strong>Accessories:</strong> Special oil, 2-stage blade sharpener</li>
                                <li><strong>Cutting Length:</strong> 300 mm</li>
                                <li><strong>External Dimensions (W x D x H):</strong> 650 x 605 x 445 mm</li>
                                <li><strong>Blade Speed:</strong> 230 rpm</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Standard Carriage -->
                    <div class="accordion-item">
                        <button class="accordion-header">Standard Carriage</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Carriage Type:</strong> Standard Carriage</li>
                                <li><strong>Carriage Size (L x W):</strong> 300 x 340 mm</li>
                                <li><strong>Workspace Dimensions (W x D x H):</strong> 740 x 725 x 600 mm</li>
                                <li><strong>Weight:</strong> 37.9 kg</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Double Carriage (DC) -->
                    <div class="accordion-item">
                        <button class="accordion-header">Double Carriage (DC)</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Carriage Type:</strong> Double Carriage</li>
                                <li><strong>Carriage Size (L x W):</strong> 300 x 223 mm</li>
                                <li><strong>Workspace Dimensions (W x D x H):</strong> 740 x 690 x 600 mm</li>
                                <li><strong>Weight:</strong> 41.2 kg</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Clamping Arm Carriage (CA) -->
                    <div class="accordion-item">
                        <button class="accordion-header">Clamping Arm Carriage (CA)</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Carriage Type:</strong> Clamping Arm Carriage</li>
                                <li><strong>Carriage Size (L x W):</strong> 300 x 340 mm</li>
                                <li><strong>Workspace Dimensions (W x D x H):</strong> 740 x 725 x 600 mm</li>
                                <li><strong>Weight:</strong> 45 kg</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Version with Scale (W) -->
                    <div class="accordion-item">
                        <button class="accordion-header">Version with Scale (W)</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Carriage Type:</strong> Standard Carriage</li>
                                <li><strong>Carriage Size (L x W):</strong> 300 x 340 mm</li>
                                <li><strong>Workspace Dimensions (W x D x H):</strong> 740 x 725 x 600 mm</li>
                                <li><strong>Weight:</strong> 37.9 kg</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p><em>Curious? Get advised!</em></p>
            </div>
        </div>
    <?php } ?>

    <?php
    // Product 4: Master 3370
    if ($selected_product === null || $selected_product === 'master-3370') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_master3370';
    ?>
        <div class="product-container" data-product-id="master-3370">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="../Product/graef/master/3370-18grad.PNG" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Graef Master 3370 18° Carriage">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="../Product/graef/master/3370-18grad.PNG" alt="Master 3370 Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>Graef Master 3370 – 18° Carriage</h2>
                <p>The Master 3370 with an 18° tilted carriage securely fixes the cutting material and simplifies operation. Ideal for fast, precise work in production.</p>
                <h4>Your Benefits:</h4>
                <ul>
                    <li>18° carriage for secure fixation</li>
                    <li>Easy operation and cleaning</li>
                    <li>Tiltable carriage for hygiene</li>
                </ul>
                <h4>Practical Features:</h4>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Features</button>
                        <div class="accordion-content">
                            <ul>
                                <li>18° tilted carriage – secure fixation of cutting material</li>
                                <li>Tiltable carriage – simplifies cleaning and ensures hygiene</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p><em>Interested? Ask for details!</em></p>
            </div>
        </div>
    <?php } ?>

    <?php
    // Product 5: VA 802
    if ($selected_product === null || $selected_product === 'va-802') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_va802';
    ?>
        <div class="product-container" data-product-id="va-802">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="../Product/graef/Vollautomat.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Graef VA 802 Fully Automatic Slicer">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="../Product/graef/Vollautomat.png" alt="VA 802 Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>Graef VA 802 – Fully Automatic for Professionals</h2>
                <p>The VA 802 (optionally VA 802H with semi-automatic mode) is a fully automatic slicer with a 500 Watt motor and Ø 300 mm blade. Ideal for butcher shops and buffets, it offers continuous operation and precise cuts (0.5–10 mm).</p>
                <h4>Your Benefits:</h4>
                <ul>
                    <li>Fully automatic operation for efficiency</li>
                    <li>Powerful 500-Watt motor</li>
                    <li>Cutting length up to 250 mm</li>
                </ul>
                <h4>Practical Features:</h4>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Features</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Fully automatic operation – optimized for efficiency</li>
                                <li>Optional semi-automatic mode (VA 802H) – flexibly deployable</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <h4>Technical Details:</h4>
                <ul>
                    <li>Dimensions: 600 x 880 x 500 mm</li>
                    <li>Weight: 69 kg</li>
                    <li>Accessories: Cleaning brush, blade sharpener, special oil</li>
                </ul>
                <p><em>Want to test it? Ask about a demo machine!</em></p>
            </div>
        </div>
    <?php } ?>

    <?php
    // Product 6: VA 804
    if ($selected_product === null || $selected_product === 'va-804') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_va804';
    ?>
        <div class="product-container" data-product-id="va-804">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="../Product/graef/VA804.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Graef VA 804 Fully Automatic Slicer">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="../Product/graef/VA804.png" alt="VA 804 Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>Graef VA 804 – Fully Automatic with Space</h2>
                <p>The VA 804 offers maximum efficiency with a Ø 300 mm blade and 500 Watt motor. Its tiltable carriage simplifies cleaning – perfect for demanding productions.</p>
                <h4>Your Benefits:</h4>
                <ul>
                    <li>Automatic operation for fast results</li>
                    <li>Easy cleaning thanks to tiltable carriage</li>
                    <li>Slice thickness: 0.5–10 mm</li>
                </ul>
                <h4>Practical Features:</h4>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Features</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Automatic operation – for fast and precise results</li>
                                <li>Tiltable carriage – simplifies cleaning</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <h4>Technical Details:</h4>
                <ul>
                    <li>Dimensions: 600 x 1060 x 500 mm</li>
                    <li>Weight: 70 kg</li>
                    <li>Accessories: Brush, oil, blade sharpener</li>
                </ul>
                <p><em>Ready for more? Contact us!</em></p>
            </div>
        </div>
    <?php } ?>

    <?php
    // Product 7: VA 804FB
    if ($selected_product === null || $selected_product === 'va-804fb') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_va804fb';
    ?>
        <div class="product-container" data-product-id="va-804fb">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="../Product/graef/VA804FB.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Graef VA 804FB with Conveyor Belt">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="../Product/graef/VA804FB.png" alt="VA 804FB Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>Graef VA 804FB – Fully Automatic with Conveyor Belt</h2>
                <p>The VA 804FB with conveyor belt and rollers is the ultimate solution for large-scale productions. With 500 Watt and a Ø 300 mm blade, it cuts precisely and efficiently.</p>
                <h4>Your Benefits:</h4>
                <ul>
                    <li>Conveyor belt for automatic placement</li>
                    <li>Mobile rollers for flexibility</li>
                    <li>Slice thickness: 0.5–10 mm</li>
                </ul>
                <h4>Practical Features:</h4>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Features</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Conveyor belt – for automatic placement of cut products</li>
                                <li>Mobile rollers – for flexible deployment</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <h4>Technical Details:</h4>
                <ul>
                    <li>Dimensions: 1653 x 1074 x 1350 mm</li>
                    <li>Weight: 70 kg</li>
                    <li>Accessories: Cleaning brush, blade sharpener, oil</li>
                </ul>
                <p><em>Boost efficiency? Get advised!</em></p>
            </div>
        </div>
    <?php } ?>

    <?php if (!$is_included) { ?>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script>
            // Initialize Swiper for each product
            var swiper_master2720 = new Swiper('.mySwiper_master2720', {
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev'
                },
            });
            var swiper_master3020 = new Swiper('.mySwiper_master3020', {
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev'
                },
            });
            var swiper_master3310w = new Swiper('.mySwiper_master3310w', {
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev'
                },
            });
            var swiper_master3370 = new Swiper('.mySwiper_master3370', {
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev'
                },
            });
            var swiper_va802 = new Swiper('.mySwiper_va802', {
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev'
                },
            });
            var swiper_va804 = new Swiper('.mySwiper_va804', {
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev'
                },
            });
            var swiper_va804fb = new Swiper('.mySwiper_va804fb', {
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
                // Initialize all accordions
                document.querySelectorAll('.accordion-header').forEach(button => {
                    button.addEventListener('click', () => {
                        const content = button.nextElementSibling;
                        const isOpen = content.style.display === 'block';

                        // Close all other open contents
                        document.querySelectorAll('.accordion-content').forEach(item => {
                            item.style.display = 'none';
                            item.previousElementSibling.classList.remove('active');
                        });

                        // Open or close the current content
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
                        const overlayImage = document.querySelector("#image-overlay img");
                        const overlayVideo = document.querySelector("#image-overlay video");
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
                            const overlayVideo = document.querySelector("#image-overlay video");
                            overlayVideo.pause();
                            overlayVideo.src = "";
                        }
                    });
                }
            });
        </script>
        <?php include 'footer.php'; ?>
    </body>

    </html>
<?php } ?>