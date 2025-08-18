<?php
// /en/index.php

// Sprache definieren
define('LANGUAGE', 'en');

// Header einbinden
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sales and service of meat processing machines, smoking systems, and food production equipment" />
    <meta name="keywords" content="offer,sales,meat processing machines,distribution,modernization,service,repair,smoking systems,food industry,used machines" />
    <meta name="robots" content="index, follow">
    <link rel="icon" type="image/vnd.microsoft.icon" href="../assets/logo.ico" alt="Logo AS Technical Solutions">
    <link rel="canonical" href="https://as-technical.de/en/">
    <title>Repair and Sales of Meat Processing Machines and Smoking Systems Modernization</title>
    <!-- Basis-URL für relative Links -->
    <base href="/en/">
    <!-- Externe Stylesheet (falls benötigt) -->
    <style>
        .nav-item {
            position: relative;
        }

        .image-dropdown {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: white;
            padding: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            z-index: 10;
            white-space: nowrap;
        }

        .image-dropdown img {
            max-width: 100px;
            margin: 5px;
            transition: transform 0.3s ease;
            cursor: pointer;
        }

        .image-dropdown img:hover {
            transform: scale(1.1);
        }

        .nav-item:hover .image-dropdown {
            display: flex;
            gap: 10px;
        }

        .application-box {
            position: relative;
            overflow: hidden;
            text-align: center;
            transition: transform 0.3s ease-in-out;
            cursor: pointer;
            border-radius: 10px;
            margin-bottom: 59px;
            margin-left: 55px;
            box-shadow: 10px 10px 20px -5px rgba(255, 254, 255, 0.22);
            display: inline-block;
        }

        .application-box img {
            display: block;
            margin: auto;
            max-width: 100%;
            transition: transform 0.3s ease-in-out;
        }

        .application-box:hover img {
            transform: scale(1.1);
        }

        .box-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0);
            color: white;
            text-align: center;
            padding: 10px;
            border-radius: 5px;
            transition: all 0.3s ease-in-out;
        }

        .box-content .title {
            font-size: 18px;
            margin: 5px 0;
            font-weight: bold;
            background-color: rgba(0, 0, 0, 0.49);
            border-radius: 10px;
            padding: 5px 10px;
            transition: transform 0.3s ease-in-out, opacity 0.3s ease-in-out;
        }

        .box-content .description {
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
            font-weight: bold;
            background-color: rgba(0, 0, 0, 0.49);
            border-radius: 10px;
            padding: 5px 10px;
        }

        .application-box:hover .box-content .description {
            opacity: 1;
        }

        .application-box:hover .box-content .title {
            transform: translateY(-50px);
            opacity: 0;
        }

        .box-content .description a {
            color: white;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
            transition: color 0.2s ease-in-out;
        }

        .box-content .description a:hover {
            color: #ff9900;
        }

        .row {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .hero-content h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
            font-weight: 700;
        }

        @media screen and (max-width: 1223px) {
            .application-box {
                margin-left: 20px;
                width: 90%;
                justify-content: center;
                margin-right: 0;
            }

            .application-box img {
                width: 100% !important;
            }

            .box-content .title {
                font-size: 25px;
            }

            .box-content .description a {
                font-size: 25px;
            }

            .hero-content h1 {
                font-size: 1.7em;
                margin-bottom: 10px;
                font-weight: 700;
            }
        }
    </style>
</head>

<body>
    <div class="hero-content">
        <h1>Welcome to AS Technical Solutions</h1>
        <h5>We offer comprehensive service for your meat processing machines, including thorough inspections, repairs, and expert advice for new purchases, conversions, or repairs.<br><br>
            Benefit from our expertise in finding the best solutions for your needs.<br>
            Upon request, we provide tailored offers for meat processing machines from our network of selected partners.<br>
            Additionally, we regularly offer used machines and systems – ideal for cost-efficient solutions.<br><br>
            Contact us for customized offers and professional advice!</h5>
    </div>

    <div class="container text-center">
        <div class="row">
            <div class="col">
                <img class="img-left" src="../assets/logo.svg" alt="Logo AS Technical Solutions">
            </div>
            <div class="cox">
                <h5 style="color:white;"><br><br>With years of experience in the food industry, we offer tailored solutions to make your production more efficient and profitable.<br>
                    From maintenance to conversions – we maximize your machines’ performance.</h5>
            </div>
        </div>
    </div>
    <br><br><br>

    <div class="row" style="padding-top: 50px; justify-content: center">
        <div class="col-md-3">
            <div class="application-box box">
                <img src="../anwendungen/service.jpg" alt="Service for Meat Processing Machines" class="lazy img-responsive" style="width: 200px;">
                <div class="box-content">
                    <h4 class="title">Service</h4>
                    <p class="description"><a href="our-services.php">Service Area</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="application-box box">
                <img src="../anwendungen/gebrauchtmaschinen.jpg" alt="Used Machines" class="lazy img-responsive" style="width: 200px;">
                <div class="box-content">
                    <h4 class="title">Used Machines</h4>
                    <p class="description"><a href="/en/used">Our Used Machines</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="application-box box">
                <img src="../anwendungen/buch.jpg" alt="Lexicon for Meat Processing" class="lazy img-responsive" style="width: 200px;">
                <div class="box-content">
                    <h4 class="title">Lexicon</h4>
                    <p class="description"><a href="glossary.php">To the Article</a></p>
                </div>
            </div>
        </div>
    </div>
    <br><br>

    <div class="hero-content">
        <h1>Your Application Areas</h1>
        <br>
        <p>Choose your area and discover our tailored solutions for your production.</p>
    </div>

    <div class="row" style="padding-top: 50px;">
        <div class="col-md-3">
            <div class="application-box box">
                <img src="../anwendungen/fleisch.png" alt="Meat Processing" class="lazy img-responsive" style="width: 200px;">
                <div class="box-content">
                    <h4 class="title">Meat</h4>
                    <p class="description"><a href="meat">All Products</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="application-box box">
                <img src="../anwendungen/fisch.png" alt="Fish Processing" class="lazy img-responsive" style="width: 200px;">
                <div class="box-content">
                    <h4 class="title">Fish</h4>
                    <p class="description"><a href="fish">All Products</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="application-box box">
                <img src="../anwendungen/geflugel.png" alt="Poultry Processing" class="lazy img-responsive" style="width: 200px;">
                <div class="box-content">
                    <h4 class="title">Poultry</h4>
                    <p class="description"><a href="poultry">All Products</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="application-box box">
                <img src="../anwendungen/kaese.png" alt="Cheese Processing" class="lazy img-responsive" style="width: 200px;">
                <div class="box-content">
                    <h4 class="title">Cheese</h4>
                    <p class="description"><a href="cheese">All Products</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="application-box box">
                <img src="../anwendungen/vegan.png" alt="Vegan Products" class="lazy img-responsive" style="width: 200px;">
                <div class="box-content">
                    <h4 class="title">Veggie</h4>
                    <p class="description"><a href="veggie">All Products</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="application-box box">
                <img src="../anwendungen/Convenience.png" alt="Convenience Products" class="lazy img-responsive" style="width: 200px;">
                <div class="box-content">
                    <h4 class="title">Convenience</h4>
                    <p class="description"><a href="convenience">All Products</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="application-box box">
                <img src="../anwendungen/snacks.png" alt="Snack Products" class="lazy img-responsive" style="width: 200px;">
                <div class="box-content">
                    <h4 class="title">Snacks</h4>
                    <p class="description"><a href="snacks">All Products</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="application-box box">
                <img src="../anwendungen/tiernahrung.png" alt="Pet Food Products" class="lazy img-responsive" style="width: 200px;">
                <div class="box-content">
                    <h4 class="title">Pet Food</h4>
                    <p class="description"><a href="pet-food">All Products</a></p>
                </div>
            </div>
        </div>
    </div>

    <br><br>

    <?php include 'footer.php'; ?>
</body>

</html>