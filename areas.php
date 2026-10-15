<?php
require __DIR__ . '/includes/config.php';
$pageTitle = 'Areas We Cover | ' . $businessName;
$pageDescription = 'Cleaning and restoration in Caerleon, Newport, Cardiff and nearby parts of South Wales. Contact us to confirm availability further afield.';
$activePage = 'areas';
$bodyClass = 'areas-page';
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main>
  <section class="about-hero areas-hero">
    <div class="container">
      <div class="about-hero-copy">
        <p class="eyebrow">Local Team You Can Rely On</p>
        <h1>Areas We Cover</h1>
        <p><?= htmlspecialchars($coverageDescription) ?></p>
        <div class="about-hero-actions hero-buttons">
          <a class="btn btn-primary btn-lg" href="<?= htmlspecialchars($contactUrl) ?>">Check your postcode <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
        </div>
      </div>
      <?php require __DIR__ . '/includes/hero-trust-mark.php'; ?>
    </div>
  </section>
  <section class="areas-section areas-page-content section-pad">
    <div class="container">
      <div class="areas-layout">
        <div class="areas-copy">
          <p class="section-label">Areas we cover</p>
          <h2>Professional cleaning across <span>Caerleon &amp; South Wales</span>.</h2>
          <p><?= htmlspecialchars($coverageDescription) ?></p>
          <div class="areas-base">
            <i class="fa-solid fa-location-dot" aria-hidden="true"></i>
            <div><small>Based in Caerleon</small><strong><?= htmlspecialchars($address) ?></strong></div>
          </div>
          <div class="areas-actions">
            <a class="btn btn-primary" href="<?= htmlspecialchars($contactUrl) ?>">Check your postcode <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
            <a class="areas-phone" href="tel:<?= preg_replace('/[^0-9+]/', '', $phoneNewport) ?>"><i class="fa-solid fa-phone" aria-hidden="true"></i><?= htmlspecialchars($phoneNewport) ?></a>
          </div>
        </div>
        <div class="areas-card">
          <div class="areas-card-head">
            <div><small>Our coverage</small><h3>Local Team You Can Rely On</h3></div>
            <span><i class="fa-solid fa-map-location-dot" aria-hidden="true"></i></span>
          </div>
          <div class="areas-list">
            <?php foreach ($serviceAreas as $area): ?>
              <span><i class="fa-solid fa-location-dot" aria-hidden="true"></i><?= htmlspecialchars($area) ?></span>
            <?php endforeach; ?>
          </div>
          <p>For projects further afield, get in touch with the postcode and details and availability will be confirmed.</p>
          <a class="areas-more-link" href="<?= htmlspecialchars($contactUrl) ?>">Ask us about your area <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
  </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
