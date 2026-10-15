<div class="page-loader" id="pageLoader" role="status" aria-label="Loading Splash Clean">
  <img src="<?= $assetPath ?>/images/client/logo.png" alt="">
  <span class="page-loader-line"></span>
</div>

<div class="topbar">
  <div class="container d-flex flex-wrap justify-content-between gap-2">
    <div>
      <a href="tel:<?= preg_replace('/[^0-9+]/', '', $phoneCardiff) ?>"><i class="fa-solid fa-phone" aria-hidden="true"></i> Cardiff: <?= htmlspecialchars($phoneCardiff) ?></a>
      <a href="tel:<?= preg_replace('/[^0-9+]/', '', $phoneNewport) ?>"><i class="fa-solid fa-phone" aria-hidden="true"></i> Newport: <?= htmlspecialchars($phoneNewport) ?></a>
    </div>
    <div class="header-quick-links" aria-label="Quick links">
      <a class="header-quick-link" href="<?= htmlspecialchars($brochureUrl) ?>" download="Splash-Clean-Brochure.pdf"><i class="fa-solid fa-download" aria-hidden="true"></i> Download Brochure</a>
      <a class="header-quick-link" href="<?= htmlspecialchars($callbackUrl) ?>"><i class="fa-solid fa-phone-volume" aria-hidden="true"></i> Request a Call Back</a>
    </div>
    <span class="header-location"><?= htmlspecialchars($locationText) ?></span>
    <div class="header-socials" aria-label="Social media links">
      <a href="https://www.facebook.com/SplashCleanCaerleon/" target="_blank" rel="noopener" aria-label="Facebook"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a>
      <a href="https://twitter.com/SplashCaerleon" target="_blank" rel="noopener" aria-label="X"><i class="fa-brands fa-x-twitter" aria-hidden="true"></i></a>
      <a href="https://www.instagram.com/splashcleancaerleon/?hl=en" target="_blank" rel="noopener" aria-label="Instagram"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a>
    </div>
  </div>
</div>

<nav class="navbar navbar-expand-lg bg-white sticky-top" aria-label="Primary navigation">
  <div class="container">
    <a class="navbar-brand" href="<?= $homeUrl ?>" aria-label="Splash Clean Caerleon home"><span>SPLASH</span><small>CLEAN CAERLEON</small></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#siteNav" aria-controls="siteNav" aria-expanded="false" aria-label="Open menu"><span class="navbar-toggler-icon"></span></button>
    <div class="navbar-collapse offcanvas offcanvas-lg offcanvas-end nav-drawer" tabindex="-1" id="siteNav" aria-label="Site navigation" data-bs-backdrop="false">
      <div class="offcanvas-header"><span class="nav-drawer-title">Menu</span><button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close menu"></button></div>
      <div class="offcanvas-body">
        <div class="nav-drawer-inner">
        <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-3">
          <li><a class="nav-link<?= ($activePage ?? '') === 'home' ? ' active' : '' ?>" href="<?= $homeUrl ?>"<?= ($activePage ?? '') === 'home' ? ' aria-current="page"' : '' ?>>Home</a></li>
          <li><a class="nav-link<?= ($activePage ?? '') === 'about' ? ' active' : '' ?>" href="<?= $aboutUrl ?>"<?= ($activePage ?? '') === 'about' ? ' aria-current="page"' : '' ?>>About Us</a></li>
          <li class="nav-item dropdown services-menu">
            <a class="nav-link<?= ($activePage ?? '') === 'services' ? ' active' : '' ?>" href="<?= $servicesUrl ?>"<?= ($activePage ?? '') === 'services' ? ' aria-current="page"' : '' ?>>Services</a>
            <button class="services-menu-toggle" type="button" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false" aria-haspopup="true" aria-controls="servicesMenuList" aria-label="Toggle Services submenu"><i class="fa-solid fa-chevron-down services-menu-chevron" aria-hidden="true"></i></button>
            <ul class="dropdown-menu services-menu-list" id="servicesMenuList">
              <?php foreach ($services as $index => $navigationService): ?>
                <li><a class="dropdown-item" href="<?= htmlspecialchars($serviceUrls[$index]) ?>"><?= htmlspecialchars($navigationService[0]) ?></a></li>
              <?php endforeach; ?>
            </ul>
          </li>
          <li><a class="nav-link<?= ($activePage ?? '') === 'gallery' ? ' active' : '' ?>" href="<?= $galleryUrl ?>"<?= ($activePage ?? '') === 'gallery' ? ' aria-current="page"' : '' ?>>Gallery</a></li>
          <li><a class="nav-link<?= ($activePage ?? '') === 'reviews' ? ' active' : '' ?>" href="<?= $reviewsUrl ?>"<?= ($activePage ?? '') === 'reviews' ? ' aria-current="page"' : '' ?>>Reviews</a></li>
          <li><a class="nav-link<?= ($activePage ?? '') === 'areas' ? ' active' : '' ?>" href="<?= $areasUrl ?>"<?= ($activePage ?? '') === 'areas' ? ' aria-current="page"' : '' ?>>Areas We Cover</a></li>
          <li><a class="btn btn-primary rounded-2 px-4" href="<?= $contactUrl ?>">Get a Free Quote&nbsp; <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a></li>
          <li class="nav-utility-link"><a class="nav-utility-button nav-brochure-button" href="<?= htmlspecialchars($brochureUrl) ?>" download="Splash-Clean-Brochure.pdf"><i class="fa-solid fa-download" aria-hidden="true"></i> Download Brochure</a></li>
          <li class="nav-utility-link"><a class="nav-utility-button nav-callback-button" href="<?= htmlspecialchars($callbackUrl) ?>"><i class="fa-solid fa-phone-volume" aria-hidden="true"></i> Request a Call Back</a></li>
        </ul>
        </div>
      </div>
    </div>
  </div>
</nav>
