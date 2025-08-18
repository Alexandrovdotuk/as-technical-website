<?php
// /en/product.php

// Sprache definieren
define('LANGUAGE', 'en');

// Kategorie aus URL lesen
$category = isset($_GET['category']) ? trim(strtolower($_GET['category'])) : '';
error_log("en/product.php - Kategorie: $category");

// Mapping von Kategorien zu Produkt-Dateien und spezifischen Produkten
$category_to_files = [
    'meat' => [
        ['file' => 'cooking-kettles.php', 'product' => '2000plus'],
        ['file' => 'cooking-kettles.php', 'product' => 'kdn-50-120-150'],
        ['file' => 'cooking-kettles.php', 'product' => 'kdn-200'],
        ['file' => 'convection-ovens.php'],
        ['file' => 'packagingmachines.php', 'product' => 'zermat-tbg'],/* packagingmachines.php */
        ['file' => 'packagingmachines.php', 'product' => 'zermat-tbg-plus'],
        ['file' => 'packagingmachines.php', 'product' => 'zermat-jazzvac-mini'],
        ['file' => 'packagingmachines.php', 'product' => 'zermat-bluesvac-52'],
        ['file' => 'packagingmachines.php', 'product' => 'zermat-cv100'],
        ['file' => 'packagingmachines.php', 'product' => 'zermat-cv200'],
        ['file' => 'packagingmachines.php', 'product' => 'zermat-cv1000'],
        ['file' => 'packagingmachines.php', 'product' => 'zermat-dc750'],
        ['file' => 'packagingmachines.php', 'product' => 'zermat-dc950'],
        ['file' => 'mincers.php', 'product' => 'nowicki'],
        ['file' => 'mincers.php', 'product' => 'mew-724'],
        ['file' => 'mincers.php', 'product' => 'mmg-233'],
        ['file' => 'mincers.php', 'product' => 'mmg-235'],
        ['file' => 'mincers.php', 'product' => 'werkzeugwagen'],
        ['file' => 'slicers.php', 'product' => 'master-3020'],
        ['file' => 'slicers.php', 'product' => 'master-2720'],
        ['file' => 'slicers.php', 'product' => 'master-3310w'],
        ['file' => 'slicers.php', 'product' => 'master-3370'],
        ['file' => 'slicers.php', 'product' => 'va-802'],
        ['file' => 'slicers.php', 'product' => 'va-804'],
        ['file' => 'slicers.php', 'product' => 'va-804fb'],
        ['file' => 'bandsaws.php', 'product' => 'mkb-753'],
        ['file' => 'cooling-systems.php', 'product' => 'Wudu'],
        ['file' => 'fine-food-mixers.php', 'product' => 'fm-60-250-stl'],
        ['file' => 'fine-food-mixers.php', 'product' => 'vm-250-500-stl'],
        ['file' => 'fine-food-mixers.php', 'product' => 'vm-750-1800-stl'],
        ['file' => 'fine-food-mixers.php', 'product' => 'nowicki-vakuum-tumbler'],
        ['file' => 'dicing-machines.php', 'product' => 'dicr-classic'],
        ['file' => 'dicing-machines.php', 'product' => 'dicr-comfort'],
        ['file' => 'dicing-machines.php', 'product' => 'dicr-capacity'],
        ['file' => 'dicing-machines.php', 'product' => 'shreddr'],
        ['file' => 'derinding-machines.php', 'product' => 'derindr-classic-450'],
        ['file' => 'derinding-machines.php', 'product' => 'derindr-comfort-450'],
        ['file' => 'sausage-separators.php', 'product' => 'trenn-fix'],
        ['file' => 'washing-machines.php', 'product' => 'kistenwaschmaschine'],
        ['file' => 'smoking-systems.php', 'product' => 'modell-850'],
        ['file' => 'smoking-systems.php', 'product' => 'modell-851'],
        ['file' => 'smoking-systems.php', 'product' => 'modell-1201'],
        ['file' => 'smoking-systems.php', 'product' => 'modell-1501'],
        ['file' => 'smoking-systems.php', 'product' => 'modell-2000'],
        ['file' => 'smoking-systems.php', 'product' => 'smart-500'],
        ['file' => 'smoking-systems.php', 'product' => 'klimareife'],
        ['file' => 'cutters.php', 'product' => 'msm-769'],
        ['file' => 'cutters.php', 'product' => 'msk-761-764'],
        ['file' => 'cutters.php', 'product' => 'msm-765'],
        ['file' => 'cutters.php', 'product' => 'msm-766-767'],
        ['file' => 'cutters.php', 'product' => 'nowicki-cutter'],
    ],
    'poultry' => [
        ['file' => 'cooking-kettles.php', 'product' => '2000plus'],
        ['file' => 'cooking-kettles.php', 'product' => 'kdn-50-120-150'],
        ['file' => 'cooking-kettles.php', 'product' => 'kdn-200'],
        ['file' => 'convection-ovens.php'],
        ['file' => 'packagingmachines.php', 'product' => 'zermat-tbg'],/* packagingmachines.php */
        ['file' => 'packagingmachines.php', 'product' => 'zermat-tbg-plus'],
        ['file' => 'packagingmachines.php', 'product' => 'zermat-jazzvac-mini'],
        ['file' => 'packagingmachines.php', 'product' => 'zermat-bluesvac-52'],
        ['file' => 'packagingmachines.php', 'product' => 'zermat-cv100'],
        ['file' => 'packagingmachines.php', 'product' => 'zermat-cv200'],
        ['file' => 'packagingmachines.php', 'product' => 'zermat-cv1000'],
        ['file' => 'packagingmachines.php', 'product' => 'zermat-dc750'],
        ['file' => 'packagingmachines.php', 'product' => 'zermat-dc950'],
        ['file' => 'mincers.php', 'product' => 'nowicki'],
        ['file' => 'mincers.php', 'product' => 'mew-724'],
        ['file' => 'mincers.php', 'product' => 'mmg-233'],
        ['file' => 'mincers.php', 'product' => 'mmg-235'],
        ['file' => 'mincers.php', 'product' => 'werkzeugwagen'],
        ['file' => 'slicers.php', 'product' => 'master-3020'],
        ['file' => 'slicers.php', 'product' => 'master-2720'],
        ['file' => 'slicers.php', 'product' => 'master-3310w'],
        ['file' => 'slicers.php', 'product' => 'master-3370'],
        ['file' => 'slicers.php', 'product' => 'va-802'],
        ['file' => 'slicers.php', 'product' => 'va-804'],
        ['file' => 'slicers.php', 'product' => 'va-804fb'],
        ['file' => 'bandsaws.php', 'product' => 'mkb-753'],
        ['file' => 'cooling-systems.php', 'product' => 'Wudu'],
        ['file' => 'fine-food-mixers.php', 'product' => 'fm-60-250-stl'],
        ['file' => 'fine-food-mixers.php', 'product' => 'vm-250-500-stl'],
        ['file' => 'fine-food-mixers.php', 'product' => 'vm-750-1800-stl'],
        ['file' => 'fine-food-mixers.php', 'product' => 'nowicki-vakuum-tumbler'],
        ['file' => 'dicing-machines.php', 'product' => 'dicr-classic'],
        ['file' => 'sausage-separators.php', 'product' => 'trenn-fix'],
        ['file' => 'washing-machines.php', 'product' => 'kistenwaschmaschine'],
        ['file' => 'smoking-systems.php', 'product' => 'modell-850'],
        ['file' => 'smoking-systems.php', 'product' => 'modell-851'],
        ['file' => 'smoking-systems.php', 'product' => 'modell-1201'],
        ['file' => 'smoking-systems.php', 'product' => 'modell-1501'],
        ['file' => 'smoking-systems.php', 'product' => 'modell-2000'],
        ['file' => 'smoking-systems.php', 'product' => 'smart-500'],
        ['file' => 'smoking-systems.php', 'product' => 'klimareife'],
        ['file' => 'cutters.php', 'product' => 'msm-769'],
        ['file' => 'cutters.php', 'product' => 'msk-761-764'],
        ['file' => 'cutters.php', 'product' => 'msm-765'],
        ['file' => 'cutters.php', 'product' => 'msm-766-767'],
        ['file' => 'cutters.php', 'product' => 'nowicki-cutter'],
    ],
    'veggie' => [
        ['file' => 'cooking-kettles.php', 'product' => '2000plus'],
        ['file' => 'cooking-kettles.php', 'product' => 'kdn-50-120-150'],
        ['file' => 'cooking-kettles.php', 'product' => 'kdn-200'],
        ['file' => 'convection-ovens.php'],
        ['file' => 'packagingmachines.php', 'product' => 'zermat-tbg'],/* packagingmachines.php */
        ['file' => 'packagingmachines.php', 'product' => 'zermat-tbg-plus'],
        ['file' => 'packagingmachines.php', 'product' => 'zermat-jazzvac-mini'],
        ['file' => 'packagingmachines.php', 'product' => 'zermat-bluesvac-52'],
        ['file' => 'packagingmachines.php', 'product' => 'zermat-cv100'],
        ['file' => 'packagingmachines.php', 'product' => 'zermat-cv200'],
        ['file' => 'packagingmachines.php', 'product' => 'zermat-cv1000'],
        ['file' => 'packagingmachines.php', 'product' => 'zermat-dc750'],
        ['file' => 'packagingmachines.php', 'product' => 'zermat-dc950'],
        ['file' => 'mincers.php', 'product' => 'nowicki'],
        ['file' => 'mincers.php', 'product' => 'mew-724'],
        ['file' => 'mincers.php', 'product' => 'mmg-233'],
        ['file' => 'mincers.php', 'product' => 'mmg-235'],
        ['file' => 'mincers.php', 'product' => 'werkzeugwagen'],
        ['file' => 'slicers.php', 'product' => 'master-3020'],
        ['file' => 'slicers.php', 'product' => 'master-2720'],
        ['file' => 'slicers.php', 'product' => 'master-3310w'],
        ['file' => 'slicers.php', 'product' => 'master-3370'],
        ['file' => 'slicers.php', 'product' => 'va-802'],
        ['file' => 'slicers.php', 'product' => 'va-804'],
        ['file' => 'slicers.php', 'product' => 'va-804fb'],
        ['file' => 'cooling-systems.php', 'product' => 'Wudu'],
      
        
        ['file' => 'dicing-machines.php', 'product' => 'shreddr'],
       
        ['file' => 'sausage-separators.php', 'product' => 'trenn-fix'],
        ['file' => 'washing-machines.php', 'product' => 'kistenwaschmaschine'],
        ['file' => 'smoking-systems.php', 'product' => 'modell-850'],
        ['file' => 'smoking-systems.php', 'product' => 'modell-851'],
        ['file' => 'smoking-systems.php', 'product' => 'modell-1201'],
        ['file' => 'smoking-systems.php', 'product' => 'modell-1501'],
        ['file' => 'smoking-systems.php', 'product' => 'modell-2000'],
        ['file' => 'smoking-systems.php', 'product' => 'smart-500'],
        ['file' => 'smoking-systems.php', 'product' => 'klimareife'],
        ['file' => 'cutters.php', 'product' => 'msm-769'],
        ['file' => 'cutters.php', 'product' => 'msk-761-764'],
        ['file' => 'cutters.php', 'product' => 'msm-765'],
        ['file' => 'cutters.php', 'product' => 'msm-766-767'],
        ['file' => 'cutters.php', 'product' => 'nowicki-cutter'],
    ],
    'convenience' => [
        ['file' => 'cooking-kettles.php', 'product' => '2000plus'],
        ['file' => 'cooking-kettles.php', 'product' => 'kdn-50-120-150'],
        ['file' => 'cooking-kettles.php', 'product' => 'kdn-200'],
        ['file' => 'convection-ovens.php'],
    ],
    'pet-food' => [
        ['file' => 'packagingmachines.php', 'product' => 'zermat-tbg'],/* packagingmachines.php */
        ['file' => 'packagingmachines.php', 'product' => 'zermat-tbg-plus'],
        ['file' => 'packagingmachines.php', 'product' => 'zermat-jazzvac-mini'],
        ['file' => 'packagingmachines.php', 'product' => 'zermat-bluesvac-52'],
        ['file' => 'packagingmachines.php', 'product' => 'zermat-cv100'],
        ['file' => 'packagingmachines.php', 'product' => 'zermat-cv200'],
        ['file' => 'packagingmachines.php', 'product' => 'zermat-cv1000'],
        ['file' => 'packagingmachines.php', 'product' => 'zermat-dc750'],
        ['file' => 'packagingmachines.php', 'product' => 'zermat-dc950'],
        ['file' => 'smoking-systems.php', 'product' => 'smart-500'],
        ['file' => 'smoking-systems.php', 'product' => 'modell-850'],
        ['file' => 'smoking-systems.php', 'product' => 'modell-851'],
        ['file' => 'smoking-systems.php', 'product' => 'modell-1201'],
        ['file' => 'smoking-systems.php', 'product' => 'modell-1501'],
        ['file' => 'smoking-systems.php', 'product' => 'modell-2000'],
        ['file' => 'cooking-kettles.php', 'product' => '2000plus'],
        ['file' => 'cooking-kettles.php', 'product' => 'kdn-50-120-150'],
        ['file' => 'cooking-kettles.php', 'product' => 'kdn-200'],
        ['file' => 'mincers.php', 'product' => 'nowicki'],
        ['file' => 'mincers.php', 'product' => 'mew-724'],
        ['file' => 'mincers.php', 'product' => 'mmg-233'],
        ['file' => 'mincers.php', 'product' => 'mmg-235'],
        ['file' => 'mincers.php', 'product' => 'werkzeugwagen'],
    ],
    'fish' => [
        ['file' => 'packagingmachines.php', 'product' => 'zermat-tbg'],/* packagingmachines.php */
        ['file' => 'packagingmachines.php', 'product' => 'zermat-tbg-plus'],
        ['file' => 'packagingmachines.php', 'product' => 'zermat-jazzvac-mini'],
        ['file' => 'packagingmachines.php', 'product' => 'zermat-bluesvac-52'],
        ['file' => 'packagingmachines.php', 'product' => 'zermat-cv100'],
        ['file' => 'packagingmachines.php', 'product' => 'zermat-cv200'],
        ['file' => 'packagingmachines.php', 'product' => 'zermat-cv1000'],
        ['file' => 'packagingmachines.php', 'product' => 'zermat-dc750'],
        ['file' => 'packagingmachines.php', 'product' => 'zermat-dc950'],
        ['file' => 'cooking-kettles.php', 'product' => '2000plus'],
        ['file' => 'cooking-kettles.php', 'product' => 'kdn-50-120-150'],
        ['file' => 'cooking-kettles.php', 'product' => 'kdn-200'],
        ['file' => 'convection-ovens.php'],
       
        ['file' => 'slicers.php', 'product' => 'master-3020'],
        ['file' => 'slicers.php', 'product' => 'master-2720'],
        ['file' => 'slicers.php', 'product' => 'master-3310w'],
        ['file' => 'slicers.php', 'product' => 'master-3370'],
        ['file' => 'slicers.php', 'product' => 'va-802'],
        ['file' => 'slicers.php', 'product' => 'va-804'],
        ['file' => 'slicers.php', 'product' => 'va-804fb'],
       
        ['file' => 'washing-machines.php', 'product' => 'kistenwaschmaschine'],
        ['file' => 'smoking-systems.php', 'product' => 'modell-850'],
        ['file' => 'smoking-systems.php', 'product' => 'modell-851'],
        ['file' => 'smoking-systems.php', 'product' => 'modell-1201'],
        ['file' => 'smoking-systems.php', 'product' => 'modell-1501'],
        ['file' => 'smoking-systems.php', 'product' => 'modell-2000'],
        ['file' => 'smoking-systems.php', 'product' => 'smart-500'],
        ['file' => 'smoking-systems.php', 'product' => 'klimareife'],
        
    ],
    'cheese' => [
        ['file' => 'packagingmachines.php', 'product' => 'zermat-tbg'],/* packagingmachines.php */
        ['file' => 'packagingmachines.php', 'product' => 'zermat-tbg-plus'],
        ['file' => 'packagingmachines.php', 'product' => 'zermat-jazzvac-mini'],
        ['file' => 'packagingmachines.php', 'product' => 'zermat-bluesvac-52'],
        ['file' => 'packagingmachines.php', 'product' => 'zermat-cv100'],
        ['file' => 'packagingmachines.php', 'product' => 'zermat-cv200'],
        ['file' => 'packagingmachines.php', 'product' => 'zermat-cv1000'],
        ['file' => 'packagingmachines.php', 'product' => 'zermat-dc750'],
        ['file' => 'packagingmachines.php', 'product' => 'zermat-dc950'],
        ['file' => 'smoking-systems.php', 'product' => 'modell-850'],
        ['file' => 'smoking-systems.php', 'product' => 'modell-851'],
        ['file' => 'smoking-systems.php', 'product' => 'modell-1201'],
        ['file' => 'smoking-systems.php', 'product' => 'modell-1501'],
        ['file' => 'smoking-systems.php', 'product' => 'modell-2000'],
        ['file' => 'smoking-systems.php', 'product' => 'smart-500'],
        ['file' => 'smoking-systems.php', 'product' => 'klimareife'],

        ['file' => 'slicers.php', 'product' => 'master-3020'],
        ['file' => 'slicers.php', 'product' => 'master-2720'],
        ['file' => 'slicers.php', 'product' => 'master-3310w'],
        ['file' => 'slicers.php', 'product' => 'master-3370'],
        ['file' => 'slicers.php', 'product' => 'va-802'],
        ['file' => 'slicers.php', 'product' => 'va-804'],
        ['file' => 'slicers.php', 'product' => 'va-804fb'],
        ['file' => 'convection-ovens.php'],

        ['file' => 'dicing-machines.php', 'product' => 'dicr-classic'],
        ['file' => 'dicing-machines.php', 'product' => 'dicr-comfort'],
        ['file' => 'dicing-machines.php', 'product' => 'dicr-capacity'],
        ['file' => 'dicing-machines.php', 'product' => 'shreddr'],

    ],
    'snacks' => [
        ['file' => 'convection-ovens.php'],
        ['file' => 'packagingmachines.php', 'product' => 'zermat-tbg'],/* packagingmachines.php */
        ['file' => 'packagingmachines.php', 'product' => 'zermat-tbg-plus'],
        ['file' => 'packagingmachines.php', 'product' => 'zermat-jazzvac-mini'],
        ['file' => 'packagingmachines.php', 'product' => 'zermat-bluesvac-52'],
        ['file' => 'packagingmachines.php', 'product' => 'zermat-cv100'],
        ['file' => 'packagingmachines.php', 'product' => 'zermat-cv200'],
        ['file' => 'packagingmachines.php', 'product' => 'zermat-cv1000'],
        ['file' => 'packagingmachines.php', 'product' => 'zermat-dc750'],
        ['file' => 'packagingmachines.php', 'product' => 'zermat-dc950'],

        ['file' => 'smoking-systems.php', 'product' => 'modell-850'],
        ['file' => 'smoking-systems.php', 'product' => 'modell-851'],
        ['file' => 'smoking-systems.php', 'product' => 'modell-1201'],
        ['file' => 'smoking-systems.php', 'product' => 'modell-1501'],
        ['file' => 'smoking-systems.php', 'product' => 'modell-2000'],
        ['file' => 'smoking-systems.php', 'product' => 'smart-500'],
        ['file' => 'smoking-systems.php', 'product' => 'klimareife'],
    ],
];

// Produkt-Dateien für die aktuelle Kategorie abrufen
$product_files = isset($category_to_files[$category]) ? $category_to_files[$category] : [];
error_log("en/product.php - Produkt-Dateien: " . print_r($product_files, true));

// Erstellen einer eindeutigen Liste von PHP-Dateien (Artikelgruppen)
$article_groups = [];
foreach ($product_files as $entry) {
    $file = $entry['file'];
    if (!in_array($file, $article_groups)) {
        $article_groups[] = $file;
    }
}

// Mapping von Dateinamen zu Anzeigenamen
$display_names = [
    'bandsaws.php' => 'Bandsaw',
    'cooling-systems.php' => 'Cooling Technology',
    'convection-ovens.php' => 'Convection Oven',
    'fine-food-mixers.php' => 'Vacuum Mixer & Tumbler',
    'dicing-machines.php' => 'Dicer',
    'derinding-machines.php' => 'Derinder',
    'packagingmachines.php' => 'Packagingmachines',

    'sausage-separators.php' => 'Sausage Separator',
    'mincers.php' => 'Meat Grinder',
    'slicers.php' => 'Slicer',
    'cooking-kettles.php' => 'Cooking Kettle',
    'washing-machines.php' => 'Washing Machine',
    'smoking-systems.php' => 'Smokehouse',
    'cutters.php' => 'Cutter',
];

// Funktion zum Abrufen des Anzeigenamens
function getDisplayName($file, $display_names)
{
    return isset($display_names[$file]) ? $display_names[$file] : str_replace('.php', '', $file);
}

// Dynamische Metadaten generieren
$title = "Products for " . htmlspecialchars($category) . " | Food Processing";
$description = "Discover high-quality machines for " . htmlspecialchars($category) . " processing. From meat grinders to smokehouses – tailored solutions for your needs.";
$keywords = htmlspecialchars($category) . ", food industry, machines, meat processing, butcher shop equipment, sales";

// Spezifische Metadaten basierend auf der Kategorie oder dem ersten Produkt
if (!empty($product_files)) {
    $first_product_file = $product_files[0]['file'];
    $first_product_id = $product_files[0]['product'] ?? null;
    switch ($first_product_file) {
        case 'mincers.php':
            $title = "Meat Grinders for " . htmlspecialchars($category) . " | Nowicki & More";
            $description = "High-quality meat grinders for " . htmlspecialchars($category) . " processing. Nowicki, MEW-724, and more – reliable and efficient.";
            $keywords = "meat grinder, Nowicki, " . htmlspecialchars($category) . ", butcher shop equipment, food processing";
            break;
        case 'washing-machines.php':
            $title = "Washing Machines for " . htmlspecialchars($category) . " | NOMA Nowicki";
            $description = "Efficient crate washing machines from NOMA Nowicki for the " . htmlspecialchars($category) . " industry. Maximum hygiene and modularity.";
            $keywords = "washing machines, crate washing machine, NOMA Nowicki, " . htmlspecialchars($category) . ", hygiene";
            break;
        case 'sausage-separators.php':
            $title = "Sausage Separator for " . htmlspecialchars($category) . " | Trenn-Fix 2.0";
            $description = "Precise sausage separator Trenn-Fix 2.0 for " . htmlspecialchars($category) . " processing. High efficiency and hygiene.";
            $keywords = "sausage separator, Trenn-Fix, " . htmlspecialchars($category) . ", meat processing, butcher shop equipment";
            break;
    }
}

// Basis-URL für kanonische Links
$base_url = "https://as-technical.de";
$canonical_url = $base_url . "/en/" . htmlspecialchars($category);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <title><?php echo htmlspecialchars($title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($description); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($keywords); ?>">
    <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url); ?>">
    <!-- Swiper CSS aus externer Quelle -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    
    
</head>

<body>
    <?php
    // Header einbinden
    $header_path = __DIR__ . '/header.php';
    error_log("en/product.php - Lade header.php aus: " . $header_path);
    if (file_exists($header_path)) {
        include_once $header_path; // Verwende include_once, um doppelte Einbindungen zu vermeiden
        error_log("en/product.php - header.php erfolgreich geladen aus: " . $header_path);
    } else {
        error_log("en/product.php - header.php nicht gefunden in: " . $header_path);
        echo '<p>Error: Header file not found at ' . htmlspecialchars($header_path) . '</p>';
    }
    ?>
    <!-- Breadcrumb navigation -->
    <nav class="breadcrumb">
        <a href="/en/"></a>  <span><?php echo htmlspecialchars($category); ?></span>
    </nav>

    <!-- Category introduction -->
    <div class="category-intro">
        <h1>Suitable Products for <?php echo htmlspecialchars($category); ?></h1>
        <p>Explore our range of high-quality machines for <?php echo htmlspecialchars($category); ?> processing. From meat grinders to sausage separators and smokehouses, we offer tailored solutions for your needs.</p>
    </div>

    <!-- Product navigation -->
    <?php if (!empty($article_groups)) : ?>
        <div class="product-nav">
            <h3>Product Categories</h3>
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
        <img src="" alt="Full-screen view of product" />
        <video controls style="display: none;"></video>
    </div>

    <?php
    // Produktblöcke einbinden
    if (!empty($category) && !empty($product_files)) {
        $current_group = '';
        foreach ($product_files as $index => $entry) {
            $file = $entry['file'];
            $product_id = $entry['product'] ?? null;
            $swiper_id = 'mySwiper' . ($index + 1);

            // Neue Artikelgruppe starten
            if ($file !== $current_group) {
                if ($current_group !== '') {
                    echo '</div>'; // Vorherige Gruppe schließen
                }
                $group_id = str_replace('.php', '', $file);
                $group_name = getDisplayName($file, $display_names);
                echo '<div class="article-group" id="section-' . htmlspecialchars($group_id) . '">';
                echo '<h2>' . htmlspecialchars($group_name) . '</h2>';
                $current_group = $file;
            }

            // Produkt-Datei einbinden
            // Zuerst im /en/-Ordner suchen, dann im Stammverzeichnis
            $file_path_en = __DIR__ . '/' . $file; // /en/cooking-kettles.php
            $file_path_root = __DIR__ . '/../' . $file; // /cooking-kettles.php
            if (file_exists($file_path_en)) {
                $file_path = $file_path_en;
                error_log("en/product.php - Datei gefunden im /en/-Ordner: $file_path");
            } elseif (file_exists($file_path_root)) {
                $file_path = $file_path_root;
                error_log("en/product.php - Datei gefunden im Stammverzeichnis: $file_path");
            } else {
                $file_path = null;
                error_log("en/product.php - Datei nicht gefunden: $file (gesucht in $file_path_en und $file_path_root)");
                echo '<p>Product page ' . htmlspecialchars($file) . ' not found.</p>';
                continue;
            }

            if ($file_path) {
                define('IS_INCLUDED', true);
                $GLOBALS['current_swiper_id'] = $swiper_id;
                $GLOBALS['selected_product'] = $product_id;
                include $file_path;
            }

            // Strukturierte Daten für jedes Produkt
            if ($product_id) {
                $schema_name = htmlspecialchars($product_id);
                $schema_description = "High-quality machine for " . htmlspecialchars($category) . " processing.";
                $schema_image = "https://as-technical.de/Product/" . str_replace('.php', '', $file) . "/image.jpg";
    ?>
                <script type="application/ld+json">
                    {
                        "@context": "https://schema.org",
                        "@type": "Product",
                        "name": "<?php echo $schema_name; ?>",
                        "description": "<?php echo $schema_description; ?>",
                        "category": "<?php echo htmlspecialchars($category); ?>",
                        "image": "<?php echo $schema_image; ?>",
                        "brand": {
                            "@type": "Brand",
                            "name": "<?php echo ($file === 'washing-machines.php' ? 'NOMA Nowicki' : ''); ?>"
                        }
                    }
                </script>
    <?php
            }
        }
        // Letzte Gruppe schließen
        if ($current_group !== '') {
            echo '</div>';
        }
    } else {
        // Fallback bei ungültiger Kategorie
        error_log("en/product.php - Keine Produkte für Kategorie $category gefunden.");
        header("HTTP/1.0 404 Not Found");
        echo '<div class="category-intro"><p>No products available for this category. <a href="/en/">Back to Home</a></p></div>';
    }
    ?>

    <!-- Swiper JS aus externer Quelle -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        // Initialisierung jeder Swiper-Instanz
        <?php
        if (!empty($product_files)) {
            foreach ($product_files as $index => $entry) {
                $swiper_id = 'mySwiper' . ($index + 1);
                echo "var swiper$index = new Swiper('.$swiper_id', {
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                });\n";
            }
        }
        ?>

        // Funktion zum Wechseln der Slides basierend auf Thumbnail-Klick
        function changeSlide(index, swiperClass) {
            const swiper = document.querySelector(`.${swiperClass}`).swiper;
            if (swiper) {
                swiper.slideTo(index);
            }
        }

        // Event-Listener für Vollbildbilder und Akkordeons
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

                    // Öffne oder schließe den aktuellen Inhalt
                    if (!isOpen) {
                        content.style.display = 'block';
                        button.classList.add('active');
                    }
                });
            });

            // Vollbildbilder
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
                        if (overlayVideo) {
                            overlayVideo.pause();
                            overlayVideo.src = "";
                        }
                    }
                });
            }

            // Sanftes Scrollen zu Artikelgruppen
            document.querySelectorAll('.product-nav a').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href').substring(1);
                    const targetElement = document.getElementById(targetId);
                    if (targetElement) {
                        targetElement.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });
        });
    </script>

    <?php
    // Stelle sicher, dass footer.php englische Inhalte verwendet
    include 'footer.php';
    ?>
</body>

</html>