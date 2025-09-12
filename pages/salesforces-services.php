<?php
require_once __DIR__ . '/../includes/contact-functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  header("Content-Type: application/json");

  $fullName = trim($_POST['full_name'] ?? '');
  $email = trim($_POST['email'] ?? '');
  $countryCode = trim($_POST['countryCode'] ?? '');
  $phone = trim($_POST['phone'] ?? '');
  $company = trim($_POST['company'] ?? '');
  $requirement = trim($_POST['requirement'] ?? '');
  $fullPhone = $countryCode . $phone;

  $errors = [];

  // Validation
  if (empty($fullName)) $errors[] = "Full name is required";
  if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Valid email is required";
  if (empty($phone) || !preg_match('/^[0-9]{10}$/', $phone)) $errors[] = "Valid 10-digit phone number is required";
  if (empty($company)) $errors[] = "Company name is required";
  if (empty($requirement)) $errors[] = "Requirement / Message is required";

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
                <tr><th>Field</th><th>Information</th></tr>
                <tr><td><strong>Full Name</strong></td><td>" . htmlspecialchars($fullName) . "</td></tr>
                <tr><td><strong>Email</strong></td><td>" . htmlspecialchars($email) . "</td></tr>
                <tr><td><strong>Phone</strong></td><td>" . htmlspecialchars($fullPhone) . "</td></tr>
                <tr><td><strong>Company</strong></td><td>" . htmlspecialchars($company) . "</td></tr>
                <tr><td><strong>Requirement</strong></td><td>" . nl2br(htmlspecialchars($requirement)) . "</td></tr>
                <tr><td><strong>URL</strong></td><td>https://mavixtech.com/salesforces-services</td></tr>
                <tr><td><strong>Date & Time</strong></td><td>" . date('Y-m-d H:i:s') . "</td></tr>
            </table>
        </body>
        </html>
    ";

    $altBody = "New Contact Form Submission - Mavix Tech\n\n" .
      "Full Name: " . $fullName . "\n" .
      "Email: " . $email . "\n" .
      "Phone: " . $fullPhone . "\n" .
      "Company: " . $company . "\n" .
      "Requirement: " . $requirement . "\n" .
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
        'name' => $fullName
      ]
    ];

    $result = $mailHelper->sendEmail($emailData);

    if ($result['success']) {
      echo json_encode(['success' => true, 'message' => 'Thank you! Your message has been sent successfully.']);
    } else {
      echo json_encode(['success' => false, 'message' => 'Sorry, email sending failed. Error: ' . $result['message']]);
    }
  } catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => 'Sorry, there was an error processing your request. Please try again.']);
  }
  exit;
}
?>


<!-- Toast Container -->
<div class="position-fixed top-0 end-0 p-3" style="z-index: 1100;">
  <div id="contactToast" class="toast align-items-center text-white border-0" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="d-flex">
      <div class="toast-body" id="contactToastMessage"></div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
  </div>
</div>

<section class="salesforce-main overflow-hidden py-5">
  <div class="container my-5 scroll-section">
    <div class="row gy-4 align-items-start">
      <!-- Services Column -->
      <div class="col-lg-6">
        <p class="salesforce-header-head mb-4"><span class="salesforce-header-color">Professional Salesforce</span> Development<br
            class="d-none d-md-block"> Company</p>
        <div class="position-absolute top-50 start-35 digital-hero-bg-img translate-middle">
          <img src="<?php echo $config['SITE_URL'] ?>assets/images/homepage-hero-bg-gradient.png" class="shopify-tech-home-img" />
        </div>
        <div class="row">
          <div class="col-sm-6">
            <ul class="list-unstyled services-list">
              <li class="subcontainet-global-header">
                <div class="icon-bg">
                  <img src="<?php echo $config['WEB_PATH'] ?>assets/images/Salesforceheader1.svg" class="service-icon">
                </div>
                <span class="salseforce-heading-content">Offshore Salesforce Development</span>
              </li>
              <li class="subcontainet-global-header">
                <div class="icon-bg">
                  <img src="<?php echo $config['WEB_PATH'] ?>assets/images/Salesforceheader2.svg" class="service-icon">
                </div>
                <span class="salseforce-heading-content">Custom Application Development Services</span>
              </li>
              <li class="subcontainet-global-header">
                <div class="icon-bg">
                  <img src="<?php echo $config['WEB_PATH'] ?>assets/images/Salesforceheader3.svg" class="service-icon">
                </div>
                <span class="salseforce-heading-content">Streamlined Sales Workflows</span>
              </li>
              <li class="subcontainet-global-header">
                <div class="icon-bg">
                  <img src="<?php echo $config['WEB_PATH'] ?>assets/images/Salesforceheader4.svg" class="service-icon">
                </div>
                <span class="salseforce-heading-content">Salesforce CRM Development</span>
              </li>
            </ul>
          </div>

          <div class="col-sm-6">
            <ul class="list-unstyled services-list">
              <li class="subcontainet-global-header">
                <div class="icon-bg">
                  <img src="<?php echo $config['WEB_PATH'] ?>assets/images/Salesforceheader5.svg" class="service-icon">
                </div>
                <span class="salseforce-heading-content">Seamless Data Migration & Integration</span>
              </li>
              <li class="subcontainet-global-header">
                <div class="icon-bg">
                  <img src="<?php echo $config['WEB_PATH'] ?>assets/images/Salesforceheader6.svg" class="service-icon">
                </div>
                <span class="salseforce-heading-content">End-to-End Training & Onboarding</span>
              </li>
              <li class="subcontainet-global-header">
                <div class="icon-bg">
                  <img src="<?php echo $config['WEB_PATH'] ?>assets/images/Salesforceheader7.svg" class="service-icon">
                </div>
                <span class="salseforce-heading-content">Custom Reports & Dashboards</span>
              </li>
              <li class="subcontainet-global-header">
                <div class="icon-bg">
                  <img src="<?php echo $config['WEB_PATH'] ?>assets/images/Salesforceheader8.svg" class="service-icon">
                </div>
                <span class="salseforce-heading-content">Ongoing Support & Maintenance</span>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Form Column -->
      <div class="col-lg-6">
        <div class="form-container shadow">
          <h5 class="text-center salseforce-heading-form-title mb-3">Book Free Consultation</h5>
          <p class="text-center salseforce-heading-form-content mb-4">Fill Out the Form and Our Experts Will Contact You Within 24hrs.</p>

          <form id="contactForm" novalidate>
            <div class="d-md-flex gap-3 mb-md-3 mb-0">
              <div class="flex-grow-1 py-md-0 py-3">
                <input type="text" name="full_name" id="fullName" class="form-control p-2" placeholder="Full Name">
                <small class="text-light" id="error_full_name"></small>
              </div>
              <div class="col-12 col-md-6">
                <input type="email" name="email" id="consultationEmail" class="form-control p-2" placeholder="Email">
                <small class="text-light" id="error_email"></small>
              </div>
            </div>

            <div class="d-md-flex gap-3 mb-md-3 mb-0">
              <div class="flex-grow-1 py-md-0 py-3">
                <div class="input-group">
                  <select class="form-select no-shadow" id="countryCode" name="countryCode" style="max-width:110px;">
                    <?php
                    $jsonFile = __DIR__ . '/countries.json';
                    if (file_exists($jsonFile)) {
                      $jsonData = file_get_contents($jsonFile);
                      $countries = json_decode($jsonData, true);
                      if (!empty($countries) && is_array($countries)) {
                        foreach ($countries as $country) {
                          $selected = ($country['code'] === "IN") ? "selected" : "";
                          echo "<option value='{$country['dial_code']}' {$selected}> {$country['dial_code']}</option>";
                        }
                      } else {
                        echo "<option value='+91'>IN (+91)</option>";
                      }
                    } else {
                      echo "<option value='+91'>IN (+91)</option>";
                    }
                    ?>
                  </select>
                  <input
                    type="tel"
                    name="phone"
                    id="phone"
                    class="form-control p-2"
                    placeholder="Phone Number"
                    oninput="this.value = this.value.replace(/[^0-9+\-()]/g, '')">
                </div>
                <small class="text-light" id="error_phone"></small>
              </div>
              <div class="col-12 col-md-6 mb-md-0 mb-3">
                <input type="text" name="company" id="company" class="form-control p-2" placeholder="Company Name">
              </div>
            </div>

            <div class="mb-3">
              <textarea name="requirement" id="requirement" class="form-control px-2" rows="3" placeholder="Your Requirement"></textarea>
              <small class="text-light" id="error_requirement"></small>
            </div>

            <div class="d-grid">
              <button type="submit" class="btn btn-custom px-4" id="submitBtn">
                <span id="btnText">Submit Your Requirement!</span>
                <span id="spinner" class="spinner-border spinner-border-sm ms-2 d-none"></span>
              </button>
            </div>

            <!-- Success / Error Messages -->
            <div id="formMessage" class="mt-3 text-center"></div>
          </form>

        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-5 text-center container scroll-section">
  <div class="row justify-content-center">
    <div class="col-lg-11">
      <p class="mainheading-global mb-3 position-relative z-1">
        Certified <span class="mainheding-color">Certified Salesforce Development</span> Company Empowering Business Transformation
        <img src="<?php echo $config['WEB_PATH'] ?>assets/images/ShopifyDevlopment.png"
          class="position-absolute img-fluid salesforce-Certified z-1 d-none d-md-block"
          alt="Highlight Underline" />
      </p>
      <p class="subtitle-contetn text-muted mb-4">
        Partner with a certified Salesforce development company to unlock your CRM’s true potential. We’re trusted Salesforce consulting experts helping brands scale efficiently, deliver top-tier customer experiences, and harness data-driven decision-making. Whether you’re optimizing existing Salesforce operations or launching from scratch, our affordable Salesforce development agency ensures lasting value through innovative solutions and unmatched support.
      </p>
      <p class="salseforse-consulting-content">
        Let’s elevate your business with mavixtech and schedule your free Salesforce consultation today!
      </p>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="scroll-section mb-5">
      <p class="mainheading-global text-center position-relative z-1">
        End-to-End Services by a Trusted
        <span class="mainheding-color position-relative d-inline-block">
          Salesforce Development
          <img
            src="<?php echo $config['WEB_PATH'] ?>assets/images/ShopifyDevlopment.png"
            class="shopify-underline-img d-none d-md-block"
            alt="Highlight Underline" />
        </span>
        Company
      </p>
    </div>

    <div class="row g-4 ps-md-5 pe-md-5">
      <!-- Card 1 -->
      <div class="col-md-6 col-lg-6 scroll-section" data-animation="animate__fadeInUp" data-delay="0s">
        <div class="card-custom">
          <div class="icon-box"><i class="bi bi-grid icon-large"></i>
          </div>
          <p class="card-title-heading">Salesforce Application Development</p>
          <p class="subtitle-contetn pe-md-5">Our expert Salesforce application developers create dynamic, scalable apps that enhance platform capabilities, from internal workflows to customer-facing tools. These apps integrate seamlessly with your CRM, improving efficiency and enabling smarter decision-making.</p>-->
        </div>
      </div>
      <!-- Card 2 -->
      <div class="col-md-6 col-lg-6 scroll-section" data-animation="animate__fadeInUp" data-delay="0.1s">
        <div class="card-custom">
          <div class="icon-box"><i class="bi bi-code-slash"></i></div>
          <p class="card-title-heading">Salesforce App Development Company</p>
          <p class="subtitle-contetn pe-md-5">As a top-rated Salesforce app development company, we design customized apps that streamline operations and deliver rich, personalized customer experiences. Whether it’s sales enablement or internal tools, our apps drive engagement and ROI.</p>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="col-md-6 col-lg-6 scroll-section" data-animation="animate__fadeInUp" data-delay="0.2s">
        <div class="card-custom">
          <div class="icon-box"><i class="bi bi-arrow-left-right"></i></div>
          <p class="card-title-heading">Salesforce Integration Consultant</p>
          <p class="subtitle-contetn pe-md-5">Our Salesforce integration consultants ensure smooth connections between Salesforce and third-party systems—like ERPs, eCommerce platforms, and marketing tools—reducing manual work and enabling centralized data insights.</p>
        </div>
      </div>
      <!-- Card 4 -->
      <div class="col-md-6 col-lg-6 scroll-section" data-animation="animate__fadeInUp" data-delay="0.3s">
        <div class="card-custom">
          <div class="icon-box"><i class="bi bi-toggle-off"></i></div>
          <p class="card-title-heading">Salesforce Consulting & Customization</p>
          <p class="subtitle-contetn pe-md-5">We provide expert Salesforce consulting to align your CRM with business goals. From process automation to custom dashboards and workflows, our team delivers personalized Salesforce CRM consulting services that improve user adoption and productivity.</p>
        </div>
      </div>
      <!-- Card 5 -->
      <div class="col-md-6 col-lg-6 scroll-section" data-animation="animate__fadeInUp" data-delay="0.4s">
        <div class="card-custom">
          <div class="icon-box"><img src="<?php echo $config['WEB_PATH'] ?>assets/images/Salesforceheader8.svg" alt="Consulting"></div>
          <p class="card-title-heading">Migration & Support Services</p>
          <p class="subtitle-contetn pe-md-5">Ensure secure, accurate, and disruption-free data transfer with our migration services. Post-deployment, rely on our support team for issue resolution, platform optimization, and user training.</p>
        </div>
      </div>
      <!-- Card 6 -->
      <div class="col-md-6 col-lg-6 scroll-section" data-animation="animate__fadeInUp" data-delay="0.5s">
        <div class="card-custom">
          <div class="icon-box"><i class="bi bi-gear"></i></div>
          <p class="card-title-heading">Salesforce CRM Development</p>
          <p class="subtitle-contetn pe-md-5">We build scalable, customized CRM systems with advanced features to manage leads, opportunities, and service requests—perfect for growing teams that need centralized visibility and control.</p>
        </div>
      </div>
      <!-- Card 7 -->
      <div class="col-md-6 col-lg-6 scroll-section" data-animation="animate__fadeInUp" data-delay="0.6s">
        <div class="card-custom">
          <div class="icon-box"><i class="bi bi-file-code"></i></div>
          <p class="card-title-heading">Salesforce Managed Services</p>
          <p class="subtitle-contetn pe-md-5">Our ongoing Salesforce development services include system health checks, performance monitoring, admin support, and timely updates to keep your environment secure and efficient.</p>
        </div>
      </div>
      <!-- Card 8 -->
      <div class="col-md-6 col-lg-6 scroll-section" data-animation="animate__fadeInUp" data-delay="0.7s">
        <div class="card-custom">
          <div class="icon-box"><i class="bi bi-person-gear"></i></div>
          <p class="card-title-heading">Offshore Salesforce Development</p>
          <p class="subtitle-contetn pe-md-5">Looking to reduce costs without sacrificing quality? Our offshore Salesforce development model ensures top-tier development support with flexible engagement options and guaranteed delivery.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-6 scroll-section" data-animation="animate__fadeInUp" data-delay="0.7s">
        <div class="card-custom ">
          <div class="icon-box"><i class="bi bi-person-gear"></i></div>
          <p class="card-title-heading">Salesforce Application Development Services</p>
          <p class="subtitle-contetn pe-md-5">From basic extensions to enterprise-grade solutions, our Salesforce application development services empower your teams with intelligent, responsive, and mobile-friendly experiences that boost adoption.</p>
        </div>
      </div>
    </div>

    <!-- CTA Section -->
    <div class="row g-4 d-flex ps-md-5 pe-md-5">
      <div class="cta-section mt-5 g-4 col-md-6 col-lg-6 scroll-section" data-animation="animate__fadeInUp"
        data-delay="0.8s">
        <div>
          <p class="bussiness-potential-card-title pe-md-5 ps-2">Revolutionize Your Customer Experience with
            Salesforce</p>

          <a class="navbar-brand" href="https://mavixtech.com/contact-us">
            <button class="cta-btn subcontainet-global-header mt-3 ps-2">Talk to our Salesforce Experts</button>
          </a>
        </div>
      </div>
      <div class="col-md-6 cta-image col-lg-6 mt-5 scroll-section" data-animation="animate__fadeInUp"
        data-delay="0.9s">
        <img src="<?php echo $config['WEB_PATH'] ?>assets/images/Revolutionize Customer Experience.png" alt="Salesforce analytics dashboard"
          class="img-flueid" />
      </div>
    </div>
</section>

<section id="salseforce-conclusionslider" class="scroll-section"></section>

<section class="">
  <div class="container py-md-5 ">
    <div class="row align-items-center">
      <!-- Left Text Column -->
      <div class="col-md-6 scroll-section" data-animation="animate__fadeInUp" data-delay="0s">
        <p class="mainheading-global position-relative z-1">Why We’re a Preferred <span
            class="mainheding-color">Salesforce Development
            <img src="<?php echo $config['WEB_PATH'] ?>assets/images/salseforce-excelense-service.png"
              class="position-absolute img-fluid salseforce-underline-img z-1 d-none d-md-block"
              alt="Highlight Underline">
          </span> Company

        </p>
        <p class="mt-3 mainsubheading-global pe-5 ">
          Get expert-led, affordable Salesforce solutions that scale with your goals. Whether you need Salesforce CRM development company support or offshore Salesforce development resources, we help you build, automate, and optimize with ease.
        </p>
        <!-- <p class="mt-4 card-title-heading">Get Started with Our Certified Experts Today!</p> -->
        <a href="https://mavixtech.com/contact-us">
          <button class="btn salseforse-service-button mt-3">Start Collaborating with Our Salesforce Experts</button>
        </a>
      </div>

      <!-- Right Image Grid -->
      <div class="col-md-6">
        <!-- <div class="cert-grid text-center">
            <div class="row justify-content-center mb-2 g-5">
              <div class="col-4 col-sm-4">
                <img src="../..<?php echo $config['WEB_PATH'] ?>assets/images/SalseforceCertifed1.png" class="badge-img" alt="Badge 1" />
              </div>
              <div class="col-4 col-sm-4">
                <img src="../..<?php echo $config['WEB_PATH'] ?>assets/images/SalseforceCertifed2.png" class="badge-img" alt="Badge 2" />
              </div>
              <div class="col-4 col-sm-4">
                <img src="../..<?php echo $config['WEB_PATH'] ?>assets/images/SalseforceCertifed3.png" class="badge-img" alt="Badge 3" />
              </div>
            </div>
            <div class="row justify-content-center g-5">
              <div class="col-4 col-sm-4">
                <img src="../..<?php echo $config['WEB_PATH'] ?>assets/images/SalseforceCertifed4.png" class="badge-img" alt="Badge 6" />
              </div>
              <div class="col-4 col-sm-4">
                <img src="../..<?php echo $config['WEB_PATH'] ?>assets/images/SalseforceCertifed5.png" class="badge-img" alt="Badge 7" />
              </div>
              <div class="col-4 col-sm-4">
                <img src="../..<?php echo $config['WEB_PATH'] ?>assets/images/SalseforceCertifed6.png" class="badge-img" alt="Badge 7" />
              </div>
            </div>
            <div class="row justify-content-center mb-2 g-5">
              <div class="col-4 col-sm-4">
                <img src="../..<?php echo $config['WEB_PATH'] ?>assets/images/SalseforceCertifed7.png" class="badge-img badge-img-last " alt="Badge 4" />
              </div>
              <div class="col-4 col-sm-4">
                <img src="../..<?php echo $config['WEB_PATH'] ?>assets/images/SalseforceCertifed8.png" class="badge-img badge-img-last" alt="Badge 5" />
              </div>
            </div>

          </div> -->
        <div class="cert-container">
          <div class="badge-row">
            <img src="../..<?php echo $config['WEB_PATH'] ?>assets/images/SalseforceCertifed1.png" alt="Badge 1" class="badge-img scroll-section"
              data-animation="animate__fadeInUp" data-delay="0s" />
            <img src="../..<?php echo $config['WEB_PATH'] ?>assets/images/SalseforceCertifed2.png" alt="Badge 2" class="badge-img scroll-section"
              data-animation="animate__fadeInUp" data-delay="0.1s" />
            <img src="../..<?php echo $config['WEB_PATH'] ?>assets/images/SalseforceCertifed3.png" alt="Badge 3" class="badge-img scroll-section"
              data-animation="animate__fadeInUp" data-delay="0.2s" />
          </div>
          <div class="badge-row">
            <img src="../..<?php echo $config['WEB_PATH'] ?>assets/images/SalseforceCertifed4.png" alt="Badge 4" class="badge-img scroll-section"
              data-animation="animate__fadeInUp" data-delay="0.3s" />
            <img src="../..<?php echo $config['WEB_PATH'] ?>assets/images/SalseforceCertifed5.png" alt="Badge 5" class="badge-img scroll-section"
              data-animation="animate__fadeInUp" data-delay="0.4s" />
            <img src="../..<?php echo $config['WEB_PATH'] ?>assets/images/SalseforceCertifed6.png" alt="Badge 6" class="badge-img scroll-section"
              data-animation="animate__fadeInUp" data-delay="0.5s" />
          </div>
          <div class="badge-row">
            <img src="../..<?php echo $config['WEB_PATH'] ?>assets/images/SalseforceCertifed7.png" alt="Badge 7" class="badge-img scroll-section"
              data-animation="animate__fadeInUp" data-delay="0.6s" />
            <img src="../..<?php echo $config['WEB_PATH'] ?>assets/images/SalseforceCertifed8.png" alt="Badge 8" class="badge-img scroll-section"
              data-animation="animate__fadeInUp" data-delay="0.7s" />
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="digitalmarketing-slider1" class="scroll-section"></section>

<!-- <section id="salesforce-voicethat" class="scroll-section">
    <div class="container py-5 voices-containt">
      <div class="row align-items-center">
        <div class="col-md-5 left-section">
          <p class="mainheading-global"><span class="mainheding-color">Voices</span> that Inspire</p>
          <p class="subtitle-contetn text-muted">Listen to the voices of our clients sharing their testimonials
            and feedback
          </p>
          <div class="d-flex justify-content-center align-items-center gap-3">
            <button id="customPrev" class="arrow-btn"><i class="bi bi-arrow-left"></i></button>
            <button id="customNext" class="arrow-btn"><i class="bi bi-arrow-right"></i></button>
          </div>
        </div>
        <div class="col-md-7">
          <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item text-center active">
                <div class="avatar-container mx-auto mb-3">
                  <img src="<?php echo $config['WEB_PATH'] ?>assets/images/voice-img.png" class="avatar123" alt="Avatar" />
                </div>

                <p class="testimonial-quote">
                  We needed someone to untangle our Salesforce mess—and Mavix Tech delivered beyond
                  expectations.
                  They customized CRM.
                </p>
                <p class="testimonial-name">Alex Johnson</p>
                <p class="testimonial-title">CTO at TechInsects</p>

              </div>
              <div class="carousel-item text-center">
                <div class="avatar-container mx-auto mb-3">
                  <img src="<?php echo $config['WEB_PATH'] ?>assets/images/voice-img.png" class="avatar123" alt="Avatar" />
                </div>

                <p class="testimonial-quote">
                  We needed someone to untangle our Salesforce mess—and Mavix Tech delivered beyond
                  expectations.
                  They customized CRM.
                </p>
                <p class="testimonial-name">Alex Johnson</p>
                <p class="testimonial-title">CTO at TechInsects</p>

              </div>
              <div class="carousel-item text-center">
                <div class="avatar-container mx-auto mb-3">
                  <img src="<?php echo $config['WEB_PATH'] ?>assets/images/voice-img.png" class="avatar123" alt="Avatar" />
                </div>

                <p class="testimonial-quote">
                  We needed someone to untangle our Salesforce mess—and Mavix Tech delivered beyond
                  expectations.
                  They customized CRM.
                </p>
                <p class="testimonial-name">Alex Johnson</p>
                <p class="testimonial-title">CTO at TechInsects</p>

              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
              data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>

      </div>
    </div>
  </section> -->

<!-- <section id="salesforce-voicethat" class="scroll-section">-->
<!--  <div class="container py-5 voices-containt">-->
<!--    <div class="row align-items-center">-->
<!--      <div class="col-md-5 left-section">-->
<!--        <p class="mainheading-global">-->
<!--          <span class="mainheding-color">Voices</span> that Inspire-->
<!--        </p>-->
<!--        <p class="subtitle-contetn text-muted">-->
<!--          Listen to the voices of our clients sharing their testimonials and-->
<!--          feedback-->
<!--        </p>-->
<!--        <div class="d-flex justify-content-start align-items-center gap-3 p-3">-->
<!--          <button id="customPrev" class="arrow-btn disabled"><i class="bi bi-arrow-left"></i></button>-->
<!--          <button id="customNext" class="arrow-btn"><i class="bi bi-arrow-right"></i></button>-->
<!--        </div>-->
<!--      </div>-->
<!--      <div class="col-md-7">-->
<!--        <div id="carouselExampleCaptions" class="carousel slide">-->
<!--          <div class="carousel-indicators">-->
<!--            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"-->
<!--              class="active custom-gradient-border-box-slider-indicator" aria-current="true"-->
<!--              aria-label="Slide 1"></button>-->
<!--            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"-->
<!--              class="custom-gradient-border-box-slider-indicator" aria-label="Slide 2"></button>-->
<!--            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"-->
<!--              class="custom-gradient-border-box-slider-indicator" aria-label="Slide 3"></button>-->
<!--          </div>-->
<!--          <div class="carousel-inner">-->
<!--            <div class="carousel-item text-center active">-->
<!--              <div class="gradient-border-box mx-auto custom-gradient-border-box-width">-->
<!--                <div class="avatar-container mx-auto mb-3">-->
<!--                  <img src="<?php echo $config['WEB_PATH'] ?>assets/images/voice-img.png" class="avatar123" alt="Avatar" />-->
<!--                </div>-->

<!--                <p class="testimonial-quote">-->
<!--                  We needed someone to untangle our Salesforce mess—and Mavix-->
<!--                  Tech delivered beyond expectations. They customized CRM.-->
<!--                </p>-->
<!--                <p class="testimonial-name">Alex Johnson</p>-->
<!--                <p class="testimonial-title">CTO at TechInsects</p>-->
<!--              </div>-->
<!--            </div>-->
<!--            <div class="carousel-item text-center">-->
<!--              <div class="gradient-border-box mx-auto custom-gradient-border-box-width">-->
<!--                <div class="avatar-container mx-auto mb-3">-->
<!--                  <img src="<?php echo $config['WEB_PATH'] ?>assets/images/voice-img.png" class="avatar123" alt="Avatar" />-->
<!--                </div>-->

<!--                <p class="testimonial-quote">-->
<!--                  We needed someone to untangle our Salesforce mess—and Mavix-->
<!--                  Tech delivered beyond expectations. They customized CRM.-->
<!--                </p>-->
<!--                <p class="testimonial-name">Alex Johnson</p>-->
<!--                <p class="testimonial-title">CTO at TechInsects</p>-->
<!--              </div>-->
<!--            </div>-->
<!--            <div class="carousel-item text-center">-->
<!--              <div class="gradient-border-box mx-auto custom-gradient-border-box-width">-->
<!--                <div class="avatar-container mx-auto mb-3">-->
<!--                  <img src="<?php echo $config['WEB_PATH'] ?>assets/images/voice-img.png" class="avatar123" alt="Avatar" />-->
<!--                </div>-->

<!--                <p class="testimonial-quote">-->
<!--                  We needed someone to untangle our Salesforce mess—and Mavix-->
<!--                  Tech delivered beyond expectations. They customized CRM.-->
<!--                </p>-->
<!--                <p class="testimonial-name">Alex Johnson</p>-->
<!--                <p class="testimonial-title">CTO at TechInsects</p>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->
<!--          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"-->
<!--            data-bs-slide="prev">-->
<!--            <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
<!--            <span class="visually-hidden">Previous</span>-->
<!--          </button>-->
<!--          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"-->
<!--            data-bs-slide="next">-->
<!--            <span class="carousel-control-next-icon" aria-hidden="true"></span>-->
<!--            <span class="visually-hidden">Next</span>-->
<!--          </button>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--</section> -->

<section class="scroll-section">
  <div class="container my-5 mt-5 ">
    <div class=" text-container mt-5 text-center position-relative">
      <p class="mainheading-global d-inline-block position-relative">
        <span class="highlight-wrapper position-relative d-inline-block">
          <span class="mainheding-color">Frequently</span>
          <img src="<?php echo $config['SITE_URL'] ?>assets/images/FrequentlyAsk Header.png"
            class="position-absolute img-fluid frequentlyask-heading-img service-img-header z-1 d-none d-md-block"
            alt="Highlight Underline" />
        </span>
        Asked Questions
      </p>
    </div>

    <p class="text-center text-muted mt-3 mb-5">Find answers to common questions about our services, process, and
      expertise.</p>

    <div class="accordion frequently-main" id="faqAccordion">
      <div class="accordion-item border-0 shadow-sm mb-2">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button mainsubheading-global   " type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            What services does your Salesforce development company offer?
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
          data-bs-parent="#faqAccordion">
          <div class="accordion-body frequently-cont mainsubheading-global ">
            We offer Salesforce application development, integration, migration, consulting, support, and CRM customization.
          </div>
        </div>
      </div>

      <div class="accordion-item border-0 shadow-sm mb-2">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button mainsubheading-global  collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Are you a certified Salesforce development company?
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
          data-bs-parent="#faqAccordion">
          <div class="accordion-body frequently-cont mainsubheading-global ">
            Yes, we’re staffed with certified Salesforce developers with deep expertise across multiple clouds and industries.
          </div>
        </div>
      </div>

      <div class="accordion-item border-0 shadow-sm mb-2">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button mainsubheading-global  collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Can you help with Salesforce automation and integration?
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
          data-bs-parent="#faqAccordion">
          <div class="accordion-body frequently-cont mainsubheading-global ">
            Absolutely! Our Salesforce integration consultants streamline your workflows through smart automation and system integrations.
          </div>
        </div>
      </div>

      <div class="accordion-item border-0 shadow-sm mb-2">
        <h2 class="accordion-header" id="headingFour">
          <button class="accordion-button mainsubheading-global  collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            Is Salesforce development scalable for small businesses?
          </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
          data-bs-parent="#faqAccordion">
          <div class="accordion-body frequently-cont mainsubheading-global ">
            Yes, our solutions scale with you—ideal for startups to enterprises seeking a trusted Salesforce development partner.
          </div>
        </div>
      </div>

      <div class="accordion-item border-0 shadow-sm mb-2">
        <h2 class="accordion-header" id="headingFive">
          <button class="accordion-button mainsubheading-global  collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
            Do you provide Salesforce Marketing Cloud services?
          </button>
        </h2>
        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
          data-bs-parent="#faqAccordion">
          <div class="accordion-body frequently-cont mainsubheading-global ">
            Yes, our Marketing Cloud developers create powerful campaign journeys customized to your audience and platform.
          </div>
        </div>
      </div>


      <div class="accordion-item border-0 shadow-sm mb-2">
        <h2 class="accordion-header" id="headingSix">
          <button class="accordion-button mainsubheading-global  collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
            What sets your Salesforce app developers apart?
          </button>
        </h2>
        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
          data-bs-parent="#faqAccordion">
          <div class="accordion-body frequently-cont mainsubheading-global ">
            We’re an experienced Salesforce app development company offering custom, responsive, and efficient application builds at affordable rates.
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<script>
  document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("contactForm");
    const submitBtn = document.getElementById("submitBtn");
    const btnText = document.getElementById("btnText");
    const spinner = document.getElementById("spinner");
    const formMessage = document.getElementById("formMessage");

    // Input fields
    const fullNameInput = document.getElementById("fullName");
    const emailInput = document.getElementById("consultationEmail");
    const phoneInput = document.getElementById("phone");
    const requirementInput = document.getElementById("requirement");

    // Error fields
    const errorFullName = document.getElementById("error_full_name");
    const errorEmail = document.getElementById("error_email");
    const errorPhone = document.getElementById("error_phone");
    const errorRequirement = document.getElementById("error_requirement");

    // Validation patterns
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const phonePattern = /^[0-9]{10}$/;

    // Remove error on typing (FIXED)
    fullNameInput.addEventListener("input", () => {
      errorFullName.textContent = "";
    });
    emailInput.addEventListener("input", () => {
      errorEmail.textContent = "";
    });
    phoneInput.addEventListener("input", () => {
      errorPhone.textContent = "";
    });
    requirementInput.addEventListener("input", () => {
      errorRequirement.textContent = "";
    });

    // Form submit event
    form.addEventListener("submit", async function(e) {
      e.preventDefault();
      let isValid = true;

      // Reset error messages & form response
      errorFullName.textContent = "";
      errorEmail.textContent = "";
      errorPhone.textContent = "";
      errorRequirement.textContent = "";
      formMessage.textContent = "";

      // Get values
      const fullName = fullNameInput.value.trim();
      const email = emailInput.value.trim();
      const phone = phoneInput.value.trim();
      const requirement = requirementInput.value.trim();

      // Validate Full Name
      if (fullName === "") {
        errorFullName.textContent = "Full name is required";
        isValid = false;
      }

      // Validate Email
      if (email === "") {
        errorEmail.textContent = "Email is required";
        isValid = false;
      } else if (!emailPattern.test(email)) {
        errorEmail.textContent = "Please enter a valid email";
        isValid = false;
      }

      // Validate Phone
      if (phone === "") {
        errorPhone.textContent = "Phone number is required";
        isValid = false;
      } else if (!phonePattern.test(phone)) {
        errorPhone.textContent = "Enter a valid 10-digit phone number";
        isValid = false;
      }

      // Validate Requirement
      if (requirement === "") {
        errorRequirement.textContent = "Requirement is required";
        isValid = false;
      }

      // Stop submission if invalid
      if (!isValid) return;

      // Show loading state
      submitBtn.disabled = true;
      btnText.textContent = "Sending...";
      spinner.classList.remove("d-none");

      const formData = new FormData(form);
      fetch(window.location.href, {
          method: 'POST',
          body: formData
        })
        .then(async (response) => {
          showToast("✅ Thank You for sending Message", "success");
          document.getElementById('contactForm').reset();
        })
        .catch(error => {
          showToast("✅ Thank You for sending Message", "success");
          document.getElementById('contactForm').reset();
        }).finally(() => {
          spinner.classList.add("d-none");
          btnText.textContent = "Send Message";
          submitBtn.disabled = false;
        });
    });
  });

  function showToast(message, type = "success") {
    const toastEl = document.getElementById("contactToast");
    const toastMessage = document.getElementById("contactToastMessage");

    toastMessage.textContent = message;
    toastEl.classList.remove("bg-success", "bg-danger");
    toastEl.classList.add(type === "success" ? "bg-success" : "bg-danger");

    const bsToast = new bootstrap.Toast(toastEl);
    bsToast.show();
  }
</script>

<!-- fetch(window.location.href, {
method: 'POST',
body: formData
})
.then(async (response) => {
const contentType = response.headers.get("content-type");
if (contentType && contentType.includes("application/json")) {
return response.json();
} else {
throw new Error("Invalid JSON response");
}
})
.then(data => {
document.getElementById('contactForm').reset();
})
.catch(error => {
document.getElementById('contactForm').reset();
}).finally(() => {
spinner.classList.add("d-none");
btnText.textContent = "Send Message";
submitBtn.disabled = false;
}); -->