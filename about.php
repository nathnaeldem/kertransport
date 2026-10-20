<?php
$page_title = 'Company';
$page_desc = 'About Ker Transport — Las Vegas freight brokerage specializing in over-the-road freight and tradeshow logistics across North America.';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <div class="page-hero-grid">
        <div>
          <p class="eyebrow">Company</p>
          <h1><?php echo c_e('about_hero_title', 'Las Vegas rooted. Nationwide lanes.'); ?></h1>
          <p><?php echo c_e('about_hero_lead', 'Ker Transport is a freight brokerage built around one idea: one team that owns your load from quote to delivery.'); ?></p>
          <div class="btn-group-ker mt-4">
            <a href="contact.php#quote" class="btn-ker btn-ker-primary"><i class="bi bi-clipboard-check"></i> Get a quote</a>
            <a href="services.php" class="btn-ker btn-ker-ghost"><i class="bi bi-grid-3x3-gap"></i> Our services</a>
          </div>
        </div>
        <div class="page-hero-visual">
          <img src="<?php echo img_e('about_hero_image', 'https://images.unsplash.com/photo-1519003722824-194d4455a60c?auto=format&fit=crop&w=1400&q=80'); ?>" alt="Semi truck on the highway" width="1400" height="900">
        </div>
      </div>
    </div>
  </section>

  <section class="section section-mist">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-6 reveal">
          <div class="split-visual">
            <img
              src="<?php echo img_e('about_body_image', 'https://images.unsplash.com/photo-1519003722824-194d4455a60c?auto=format&fit=crop&w=1200&q=80'); ?>"
              alt="Semi truck on the highway at dusk"
              width="1200"
              height="800"
            >
          </div>
        </div>
        <div class="col-lg-6 reveal reveal-delay-1">
          <p class="eyebrow">Who we are</p>
          <h2 class="section-title"><?php echo c_e('about_body_title', 'Tradeshow specialist. Freight problem-solvers.'); ?></h2>
          <p class="section-lead">
            <?php echo c_e('about_body_lead', 'Based in Las Vegas, Ker Transport connects shippers with the right carriers for LTL, partial, truckload, and specialty freight — with a signature focus on tradeshow and event logistics.'); ?>
          </p>
          <p class="section-lead mb-0">
            No juggling carriers, rate sheets, and schedules on your own. You get a single point of contact who selects equipment, balances cost against service level, and stays accountable until the dock clears.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="section section-ink">
    <div class="container">
      <div class="reveal">
        <p class="eyebrow">How we work</p>
        <h2 class="section-title">Outsource the chaos. Keep the control.</h2>
        <p class="section-lead">As a 3PL partner we handle the heavy lifting so you can focus on your business — every request treated as a priority.</p>
      </div>
      <div class="feature-grid cols-3">
        <article class="feature-block reveal">
          <h3>One coordinator</h3>
          <p>Quote to delivery with a human who already knows your lane, your freight, and what’s riding on the ETA.</p>
        </article>
        <article class="feature-block reveal reveal-delay-1">
          <h3>Right equipment</h3>
          <p>Van, flatbed, reefer, expedited — matched to the load, not forced into a one-size network.</p>
        </article>
        <article class="feature-block reveal reveal-delay-2">
          <h3>Eyes on it</h3>
          <p>Tracking and proactive updates are how we operate — especially when show floors and plant lines can’t wait.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="section section-ash">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-6 reveal">
          <p class="eyebrow">Programs</p>
          <h2 class="section-title">Grow when it makes sense.</h2>
          <p class="section-lead">
            Start with a single fast quote. Scale into event logistics or a managed freight program with lane mapping, carrier alignment, and performance reporting.
          </p>
          <a href="services.php" class="btn-ker btn-ker-primary"><i class="bi bi-arrow-right-circle"></i> View services</a>
        </div>
        <div class="col-lg-6 reveal reveal-delay-1">
          <div class="program-band" style="border-top: 0; padding-top: 0;">
            <span class="program-label">Contact</span>
            <div>
              <h3>Ker Transport</h3>
              <p><?php echo htmlspecialchars($site_city); ?></p>
            </div>
            <ul>
              <li><a href="tel:<?php echo htmlspecialchars($site_phone_href); ?>"><?php echo htmlspecialchars($site_phone); ?></a></li>
              <li><a href="mailto:<?php echo htmlspecialchars($site_email); ?>"><?php echo htmlspecialchars($site_email); ?></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section section-dark">
    <div class="container text-center reveal">
      <h2 class="section-title mx-auto">Ready to move freight?</h2>
      <p class="section-lead mx-auto">Let’s put a coordinator on your next lane.</p>
      <a href="contact.php#quote" class="btn-ker btn-ker-primary"><i class="bi bi-send"></i> Get a quote</a>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
