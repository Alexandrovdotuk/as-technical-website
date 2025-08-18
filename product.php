<?php
// product.php

// Kategorie aus URL lesen (meist ohne Umlaute, z. B. "Gefluegel")
$category = $_GET['category'] ?? '';

// Kategorien-Mapping für Zuordnung und Anzeige
$category_mapping = [
    'fleisch' => ['normalized' => 'Fleisch', 'display' => 'Fleisch'],
    'gefluegel' => ['normalized' => 'Geflugel', 'display' => 'Geflügel'],
    'vegan' => ['normalized' => 'Veggie', 'display' => 'Vegan'],
    'convenience' => ['normalized' => 'Convenience', 'display' => 'Convenience'],
    'tiernahrung' => ['normalized' => 'Tiernahrung', 'display' => 'Tiernahrung'],
    'fisch' => ['normalized' => 'Fisch', 'display' => 'Fisch'],
    'kaese' => ['normalized' => 'Kase', 'display' => 'Käse'],
    'snacks' => ['normalized' => 'Snacks', 'display' => 'Snacks'],
];

// Kategorie normalisieren (für Zuordnung in $category_to_files)
$normalized_category = isset($category_mapping[strtolower($category)]) ? $category_mapping[strtolower($category)]['normalized'] : $category;

// Kategorienamen für die Anzeige (mit korrekten Umlauten)
$display_category = isset($category_mapping[strtolower($category)]) ? $category_mapping[strtolower($category)]['display'] : ucfirst($category);

// Zuordnung von Kategorien zu Produkt-Dateien und spezifischen Produkten
$category_to_files = [
    'Fleisch' => [
        ['file' => 'kochkessel.php', 'product' => '2000plus'],
        ['file' => 'kochkessel.php', 'product' => 'kdn-50-120-150'],
        ['file' => 'kochkessel.php', 'product' => 'kdn-200'],
        ['file' => 'konvektomat.php'],

        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-tbg'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-tbg-plus'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-jazzvac-mini'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-bluesvac-52'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-cv100'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-cv200'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-cv1000'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-dc750'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-dc950'],

        ['file' => 'fleischwolf.php', 'product' => 'nowicki'],
        ['file' => 'fleischwolf.php', 'product' => 'mew-724'],
        ['file' => 'fleischwolf.php', 'product' => 'mmg-233'],
        ['file' => 'fleischwolf.php', 'product' => 'mmg-235'],
        ['file' => 'fleischwolf.php', 'product' => 'werkzeugwagen'],

        ['file' => 'aufschnittschneidemaschine.php', 'product' => 'master-3020'],
        ['file' => 'aufschnittschneidemaschine.php', 'product' => 'master-2720'],
        ['file' => 'aufschnittschneidemaschine.php', 'product' => 'master-3310w'],
        ['file' => 'aufschnittschneidemaschine.php', 'product' => 'master-3370'],
        ['file' => 'aufschnittschneidemaschine.php', 'product' => 'va-802'],
        ['file' => 'aufschnittschneidemaschine.php', 'product' => 'va-804'],
        ['file' => 'aufschnittschneidemaschine.php', 'product' => 'va-804fb'],

        ['file' => 'bandsaegen.php', 'product' => 'mkb-753'],

        ['file' => 'dusche.php', 'product' => 'Wudu'],

        ['file' => 'poekelinjektor.php', 'product' => 'pi-54-105'],
        ['file' => 'poekelinjektor.php', 'product' => 'pi-81-184'],
        ['file' => 'poekelinjektor.php', 'product' => 'pi-17-v'],
        ['file' => 'poekelinjektor.php', 'product' => 'pi-21-v'],
        ['file' => 'poekelinjektor.php', 'product' => 'pi-26-v'],
        ['file' => 'poekelinjektor.php', 'product' => 'pi-52-v'],
        ['file' => 'poekelinjektor.php', 'product' => 'nowicki-injektor'],

        ['file' => 'vakuummischer.php', 'product' => 'fm-60-250-stl'],
        ['file' => 'vakuummischer.php', 'product' => 'vm-250-500-stl'],
        ['file' => 'vakuummischer.php', 'product' => 'vm-750-1800-stl'],
        ['file' => 'vakuummischer.php', 'product' => 'nowicki-vakuum-tumbler'],

        ['file' => 'speckschneider.php', 'product' => 'dicr-classic'],
        ['file' => 'speckschneider.php', 'product' => 'dicr-comfort'],
        ['file' => 'speckschneider.php', 'product' => 'dicr-capacity'],

        ['file' => 'abschwarter.php', 'product' => 'derindr-classic-450'],
        ['file' => 'abschwarter.php', 'product' => 'derindr-comfort-450'],

        ['file' => 'wuerstchentrennmaschine.php', 'product' => 'trenn-fix'],
        ['file' => 'wuerstchentrennmaschine.php', 'product' => 'trenn-fix-junior'],

        ['file' => 'darmschweissgeraet.php', 'product' => 'thermo-fix'],

        ['file' => 'waschautomaten.php', 'product' => 'kistenwaschmaschine'],

        ['file' => 'rauchanlagen.php', 'product' => 'modell-850'],
        ['file' => 'rauchanlagen.php', 'product' => 'modell-851'],
        ['file' => 'rauchanlagen.php', 'product' => 'modell-1201'],
        ['file' => 'rauchanlagen.php', 'product' => 'modell-1501'],
        ['file' => 'rauchanlagen.php', 'product' => 'modell-2000'],
        ['file' => 'rauchanlagen.php', 'product' => 'smart-500'],
        ['file' => 'rauchanlagen.php', 'product' => 'klimareife'],

        ['file' => 'kutter.php', 'product' => 'msm-769'],
        ['file' => 'kutter.php', 'product' => 'msk-761-764'],
        ['file' => 'kutter.php', 'product' => 'msm-765'],
        ['file' => 'kutter.php', 'product' => 'msm-766-767'],
        ['file' => 'kutter.php', 'product' => 'blizzard-50'],
        ['file' => 'kutter.php', 'product' => 'blizzard-70'],
        ['file' => 'kutter.php', 'product' => 'blizzard-130'],

    ],
    'Geflugel' => [
        ['file' => 'kochkessel.php', 'product' => '2000plus'],
        ['file' => 'kochkessel.php', 'product' => 'kdn-50-120-150'],
        ['file' => 'kochkessel.php', 'product' => 'kdn-200'],

        ['file' => 'konvektomat.php'],

        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-tbg'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-tbg-plus'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-jazzvac-mini'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-bluesvac-52'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-cv100'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-cv200'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-cv1000'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-dc750'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-dc950'],

        ['file' => 'Fleischwolf.php', 'product' => 'nowicki'],
        ['file' => 'Fleischwolf.php', 'product' => 'mew-724'],
        ['file' => 'Fleischwolf.php', 'product' => 'mmg-233'],
        ['file' => 'Fleischwolf.php', 'product' => 'mmg-235'],
        ['file' => 'fleischwolf.php', 'product' => 'werkzeugwagen'],

        ['file' => 'aufschnittschneidemaschine.php', 'product' => 'master-3020'],
        ['file' => 'aufschnittschneidemaschine.php', 'product' => 'master-2720'],
        ['file' => 'aufschnittschneidemaschine.php', 'product' => 'master-3310w'],
        ['file' => 'aufschnittschneidemaschine.php', 'product' => 'master-3370'],
        ['file' => 'aufschnittschneidemaschine.php', 'product' => 'va-802'],
        ['file' => 'aufschnittschneidemaschine.php', 'product' => 'va-804'],
        ['file' => 'aufschnittschneidemaschine.php', 'product' => 'va-804fb'],
        ['file' => 'bandsägen.php', 'product' => 'mkb-753'],
        ['file' => 'dusche.php', 'product' => 'Wudu'],
        ['file' => 'Speckschneider.php', 'product' => 'dicr-classic'],
        ['file' => 'Speckschneider.php', 'product' => 'dicr-comfort'],
        ['file' => 'Speckschneider.php', 'product' => 'dicr-capacity'],
        ['file' => 'abschwarter.php', 'product' => 'derindr-classic-450'],
        ['file' => 'abschwarter.php', 'product' => 'derindr-comfort-450'],
        ['file' => 'vakuummischer.php', 'product' => 'fm-60-250-stl'],
        ['file' => 'vakuummischer.php', 'product' => 'vm-250-500-stl'],
        ['file' => 'vakuummischer.php', 'product' => 'vm-750-1800-stl'],
        ['file' => 'vakuummischer.php', 'product' => 'nowicki-vakuum-tumbler'],
        ['file' => 'wuerstchentrennmaschine.php', 'product' => 'trenn-fix'],
        ['file' => 'waschautomaten.php', 'product' => 'kistenwaschmaschine'],
        ['file' => 'rauchanlagen.php', 'product' => 'modell-850'],
        ['file' => 'rauchanlagen.php', 'product' => 'modell-851'],
        ['file' => 'rauchanlagen.php', 'product' => 'modell-1201'],
        ['file' => 'rauchanlagen.php', 'product' => 'modell-1501'],
        ['file' => 'rauchanlagen.php', 'product' => 'modell-2000'],
        ['file' => 'rauchanlagen.php', 'product' => 'smart-500'],
        ['file' => 'rauchanlagen.php', 'product' => 'klimareife'],
        ['file' => 'kutter.php', 'product' => 'msm-769'],
        ['file' => 'kutter.php', 'product' => 'msk-761-764'],
        ['file' => 'kutter.php', 'product' => 'msm-765'],
        ['file' => 'kutter.php', 'product' => 'msm-766-767'],
        ['file' => 'kutter.php', 'product' => 'nowicki-cutter'],
        ['file' => 'kutter.php', 'product' => 'blizzard-50'],
        ['file' => 'kutter.php', 'product' => 'blizzard-70'],
        ['file' => 'kutter.php', 'product' => 'blizzard-130'],
    ],
    'Veggie' => [
        ['file' => 'speckschneider.php', 'product' => 'shreddr'],
        ['file' => 'konvektomat.php'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-tbg'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-tbg-plus'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-jazzvac-mini'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-bluesvac-52'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-cv100'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-cv200'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-cv1000'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-dc750'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-dc950'],

        ['file' => 'rauchanlagen.php', 'product' => 'smart-500'],
        ['file' => 'rauchanlagen.php', 'product' => 'modell-850'],
        ['file' => 'rauchanlagen.php', 'product' => 'modell-851'],
        ['file' => 'rauchanlagen.php', 'product' => 'modell-1201'],
        ['file' => 'rauchanlagen.php', 'product' => 'modell-1501'],
        ['file' => 'rauchanlagen.php', 'product' => 'modell-2000'],
        ['file' => 'kochkessel.php', 'product' => '2000plus'],
        ['file' => 'kochkessel.php', 'product' => 'kdn-50-120-150'],
        ['file' => 'kochkessel.php', 'product' => 'kdn-200'],
        ['file' => 'aufschnittschneidemaschine.php', 'product' => 'master-3020'],
        ['file' => 'aufschnittschneidemaschine.php', 'product' => 'master-2720'],
        ['file' => 'aufschnittschneidemaschine.php', 'product' => 'master-3310w'],
        ['file' => 'aufschnittschneidemaschine.php', 'product' => 'master-3370'],
        ['file' => 'aufschnittschneidemaschine.php', 'product' => 'va-802'],
        ['file' => 'aufschnittschneidemaschine.php', 'product' => 'va-804'],
        ['file' => 'aufschnittschneidemaschine.php', 'product' => 'va-804fb'],
        ['file' => 'wuerstchentrennmaschine.php', 'product' => 'trenn-fix'],
        ['file' => 'kutter.php', 'product' => 'msm-769'],
        ['file' => 'kutter.php', 'product' => 'msk-761-764'],
        ['file' => 'kutter.php', 'product' => 'msm-765'],
        ['file' => 'kutter.php', 'product' => 'msm-766-767'],
        ['file' => 'kutter.php', 'product' => 'nowicki-cutter'],
        ['file' => 'kutter.php', 'product' => 'blizzard-50'],
        ['file' => 'kutter.php', 'product' => 'blizzard-70'],
        ['file' => 'kutter.php', 'product' => 'blizzard-130'],
    ],
    'Convenience' => [
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-tbg'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-tbg-plus'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-jazzvac-mini'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-bluesvac-52'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-cv100'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-cv200'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-cv1000'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-dc750'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-dc950'],
        ['file' => 'kochkessel.php', 'product' => '2000plus'],
        ['file' => 'kochkessel.php', 'product' => 'kdn-50-120-150'],
        ['file' => 'kochkessel.php', 'product' => 'kdn-200'],
        ['file' => 'konvektomat.php'],
        ['file' => 'kutter.php', 'product' => 'msm-769'],
        ['file' => 'kutter.php', 'product' => 'msk-761-764'],
        ['file' => 'kutter.php', 'product' => 'msm-765'],
        ['file' => 'kutter.php', 'product' => 'msm-766-767'],
        ['file' => 'kutter.php', 'product' => 'nowicki-cutter'],
        ['file' => 'kutter.php', 'product' => 'blizzard-50'],
        ['file' => 'kutter.php', 'product' => 'blizzard-70'],
        ['file' => 'kutter.php', 'product' => 'blizzard-130'],
    ],
    'Tiernahrung' => [
        ['file' => 'rauchanlagen.php', 'product' => 'smart-500'],
        ['file' => 'rauchanlagen.php', 'product' => 'modell-850'],
        ['file' => 'rauchanlagen.php', 'product' => 'modell-851'],
        ['file' => 'rauchanlagen.php', 'product' => 'modell-1201'],
        ['file' => 'rauchanlagen.php', 'product' => 'modell-1501'],
        ['file' => 'rauchanlagen.php', 'product' => 'modell-2000'],
        ['file' => 'kochkessel.php', 'product' => '2000plus'],
        ['file' => 'kochkessel.php', 'product' => 'kdn-50-120-150'],
        ['file' => 'kochkessel.php', 'product' => 'kdn-200'],
        ['file' => 'fleischwolf.php', 'product' => 'nowicki'],
        ['file' => 'fleischwolf.php', 'product' => 'mew-724'],
        ['file' => 'fleischwolf.php', 'product' => 'mmg-233'],
        ['file' => 'fleischwolf.php', 'product' => 'mmg-235'],
        ['file' => 'fleischwolf.php', 'product' => 'werkzeugwagen'],
        ['file' => 'kochkessel.php', 'product' => '2000plus'],
        ['file' => 'kochkessel.php', 'product' => 'kdn-50-120-150'],
        ['file' => 'kochkessel.php', 'product' => 'kdn-200'],
        ['file' => 'bandsägen.php', 'product' => 'mkb-753'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-tbg'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-tbg-plus'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-jazzvac-mini'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-bluesvac-52'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-cv100'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-cv200'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-cv1000'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-dc750'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-dc950'],
        ['file' => 'kutter.php', 'product' => 'msm-769'],
        ['file' => 'kutter.php', 'product' => 'msk-761-764'],
        ['file' => 'kutter.php', 'product' => 'msm-765'],
        ['file' => 'kutter.php', 'product' => 'msm-766-767'],
        ['file' => 'kutter.php', 'product' => 'nowicki-cutter'],
        ['file' => 'kutter.php', 'product' => 'blizzard-50'],
        ['file' => 'kutter.php', 'product' => 'blizzard-70'],
        ['file' => 'kutter.php', 'product' => 'blizzard-130'],

    ],
    'Fisch' => [
        ['file' => 'rauchanlagen.php', 'product' => 'smart-500'],
        ['file' => 'rauchanlagen.php', 'product' => 'modell-850'],
        ['file' => 'rauchanlagen.php', 'product' => 'modell-851'],
        ['file' => 'rauchanlagen.php', 'product' => 'modell-1201'],
        ['file' => 'rauchanlagen.php', 'product' => 'modell-1501'],
        ['file' => 'rauchanlagen.php', 'product' => 'modell-2000'],
        ['file' => 'konvektomat.php'],
        ['file' => 'aufschnittschneidemaschine.php', 'product' => 'master-3020'],
        ['file' => 'aufschnittschneidemaschine.php', 'product' => 'master-2720'],
        ['file' => 'aufschnittschneidemaschine.php', 'product' => 'master-3310w'],
        ['file' => 'aufschnittschneidemaschine.php', 'product' => 'master-3370'],
        ['file' => 'aufschnittschneidemaschine.php', 'product' => 'va-802'],
        ['file' => 'aufschnittschneidemaschine.php', 'product' => 'va-804'],
        ['file' => 'aufschnittschneidemaschine.php', 'product' => 'va-804fb'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-tbg'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-tbg-plus'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-jazzvac-mini'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-bluesvac-52'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-cv100'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-cv200'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-cv1000'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-dc750'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-dc950'],

    ],
    'Kase' => [
        ['file' => 'rauchanlagen.php', 'product' => 'smart-500'],
        ['file' => 'rauchanlagen.php', 'product' => 'modell-850'],
        ['file' => 'rauchanlagen.php', 'product' => 'modell-851'],
        ['file' => 'rauchanlagen.php', 'product' => 'modell-1201'],
        ['file' => 'rauchanlagen.php', 'product' => 'modell-1501'],
        ['file' => 'rauchanlagen.php', 'product' => 'modell-2000'],
        ['file' => 'aufschnittschneidemaschine.php', 'product' => 'master-3020'],
        ['file' => 'aufschnittschneidemaschine.php', 'product' => 'master-2720'],
        ['file' => 'aufschnittschneidemaschine.php', 'product' => 'master-3310w'],
        ['file' => 'aufschnittschneidemaschine.php', 'product' => 'master-3370'],
        ['file' => 'aufschnittschneidemaschine.php', 'product' => 'va-802'],
        ['file' => 'aufschnittschneidemaschine.php', 'product' => 'va-804'],
        ['file' => 'aufschnittschneidemaschine.php', 'product' => 'va-804fb'],
        ['file' => 'konvektomat.php'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-tbg'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-tbg-plus'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-jazzvac-mini'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-bluesvac-52'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-cv100'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-cv200'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-cv1000'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-dc750'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-dc950'],

    ],
    'Snacks' => [
        ['file' => 'rauchanlagen.php', 'product' => 'smart-500'],
        ['file' => 'rauchanlagen.php', 'product' => 'modell-850'],
        ['file' => 'rauchanlagen.php', 'product' => 'modell-851'],
        ['file' => 'rauchanlagen.php', 'product' => 'modell-1201'],
        ['file' => 'rauchanlagen.php', 'product' => 'modell-1501'],
        ['file' => 'rauchanlagen.php', 'product' => 'modell-2000'],
        ['file' => 'konvektomat.php'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-tbg'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-tbg-plus'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-jazzvac-mini'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-bluesvac-52'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-cv100'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-cv200'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-cv1000'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-dc750'],
        ['file' => 'verpackungsmaschinen.php', 'product' => 'zermat-dc950'],

    ],
];

// Produkt-Dateien für die aktuelle Kategorie
$product_files = $category_to_files[$normalized_category] ?? [];

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
    'bandsaegen.php' => 'Bandsäge',
    'dusche.php' => 'Dusche',
    'konvektomat.php' => 'Kombidämpfer',
    'vakuummischer.php' => 'Vakuummischer & Tumbler',
    'speckschneider.php' => 'Würfelschneider',
    'abschwarter.php' => 'Entschwarter',
    'wuerstchentrennmaschine.php' => 'Würstchentrennmaschine',
    'fleischwolf.php' => 'Fleischwolf',
    'aufschnittschneidemaschine.php' => 'Aufschnittschneidemaschine',
    'kochkessel.php' => 'Kochkessel',
    'waschautomaten.php' => 'Waschautomaten',
    'rauchanlagen.php' => 'Rauchanlagen',
    'kutter.php' => 'Kutter',
    'verpackungsmaschinen.php' => 'Verpackungsmaschinen',
    'poekelinjektor.php' => 'Pökelinjektoren',
    'darmschweissgeraet.php' => 'Darmschweißgerät',


];

// Funktion, um den Anzeigenamen zu erhalten
function getDisplayName($file, $display_names)
{
    return $display_names[$file] ?? str_replace('.php', '', $file);
}

// Dynamische Metadaten generieren
$title = "Produkte für " . htmlspecialchars($display_category) . " | Lebensmittelverarbeitung";
$description = "Entdecken Sie hochwertige Maschinen für die " . htmlspecialchars($display_category) . "-Verarbeitung. Von Fleischwölfen bis Rauchanlagen – passende Lösungen für Ihre Anforderungen.";
$keywords = htmlspecialchars($category) . ", Lebensmittelindustrie, Maschinen, Fleischverarbeitung, Metzgereimaschinen, Verkauf";

// Beispiel für spezifische Metadaten basierend auf der Kategorie oder dem ersten Produkt
if (!empty($product_files)) {
    $first_product_file = $product_files[0]['file'];
    $first_product_id = $product_files[0]['product'] ?? null;
    switch ($first_product_file) {
        case 'Fleischwolf.php':
            $title = "Fleischwölfe für " . htmlspecialchars($display_category) . " | Nowicki & mehr";
            $description = "Hochwertige Fleischwölfe für die " . htmlspecialchars($display_category) . "-Verarbeitung. Nowicki, MEW-724 und mehr – zuverlässig und effizient.";
            $keywords = "Fleischwolf, Nowicki, " . htmlspecialchars($category) . ", Metzgereimaschinen, Lebensmittelverarbeitung";
            break;
        case 'Waschautomaten.php':
            $title = "Waschautomaten für " . htmlspecialchars($display_category) . " | NOMA Nowicki";
            $description = "Effiziente Kistenwaschmaschinen von NOMA Nowicki für die " . htmlspecialchars($display_category) . "-Industrie. Höchste Hygiene und Modularität.";
            $keywords = "Waschautomaten, Kistenwaschmaschine, NOMA Nowicki, " . htmlspecialchars($category) . ", Hygiene";
            break;
        case 'Wuerstchentrennmaschine.php':
            $title = "Würstchentrennmaschine für " . htmlspecialchars($display_category) . " | Trenn-Fix 2.0";
            $description = "Präzise Würstchentrennmaschine Trenn-Fix 2.0 für die " . htmlspecialchars($display_category) . "-Verarbeitung. Hohe Effizienz und Hygiene.";
            $keywords = "Würstchentrennmaschine, Trenn-Fix, " . htmlspecialchars($category) . ", Fleischverarbeitung, Metzgereimaschinen";
            break;
    }
}

// Basis-URL für kanonische Links (an deine Domain anpassen)
$base_url = "https://as-technical.de";
$canonical_url = $base_url . "/" . htmlspecialchars(strtolower($category));
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
</head>

<body>
    <?php include 'header.php'; ?>

    <!-- Breadcrumb-Navigation -->
    <nav class="breadcrumb">
        <a href="/"></a> <span><?php echo htmlspecialchars($display_category); ?></span>
    </nav>

    <!-- Kategorie-Einführung -->
    <div class="category-intro">
        <h1>Passende Produkte für <?php echo htmlspecialchars($display_category); ?></h1>
        <p>Entdecken Sie unser Sortiment an hochwertigen Maschinen für die
            <?php echo htmlspecialchars($display_category); ?>-Verarbeitung. Von Fleischwölfen über
            Würstchentrennmaschinen bis hin zu Rauchanlagen bieten wir maßgeschneiderte Lösungen für Ihre Anforderungen.
        </p>
    </div>

    <!-- Produktnavigation -->
    <?php if (!empty($article_groups)): ?>
        <div class="product-nav">
            <h3>Artikelgruppen</h3>
            <ul>
                <?php foreach ($article_groups as $group):
                    $group_id = str_replace('.php', '', $group);
                    $group_name = getDisplayName($group, $display_names);
                    ?>
                    <li><a
                            href="#section-<?php echo htmlspecialchars($group_id); ?>"><?php echo htmlspecialchars($group_name); ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <!-- Image overlay -->
    <div id="image-overlay">
        <img src="" alt="Fullscreen Image" />
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
                $schema_description = "Hochwertige Maschine für die " . htmlspecialchars($display_category) . "-Verarbeitung.";
                $schema_image = "https://as-technical.de/Product/" . str_replace('.php', '', $file) . "/image.jpg";
                ?>
                <script type="application/ld+json">
                                            {
                                                "@context": "https://schema.org",
                                                "@type": "Product",
                                                "name": "<?php echo $schema_name; ?>",
                                                "description": "<?php echo $schema_description; ?>",
                                                "category": "<?php echo htmlspecialchars($display_category); ?>",
                                                "image": "<?php echo $schema_image; ?>",
                                                "brand": {
                                                    "@type": "Brand",
                                                    "name": "<?php echo ($file === 'Waschautomaten.php' ? 'NOMA Nowicki' : ''); ?>"
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
        echo '<div class="category-intro"><p>Keine Produkte für diese Kategorie verfügbar.</p></div>';
    }
    ?>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        // Initialisierung für jede Swiper-Instanz
        <?php
        foreach ($product_files as $index => $entry) {
            $swiper_id = 'mySwiper' . ($index + 1);
            echo "var swiper$index = new Swiper('.$swiper_id', {
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });\n";
        }
        ?>

        // Funktion zum Wechseln der Folien basierend auf dem Thumbnail-Klick
        function changeSlide(index, swiperClass) {
            const swiper = document.querySelector(`.${swiperClass}`).swiper;
            swiper.slideTo(index);
        }

        // Event Listener für Fullscreen-Bilder und Akkordeons
        document.addEventListener("DOMContentLoaded", function () {
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

            // Fullscreen-Bilder
            document.addEventListener("click", function (event) {
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
                overlay.addEventListener("click", function (event) {
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

            // Sanftes Scrollen zu den Artikelgruppen
            document.querySelectorAll('.product-nav a').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
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

    <?php include 'footer.php'; ?>
</body>

</html>