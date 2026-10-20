<?php
$page_title = 'Home';
$page_desc = 'Ker Transport — specialty freight & tradeshow logistics from Las Vegas. LTL, partial, truckload, and event freight with one team that owns it.';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="hero" id="hero">
    <div class="hero-media" aria-hidden="true">
      <img
        class="is-active"
        src="<?php echo img_e('home_hero_bg', 'assets/img/hero-bg.png'); ?>"
        alt=""
      >
    </div>
    <div class="hero-overlay" aria-hidden="true"></div>

    <div class="hero-stage">
      <div class="container hero-stage-inner">
        <div class="hero-copy">
          <div class="hero-badge">
            <i class="bi bi-star-fill" aria-hidden="true"></i>
            <span><?php echo c_e('home_hero_eyebrow', 'Tradeshow Specialist'); ?></span>
          </div>

          <h1>
            Nationwide coverage.<br>
            <span class="hero-grad"><?php echo c_e('home_hero_title', 'Right equipment. Right carrier. Every lane.'); ?></span>
          </h1>
          <p class="hero-lead">
            <?php echo c_e('home_hero_lead', 'LTL, partial, truckload, expedited, and specialty modes — matched to your deadline, budget, and freight profile.'); ?>
          </p>

          <a href="#services" class="hero-works">
            <span>See How It Works</span>
            <span class="hero-works-arrow"><i class="bi bi-arrow-right" aria-hidden="true"></i></span>
          </a>
        </div>
      </div>

      <div class="hero-bottom">
        <div class="container hero-bottom-inner">
          <div class="hero-stats">
            <div>
              <strong>100%</strong>
              <span>Single Point Accountability</span>
            </div>
            <div>
              <strong>24/7</strong>
              <span>Quote-to-Delivery Tracking</span>
            </div>
            <div>
              <strong>Custom</strong>
              <span>Equipment &amp; Capacity Match</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="marquee-line" aria-hidden="true">
    <div class="marquee-track">
      <span>LTL</span><span>Partial</span><span>Truckload</span><span>Trade Shows</span>
      <span>Expedited</span><span>Flatbed</span><span>Hazmat</span><span>Nationwide</span>
      <span>LTL</span><span>Partial</span><span>Truckload</span><span>Trade Shows</span>
      <span>Expedited</span><span>Flatbed</span><span>Hazmat</span><span>Nationwide</span>
    </div>
  </div>

  <section class="section section-dark">
    <div class="container">
      <div class="row align-items-end g-4">
        <div class="col-lg-7 reveal">
          <p class="eyebrow"><?php echo c_e('home_3pl_eyebrow', '3PL, defined'); ?></p>
          <h2 class="section-title"><?php echo c_e('home_3pl_title', 'Outsource the supply chain. Keep your focus.'); ?></h2>
        </div>
        <div class="col-lg-5 reveal reveal-delay-1">
          <p class="section-lead mb-0">
            <?php echo c_e('home_3pl_lead', 'A third-party logistics partner manages the heavy lifting — from a single mode to end-to-end execution — so you can do what you do best. Every request, however complex, is treated as a priority.'); ?>
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="section section-mist" id="services">
    <div class="container">
      <div class="reveal">
        <p class="eyebrow"><?php echo c_e('home_services_eyebrow', 'What we move'); ?></p>
        <h2 class="section-title"><?php echo c_e('home_services_title', 'Three core services — and everything around them.'); ?></h2>
        <p class="section-lead">
          <?php echo c_e('home_services_lead', 'LTL, partial, and full truckload over the road — plus the specialty handling real freight calls for.'); ?>
        </p>
      </div>

      <div class="service-rail">
        <article class="service-row reveal">
          <span class="service-num">01</span>
          <div>
            <h3><?php echo c_e('home_ltl_title', 'LTL'); ?></h3>
            <p><?php echo c_e('home_ltl_text', 'Less-than-truckload: share trailer space and pay only for the footprint your freight uses — the cost-effective choice when you don’t need a full truck.'); ?></p>
          </div>
        </article>
        <article class="service-row reveal reveal-delay-1">
          <span class="service-num">02</span>
          <div>
            <h3><?php echo c_e('home_partial_title', 'Partial'); ?></h3>
            <p><?php echo c_e('home_partial_text', 'More than a few LTL pallets but less than a full load — your freight rides direct with fewer touches, often faster and with less handling than LTL.'); ?></p>
          </div>
        </article>
        <article class="service-row reveal reveal-delay-2">
          <span class="service-num">03</span>
          <div>
            <h3><?php echo c_e('home_ftl_title', 'Truckload'); ?></h3>
            <p><?php echo c_e('home_ftl_text', 'A dedicated truck and driver for your freight alone — the fastest, most direct option for larger or time-sensitive shipments.'); ?></p>
          </div>
        </article>
      </div>

      <div class="mt-5 reveal">
        <a href="services.php" class="btn-ker btn-ker-dark">
          <i class="bi bi-grid-3x3-gap"></i> Explore all services
          <i class="bi bi-arrow-right"></i>
        </a>
      </div>
    </div>
  </section>

  <section class="section section-ink">
    <div class="container">
      <div class="reveal">
        <p class="eyebrow">Mode</p>
        <h2 class="section-title">How your freight travels.</h2>
        <p class="section-lead">Road first — with rail and air when the lane and deadline demand it.</p>
      </div>
      <div class="feature-grid cols-3">
        <article class="feature-block reveal">
          <h3><i class="bi bi-truck"></i> Over-the-Road</h3>
          <p>Our default and most flexible mode — reaching virtually any dock in North America. We match equipment and carrier to your lane, timeline, and budget.</p>
        </article>
        <article class="feature-block reveal reveal-delay-1">
          <h3><i class="bi bi-train-front"></i> Rail / Intermodal</h3>
          <p>Cost-effective, fuel-efficient long hauls that combine rail with truck pickup and delivery — strong for heavy, dense, or non-urgent freight.</p>
        </article>
        <article class="feature-block reveal reveal-delay-2">
          <h3><i class="bi bi-airplane"></i> Air (US Domestic)</h3>
          <p>The fastest option for time-critical, high-value, or AOG freight. When the shipment demands it, we arrange the lift that makes the deadline.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="section section-ash">
    <div class="container">
      <div class="reveal">
        <p class="eyebrow">Specialty</p>
        <h2 class="section-title">Beyond the standard load.</h2>
        <p class="section-lead">Trade show freight is our signature — with the specialty equipment and urgency windows freight actually needs.</p>
      </div>
      <div class="feature-grid">
        <article class="feature-block reveal">
          <h3><i class="bi bi-building"></i> Trade Show</h3>
          <p>Full-service exhibit freight to and from the show floor, on schedule — planned backwards from move-in.</p>
        </article>
        <article class="feature-block reveal reveal-delay-1">
          <h3><i class="bi bi-bounding-box"></i> Flatbed &amp; Open-deck</h3>
          <p>Open-deck equipment for oversized, heavy, or irregular freight — machinery, materials, and loads that don’t fit a van.</p>
        </article>
        <article class="feature-block reveal">
          <h3><i class="bi bi-lightning-charge"></i> Expedited</h3>
          <p>Premium speed for critical inventory, emergency parts, and high-priority freight — direct, often same-day or inside a guaranteed window.</p>
        </article>
        <article class="feature-block reveal reveal-delay-1">
          <h3><i class="bi bi-moon-stars"></i> Overnight / Guaranteed</h3>
          <p>Next-business-day delivery for urgent, time-sensitive shipments — fast, secure, and on time.</p>
        </article>
        <article class="feature-block reveal">
          <h3><i class="bi bi-exclamation-diamond"></i> Hazmat</h3>
          <p>Hazardous materials moved safely and in compliance — with carriers certified for the class you ship.</p>
        </article>
        <article class="feature-block reveal reveal-delay-1">
          <h3><i class="bi bi-thermometer-half"></i> Temperature-controlled</h3>
          <p>Refrigerated and climate-controlled transport that holds the range your cargo needs from pickup to delivery.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="section section-dark">
    <div class="container">
      <div class="row g-4 mb-4">
        <div class="col-lg-8 reveal">
          <p class="eyebrow">Operations</p>
          <h2 class="section-title">Freight with eyes on it.</h2>
          <p class="section-lead mb-0">
            Tracking isn’t an afterthought — it’s how we operate. We watch shipments in motion and stay ahead of problems before they reach your dock.
          </p>
        </div>
      </div>
    </div>
    <div class="container-fluid px-0">
      <div class="focus-strip">
        <article class="focus-item reveal">
          <h3>Trade show deadlines</h3>
          <p>Show floors don’t wait. We plan backwards from move-in and track freight to the venue and back.</p>
        </article>
        <article class="focus-item reveal reveal-delay-1">
          <h3>Rigger-involved loads</h3>
          <p>When cranes and crews are scheduled, timing is everything — we coordinate arrival to the window.</p>
        </article>
        <article class="focus-item reveal reveal-delay-2">
          <h3>Plant-down replacements</h3>
          <p>A line is stopped and every hour costs money. We watch critical parts door to door.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="section section-mist">
    <div class="container">
      <div class="reveal">
        <p class="eyebrow">How we engage</p>
        <h2 class="section-title">Programs built around how you ship.</h2>
        <p class="section-lead">Services are what we move. Programs are how we partner — from a fast quote to managed freight.</p>
      </div>

      <div class="program-band reveal">
        <span class="program-label">Start here</span>
        <div>
          <h3>Core Freight Execution</h3>
          <p>Fast quotes and dependable execution across LTL, partial, truckload, and expedited — spot or semi-recurring.</p>
        </div>
        <ul>
          <li>Quick, accurate quoting</li>
          <li>One responsive point of contact</li>
          <li>Every mode, every lane</li>
        </ul>
      </div>

      <div class="program-band reveal reveal-delay-1">
        <span class="program-label">Specialized</span>
        <div>
          <h3>Event Logistics Execution</h3>
          <p>Time-critical trade show and event coordination where a missed window isn’t an option.</p>
        </div>
        <ul>
          <li>Hard move-in deadlines, met</li>
          <li>Planned backwards from move-in</li>
          <li>Round-trip exhibit management</li>
        </ul>
      </div>

      <div class="program-band reveal reveal-delay-2">
        <span class="program-label">Scale</span>
        <div>
          <h3>Managed Freight Program</h3>
          <p>Turn reactive freight into a managed operation with visibility and accountability across your network.</p>
        </div>
        <ul>
          <li>Lane mapping &amp; carrier alignment</li>
          <li>Performance reporting</li>
          <li>Quarterly business reviews</li>
        </ul>
      </div>
    </div>
  </section>

  <section class="section section-red">
    <div class="container">
      <div class="row align-items-center g-4">
        <div class="col-lg-7 reveal">
          <p class="eyebrow">Let’s talk</p>
          <h2 class="section-title">Tell us where it hurts.</h2>
          <p class="section-lead mb-0">
            Missed deadlines? Freight you can’t see? Lanes that cost too much? Tell us the headache — we’ll tell you which program solves it.
          </p>
          <div class="pain-list">
            <span class="pain-chip">“My freight is always late.”</span>
            <span class="pain-chip">“I can never see where it is.”</span>
            <span class="pain-chip">“My lanes cost too much.”</span>
            <span class="pain-chip">“Carriers don’t show up.”</span>
          </div>
        </div>
        <div class="col-lg-5 reveal reveal-delay-1">
          <div class="btn-group-ker">
            <a href="contact.php#quote" class="btn-ker btn-ker-dark"><i class="bi bi-chat-dots"></i> Share your pain points</a>
            <a href="tel:<?php echo htmlspecialchars($site_phone_href); ?>" class="btn-ker btn-ker-ghost"><i class="bi bi-telephone"></i> Call <?php echo htmlspecialchars($site_phone); ?></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section section-ink">
    <div class="container">
      <div class="reveal">
        <p class="eyebrow">Nationwide coverage</p>
        <h2 class="section-title">Every lane in the country, in motion.</h2>
        <p class="section-lead">
          No fleet limits — we match each load to the right carrier on the right lane, anywhere it needs to go. Based in Las Vegas, covering North America.
        </p>
      </div>
      <div class="coverage-stats">
        <div class="coverage-stat reveal">
          <strong>3</strong>
          <span>Core services — LTL, partial, truckload</span>
        </div>
        <div class="coverage-stat reveal reveal-delay-1">
          <strong>Road · Rail · Air</strong>
          <span>Every mode your freight needs</span>
        </div>
        <div class="coverage-stat reveal reveal-delay-2">
          <strong>N. America</strong>
          <span>Wherever it ships from Las Vegas hub</span>
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
              src="<?php echo img_e('home_tradeshow_image', 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=1200&q=80'); ?>"
              alt="Freight warehouse and logistics operations"
              width="1200"
              height="800"
            >
          </div>
        </div>
        <div class="col-lg-6 reveal reveal-delay-1">
          <p class="eyebrow">Trade show logistics</p>
          <h2 class="section-title"><?php echo c_e('home_tradeshow_title', 'Don’t let shipping steal the spotlight.'); ?></h2>
          <p class="section-lead">
            <?php echo c_e('home_tradeshow_lead', 'The hard part of show freight isn’t the miles — it’s the timing. We plan backwards from move-in so booth, displays, and materials arrive ready.'); ?>
          </p>
          <ul class="check-list">
            <li><i class="bi bi-check-circle-fill"></i> Dedicated event transportation experts</li>
            <li><i class="bi bi-check-circle-fill"></i> Backwards planning from your move-in date</li>
            <li><i class="bi bi-check-circle-fill"></i> Ready on time, picked up on time, delivered on time</li>
            <li><i class="bi bi-check-circle-fill"></i> One point of contact throughout</li>
          </ul>
          <div class="mt-4">
            <a href="trade-shows.php" class="btn-ker btn-ker-primary"><i class="bi bi-calendar-event"></i> Visit trade show services</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section section-dark">
    <div class="container text-center reveal">
      <p class="eyebrow">Ready</p>
      <h2 class="section-title mx-auto" style="max-width: 16ch;"><?php echo c_e('home_cta_band_title', 'Got freight to move? Let’s make it.'); ?></h2>
      <p class="section-lead mx-auto"><?php echo c_e('home_cta_band_lead', 'Send us the lane and the deadline — we’ll send back a plan, not just a price.'); ?></p>
      <div class="btn-group-ker justify-content-center">
        <a href="contact.php#quote" class="btn-ker btn-ker-primary"><i class="bi bi-send"></i> Request a quote</a>
        <a href="tel:<?php echo htmlspecialchars($site_phone_href); ?>" class="btn-ker btn-ker-ghost"><i class="bi bi-telephone-fill"></i> Call <?php echo htmlspecialchars($site_phone); ?></a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
