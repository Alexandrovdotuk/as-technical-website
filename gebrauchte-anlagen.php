<?php
// gebrauchte-anlagen.php

// Kategorie aus URL lesen
$category = $_GET['category'] ?? 'Gebraucht';

// Zuordnung von Kategorien zu Produkt-Dateien und spezifischen Produkten
$category_to_files = [
    'Gebraucht' => [
        ['file' => 'gebrauchte-abschwarter.php', 'product' => 'weber-asb600'],
        ['file' => 'gebrauchte-feinkostmischer.php', 'product' => 'vakona-fm60'],
        ['file' => 'gebrauchte-fleischwolf.php', 'product' => 'bizerba'],
        ['file' => 'gebrauchte-injektor.php', 'product' => 'retus'],


    ],
];

// Produkt-Dateien für die aktuelle Kategorie
$product_files = $category_to_files[$category] ?? [];

// Eindeutige Liste der PHP-Dateien (Artikelgruppen) erstellen
$article_groups = [];
foreach ($product_files as $entry) {
    $file = $entry['file'];
    if (!in_array($file, $article_groups)) {
        $article_groups[] = $file;
    }
}

// Zuordnung von Dateinamen zu Anzeigenamen
$display_names = [
    'gebrauchte-rauchanlagen.php' => 'Rauchanlagen',
    'gebrauchte-abschwarter.php' => 'Abschwarter',
    'gebrauchte-feinkostmischer.php' => 'Feinkostmischer',
    'gebrauchte-fleischwolf.php' => 'Fleischwolf',
    'gebrauchte-injektor.php' => 'Pökelinjektor',


];

// Funktion, um den Anzeigenamen zu erhalten
function getDisplayName($file, $display_names)
{
    return $display_names[$file] ?? str_replace('.php', '', $file);
}

// Dynamische Metadaten generieren
$title = "Gebrauchte Anlagen | Generalüberholt";
$description = "Entdecken Sie generalüberholte gebrauchte Anlagen für die Lebensmittelverarbeitung. Zuverlässige und individualisierbare Lösungen für Ihre Produktion.";
$keywords = "gebrauchte Anlagen, generalüberholt, Metzgereimaschinen, Lebensmittelverarbeitung, Rauchanlagen, Abschwarter";

// Beispiel für spezifische Metadaten basierend auf dem ersten Produkt
if (!empty($product_files)) {
    $first_product_file = $product_files[0]['file'];
    $first_product_id = $product_files[0]['product'] ?? null;
    switch ($first_product_file) {
        case 'gebrauchte_rauchanlagen.php':
            $title = "Gebrauchte Rauchanlagen | BASTRA B2000 & mehr";
            $description = "Hochwertige generalüberholte Rauchanlagen wie die BASTRA B2000 – zuverlässig und individualisierbar.";
            $keywords = "gebrauchte Rauchanlage, BASTRA B2000, generalüberholt, Metzgereimaschinen";
            break;
        case 'gebrauchte_abschwarter.php':
            $title = "Gebrauchte Abschwarter | Weber ASB 600/1 & mehr";
            $description = "Generalüberholte Bandabschwarter wie der Weber ASB 600/1 für effiziente Fleischverarbeitung.";
            $keywords = "gebrauchter Abschwarter, Weber ASB 600, generalüberholt, Metzgereimaschinen";
            break;
        case 'gebrauchte_feinkostmischer.php':
            $title = "Vakona FM 60 Feinkostmischer";
            $description = "Entdecken Sie den gebrauchten Feinkostmischer Vakona FM 60 – generalüberholt, zuverlässig und vielseitig für Metzgereien und Lebensmittelproduktion";
            $keywords = "angebot,mengenmischer,feinkostmischer,tumbler,generalüberholt,metzgereibedarf,metzgereimaschinen,vakona";
            break;
    }
}

// Basis-URL für kanonische Links
$base_url = "https://as-technical.de";
$canonical_url = $base_url . "/Gebraucht";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="keywords" content="<?php echo $keywords; ?>">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="swiperpic.css">

</head>

<body>
    <?php include 'header.php'; ?>

    <!-- Breadcrumb-Navigation -->
    <nav class="breadcrumb">
        <a href="/"></a> <span></span>
    </nav>

    <!-- Kategorie-Einführung -->
    <div class="category-intro">
        <h1>Gebrauchte Anlagen</h1>
        <p>Entdecken Sie unser Sortiment an generalüberholten gebrauchten Anlagen für die Lebensmittelverarbeitung. Von Rauchanlagen bis hin zu Abschwartern bieten wir zuverlässige und individualisierbare Lösungen.</p>
    </div>

    <!-- Produktnavigation -->
    <?php if (!empty($article_groups)) : ?>
        <div class="product-nav">
            <h3>Artikelgruppen</h3>
            <ul>
                <?php foreach ($article_groups as $group) :
                    $group_id = str_replace('.php', '', $group);
                    $group_name = getDisplayName($group, $display_names);
                ?>
                    <li><a href="#section-<?php echo htmlspecialchars($group_id); ?>"><?php echo htmlspecialchars($group_name); ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <!-- Image overlay -->
    <div id="image-overlay">
        <img src="" alt="Vollbildansicht des Produkts" />
        <video controls style="display: none;"></video>
    </div>

    <?php
    // Produkt-Blöcke einbinden
    if (!empty($product_files)) {
        $current_group = '';
        foreach ($product_files as $index => $entry) {
            $file = $entry['file'];
            $product_id = $entry['product'] ?? null;
            $swiper_id = 'mySwiper' . ($index + 1);

            // Neue Artikelgruppe starten
            if ($file !== $current_group) {
                if ($current_group !== '') {
                    echo '</div>';
                }
                $group_id = str_replace('.php', '', $file);
                $group_name = getDisplayName($file, $display_names);
                echo '<div class="article-group" id="section-' . htmlspecialchars($group_id) . '">';
                echo '<h2>' . htmlspecialchars($group_name) . '</h2>';
                $current_group = $file;
            }

            if (file_exists($file)) {
                define('IS_INCLUDED', true);
                $GLOBALS['current_swiper_id'] = $swiper_id;
                $GLOBALS['selected_product'] = $product_id;
                include $file;
            } else {
                echo '<p>Produktseite ' . htmlspecialchars($file) . ' nicht gefunden.</p>';
            }

            // Strukturierte Daten für jedes Produkt
            if ($product_id) {
                $schema_name = htmlspecialchars($product_id);
                $schema_description = "Generalüberholte gebrauchte Anlage für die Lebensmittelverarbeitung.";
                $schema_image = "https://as-technical.de/Product/gebraucht/" . str_replace('.php', '', $file) . "/image.jpg";
    ?>
                <script type="application/ld+json">
                    {
                        "@context": "https://schema.org",
                        "@type": "Product",
                        "name": "<?php echo $schema_name; ?>",
                        "description": "<?php echo $schema_description; ?>",
                        "category": "Gebrauchte Anlagen",
                        "image": "<?php echo $schema_image; ?>",
                        "brand": {
                            "@type": "Brand",
                            "name": "<?php echo ($file === 'gebrauchte_rauchanlagen.php' ? 'BASTRA' : ($file === 'gebrauchte_abschwarter.php' ? 'Weber' : '')); ?>"
                        }
                    }
                </script>
    <?php
            }
        }
        // Schließe die letzte Gruppe
        if ($current_group !== '') {
            echo '</div>';
        }
    } else {
        echo '<div class="category-intro"><p>Keine gebrauchten Anlagen verfügbar.</p></div>';
    }
    ?>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="swiperpic.js"></script>
    <?php include 'footer.php'; ?>

</body>

</html>