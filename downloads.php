<?php include 'header.php' ?>

<title>Katalog</title>

<div class="hero">
    <!-- <video class="video-background" playsinline autoplay muted loop id="bgvideo">
        <source src="assets/bluesmoke.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video> -->

    <div class="hero-content">
        <h1>Unser Katalog</h1>
        <a href="katalog.html" target="_blank"> Anschauen </a>
        <p>Klicken Sie zum runterladen auf das Bild
        <p>

        <div class="anschauen">
            <a href="/Katalog/Katalog.pdf" download>
                <img src="/Katalog/Bild.png" alt="AS" width="200">
            </a>
        </div>
    </div>



    <?php include 'footer.php' ?>

    <!-- Style -->
    <style>
        .anschauen img {
            transition: transform 0.7s ease;
            /* Übergang für die Transformation */
            padding-top: 20px;
        }

        .anschauen img:hover {
            transform: scale(1.1);
            /* Vergrößerung beim Hover */
        }