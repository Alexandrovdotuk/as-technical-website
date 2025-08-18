<?php
// rauchanlagen.php

// Prüfen, ob die Datei direkt aufgerufen wird oder eingebunden
$swiper_id = $GLOBALS['current_swiper_id'] ?? 'mySwiper1';
$is_included = defined('IS_INCLUDED');
// Produkt-ID für selektive Ausgabe
$selected_product = $GLOBALS['selected_product'] ?? null;

if (!$is_included) {
  define('IS_INCLUDED', true);
?>
  <!DOCTYPE html>
  <html>

  <head>
    <meta charset="UTF-8">
    <title>Rauchanlagen & Klimareifeanlagen von Bastra | Service & Beratung</title>
    <meta name="description" content="Entdecken Sie hochwertige Rauchanlagen, Klimareifeanlagen und Kochanlagen von Bastra – mit Service, Reparatur und maßgeschneiderter Beratung für Ihre Produktion." />
    <meta name="keywords" content="Rauchanlagen, Klimareifeanlagen, Kochanlagen, Bastra, Räucheranlagen, Rauchkondensat, Reibrauch, Sägemehl, Hackspan, Service, Angebot, Reparatur, technische Beratung" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  </head>

  <body>
    <?php include 'header.php'; ?>
    <!-- Einführung -->
    <div class="leistungen">
      <h2>Ihre perfekte Rauchkammer – Zuverlässig, Innovativ, Maßgeschneidert</h2>
      <p>Suchen Sie eine Rauchanlage, Klimareifeanlage oder Klimareiferauchanlage, die hält, was sie verspricht? Zusammen mit unserem Partner Bastra, dem renommierten Hersteller hochwertiger Räucheranlagen, bieten wir Ihnen erstklassige Produkte, technischen Support und individuelle Beratung – alles aus einer Hand.</p>
      <p>Warum das so wichtig ist? Damit Ihre Produktion reibungslos startet, müssen werkseitige und bauseitige Komponenten perfekt harmonieren. Wir helfen Ihnen, genau die Lösung zu finden, die zu Ihren Anforderungen passt. Lernen Sie unsere vielfältigen Reifeanlagen, Kochkammern und Rauchanlagen kennen – mit unterschiedlichen Raucherzeugersystemen und Größen für jeden Bedarf!</p>
    </div>

    <div id="image-overlay">
      <img src="" alt="Vollbildansicht Räucheranlage" />
      <video controls style="display: none;"></video>
    </div>
  <?php } ?>

  <?php
  // Produkt 1: Modell 850
  if ($selected_product === null || $selected_product === 'modell-850') {
    $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_modell850';
  ?>
    <div class="product-container" data-product-id="modell-850">
      <div class="product-image">
        <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="Product/Bastra/Modell850.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Flüssigrauch"></div>
            <div class="swiper-slide"><img src="Product/Bastra/Duese.jpg" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Düse"></div>
            <div class="swiper-slide"><img src="Product/Bastra/Profi500.jpg" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Steuerung"></div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
        <div class="thumbnail-container">
          <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="Product/Bastra/Modell850.png" alt="Flüssigrauch"></div>
          <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="Product/Bastra/Duese.jpg" alt="Düse"></div>
          <div class="thumbnail" onclick="changeSlide(2, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="Product/Bastra/Profi500.jpg" alt="Steuerung"></div>
        </div>
      </div>
      <div class="product-info">
        <h2>Modell 850 – Sauberes Räuchern mit Rauchkondensat</h2>
        <p>Entdecken Sie eine innovative Lösung für Ihre Räucherprozesse: Die elektrisch beheizte Räucherkammer Modell 850 nutzt modernste Rauchkondensat-Zerstäubung per Druckluft. Lassen Sie sich von den Vorteilen dieser Technologie überzeugen!</p>
        <h4>Warum diese Rauchtechnologie begeistert:</h4>
        <ul>
          <li><strong>Umweltfreundlich:</strong> Keine Rauchbelästigung für Ihre Nachbarschaft.</li>
          <li><strong>Unkompliziert:</strong> Abluftreinigung? Nicht nötig!</li>
          <li><strong>Flexibel:</strong> Optional mit Schornstein kombinierbar.</li>
          <li><strong>Pflegeleicht:</strong> Wenig Teerbildung – Reinigung leicht gemacht.</li>
          <li><strong>Sicher:</strong> Alle Schadstoffe werden zuverlässig herausgefiltert.</li>
        </ul><br />
        <h4>Ihre Standardausstattung im Überblick:</h4>
        <p>Mit diesen Features starten Sie direkt durch:</p>
        <ul>
          <li>Druckluftschaumreinigung und -befeuchtung (für bauseitigen Kompressor).</li>
          <li>Luftumwälzung mit zwei Geschwindigkeiten für optimale Ergebnisse.</li>
        </ul><br />
        <h4>Gestalten Sie Ihre Anlage individuell:</h4>
        <p>Machen Sie das Modell 850 zu Ihrer perfekten Lösung mit diesen optionalen Highlights:</p>
        <ul>
          <li><strong>Mehr Durchblick:</strong> Anlagentür mit Sichtfenster oder beleuchteter Glastür.</li>
          <li><strong>Präzise Befeuchtung:</strong> Niederdruckdampf (für bauseitige Dampfmaschine).</li>
          <li><strong>Reifepaket:</strong> Langsame Umluftstufe, Frequenzumformer, Kühlverdampfer & exakte Feuchteregelung.</li>
          <li><strong>Rauchvielfalt:</strong> Kombinierbar mit Sägemehl, Hackspan oder Reibrauch – flexibel integriert.</li>
          <li><strong>Smarter Betrieb:</strong> Touch-Panel (7" oder 10,5") mit ProfiNet-Software.</li>
          <li><strong>Komfort:</strong> Automatische Türentriegelung & effiziente Kühldusche.</li>
          <li><strong>Anpassbar:</strong> Klappbare Einfahrschiene für unebene Böden.</li>
        </ul>
        <h4>Technische Daten:</h4>
        <div class="accordion">
          <div class="accordion-item">
            <button class="accordion-header">Technische Daten</button>
            <div class="accordion-content">
              <ul>
                <li><strong>Beheizungsart:</strong> Elektrisch</li>
                <li><strong>Raucherzeuger:</strong> Rauchkondensat</li>
                <li><strong>Maße ohne Tür (B×T×H):</strong> 1220×845×2170 mm</li>
                <li><strong>Erforderliche Raumhöhe min.:</strong> 2350 mm</li>
                <li><strong>Erforderliche Türbreite min.:</strong> 940 mm</li>
                <li><strong>Rauchstocklänge:</strong> 800 mm</li>
                <li><strong>Rauchwagen-Außenmaße (B×T×H):</strong> 830×700×1360 mm</li>
                <li><strong>Beschickungsmengen:</strong> 45–150 kg</li>
              </ul>
            </div>
          </div>
        </div>
        <p><em>Neugierig geworden? Kontaktieren Sie uns für eine maßgeschneiderte Beratung!</em></p>
      </div>
    </div>
  <?php } ?>

  <?php
  // Produkt 2: Modell 851
  if ($selected_product === null || $selected_product === 'modell-851') {
    $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_modell851';
  ?>
    <div class="product-container" data-product-id="modell-851">
      <div class="product-image">
        <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="Product/Bastra/Modell851.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Hackspan"></div>
            <div class="swiper-slide"><img src="Product/Bastra/Profi500.jpg" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Steuerung"></div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
        <div class="thumbnail-container">
          <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="Product/Bastra/Modell851.png" alt="Hackspan"></div>
          <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="Product/Bastra/Profi500.jpg" alt="Steuerung"></div>
        </div>
      </div>
      <div class="product-info">
        <h2>Modell 851 – Kompakt & Geschmackvoll mit Hackspan</h2>
        <p>Erleben Sie die perfekte Kombination aus Effizienz und Aroma: Das Modell 851 ist eine elektrisch beheizte Rauchanlage mit einem clever in der Tür integrierten Hackspan-Raucherzeuger. Lassen Sie sich von dieser platzsparenden Lösung begeistern!</p>
        <h4>Das macht den Hackspan-Raucherzeuger besonders:</h4>
        <ul>
          <li><strong>Platzsparend:</strong> Passt ideal in jede Produktion.</li>
          <li><strong>Unkompliziert:</strong> Einfaches System für schnellen Einsatz.</li>
          <li><strong>Geschmackvoll:</strong> Intensives Raucharoma durch die Verglimmung von Hackspänen.</li>
        </ul>
        <h4>Ihre Standardausstattung auf einen Blick:</h4>
        <p>Diese Features sorgen für einen reibungslosen Start:</p>
        <ul>
          <li>Brandschutzfühler in der Raucherzeugertür für maximale Sicherheit.</li>
          <li>Reinigungssensor zur einfachen Überwachung.</li>
          <li>Druckluftschaumreinigung & -befeuchtung (für bauseitigen Kompressor).</li>
          <li>Zweistufige Luftumwälzung für perfekte Ergebnisse.</li>
        </ul>
        <h4>Machen Sie Ihre Anlage einzigartig:</h4>
        <p>Passen Sie das Modell 851 mit diesen optionalen Extras an Ihre Wünsche an:</p>
        <ul>
          <li><strong>Mehr Übersicht:</strong> Anlagentür mit Sichtfenster oder beleuchteter Glastür.</li>
          <li><strong>Optimale Befeuchtung:</strong> Niederdruckdampf (für bauseitige Dampfmaschine).</li>
          <li><strong>Reifepaket:</strong> Langsame Umluftstufe, Frequenzumformer, Kühlverdampfer & präzise Feuchteregelung.</li>
          <li><strong>Flexibilität:</strong> Kombinierbar mit Sägemehl, Hackspan oder Reibrauch – integriert oder nebenstehend.</li>
          <li><strong>Frische:</strong> Katalysator für saubere Abluft.</li>
          <li><strong>Komfort:</strong> Automatische Türentriegelung & effiziente Kühldusche.</li>
          <li><strong>Anpassbar:</strong> Klappbare Einfahrschiene für unebene Böden.</li>
          <li><strong>Smart:</strong> Touch-Panel (7" oder 10,5") mit ProfiNet-Software.</li>
        </ul>
        <h4>Technische Daten:</h4>
        <div class="accordion">
          <div class="accordion-item">
            <button class="accordion-header">Technische Daten</button>
            <div class="accordion-content">
              <ul>
                <li><strong>Beheizungsart:</strong> Elektrisch</li>
                <li><strong>Raucherzeuger:</strong> Hackspanraucherzeuger in der Tür</li>
                <li><strong>Maße ohne Tür (B×T×H):</strong> 1220×845×2170 mm</li>
                <li><strong>Erforderliche Raumhöhe min.:</strong> 2350 mm</li>
                <li><strong>Erforderliche Türbreite min.:</strong> 940 mm</li>
                <li><strong>Rauchstocklänge:</strong> 800 mm</li>
                <li><strong>Rauchwagen-Außenmaße (B×T×H):</strong> 830×700×1360 mm</li>
                <li><strong>Beschickungsmengen:</strong> 45–150 kg</li>
                <li><strong>Hackspangröße:</strong> 4.0–12.0 mm</li>
              </ul>
            </div>
          </div>
        </div>
        <p><em>Interesse geweckt? Lassen Sie uns gemeinsam Ihre perfekte Lösung finden!</em></p>
      </div>
    </div>
  <?php } ?>

  <?php
  // Produkt 3: Modell 1201
  if ($selected_product === null || $selected_product === 'modell-1201') {
    $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_modell1201';
  ?>
    <div class="product-container" data-product-id="modell-1201">
      <div class="product-image">
        <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="Product/Bastra/Modell1201.PNG" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Reibrauch"></div>
            <div class="swiper-slide"><img src="Product/Bastra/Profi700.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Steuerung"></div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
        <div class="thumbnail-container">
          <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="Product/Bastra/Modell1201.png" alt="Reibrauch"></div>
          <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="Product/Bastra/Profi700.png" alt="Steuerung"></div>
        </div>
      </div>
      <div class="product-info">
        <h2>Bastramat Modell 1201 RR – Effizientes Räuchern mit Reibrauch</h2>
        <p>Erleben Sie höchste Effizienz und Qualität: Der Bastramat Modell 1201 RR ist eine vielseitige Rauchanlage mit einem integrierten Reibrauch-Raucherzeuger in der Tür. Diese Lösung bietet Flexibilität für verschiedene Heizungsarten und überzeugt mit erstklassigen Ergebnissen!</p>
        <h4>Warum der Reibrauch-Raucherzeuger überzeugt:</h4>
        <ul>
          <li><strong>Vielseitig:</strong> Kompatibel mit elektrischer, HD-Dampf-, Gas- oder Öl-Heizung.</li>
          <li><strong>Einfach zu bedienen:</strong> Reibrauch-System für schnelle und präzise Rauchentwicklung.</li>
          <li><strong>Qualität:</strong> Perfektes Raucharoma durch den Einsatz von Reibrauch.</li>
        </ul>
        <h4>Ihre Standardausstattung im Überblick:</h4>
        <p>Diese Features garantieren einen zuverlässigen Start:</p>
        <ul>
          <li>Brandschutzsystem für maximale Sicherheit.</li>
          <li>Reinigungssensor für einfache Wartung.</li>
          <li>Druckluftschaumreinigung & -befeuchtung (für bauseitigen Kompressor).</li>
          <li>Zweistufige Luftumwälzung für optimale Ergebnisse.</li>
        </ul>
        <h4>Gestalten Sie Ihre Anlage individuell:</h4>
        <p>Machen Sie den Modell 1201 RR zu Ihrer maßgeschneiderten Lösung mit diesen Optionen:</p>
        <ul>
          <li><strong>Bessere Sicht:</strong> Anlagentür mit Sichtfenster oder beleuchteter Glastür.</li>
          <li><strong>Präzise Befeuchtung:</strong> Niederdruckdampf (für bauseitige Dampfmaschine).</li>
          <li><strong>Reifepaket:</strong> Langsame Umluftstufe, Frequenzumformer, Kühlverdampfer & präzise Feuchteregelung.</li>
          <li><strong>Flexibilität:</strong> Kombinierbar mit verschiedenen Rauchquellen – integriert oder separat.</li>
          <li><strong>Frische:</strong> Katalysator für saubere Abluft.</li>
          <li><strong>Komfort:</strong> Automatische Türentriegelung & effiziente Kühldusche.</li>
          <li><strong>Anpassbar:</strong> Klappbare Einfahrschiene für unebene Böden.</li>
          <li><strong>Smart:</strong> Touch-Panel (7" oder 10,5") mit ProfiNet-Software.</li>
        </ul>
        <h4>Technische Daten:</h4>
        <div class="accordion">
          <div class="accordion-item">
            <button class="accordion-header">Technische Daten</button>
            <div class="accordion-content">
              <ul>
                <li><strong>Beheizungsart:</strong> Elektrisch, HD-Dampf, Gas, Öl</li>
                <li><strong>Raucherzeuger:</strong> Reibrauch in der Tür</li>
                <li><strong>Maße ohne Tür (B×T×H) – Elektrische Heizung:</strong> 1395×990×2525 mm</li>
                <li><strong>Maße ohne Tür (B×T×H) – Gas/Ölheizung:</strong> 1395×990×2580 mm</li>
                <li><strong>Erforderliche Raumhöhe min.:</strong> 2630 mm</li>
                <li><strong>Erforderliche Türbreite min.:</strong> 1120 mm</li>
                <li><strong>Rauchstocklänge:</strong> 900 mm</li>
                <li><strong>Rauchwagen-Außenmaße (B×T×H):</strong> 980×800×1500 mm</li>
                <li><strong>Beschickungsmengen:</strong> 60–220 kg</li>
                <li><strong>Balkenmaße BxT:</strong> 80×80 mm</li>
              </ul>
            </div>
          </div>
        </div>
        <p><em>Interesse geweckt? Kontaktieren Sie uns für eine maßgeschneiderte Beratung!</em></p>
      </div>
    </div>
  <?php } ?>

  <?php
  // Produkt 4: Modell 1501
  if ($selected_product === null || $selected_product === 'modell-1501') {
    $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_modell1501';
  ?>
    <div class="product-container" data-product-id="modell-1501">
      <div class="product-image">
        <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="Product/Bastra/Modell1501.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Sägemehl"></div>
            <div class="swiper-slide"><img src="Product/Bastra/Tür GS.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Tür"></div>
            <div class="swiper-slide"><img src="Product/Bastra/Profi700.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Steuerung"></div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
        <div class="thumbnail-container">
          <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="Product/Bastra/Modell1501.png" alt="Sägemehl"></div>
          <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="Product/Bastra/Tür GS.png" alt="Tür"></div>
          <div class="thumbnail" onclick="changeSlide(2, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="Product/Bastra/Profi700.png" alt="Steuerung"></div>
        </div>
      </div>
      <div class="product-info">
        <h2>Bastramat Modell 1501 UF/GS – Präzises Räuchern mit Sägemehl</h2>
        <p>Erleben Sie professionelles Räuchern auf höchstem Niveau: Der Bastramat Modell 1501 UF/GS ist eine vielseitige Rauchanlage mit einem integrierten Sägemehlraucherzeuger in der Tür. Diese Lösung bietet Flexibilität und erstklassige Ergebnisse für verschiedene Heizungsarten!</p>
        <h4>Warum der Sägemehlraucherzeuger überzeugt:</h4>
        <ul>
          <li><strong>Vielseitig:</strong> Kompatibel mit elektrischer, ND-Dampf-, Gas- oder Öl-Heizung.</li>
          <li><strong>Einfach zu bedienen:</strong> Sägemehl-System für präzise Rauchentwicklung.</li>
          <li><strong>Qualität:</strong> Intensives Raucharoma durch die optimale Verwendung von Sägemehl.</li>
        </ul>
        <h4>Ihre Standardausstattung im Überblick:</h4>
        <p>Diese Features garantieren einen zuverlässigen Start:</p>
        <ul>
          <li>Brandschutzsystem für maximale Sicherheit.</li>
          <li>Reinigungssensor für einfache Wartung.</li>
          <li>Druckluftschaumreinigung & -befeuchtung (für bauseitigen Kompressor).</li>
          <li>Zweistufige Luftumwälzung für optimale Ergebnisse.</li>
        </ul>
        <h4>Gestalten Sie Ihre Anlage individuell:</h4>
        <p>Machen Sie den Modell 1501 UF/GS zu Ihrer maßgeschneiderten Lösung mit diesen Optionen:</p>
        <ul>
          <li><strong>Bessere Sicht:</strong> Anlagentür mit Sichtfenster oder beleuchteter Glastür.</li>
          <li><strong>Präzise Befeuchtung:</strong> Niederdruckdampf (für bauseitige Dampfmaschine).</li>
          <li><strong>Reifepaket:</strong> Langsame Umluftstufe, Frequenzumformer, Kühlverdampfer & präzise Feuchteregelung.</li>
          <li><strong>Flexibilität:</strong> Kombinierbar mit verschiedenen Rauchquellen – integriert oder separat.</li>
          <li><strong>Frische:</strong> Katalysator für saubere Abluft.</li>
          <li><strong>Komfort:</strong> Automatische Türentriegelung & effiziente Kühldusche.</li>
          <li><strong>Anpassbar:</strong> Klappbare Einfahrschiene für unebene Böden.</li>
          <li><strong>Smart:</strong> Touch-Panel (7" oder 10,5") mit ProfiNet-Software.</li>
        </ul>
        <h4>Technische Daten:</h4>
        <div class="accordion">
          <div class="accordion-item">
            <button class="accordion-header">Technische Daten</button>
            <div class="accordion-content">
              <ul>
                <li><strong>Beheizungsart:</strong> Elektrisch, ND-Dampf, Gas, Öl</li>
                <li><strong>Raucherzeuger:</strong> Sägemehlraucherzeuger in der Tür</li>
                <li><strong>Maße ohne Tür (B×T×H) – Elektrische Heizung:</strong> 1500×1140×2820 mm</li>
                <li><strong>Maße ohne Tür (B×T×H) – Gas/Ölheizung:</strong> 1500×1140×2890 mm</li>
                <li><strong>Erforderliche Raumhöhe min.:</strong> 3500 mm</li>
                <li><strong>Erforderliche Türbreite min.:</strong> 1200 mm</li>
                <li><strong>Rauchstocklänge:</strong> 900/1000 mm</li>
                <li><strong>Rauchwagen-Außenmaße (B×T×H):</strong> 930×840×1690 mm oder 1030×840×1690 mm</li>
                <li><strong>Beschickungsmengen:</strong> 80–300 kg</li>
                <li><strong>Sägemehlgröße:</strong> 0,1–3 mm</li>
              </ul>
            </div>
          </div>
        </div>
        <p><em>Interesse geweckt? Kontaktieren Sie uns für ein maßgeschneidertes Angebot!</em></p>
      </div>
    </div>
  <?php } ?>

  <?php
  // Produkt 5: Modell 2000
  if ($selected_product === null || $selected_product === 'modell-2000') {
    $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_modell2000';
  ?>
    <div class="product-container" data-product-id="modell-2000">
      <div class="product-image">
        <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="Product/Bastra/Modell2000.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Hackspan"></div>
            <div class="swiper-slide"><img src="Product/Bastra/Profi700.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Steuerung"></div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
        <div class="thumbnail-container">
          <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="Product/Bastra/Modell2000.png" alt="Hackspan"></div>
          <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="Product/Bastra/Profi700.png" alt="Steuerung"></div>
        </div>
      </div>
      <div class="product-info">
        <h2>Bastramat Modell 2000 TF – Leistungsstarkes Räuchern mit Hackspan</h2>
        <p>Erleben Sie professionelle Räuchertechnologie auf höchstem Niveau: Der Bastramat Modell 2000 TF ist eine leistungsstarke Rauchanlage mit einem nebenstehenden Hackspanraucherzeuger, die sich durch Flexibilität und erstklassige Ergebnisse auszeichnet. Ideal für große Produktionen!</p>
        <h4>Warum der Hackspanraucherzeuger überzeugt:</h4>
        <ul>
          <li><strong>Leistungsstark:</strong> Geeignet für große Beschickungsmengen von 110–400 kg.</li>
          <li><strong>Vielseitig:</strong> Kompatibel mit elektrischer, ND-Dampf-, HD-Dampf-, Gas- oder Öl-Heizung.</li>
          <li><strong>Qualität:</strong> Intensives Raucharoma durch den Einsatz von Hackspänen.</li>
        </ul>
        <h4>Ihre Standardausstattung im Überblick:</h4>
        <p>Diese Features garantieren einen zuverlässigen Start:</p>
        <ul>
          <li>Brandschutzsystem für maximale Sicherheit.</li>
          <li>Reinigungssensor für einfache Wartung.</li>
          <li>Druckluftschaumreinigung & -befeuchtung (für bauseitigen Kompressor).</li>
          <li>Zweistufige Luftumwälzung für optimale Ergebnisse.</li>
        </ul>
        <h4>Gestalten Sie Ihre Anlage individuell:</h4>
        <p>Machen Sie den Modell 2000 TF zu Ihrer maßgeschneiderten Lösung mit diesen Optionen:</p>
        <ul>
          <li><strong>Bessere Sicht:</strong> Anlagentür mit Sichtfenster oder beleuchteter Glastür.</li>
          <li><strong>Präzise Befeuchtung:</strong> Niederdruckdampf (für bauseitige Dampfmaschine).</li>
          <li><strong>Reifepaket:</strong> Langsame Umluftstufe, Frequenzumformer, Kühlverdampfer & präzise Feuchteregelung.</li>
          <li><strong>Flexibilität:</strong> Kombinierbar mit verschiedenen Rauchquellen – integriert oder separat.</li>
          <li><strong>Frische:</strong> Katalysator für saubere Abluft.</li>
          <li><strong>Komfort:</strong> Automatische Türentriegelung & effiziente Kühldusche.</li>
          <li><strong>Anpassbar:</strong> Klappbare Einfahrschiene für unebene Böden.</li>
          <li><strong>Smart:</strong> Touch-Panel (7" oder 10,5") mit ProfiNet-Software.</li>
        </ul>
        <h4>Technische Daten:</h4>
        <div class="accordion">
          <div class="accordion-item">
            <button class="accordion-header">Technische Daten</button>
            <div class="accordion-content">
              <ul>
                <li><strong>Beheizungsart:</strong> Elektrisch, ND-Dampf, HD-Dampf, Gas, Öl</li>
                <li><strong>Raucherzeuger:</strong> Hackspanraucherzeuger nebenstehend</li>
                <li><strong>Maße ohne Tür (B×T×H) – Elektrische Heizung:</strong> 1500×1230×3455 mm</li>
                <li><strong>Maße ohne Tür (B×T×H) – Gas/Ölheizung:</strong> 1500×1230×3155 mm</li>
                <li><strong>Maße ohne Tür (B×T×H) – HD/ND:</strong> 1500×1230×3245 mm</li>
                <li><strong>Erforderliche Raumhöhe min.:</strong> 4000 mm</li>
                <li><strong>Erforderliche Türbreite min.:</strong> 1300 mm</li>
                <li><strong>Rauchstocklänge:</strong> 1000 mm</li>
                <li><strong>Rauchwagen-Außenmaße (B×T×H):</strong> 1030×1000×1900 mm</li>
                <li><strong>Beschickungsmengen:</strong> 110–400 kg</li>
                <li><strong>Hackspangröße:</strong> 4.0–12.0 mm</li>
              </ul>
            </div>
          </div>
        </div>
        <p><em>Interesse geweckt? Kontaktieren Sie uns für ein maßgeschneidertes Angebot!</em></p>
      </div>
    </div>
  <?php } ?>

  <?php
  // Produkt 6: Smart 500
  if ($selected_product === null || $selected_product === 'smart-500') {
    $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_smart500';
  ?>
    <div class="product-container" data-product-id="smart-500">
      <div class="product-image">
        <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="Product/Bastra/SmartBullauge.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Smart 500"></div>
            <div class="swiper-slide"><img src="Product/Bastra/SmartBlack.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Smart 500"></div>
            <div class="swiper-slide"><img src="Product/Bastra/Smart.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Smart 500"></div>
            <div class="swiper-slide"><img src="Product/Bastra/Profi500.jpg" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Steuerung"></div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
        <div class="thumbnail-container">
          <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="Product/Bastra/SmartBullauge.png" alt="Smart 500"></div>
          <div class="thumbnail" onclick="changeSlide(1, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="Product/Bastra/SmartBlack.png" alt="Smart 500"></div>
          <div class="thumbnail" onclick="changeSlide(2, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="Product/Bastra/Smart.png" alt="Smart 500"></div>
          <div class="thumbnail" onclick="changeSlide(3, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="Product/Bastra/Profi500.jpg" alt="Steuerung"></div>
        </div>
      </div>
      <div class="product-info">
        <h2>Smart 500 – Ihr Alleskönner für Frische & Genuss</h2>
        <p>Bringen Sie Geschmack und Vielseitigkeit direkt an Ihre Theke! Der Smart 500 von BASTRA ist die perfekte Universalanlage für klassische Räucherwaren und mehr – ob Kalt- oder Heißräuchern, Erwärmen, Trocknen, Brühen oder Braten. Mit intuitiver Bedienung und patentierter Rauchkondensat-Technologie wird Räuchern so einfach wie nie zuvor. Lassen Sie sich inspirieren!</p>
        <h4>Warum der Smart 500 begeistert:</h4>
        <ul>
          <li><strong>Vielseitig:</strong> Räuchern, Braten, Trocknen – alles in einem Gerät.</li>
          <li><strong>Intuitiv:</strong> Einfache Steuerung für schnelle Ergebnisse.</li>
          <li><strong>Innovativ:</strong> Patentiertes Rauchkondensat statt herkömmlicher Raucherzeugung.</li>
          <li><strong>Frische:</strong> Perfekt für Ihre Theke – direkt zum Genießen.</li>
        </ul>
        <h4>Serienausstattung:</h4>
        <ul>
          <li>BASTRA-Rauchkondensatsystem</li>
          <li>Temperaturbereich bis 180°C</li>
          <li>Vollautomatische Druckluftschäumreinigung zum Anschluss an bauseitigen Kompressor</li>
          <li>Integriertes Aufnahmegestell mit 8 Etagen für Rauchstöcke mit einer Länge von 570 mm sowie für GN 2/1 und GN 1/1</li>
          <li>Behälter oder Roste</li>
          <li>Sichtfenster</li>
          <li>Innenraumbeleuchtung</li>
          <li>Eingebaute Kühldusche</li>
          <li>Touchpanel-Steuerung BASTRAprof500 direkt in die Kopffläche eingebaut</li>
        </ul>
        <h4>Sonderausstattung:</h4>
        <ul>
          <li>Glastür (Sicherheitsglas)</li>
          <li>Kühlverdampfer zum Anschluss an bauseitige Kühlmaschine</li>
          <li>Temperaturbereich bis 230°C mit hitzebeständiger Glastür</li>
          <li>3. Umluftstufe zum Reifen</li>
          <li>Sonderlackierung, Kundenlogo</li>
        </ul>
        <h4>Technische Daten:</h4>
        <div class="accordion">
          <div class="accordion-item">
            <button class="accordion-header">Technische Daten</button>
            <div class="accordion-content">
              <ul>
                <li><strong>Beheizungsart:</strong> Elektrisch</li>
                <li><strong>Raucherzeuger:</strong> Clean Smoke</li>
                <li><strong>Maße (B×T×H):</strong> 980×1020×2000 mm</li>
                <li><strong>Erforderliche Raumhöhe min.:</strong> 2020 mm</li>
                <li><strong>Kochrauminhalt:</strong> 430 Liter</li>
                <li><strong>Erforderliche Türbreite min.:</strong> 1100 mm</li>
                <li><strong>Rauchstocklänge:</strong> 570 mm</li>
                <li><strong>Beschickungsmengen:</strong> 35–110 kg</li>
                <li><strong>Heizleistung:</strong> 15 kW</li>
              </ul>
            </div>
          </div>
        </div>
        <p><em>Bereit für den nächsten Schritt in Ihrer Küche? Kontaktieren Sie uns und entdecken Sie die Möglichkeiten!</em></p>
      </div>
    </div>
  <?php } ?>

  <?php
  // Produkt 7: Klima-Reife-Rauchanlage
  if ($selected_product === null || $selected_product === 'klimareife') {
    $local_swiper_id = $is_included ? $swiper_id : 'mySwiper_klimareife';
  ?>
    <div class="product-container" data-product-id="klimareife">
      <div class="product-image">
        <div class="swiper <?php echo htmlspecialchars($local_swiper_id); ?>">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="Product/Bastra/Klimareife.png" class="fullscreen-toggle" style="cursor:zoom-in;" alt="Klima-Reife"></div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
        <div class="thumbnail-container">
          <div class="thumbnail" onclick="changeSlide(0, '<?php echo htmlspecialchars($local_swiper_id); ?>')"><img src="Product/Bastra/Klimareife.png" alt="Klima-Reife"></div>
        </div>
      </div>
      <div class="product-info">
        <h2>Klima-Reife-Rauchanlage – Geschmackvoll Reifen, Perfekt Räuchern</h2>
        <p>Verleihen Sie Ihren Roh- und Dauerwaren unvergleichlichen Geschmack! Die Klima-Reife-Rauchanlagen von BASTRA sind Ihre Lösung für präzises Reifen, Trocknen, Räuchern und Nachreifen. Dank modernster Technologie schaffen sie ein ideales Klima für einen schonenden Reifeprozess – und bieten dabei jede Menge Platz. Entdecken Sie, wie Ihre Produkte neue Höhen erreichen!</p>
        <h4>Das macht die Anlage unschlagbar:</h4>
        <ul>
          <li><strong>Präzise Klimatisierung:</strong> Perfekte Bedingungen für geschmackvolle Ergebnisse.</li>
          <li><strong>Schonend:</strong> Sorgfältiger Reifeprozess für höchste Qualität.</li>
          <li><strong>Raumwunder:</strong> Viel Platz für Ihre Waren – flexibel und effizient.</li>
          <li><strong>Vielseitig:</strong> Reifen, Räuchern oder Nachreifen – alles in einem System.</li>
        </ul>
        <h4>Enorme Kapazität für Ihre Bedürfnisse:</h4>
        <p>Passen Sie die Anlage an Ihre Produktion an:</p>
        <ul>
          <li><strong>Reifen & Räuchern:</strong> Bis zu 36 Wagen bei +10°C bis +30°C (3-reihige Aufstellung).</li>
          <li><strong>Nachreifen:</strong> Bis zu 120 Wagen bei +10°C bis +20°C (8-reihige Aufstellung).</li>
        </ul>
        <p><em>Bereit für erstklassige Ergebnisse? Kontaktieren Sie uns für Ihre maßgeschneiderte Lösung!</em></p>
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