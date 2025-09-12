<?php
// Include the MailHelper class
require_once __DIR__ . '/../includes/contact-functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Sanitize and validate input data
  $firstName = trim($_POST['firstName']);
  $lastName = trim($_POST['lastName']);
  $email = trim($_POST['email']);
  $phone = trim($_POST['phone']);
  $subjects = isset($_POST['subject']) ? $_POST['subject'] : [];
  $message = trim($_POST['message']);
  $countryCode = isset($_POST['countryCode']) ? trim($_POST['countryCode']) : '+91';
  $fullPhone = $countryCode . $phone;

  // Validation
  $errors = [];

  if (empty($firstName)) {
    $errors[] = "First name is required";
  }

  if (empty($lastName)) {
    $errors[] = "Last name is required";
  }

  if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "email is required";
  }

  if (empty($phone)) {
    $errors[] = "Phone number is required";
  }

  if (empty($subjects)) {
    $errors[] = "Please select at least one subject";
  }

  if (empty($message)) {
    $errors[] = "Message is required";
  }

  if (!empty($errors)) {
    echo json_encode([
      'success' => false,
      'errors' => $errors
    ]);
    exit;
  }

  // Initialize MailHelper
  $mailHelper = new MailHelper();

  // Prepare form data
  $formData = [
    'firstName' => $firstName,
    "url" => "https://mavixtech.com/contact-us",
    'lastName' => $lastName,
    'email' => $email,
    'phone' => $fullPhone,
    'subjects' => $subjects,
    'message' => $message
  ];

  // Send contact form email
  $result = $mailHelper->sendContactFormEmail($formData);

  if ($result['success']) {
    echo json_encode([
      'success' => true,
      'message' => 'Thank you! Your message has been sent successfully.'
    ]);
  } else {
    echo json_encode([
      'success' => false,
      'message' => 'Sorry, there was an error sending your message: ' . $result['message']
    ]);
  }
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .map-container {
      height: 300px;
      width: 100%;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      margin-top: 20px;
    }

    .map-container iframe {
      width: 100%;
      height: 100%;
      border: 0;
    }

    .contact-card {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: white;
      padding: 30px;
      border-radius: 15px;
      position: relative;
      overflow: hidden;
    }

    .contact-details p {
      margin-bottom: 15px;
      position: relative;
    }

    .circle-bg {
      position: absolute;
      width: 150px;
      height: 150px;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 50%;
      bottom: -75px;
      right: -75px;
    }

    .circle-bg-sm {
      width: 80px;
      height: 80px;
      bottom: 50px;
      right: 20px;
    }

    #toastContainer {
      position: fixed;
      top: 20px;
      right: 20px;
      z-index: 2000;
    }
  </style>
</head>

<body>

  <div id="toastContainer" class="toast-container position-fixed top-0 end-0 p-3"></div>

  <section class="contact-section1">
    <div class="container contactus-header scroll-section">
      <div class="row text-start">
        <div class="col-12 col-md-8 text-start">
          <p class="contact-us-heading">Contact Us</p>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-form-main scroll-section">
    <div class="container my-5">
      <div class="d-flex flex-column flex-lg-row gap-4">
        <div class="contact-card flex-shrink-0" style="flex: 0 0 35%;">
          <div class="contact-info">
            <h2 class="scroll-section" data-animation="animate__fadeInUp" data-delay="0.2s">Contact Information</h2>
            <p class="scroll-section" data-animation="animate__fadeInUp" data-delay="0.2s">
              Say something to start a live chat!
            </p>
            <div class="contact-details scroll-section" data-animation="animate__fadeInUp" data-delay="0.4s">
              <p class="d-flex gap-3 align-items-start my-3">
                <i class="bi bi-telephone icon"></i>
                <a href="tel:+9162321151261" class="contact-link"> +91 6232 1151 261</a>
              </p>
              <p class="d-flex gap-3 align-items-start">
                <i class="bi bi-envelope icon"></i>
                <a href="https://mail.google.com/mail/?view=cm&to=info@mavixtech.com" rel="noopener noreferrer" target="_blank" class="contact-link"> info@mavixtech.com </a>
              </p>
              <p class="d-flex gap-3 align-items-start my-3">
                <i class="bi bi-geo-alt icon"></i>
                <a
                  href="https://www.google.com/maps?q=A-721,+Dev+Atelier,+100+Feet+Anand+Nagar+Rd,+Prahlad+Nagar,+Ahmedabad"
                  target="_blank"
                  class="contact-link">
                  Office: A-721, Dev Atelier, 100 Feet Anand Nagar Rd, Prahlad Nagar, Ahmedabad
                </a>
              </p>
            </div>

            <div class="map-container scroll-section mt-5" data-animation="animate__fadeInUp" data-delay="0.6s">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.0!2d72.5141574!3d23.0128776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e9b2bd5454f97%3A0x3fd23a20b85b1c7f!2sDEV%20Atelier!5e0!3m2!1sen!2sin!4v1694179999999!5m2!1sen!2sin"
                width="100%"
                height="100%"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                title="DEV Atelier Office Location">
              </iframe>
            </div>

            <div class="circle-bg scroll-section"></div>
            <div class="circle-bg circle-bg-sm scroll-section"></div>
          </div>
        </div>

        <!-- Form Section -->
        <div class="form-section flex-grow-1">
          <div class="container my-5">
            <!-- Alert Messages -->
            <div id="alertContainer"></div>
            <form id="contactForm" class="scroll-section" data-animation="animate__fadeInUp" data-delay="0.2s">
              <!-- First & Last Name -->
              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="firstName">First Name</label>
                  <input type="text" class="form-control p-2" id="firstName" name="firstName">
                  <span class="text-danger d-none" id="firstNameError">First name is required</span>
                </div>
                <div class="col-md-6">
                  <label for="lastName">Last Name</label>
                  <input type="text" class="form-control p-2" id="lastName" name="lastName">
                  <span class="text-danger d-none" id="lastNameError">Last name is required</span>
                </div>
              </div>

              <!-- Email & Phone -->
              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="email">Email</label>
                  <input type="text" class="form-control p-2" id="email" name="email">
                  <span class="text-danger d-none" id="emailError">Valid email is required</span>
                </div>
                <div class="col-md-6">
                  <label for="phone">Phone Number</label>
                  <div class="input-group">
                    <select class="form-select" id="countryCode" name="countryCode" style="max-width:110px;">
                      <?php
                      $jsonFile = __DIR__ . '/countries.json';
                      if (file_exists($jsonFile)) {
                        $jsonData = file_get_contents($jsonFile);
                        $countries = json_decode($jsonData, true);
                        if (!empty($countries) && is_array($countries)) {
                          foreach ($countries as $country) {
                            $selected = ($country['code'] === "IN") ? "selected" : "";
                            echo "<option value='{$country['dial_code']}' {$selected}>{$country['dial_code']}</option>";
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
                      type="text"
                      class="form-control p-2"
                      id="phone"
                      name="phone"
                      oninput="this.value = this.value.replace(/[^0-9+\-()]/g, '')">
                  </div>
                  <span class="text-danger d-none" id="phoneError">Phone number is required</span>
                </div>

              </div>

              <!-- Subjects -->
              <div class="mb-3">
                <p class="mb-2">Select Subject</p>
                <div class="form-check form-check-inline">
                  <input class="form-check-input contact-check-input" type="checkbox" name="subject[]" id="general" value="General Enquiry">
                  <label class="form-check-label" for="general">General Enquiry</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input contact-check-input" type="checkbox" name="subject[]" id="sales" value="Technical Support">
                  <label class="form-check-label" for="sales">Technical Support</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input contact-check-input" type="checkbox" name="subject[]" id="support" value="Billing Inquiry">
                  <label class="form-check-label" for="support">Billing Inquiry</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input contact-check-input" type="checkbox" name="subject[]" id="other" value="Other">
                  <label class="form-check-label" for="other">Other</label>
                </div>
                <span class="text-danger d-none" id="subjectError">Please select at least one subject</span>
              </div>

              <!-- Message -->
              <div class="mb-3">
                <label for="message">Message</label>
                <textarea class="form-control p-2" id="message" name="message" rows="4"></textarea>
                <span class="text-danger d-none" id="messageError">Message is required</span>
              </div>

              <!-- Submit Button -->
              <div class="d-flex justify-content-center text-center mt-3">
                <button type="submit" class="btn btn-primary" id="submitBtn">
                  <span id="spinner" class="spinner-border spinner-border-sm ms-2 d-none"></span>
                  <span id="btnText">Send Message</span>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    document.getElementById('contactForm').addEventListener('submit', function(e) {
      e.preventDefault();

      const form = document.getElementById('contactForm');
      const inputs = ['firstName', 'lastName', 'email', 'phone', 'message'];

      let isValid = true;

      inputs.forEach(id => {
        const input = document.getElementById(id);
        const errorElement = document.getElementById(id + 'Error');

        input.addEventListener('input', function() {
          if (input.value.trim() !== "") {
            errorElement.classList.add("d-none");
          }
        });
      });

      // Hide error on checkbox selection
      const checkboxes = document.querySelectorAll("input[name='subject[]']");
      const subjectError = document.getElementById('subjectError');
      checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
          if (document.querySelectorAll("input[name='subject[]']:checked").length > 0) {
            subjectError.classList.add("d-none");
          }
        });
      });

      const firstName = document.getElementById('firstName').value.trim();
      if (firstName === "") {
        document.getElementById('firstNameError').classList.remove("d-none");
        isValid = false;
      }

      // Validate Last Name
      const lastName = document.getElementById('lastName').value.trim();
      if (lastName === "") {
        document.getElementById('lastNameError').classList.remove("d-none");
        isValid = false;
      }

      // Validate Email
      const emailInput = document.getElementById('email');
      const emailError = document.getElementById('emailError');
      const emailValue = emailInput.value.trim();
      const emailPattern = /^[a-zA-Z0-9._%+-]+@gmail\.com$/;

      if (emailValue === "" || !emailPattern.test(emailValue)) {
        emailError.textContent = "Please enter a valid Email address";
        emailError.classList.remove("d-none");
        isValid = false;
      } else {
        emailError.classList.add("d-none");
      }

      // Validate Phone
      const phone = document.getElementById('phone').value.trim();
      if (phone === "") {
        document.getElementById('phoneError').classList.remove("d-none");
        isValid = false;
      }

      // Validate Subject (at least one checked)
      const subjects = document.querySelectorAll("input[name='subject[]']:checked");
      if (subjects.length === 0) {
        document.getElementById('subjectError').classList.remove("d-none");
        isValid = false;
      }

      // Validate Message
      const message = document.getElementById('message').value.trim();
      if (message === "") {
        document.getElementById('messageError').classList.remove("d-none");
        isValid = false;
      }

      if (!isValid) return;

      const submitBtn = document.getElementById('submitBtn');
      const btnText = document.getElementById('btnText');
      const spinner = document.getElementById('spinner');

      // Show spinner & disable button
      spinner.classList.remove("d-none");
      btnText.textContent = "Sending...";
      submitBtn.disabled = true;

      const formData = new FormData(this);
      fetch(window.location.href, {
          method: 'POST',
          body: formData
        })
        .then(async (response) => {
          showToast("✅", "Thank You for sending Message", "bg-success");
          document.getElementById('contactForm').reset();
        })
        .catch(error => {
          document.getElementById('contactForm').reset();
        }).finally(() => {
          spinner.classList.add("d-none");
          btnText.textContent = "Send Message";
          submitBtn.disabled = false;
        });
    });

    function showToast(title, message, type) {
      const toastContainer = document.getElementById('toastContainer');
      const toastId = `toast-${Date.now()}`;

      const toastHTML = `
        <div id="${toastId}" class="toast align-items-center text-white ${type} border-0 mb-2" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="d-flex">
            <div class="toast-body">
              <strong>${title}</strong> ${message}
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
          </div>
        </div>
      `;

      toastContainer.insertAdjacentHTML('beforeend', toastHTML);

      const toastEl = document.getElementById(toastId);
      const toast = new bootstrap.Toast(toastEl, {
        delay: 4000
      });
      toast.show();

      toastEl.addEventListener('hidden.bs.toast', () => toastEl.remove());
    }
  </script>
</body>

</html>