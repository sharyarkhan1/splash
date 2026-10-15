<footer class="footer">
  <div class="container footer-main">
    <div class="footer-brand"><a class="navbar-brand footer-logo" href="<?= $homeUrl ?>" aria-label="Splash Clean Caerleon home"><span>SPLASH</span><small>CLEAN CAERLEON</small></a><p><?= htmlspecialchars($pageContent['footer']) ?></p><div class="footer-socials"><a href="https://www.facebook.com/SplashCleanCaerleon/" target="_blank" rel="noopener" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a><a href="https://twitter.com/SplashCaerleon" target="_blank" rel="noopener" aria-label="Twitter"><i class="fa-brands fa-x-twitter"></i></a><a href="https://www.instagram.com/splashcleancaerleon/?hl=en" target="_blank" rel="noopener" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a></div></div>
    <nav class="footer-links d-flex flex-column align-items-start" aria-label="Footer navigation"><h3>Explore</h3><a href="<?= $homeUrl ?>">Home</a><a href="<?= $aboutUrl ?>">About us</a><a href="<?= $servicesUrl ?>">Services</a><a href="<?= $galleryUrl ?>">Gallery</a><a href="<?= $reviewsUrl ?>">Customer reviews</a><a href="<?= $areasUrl ?>">Areas we cover</a></nav>
    <div class="footer-contact"><h3>Get in touch</h3><a class="footer-email" href="mailto:<?= htmlspecialchars($email) ?>"><i class="fa-regular fa-envelope" aria-hidden="true"></i><?= htmlspecialchars($email) ?></a><div class="footer-phone-grid"><a href="tel:<?= preg_replace('/[^0-9+]/', '', $phoneCardiff) ?>"><span>Cardiff</span><strong><?= htmlspecialchars($phoneCardiff) ?></strong></a><a href="tel:<?= preg_replace('/[^0-9+]/', '', $phoneNewport) ?>"><span>Newport</span><strong><?= htmlspecialchars($phoneNewport) ?></strong></a><a href="tel:<?= preg_replace('/[^0-9+]/', '', $phoneMobile) ?>"><span>Mobile</span><strong><?= htmlspecialchars($phoneMobile) ?></strong></a></div></div>
  </div>
  <div class="footer-bottom"><div class="container"><span>&copy; <?= date('Y') ?> Splash Clean Caerleon. All Rights Reserved.</span><p>Designed &amp; Developed by <a href="https://www.customlogowork.co.uk/" target="_blank" rel="noopener noreferrer">CustomLogoWork LTD</a></p></div></div>
</footer>

<script src="<?= $assetPath ?>/vendor/bootstrap/bootstrap.bundle.min.js"></script>
<?php if (!empty($includeOwlAssets)): ?>
  <script src="<?= $assetPath ?>/vendor/owl/jquery.min.js"></script>
  <script src="<?= $assetPath ?>/vendor/owl/owl.carousel.min.js"></script>
<?php endif; ?>
<script src="<?= $assetPath ?>/js/main.js?v=<?= filemtime(__DIR__ . '/../assets/js/main.js') ?>"></script>
</body>
</html>
