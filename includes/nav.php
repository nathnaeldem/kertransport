<header class="site-header" id="siteHeader">
  <div class="nav-shell">
    <nav class="nav-pill nav-left" aria-label="Primary">
      <a href="index.php" class="<?php echo $current_page === 'index' ? 'is-active' : ''; ?>">Home</a>
      <a href="services.php" class="<?php echo $current_page === 'services' ? 'is-active' : ''; ?>">Services</a>
      <a href="trade-shows.php" class="<?php echo $current_page === 'trade-shows' ? 'is-active' : ''; ?>">Trade Shows</a>
      <a href="about.php" class="<?php echo $current_page === 'about' ? 'is-active' : ''; ?>">Company</a>
    </nav>

    <button class="nav-toggle" id="navToggle" type="button" aria-expanded="false" aria-controls="navMobile" aria-label="Open menu">
      <span></span><span></span>
    </button>

    <a class="brand-tab" href="index.php" aria-label="Ker Transport home">
      <img src="assets/img/logo.png" alt="" class="brand-tab-logo">
      <span class="brand-tab-text">
        <span class="brand-tab-ker">KER</span>
        <span class="brand-tab-sub">TRANSPORT</span>
      </span>
    </a>

    <div class="nav-right">
      <a href="contact.php" class="nav-text-link <?php echo $current_page === 'contact' ? 'is-active' : ''; ?>">Contact</a>
      <a href="tel:<?php echo htmlspecialchars($site_phone_href); ?>" class="nav-call">
        <i class="bi bi-telephone-fill" aria-hidden="true"></i>
        <span>Call Us</span>
      </a>
      <a href="tel:<?php echo htmlspecialchars($site_phone_href); ?>" class="nav-call-icon" aria-label="Call Ker Transport">
        <i class="bi bi-telephone-fill" aria-hidden="true"></i>
      </a>
      <a href="contact.php#quote" class="nav-quote">
        <span>Get a Quote</span>
        <span class="nav-quote-arrow"><i class="bi bi-arrow-right" aria-hidden="true"></i></span>
      </a>
    </div>
  </div>

  <div class="nav-mobile" id="navMobile">
    <a href="index.php" class="<?php echo $current_page === 'index' ? 'is-active' : ''; ?>">Home</a>
    <a href="services.php" class="<?php echo $current_page === 'services' ? 'is-active' : ''; ?>">Services</a>
    <a href="trade-shows.php" class="<?php echo $current_page === 'trade-shows' ? 'is-active' : ''; ?>">Trade Shows</a>
    <a href="about.php" class="<?php echo $current_page === 'about' ? 'is-active' : ''; ?>">Company</a>
    <a href="contact.php">Contact</a>
    <a href="tel:<?php echo htmlspecialchars($site_phone_href); ?>"><i class="bi bi-telephone-fill"></i> Call Us</a>
    <a href="contact.php#quote" class="nav-quote">Get a Quote</a>
  </div>
</header>
