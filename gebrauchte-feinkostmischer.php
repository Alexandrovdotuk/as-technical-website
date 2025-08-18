<?php
// gebrauchte_feinkostmischer.php

// Prüfen, ob die Datei direkt aufgerufen wird oder eingebunden
$swiper_id = $GLOBALS['current_swiper_id'] ?? 'mySwiper1';
$is_included = defined('IS_INCLUDED');
// Produkt-ID für selektive Ausgabe
$selected_product = $GLOBALS['selected_product'] ?? null;

if (!$is_included) {
  define('IS_INCLUDED', true);
?>
  <!DOCTYPE html>
  <html lang="de">

  <head>
    <meta charset="UTF-8">
    <title>Feinkostmischer gebraucht</title>
    <meta name="description" content="Entdecken Sie den gebrauchten Feinkostmischer Vakona FM 60 – generalüberholt, zuverlässig und vielseitig für Metzgereien und Lebensmittelproduktion" />
    <meta name="keywords" content="angebot,mengenmischer,feinkostmischer,tumbler,generalüberholt,metzgereibedarf,metzgereimaschinen,vakona" />
    <meta name="robots" content="index, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/styles/swiper-bundle.min.css" />
    <link rel="stylesheet" href="/styles/swiperpic.css" />
    
  </head>

  <body>
    <?php include 'header.php'; ?>
    <!-- Einführung -->
    <div class="leistungen">
      <h2>Ihr perfekter gebrauchter Feinkostmischer</h2>
      <p>Entdecken Sie unseren generalüberholten Vakona FM 60 Feinkostmischer, ideal für Metzgereien und Lebensmittelproduktion. Diese vielseitige Maschine eignet sich perfekt zum Mischen und Mengen von Salaten, Fleischwaren, Fisch, Geflügel und Convenience-Produkten. Mit unserer Expertise in Wartung und Reparatur bieten wir Ihnen eine zuverlässige Lösung für Ihre Produktionsanforderungen.</p>
      <p>Kontaktieren Sie uns für ein maßgeschneidertes Angebot oder technische Beratung!</p>
    </div>
    <div id="image-overlay">
      <img src="" alt="Vollbildansicht Feinkostmischer" />
      <video controls style="display: none;"></video>
    </div>
  <?php } ?>

  <?php
  // Produkt: Vakona FM 60
  if ($selected_product === null || $selected_product === 'vakona-fm60') {
    $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_vakonaFM60';
  ?>
    <div class="product-container" data-product-id="vakona-fm60">
      <div class="product-image">
        <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="/Product/gebraucht/feinkostmischer/vakona1.JPG" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Vakona FM 60 Feinkostmischer Ansicht 1">
            </div>
            <div class="swiper-slide">
              <img src="/Product/gebraucht/feinkostmischer/vakona2.JPG" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Vakona FM 60 Feinkostmischer Ansicht 2">
            </div>
            <div class="swiper-slide">
              <img src="/Product/gebraucht/feinkostmischer/vakona3.JPG" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Vakona FM 60 Feinkostmischer Ansicht 3">
            </div>
            <div class="swiper-slide">
              <img src="/Product/gebraucht/feinkostmischer/vakona4.JPG" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Vakona FM 60 Feinkostmischer Ansicht 4">
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div>
        </div>
        <!-- Miniaturansichten -->
        <div class="thumbnail-container">
          <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
            <img src="/Product/gebraucht/feinkostmischer/vakona1.JPG" alt="Vakona FM 60 Miniatur 1">
          </div>
          <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
            <img src="/Product/gebraucht/feinkostmischer/vakona2.JPG" alt="Vakona FM 60 Miniatur 2">
          </div>
          <div class="thumbnail" onclick="changeSlide(2, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
            <img src="/Product/gebraucht/feinkostmischer/vakona3.JPG" alt="Vakona FM 60 Miniatur 3">
          </div>
          <div class="thumbnail" onclick="changeSlide(3, '<?php echo htmlspecialchars($local_swiper_id); ?>')">
            <img src="/Product/gebraucht/feinkostmischer/vakona4.JPG" alt="Vakona FM 60 Miniatur 4">
          </div>
        </div>
      </div>
      <div class="product-info">
        <h2>Vakona FM 60 Feinkostmischer</h2>
        <p>Zum Verkauf steht ein gebrauchter und generalüberholter <strong>Vakona FM 60 Feinkostmischer</strong> aus dem Baujahr 2018. Diese vielseitige Maschine ist ideal für das Mischen und Mengen von Lebensmitteln wie Salaten, Fleischwaren, Fisch, Geflügel sowie Convenience-Produkten in Metzgereien und Lebensmittelproduktionen.</p>

        <h4>Ihre Vorteile:</h4>
        <ul>
          <li>Vielseitig einsetzbar für diverse Lebensmittel</li>
          <li>Generalüberholt und sofort einsatzbereit</li>
          <li>Manuell kippbarer 60-Liter-Behälter</li>
          <li>Variable Armgeschwindigkeiten für flexible Anwendungen</li>
          <li>Zwei gebremste Räder mit Feststellern für Mobilität</li>
          <li>Füllkapazität von 5 kg bis 40 kg, je nach Produkt</li>
        </ul>

        <h4>Technische Daten:</h4>
        <div class="accordion">
          <div class="accordion-item">
            <button class="accordion-header">Technische Daten</button>
            <div class="accordion-content">
              <ul>
                <li><strong>Baujahr:</strong> 2018</li>
                <li><strong>Behältervolumen:</strong> 60 Liter (manuell kippbar)</li>
                <li><strong>Füllkapazität:</strong> 5–40 kg (je nach Produkt)</li>
                <li><strong>Armgeschwindigkeiten:</strong> Variabel</li>
                <li><strong>Mobilität:</strong> Zwei gebremste Räder mit Feststellern</li>
                <li><strong>Zustand:</strong> Generalüberholt, voll funktionsgeprüft</li>
              </ul>
            </div>
          </div>
        </div>

        <h4>Service und Beratung:</h4>
        <p>Wir bieten umfassenden Service, Reparatur und technische Beratung für Ihren Feinkostmischer. Kontaktieren Sie uns für maßgeschneiderte Angebote und Unterstützung!</p>
        <p><em>Interesse? Lassen Sie sich jetzt beraten!</em></p>
      </div>
    </div>
    <!-- Strukturierte Daten für SEO -->
    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "Product",
        "name": "Vakona FM 60 Feinkostmischer",
        "description": "Generalüberholter gebrauchter Feinkostmischer Vakona FM 60 für Metzgereien und Lebensmittelproduktion.",
        "category": "Gebrauchte Anlagen",
        "image": "https://as-technical.de/Product/gebraucht/feinkostmischer/vakona1.JPG",
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
      // Initialisiere Swiper für jedes Produkt
      var swiper_vakonaFM60 = new Swiper('.mySwiper_vakonaFM60', {
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
        // Initialisiere alle Akkordeons
        document.querySelectorAll('.accordion-header').forEach(button => {
          button.addEventListener('click', () => {
            const content = button.nextElementSibling;
            const isOpen = content.style.display === 'block';

            // Schließe alle anderen offenen Inhalte
            document.querySelectorAll('.accordion-content').forEach(item => {
              item.style.display = 'none';
              item.previousElementSibling.classList.remove('active');
            });

            // Öffne oder schließe das aktuelle Inhaltselement
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