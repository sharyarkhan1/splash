<?php
require __DIR__ . '/includes/config.php';
$pageTitle = 'Our Services | ' . $businessName;
$pageDescription = 'Explore professional driveway, patio, exterior and interior floor cleaning services for Caerleon, Newport and South Wales.';
$activePage = 'services';
$bodyClass = 'services-page';
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main class="services-page">
  <section class="about-hero services-page-hero">
    <div class="container">
      <div class="about-hero-copy">
        <p class="eyebrow">Our Services</p>
        <h1>Transform Your<br><span>Outdoor Surfaces</span></h1>
        <p>Splash Clean Caerleon delivers professional cleaning and restoration services for driveways, patios, and hard landscaping across South Wales.</p><p>From regular outdoor surface cleaning to detailed repairs and sealing, every service is tailored to the property so areas stay cleaner, safer and easier to maintain.</p>
        <div class="about-hero-actions hero-buttons">
          <a class="btn btn-primary btn-lg" href="<?= htmlspecialchars($contactUrl) ?>">Get a Free Quote&nbsp; <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
          <a class="about-text-link btn btn-outline-light" href="#services">Browse our services <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
        </div>
      </div>
      <?php require __DIR__ . '/includes/hero-trust-mark.php'; ?>
    </div>
  </section>

  <section class="services section-pad services-showcase" id="services">
    <div class="container">
      <div class="section-title service-section-title">
        <p>Our services</p>
        <h2>Our <span>Services</span></h2>
        <small>Explore a full range of driveway and patio cleaning services, covering jet wash and soft wash cleaning, surface repairs, protective sealing and ongoing maintenance for homes and commercial sites.</small>
      </div>
      <div class="row g-4 service-grid" id="serviceGrid">
        <?php foreach ($services as $index => $service): ?>
          <div class="col-12 col-md-4 col-lg-3">
            <article class="service-card" id="service-<?= $index + 1 ?>">
              <div class="service-visual">
                <picture>
                  <source type="image/webp" srcset="<?= $assetPath ?>/images/services/<?= htmlspecialchars(preg_replace('/\.(?:jpe?g|png)$/i', '.webp', $serviceImages[$index])) ?>">
                  <img src="<?= $assetPath ?>/images/services/<?= htmlspecialchars($serviceImages[$index]) ?>" alt="<?= htmlspecialchars($service[0]) ?>" loading="lazy" decoding="async">
                </picture>
                <span class="service-number"><?= str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) ?></span>
              </div>
              <div class="service-body">
                <h3><a class="service-card-title" href="<?= htmlspecialchars($serviceUrls[$index]) ?>"><?= htmlspecialchars($service[0]) ?></a></h3>
                <p><?= htmlspecialchars($service[1]) ?></p>
                <a href="<?= htmlspecialchars($serviceUrls[$index]) ?>" aria-label="View details for <?= htmlspecialchars($service[0]) ?>">View details <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
              </div>
            </article>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
