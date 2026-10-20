<footer class="site-footer">
  <div class="footer-glow" aria-hidden="true"></div>
  <div class="container">
    <div class="row g-5 footer-top">
      <div class="col-lg-5">
        <a href="index.php" class="footer-brand">
          <img src="assets/img/logo.png" alt="Ker Transport" class="footer-logo">
          <div>
            <span class="footer-ker">KER</span>
            <span class="footer-transport">TRANSPORT</span>
            <span class="footer-tag"><?php echo htmlspecialchars($site_tagline); ?></span>
          </div>
        </a>
        <p class="footer-blurb">
          Specialty freight &amp; tradeshow logistics from Las Vegas — one coordinator from quote to delivery across North America.
        </p>
      </div>
      <div class="col-6 col-md-4 col-lg-2">
        <h3 class="footer-heading">Company</h3>
        <ul class="footer-links">
          <li><a href="about.php">About Ker</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="trade-shows.php">Trade Shows</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>
      <div class="col-6 col-md-4 col-lg-2">
        <h3 class="footer-heading">Get started</h3>
        <ul class="footer-links">
          <li><a href="contact.php#quote">Request a quote</a></li>
          <li><a href="services.php">Core freight</a></li>
          <li><a href="trade-shows.php">Event logistics</a></li>
        </ul>
      </div>
      <div class="col-md-4 col-lg-3">
        <h3 class="footer-heading">Contact</h3>
        <ul class="footer-contact">
          <li>
            <i class="bi bi-telephone-fill" aria-hidden="true"></i>
            <a href="tel:<?php echo htmlspecialchars($site_phone_href); ?>"><?php echo htmlspecialchars($site_phone); ?></a>
          </li>
          <li>
            <i class="bi bi-envelope-fill" aria-hidden="true"></i>
            <a href="mailto:<?php echo htmlspecialchars($site_email); ?>"><?php echo htmlspecialchars($site_email); ?></a>
          </li>
          <li>
            <i class="bi bi-geo-alt-fill" aria-hidden="true"></i>
            <span><?php echo htmlspecialchars($site_city); ?></span>
          </li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; <?php echo date('Y'); ?> Ker Transport. Specialty Freight &amp; Tradeshow Logistics.</p>
      <p class="footer-loc"><?php echo htmlspecialchars($site_city); ?></p>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
