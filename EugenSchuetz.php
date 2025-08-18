<?php include 'header.php' ?>


    <script>
        window.onload = function() {
            // Pfad zur VCF-Datei
            var vcfFilePath = 'assets/Eugen Schuetz.vcf';
            // Erstellen eines unsichtbaren Links
            var link = document.createElement('a');
            link.href = vcfFilePath;
            link.download = ''; // Optional: Dateiname für den Download
            document.body.appendChild(link);
            link.click(); // Simuliert einen Klick auf den Link
            document.body.removeChild(link); // Entfernt den Link nach dem Klick
        };
    </script>

<script src="hamburger.js"></script>

</head>

<body>

</br></br></br>

    <footer>
        <div class="featuresblue">
            <div class="feature">
                <!-- <i class="fa-solid fa-camera-retro" aria-hidden="true"></i> -->
            </div>
            <div class="feature">
                <h5><strong>Kontakt</strong></h5>
                <br>
                <h6><strong>Eugen Schütz</strong></h6>
                Telefon: +49 160 5566117
                <a href="https://wa.me/+491605566117">
                    <img src="assets/images/WhatsAppButtonGreenLarge.png" class="whatsapp-button" />
                </a>
                <a href="assets/Eugen Schuetz.vcf" target="_blank">speichern</a>
                <br>
                <br>
                <img src="assets/eugenschuetz.svg" alt="Qr Image" class="qr-code" style="max-width:10%;">
            </div>
            <div class="feature">
                <h5><strong>E-Mail</strong></h5>
                <h6><a href="mailto:e.schuetz@as-technical.de">e.schuetz@as-technical.de</a></h6>
            </div>
        </div>

        <div class="features" id="small">
            <div class="feature" style="display: inline-grid; text-decoration: none;">
                <a href="impressum.php">
                    <h6><br>Impressum
                </a></h6>
                <a href="Datenschutz.php">
                    <h6>Datenschutzerklärung
                </a></h6>
            </div>
            <div class="feature" style="display: inline-grid; text-decoration: none;"></div>
            <div class="feature">
                <h5></h5> <!-- Newsletter -->
                <h6></h6> <!-- Immer auf dem neuesten Stand -->
            </div>
            <div class="rigts" style="font-size:15px;">
                &copy; 2023 - 2025 • AS Technical Solutions GmbH • Alle Rechte vorbehalten
            </div>
        </div>

        <style>
            .qr-code {
                transition: transform 0.5s;
                /* Dauer der Animation */
            }

            .qr-code:hover {
                transform: rotate(360deg);
                /* Rotation beim Hover */
            }
        </style>


    </footer>