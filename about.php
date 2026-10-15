<?php
require __DIR__ . '/includes/config.php';
$pageTitle = 'About Us | ' . $businessName;
$pageDescription = 'The Splash Clean Caerleon story: specialist driveway and patio restoration, awards, accreditations and trusted status.';
$activePage = 'about';
$bodyClass = 'about-page';
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main>
    <section class="about-hero">
      <div class="container">
        <div class="about-hero-copy">
          <p class="eyebrow">Splash Clean Caerleon</p>
          <h1>The Splash Clean<br><span>Caerleon Story</span></h1>
          <p>At Splash Clean, we offer interior and exterior cleaning services, we specialise in driveway and patio cleaning and sealing services, but we offer many other exterior cleaning services that will revive and restore your surfaces at your home or business.</p>
          <div class="about-hero-actions hero-buttons">
            <a class="btn btn-primary btn-lg" href="<?= htmlspecialchars($contactUrl) ?>">Talk to our team&nbsp; <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
            <a class="about-text-link btn btn-outline-light" href="<?= $servicesUrl ?>">Explore our services <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
          </div>
        </div>
        <?php require __DIR__ . '/includes/hero-trust-mark.php'; ?>
      </div>
    </section>

    <section class="about-intro section-pad">
      <div class="container">
        <div class="about-intro-grid">
          <div class="about-intro-image">
            <img src="<?= $assetPath ?>/images/services/garden-patio-sealing-restoration-south-wales-after.webp" alt="Patio sealing and restoration in South Wales" loading="lazy" decoding="async">
            <div class="about-image-caption"><span>Driveway &amp; Patio Restoration</span><i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i></div>
          </div>
          <div class="about-intro-copy">
            <p class="section-label">Specialist surface care</p>
            <h2>Specialist Driveway &amp; Patio Restoration <span>Across Wales</span></h2>
            <p>Service options cover Tarmac cleaning, coating &amp; Restoration, Imprinted driveway cleaning, sealing &amp; restoration, Block paving cleaning &amp; sealing and Patios cleaned &amp; Sealed for both residential and commercial properties. Each surface is assessed and treated with the most suitable cleaning method and sealer.</p>
            <p>General Jet washing services, Maintenance &amp; Pavier services, Soft washing services, Liquid cement pointing for patios &amp; Driveways and Moss &amp; Algea Treatments provide ongoing care, helping outdoor areas stay cleaner for longer with less day to day effort.</p>
            <div class="about-stat-row">
              <div><strong>12+</strong><span>Years of experience</span></div>
              <div><strong>1000+</strong><span>Happy customers</span></div>
              <div><strong>8+</strong><span>Award winning</span></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="about-values section-pad">
      <div class="container">
        <div class="section-title">
          <p>Our approach</p>
          <h2>What Sets <span>Us Apart</span></h2>
          <small>Many exterior cleaning companies rely on high pressure alone, which can leave surfaces unevenly cleaned, cause damage, or allow moss and algae to return quickly. Our approach is different. Every project begins with an assessment of the surface so the correct method, pressure level and treatment can be chosen for the material.</small>
        </div>
        <div class="row g-4">
          <div class="col-md-4"><article class="about-value-card"><span class="about-value-number">01</span><i class="fa-solid fa-handshake-angle" aria-hidden="true"></i><h3>Professional rotary cleaning</h3><p>We use professional rotary surface cleaning equipment designed to deliver consistent, controlled cleaning without the striping or surface damage often caused by standard pressure washing lances. Before cleaning, surfaces are treated with specialist solutions to break down moss, algae and organic growth at the root rather than simply blasting the surface.</p></article></div>
          <div class="col-md-4"><article class="about-value-card"><span class="about-value-number">02</span><i class="fa-solid fa-wand-magic-sparkles" aria-hidden="true"></i><h3>Preparation &amp; protection</h3><p>This preparation allows us to achieve a deeper, more even clean while protecting the integrity of the paving, stone or concrete. Where appropriate, joints are re-sanded and protective sealers can be applied to help slow future growth and maintain the appearance of the surface for longer.</p></article></div>
          <div class="col-md-4"><article class="about-value-card"><span class="about-value-number">03</span><i class="fa-solid fa-leaf" aria-hidden="true"></i><h3>Clear explanations</h3><p>Just as important as the equipment and treatments is the way we work. Clear explanations, honest recommendations and respectful conduct on site mean customers always understand what is being done and why. Our aim is not just to clean a surface for the day, but to restore it properly and provide results that last.</p></article></div>
        </div>
      </div>
    </section>

    <section class="about-trust section-pad">
      <div class="container">
        <div class="about-trust-grid">
          <div class="about-trust-copy">
            <p class="section-label">Recognised quality</p>
            <h2>Awards, Accreditations <span>&amp; Trusted Status</span></h2>
            <p>Splash Clean Caerleon is a long standing Which? Trusted Trader, SmartSeal and Adseal registered installer and Algopro approved cleaner, with further recognition from leading UK and Welsh award bodies for professional driveway and patio cleaning.</p><p>Not only we provide exterior cleaning services, but we also offer interior hard surface cleaning and sealing solutions. Our services are for domestic and business users, and we are happy to talk and advise on any enquiry you have to offer. We are Which? Trusted traders and our business has been established since 2013, our knowledge, machinery, and expertise allow us to deliver the best cleaning and sealing services, we tailor every job to ensure we get your complete satisfaction.</p>
            <div class="hero-buttons"><a class="btn btn-primary" href="<?= htmlspecialchars($reviewsUrl) ?>">Read customer reviews&nbsp; <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a></div>
          </div>
          <div class="achievement-card awards-panel">
            <div class="awards-panel-head">
              <div><span class="awards-kicker">Recognised quality</span><h3>Trusted, registered<br>&amp; award-winning.</h3></div>
              <span class="awards-emblem"><i class="fa-solid fa-award" aria-hidden="true"></i></span>
            </div>
            <div class="awards-trust-row">
              <div class="award-trust-mark which-mark"><img src="<?= $assetPath ?>/images/client/which-trusted-trader-logo.png" alt="Which? Trusted Trader"><span>Recommended by<br><strong>Which? Trusted Trader</strong></span></div>
              <div class="award-trust-mark registered-mark"><span>Registered installer</span><img src="<?= $assetPath ?>/images/client/logos.jpg" alt="Registered installer achievements"></div>
            </div>
            <div class="award-grid"><?php foreach ($awardImages as $awardIndex => $awardImage): ?><div class="award-mark"><img src="<?= $assetPath ?>/<?= htmlspecialchars($awardImage) ?>" alt="Industry award recognition <?= $awardIndex + 1 ?>" loading="lazy" decoding="async"></div><?php endforeach; ?></div>
            <p class="awards-panel-note">Proud to be recognised by trusted industry organisations.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="about-cta section-pad">
      <div class="container">
        <div class="about-cta-inner">
          <div><p class="eyebrow">Contact us</p><h2>Free, no-obligation quotation</h2><p>For more information, please contact us for a free, no-obligation quotation at info@splashcleancaerleon.co.uk</p></div>
          <div class="hero-buttons"><a class="btn btn-primary btn-lg" href="<?= htmlspecialchars($contactUrl) ?>">Get a Free Quote&nbsp; <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a></div>
        </div>
      </div>
    </section>
  </main>
<?php
require __DIR__ . '/includes/footer.php';
