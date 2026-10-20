<?php
$page_title = 'Services';
$page_desc = 'Ker Transport freight services — LTL, partial, truckload, expedited, flatbed, hazmat, temperature-controlled, and more across North America.';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <div class="page-hero-grid">
        <div>
          <p class="eyebrow">Services</p>
          <h1><?php echo c_e('services_hero_title', 'Specialty freight & over-the-road execution.'); ?></h1>
          <p><?php echo c_e('services_hero_lead', 'From a few pallets to a dedicated truck — plus the specialty modes and handling requirements real freight calls for.'); ?></p>
          <div class="btn-group-ker mt-4">
            <a href="contact.php#quote" class="btn-ker btn-ker-primary"><i class="bi bi-clipboard-check"></i> Get a quote</a>
            <a href="tel:<?php echo htmlspecialchars($site_phone_href); ?>" class="btn-ker btn-ker-ghost"><i class="bi bi-telephone"></i> <?php echo htmlspecialchars($site_phone); ?></a>
          </div>
        </div>
        <div class="page-hero-visual">
          <img src="<?php echo img_e('services_hero_image', 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=1400&q=80'); ?>" alt="Freight logistics warehouse" width="1400" height="900">
        </div>
      </div>
    </div>
  </section>

  <section class="section section-mist">
    <div class="container">
      <div class="reveal">
        <p class="eyebrow">Core</p>
        <h2 class="section-title">The three ways your freight rides.</h2>
        <p class="section-lead">All over the road — matched to footprint, timeline, and budget.</p>
      </div>
      <div class="service-rail">
        <article class="service-row reveal">
          <span class="service-num">LTL</span>
          <div>
            <h3>Less-than-truckload</h3>
            <p>Share trailer space and pay only for the footprint your freight uses. Ideal when you don’t need a full truck but still need reliable dock-to-dock coverage.</p>
          </div>
        </article>
        <article class="service-row reveal reveal-delay-1">
          <span class="service-num">PART</span>
          <div>
            <h3>Partial truckload</h3>
            <p>More than a few LTL pallets but less than a full load. Your freight rides more direct with fewer touches — often faster than network LTL.</p>
          </div>
        </article>
        <article class="service-row reveal reveal-delay-2">
          <span class="service-num">FTL</span>
          <div>
            <h3>Full truckload</h3>
            <p>A dedicated truck and driver for your freight alone. The fastest, most direct option for larger or time-sensitive shipments, full or volume.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="section section-ink">
    <div class="container">
      <div class="reveal">
        <p class="eyebrow">Mode</p>
        <h2 class="section-title">Road, rail, or air.</h2>
        <p class="section-lead">We select the mode that fits the lane — not the other way around.</p>
      </div>
      <div class="feature-grid cols-3">
        <article class="feature-block reveal">
          <h3><i class="bi bi-truck"></i> Over-the-Road</h3>
          <p>Default and most flexible — virtually any dock in North America. Equipment and carrier matched to lane, timeline, and budget whether LTL, partial, or truckload.</p>
        </article>
        <article class="feature-block reveal reveal-delay-1">
          <h3><i class="bi bi-train-front"></i> Rail / Intermodal</h3>
          <p>Fuel-efficient long hauls combining rail with truck pickup and delivery. Strong for heavy, dense, or non-urgent cross-country freight.</p>
        </article>
        <article class="feature-block reveal reveal-delay-2">
          <h3><i class="bi bi-airplane"></i> Air (US Domestic)</h3>
          <p>Fastest option for time-critical, high-value, or AOG freight. When the shipment demands it, we arrange the air lift that hits the deadline.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="section section-ash">
    <div class="container">
      <div class="reveal">
        <p class="eyebrow">Specialty services</p>
        <h2 class="section-title">When standard isn’t enough.</h2>
        <p class="section-lead">Equipment, compliance, and urgency windows beyond the vanilla load.</p>
      </div>
      <div class="feature-grid">
        <article class="feature-block reveal">
          <h3><i class="bi bi-building"></i> Trade Show</h3>
          <p>Full-service exhibit freight to and from the show floor. Hard move-in windows, round-trip management, and eyes on every high-stakes move. <a href="trade-shows.php" class="text-red">Trade show details →</a></p>
        </article>
        <article class="feature-block reveal reveal-delay-1">
          <h3><i class="bi bi-bounding-box"></i> Flatbed &amp; Open-deck</h3>
          <p>Open-deck for oversized, heavy, or irregular freight — machinery, building materials, and loads that come on from any angle.</p>
        </article>
        <article class="feature-block reveal">
          <h3><i class="bi bi-lightning-charge"></i> Expedited</h3>
          <p>Premium speed for critical inventory, emergency parts, and high-priority freight — direct, often same-day or inside a guaranteed window.</p>
        </article>
        <article class="feature-block reveal reveal-delay-1">
          <h3><i class="bi bi-moon-stars"></i> Overnight / Guaranteed</h3>
          <p>Next-business-day delivery for urgent shipments — fast, secure, and right on time.</p>
        </article>
        <article class="feature-block reveal">
          <h3><i class="bi bi-exclamation-diamond"></i> Hazmat</h3>
          <p>Hazardous materials moved safely, legally, and in compliance — chemicals, flammables, gases, corrosives, and other regulated freight.</p>
        </article>
        <article class="feature-block reveal reveal-delay-1">
          <h3><i class="bi bi-arrows-angle-expand"></i> Over-dimensional</h3>
          <p>Oversized and overweight loads that break the legal envelope — equipment, permits, and routing for outsized freight.</p>
        </article>
        <article class="feature-block reveal">
          <h3><i class="bi bi-thermometer-half"></i> Temperature-controlled</h3>
          <p>Refrigerated and climate-controlled transport for food, pharma, chemicals, and sensitive goods — monitored pickup to delivery.</p>
        </article>
        <article class="feature-block reveal reveal-delay-1">
          <h3><i class="bi bi-eye"></i> High-visibility tracking</h3>
          <p>Proactive updates, direct lines to the people on your load, and a coordinator who already knows what’s riding on it.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="section section-red">
    <div class="container text-center reveal">
      <h2 class="section-title mx-auto">Need a lane quote?</h2>
      <p class="section-lead mx-auto">Tell us origin, destination, and deadline — we’ll send a plan.</p>
      <a href="contact.php#quote" class="btn-ker btn-ker-dark"><i class="bi bi-send"></i> Get a quote</a>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
