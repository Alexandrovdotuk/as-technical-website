<?php
// mincers.php

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
        <title>Meat Mincers from MADO & Nowicki | Service & Consulting</title>
        <meta name="description"
            content="Discover MADO and Nowicki meat mincers for precise meat processing. Ideal for butcher shops and catering – with touchscreen control and hygienic design." />
        <meta name="keywords"
            content="meat mincer, automatic mincer, extruder mincer, MADO mincer, Nowicki mincer, meat processing, service, MEW-724, MMG 233, MMG 235/239/243, W-200B, W-280B" />
        <meta name="robots" content="index, follow" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="/styles/swiper-bundle.min.css" />
        <link rel="stylesheet" href="swiperpic.css" />

        <style>
            /* Container Styles */
            .product-container {
                display: flex;
                flex-wrap: wrap;
                gap: 20px;
                padding: 20px;
                max-width: 1200px;
                width: 100%;
                margin: 0 auto;
                box-sizing: border-box;
            }

            /* Product Image Section */
            .product-image {
                padding: 20px;
                width: 100%;
                max-width: 350px;
                position: sticky;
                top: 70px;
                align-self: flex-start;
                box-sizing: border-box;
            }

            /* Swiper Styles */
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
                width: 100%;
                height: auto;
                object-fit: contain;
            }

            .swiper-slide iframe,
            .swiper-slide video {
                width: 100%;
                max-width: 100%;
                height: 200px;
                box-sizing: border-box;
            }

            /* Thumbnail Styles */
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

            /* Image Overlay */
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

            /* Product Info Section */
            .product-info {
                flex: 1;
                min-width: 300px;
                width: 100%;
                color: white;
                box-sizing: border-box;
            }

            .product-info h2 {
                font-size: 24px;
                margin-bottom: 15px;
                color: #fff;
            }

            .product-info h3 {
                font-size: 18px;
                margin-top: 20px;
                margin-bottom: 10px;
                color: #ff9900;
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

            /* Table Styles */
            table {
                width: 100% !important;
                max-width: 100%;
                border-collapse: collapse;
                margin: 15px 0;
                border-radius: 10px;
                box-sizing: border-box;
                overflow-x: auto;
                display: block;
            }

            th,
            td {
                border: 1px solid rgb(255, 255, 255);
                padding: 10px;
                text-align: left;
                color: white;
                font-size: 14px;
                word-break: break-word;
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

            /* Leistungen Section */
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

            /* General Image Styles */
            img {
                min-width: 0 !important;
                max-width: 100%;
                height: auto;
            }

            /* Responsive Design */
            @media screen and (max-width: 768px) {
                .product-container {
                    flex-direction: column;
                    padding: 15px;
                }

                .product-image {
                    max-width: 100%;
                    padding: 10px;
                    position: static;
                }

                .product-info {
                    min-width: 100%;
                }

                .swiper-slide img {
                    max-width: 200px;
                    align-items: center;
                }

                .swiper-slide iframe,
                .swiper-slide video {
                    height: 150px;
                }

                table {
                    font-size: 12px;
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
            <h2>Your Solution for Meat Mincers – Precision and Efficiency</h2>
            <p>Need a powerful meat mincer for your meat processing? With advanced mincers from MADO and Nowicki, we offer
                cutting-edge technology for precise grinding of meat, with or without bones. Benefit from our service,
                repair, and personalized consulting.</p>
            <p>We configure your system to meet your specific needs, ensuring optimal results. Let our expertise convince
                you!</p>
        </div>
        <div id="image-overlay">
            <img src="" alt="Full-screen view of Meat Mincer" />
            <video controls style="display: none;"></video>
        </div>
    <?php } ?>

    <?php
    // Product 1: Automatic Mixing Mincer MEW-724-D114-E52
    if ($selected_product === null || $selected_product === 'mew-724') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_mew724';
        ?>
        <div class="product-container" data-product-id="mew-724">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/Product/MADO/MEW-724.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="MADO Automatic Mixing Mincer MEW-724-D114-E52">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Thumbnails -->
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/MADO/MEW-724.png" alt="MADO Automatic Mixing Mincer MEW-724-D114-E52 Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>Automatic Mixing Mincer MEW-724-D114-E52</h2>
                <p>The <strong>MADO Automatic Mixing Mincer MEW-724-D114-E52</strong> is a versatile meat mincer for
                    professional meat processing. With a robust design and modern technology, it enables precise mixing and
                    grinding of meat, ideal for butcher shops and catering.</p>

                <h3>Your Benefits:</h3>
                <ul>
                    <li>Entirely made of stainless steel for maximum hygiene</li>
                    <li>High efficiency with a powerful two-speed motor</li>
                    <li>Flexible cutting sets for various applications</li>
                    <li>Easy cleaning and maintenance</li>
                    <li>Optional cooling for fresh products</li>
                </ul>

                <h3>Innovative Features:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Features</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Equipped with mixing unit, cutting set optionally in Unger D114 5-piece system or
                                    Enterprise Size 52 SUPERLONGLIFE</li>
                                <li>Optional cooling</li>
                                <li>Working worm made of steel and plastic</li>
                                <li>Central mixing shaft with four different mixer profiles</li>
                                <li>Removable mixing unit</li>
                                <li>Mechanical worm ejector</li>
                                <li>Stainless steel worm available at no extra cost upon request</li>
                                <li>Optional separating set for sorting out cartilage and tendons</li>
                                <li>Hygienic, easy cleaning due to optimal cleaning possibilities</li>
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
                                        <th>Feature</th>
                                        <th>Value</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Material</td>
                                        <td>Entirely stainless steel</td>
                                    </tr>
                                    <tr>
                                        <td>Motor</td>
                                        <td>Powerful two-speed motor</td>
                                    </tr>
                                    <tr>
                                        <td>Cutting Set</td>
                                        <td>Unger D114 5-piece or Enterprise Size 52</td>
                                    </tr>
                                    <tr>
                                        <td>Options</td>
                                        <td>Cooling, separating set, stainless steel worm</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <h3>Scope of Delivery:</h3>
                <ul>
                    <li>Automatic Mixing Mincer MEW-724-D114-E52</li>
                    <li>Mixing unit</li>
                    <li>Cutting set (optional)</li>
                    <li>Central mixing shaft</li>
                </ul>

                <p><em>Interested? Get advice now!</em></p>
            </div>
        </div>
        <!-- Structured Data for SEO -->
        <script type="application/ld+json">
                {
                    "@context": "https://schema.org",
                    "@type": "Product",
                    "name": "MADO Automatic Mixing Mincer MEW-724-D114-E52",
                    "description": "Versatile meat mincer for professional meat processing with robust design.",
                    "brand": {
                        "@type": "Brand",
                        "name": "MADO"
                    },
                    "offers": {
                        "@type": "Offer",
                        "priceCurrency": "EUR",
                        "availability": "https://schema.org/InStock",
                        "url": "https://as-technical.de/en/mincers.php"
                    },
                    "image": "https://as-technical.de/Product/MADO/MEW-724.png"
                }
                </script>
    <?php } ?>

    <?php
    // Product 2: Extruder Mincer MMG 233-U200
    if ($selected_product === null || $selected_product === 'mmg-233') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_mmg233';
        ?>
        <div class="product-container" data-product-id="mmg-233">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/Product/MADO/MMG 233-U200.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="MADO Extruder Mincer MMG 233-U200">
                        </div>
                        <div class="swiper-slide">
                            <video controls>
                                <source src="/video/ExtruderAnimation.mp4" type="video/mp4">
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
                        <img src="/Product/MADO/MMG 233-U200.png" alt="MADO Extruder Mincer MMG 233-U200 Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/assets/video.png" alt="Video Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>Extruder Mincer MMG 233-U200</h2>
                <p>The <strong>MADO Extruder Mincer MMG 233-U200</strong> is a powerful meat mincer for industrial meat
                    processing. With a patented twin cutting system and modern control, it optimizes production for high
                    throughput.</p>

                <h3>Your Benefits:</h3>
                <ul>
                    <li>Entirely made of stainless steel for maximum hygiene</li>
                    <li>Patented twin cutting system for precise processing</li>
                    <li>Infinitely adjustable mixing time and speed</li>
                    <li>Programmable control with touchscreen</li>
                    <li>Optional automatic loading</li>
                </ul>

                <h3>Innovative Features:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Features</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Patented twin cutting system, 5-piece cutting set, 3-piece mixing cutting set</li>
                                <li>Electrically locked outlet guard</li>
                                <li>Central mixing shaft</li>
                                <li>Infinitely adjustable mixing time and speed of feeder and working worms</li>
                                <li>Programmable control with clear touchscreen</li>
                                <li>All drives controlled by frequency inverters</li>
                                <li>Tool cart included as standard</li>
                                <li>Optional automatic loading for 200-liter standard carts</li>
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
                                        <th>Feature</th>
                                        <th>Value</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Material</td>
                                        <td>Entirely stainless steel</td>
                                    </tr>
                                    <tr>
                                        <td>Cutting Set</td>
                                        <td>Patented twin cutting set, 5-piece</td>
                                    </tr>
                                    <tr>
                                        <td>Control</td>
                                        <td>Programmable control with touchscreen</td>
                                    </tr>
                                    <tr>
                                        <td>Options</td>
                                        <td>Automatic loading</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <h3>Scope of Delivery:</h3>
                <ul>
                    <li>Extruder Mincer MMG 233-U200</li>
                    <li>Patented twin cutting set</li>
                    <li>3-piece mixing cutting set</li>
                    <li>Tool cart</li>
                </ul>

                <p><em>Interested? Get advice now!</em></p>
            </div>
        </div>
        <!-- Structured Data for SEO -->
        <script type="application/ld+json">
                {
                    "@context": "https://schema.org",
                    "@type": "Product",
                    "name": "MADO Extruder Mincer MMG 233-U200",
                    "description": "Powerful meat mincer for industrial meat processing with patented twin cutting system.",
                    "brand": {
                        "@type": "Brand",
                        "name": "MADO"
                    },
                    "offers": {
                        "@type": "Offer",
                        "priceCurrency": "EUR",
                        "availability": "https://schema.org/InStock",
                        "url": "https://as-technical.de/en/mincers.php"
                    },
                    "image": "https://as-technical.de/Product/MADO/MMG 233-U200.png"
                }
                </script>
    <?php } ?>

    <?php
    // Product 3: Extruder Mincer MMG 235/239/243-U200
    if ($selected_product === null || $selected_product === 'mmg-235') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_mmg235';
        ?>
        <div class="product-container" data-product-id="mmg-235">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/Product/MADO/MMG235-239-243-U200.png" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="MADO Extruder Mincer MMG 235/239/243-U200">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Thumbnails -->
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/MADO/MMG235-239-243-U200.png"
                            alt="MADO Extruder Mincer MMG 235/239/243-U200 Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>Extruder Mincer MMG 235/239/243-U200</h2>
                <p>The <strong>MADO Extruder Mincer MMG 235/239/243-U200</strong> is a series of powerful meat mincers for
                    industrial processing. With a patented twin cutting system and advanced features like a cleaning
                    platform, it optimizes production for the highest demands.</p>

                <h3>Your Benefits:</h3>
                <ul>
                    <li>Entirely made of stainless steel for maximum hygiene</li>
                    <li>Patented twin cutting system for precise processing</li>
                    <li>Infinitely adjustable mixing time and speed</li>
                    <li>Programmable control with touchscreen</li>
                    <li>Optional automatic loading</li>
                    <li>Cleaning platform for easy maintenance</li>
                </ul>

                <h3>Innovative Features:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Features</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Patented twin cutting system, 5-piece cutting set, 3-piece mixing cutting set</li>
                                <li>Electrically locked outlet guard</li>
                                <li>Central mixing shaft</li>
                                <li>Cleaning platform</li>
                                <li>Infinitely adjustable mixing time and speed of feeder and working worms</li>
                                <li>Programmable control with clear touchscreen</li>
                                <li>All drives controlled by frequency inverters</li>
                                <li>Tool cart included as standard</li>
                                <li>Optional automatic loading for 200-liter standard carts</li>
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
                                        <th>Feature</th>
                                        <th>Value</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Material</td>
                                        <td>Entirely stainless steel</td>
                                    </tr>
                                    <tr>
                                        <td>Cutting Set</td>
                                        <td>Patented twin cutting set, 5-piece</td>
                                    </tr>
                                    <tr>
                                        <td>Control</td>
                                        <td>Programmable control with touchscreen</td>
                                    </tr>
                                    <tr>
                                        <td>Options</td>
                                        <td>Automatic loading, cleaning platform</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <h3>Scope of Delivery:</h3>
                <ul>
                    <li>Extruder Mincer MMG 235/239/243-U200</li>
                    <li>Patented twin cutting set</li>
                    <li>3-piece mixing cutting set</li>
                    <li>Tool cart</li>
                    <li>Cleaning platform</li>
                </ul>

                <p><em>Interested? Get advice now!</em></p>
            </div>
        </div>
        <!-- Structured Data for SEO -->
        <script type="application/ld+json">
                {
                    "@context": "https://schema.org",
                    "@type": "Product",
                    "name": "MADO Extruder Mincer MMG 235/239/243-U200",
                    "description": "Powerful meat mincer series for industrial processing with patented twin cutting system.",
                    "brand": {
                        "@type": "Brand",
                        "name": "MADO"
                    },
                    "offers": {
                        "@type": "Offer",
                        "priceCurrency": "EUR",
                        "availability": "https://schema.org/InStock",
                        "url": "https://as-technical.de/en/mincers.php"
                    },
                    "image": "https://as-technical.de/Product/MADO/MMG235-239-243-U200.png"
                }
                </script>
    <?php } ?>

    <?php
    // Product 4: MADO Tool Cart
    if ($selected_product === null || $selected_product === 'werkzeugwagen') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_werkzeugwagen';
        ?>
        <div class="product-container" data-product-id="werkzeugwagen">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/Product/MADO/Werkzeugwagen.png" class="fullscreen-toggle" style="cursor:zoom-in;"
                                alt="MADO Tool Cart">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Thumbnails -->
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/MADO/Werkzeugwagen.png" alt="MADO Tool Cart Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>MADO Tool Cart</h2>
                <p>The <strong>MADO Tool Cart</strong> is the ideal accessory for your meat mincers. It enables easy storage
                    and organization of tools and accessories, made of robust stainless steel.</p>

                <h3>Your Benefits:</h3>
                <ul>
                    <li>Robust stainless steel construction</li>
                    <li>Optimal organization and storage of tools</li>
                    <li>Easy mobility</li>
                    <li>Hygienic and easy to clean</li>
                </ul>

                <h3>Innovative Features:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Features</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Practical storage for cutting sets and accessories</li>
                                <li>Sturdy construction for daily use</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <h3>Technical Specifications:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Technical Specifications</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Material:</strong> Stainless steel</li>
                                <li><strong>Function:</strong> Storage and transport of tools</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <h3>Scope of Delivery:</h3>
                <ul>
                    <li>MADO Tool Cart</li>
                </ul>

                <p><em>Interested? Get advice now!</em></p>
            </div>
        </div>
        <!-- Structured Data for SEO -->
        <script type="application/ld+json">
                {
                    "@context": "https://schema.org",
                    "@type": "Product",
                    "name": "MADO Tool Cart",
                    "description": "Ideal accessory for meat mincers for storage and organization of tools.",
                    "brand": {
                        "@type": "Brand",
                        "name": "MADO"
                    },
                    "offers": {
                        "@type": "Offer",
                        "priceCurrency": "EUR",
                        "availability": "https://schema.org/InStock",
                        "url": "https://as-technical.de/en/mincers.php"
                    },
                    "image": "https://as-technical.de/Product/MADO/Werkzeugwagen.png"
                }
                </script>
    <?php } ?>

    <?php
    // Product 5: Nowicki Automatic Angle Mincer
    if ($selected_product === null || $selected_product === 'nowicki') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_nowicki';
        ?>
        <div class="product-container" data-product-id="nowicki">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/Product/nowicki/fleischwolf/w-200b.png" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="Nowicki Automatic Angle Mincer W-200B">
                        </div>
                        <div class="swiper-slide">
                            <img src="/Product/nowicki/fleischwolf/w-280b.png" class="fullscreen-toggle"
                                style="cursor:zoom-in;" alt="Nowicki Automatic Angle Mincer W-280B">
                        </div>
                        <div class="swiper-slide">
                            <video controls>
                                <source src="/video/W-200B.mp4" type="video/mp4">
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
                        <img src="/Product/nowicki/fleischwolf/w-200b.png"
                            alt="Nowicki Automatic Angle Mincer W-200B Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/Product/nowicki/fleischwolf/w-280b.png"
                            alt="Nowicki Automatic Angle Mincer W-280B Thumbnail">
                    </div>
                    <div class="thumbnail" onclick="changeSlide(2, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
                        <img src="/assets/video.png" alt="Video Thumbnail">
                    </div>
                </div>
            </div>
            <div class="product-info">
                <h2>Nowicki Automatic Angle Mincer</h2>
                <p>The <strong>Nowicki Automatic Angle Mincer</strong> is designed for grinding frozen meat blocks down to
                    -22°C. Recommended for large meat, fish, and pet food processing plants with high efficiency and
                    hygienic design.</p>

                <h3>Your Benefits:</h3>
                <ul>
                    <li>High-quality stainless steel construction</li>
                    <li>High-quality minced meat output</li>
                    <li>High efficiency</li>
                    <li>Grinding chamber and worm made of high-wear-resistant stainless steel</li>
                    <li>Easy to clean</li>
                    <li>Compatible with various loading systems</li>
                </ul>

                <h3>Innovative Features:</h3>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Features</button>
                        <div class="accordion-content">
                            <ul>
                                <li>Two compatible drives for feeder and grinding worms for optimal adjustment</li>
                                <li>High-quality cutting tools in the cutting system</li>
                                <li>Smooth control of the feeder worm</li>
                                <li>Automatic adjustment of feed speed</li>
                                <li>Grinding worm with automatic ejection system</li>
                                <li>Unique grinding worm design, manufactured from a single piece of steel</li>
                                <li>Various types of worms depending on product range</li>
                                <li>Safety system for safe operator work</li>
                                <li>Microprocessor control system for all operating parameters</li>
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
                                        <th>W-200B</th>
                                        <th>W-280B</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Throughput</td>
                                        <td>High throughput</td>
                                        <td>High throughput</td>
                                    </tr>
                                    <tr>
                                        <td>Material</td>
                                        <td>Stainless steel</td>
                                        <td>Stainless steel</td>
                                    </tr>
                                    <tr>
                                        <td>Temperature Range</td>
                                        <td>Down to -22°C</td>
                                        <td>Down to -22°C</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <h3>Scope of Delivery:</h3>
                <ul>
                    <li>Nowicki Automatic Angle Mincer (model of choice)</li>
                    <li>Cutting system</li>
                    <li>Microprocessor control</li>
                </ul>

                <p><em>Interested? Get advice now!</em></p>
            </div>
        </div>
        <!-- Structured Data for SEO -->
        <script type="application/ld+json">
                {
                    "@context": "https://schema.org",
                    "@type": "Product",
                    "name": "Nowicki Automatic Angle Mincer",
                    "description": "Designed for grinding frozen meat blocks down to -22°C for large processing plants.",
                    "brand": {
                        "@type": "Brand",
                        "name": "Nowicki"
                    },
                    "offers": {
                        "@type": "Offer",
                        "priceCurrency": "EUR",
                        "availability": "https://schema.org/InStock",
                        "url": "https://as-technical.de/en/mincers.php"
                    },
                    "image": "https://as-technical.de/Product/nowicki/fleischwolf/w-200b.png"
                }
                </script>
    <?php } ?>

    <?php
    if (!$is_included) {
        ?>
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

            document.addEventListener("DOMContentLoaded", function () {
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
                document.addEventListener("click", function (event) {
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
                    console.error("Bild-Overlay-Element nicht gefunden");
                }
            });
        </script>
        <?php include 'footer.php'; ?>
    </body>

    </html>
<?php } ?>