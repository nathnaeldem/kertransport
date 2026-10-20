<?php
$page_title = 'Contact';
$page_desc = 'Contact Ker Transport in Las Vegas — request a freight quote, share pain points, or call 725-377-4143.';
require_once __DIR__ . '/includes/header.php';

$form_status = $_GET['status'] ?? '';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <div class="page-hero-grid">
        <div>
          <p class="eyebrow">Contact</p>
          <h1><?php echo c_e('contact_hero_title', 'Got freight to move? Let’s make it.'); ?></h1>
          <p><?php echo c_e('contact_hero_lead', 'Send the lane and the deadline — we’ll send back a plan, not just a price.'); ?></p>
          <div class="btn-group-ker mt-4">
            <a href="#quote" class="btn-ker btn-ker-primary"><i class="bi bi-pencil-square"></i> Quote form</a>
            <a href="tel:<?php echo htmlspecialchars($site_phone_href); ?>" class="btn-ker btn-ker-ghost"><i class="bi bi-telephone-fill"></i> <?php echo htmlspecialchars($site_phone); ?></a>
          </div>
        </div>
        <div class="page-hero-visual">
          <img src="<?php echo img_e('contact_hero_image', 'https://images.unsplash.com/photo-1566576912321-d58ddd7a6088?auto=format&fit=crop&w=1400&q=80'); ?>" alt="Freight shipping dock" width="1400" height="900">
        </div>
      </div>
    </div>
  </section>

  <section class="section section-mist" id="quote">
    <div class="container">
      <div class="contact-grid">
        <div class="reveal">
          <p class="eyebrow">Reach us</p>
          <h2 class="section-title">Ker Transport</h2>
          <p class="section-lead">Las Vegas freight brokerage — specialty freight &amp; tradeshow logistics.</p>

          <div class="contact-detail">
            <i class="bi bi-telephone-fill" aria-hidden="true"></i>
            <div>
              <strong>Phone</strong>
              <a href="tel:<?php echo htmlspecialchars($site_phone_href); ?>"><?php echo htmlspecialchars($site_phone); ?></a>
            </div>
          </div>
          <div class="contact-detail">
            <i class="bi bi-envelope-fill" aria-hidden="true"></i>
            <div>
              <strong>Email</strong>
              <a href="mailto:<?php echo htmlspecialchars($site_email); ?>"><?php echo htmlspecialchars($site_email); ?></a>
            </div>
          </div>
          <div class="contact-detail">
            <i class="bi bi-geo-alt-fill" aria-hidden="true"></i>
            <div>
              <strong>Location</strong>
              <span><?php echo htmlspecialchars($site_city); ?></span>
            </div>
          </div>
        </div>

        <div class="form-shell reveal reveal-delay-1">
          <?php if ($form_status === 'sent'): ?>
            <div class="alert alert-ker success mb-4" role="status">Thanks — your message is ready. We’ll follow up shortly. You can also call <?php echo htmlspecialchars($site_phone); ?>.</div>
          <?php elseif ($form_status === 'error'): ?>
            <div class="alert alert-ker mb-4" role="alert">Please fill in your name, email, and message, then try again.</div>
          <?php endif; ?>

          <h3 class="mb-1" style="font-size: 1.35rem;">Request a quote</h3>
          <p class="text-secondary mb-4" style="font-weight: 300;">Origin, destination, freight details — whatever you know helps.</p>

          <form class="form-ker" action="process-contact.php" method="post" novalidate>
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label" for="name">Name</label>
                <input class="form-control" type="text" id="name" name="name" required autocomplete="name">
              </div>
              <div class="col-md-6">
                <label class="form-label" for="company">Company</label>
                <input class="form-control" type="text" id="company" name="company" autocomplete="organization">
              </div>
              <div class="col-md-6">
                <label class="form-label" for="email">Email</label>
                <input class="form-control" type="email" id="email" name="email" required autocomplete="email">
              </div>
              <div class="col-md-6">
                <label class="form-label" for="phone">Phone</label>
                <input class="form-control" type="tel" id="phone" name="phone" autocomplete="tel">
              </div>
              <div class="col-md-6">
                <label class="form-label" for="origin">Origin</label>
                <input class="form-control" type="text" id="origin" name="origin" placeholder="City, ST">
              </div>
              <div class="col-md-6">
                <label class="form-label" for="destination">Destination</label>
                <input class="form-control" type="text" id="destination" name="destination" placeholder="City, ST">
              </div>
              <div class="col-12">
                <label class="form-label" for="service">Service interest</label>
                <select class="form-select" id="service" name="service">
                  <option value="General freight">General freight</option>
                  <option value="LTL">LTL</option>
                  <option value="Partial">Partial</option>
                  <option value="Truckload">Truckload</option>
                  <option value="Trade show">Trade show / event</option>
                  <option value="Expedited">Expedited</option>
                  <option value="Other specialty">Other specialty</option>
                </select>
              </div>
              <div class="col-12">
                <label class="form-label" for="message">Message / pain points</label>
                <textarea class="form-control" id="message" name="message" required placeholder="Deadlines, freight type, weight, show dates…"></textarea>
              </div>
              <div class="col-12">
                <button type="submit" class="btn-ker btn-ker-primary"><i class="bi bi-send-fill"></i> Send request</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
