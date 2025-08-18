<?php
// brine-injectors.php

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
        <title>Brine Injectors from Vakona & Nowicki | Service & Consulting</title>
        <meta name="description"
            content="Discover Nowicki and Vakona brine injectors for precise meat processing. Ideal for red meat, poultry, and fish – with touchscreen control and hygienic design." />
        <meta name="keywords"
            content="brine injector, marinade injector, Nowicki injector, meat processing, Vakona, service, PI 54, PI 75, PI 105, PI 81, PI 124, PI 184, PI 17 V, PI 21 V, PI 26 V, PI 52 V" />
        <meta name="robots" content="index, follow" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="/styles/swiper-bundle.min.css" />
        <link rel="stylesheet" href="swiperpic.css" />

        
    </head>

    <body>
        <?php include 'header.php'; ?>
        <!-- Introduction -->
        <div class="leistungen">
            <h2>Your Solution for Brine Injectors – Precision and Efficiency</h2>
            <p>Need a reliable brine injector for your meat processing? With the advanced injectors from Vakona and Nowicki,
                we offer cutting-edge technology for precise brining of meat, poultry, or fish, with or without bones.
                Benefit from our service, repair, and personalized consulting.</p>
            <p>We configure your system to meet your specific needs, ensuring optimal results. Let our expertise convince
                you!</p>
        </div>
        <div id="image-overlay">
            <img src="" alt="Full-screen view of Brine Injector" />
            <video controls style="display: none;"></video>
        </div>
    <?php } ?>

    <?php
    // Product 1: Brine Injector PI 54-105
    if ($selected_product === null || $selected_product === 'pi-54-105') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_pi54105';
        ?>
        <div class="product-container" data-product-id="pi-54-105">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/Product/Vakona/VAKONA_PI_54-105-1.png" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="VAKONA Brine Injector PI 54-105">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Thumbnails -->
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/Vakona/VAKONA_PI_54-105-1.png" alt="VAKONA Brine Injector PI 54-105 Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>Brine Injector PI 54-105</h2>
                <p>The <strong>VAKONA Brine Injector PI 54-105</strong> is the ideal solution for fully automatic meat
                    processing in medium and large operations. With a robust design and state-of-the-art technology, this
                    injector enables precise and efficient brining of meat, poultry, or fish – with or without bones. Thanks
                    to advanced touchscreen control and customizable process parameters, you can optimize your production
                    and achieve consistently high-quality results.</p>

                <h3>Your Benefits:</h3>
                <ul>
                    <li>Robust construction for continuous operation</li>
                    <li>Compact design for space-saving integration</li>
                    <li>High injection accuracy for uniform results</li>
                    <li>Easy handling and maintenance-friendly</li>
                    <li>High functionality and flexibility</li>
                    <li>Easy cleaning for maximum hygiene</li>
                </ul>

                <h3>Innovative Features:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Standard Features</button>
                        <div class="accordion-content">
                            <ul>
                                <li>User-friendly and ergonomic industrial design</li>
                                <li>Direct drive via servo technology</li>
                                <li>Precision needle heads with quick-change needle bridge system</li>
                                <li>Complete separation of the entire pump circuit from all electromechanical components
                                </li>
                                <li>Product-specific pump selection</li>
                                <li>Pre-filter system with electronic monitoring</li>
                                <li>Fully automatic rotary filter systems</li>
                                <li>Infinitely adjustable process parameters</li>
                                <li>Special polyethylene conveyor belt – easily removable</li>
                                <li>Touchscreen control with 100 program slots for recipe management, infinitely adjustable
                                    stroke height selection, cycle rate up to 50 strokes per minute, automatic standby mode
                                    for needle head and brine pump, high injection accuracy via position-controlled brine
                                    valve</li>
                                <li>Injection pattern adjustment via belt positioning</li>
                                <li>Automatic cleaning program</li>
                                <li>USB/Ethernet and CAN-Bus as standard</li>
                                <li>Pneumatic single-needle suspension</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <h3>Technical Specifications:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Technical Specifications</button>
                        <div class="accordion-content">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Model</th>
                                        <th>Injection Needles</th>
                                        <th>Length</th>
                                        <th>Width</th>
                                        <th>Height</th>
                                        <th>Conveyor Belt Length</th>
                                        <th>Working Width</th>
                                        <th>Max. Clearance Height</th>
                                        <th>Working Height</th>
                                        <th>Power Rating</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>PI 54</td>
                                        <td>54</td>
                                        <td>1750 mm</td>
                                        <td>860 mm</td>
                                        <td>2200 mm</td>
                                        <td>365 mm</td>
                                        <td>74/37/24.5 mm</td>
                                        <td>220 mm</td>
                                        <td>1130 mm</td>
                                        <td>7.0 kW</td>
                                    </tr>
                                    <tr>
                                        <td>PI 75</td>
                                        <td>75</td>
                                        <td>1750 mm</td>
                                        <td>860 mm</td>
                                        <td>2200 mm</td>
                                        <td>365 mm</td>
                                        <td>74/37/24.5 mm</td>
                                        <td>220 mm</td>
                                        <td>1130 mm</td>
                                        <td>7.0 kW</td>
                                    </tr>
                                    <tr>
                                        <td>PI 105</td>
                                        <td>105</td>
                                        <td>1750 mm</td>
                                        <td>860 mm</td>
                                        <td>2200 mm</td>
                                        <td>365 mm</td>
                                        <td>74/37/24.5 mm</td>
                                        <td>220 mm</td>
                                        <td>1130 mm</td>
                                        <td>7.0 kW</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <h3>Scope of Delivery:</h3>
                <ul>
                    <li>Brine Injector PI 54-105 with selected configuration</li>
                    <li>Touchscreen control</li>
                    <li>Special conveyor belt</li>
                    <li>Filter system</li>
                </ul>

                <p><em>Interested? Get advice now!</em></p>
            </div>
        </div>
        <!-- Structured Data for SEO -->
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Product",
                "name": "VAKONA Brine Injector PI 54-105",
                "description": "Automatic brine injectors designed for the needs of craft and medium-sized operations.",
                "brand": {
                    "@type": "Brand",
                    "name": "VAKONA"
                },
                "offers": {
                    "@type": "Offer",
                    "priceCurrency": "EUR",
                    "availability": "https://schema.org/InStock",
                    "url": "https://as-technical.de/en/brine-injectors.php"
                },
                "image": "https://as-technical.de/Product/Vakona/VAKONA_PI_54-105-1.png"
            }
            </script>
    <?php } ?>

    <?php
    // Product 2: Brine Injector PI 81-184
    if ($selected_product === null || $selected_product === 'pi-81-184') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_pi81184';
        ?>
        <div class="product-container" data-product-id="pi-81-184">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/Product/Vakona/VAKONA_PI_81-184.png" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="VAKONA Brine Injector PI 81-184">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Thumbnails -->
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/Vakona/VAKONA_PI_81-184.png" alt="VAKONA Brine Injector PI 81-184 Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>Brine Injector PI 81-184</h2>
                <p>The <strong>VAKONA Brine Injector PI 81-184</strong> is designed for large production volumes, offering
                    precise brining with high efficiency. Ideal for industrial applications in meat processing.</p>

                <h3>Your Benefits:</h3>
                <ul>
                    <li>Robust construction for continuous operation</li>
                    <li>Compact design for space-saving integration</li>
                    <li>High injection accuracy for uniform results</li>
                    <li>Easy handling and maintenance-friendly</li>
                    <li>High functionality and flexibility</li>
                    <li>Easy cleaning for maximum hygiene</li>
                </ul>

                <h3>Innovative Features:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Standard Features</button>
                        <div class="accordion-content">
                            <ul>
                                <li>User-friendly and ergonomic industrial design</li>
                                <li>Direct drive via servo technology</li>
                                <li>Precision needle heads with quick-change needle bridge system</li>
                                <li>Complete separation of the entire pump circuit from all electromechanical components
                                </li>
                                <li>Product-specific pump selection</li>
                                <li>Pre-filter system with electronic monitoring</li>
                                <li>Fully automatic rotary filter systems</li>
                                <li>Infinitely adjustable process parameters</li>
                                <li>Special polyethylene conveyor belt – easily removable</li>
                                <li>Touchscreen control with 100 program slots for recipe management, infinitely adjustable
                                    stroke height selection, cycle rate up to 50 strokes per minute, automatic standby mode
                                    for needle head and brine pump, high injection accuracy via position-controlled brine
                                    valve</li>
                                <li>Injection pattern adjustment via belt positioning</li>
                                <li>Automatic cleaning program</li>
                                <li>USB/Ethernet and CAN-Bus as standard</li>
                                <li>Pneumatic single-needle suspension</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <h3>Technical Specifications:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Technical Specifications</button>
                        <div class="accordion-content">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Model</th>
                                        <th>Injection Needles</th>
                                        <th>Length</th>
                                        <th>Width</th>
                                        <th>Height</th>
                                        <th>Conveyor Belt Length</th>
                                        <th>Working Width</th>
                                        <th>Max. Clearance Height</th>
                                        <th>Working Height</th>
                                        <th>Power Rating</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>PI 81</td>
                                        <td>81</td>
                                        <td>2250 mm</td>
                                        <td>1120 mm</td>
                                        <td>2400 mm</td>
                                        <td>480 mm</td>
                                        <td>90/45/30 mm</td>
                                        <td>220 mm</td>
                                        <td>1150 mm</td>
                                        <td>14.5 kW</td>
                                    </tr>
                                    <tr>
                                        <td>PI 124</td>
                                        <td>124</td>
                                        <td>2250 mm</td>
                                        <td>1120 mm</td>
                                        <td>2400 mm</td>
                                        <td>480 mm</td>
                                        <td>90/45/30 mm</td>
                                        <td>220 mm</td>
                                        <td>1150 mm</td>
                                        <td>14.5 kW</td>
                                    </tr>
                                    <tr>
                                        <td>PI 184</td>
                                        <td>184</td>
                                        <td>2250 mm</td>
                                        <td>1120 mm</td>
                                        <td>2400 mm</td>
                                        <td>480 mm</td>
                                        <td>90/45/30 mm</td>
                                        <td>220 mm</td>
                                        <td>1150 mm</td>
                                        <td>14.5 kW</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <h3>Scope of Delivery:</h3>
                <ul>
                    <li>Brine Injector PI 81-184 with selected configuration</li>
                    <li>Touchscreen control</li>
                    <li>Special conveyor belt</li>
                    <li>Filter system</li>
                </ul>

                <p><em>Interested? Get advice now!</em></p>
            </div>
        </div>
        <!-- Structured Data for SEO -->
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Product",
                "name": "VAKONA Brine Injector PI 81-184",
                "description": "Automatic brine injectors for large production volumes.",
                "brand": {
                    "@type": "Brand",
                    "name": "VAKONA"
                },
                "offers": {
                    "@type": "Offer",
                    "priceCurrency": "EUR",
                    "availability": "https://schema.org/InStock",
                    "url": "https://as-technical.de/en/brine-injectors.php"
                },
                "image": "https://as-technical.de/Product/Vakona/VAKONA_PI_81-184.png"
            }
            </script>
    <?php } ?>

    <?php
    // Product 3: Model PI 17 V
    if ($selected_product === null || $selected_product === 'pi-17-v') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_pi17v';
        ?>
        <div class="product-container" data-product-id="pi-17-v">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/Product/vakona/PI17V.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="VAKONA Brine Injector PI 17 V">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Thumbnails -->
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/vakona/PI17V.png" alt="VAKONA Brine Injector PI 17 V Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>Model PI 17 V</h2>
                <p>The <strong>VAKONA Brine Injector PI 17 V</strong> is designed for smaller operations and craft
                    applications. With a direct mechanical drive and precise needle heads, it offers reliable brining for
                    meat, poultry, and fish.</p>

                <h3>Your Benefits:</h3>
                <ul>
                    <li>Robust construction for continuous operation</li>
                    <li>Compact design for space-saving integration</li>
                    <li>High injection accuracy for uniform results</li>
                    <li>Easy handling and maintenance-friendly</li>
                </ul>

                <h3>Innovative Features:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Standard Features</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Direct mechanical drive for needle head and belt above the brining chamber</li>
                                <li>Precision needle heads with quick-change needle bridge system</li>
                                <li>Mechanical suspension of each individual needle for products with bones</li>
                                <li>Complete separation of the entire pump circuit from all electromechanical components
                                </li>
                                <li>Standard version with stainless steel centrifugal pump</li>
                                <li>Product-specific pump selection</li>
                                <li>Pre-filter system</li>
                                <li>Special polyethylene conveyor belt, easily removable</li>
                                <li>Injection pattern adjustment via mechanical belt feed setting</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <h3>Options:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Options</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Semi-automatic filter system</li>
                                <li>VHF H-version for fish and poultry</li>
                                <li>Steaker knife attachment for boneless products</li>
                                <li>Manual spray connection</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <h3>Scope of Delivery:</h3>
                <ul>
                    <li>Brine Injector PI 17 V</li>
                    <li>Special conveyor belt</li>
                    <li>Pre-filter system</li>
                </ul>

                <p><em>Interested? Get advice now!</em></p>
            </div>
        </div>
        <!-- Structured Data for SEO -->
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Product",
                "name": "VAKONA Brine Injector PI 17 V",
                "description": "Automatic brine injectors designed for craft applications.",
                "brand": {
                    "@type": "Brand",
                    "name": "VAKONA"
                },
                "offers": {
                    "@type": "Offer",
                    "priceCurrency": "EUR",
                    "availability": "https://schema.org/InStock",
                    "url": "https://as-technical.de/en/brine-injectors.php"
                },
                "image": "https://as-technical.de/Product/vakona/PI17V.png"
            }
            </script>
    <?php } ?>

    <?php
    // Product 4: Model PI 21 V
    if ($selected_product === null || $selected_product === 'pi-21-v') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_pi21v';
        ?>
        <div class="product-container" data-product-id="pi-21-v">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/Product/vakona/VAKONA_PI_21_V_offen.png" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="VAKONA Brine Injector PI 21 V">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Thumbnails -->
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/vakona/VAKONA_PI_21_V_offen.png" alt="VAKONA Brine Injector PI 21 V Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>Model PI 21 V</h2>
                <p>The <strong>VAKONA Brine Injector PI 21 V</strong> is a compact model for craft operations with flexible
                    applications. The modern control system allows precise adjustments for optimal brining.</p>

                <h3>Your Benefits:</h3>
                <ul>
                    <li>Robust construction for continuous operation</li>
                    <li>Compact design for space-saving integration</li>
                    <li>High injection accuracy for uniform results</li>
                    <li>Easy handling and maintenance-friendly</li>
                </ul>

                <h3>Innovative Features:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Standard Features</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Direct mechanical drive for needle head and belt above the brining chamber</li>
                                <li>Precision needle heads with quick-change needle bridge system</li>
                                <li>Mechanical suspension of each individual needle for products with bones</li>
                                <li>Complete separation of the entire pump circuit from all electromechanical components
                                </li>
                                <li>Standard version with stainless steel centrifugal pump</li>
                                <li>Product-specific pump selection</li>
                                <li>Pre-filter system</li>
                                <li>Special polyethylene conveyor belt, easily removable</li>
                                <li>Injection pattern adjustment via mechanical belt feed setting</li>
                                <li>Control system for infinitely adjustable process parameters</li>
                                <li>20 program slots for recipe management</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <h3>Options:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Options</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Semi-automatic VHF filter system</li>
                                <li>H-version for fish and poultry</li>
                                <li>Steaker knife attachment for boneless products</li>
                                <li>Manual spray connection</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <h3>Scope of Delivery:</h3>
                <ul>
                    <li>Brine Injector PI 21 V</li>
                    <li>Special conveyor belt</li>
                    <li>Pre-filter system</li>
                </ul>

                <p><em>Interested? Get advice now!</em></p>
            </div>
        </div>
        <!-- Structured Data for SEO -->
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Product",
                "name": "VAKONA Brine Injector PI 21 V",
                "description": "Automatic brine injectors designed for craft operations with modern control.",
                "brand": {
                    "@type": "Brand",
                    "name": "VAKONA"
                },
                "offers": {
                    "@type": "Offer",
                    "priceCurrency": "EUR",
                    "availability": "https://schema.org/InStock",
                    "url": "https://as-technical.de/en/brine-injectors.php"
                },
                "image": "https://as-technical.de/Product/vakona/VAKONA_PI_21_V_offen.png"
            }
            </script>
    <?php } ?>

    <?php
    // Product 5: Model PI 26 V
    if ($selected_product === null || $selected_product === 'pi-26-v') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_pi26v';
        ?>
        <div class="product-container" data-product-id="pi-26-v">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/Product/vakona/PI26.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="VAKONA Brine Injector PI 26 V">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Thumbnails -->
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/vakona/PI26.png" alt="VAKONA Brine Injector PI 26 V Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>Model PI 26 V</h2>
                <p>The <strong>VAKONA Brine Injector PI 26 V</strong> offers advanced functionality with an independent belt
                    drive and modern control for precise brining in craft operations.</p>

                <h3>Your Benefits:</h3>
                <ul>
                    <li>Robust construction for continuous operation</li>
                    <li>Compact design for space-saving integration</li>
                    <li>High injection accuracy for uniform results</li>
                    <li>Easy handling and maintenance-friendly</li>
                </ul>

                <h3>Innovative Features:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Standard Features</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Direct mechanical drive for needle head and belt above the brining chamber</li>
                                <li>Precision needle heads with quick-change needle bridge system</li>
                                <li>Mechanical suspension of each individual needle for products with bones</li>
                                <li>Complete separation of the entire pump circuit from all electromechanical components
                                </li>
                                <li>Standard version with stainless steel centrifugal pump</li>
                                <li>Product-specific pump selection</li>
                                <li>Pre-filter system</li>
                                <li>Special polyethylene conveyor belt, easily removable</li>
                                <li>Injection pattern adjustment via mechanical belt feed setting</li>
                                <li>Control system for infinitely adjustable process parameters and 20 program slots for
                                    recipe management</li>
                                <li>Injection pattern selectable via the control system</li>
                                <li>Additional independent belt drive</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <h3>Options:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Options</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Semi-automatic VHF filter system</li>
                                <li>H-version for fish and poultry</li>
                                <li>Steaker knife attachment for boneless products</li>
                                <li>Manual spray connection</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <h3>Scope of Delivery:</h3>
                <ul>
                    <li>Brine Injector PI 26 V</li>
                    <li>Special conveyor belt</li>
                    <li>Pre-filter system</li>
                </ul>

                <p><em>Interested? Get advice now!</em></p>
            </div>
        </div>
        <!-- Structured Data for SEO -->
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Product",
                "name": "VAKONA Brine Injector PI 26 V",
                "description": "Automatic brine injectors with independent belt drive for craft operations.",
                "brand": {
                    "@type": "Brand",
                    "name": "VAKONA"
                },
                "offers": {
                    "@type": "Offer",
                    "priceCurrency": "EUR",
                    "availability": "https://schema.org/InStock",
                    "url": "https://as-technical.de/en/brine-injectors.php"
                },
                "image": "https://as-technical.de/Product/vakona/PI26.png"
            }
            </script>
    <?php } ?>

    <?php
    // Product 6: Model PI 52 V
    if ($selected_product === null || $selected_product === 'pi-52-v') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_pi52v';
        ?>
        <div class="product-container" data-product-id="pi-52-v">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/Product/vakona/PI_52_V-1.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="VAKONA Brine Injector PI 52 V">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Thumbnails -->
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/vakona/PI_52_V-1.png" alt="VAKONA Brine Injector PI 52 V Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>Model PI 52 V</h2>
                <p>The <strong>VAKONA Brine Injector PI 52 V</strong> offers advanced functionality with an independent belt
                    drive and modern control for precise brining in craft operations.</p>

                <h3>Your Benefits:</h3>
                <ul>
                    <li>Robust construction for continuous operation</li>
                    <li>Compact design for space-saving integration</li>
                    <li>High injection accuracy for uniform results</li>
                    <li>Easy handling and maintenance-friendly</li>
                </ul>

                <h3>Innovative Features:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Standard Features</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Direct mechanical drive for needle head and belt above the brining chamber</li>
                                <li>Precision needle heads with quick-change needle bridge system</li>
                                <li>Mechanical suspension of each individual needle for products with bones</li>
                                <li>Complete separation of the entire pump circuit from all electromechanical components
                                </li>
                                <li>Standard version with stainless steel centrifugal pump</li>
                                <li>Product-specific pump selection</li>
                                <li>Pre-filter system</li>
                                <li>Special polyethylene conveyor belt, easily removable</li>
                                <li>Injection pattern adjustment via mechanical belt feed setting</li>
                                <li>Control system for infinitely adjustable process parameters and 20 program slots for
                                    recipe management</li>
                                <li>Injection pattern selectable via the control system</li>
                                <li>Additional independent belt drive</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <h3>Options:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Options</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Semi-automatic VHF filter system</li>
                                <li>H-version for fish and poultry</li>
                                <li>Steaker knife attachment for boneless products</li>
                                <li>Manual spray connection</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <h3>Scope of Delivery:</h3>
                <ul>
                    <li>Brine Injector PI 52 V</li>
                    <li>Special conveyor belt</li>
                    <li>Pre-filter system</li>
                </ul>

                <p><em>Interested? Get advice now!</em></p>
            </div>
        </div>
        <!-- Structured Data for SEO -->
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Product",
                "name": "VAKONA Brine Injector PI 52 V",
                "description": "Automatic brine injectors with independent belt drive for craft operations.",
                "brand": {
                    "@type": "Brand",
                    "name": "VAKONA"
                },
                "offers": {
                    "@type": "Offer",
                    "priceCurrency": "EUR",
                    "availability": "https://schema.org/InStock",
                    "url": "https://as-technical.de/en/brine-injectors.php"
                },
                "image": "https://as-technical.de/Product/vakona/PI_52_V-1.png"
            }
            </script>
    <?php } ?>

    <?php
    // Product 7: Nowicki Brine Injectors
    if ($selected_product === null || $selected_product === 'nowicki-injektor') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_nowickiinjektor';
        ?>
        <div class="product-container" data-product-id="nowicki-injektor">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/Product/nowicki/injector/MHM-21-84.png" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="Nowicki MHM-21 Brine Injector">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/nowicki/injector/MHM-39-156.png" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="Nowicki MHM-39 Brine Injector">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/nowicki/injector/nadeln.png" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="Needles for Nowicki Brine Injectors">
                        </div>
                        <div class="swiper-slide">
                            <video width="100%" height="400" controls>
                                <source src="/video/MHM68injector.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Thumbnails -->
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/nowicki/injector/MHM-21-84.png" alt="Nowicki MHM-21 Brine Injector Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/nowicki/injector/MHM-39-156.png" alt="Nowicki MHM-39 Brine Injector Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(2, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/nowicki/injector/nadeln.png" alt="Needles for Nowicki Brine Injectors Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(3, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/assets/video.png" alt="Video for Nowicki Brine Injectors Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>Nowicki Brine Injectors</h2>
                <p>Discover the state-of-the-art <strong>Brine Injectors</strong> from NOMA Nowicki Machinery – the perfect
                    solution for precise and efficient meat processing! Our advanced MHM injectors are ideal for injecting
                    brine into red meat, poultry, or fish, with or without bones. Thanks to innovative features such as
                    intuitive touchscreen control, uniform brine distribution, and a hygienic, easy-to-clean design, they
                    offer maximum flexibility and productivity.</p>

                <h3>Your Benefits:</h3>
                <ul>
                    <li>Low and high injection volumes</li>
                    <li>Infinitely adjustable speed control for head and conveyor (optional for MHM 21 model)</li>
                    <li>Intuitive touchscreen panel for easy operation</li>
                    <li>Uniform brine distribution for optimal results</li>
                    <li>Highly efficient stainless steel brine centrifugal pump</li>
                    <li>Infinitely adjustable brine pressure control</li>
                    <li>Function for mixing and pumping brine from the tank (for FBN rotary filter)</li>
                    <li>Closed brine circulation system</li>
                    <li>Easy-to-clean, multi-stage brine filter system</li>
                </ul>

                <h3>Innovative Features:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Injection Head</button>
                        <div class="accordion-content">
                            <ul>
                                <li>System of multifunctional injection heads (depending on the model, with 2, 3, or 4
                                    needles)</li>
                                <li>Interchangeable injection head with quick assembly and disassembly</li>
                                <li>Individually customizable needles from the needle catalog or custom-made to
                                    specifications</li>
                                <li>Optional: Screw pump for heavy brine</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <h3>Technical Specifications:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Technical Specifications</button>
                        <div class="accordion-content">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Type</th>
                                        <th>Number of Needle Holders</th>
                                        <th>Max. Number of Needles</th>
                                        <th>Length (L)</th>
                                        <th>Width (W)</th>
                                        <th>Height (H)</th>
                                        <th>Weight</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>MHM-21/84</td>
                                        <td>21 units</td>
                                        <td>Up to 84</td>
                                        <td>1440 mm</td>
                                        <td>760 mm</td>
                                        <td>1850 mm</td>
                                        <td>330 kg</td>
                                    </tr>
                                    <tr>
                                        <td>MHM-39/156</td>
                                        <td>39 units</td>
                                        <td>Up to 156</td>
                                        <td>1770 mm</td>
                                        <td>840 mm</td>
                                        <td>2000 mm</td>
                                        <td>430 kg</td>
                                    </tr>
                                    <tr>
                                        <td>MHM-68/204</td>
                                        <td>68 units</td>
                                        <td>Up to 204</td>
                                        <td>1820 mm</td>
                                        <td>990 mm</td>
                                        <td>1970 mm</td>
                                        <td>490 kg</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <h3>Injector Markings:</h3>
                <ul>
                    <li><strong>M</strong> – Red meat; needle diameter of 4 mm</li>
                    <li><strong>P</strong> – Poultry; needle diameter of 3 mm</li>
                    <li><strong>PM</strong> – Red meat (needle diameter of 3 mm) and poultry (needle diameter of 3 mm)</li>
                    <li><strong>K</strong> – Fresh meat; needle diameter of 2 mm</li>
                    <li><strong>KS</strong> – Culinary injection; needle diameter of 2 mm</li>
                </ul>

                <h3>Scope of Delivery:</h3>
                <ul>
                    <li>Nowicki Brine Injector (MHM model of choice)</li>
                    <li>Touchscreen control panel</li>
                    <li>Brine centrifugal pump</li>
                    <li>Brine filter system</li>
                </ul>

                <p><em>Interested? Get advice now!</em></p>
            </div>
        </div>
        <!-- Structured Data for SEO -->
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Product",
                "name": "Nowicki Brine Injectors",
                "description": "State-of-the-art brine injectors from NOMA Nowicki Machinery for precise meat processing.",
                "brand": {
                    "@type": "Brand",
                    "name": "NOMA Nowicki"
                },
                "offers": {
                    "@type": "Offer",
                    "priceCurrency": "EUR",
                    "availability": "https://schema.org/InStock",
                    "url": "https://as-technical.de/en/brine-injectors.php"
                },
                "image": "https://as-technical.de/Product/nowicki/injector/MHM-21-84.png"
            }
            </script>
    <?php } ?>

    <?php
    if (!$is_included) {
        ?>
        <script src="/scripts/swiper-bundle.min.js"></script>
        <script>
            // Initialize Swiper for each product
            var swiper_pi54105 = new Swiper('.mySwiper_pi54105', {
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev'
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });
            var swiper_pi81184 = new Swiper('.mySwiper_pi81184', {
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev'
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });
            var swiper_pi17v = new Swiper('.mySwiper_pi17v', {
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev'
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });
            var swiper_pi21v = new Swiper('.mySwiper_pi21v', {
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev'
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });
            var swiper_pi26v = new Swiper('.mySwiper_pi26v', {
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev'
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });
            var swiper_pi52v = new Swiper('.mySwiper_pi52v', {
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev'
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });
            var swiper_nowickiinjektor = new Swiper('.mySwiper_nowickiinjektor', {
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

            document.addEventListener("DOMContentLoaded", function () {
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
                document.addEventListener("click", function (event) {
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
                    overlay.addEventListener("click", function (event) {
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