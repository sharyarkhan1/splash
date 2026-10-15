<?php
require __DIR__ . '/includes/config.php';
$pageTitle = 'Our Work | ' . $businessName;
$pageDescription = 'Recent driveway and patio projects: cleaning, sealing and maintenance across Caerleon and South Wales.';
$activePage = 'gallery';
$bodyClass = 'gallery-page';
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main>
  <section class="about-hero gallery-hero">
    <div class="container">
      <div class="about-hero-copy">
        <p class="eyebrow">Photos that shows our experties</p>
        <h1>Recent Driveway &amp; Patio Projects</h1>
        <p>Tarmac cleaning, coating &amp; Restoration, Imprinted driveway cleaning, sealing &amp; restoration, Block paving cleaning &amp; sealing, Patios cleaned &amp; Sealed, Soft washing services, Moss &amp; Algea Treatments and Liquid cement pointing for patios &amp; Driveways all feature here, along with General Jet washing services and Maintenance &amp; Pavier services.</p>
      </div>
      <?php require __DIR__ . '/includes/hero-trust-mark.php'; ?>
    </div>
  </section>
  <section class="gallery section-pad">
    <div class="container">
      <div class="section-title">
        <p>Real results</p>
        <h2>Gallery <span>Of Work</span></h2>
        <small>Browse side by side project images to see how professional cleaning, sealing and maintenance refresh driveways, patios, paths, decking, artificial grass and interior floors.</small>
      </div>
      <?php
      $galleryProjectsByTitle = [];
      foreach ($galleryProjects as $project) {
          $galleryProjectsByTitle[$project['title']][] = $project;
      }
      ?>
      <?php foreach ($galleryProjectsByTitle as $projectTitle => $projects): ?>
        <section class="gallery-project-group" aria-label="<?= htmlspecialchars($projectTitle) ?>">
          <h3 class="gallery-project-title"><?= htmlspecialchars($projectTitle) ?></h3>
          <div class="comparison-grid">
            <?php foreach ($projects as $project): ?>
              <article class="comparison-card">
                <div class="comparison" style="--split:50%">
                  <img class="comparison-after" src="<?= $assetPath ?>/<?= htmlspecialchars($project['after']) ?>" alt="<?= htmlspecialchars($project['afterAlt']) ?>" loading="lazy" decoding="async">
                  <div class="comparison-before"><img src="<?= $assetPath ?>/<?= htmlspecialchars($project['before']) ?>" alt="<?= htmlspecialchars($project['beforeAlt']) ?>" loading="lazy" decoding="async"></div>
                  <span class="comparison-label label-before">Before</span>
                  <span class="comparison-label label-after">After</span>
                  <div class="comparison-handle"><span><i class="fa-solid fa-arrows-left-right" aria-hidden="true"></i></span></div>
                  <input class="comparison-range" type="range" min="0" max="100" value="50" aria-label="Compare before and after project <?= $project['number'] ?>">
                </div>
              </article>
            <?php endforeach; ?>
          </div>
        </section>
      <?php endforeach; ?>
    </div>
  </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
