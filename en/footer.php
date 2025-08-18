<!-- Footer Area -->
<div class="features" style="background:rgba(255, 255, 255, 0);">
  <div class="logo-container">
    <a href="https://www.bastra.de/" target="_blank"><img src="../logos/Bastra.png" alt="Bastra Logo"></a>
    <a href="https://www.graef.de/" target="_blank"><img src="../logos/GRAEF.png" alt="Graef Logo"></a>
    <a href="https://www.kolbe-foodtec.com/" target="_blank"><img src="../logos/KOLBE.jpg" alt="Kolbe Logo"></a>
    <a href="https://nowickifm.com/" target="_blank"><img src="../logos/nowicki.png" alt="Nowicki Logo"></a>
    <a href="https://www.heinrichgmbh.de/" target="_blank"><img src="../logos/heinrich.jpg" alt="Heinrich Logo"></a>
    <a href="https://www.foodlogistik.de/" target="_blank"><img src="../logos/foodlogistik.png" alt="Foodlogistik Logo"></a>
    <a href="https://www.dueker-rex.de" target="_blank"><img src="../logos/rex.png" alt="Dücker Rex Logo"></a>
    <a href="https://www.atosa.de" target="_blank"><img src="../logos/atosa.png" alt="Atosa Logo"></a>
    <a href="https://www.mohn-gmbh.com/" target="_blank"><img src="../logos/mohn.svg" alt="Mohn Logo"></a>

    <a href="https://zermat.es/en/" target="_blank"><img src="../logos/logo-zermat-color.svg" alt="Zermat Logo"></a>
    <a href="https://www.mado.de/" target="_blank"><img src="../logos/mado.png" alt="Mado Logo"></a>
    <a href="https://www.vakona.de/" target="_blank"><img src="../logos/vakona.jpeg" alt="Vakona Logo"></a>
  </div>
</div>

<!-- Footer -->
<footer>
  <div class="featuresblue">
    <!-- Address -->
    <div class="feature">
      <h5><strong>Address</strong></h5>
      <h6>
        AS Technical Solutions GmbH<br>
        Industrieweg 13-15<br>
        48324 Sendenhorst
      </h6>
    </div>

    <!-- Contact -->
    <div class="feature">
      <h5><strong>Contact</strong></h5>
      <h6 class="contact-name"><strong>Robert Kutschke (Sales)</strong></h6>
      <h6>Phone: +49 160 91658700</h6>
      <h6>Email: <a href="mailto:r.kutschke@as-technical.de">r.kutschke@as-technical.de</a></h6>
      <a href="https://wa.me/16091658700"><img src="../assets/images/WhatsAppButtonGreenLarge.png" class="whatsapp-button" alt="WhatsApp Robert Kutschke" /></a>
      <br><a href="robertkutschke.php" target="_blank">Save Contact</a><br><br>

      <h6 class="contact-name"><strong>Eugen Schütz (Service)</strong></h6>
      <h6>Phone: +49 160 5566117</h6>
      <h6>Email: <a href="mailto:e.schuetz@as-technical.de">e.schuetz@as-technical.de</a></h6>
      <a href="https://wa.me/1605566117"><img src="../assets/images/WhatsAppButtonGreenLarge.png" class="whatsapp-button" alt="WhatsApp Eugen Schütz" /></a>
      <br><a href="eugenschuetz.php" target="_blank">Save Contact</a><br><br>

      <h6 class="contact-name"><strong>Alexander Alexandrov (Service)</strong></h6>
      <h6>Phone: +49 170 3029972</h6>
      <h6>Email: <a href="mailto:a.alexandrov@as-technical.de">a.alexandrov@as-technical.de</a></h6>
      <a href="https://wa.me/1703029972"><img src="../assets/images/WhatsAppButtonGreenLarge.png" class="whatsapp-button" alt="WhatsApp Alexander Alexandrov" /></a>
      <br><a href="alexandrov.php" target="_blank">Save Contact</a>
    </div>

    <!-- Imprint and Privacy Policy -->
    <div class="feature legal-links">
      <a href="imprint.php">
        <h6>Imprint</h6>
      </a>
      <a href="privacy-policy.php">
        <h6>Privacy Policy</h6>
      </a>
    </div>

    <!-- Copyright -->
    <div class="rights">
      © 2023 - 2025 • AS Technical Solutions GmbH • All Rights Reserved
    </div>
  </div>
</footer>

<!-- Page-Up-Button -->
<button id="pageUpBtn" onclick="scrollToTop()"></button>

<script>
  // Scroll function for Page-Up-Button
  window.onscroll = function() {
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
    padding: 20px;
  }

  .logo-container a {
    display: block;
    border: 2px solid #1a2526;
    border-radius: 50px;
    padding: 5px 10px;
    transition: transform 0.3s ease;
    background-color: white;
  }

  .logo-container img {
    width: 100px;
    height: 50px;
    object-fit: contain;
  }

  .logo-container a:hover {
    transform: scale(1.1);
  }

  /* Footer Contact Area */
  .featuresblue {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    padding: 20px;
    background: #1a2526;
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

  /* Responsive Adjustments */
  @media only screen and (max-width: 768px) {
    .logo-container img {
      width: 80px;
      height: 40px;
    }

    .logo-container {
      gap: 20px;
    }
  }
</style>