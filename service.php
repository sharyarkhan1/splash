<?php
require __DIR__ . '/includes/config.php';
$serviceSlug = trim((string) ($_GET['slug'] ?? ''));
if (isset($serviceLegacySlugs[$serviceSlug])) {
    header('Location: ' . $servicesUrl . '/' . $serviceLegacySlugs[$serviceSlug] . '/', true, 301);
    exit;
}
$serviceIndex = array_search($serviceSlug, $serviceSlugs, true);
$activePage = 'services';
$bodyClass = 'service-detail-page';

if ($serviceIndex === false || !isset($serviceDetails[$serviceSlug])) {
    http_response_code(404);
    $pageTitle = 'Service not found | ' . $businessName;
    $pageDescription = 'The requested service could not be found.';
    require __DIR__ . '/includes/head.php';
    require __DIR__ . '/includes/header.php';
    ?>
    <main class="service-detail-page">
      <section class="service-detail-not-found section-pad">
        <div class="container">
          <p class="section-label">Page not found</p>
          <h1>We couldn't find that service.</h1>
          <a class="btn btn-primary" href="<?= htmlspecialchars($servicesUrl) ?>">Browse all services</a>
        </div>
      </section>
    </main>
    <?php require __DIR__ . '/includes/footer.php';
    exit;
}

$service = $services[$serviceIndex];
$detail = $serviceDetails[$serviceSlug];
$pageTitle = $detail['title'] . ' | ' . $businessName;
$pageDescription = $detail['intro'];
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main class="service-detail-page">
  <section class="about-hero service-detail-hero" style="--service-hero-image:url('<?= htmlspecialchars($imageRoot . '/' . $serviceSlug . '/' . $detail['heroImage'], ENT_QUOTES, 'UTF-8') ?>')">
    <div class="container">
      <div class="about-hero-copy">
        <h1><?= htmlspecialchars($detail['title']) ?></h1>
        <div class="about-hero-actions hero-buttons">
          <a class="btn btn-primary btn-lg" href="<?= htmlspecialchars($contactUrl) ?>">Get a Free Quote&nbsp; <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
          <a class="about-text-link btn btn-outline-light" href="<?= htmlspecialchars($servicesUrl) ?>">All services <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
        </div>
      </div>
      <?php require __DIR__ . '/includes/hero-trust-mark.php'; ?>
    </div>
  </section>

  <section class="service-detail-content section-pad">
    <div class="container">
      <nav class="service-breadcrumb" aria-label="Breadcrumb">
        <a href="<?= htmlspecialchars($homeUrl) ?>">Home</a><i class="fa-solid fa-chevron-right" aria-hidden="true"></i>
        <a href="<?= htmlspecialchars($servicesUrl) ?>">Services</a><i class="fa-solid fa-chevron-right" aria-hidden="true"></i>
        <span aria-current="page"><?= htmlspecialchars($service[0]) ?></span>
      </nav>
      <div class="service-detail-grid">
        <article class="service-detail-copy service-live-content">
          <h2><?= htmlspecialchars($detail['title']) ?></h2>
          <?php foreach ($detail['content'] as $contentBlock): ?>
            <?php if ($contentBlock['type'] === 'paragraph'): ?>
              <?php
              $paragraphText = htmlspecialchars($contentBlock['text']);
              $escapedEmail = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
              $paragraphText = str_replace($escapedEmail, '<a href="mailto:' . $escapedEmail . '">' . $escapedEmail . '</a>', $paragraphText);
              ?>
              <p><?= $paragraphText ?></p>
            <?php elseif ($contentBlock['type'] === 'heading'): ?>
              <h3><?= htmlspecialchars($contentBlock['text']) ?></h3>
            <?php elseif ($contentBlock['type'] === 'list'): ?>
              <ul>
                <?php foreach ($contentBlock['items'] as $item): ?>
                  <li><?= htmlspecialchars($item) ?></li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
          <?php endforeach; ?>
          <?php if (!empty($detail['gallery'])): ?>
            <section class="service-detail-gallery" aria-label="Service gallery">
              <div class="service-gallery-grid">
                <?php foreach ($detail['gallery'] as $galleryItem): ?>
                  <?php if (isset($galleryItem['before'], $galleryItem['after'])): ?>
                    <figure class="comparison-card service-gallery-comparison">
                      <div class="comparison" style="--split:50%">
                        <img class="comparison-after" src="<?= htmlspecialchars($imageRoot . '/' . $serviceSlug . '/' . $galleryItem['after']) ?>" alt="After: <?= htmlspecialchars($detail['title']) ?>" loading="lazy" decoding="async">
                        <div class="comparison-before"><img src="<?= htmlspecialchars($imageRoot . '/' . $serviceSlug . '/' . $galleryItem['before']) ?>" alt="Before: <?= htmlspecialchars($detail['title']) ?>" loading="lazy" decoding="async"></div>
                        <span class="comparison-label label-before">Before</span>
                        <span class="comparison-label label-after">After</span>
                        <div class="comparison-handle"><span><i class="fa-solid fa-arrows-left-right" aria-hidden="true"></i></span></div>
                        <input class="comparison-range" type="range" min="0" max="100" value="50" aria-label="Compare before and after: <?= htmlspecialchars($detail['title']) ?>">
                      </div>
                    </figure>
                  <?php else: ?>
                    <figure class="service-gallery-photo">
                      <img src="<?= htmlspecialchars($imageRoot . '/' . $serviceSlug . '/' . $galleryItem['src']) ?>" alt="<?= htmlspecialchars($galleryItem['alt']) ?>"<?= ($galleryItem['kind'] ?? '') === 'logo' ? ' style="object-fit:contain;background:#fff;padding:20px"' : '' ?> loading="lazy" decoding="async">
                    </figure>
                  <?php endif; ?>
                <?php endforeach; ?>
              </div>
            </section>
          <?php endif; ?>
        </article>
        <aside class="service-detail-sidebar">
          <section class="service-sidebar-section">
            <p class="service-detail-kicker">Our services</p>
            <h2>Explore services</h2>
            <nav aria-label="Service pages">
              <ul class="service-sidebar-list">
                <?php foreach ($services as $index => $sidebarService): ?>
                  <li><a class="<?= $index === $serviceIndex ? 'active' : '' ?>" href="<?= htmlspecialchars($serviceUrls[$index]) ?>"<?= $index === $serviceIndex ? ' aria-current="page"' : '' ?>><?= htmlspecialchars($sidebarService[0]) ?><i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a></li>
                <?php endforeach; ?>
              </ul>
            </nav>
          </section>
          <section class="service-sidebar-contact">
            <p class="service-detail-kicker">Contact us today</p>
            <h2>Talk to our team</h2>
            <h3>Phone us</h3>
            <a href="tel:<?= preg_replace('/[^0-9+]/', '', $phoneNewport) ?>"><span>Newport Office</span><strong><?= htmlspecialchars($phoneNewport) ?></strong></a>
            <a href="tel:<?= preg_replace('/[^0-9+]/', '', $phoneCardiff) ?>"><span>Cardiff Office</span><strong><?= htmlspecialchars($phoneCardiff) ?></strong></a>
            <a href="tel:<?= preg_replace('/[^0-9+]/', '', $phoneMobile) ?>"><span>Mobile</span><strong><?= htmlspecialchars($phoneMobile) ?></strong></a>
            <h3>Email us</h3>
            <a class="service-sidebar-email" href="mailto:<?= htmlspecialchars($email) ?>"><?= htmlspecialchars($email) ?></a>
            <a class="btn btn-primary" href="<?= htmlspecialchars($contactUrl) ?>">Request a quote&nbsp; <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
          </section>
        </aside>
      </div>
    </div>
  </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
