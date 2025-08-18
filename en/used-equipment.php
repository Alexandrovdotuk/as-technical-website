<?php
// used-equipment.php

// Read category from URL
$category = $_GET['category'] ?? 'used';

// Mapping of categories to product files and specific products
$category_to_files = [

    'used' => [
        ['file' => 'used-derinders.php', 'product' => 'weber-asb600'],
        ['file' => 'used-delicatessen-mixers.php', 'product' => 'vakona-fm60'],
        ['file' => 'used-meat-grinders.php', 'product' => 'bizerba'],
        ['file' => 'used-injectors.php', 'product' => 'retus'],
    ],
];

// Product files for the current category
$product_files = $category_to_files[$category] ?? [];

// Create a unique list of PHP files (article groups)
$article_groups = [];
foreach ($product_files as $entry) {
    $file = $entry['file'];
    if (!in_array($file, $article_groups)) {
        $article_groups[] = $file;
    }
}

// Mapping of file names to display names
$display_names = [
    'used-smokehouses.php' => 'Smokehouses',
    'used-derinders.php' => 'Derinders',
    'used-delicatessen-mixers.php' => 'Delicatessen Mixers',
    'used-meat-grinders.php' => 'Meat Grinders',
    'used-injectors.php' => 'Brine Injectors',
];

// Function to get the display name
function getDisplayName($file, $display_names)
{
    return $display_names[$file] ?? str_replace('.php', '', $file);
}

// Generate dynamic metadata
$title = "Used Equipment | Refurbished";
$description = "Discover refurbished used equipment for food processing. Reliable and customizable solutions for your production.";
$keywords = "used equipment, refurbished, butcher machines, food processing, smokehouses, derinders";

// Example for specific metadata based on the first product
if (!empty($product_files)) {
    $first_product_file = $product_files[0]['file'];
    $first_product_id = $product_files[0]['product'] ?? null;
    switch ($first_product_file) {
        case 'used_smokehouses.php':
            $title = "Used Smokehouses | BASTRA B2000 & more";
            $description = "High-quality refurbished smokehouses like the BASTRA B2000 – reliable and customizable.";
            $keywords = "used smokehouse, BASTRA B2000, refurbished, butcher machines";
            break;
        case 'used_derinders.php':
            $title = "Used Derinders | Weber ASB 600/1 & more";
            $description = "Refurbished belt derinders like the Weber ASB 600/1 for efficient meat processing.";
            $keywords = "used derinder, Weber ASB 600, refurbished, butcher machines";
            break;
        case 'used_delicatessen_mixers.php':
            $title = "Vakona FM 60 Delicatessen Mixer";
            $description = "Discover the used Vakona FM 60 delicatessen mixer – refurbished, reliable, and versatile for butcher shops and food production";
            $keywords = "offer, mixer, delicatessen mixer, tumbler, refurbished, butcher supplies, butcher machines, vakona";
            break;
    }
}

// Base URL for canonical links
$base_url = "https://as-technical.de";
$canonical_url = $base_url . "/en/Used";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="keywords" content="<?php echo $keywords; ?>">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../styles.css">
</head>

<body>
    <?php include 'header.php'; ?>

    <!-- Breadcrumb Navigation -->
    <nav class="breadcrumb">
        <a href="/en/"></a> <span></span>
    </nav>

    <!-- Category Introduction -->
    <div class="category-intro">
        <h1>Used Equipment</h1>
        <p>Discover our range of refurbished used equipment for food processing. From smokehouses to derinders, we offer reliable and customizable solutions.</p>
    </div>

    <!-- Product Navigation -->
    <?php if (!empty($article_groups)) : ?>
        <div class="product-nav">
            <h3>Article Groups</h3>
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
        <img src="" alt="Full-screen view of the product" />
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
    <script src="../swiperpic.js"></script>
    <?php include 'footer.php'; ?>

</body>

</html>