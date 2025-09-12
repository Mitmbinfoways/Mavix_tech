  <nav class="navbar navbar-expand-lg text-white px-md-0 sticky-top">
    <div class="container nav-main">
      <a class="navbar-brand" href="https://mavixtech.com/">
        <div class="navbar-logo">
          <img
            src="assets/images/logo.svg"
            alt="Mavix Tech"
            class="nav-logo-img" />
        </div>
      </a>

      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="offcanvas"
        data-bs-target="#navbarOffcanvas"
        aria-controls="navbarOffcanvas"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Replace the collapse div with offcanvas -->
      <div
        class="offcanvas offcanvas-end"
        tabindex="-1"
        id="navbarOffcanvas"
        aria-labelledby="navbarOffcanvasLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title text-white" id="navbarOffcanvasLabel">
            Menu
          </h5>
          <button
            type="button"
            class="btn-close text-reset"
            data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
        </div>
        <div class="offcanvas-body justify-content-end">
          <div class="navbar-nav align-items-center">
            <a class="nav-link toggled-nav-items" href="https://mavixtech.com/">Home</a>
            <!-- Dropdown for Services -->
            <div class="nav-item dropdown d-none d-lg-block">
              <a
                class="nav-link dropdown-toggle toggled-nav-items"
                href="#menu"
                id="servicesDropdown"
                role="button"
                data-bs-toggle="dropdown"
                data-bs-display="static"
                aria-expanded="false">
                Services
              </a>
              <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                <li class="dropdownmenu-item">
                  <a class="dropdown-item" href="https://mavixtech.com/shopify-services">Shopify</a>
                </li>
                <li class="dropdownmenu-item">
                  <a class="dropdown-item" href="https://mavixtech.com/salesforces-services">Salesforce</a>
                </li>
                <li class="dropdownmenu-item">
                  <a class="dropdown-item" href="https://mavixtech.com/email-marketing">Email Marketing</a>
                </li>
                <li>
                  <a class="dropdown-item" href="https://mavixtech.com/digital-marketing">Digital Marketing</a>
                </li>
              </ul>
            </div>

            <div class="justify-content-end w-100">
              <div class="navbar-nav align-items-start w-100">
                <button
                  id="mobileServicesBtn"
                  class="btn btn-link nav-link toggled-nav-items px-0 d-lg-none d-flex justify-content-between align-items-center w-100"
                  type="button">
                  <span>Services</span>
                  <i id="serviceArrow" class="bi bi-chevron-down"></i>
                </button>

                <!-- Mobile Services Menu -->
                <div id="mobileServicesMenu" class="ps-3 d-none flex-column w-100">
                  <a class="nav-link text-start" href="https://mavixtech.com/shopify-services">Shopify</a>
                  <a class="nav-link text-start" href="https://mavixtech.com/salesforces-services">Salesforce</a>
                  <a class="nav-link text-start" href="https://mavixtech.com/email-marketing">Email Marketing</a>
                  <a class="nav-link text-start" href="https://mavixtech.com/digital-marketing">Digital Marketing</a>
                </div>
              </div>
            </div>

            <!-- <a class="nav-link toggled-nav-items" href="?p=features">Blog</a> -->
            <a class="nav-link toggled-nav-items" href="https://mavixtech.com/contact-us">Contact Us</a>
            <!-- <a
              href="?p=order"
              class="navbar-btn px-4 py-2 rounded-pill btn-brand ms-lg-3 mt-3 mt-lg-0">Order Now</a> -->
          </div>
        </div>
      </div>
    </div>
  </nav>
  <style>
    /* Desktop hover fallback */
    @media (min-width: 992px) {
      .nav-item.dropdown:hover>.dropdown-menu {
        display: block;
      }
    }
  </style>
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const mobileServicesBtn = document.getElementById("mobileServicesBtn");
      const mobileServicesMenu = document.getElementById("mobileServicesMenu");
      const serviceArrow = document.getElementById("serviceArrow");

      mobileServicesBtn.addEventListener("click", () => {
        mobileServicesMenu.classList.toggle("d-none");

        // Change icon based on toggle state
        if (mobileServicesMenu.classList.contains("d-none")) {
          serviceArrow.classList.remove("bi-chevron-up");
          serviceArrow.classList.add("bi-chevron-down");
        } else {
          serviceArrow.classList.remove("bi-chevron-down");
          serviceArrow.classList.add("bi-chevron-up");
        }
      });
    });
  </script>