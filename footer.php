<!-- Footer-Bereich -->
<div class="features" style="background:rgba(255, 255, 255, 0);">
  <div class="logo-container">
    <a><img src="/logos/Bastra.png" alt="Bastra Logo"></a>
    <a><img src="logos/GRAEF.png" alt="Graef Logo"></a>
    <a><img src="logos/KOLBE.jpg" alt="Kolbe Logo"></a>
    <!-- <a href="https://www.kolbe-foodtec.com/" target="_blank"> -->
    <a><img src="logos/nowicki.png" alt="Nowicki Logo"></a>
    <a><img src="logos/heinrich.jpg" alt="Heinrich Logo"></a>
    <a><img src="logos/foodlogistik.png" alt="Foodlogistik Logo"></a>
    <a><img src="logos/rex.png" alt="Dücker Rex Logo"></a>
    <a><img src="logos/atosa.png" alt="Atosa Logo"></a>
    <a><img src="logos/mohn.svg" alt="Mohn Logo"></a>
    <a><img src="logos/logo-zermat-color.svg" alt="Zermat Logo"></a>
    <a><img src="logos/mado.png" alt="Mado Logo"></a>
    <a><img src="logos/vakona.jpeg" alt="Vakona Logo"></a>
  </div>
</div>

<!-- Footer -->
<footer>
  <div class="featuresblue">
    <!-- Adresse -->
    <div class="feature">
      <h5><strong>Adresse</strong></h5>
      <h6>
        AS Technical Solutions GmbH<br>
        Industrieweg 13-15<br>
        48324 Sendenhorst
      </h6>
    </div>

    <!-- Kontakt -->
    <div class="feature">
      <h5><strong>Kontakt</strong></h5>
      <h6 class="contact-name"><strong>Robert Kutschke (Vertrieb)</strong></h6>
      <h6>Telefon: +49 160 91658700</h6>
      <h6>E-mail: <a href="mailto:r.kutschke@as-technical.de">r.kutschke@as-technical.de</a></h6>
      <a href="https://wa.me/16091658700"><img src="assets/images/WhatsAppButtonGreenLarge.png" class="whatsapp-button"
          alt="WhatsApp Robert Kutschke" /></a>
      <br><a href="robertkutschke.php" target="_blank">Kontakt speichern</a><br><br>

      <h6 class="contact-name"><strong>Eugen Schütz (Service)</strong></h6>
      <h6>Telefon: +49 160 5566117</h6>
      <h6>E-mail: <a href="mailto:e.schuetz@as-technical.de">e.schuetz@as-technical.de</a></h6>
      <a href="https://wa.me/1605566117"><img src="assets/images/WhatsAppButtonGreenLarge.png" class="whatsapp-button"
          alt="WhatsApp Eugen Schütz" /></a>
      <br><a href="eugenschuetz.php" target="_blank">Kontakt speichern</a><br><br>

      <h6 class="contact-name"><strong>Alexander Alexandrov (Service)</strong></h6>
      <h6>Telefon: +49 170 3029972</h6>
      <h6>E-mail: <a href="mailto:a.alexandrov@as-technical.de">a.alexandrov@as-technical.de</a></h6>
      <a href="https://wa.me/1703029972"><img src="assets/images/WhatsAppButtonGreenLarge.png" class="whatsapp-button"
          alt="WhatsApp Alexander Alexandrov" /></a>
      <br><a href="Alexandrov.php" target="_blank">Kontakt speichern</a>
    </div>

    <!-- Impressum und Datenschutz -->
    <div class="feature legal-links">
      <a href="impressum.php">
        <h6>Impressum</h6>
      </a>
      <a href="datenschutz.php">
        <h6>Datenschutzerklärung</h6>
      </a>
      <a href="agb.php">
        <h6>AGB</h6>
      </a>
    </div>

    <!-- Copyright -->
    <div class="rights">
      © 2023 - 2025 • AS Technical Solutions GmbH • Alle Rechte vorbehalten
    </div>
  </div>
</footer>

<!-- Page-Up-Button -->
<button id="pageUpBtn" onclick="scrollToTop()"></button>

<script>
  // Scroll-Funktion für Page-Up-Button
  window.onscroll = function () {
    scrollFunction();
  };

  function scrollFunction() {
    var pageUpBtn = document.getElementById("pageUpBtn");
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      pageUpBtn.style.display = "block";
    } else {
      pageUpBtn.style.display = "none";
    }
  }

  function scrollToTop() {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  }
</script>

<script src="https://unpkg.com/swiper@10/swiper-bundle.min.js"></script>





<style>
  /* Logo-Container Styling */
  .logo-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    gap: 30px;
    /* Abstand zwischen den Logos */
    padding: 20px;
  }

  .logo-container a {
    display: block;
    border: 2px solid #1a2526;
    /* Ovale Blase mit der gleichen Farbe wie der Footer-Hintergrund */
    border-radius: 50px;
    /* Ovale Form */
    padding: 5px 10px;
    /* Innenabstand für die "Blase" */
    transition: transform 0.3s ease;
    background-color: white;

  }

  .logo-container img {
    width: 100px;
    /* Kleinere Breite für Desktop */
    height: 50px;
    /* Schmalere Höhe */
    object-fit: contain;
    /* Logos bleiben proportional */
  }

  .logo-container a:hover {
    transform: scale(1.1);
    /* Leichte Vergrößerung beim Hover */
  }

  /* Footer-Kontaktbereich */
  .featuresblue {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    padding: 20px;
    background: #1a2526;
    /* Dunkelblau für Kontrast */
    color: white;

    border: 2px solid #079ae3;
    border-radius: 30px;
    margin: 20px 20px 20px 20px;
  }

  .feature {
    margin: 10px;
    text-align: center;
  }

  .feature h5 {
    margin-bottom: 10px;
    font-size: 1.2em;
  }

  .feature h6 {
    margin: 5px 0;
    font-size: 0.9em;
  }

  .feature h6 strong {
    color: #079ae3;
  }



  .whatsapp-button {
    width: 140px;
    height: 40px;
    margin: 10px auto;
    margin-bottom: -15px !important;
    display: block;
    transition: transform 0.3s ease;
  }

  .whatsapp-button:hover {
    transform: scale(1.1);
  }

  .legal-links {
    display: flex;
    flex-direction: column;
    gap: 10px;
  }

  .legal-links a {
    color: white;
    text-decoration: none;
  }

  .legal-links a:hover {
    text-decoration: underline;
  }

  .rights {
    width: 100%;
    text-align: center;
    font-size: 15px;
    margin-top: 20px;
  }

  /* Page-Up-Button Styling */
  #pageUpBtn {
    display: none;
    position: fixed;
    bottom: 20px;
    right: 20px;
    width: 40px;
    height: 40px;
    background-color: #007bff;
    border: none;
    border-radius: 50%;
    cursor: pointer;
    z-index: 1000;
  }

  #pageUpBtn::before {
    content: '↑';
    color: white;
    font-size: 20px;
    line-height: 40px;
  }

  #pageUpBtn:hover {
    background-color: #0056b3;
  }

  /* Responsive Anpassungen */
  @media only screen and (max-width: 768px) {
    .logo-container img {
      width: 80px;
      /* Kleinere Breite für Mobile */
      height: 40px;
      /* Schmalere Höhe */
    }

    .logo-container {
      gap: 20px;
      /* Kleinerer Abstand für Mobile */
    }
  }
</style>