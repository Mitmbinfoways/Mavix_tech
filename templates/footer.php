<footer class="footer position-relative">
  <div>
    <div class="row">
      <div class="col-12 col-md- col-lg-8 mb-5">
        <div class="d-flex justify-content-lg-start logo mb-3">
          <img
            src="assets/images/logo.svg"
            alt="Mavix Tech"
            class="nav-logo-img" />
        </div>
        <div class="d-flex justify-content-lg-start back-to-top footer-font mt-5">
          <span class="me-2">Back to top</span>
          <a href="#" class="btn btn-light btn-sm">↑</a>
        </div>
      </div>


      <div class="col-12 col-md-6 col-lg-2 mb-5">
        <div class="mt-4">
          <h5 class="d-flex justify-content-lg-start footer-font-heading">Services</h5>
          <ul
            class="list-unstyled footer-font d-flex flex-column gap-3 mt-4">
            <li>
              <a href="<?php echo $config['SITE_URL']; ?>shopify-services" class="d-flex justify-content-lg-start text-white text-decoration-none">Shopify</a>
            </li>
            <li>
              <a href="<?php echo $config['SITE_URL']; ?>salesforces-services" class="d-flex justify-content-lg-start text-white text-decoration-none">Salesforce</a>
            </li>
            <li>
              <a href="<?php echo $config['SITE_URL']; ?>email-marketing" class="d-flex justify-content-lg-start text-white text-decoration-none">Email Marketing</a>
            </li>
            <li>
              <a href="<?php echo $config['SITE_URL']; ?>digital-marketing" class="d-flex justify-content-lg-start text-white text-decoration-none">Digital Marketing</a>
            </li>
          </ul>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-2 mb-5">
        <div class="mt-4">
          <h5 class="d-flex justify-content-lg-start footer-font-heading">Contact Us</h5>
          <ul class="list-unstyled footer-font d-flex flex-column gap-3 mt-4">
            <li>
              <a href="https://www.linkedin.com/company/mavix-tech/" class="px-1 d-flex align-items-center gap-3 text-white text-decoration-none">
                <i class="bi bi-linkedin icon"></i> Linkedin
              </a>
            </li>
            <li>
              <a href="#" class="d-flex align-items-center gap-3 text-white text-decoration-none">
                <img src="assets/images/xing.png" alt="Xing" style="width: 20px; height: 20px; object-fit: contain;">
                Xing
              </a>
            </li>
            <li>
              <a href="#" class="px-1 d-flex align-items-center gap-3 text-white text-decoration-none">
                <i class="bi bi-facebook icon"></i> Facebook
              </a>
            </li>
            <li>
              <a href="#" class="px-1 d-flex align-items-center gap-3 text-white text-decoration-none">
                <i class="bi bi-instagram icon"></i> Instagram
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <hr class="my-4 mb-5" />

    <div
      class="d-flex flex-column flex-md-row justify-content-between align-items-center">
      <p class="mb-2 mb-md-0 footer-font">
        © MavixTech. All Rights Reserved.
      </p>
    </div>
  </div>

  <img
    src="assets/images/Ellipse.png"
    alt="Background Glow"
    class="ellipse-img left-img" />
  <img
    src="assets/images/Ellipse.png"
    alt="Background Glow"
    class="ellipse-img right-img" />
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- jQuery and Slick -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<?php if (isset($page) && strtolower($page) === 'home') { ?>
<!-- Dynamic content loader (home only) -->
<script src="<?php echo $config['WEB_PATH']; ?>assets/js/homepage/home.js" defer></script>
<?php } ?>

<!-- Scroll animation script (reusable) -->
<script type="module">
  import { initScrollAnimations, enhanceImagesPerformance } from "<?php echo $config['WEB_PATH']; ?>assets/utils/scroll-animations.js";

  window.addEventListener("DOMContentLoaded", () => {
    initScrollAnimations();
    enhanceImagesPerformance();
  });
</script>
</body>

</html>