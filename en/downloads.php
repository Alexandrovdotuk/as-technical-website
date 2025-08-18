<?php include 'header.php' ?>

<title>Catalog</title>

<div class="hero">
    <!-- <video class="video-background" playsinline autoplay muted loop id="bgvideo">
        <source src="../assets/bluesmoke.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video> -->

    <div class="hero-content">
        <h1>Our Catalog</h1>
        <a href="catalog.html" target="_blank">View</a>
        <p>Click the image to download</p>

        <div class="anschauen">
            <a href="../Katalog/Katalog.pdf" download>
                <img src="../Katalog/Bild.png" alt="AS Technical Solutions Catalog" width="200">
            </a>
        </div>
    </div>

    <?php include 'footer.php' ?>

    <!-- Style -->
    <style>
        .anschauen img {
            transition: transform 0.7s ease;
            /* Transition for transformation */
            padding-top: 20px;
        }

        .anschauen img:hover {
            transform: scale(1.1);
            /* Zoom on hover */
        }
    </style>
</div>