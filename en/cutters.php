<?php
// cutters.php

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
        <title>Cutters from MADO, Nowicki & Düker-REX | Service & Consulting</title>
        <meta name="description" content="We offer high-quality cutters from MADO, Nowicki, and Düker-REX for your food production, along with service, repair, and technical consulting tailored to your requirements." />
        <meta name="keywords" content="sales, offer, cutter, industrial cutter, MADO, Nowicki, Düker-REX, Blizzard" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    </head>

    <body>
        <?php include 'header.php'; ?>
        <!-- Introduction -->
        <div class="leistungen">
            <h1>Your Solution for Industrial Cutters – Precision and Service</h1>
            <p>Need a powerful cutter for your food production? We offer cutting-edge technology for precise cutting results with our high-quality cutters from MADO, Nowicki, and our new partner Düker-REX. From compact models like the Blizzard series to fully automatic industrial cutters, benefit from our service, repair, and personalized consulting.</p>
            <p>We configure your system to meet your specific needs, ensuring optimal results. Let our expertise convince you!</p>
        </div>
        <div id="image-overlay">
            <img src="" alt="Full-screen view of cutter" />
            <video controls style="display: none;"></video>
        </div>
    <?php } ?>

    <!-- Product 1: Blizzard 50 SLF P30-P -->
    <?php
    if ($selected_product === null || $selected_product === 'blizzard-50') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_blizzard50';
    ?>
        <div class="product-container" data-product-id="blizzard-50">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <!-- Placeholder for images -->
                        <div class="swiper-slide"><img src="../Product/REX/Blizzard50.jpeg" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Blizzard 50 SLF P30-P"></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/REX/Blizzard50.jpeg" alt="Blizzard 50 SLF P30-P Thumbnail"></div>
                </div>
            </div>
            <div class="product-info">
                <h2>Blizzard 50 SLF P30-P – Compact Precision for Craftsmanship</h2>
                <p>The Blizzard 50 SLF P30-P from Düker-REX is a high-performance cutter designed for precision in small to medium-sized butcheries and food production. With a 50-liter bowl capacity, it offers versatility and efficiency for your meat processing needs.</p>
                <h4>Features:</h4>
                <ul>
                    <li>6-blade knife head (Düker SDU system)</li>
                    <li>Stepless speed control via potentiometer</li>
                    <li>Stainless steel bowl with water drain</li>
                    <li>Digital display for temperature and speeds</li>
                    <li>Low-vibration rubber-metal feet</li>
                    <li>Protective cover with lifting aid</li>
                    <li>Easy to clean, compact design</li>
                </ul>
                <h4>Technical Data:</h4>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Technical Data</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Bowl Capacity:</strong> 50 liters</li>
                                <li><strong>Knife Shaft Speed:</strong> 50 – 5000 RPM (stepless)</li>
                                <li><strong>Mixing Speed:</strong> 50 – 500 RPM (forward/reverse)</li>
                                <li><strong>Bowl Speeds:</strong> 5 / 11 / 16 RPM</li>
                                <li><strong>Motor Power:</strong> 11 kW (knife shaft), 0.25 kW (bowl)</li>
                                <li><strong>Power Supply:</strong> 400 V / 50 Hz / 35 A slow-blow</li>
                                <li><strong>Weight:</strong> approx. 730 kg</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <h4>Downloads:</h4>
                <ul>
                    <li><a href="../Product/Dueker-REX/Flyer-RK50-70-mit-Wasserablauf-2018-blau.pdf" target="_blank">Flyer Blizzard 50/70 (2018)</a></li>
                    <li><a href="../Product/Dueker-REX/flyer_rk50-75_faltseite_mit_wasserablauf__2016.pdf" target="_blank">Flyer Blizzard 50/70 (2016)</a></li>
                </ul>
                <p><em>Interested? Contact us for personalized advice!</em></p>
            </div>
        </div>
    <?php } ?>

    <!-- Product 2: Blizzard 70 SLF P30-P -->
    <?php
    if ($selected_product === null || $selected_product === 'blizzard-70') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_blizzard70';
    ?>
        <div class="product-container" data-product-id="blizzard-70">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <!-- Placeholder for images -->
                        <div class="swiper-slide"><img src="../Product/REX/Blizzard70.jpeg" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Blizzard 70 SLF P30-P"></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/REX/Blizzard70.jpeg" alt="Blizzard 70 SLF P30-P Thumbnail"></div>
                </div>
            </div>
            <div class="product-info">
                <h2>Blizzard 70 SLF P30-P – Versatile and Robust</h2>
                <p>The Blizzard 70 SLF P30-P from Düker-REX is designed for larger butcheries and food production facilities. With a 70-liter bowl capacity, it combines power and hygiene for modern meat processing.</p>
                <h4>Features:</h4>
                <ul>
                    <li>Optional: 3-blade knife head (SDS system)</li>
                    <li>Manually swiveling unloader</li>
                    <li>Fully stainless steel, polished finish</li>
                    <li>Integrated water drain</li>
                    <li>Robust membrane keypad</li>
                    <li>Easy to clean and hygienic</li>
                </ul>
                <h4>Technical Data:</h4>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Technical Data</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Bowl Capacity:</strong> 70 liters</li>
                                <li><strong>Knife Shaft Speed:</strong> 50 – 5000 RPM</li>
                                <li><strong>Mixing Speed:</strong> 50 – 500 RPM</li>
                                <li><strong>Bowl Speeds:</strong> 5 / 11 / 16 RPM</li>
                                <li><strong>Motor Power:</strong> 22 kW (knife shaft), 0.39 kW (bowl)</li>
                                <li><strong>Power Supply:</strong> 400 V / 50 Hz / 63 A slow-blow</li>
                                <li><strong>Weight:</strong> approx. 1300 kg</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <h4>Downloads:</h4>
                <ul>
                    <li><a href="../Product/Dueker-REX/Flyer-RK50-70-mit-Wasserablauf-2018-blau.pdf" target="_blank">Flyer Blizzard 50/70 (2018)</a></li>
                    <li><a href="../Product/Dueker-REX/flyer_rk50-75_faltseite_mit_wasserablauf__2016.pdf" target="_blank">Flyer Blizzard 50/70 (2016)</a></li>
                </ul>
                <p><em>Ready to enhance your production? Contact us!</em></p>
            </div>
        </div>
    <?php } ?>

    <!-- Product 3: Blizzard 130 SLF P30-P -->
    <?php
    if ($selected_product === null || $selected_product === 'blizzard-130') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_blizzard130';
    ?>
        <div class="product-container" data-product-id="blizzard-130">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <!-- Placeholder for images -->
                        <div class="swiper-slide"><img src="../Product/REX/Blizzard130.jpeg" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Blizzard 130 SLF P30-P"></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/REX/Blizzard130.jpeg" alt="Blizzard 130 SLF P30-P Thumbnail"></div>
                </div>
            </div>
            <div class="product-info">
                <h2>Blizzard 130 SLF P30-P – Industrial High Performance</h2>
                <p>The Blizzard 130 SLF P30-P from Düker-REX is built for industrial-scale meat processing. With a 130-liter bowl capacity, it delivers exceptional power and efficiency for large production volumes.</p>
                <h4>Features:</h4>
                <ul>
                    <li>6-blade knife head (Düker system)</li>
                    <li>Digital display for temperature and speeds</li>
                    <li>Hydraulically swiveling unloader</li>
                    <li>Optional: Touchscreen control (Perfect-Cut)</li>
                    <li>Designed for industrial high performance</li>
                    <li>Hygienic, maintenance-friendly, and powerful</li>
                </ul>
                <h4>Technical Data:</h4>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Technical Data</button>
                        <div class="accordion-content">
                            <ul>
                                <li><strong>Bowl Capacity:</strong> 130 liters</li>
                                <li><strong>Knife Shaft Speed:</strong> 50 – 5000 RPM</li>
                                <li><strong>Mixing Speed:</strong> 50 – 500 RPM</li>
                                <li><strong>Bowl Speeds:</strong> 3 stages</li>
                                <li><strong>Motor Power:</strong> 45 kW (knife shaft)</li>
                                <li><strong>Power Supply:</strong> 400 V / 50 Hz / 100 A slow-blow</li>
                                <li><strong>Weight:</strong> 2150 kg</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <h4>Downloads:</h4>
                <ul>
                    <li><a href="../Product/Dueker-REX/Flyer-Kutter-50-70-130-2019-1.pdf" target="_blank">Flyer Blizzard 50/70/130 (2019)</a></li>
                </ul>
                <p><em>Interested in industrial solutions? Contact us!</em></p>
            </div>
        </div>
    <?php } ?>

    <!-- Product 4: MSM 769 SL/VA -->
    <?php
    if ($selected_product === null || $selected_product === 'msm-769') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_msm769';
    ?>
        <div class="product-container" data-product-id="msm-769">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="../Product/MADO/MSM-769-SL.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="MADO MSM 769 SL Cutter"></div>
                        <div class="swiper-slide"><img src="../Product/MADO/MSM-769-VA.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="MADO MSM 769 VA Cutter"></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/MADO/MSM-769-SL.png" alt="MSM 769 SL Thumbnail"></div>
                    <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/MADO/MSM-769-VA.png" alt="MSM 769 VA Thumbnail"></div>
                </div>
            </div>
            <div class="product-info">
                <h2>MSM 769 SL / MSM 769 VA</h2>
                <p>This cutter features a programmable control system that enables the management of recipes and processing steps. All target values are entered via a user-friendly touchscreen display. The shutdown can be set based on either temperature or the number of bowl revolutions.</p>
                <h4>Features:</h4>
                <ul>
                    <li>Up to 8 quick-select buttons for knife shaft speed and 5 bowl stages, freely configurable.</li>
                    <li>Stepless speed control for cutting and mixing.</li>
                    <li>Temperature measured with the highest accuracy directly in the product flow.</li>
                    <li>Hydraulic cutting hood and noise protection cover with a spice hatch.</li>
                    <li>Automatic unloading and loading devices.</li>
                    <li>Drain opening in the cutter bowl.</li>
                    <li>To maintain consistent blade tension during temperature changes, a hydraulic tension nut is used.</li>
                    <li>The VA version additionally features an automatic hydraulic vacuum cover, with vacuum settings controlled via the touchscreen.</li>
                    <li>Maintenance-free bearings eliminate the need for lubricating the knife shaft, reducing the risk of foreign material in the product.</li>
                </ul>
                <p><em>Interested? Contact us for more details!</em></p>
            </div>
        </div>
    <?php } ?>

    <!-- Product 5: MSK 761/764 SL -->
    <?php
    if ($selected_product === null || $selected_product === 'msk-761-764') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_msk761764';
    ?>
        <div class="product-container" data-product-id="msk-761-764">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="../Product/MADO/MSK 761 SL.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="MADO MSK 761 SL Cutter"></div>
                        <div class="swiper-slide"><img src="../Product/MADO/MSM-764-SL.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="MADO MSM 764 SL Cutter"></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/MADO/MSK 761 SL.png" alt="MSK 761 SL Thumbnail"></div>
                    <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/MADO/MSM-764-SL.png" alt="MSM 764 SL Thumbnail"></div>
                </div>
            </div>
            <div class="product-info">
                <h2>MSK 761 SL / MSM 764 SL</h2>
                <h4>Standard Features:</h4>
                <ul>
                    <li>Touchscreen display for entering all target values, with digital indicators for knife shaft speed, number of bowl revolutions, temperature, and shutdown settings for temperature and bowl revolutions.</li>
                    <li>Stepless speed control of the knife shaft for cutting and mixing (including reverse).</li>
                    <li>Two speed stages for bowl revolutions.</li>
                    <li>Cleaning mode for bowl rotation.</li>
                    <li>Programmable control system for storing recipes with processing steps.</li>
                    <li>Temperature sensor for the highest measurement accuracy directly in the product flow.</li>
                </ul>
                <p><em>Interested? Contact us for more details!</em></p>
            </div>
        </div>
    <?php } ?>

    <!-- Product 6: MSM 765 SL -->
    <?php
    if ($selected_product === null || $selected_product === 'msm-765') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_msm765';
    ?>
        <div class="product-container" data-product-id="msm-765">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="../Product/MADO/MSM-765-SL.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="MADO MSM 765 SL Cutter"></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/MADO/MSM-765-SL.png" alt="MSM 765 SL Thumbnail"></div>
                </div>
            </div>
            <div class="product-info">
                <h2>MSM 765 SL</h2>
                <p>This cutter is equipped with a touchscreen display that allows the input of all target values. The display shows indicators for knife shaft speed, number of bowl revolutions, temperature, and shutdown settings for temperature and bowl revolutions.</p>
                <p><em>Interested? Contact us for more details!</em></p>
            </div>
        </div>
    <?php } ?>

    <!-- Product 7: MSM 766/767 SL -->
    <?php
    if ($selected_product === null || $selected_product === 'msm-766-767') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_msm766767';
    ?>
        <div class="product-container" data-product-id="msm-766-767">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="../Product/MADO/MSM-767-SL.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="MADO MSM 766/767 SL Cutter"></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/MADO/MSM-767-SL.png" alt="MSM 766/767 SL Thumbnail"></div>
                </div>
            </div>
            <div class="product-info">
                <h2>MSM 766/767 SL</h2>
                <h4>Standard Features:</h4>
                <ul>
                    <li>Programmable control system for recipes and processing steps.</li>
                    <li>Touchscreen display for entering all target values.</li>
                    <li>Shutdown based on temperature or bowl revolutions.</li>
                    <li>Up to 8 quick-select buttons for knife shaft speed (freely configurable).</li>
                    <li>5 bowl stages (freely configurable).</li>
                    <li>Temperature sensor for the highest measurement accuracy directly in the product flow.</li>
                    <li>Stepless speed control of the knife shaft for cutting and mixing.</li>
                    <li>6-blade knife head.</li>
                    <li>Drain opening in the cutter bowl.</li>
                    <li>Hydraulic cutting hood.</li>
                </ul>
                <p><em>Interested? Contact us for more details!</em></p>
            </div>
        </div>
    <?php } ?>

    <!-- Product 8: Nowicki Industrial Cutter -->
    <?php
    if ($selected_product === null || $selected_product === 'nowicki-cutter') {
        $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_nowickicutter';
    ?>
        <div class="product-container" data-product-id="nowicki-cutter">
            <div class="product-image">
                <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="../Product/nowicki/cutter/kn-60.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Nowicki KN-60 Cutter"></div>
                        <div class="swiper-slide"><img src="../Product/nowicki/cutter/kn-90.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Nowicki KN-90 Cutter"></div>
                        <div class="swiper-slide"><img src="../Product/nowicki/cutter/kn-125-hl.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Nowicki KN-125 HL Cutter"></div>
                        <div class="swiper-slide"><img src="../Product/nowicki/cutter/kn-125-s.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Nowicki KN-125 S Cutter"></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbnail-container">
                    <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/nowicki/cutter/kn-60.png" alt="KN-60 Thumbnail"></div>
                    <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/nowicki/cutter/kn-90.png" alt="KN-90 Thumbnail"></div>
                    <div class="thumbnail" onclick="changeSlide(2, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/nowicki/cutter/kn-125-hl.png" alt="KN-125 HL Thumbnail"></div>
                    <div class="thumbnail" onclick="changeSlide(3, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="../Product/nowicki/cutter/kn-125-s.png" alt="KN-125 S Thumbnail"></div>
                </div>
            </div>
            <div class="product-info">
                <h2>Nowicki Industrial Cutter</h2>
                <p>Achieve precise cutting results with our industrial cutters, ideal for producing sausages and other meat products.</p>
                <p><em>Interested? Contact us for more details!</em></p>
            </div>
        </div>
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