<?php
$page_title = 'Trade Shows';
$page_desc = 'Ker Transport tradeshow logistics — exhibit freight planned backwards from move-in, delivered on time to the show floor and back.';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <div class="page-hero-grid">
        <div>
          <p class="eyebrow">Tradeshow specialist</p>
          <h1><?php echo c_e('ts_hero_title', 'Don’t let shipping steal the spotlight.'); ?></h1>
          <p><?php echo c_e('ts_hero_lead', 'The hard part of show freight isn’t the miles — it’s the timing. We plan backwards from move-in so your booth arrives ready.'); ?></p>
          <div class="btn-group-ker mt-4">
            <a href="contact.php#quote" class="btn-ker btn-ker-primary"><i class="bi bi-calendar-event"></i> Request event quote</a>
            <a href="tel:<?php echo htmlspecialchars($site_phone_href); ?>" class="btn-ker btn-ker-ghost"><i class="bi bi-telephone"></i> <?php echo htmlspecialchars($site_phone); ?></a>
          </div>
        </div>
        <div class="page-hero-visual">
          <img src="<?php echo img_e('ts_hero_image', 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&w=1400&q=80'); ?>" alt="Trade show exhibition floor" width="1400" height="900">
        </div>
      </div>
    </div>
  </section>

  <section class="section section-mist">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-6 reveal">
          <p class="eyebrow">Event logistics</p>
          <h2 class="section-title"><?php echo c_e('ts_body_title', 'Zero-failure event freight.'); ?></h2>
          <p class="section-lead">
            <?php echo c_e('ts_body_lead', 'Show floors don’t wait. Ker Transport coordinates exhibit freight to and from the venue with one point of contact — ready on time, picked up on time, delivered on time.'); ?>
          </p>
          <ul class="check-list">
            <li><i class="bi bi-check-circle-fill"></i> Dedicated event transportation experts</li>
            <li><i class="bi bi-check-circle-fill"></i> Backwards planning from your move-in date</li>
            <li><i class="bi bi-check-circle-fill"></i> Round-trip exhibit management</li>
            <li><i class="bi bi-check-circle-fill"></i> Specialized equipment for unique freight</li>
            <li><i class="bi bi-check-circle-fill"></i> Expedited &amp; overnight for tight deadlines</li>
            <li><i class="bi bi-check-circle-fill"></i> Tracking to the venue and back</li>
          </ul>
        </div>
        <div class="col-lg-6 reveal reveal-delay-1">
          <div class="split-visual">
            <img
              src="<?php echo img_e('ts_hero_image', 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&w=1200&q=80'); ?>"
              alt="Trade show exhibition floor"
              width="1200"
              height="800"
            >
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section section-ink">
    <div class="container">
      <div class="reveal">
        <p class="eyebrow">How it works</p>
        <h2 class="section-title">Plan backwards from move-in.</h2>
        <p class="section-lead">We reverse-engineer the calendar so freight isn’t scrambling at the last mile.</p>
      </div>
      <div class="feature-grid cols-3">
        <article class="feature-block reveal">
          <h3><i class="bi bi-1-circle"></i> Lock the window</h3>
          <p>Move-in date, advance warehouse cutoffs, and empty return windows become the backbone of the plan.</p>
        </article>
        <article class="feature-block reveal reveal-delay-1">
          <h3><i class="bi bi-2-circle"></i> Match the move</h3>
          <p>Right equipment for booth crates, displays, and irregular freight — van, flatbed, or expedited when the clock is tight.</p>
        </article>
        <article class="feature-block reveal reveal-delay-2">
          <h3><i class="bi bi-3-circle"></i> Stay on it</h3>
          <p>Proactive updates to the dock and back. When rigger crews are scheduled, arrival hits the window.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="section section-ash">
    <div class="container">
      <div class="reveal">
        <p class="eyebrow">High stakes</p>
        <h2 class="section-title">When a delay isn’t an option.</h2>
      </div>
      <div class="feature-grid">
        <article class="feature-block reveal">
          <h3>Trade show deadlines</h3>
          <p>Freight ready on time, picked up on time, delivered on time — tracked to the venue and back the whole way.</p>
        </article>
        <article class="feature-block reveal reveal-delay-1">
          <h3>Rigger-involved loads</h3>
          <p>When cranes and rigging crews are scheduled to receive, we coordinate arrival so expensive labor isn’t standing idle.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="section section-red">
    <div class="container">
      <div class="row align-items-center g-4">
        <div class="col-lg-8 reveal">
          <h2 class="section-title">Shipping a show?</h2>
          <p class="section-lead mb-0">Send the show name, move-in date, and origin — we’ll build the plan around the floor schedule.</p>
        </div>
        <div class="col-lg-4 reveal reveal-delay-1">
          <div class="btn-group-ker">
            <a href="contact.php#quote" class="btn-ker btn-ker-dark"><i class="bi bi-send"></i> Request event quote</a>
            <a href="tel:<?php echo htmlspecialchars($site_phone_href); ?>" class="btn-ker btn-ker-ghost"><i class="bi bi-telephone"></i> <?php echo htmlspecialchars($site_phone); ?></a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
