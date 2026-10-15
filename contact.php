<?php
require __DIR__ . '/includes/config.php';
$pageTitle = 'Contact Us | ' . $businessName;
$pageDescription = 'Contact Splash Clean Caerleon for a free cleaning and restoration quote in South Wales.';
$activePage = 'contact';
$bodyClass = 'contact-page';
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main>
  <section class="about-hero contact-hero">
    <div class="container">
      <div class="about-hero-copy">
        <p class="eyebrow">We Are Recommended By Which?</p>
        <h1>Contact Splash Clean Caerleon</h1>
        <p>Request a quote for driveway or patio cleaning, surface sealing or exterior soft washing. Share a few details and a specialist will reply promptly with clear advice and pricing.</p>
      </div>
      <?php require __DIR__ . '/includes/hero-trust-mark.php'; ?>
    </div>
  </section>
  <section class="contact-page-content section-pad">
    <div class="container">
      <div class="section-title">
        <p>Start your enquiry</p>
        <h2>Request <span>Your Quote</span></h2>
        <small><?= htmlspecialchars($quoteDescription) ?></small>
      </div>
      <div class="contact-page-grid">
        <section class="contact-form-panel" aria-labelledby="contactFormTitle">
          <div class="contact-panel-heading">
            <span class="contact-panel-icon"><i class="fa-regular fa-paper-plane" aria-hidden="true"></i></span>
            <div>
              <p class="contact-panel-kicker">Free quote</p>
              <h2 id="contactFormTitle">Project Enquiry</h2>
            </div>
          </div>
          <form id="quoteForm" class="quote-form row g-3">
            <div class="col-sm-6"><label for="contactName">Name</label><input id="contactName" name="name" placeholder="Full Name" required></div>
            <div class="col-sm-6"><label for="contactPhone">Telephone/Mobile</label><input id="contactPhone" name="phone" type="tel" placeholder="Phone Number" required></div>
            <div class="col-sm-6"><label for="contactEmail">Email Address</label><input id="contactEmail" name="email" type="email" placeholder="Email Address" required></div>
            <div class="col-sm-6"><label for="contactPostcode">Postcode</label><input id="contactPostcode" name="postcode" placeholder="Postcode"></div>
            <div class="col-12">
              <label for="contactService">Service Type</label>
              <select id="contactService" name="service">
                <option value="">Select a service</option>
                <?php foreach ($services as $serviceOption): ?>
                  <option value="<?= htmlspecialchars($serviceOption[0]) ?>"><?= htmlspecialchars($serviceOption[0]) ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="col-12"><label for="contactMessage">Project Enquiry</label><textarea id="contactMessage" name="message" rows="5" placeholder="Project Enquiry"></textarea></div>
            <div class="col-12"><button class="btn btn-primary btn-lg w-100" type="submit">Request Quote&nbsp; <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></button><small class="form-status" role="status" aria-live="polite"></small></div>
          </form>
          <section class="contact-detail-group" aria-labelledby="contactFaqTitle">
            <h2 id="contactFaqTitle">Answers To Common Questions</h2>
            <?php foreach ($contactFaqs as $faq): ?>
              <h3><?= htmlspecialchars($faq['question']) ?></h3>
              <p><?= htmlspecialchars($faq['answer']) ?></p>
            <?php endforeach; ?>
          </section>
        </section>
        <aside class="contact-details-panel" aria-label="Contact details">
          <div class="contact-details-heading">
            <p class="contact-panel-kicker">Contact us today</p>
            <h2>Splash Clean Caerleon</h2>
            <p>After receiving your enquiry, a specialist will confirm availability, discuss the work required and offer the earliest suitable date for driveway, patio or exterior cleaning.</p>
          </div>
          <section class="contact-detail-group">
            <h3><span><i class="fa-solid fa-location-dot" aria-hidden="true"></i></span>Address</h3>
            <address>8 Hillcrest Lodgefarm Estate,<br>Caerleon NP18 3BW</address>
          </section>
          <section class="contact-detail-group">
            <h3><span><i class="fa-solid fa-phone" aria-hidden="true"></i></span>Phone Us</h3>
            <a href="tel:01633479030"><small>Newport Office</small><strong>01633 479030</strong></a>
            <a href="tel:02920090155"><small>Cardiff Office</small><strong>02920 090155</strong></a>
            <a href="tel:07588879324"><small>Mobile</small><strong>07588 879324</strong></a>
          </section>
          <section class="contact-detail-group">
            <h3><span><i class="fa-regular fa-envelope" aria-hidden="true"></i></span>Email Us</h3>
            <a class="contact-email-link" href="mailto:<?= htmlspecialchars($email) ?>"><small>Email</small><strong><?= htmlspecialchars($email) ?></strong></a>
            <a class="contact-email-link" href="https://splashcleancardiff.co.uk/" target="_blank" rel="noopener"><small>Website</small><strong>splashcleancardiff.co.uk</strong></a>
          </section>
          <section class="contact-detail-group contact-follow-group">
            <h3><span><i class="fa-solid fa-share-nodes" aria-hidden="true"></i></span>Follow Us</h3>
            <div class="contact-social-links">
              <a href="https://www.facebook.com/SplashCleanCaerleon/" target="_blank" rel="noopener" aria-label="Facebook"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a>
              <a href="https://twitter.com/SplashCaerleon" target="_blank" rel="noopener" aria-label="X"><i class="fa-brands fa-x-twitter" aria-hidden="true"></i></a>
              <a href="https://www.instagram.com/splashcleancaerleon/?hl=en" target="_blank" rel="noopener" aria-label="Instagram"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a>
            </div>
          </section>
        </aside>
      </div>
    </div>
  </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
