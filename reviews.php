<?php
require __DIR__ . '/includes/config.php';
$pageTitle = 'Customer Reviews | ' . $businessName;
$pageDescription = 'Read customer reviews for Splash Clean Caerleon driveway, patio and floor cleaning services.';
$activePage = 'reviews';
$bodyClass = 'reviews-page';
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main>
  <section class="about-hero reviews-hero">
    <div class="container">
      <div class="about-hero-copy">
        <p class="eyebrow">Feedback from our customers</p>
        <h1>Satisfied Customer Reviews</h1>
        <p>Homeowners across Caerleon and South Wales regularly rate the service five stars for driveway cleaning, patio restoration and sealing.</p>
      </div>
      <?php require __DIR__ . '/includes/hero-trust-mark.php'; ?>
    </div>
  </section>
  <section class="reviews-page-content section-pad">
    <div class="container">
      <div class="section-title">
        <p>Trusted local service</p>
        <h2>What <span>Customers Say</span></h2>
        <small>Real clients across South Wales regularly leave five star feedback for driveway cleaning, patio restoration, sealing and soft washing. Review cards below share their comments and ratings in full.</small>
      </div>
      <div class="reviews-grid">
        <?php foreach ($reviews as $index => $review): ?>
          <article class="review-card<?= $index === 0 ? ' review-featured' : '' ?>">
            <?php if ($index === 0): ?>
              <span class="review-featured-label"><i class="fa-solid fa-award" aria-hidden="true"></i> Featured review</span>
            <?php endif; ?>
            <div class="stars" aria-label="5 out of 5 stars">★★★★★</div>
            <p>“<?= htmlspecialchars($review[1]) ?>”</p>
            <strong>— <?= htmlspecialchars($review[0]) ?></strong>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
