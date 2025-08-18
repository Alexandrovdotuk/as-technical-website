<?php include 'header.php' ?>

<script>
    window.onload = function() {
        // Path to the VCF file
        var vcfFilePath = '../assets/Alexander Alexandrov.vcf';
        // Create an invisible link
        var link = document.createElement('a');
        link.href = vcfFilePath;
        link.download = ''; // Optional: Filename for download
        document.body.appendChild(link);
        link.click(); // Simulates a click on the link
        document.body.removeChild(link); // Removes the link after the click
    };
</script>

<script src="../hamburger.js"></script>

</head>
<body>

</br></br></br>

<footer>
    <div class="featuresblue">
        <div class="feature">
            <!-- <i class="fa-solid fa-camera-retro" aria-hidden="true"></i> -->
        </div>
        <div class="feature">
            <h5><strong>Contact</strong></h5>
            <br>
            <h6><strong>Alexander Alexandrov</strong></h6>
            Phone: +49 170 3029972 <a href="https://wa.me/+491703029972">
            <img src="../assets/images/WhatsAppButtonGreenLarge.png" class="whatsapp-button" alt="WhatsApp Contact Button" /></a>
            <a href="../assets/Alexander Alexandrov.vcf" target="_blank">Save Contact</a>
            <br><br>
            <img src="../assets/alex.png" alt="QR Code for Contact" class="qr-code" style="max-width:20%;">
        </div>
        <div class="feature">
            <h5><strong>Email</strong></h5>
            <h6><a href="mailto:a.alexandrov@as-technical.de">a.alexandrov@as-technical.de</a></h6>
        </div>
    </div>

    <div class="features" id="small">
        <div class="feature" style="display: inline-grid; text-decoration: none;">
            <a href="impressum.php"><h6><br>Imprint</h6></a>
            <a href="Datenschutz.php"><h6>Privacy Policy</h6></a>
        </div>
        <div class="feature" style="display: inline-grid; text-decoration: none;">
        </div>
        <div class="feature">
            <h5></h5>   <!-- Newsletter -->
            <h6></h6>   <!-- Stay up to date -->
        </div>

        <div class="rigts" style="font-size:15px;">
            © 2023 - 2025 • AS Technical Solutions GmbH • All rights reserved
        </div>
    </div>

    <style>
        .qr-code {
            transition: transform 0.5s; /* Animation duration */
        }

        .qr-code:hover {
            transform: rotate(360deg); /* Rotation on hover */
        }
    </style>
</footer>

</body>
</html>