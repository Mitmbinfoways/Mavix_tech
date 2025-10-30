<?php
require_once __DIR__ . '/../includes/contact-functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  header("Content-Type: application/json");

  $name = trim($_POST['name'] ?? '');
  $email = trim($_POST['email'] ?? '');
  $message = trim($_POST['message'] ?? '');

  $errors = [];

  if (empty($name)) $errors[] = "Name is required";
  if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "email is required";
  if (empty($message)) $errors[] = "Message is required";

  if (!empty($errors)) {
    echo json_encode(['success' => false, 'errors' => $errors]);
    exit;
  }

  try {
    $mailHelper = new MailHelper();
    $emailContent = "
        <html>
        <head>
            <title>Contact Form Submission</title>
            <style>
                body { font-family: Arial, sans-serif; }
                table { border-collapse: collapse; width: 100%; max-width: 600px; }
                th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
                th { background-color: #f2f2f2; }
                .header { background-color: #667eea; color: white; padding: 20px; }
            </style>
        </head>
        <body>
            <div class='header'>
                <h2>New Contact Form Submission - Mavix Tech</h2>
            </div>
            <table>
                <tr>
                    <th>Field</th>
                    <th>Information</th>
                </tr>
                <tr>
                    <td><strong>Name</strong></td>
                    <td>" . htmlspecialchars($name) . "</td>
                </tr>
                <tr>
                    <td><strong>Email</strong></td>
                    <td>" . htmlspecialchars($email) . "</td>
                </tr>
                <tr>
                    <td><strong>Message</strong></td>
                    <td>" . nl2br(htmlspecialchars($message)) . "</td>
                </tr>
                <tr>
                    <td><strong>URL</strong></td>
                    <td>https://mavixtech.com/</td>
                </tr>
                <tr>
                    <td><strong>Date & Time</strong></td>
                    <td>" . date('Y-m-d H:i:s') . "</td>
                </tr>
            </table>
        </body>
        </html>
    ";

    $altBody = "New Contact Form Submission - Mavix Tech\n\n" .
      "Name: " . $name . "\n" .
      "Email: " . $email . "\n" .
      "Message: " . $message . "\n" .
      "Date & Time: " . date('Y-m-d H:i:s');

    $emailData = [
      'to' => 'mavixtech7@gmail.com',
      'subject' => 'New Contact Form Submission - Mavix Tech',
      'body' => $emailContent,
      'alt_body' => $altBody,
      'from_email' => 'mavixtech7@gmail.com',
      'from_name' => 'Mavix Tech Website',
      'reply_to' => [
        'email' => $email,
        'name' => $name
      ]
    ];

    $result = $mailHelper->sendEmail($emailData);

    if ($result['success']) {
      echo json_encode([
        'success' => true,
        'message' => 'Thank you! Your message has been sent successfully.'
      ]);
    } else {
      echo json_encode([
        'success' => false,
        'message' => 'Sorry, email sending failed. Error: ' . $result['message']
      ]);
    }
  } catch (Exception $e) {
    echo json_encode([
      'success' => false,
      'message' => 'Sorry, there was an error processing your request. Please try again.'
    ]);
  }
  exit;
}
?>


<!-- Toast Container -->
<div class="position-fixed top-0 end-0 p-3" style="z-index: 1100">
  <div id="toastMessage" class="toast align-items-center text-white border-0" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="d-flex">
      <div id="toastBody" class="toast-body"></div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
  </div>
</div>


<section class="hero-section">
  <div class="text-center scroll-section">
    <div class="containers hero-heading position-relative">
      <p>
        Grow Business with<br />
        Hitech Business Technology Solutions 
        from <span class="hero-heading-effect">Mavix Tech</span>
      </p>
      <div
        class="position-absolute top-50 start-50 hero-bg-img translate-middle">
        <img src="<?php echo $config['WEB_PATH'] ?>assets/images/banner-blur.svg" class="home-tech-home-img" style="pointer-events: none;" />
      </div>
    </div>

    <div class="hero-btn d-flex gap-3 justify-content-center flex-wrap">
      <a href="<?php echo $config['SITE_URL']; ?>contact-us">
        <button type="button" class="blob-btn">
          Connect Today
          <span class="btn-learn-more-arrow ms-2">
            <i class="bi bi-arrow-right"></i>
          </span>
          <span class="blob-btn__inner">
            <span class="blob-btn__blobs">
              <span class="blob-btn__blob"></span>
              <span class="blob-btn__blob"></span>
              <span class="blob-btn__blob"></span>
              <span class="blob-btn__blob"></span>
            </span>
          </span>
        </button>
      </a>
    </div>

    <div class="hero-text">
      Grow business using tailored technology solutions without cutting corners and compromising quality.
    </div>

    <div class="logo-strip mt-5">
      <img class="logo-img" src="<?php echo $config['WEB_PATH'] ?>assets/images/mbinfoways.png" alt="mbinfoways" loading="lazy" decoding="async" />
      <img class="logo-img" src="<?php echo $config['WEB_PATH'] ?>assets/images/comonics.png" alt="comonics" loading="lazy" decoding="async" />
      <img class="logo-img" src="<?php echo $config['WEB_PATH'] ?>assets/images/auxoinnovations.png" alt="auxo innovations" loading="lazy" decoding="async" />
      <img class="logo-img" src="<?php echo $config['WEB_PATH'] ?>assets/images/crucialpointagency.png" alt="crucialpointagency" loading="lazy" decoding="async" />
      <img class="logo-img" src="<?php echo $config['WEB_PATH'] ?>assets/images/bdg-logo.svg" alt="bdg logo" loading="lazy" decoding="async" />
    </div>
  </div>
</section>

<section>
  <div class="containers">
    <div class="section-empower scroll-section section-padding">
      <p class="mainheading-global">
        Empower your <span class="mainheding-color"> Business Strategy</span> with
        scalable technology solutions programmed <br class="d-none d-md-block" />to expand your business horizons
      </p>
      <p class="subtitle-contetn text-muted mt-4">
        Redefine transformation and expedite operations with flexible,  <br
          class="d-none d-lg-block" />
        results-driven solutions from Mavix Tech
      </p>
    </div>

    <div class="d-grid gap-3 text-center mb-5 
            grid-template-columns-1 
            grid-template-columns-md-2 
            grid-template-columns-lg-4">

      <div class="scroll-section" data-animation="animate__fadeInUp" data-delay="0s">
        <div class="card-custom h-100">
          <p class="card-nmber1 card-nmber">Expert Team </p>
          <p class="mainsubheading-global mt-2">
            Connect with veterans committed to driving innovation and achieving results in a dynamic marketplace.
          </p>
        </div>
      </div>

      <div class="scroll-section" data-animation="animate__fadeInUp" data-delay="0s">
        <div class="card-custom h-100">
          <p class="card-nmber1 card-nmber">Flexible, Scalable Systems</p>
          <p class="mainsubheading-global mt-2">
           Utilize technology mechanisms that align with and support your needs, enabling your business to grow rapidly. 
          </p>
        </div>
      </div>

      <div class="scroll-section" data-animation="animate__fadeInUp" data-delay="0s">
        <div class="card-custom h-100">
          <p class="card-nmber1 card-nmber">Data Optimization</p>
          <p class="mainsubheading-global mt-2">
            Accelerate functional performance with accurate analytics and intelligent data-based enhancements.
          </p>
        </div>
      </div>

      <div class="scroll-section" data-animation="animate__fadeInUp" data-delay="0s">
        <div class="card-custom h-100">
          <p class="card-nmber1 card-nmber">Unified Solutions</p>
          <p class="mainsubheading-global mt-2">
            Integrate your technology/tools easily for fast turnaround and cohesive working.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- shhopify scroll section -->

<section>
  <div class="container text-center">
    <p class="phase-titele mainheading-global">
      <span class="br-toggle">Our Innovative <span class="hero-heading-effect"> Business</span>  </span>
      <span class="br-toggle">Technology Solutions</span>
    </p>
    <p class="text-muted subtitle-contetn">
      <span class="br-toggle">Utilize our digital transformation services in the USA that support your business dreams. Our technology solutions</span>
      <span class="br-toggle"> are mindfully crafted to ignite and push your business forward without losing competitive edge.</span>
    </p>
  </div>

  <div class="container mt-4 custom-scroll-height">
    <div
      class="text-decoration-none text-dark scrollable-card">
      <div class="d-flex integration-card animate__animated shadow">
        <div
          class="col-lg-4 d-flex flex-column justify-content-center card-left">
          <p class="mb-2 card-title ms-4 me-5">Shopify</p>
          <p class="mb-3 ms-4 me-4 integration-card-content">
            Build rapidly, responsive stores to accelerate your conversion rate
          </p>
          <a
            href="<?php echo $config['SITE_URL']; ?>shopify-services">
            <button
              class="btn btn-custom ms-3 align-self-lg-start align-self-center">
              Learn More
            </button>
          </a>
        </div>

        <div class="col-lg-8 p-0">
          <a
            href="<?php echo $config['SITE_URL']; ?>shopify-services">
            <img
              src="<?php echo $config['WEB_PATH'] ?>assets/images/shopify.png"
              alt="Shopify"
              class="feature-image "
              loading="lazy" decoding="async" />
          </a>
        </div>
      </div>
    </div>
    <div
      class="text-decoration-none text-dark scrollable-card">
      <div class="d-flex integration-card animate__animated shadow">
        <div
          class="col-lg-4 d-flex flex-column justify-content-center card-left">
          <h5 class="mb-2 card-title ms-4 me-5">Salesforce</h5>
          <p class="mb-3 ms-4 me-4 integration-card-content">
            Enhanced leads and improved CRM for more effective sales.
          </p>
          <a
            href="<?php echo $config['SITE_URL']; ?>salesforces-services">
            <button
              class="btn btn-custom ms-3 align-self-lg-start align-self-center">
              Learn More
            </button>
          </a>
        </div>
        <div class="col-lg-8 p-0">
          <a
            href="<?php echo $config['SITE_URL']; ?>salesforces-services">
            <img
              src="<?php echo $config['WEB_PATH'] ?>assets/images/salesforce.png"
              alt="Salesforce"
              class="feature-image"
              loading="lazy" decoding="async" />
          </a>
        </div>
      </div>
    </div>
    <div
      class="text-decoration-none text-dark scrollable-card">
      <div class="d-flex integration-card animate__animated shadow">
        <div
          class="col-lg-4 d-flex flex-column justify-content-center card-left">
          <h5 class="mb-2 card-title ms-4 me-5">Email Marketing</h5>
          <p class="mb-3 ms-4 me-4 integration-card-content">
            Contact your audience using effective emails.
          </p>
          <a
            href="<?php echo $config['SITE_URL']; ?>email-marketing">
            <button
              class="btn btn-custom ms-3 align-self-lg-start align-self-center">
              Learn More
            </button>
          </a>
        </div>
        <div class="col-lg-8 p-0">
          <a
            href="<?php echo $config['SITE_URL']; ?>email-marketing">
            <img
              src="<?php echo $config['WEB_PATH'] ?>assets/images/image.png"
              alt="Email Marketing"
              class="img-fluid feature-image"
              loading="lazy" decoding="async" />
          </a>
        </div>
      </div>
    </div>
    <div class="text-decoration-none text-dark scrollable-card">
      <div class="d-flex integration-card animate__animated shadow">
        <div
          class="col-lg-4 d-flex flex-column justify-content-center card-left">
          <h5 class="mb-2 card-title ms-4 me-5">Digital Marketing</h5>
          <p class="mb-3 ms-4 me-4 integration-card-content">
            Solidify your online space and boost growth with improved digital strategies.
          </p>
          <a
            href="<?php echo $config['SITE_URL']; ?>digital-marketing">
            <button
              class="btn btn-custom ms-3 align-self-lg-start align-self-center">
              Learn More
            </button>
          </a>
        </div>
        <div class="col-lg-8 p-0 text-center">
          <a href="<?php echo $config['SITE_URL']; ?>digital-marketing">
            <!-- Image for large screens (desktops/laptops) -->
            <img
              src="<?php echo $config['WEB_PATH'] ?>assets/images/digi.png"
              alt="Digital Marketing"
              class="img-fluid d-none d-lg-block feature-image"
              fetchpriority="high" loading="eager" decoding="async" />

            <!-- Image for tablets and mobile -->
            <img
              src="<?php echo $config['WEB_PATH'] ?>assets/images/digi-new.jpg"
              alt="Digital Marketing"
              class="img-fluid d-block d-lg-none feature-image"
              fetchpriority="high" loading="eager" decoding="async" />
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class=" py-5 transformative-main">
  <div class="scroll-section mt-5 mb-5 pt-3">
    <h2 class="section-title mainheading-global ">
      <span> Learn what our</span><span class="mainheding-color"> Clients say  </span> about Say About<br />
      Mavix Tech
    </h2>
    <p class="section-subtitle subtitle-contetn text-muted mt-4">
      Understand how Mavix Tech can change your growth trajectory by creating a stronger tech business together.
    </p>
  </div>

  <div class="pad row g-3 mt-5">
    <!-- Testimonial 1 -->
    <div class="col-12 col-md-6 col-lg-4">
      <div
        class="testimonial-card scroll-section h-100"
        data-animation="animate__fadeInUp"
        data-delay="0s">
        <div class="testimonial-quote mb-3">
          <img src="<?php echo $config['WEB_PATH'] ?>assets/images/Vector.png" alt="Quote" />
        </div>
        <p>
          Mavix Tech delivers innovative Business Technology Solutions designed to
          drive results across key industries.
        </p>
        <div class="d-flex justify-content-end testimonial-quote">
          <img
            src="<?php echo $config['WEB_PATH'] ?>assets/images/Vector2.png"
            class="testimonial-quotes-2"
            alt="Quote" />
        </div>
      </div>
    </div>

    <!-- Testimonial 2 -->
    <div class="col-12 col-md-6 col-lg-4">
      <div
        class="testimonial-card scroll-section h-100"
        data-animation="animate__fadeInUp"
        data-delay="0.1s">
        <div class="testimonial-quote mb-3">
          <img src="<?php echo $config['WEB_PATH'] ?>assets/images/Vector.png" alt="Quote" />
        </div>
        <p>
          Mavix Tech transformed our outdated online store into a sleek,
          high-converting Shopify website. Their team was professional and fast.
        </p>
        <div class="d-flex justify-content-end testimonial-quote">
          <img
            src="<?php echo $config['WEB_PATH'] ?>assets/images/Vector2.png"
            class="testimonial-quotes-2"
            alt="Quote" />
        </div>
      </div>
    </div>

    <!-- Testimonial 3 -->
    <div class="col-12 col-md-6 col-lg-4">
      <div
        class="testimonial-card scroll-section h-100"
        data-animation="animate__fadeInUp"
        data-delay="0.2s">
        <div class="testimonial-quote mb-3">
          <img src="<?php echo $config['WEB_PATH'] ?>assets/images/Vector.png" alt="Quote" />
        </div>
        <p>
          The email marketing campaigns Mavix Tech created were not only beautiful
          but highly effective. Our open rates improved by 45%.
        </p>
        <div class="d-flex justify-content-end testimonial-quote">
          <img
            src="<?php echo $config['WEB_PATH'] ?>assets/images/Vector2.png"
            class="testimonial-quotes-2"
            alt="Quote" />
        </div>
      </div>
    </div>
  </div>
</section>

<section id="salesforce-voicethat" class="scroll-section">
  <div class="containers my-5 ml-5 lg:gap-3 py-5  voices-containt">
    <div class="row align-items-center flex-column flex-lg-row">
      <!-- Left Section -->
      <div class="col-12 col-lg-5 left-section mb-4 mb-lg-0 text-start">
        <p class="mainheading-global">
          <span class="mainheding-color">Voices</span> that Inspire
        </p>
        <p class="subtitle-contetn text-muted">
          Every story has the power to inspire, and every voice carries a journey worth sharing.
          In this section, we bring together experiences, insights, and thoughts from individuals who continue to make a difference.
        </p>
        <p class="subtitle-contetn text-muted">
          Their words motivate, their journeys inspire, and their ideas encourage us to dream bigger, aim higher, and achieve more.
        </p>
        <p class="subtitle-contetn text-muted">
          Take a moment to explore these powerful voices and let their stories spark new possibilities in your own path.
        </p>
        <div class="d-flex justify-content-start align-items-center gap-3">
          <button id="customPrev" class="arrow-btn"><i class="bi bi-arrow-left"></i></button>
          <button id="customNext" class="arrow-btn"><i class="bi bi-arrow-right"></i></button>
        </div>
      </div>

      <!-- Right Section -->
      <div class="col-12 col-lg-7">
        <div id="carouselExampleCaptions" class="carousel slide">
          <!-- Carousel Indicators -->
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
              class="active custom-gradient-border-box-slider-indicator" aria-current="true"
              aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
              class="custom-gradient-border-box-slider-indicator" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
              class="custom-gradient-border-box-slider-indicator" aria-label="Slide 3"></button>
          </div>

          <!-- Carousel Items -->
          <div class="carousel-inner fixed-carousel-height">
            <!-- Slide 1 -->
            <div class="carousel-item text-center active">
              <div class="gradient-border-box mx-auto custom-gradient-border-box-width">
                <div class="avatar-container mx-auto mb-3">
                  <img src="<?php echo $config['WEB_PATH'] ?>assets/images/ratan_tata.png" class="avatar123" alt="Avatar" />
                </div>
                <p class="testimonial-quote-des px-2">
                  "Ups and downs in life are very important to keep us going, because a straight line in an ECG means we are not alive."
                </p>
                <p class="testimonial-name">Ratan Tata</p>
                <p class="testimonial-title">Former Chairman of Tata Group</p>
              </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item text-center">
              <div class="gradient-border-box mx-auto custom-gradient-border-box-width">
                <div class="avatar-container mx-auto mb-3">
                  <img src="<?php echo $config['WEB_PATH'] ?>assets/images/richard_branson.png" class="avatar123" alt="Avatar" />
                </div>
                <p class="testimonial-quote-des px-2">
                  "Business opportunities are like buses — there's always another one coming."
                </p>
                <p class="testimonial-name">Richard Branson</p>
                <p class="testimonial-title">Founder of Virgin Group</p>
              </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item text-center">
              <div class="gradient-border-box mx-auto custom-gradient-border-box-width">
                <div class="avatar-container mx-auto mb-3">
                  <img src="<?php echo $config['WEB_PATH'] ?>assets/images/pranav-mistry.png" class="avatar123" alt="Avatar" />
                </div>
                <p class="testimonial-quote-des px-2">
                  “Technology is not about tools, it’s about how we use those tools to make life better.”
                </p>
                <p class="testimonial-name">Pranav Mistry</p>
                <p class="testimonial-title">Inventor & Technologist</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Contact Section -->
<section class="container contact-container py-5">
  <div class="text-center mb-4 scroll-section">
    <h2 class="mainheading-global">
      <span class="mainheding-color">Contact</span> us
    </h2>
    <p class="text-muted subtitle-contetn">
      Eager to see your business succeed?<br />
      <a class="text-decoration-none" href="<?php echo $config['SITE_URL']; ?>contact-us">Connect with our team</a> for business technology solutions.<br />
    </p>
  </div>

  <div class="row g-lg-4 d-flex align-items-start">
    <div class="col-md-3 text-center">
      <img
        src="<?php echo $config['WEB_PATH'] ?>assets/images/woman.png"
        alt="Woman with tablet"
        class="img-fluid rounded-4 shadow-sm scroll-section d-none d-lg-block"
        data-animation="animate__fadeInUp"
        data-delay="0s" />
      <div
        class="card-custom mt-3 text-start scroll-section d-none d-lg-block"
        data-animation="animate__fadeInUp"
        data-delay="0.1s">
        <i class="bi bi-geo-alt icon icon-large"></i>
        <p class="mb-1 text-muted">Location</p>
        <small>
          <a
            href="https://www.google.com/maps?q=A-721,+Dev+Atelier,+100+Feet+Anand+Nagar+Rd,+Prahlad+Nagar,+Ahmedabad"
            target="_blank"
            class="contact-link">
            Office: C-201, Shine Superb, Nr. Shavona Tilak, Ranip, Ahmedabad, Gujarat - 382480
          </a>
        </small>
      </div>
    </div>

    <!-- Contact Form -->
    <div id="contact-form" class="col-lg-6 flex-fill align-self-stretch">
      <div
        class="card-custom d-flex flex-column h-100 position-relative scroll-section"
        data-animation="animate__fadeInUp"
        data-delay="0.1s">
        <form id="contactForm" class="p-4 pt-5">
          <div class="mb-4">
            <label class="form-label small text-muted">NAME</label>
            <input type="text" name="name" id="name" class="form-control p-2" />
            <span class="text-danger" id="nameError">Name is required</span>
          </div>

          <div class="mb-4">
            <label class="form-label small text-muted">EMAIL</label>
            <input type="text" name="email" id="email" class="form-control p-2" />
            <span class="text-danger" id="emailError">Valid email is required</span>
          </div>

          <div class="mb-4">
            <label class="form-label small text-muted">MESSAGE</label>
            <textarea name="message" id="message" class="form-control p-2" rows="6"
              onfocus="this.placeholder=''"
              onblur="if(this.value===''){this.placeholder='Draft a message'}"></textarea>
            <span class="text-danger" id="messageError">Message is required</span>
          </div>

          <button type="submit" class="btn btn-custom px-4" id="submitBtn">
            <span id="btnText">Send Message</span>
            <span id="spinner" class="spinner-border spinner-border-sm ms-2 d-none"></span>
          </button>
        </form>
      </div>
    </div>

    <!-- Contact Info -->
    <div class="mt-4 col-lg-3 flex-fill align-self-stretch">
      <div class="d-flex flex-column justify-content-between">
        <div class="card-custom mb-3 flex-grow-1 scroll-section"
          data-animation="animate__fadeInUp"
          data-delay="0.1s">
          <div class="mb-4">
            <i class="bi bi-envelope icon icon-large"></i>
            <div class="mb-1"><strong>Email</strong></div>
            <p>
              <a href="https://mail.google.com/mail/?view=cm&to=info@mavixtech.com" rel="noopener noreferrer" target="_blank" class="contact-link">info@mavixtech.com</a>
            </p>
          </div>
          <div class="mb-4">
            <i class="bi bi-telephone icon icon-large"></i>
            <div class="mb-1"><strong>Phone</strong></div>
            <p>
              <a href="tel:+9162321151261" class="contact-link">+91 6232 1151 261</a>
            </p>
          </div>
          <div class="d-lg-none">
            <i class="bi bi-geo-alt icon icon-large"></i>
            <div class="mb-1"><strong>Location</strong></div>
            <small>
              <a
                href="https://www.google.com/maps?q=A-721,+Dev+Atelier,+100+Feet+Anand+Nagar+Rd,+Prahlad+Nagar,+Ahmedabad"
                target="_blank"
                class="contact-link">
                Office: C-201, Shine Superb, Nr. Shavona Tilak, Ranip, Ahmedabad, Gujarat - 382480
              </a>
            </small>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const carousel = document.querySelector("#carouselExampleCaptions");
    const prevBtn = document.querySelector("#customPrev");
    const nextBtn = document.querySelector("#customNext");

    // Bootstrap Carousel
    const carouselInstance = new bootstrap.Carousel(carousel, {
      interval: 2000,
      ride: "carousel",
      wrap: true,
      keyboard: true,
      pause: "hover",
    });

    prevBtn.addEventListener("click", () => carouselInstance.prev());
    nextBtn.addEventListener("click", () => carouselInstance.next());

    // Contact Form Elements
    const form = document.getElementById("contactForm");
    const name = document.getElementById("name");
    const email = document.getElementById("email");
    const message = document.getElementById("message");

    const nameError = document.getElementById("nameError");
    const emailError = document.getElementById("emailError");
    const messageError = document.getElementById("messageError");

    const submitBtn = document.getElementById("submitBtn");
    const btnText = document.getElementById("btnText");
    const spinner = document.getElementById("spinner");

    // Hide errors initially
    nameError.style.display = "none";
    emailError.style.display = "none";
    messageError.style.display = "none";

    function showError(input, errorElement, message) {
      errorElement.textContent = message;
      errorElement.style.display = "block";
      input.classList.add("is-invalid");
    }

    function hideError(input, errorElement) {
      errorElement.style.display = "none";
      input.classList.remove("is-invalid");
    }

    // 🟢 Remove error when user types
    name.addEventListener("input", () => hideError(name, nameError));
    email.addEventListener("input", () => hideError(email, emailError));
    message.addEventListener("input", () => hideError(message, messageError));

    form.addEventListener("submit", function(e) {
      e.preventDefault();

      let isValid = true;

      // Name Validation
      if (name.value.trim() === "") {
        showError(name, nameError, "Name is required");
        isValid = false;
      } else {
        hideError(name, nameError);
      }

      // Email Validation
      const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (email.value.trim() === "") {
        showError(email, emailError, "Email is required");
        isValid = false;
      } else if (!emailPattern.test(email.value.trim())) {
        showError(email, emailError, "Enter a valid email address");
        isValid = false;
      } else {
        hideError(email, emailError);
      }

      // Message Validation
      if (message.value.trim() === "") {
        showError(message, messageError, "Message is required");
        isValid = false;
      } else {
        hideError(message, messageError);
      }

      // Stop submission if invalid
      if (!isValid) return;

      // Show loader and disable button
      spinner.classList.remove("d-none");
      btnText.textContent = "Sending...";
      submitBtn.disabled = true;

      const formData = new FormData(form);
      fetch(window.location.href, {
          method: "POST",
          body: formData,
        })
        .then(async (response) => {
          showToast("✅" + "Thank You for sending Message", "bg-success");
          form.reset();
        })
        .catch((error) => {
          form.reset();
        })
        .finally(() => {
          spinner.classList.add("d-none");
          btnText.textContent = "Send Message";
          submitBtn.disabled = false;
        });
    });
  });


  function showToast(message, type) {
    const toastEl = document.getElementById("toastMessage");
    const toastBody = document.getElementById("toastBody");

    toastEl.classList.remove("bg-success", "bg-danger");
    toastEl.classList.add(type);
    toastBody.textContent = message;

    const toast = new bootstrap.Toast(toastEl, {
      delay: 3000
    });
    toast.show();
  }
</script>