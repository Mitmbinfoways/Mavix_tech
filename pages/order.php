  <section class="container py-5">

        <!-- Form Fields -->
        <h6 class="order-main-title mb-3">PROVIDE YOUR DETAILS</h6>
        <div class="row g-3 mb-4">
            <div class="col-md-4">
                <input type="text" class="form-control order-form-title px-2" placeholder="Name" />
            </div>
            <div class="col-md-4">
                <input type="email" class="form-control order-form-title px-2" placeholder="Email" />
            </div>
            <div class="col-md-4">
                <input type="tel" class="form-control order-form-title px-2" placeholder="Phone Number" />
            </div>
        </div>

        <!-- Tab Buttons -->
        <h6 class="order-main-title mb-3">PLACE YOUR ORDER</h6>
        <ul class="nav nav-pills row text-center mb-4" id="pills-tab" role="tablist">
            <li class="col-4 p-0 p-md-2" role="presentation">
                <button class="nav-link order-screen-tab w-100 h-100  active" id="pills-email-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-email" type="button" role="tab" aria-controls="pills-email"
                    aria-selected="true">
                    <div class=""><img src="assets/images/Order Email.png" alt=""></div>
                    <p class="order-main-cards"><img src="assets/images/Background Border order.png" alt=""
                            class="order-cards-images nav-link-icon"> Email Template</p>
                    <i class="bi bi-caret-down-fill aerrow-bot"></i>
                    <i class="bi bi-caret-up-fill aerrow-bot aerrow-up"></i>
                    <span class="order-screen-tab-count">
                        0
                    </span>
                </button>
            </li>
            <li class="col-4 p-0 p-md-2" role="presentation">
                <button class="nav-link order-screen-tab w-100 h-100  " id="pills-landing-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-landing" type="button" role="tab" aria-controls="pills-landing"
                    aria-selected="false">
                    <div><img src="assets/images/Order Landing.png" alt=""></div>
                    <p class="order-main-cards"><img src="assets/images/Background Border order.png" alt=""
                            class="order-cards-images nav-link-icon"> Landing Page</p>
                    <i class="bi bi-caret-down-fill aerrow-bot"></i>
                    <i class="bi bi-caret-up-fill aerrow-bot aerrow-up"></i>
                    <span class="order-screen-tab-count">
                        0
                    </span>
                </button>
            </li>
            <li class="col-4 p-0 p-md-2" role="presentation">
                <button class="nav-link order-screen-tab w-100 h-100  " id="pills-contact-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                    aria-selected="false">
                    <div><img src="assets/images/Order Orther Servicec Img.png" alt=""></div>
                    <p class="order-main-cards"><img src="assets/images/Background Border order.png" alt=""
                            class="order-cards-images nav-link-icon"> Other Services</p>
                    <i class="bi bi-caret-down-fill aerrow-bot"></i>
                    <i class="bi bi-caret-up-fill aerrow-bot aerrow-up"></i>
                </button>
            </li>
        </ul>

        <div class="divider-button-line"></div>

        <!-- Tab Content -->
        <div class="tab-content" id="pills-tabContent">

            <!-- Email Content  -->
            <div class="tab-pane fade active show" id="pills-email" role="tabpanel" aria-labelledby="pills-email-tab">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class=" mb-3 order-main-title">PLACE YOUR EMAIL TEMPLATE ORDER HERE</div>
                        <div class="radio-group">
                            <input type="radio" name="packageType" id="only-coding"
                                onclick="GetPackageType('only-coding')" checked>
                            <input type="radio" name="packageType" id="coding-design"
                                onclick="GetPackageType('design')">
                            <div class="d-flex align-items-center mb-2">
                                <div class="step-number me-2">1</div>
                                <div class="order-subtitle">Choose Your Package</div>
                                <div class="info-icon ms-2" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                    i</div>
                            </div>

                            <ul class="nav nav-pills row text-center w-100 mb-4 custom-navlink-radius mt-5 g-0"
                                id="pills-tab" role="tablist">
                                <li class="col-6 p-0" role="presentation">
                                    <button class="nav-link w-100 h-100 package-card active"
                                        id="pills-email-only-code-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-email-only-code" type="button" role="tab"
                                        aria-controls="pills-email-only-code" aria-selected="true">
                                        <div class="">
                                            <label
                                                class="d-flex align-items-center justify-content-center flex-column flex-md-row">
                                                <img src="assets/images/Background Border order.png" alt="" height="20"
                                                    width="20">
                                                <p class="order-card-heading">Only Coding</p>
                                            </label>
                                            <p class="order-card-content">Let us hand-code your designs to HTML.</p>
                                        </div>
                                    </button>
                                </li>
                                <li class="col-6 p-0" role="presentation">
                                    <button class="nav-link w-100 h-100 package-card " id="pills-email-design-tab"
                                        data-bs-toggle="pill" data-bs-target="#pills-email-design" type="button"
                                        role="tab" aria-controls="pills-email-design" aria-selected="false">
                                        <div class="">
                                            <label
                                                class="d-flex align-items-center justify-content-center flex-column flex-md-row">
                                                <img src="assets/images/Background Border order.png" alt="" height="20"
                                                    width="20">
                                                <p class="order-card-heading">Design + Coding</p>
                                            </label>
                                            <p class="order-card-content">Let us create eye-catching designs & hand-code
                                                them for you.</p>
                                        </div>
                                    </button>
                                </li>
                            </ul>

                            <div class="row">
                                <div class="col-md-6 d-flex align-items-center gap-5">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="step-number me-2">2</div>
                                        <div class="order-subtitle step-text">Number of Unique Templates</div>
                                    </div>

                                    <div class="custom-number-input">
                                        <input type="number" value="1" id="number-of-unique-templates-design" />
                                        <div class="spinner-buttons">
                                            <button type="button"
                                                onclick="NumberIncrement('number-of-unique-templates-design')">▲</button>
                                            <button type="button"
                                                onclick="NumberDecrement('number-of-unique-templates-design')">▼</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="adaptation-container">
                                        <span class="adaptation-text">I also need adaptations of this
                                            email</span>
                                        <button class="circle-btn" onclick="GetNeedAdaptations()">
                                            <i class="bi bi-chevron-right"></i>
                                        </button>
                                        <div class="info-icon ms-2" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalCenter">i</div>
                                    </div>
                                </div>
                            </div>

                            <div class="sub-point" id="adaptations-options">

                                <div class="row align-items-center ">
                                    <div class="col-auto">
                                        <div class="step-number sub-step-num">2.1</div>
                                    </div>
                                    <div class="col">
                                        <div class="form-check d-flex align-items-start">
                                            <input class="form-check-input mt-1 me-2" type="checkbox" id="template21">
                                            <label class="form-check-label" for="template21">
                                                <strong>Adaptations (replication) from the same
                                                    Template</strong><br>
                                                <small class="text-muted">Number of templates with minimal
                                                    structure
                                                    change (30% off)</small>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="custom-number-input">
                                        <input type="number" value="1" id="adaptations-option-1" />
                                        <div class="spinner-buttons">
                                            <button type="button"
                                                onclick="NumberIncrement('adaptations-option-1')">▲</button>
                                            <button type="button"
                                                onclick="NumberDecrement('adaptations-option-1')">▼</button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Row 2 -->
                                <div class="row align-items-center mt-3">
                                    <div class="col-auto">
                                        <div class="step-number sub-step-num">2.2</div>
                                    </div>
                                    <div class="col">
                                        <div class="form-check d-flex align-items-start">
                                            <input class="form-check-input mt-1 me-2" type="checkbox" id="template22">
                                            <label class="form-check-label" for="template22">
                                                <strong>Adaptations (replication) from the same
                                                    Template</strong><br>
                                                <small class="text-muted">Number of templates with only Text,
                                                    Images
                                                    & Links changes (50% off)</small>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="custom-number-input">
                                        <input type="number" value="1" id="adaptations-option-2" />
                                        <div class="spinner-buttons">
                                            <button type="button"
                                                onclick="NumberIncrement('adaptations-option-2')">▲</button>
                                            <button type="button"
                                                onclick="NumberDecrement('adaptations-option-2')">▼</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="divider-mid" />

                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade active show" id="pills-email-only-code" role="tabpanel"
                                    aria-labelledby="pills-email-only-code-tab">
                                    <div>
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="step-number me-2">3</div>
                                            <div class="order-subtitle order-subtitle">Delivery Time</div>
                                        </div>
                                        <!-- <div class="delivery-container">
                                            <div class="scroll-wrapper">
                                                <div class="delivery-scroll">
                                                    <div class="delivery-line d-md-block d-none"></div>
                                                    <div class="delivery-time-option active">
                                                        <p
                                                            class=" d-flex flex-column align-items-center time-box-content active-time-round">
                                                            <span class="time">72</span>
                                                            <small>hrs</small>
                                                        </p>
                                                        <div class="mt-2">$59</div>
                                                    </div>
                                                    <div class="delivery-time-option">
                                                        <p
                                                            class=" d-flex flex-column align-items-center time-box-content time-round active-time-round">
                                                            <span class="time">48</span>
                                                            <small>hrs</small>
                                                        </p>
                                                        <div class="mt-2">$69</div>
                                                    </div>
                                                    <div class="delivery-time-option">
                                                        <p
                                                            class=" d-flex flex-column align-items-center time-box-content time-round active-time-round">
                                                            <span class="time">24</span>
                                                            <small>hrs</small>
                                                        </p>
                                                        <div class="mt-2">$99</div>
                                                    </div>
                                                    <div class="delivery-time-option">
                                                        <p
                                                            class=" d-flex flex-column align-items-center time-box-content time-round active-time-round">
                                                            <span class="time">12</span>
                                                            <small>hrs</small>
                                                        </p>
                                                        <div class="mt-2">$119</div>
                                                    </div>
                                                    <div class="delivery-time-option">
                                                        <p
                                                            class="  d-flex flex-column align-items-center time-box-content time-round active-time-round">
                                                            <span class="time">8</span>
                                                            <small>hrs</small>
                                                        </p>
                                                        <div class="mt-2">$139</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->

                                        <div class="delivery-container">
                                            <div class="scroll-wrapper">
                                              <div class="delivery-scroll" id="deliveryOptionsContainer">
                                                <div class="delivery-line d-md-block d-none"></div>
                                                <!-- Dynamic items will be inserted here -->
                                              </div>
                                            </div>
                                          </div>
                                          

                                    </div>
                                    <div class="divider-line"></div>
                                </div>

                                <div class="tab-pane fade" id="pills-email-design" role="tabpanel"
                                    aria-labelledby="pills-email-design-tab">
                                    <div>
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="step-number me-2">3</div>
                                            <div class="fw-bold">Delivery Time</div>
                                        </div>
                                        <div class="delivery-container">
                                            <div class="scroll-wrapper">
                                                <div class="delivery-scroll" id="deliveryOptionsContainer-2">
                                                    <div class="delivery-line d-md-block d-none"></div>
                                                    <!-- <div class="delivery-time-option active">
                                                        <p
                                                            class=" d-flex flex-column align-items-center time-box-content active-time-round">
                                                            <span class="time">6</span>
                                                            <small>days</small>
                                                        </p>
                                                        <div class="mt-2">$159</div>
                                                    </div>
                                                    <div class="delivery-time-option">
                                                        <p
                                                            class=" d-flex flex-column align-items-center time-box-content time-round active-time-round">
                                                            <span class="time">5</span>
                                                            <small>days</small>
                                                        </p>
                                                        <div class="mt-2">$189</div>
                                                    </div>
                                                    <div class="delivery-time-option">
                                                        <p
                                                            class=" d-flex flex-column align-items-center time-box-content time-round active-time-round">
                                                            <span class="time">4</span>
                                                            <small>days</small>
                                                        </p>
                                                        <div class="mt-2">$239</div>
                                                    </div>
                                                    <div class="delivery-time-option">
                                                        <p
                                                            class=" d-flex flex-column align-items-center time-box-content time-round active-time-round">
                                                            <span class="time">3</span>
                                                            <small>days</small>
                                                        </p>
                                                        <div class="mt-2">$279</div>
                                                    </div>
                                                    <div class="delivery-time-option">
                                                        <p
                                                            class="  d-flex flex-column align-items-center time-box-content time-round active-time-round">
                                                            <span class="time">2</span>
                                                            <small>days</small>
                                                        </p>
                                                        <div class="mt-2">$299</div>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="d-flex align-items-center mb-2 mt-4">
                                    <div class="step-number me-2">4</div>
                                    <div class="order-subtitle">Layout</div>
                                    <div class="info-icon ms-2" data-bs-toggle="modal"
                                        data-bs-target="#exampleModalCenter">i</div>
                                </div>
                                <div class="d-flex gap-3 layout-buttons flex-wrap" id="layoutContainer"></div>
                                <!-- <div class="d-flex gap-3 layout-buttons flex-wrap">
                                    <div class="layout-option selected">
                                        <svg width="38" height="34" viewBox="0 0 38 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_874_10258)">
                                            <g clip-path="url(#clip1_874_10258)">
                                            <path d="M34.48 0H3.52C1.58 0 0 1.58 0 3.52V23.22C0 25.16 1.58 26.74 3.52 26.74H34.48C36.42 26.74 38 25.16 38 23.22V3.52C38 1.58 36.42 0 34.48 0ZM3.52 1.41H34.48C35.64 1.41 36.59 2.36 36.59 3.52V19.7H1.41V3.52C1.41 2.35 2.35 1.41 3.52 1.41ZM34.48 25.33H3.52C2.36 25.33 1.41 24.38 1.41 23.22V21.11H36.6V23.22C36.5976 23.7806 36.3732 24.3174 35.9758 24.7129C35.5785 25.1084 35.0406 25.3303 34.48 25.33Z" fill="#231F20"/>
                                            <path d="M11.9609 31.7891H26.0509V33.1991H11.9609V31.7891Z" fill="#231F20"/>
                                            <path d="M18.3008 26.2109H19.7108V32.9109H18.3008V26.2109Z" fill="#231F20"/>
                                            <path d="M6.01953 10.9491V6.03906H10.9295" stroke="#231F20"/>
                                            <path d="M31.6893 10.3281V15.2381H26.7793" stroke="#231F20"/>
                                            </g>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_874_10258">
                                            <rect width="38" height="33.2" fill="white"/>
                                            </clipPath>
                                            <clipPath id="clip1_874_10258">
                                            <rect width="38" height="33.2" fill="white"/>
                                            </clipPath>
                                            </defs>
                                            </svg>

                                            <svg width="38" height="34" viewBox="0 0 38 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_874_10271)">
                                                <g clip-path="url(#clip1_874_10271)">
                                                <path d="M34.48 0H3.52C1.58 0 0 1.58 0 3.52V23.22C0 25.16 1.58 26.74 3.52 26.74H34.48C36.42 26.74 38 25.16 38 23.22V3.52C38 1.58 36.42 0 34.48 0ZM3.52 1.41H34.48C35.64 1.41 36.59 2.36 36.59 3.52V19.7H1.41V3.52C1.41 2.35 2.35 1.41 3.52 1.41ZM34.48 25.33H3.52C2.36 25.33 1.41 24.38 1.41 23.22V21.11H36.6V23.22C36.5976 23.7806 36.3732 24.3174 35.9758 24.7129C35.5785 25.1084 35.0406 25.3303 34.48 25.33Z" fill="white"/>
                                                <path d="M11.9609 31.7891H26.0509V33.1991H11.9609V31.7891Z" fill="white"/>
                                                <path d="M18.3008 26.2109H19.7108V32.9109H18.3008V26.2109Z" fill="white"/>
                                                <path d="M6.01953 10.9491V6.03906H10.9295" stroke="white"/>
                                                <path d="M31.6893 10.3281V15.2381H26.7793" stroke="white"/>
                                                </g>
                                                </g>
                                                <defs>
                                                <clipPath id="clip0_874_10271">
                                                <rect width="38" height="33.2" fill="white"/>
                                                </clipPath>
                                                <clipPath id="clip1_874_10271">
                                                <rect width="38" height="33.2" fill="white"/>
                                                </clipPath>
                                                </defs>
                                                </svg>
                                        Responsive - $35
                                        <div class="check-circle">
                                            <i class="bi bi-check2"></i>
                                        </div>
                                    </div>
                                    <div class="layout-option">
                                        <svg width="43" height="35" viewBox="0 0 43 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_874_10143)">
                                            <g clip-path="url(#clip1_874_10143)">
                                            <g clip-path="url(#clip2_874_10143)">
                                            <path d="M29.8894 26.3925H3.69937C2.50937 26.3925 1.54938 25.4225 1.54938 24.2425V22.0925H29.8994V20.6525H1.54938V4.1525C1.54938 2.9625 2.51937 2.0025 3.69937 2.0025H35.2694C36.4594 2.0025 37.4194 2.9725 37.4194 4.1525V11.5925H38.8594V4.1525C38.8594 2.1725 37.2494 0.5625 35.2694 0.5625H3.69937C1.71937 0.5625 0.109375 2.1725 0.109375 4.1525V24.2425C0.109375 26.2225 1.71937 27.8325 3.69937 27.8325H29.8894V26.3925Z" fill="#231F20"/>
                                            <mask id="path-2-inside-1_874_10143" fill="white">
                                            <path d="M39.8396 11.3125H31.6196C30.3696 11.3125 29.3496 12.3325 29.3496 13.5825V32.1325C29.3496 33.3825 30.3696 34.4025 31.6196 34.4025H39.8396C41.0896 34.4025 42.1096 33.3825 42.1096 32.1325V13.5825C42.1096 12.3325 41.0896 11.3125 39.8396 11.3125ZM30.2496 15.4025H41.1996V28.0525H30.2496V15.4025ZM31.6196 12.2225H39.8396C40.5896 12.2225 41.1996 12.8325 41.1996 13.5825V14.4925H30.2496V13.5825C30.2496 12.8325 30.8596 12.2225 31.6196 12.2225ZM39.8396 33.5025H31.6196C30.8696 33.5025 30.2596 32.8925 30.2596 32.1425V28.9625H41.2096V32.1425C41.1996 32.8925 40.5896 33.5025 39.8396 33.5025Z"/>
                                            </mask>
                                            <path d="M30.2496 15.4025V14.4025H29.2496V15.4025H30.2496ZM41.1996 15.4025H42.1996V14.4025H41.1996V15.4025ZM41.1996 28.0525V29.0525H42.1996V28.0525H41.1996ZM30.2496 28.0525H29.2496V29.0525H30.2496V28.0525ZM41.1996 14.4925V15.4925H42.1996V14.4925H41.1996ZM30.2496 14.4925H29.2496V15.4925H30.2496V14.4925ZM30.2596 28.9625V27.9625H29.2596V28.9625H30.2596ZM41.2096 28.9625H42.2096V27.9625H41.2096V28.9625ZM41.2096 32.1425L42.2096 32.1558V32.1425H41.2096ZM39.8396 11.3125V10.3125H31.6196V11.3125V12.3125H39.8396V11.3125ZM31.6196 11.3125V10.3125C29.8173 10.3125 28.3496 11.7802 28.3496 13.5825H29.3496H30.3496C30.3496 12.8848 30.9219 12.3125 31.6196 12.3125V11.3125ZM29.3496 13.5825H28.3496V32.1325H29.3496H30.3496V13.5825H29.3496ZM29.3496 32.1325H28.3496C28.3496 33.9348 29.8173 35.4025 31.6196 35.4025V34.4025V33.4025C30.9219 33.4025 30.3496 32.8302 30.3496 32.1325H29.3496ZM31.6196 34.4025V35.4025H39.8396V34.4025V33.4025H31.6196V34.4025ZM39.8396 34.4025V35.4025C41.6419 35.4025 43.1096 33.9348 43.1096 32.1325H42.1096H41.1096C41.1096 32.8302 40.5373 33.4025 39.8396 33.4025V34.4025ZM42.1096 32.1325H43.1096V13.5825H42.1096H41.1096V32.1325H42.1096ZM42.1096 13.5825H43.1096C43.1096 11.7802 41.6419 10.3125 39.8396 10.3125V11.3125V12.3125C40.5373 12.3125 41.1096 12.8848 41.1096 13.5825H42.1096ZM30.2496 15.4025V16.4025H41.1996V15.4025V14.4025H30.2496V15.4025ZM41.1996 15.4025H40.1996V28.0525H41.1996H42.1996V15.4025H41.1996ZM41.1996 28.0525V27.0525H30.2496V28.0525V29.0525H41.1996V28.0525ZM30.2496 28.0525H31.2496V15.4025H30.2496H29.2496V28.0525H30.2496ZM31.6196 12.2225V13.2225H39.8396V12.2225V11.2225H31.6196V12.2225ZM39.8396 12.2225V13.2225C40.0373 13.2225 40.1996 13.3848 40.1996 13.5825H41.1996H42.1996C42.1996 12.2802 41.1419 11.2225 39.8396 11.2225V12.2225ZM41.1996 13.5825H40.1996V14.4925H41.1996H42.1996V13.5825H41.1996ZM41.1996 14.4925V13.4925H30.2496V14.4925V15.4925H41.1996V14.4925ZM30.2496 14.4925H31.2496V13.5825H30.2496H29.2496V14.4925H30.2496ZM30.2496 13.5825H31.2496C31.2496 13.3896 31.4071 13.2225 31.6196 13.2225V12.2225V11.2225C30.3121 11.2225 29.2496 12.2754 29.2496 13.5825H30.2496ZM39.8396 33.5025V32.5025H31.6196V33.5025V34.5025H39.8396V33.5025ZM31.6196 33.5025V32.5025C31.4219 32.5025 31.2596 32.3402 31.2596 32.1425H30.2596H29.2596C29.2596 33.4448 30.3173 34.5025 31.6196 34.5025V33.5025ZM30.2596 32.1425H31.2596V28.9625H30.2596H29.2596V32.1425H30.2596ZM30.2596 28.9625V29.9625H41.2096V28.9625V27.9625H30.2596V28.9625ZM41.2096 28.9625H40.2096V32.1425H41.2096H42.2096V28.9625H41.2096ZM41.2096 32.1425L40.2097 32.1292C40.2069 32.3399 40.0348 32.5025 39.8396 32.5025V33.5025V34.5025C41.1444 34.5025 42.1923 33.4451 42.2095 32.1558L41.2096 32.1425Z" fill="#231F20" mask="url(#path-2-inside-1_874_10143)"/>
                                            <path d="M36.9888 30.7735H35.1688C34.9188 30.7735 34.7188 30.9735 34.7188 31.2235C34.7188 31.4735 34.9188 31.6735 35.1688 31.6735H36.9888C37.2388 31.6735 37.4388 31.4735 37.4388 31.2235C37.4398 31.1641 37.4289 31.1051 37.4067 31.05C37.3845 30.9949 37.3514 30.9449 37.3094 30.9029C37.2674 30.8609 37.2173 30.8278 37.1622 30.8056C37.1071 30.7833 37.0481 30.7724 36.9888 30.7735Z" fill="#231F20"/>
                                            <path d="M12.2988 32.9688H26.6688V34.4087H12.2988V32.9688Z" fill="#231F20"/>
                                            <path d="M18.7695 27.2891H20.2095V34.1291H18.7695V27.2891Z" fill="#231F20"/>
                                            </g>
                                            </g>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_874_10143">
                                            <rect width="42" height="33.84" fill="white" transform="translate(0.109375 0.570312)"/>
                                            </clipPath>
                                            <clipPath id="clip1_874_10143">
                                            <rect width="42" height="33.84" fill="white" transform="translate(0.109375 0.570312)"/>
                                            </clipPath>
                                            <clipPath id="clip2_874_10143">
                                            <rect width="42" height="33.85" fill="white" transform="translate(0.109375 0.5625)"/>
                                            </clipPath>
                                            </defs>
                                            </svg>
                                            <svg width="43" height="35" viewBox="0 0 43 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_874_10266)">
                                                <g clip-path="url(#clip1_874_10266)">
                                                <g clip-path="url(#clip2_874_10266)">
                                                <path d="M29.8894 26.3925H3.69937C2.50937 26.3925 1.54938 25.4225 1.54938 24.2425V22.0925H29.8994V20.6525H1.54938V4.1525C1.54938 2.9625 2.51937 2.0025 3.69937 2.0025H35.2694C36.4594 2.0025 37.4194 2.9725 37.4194 4.1525V11.5925H38.8594V4.1525C38.8594 2.1725 37.2494 0.5625 35.2694 0.5625H3.69937C1.71937 0.5625 0.109375 2.1725 0.109375 4.1525V24.2425C0.109375 26.2225 1.71937 27.8325 3.69937 27.8325H29.8894V26.3925Z" fill="white"/>
                                                <mask id="path-2-inside-1_874_10266" fill="white">
                                                <path d="M39.8396 11.3125H31.6196C30.3696 11.3125 29.3496 12.3325 29.3496 13.5825V32.1325C29.3496 33.3825 30.3696 34.4025 31.6196 34.4025H39.8396C41.0896 34.4025 42.1096 33.3825 42.1096 32.1325V13.5825C42.1096 12.3325 41.0896 11.3125 39.8396 11.3125ZM30.2496 15.4025H41.1996V28.0525H30.2496V15.4025ZM31.6196 12.2225H39.8396C40.5896 12.2225 41.1996 12.8325 41.1996 13.5825V14.4925H30.2496V13.5825C30.2496 12.8325 30.8596 12.2225 31.6196 12.2225ZM39.8396 33.5025H31.6196C30.8696 33.5025 30.2596 32.8925 30.2596 32.1425V28.9625H41.2096V32.1425C41.1996 32.8925 40.5896 33.5025 39.8396 33.5025Z"/>
                                                </mask>
                                                <path d="M30.2496 15.4025V14.4025H29.2496V15.4025H30.2496ZM41.1996 15.4025H42.1996V14.4025H41.1996V15.4025ZM41.1996 28.0525V29.0525H42.1996V28.0525H41.1996ZM30.2496 28.0525H29.2496V29.0525H30.2496V28.0525ZM41.1996 14.4925V15.4925H42.1996V14.4925H41.1996ZM30.2496 14.4925H29.2496V15.4925H30.2496V14.4925ZM30.2596 28.9625V27.9625H29.2596V28.9625H30.2596ZM41.2096 28.9625H42.2096V27.9625H41.2096V28.9625ZM41.2096 32.1425L42.2096 32.1558V32.1425H41.2096ZM39.8396 11.3125V10.3125H31.6196V11.3125V12.3125H39.8396V11.3125ZM31.6196 11.3125V10.3125C29.8173 10.3125 28.3496 11.7802 28.3496 13.5825H29.3496H30.3496C30.3496 12.8848 30.9219 12.3125 31.6196 12.3125V11.3125ZM29.3496 13.5825H28.3496V32.1325H29.3496H30.3496V13.5825H29.3496ZM29.3496 32.1325H28.3496C28.3496 33.9348 29.8173 35.4025 31.6196 35.4025V34.4025V33.4025C30.9219 33.4025 30.3496 32.8302 30.3496 32.1325H29.3496ZM31.6196 34.4025V35.4025H39.8396V34.4025V33.4025H31.6196V34.4025ZM39.8396 34.4025V35.4025C41.6419 35.4025 43.1096 33.9348 43.1096 32.1325H42.1096H41.1096C41.1096 32.8302 40.5373 33.4025 39.8396 33.4025V34.4025ZM42.1096 32.1325H43.1096V13.5825H42.1096H41.1096V32.1325H42.1096ZM42.1096 13.5825H43.1096C43.1096 11.7802 41.6419 10.3125 39.8396 10.3125V11.3125V12.3125C40.5373 12.3125 41.1096 12.8848 41.1096 13.5825H42.1096ZM30.2496 15.4025V16.4025H41.1996V15.4025V14.4025H30.2496V15.4025ZM41.1996 15.4025H40.1996V28.0525H41.1996H42.1996V15.4025H41.1996ZM41.1996 28.0525V27.0525H30.2496V28.0525V29.0525H41.1996V28.0525ZM30.2496 28.0525H31.2496V15.4025H30.2496H29.2496V28.0525H30.2496ZM31.6196 12.2225V13.2225H39.8396V12.2225V11.2225H31.6196V12.2225ZM39.8396 12.2225V13.2225C40.0373 13.2225 40.1996 13.3848 40.1996 13.5825H41.1996H42.1996C42.1996 12.2802 41.1419 11.2225 39.8396 11.2225V12.2225ZM41.1996 13.5825H40.1996V14.4925H41.1996H42.1996V13.5825H41.1996ZM41.1996 14.4925V13.4925H30.2496V14.4925V15.4925H41.1996V14.4925ZM30.2496 14.4925H31.2496V13.5825H30.2496H29.2496V14.4925H30.2496ZM30.2496 13.5825H31.2496C31.2496 13.3896 31.4071 13.2225 31.6196 13.2225V12.2225V11.2225C30.3121 11.2225 29.2496 12.2754 29.2496 13.5825H30.2496ZM39.8396 33.5025V32.5025H31.6196V33.5025V34.5025H39.8396V33.5025ZM31.6196 33.5025V32.5025C31.4219 32.5025 31.2596 32.3402 31.2596 32.1425H30.2596H29.2596C29.2596 33.4448 30.3173 34.5025 31.6196 34.5025V33.5025ZM30.2596 32.1425H31.2596V28.9625H30.2596H29.2596V32.1425H30.2596ZM30.2596 28.9625V29.9625H41.2096V28.9625V27.9625H30.2596V28.9625ZM41.2096 28.9625H40.2096V32.1425H41.2096H42.2096V28.9625H41.2096ZM41.2096 32.1425L40.2097 32.1292C40.2069 32.3399 40.0348 32.5025 39.8396 32.5025V33.5025V34.5025C41.1444 34.5025 42.1923 33.4451 42.2095 32.1558L41.2096 32.1425Z" fill="white" mask="url(#path-2-inside-1_874_10266)"/>
                                                <path d="M36.9888 30.7735H35.1688C34.9188 30.7735 34.7188 30.9735 34.7188 31.2235C34.7188 31.4735 34.9188 31.6735 35.1688 31.6735H36.9888C37.2388 31.6735 37.4388 31.4735 37.4388 31.2235C37.4398 31.1641 37.4289 31.1051 37.4067 31.05C37.3845 30.9949 37.3514 30.9449 37.3094 30.9029C37.2674 30.8609 37.2173 30.8278 37.1622 30.8056C37.1071 30.7833 37.0481 30.7724 36.9888 30.7735Z" fill="#231F20"/>
                                                <path d="M12.2988 32.9688H26.6688V34.4087H12.2988V32.9688Z" fill="white"/>
                                                <path d="M18.7695 27.2891H20.2095V34.1291H18.7695V27.2891Z" fill="white"/>
                                                </g>
                                                </g>
                                                </g>
                                                <defs>
                                                <clipPath id="clip0_874_10266">
                                                <rect width="42" height="33.84" fill="white" transform="translate(0.109375 0.570312)"/>
                                                </clipPath>
                                                <clipPath id="clip1_874_10266">
                                                <rect width="42" height="33.84" fill="white" transform="translate(0.109375 0.570312)"/>
                                                </clipPath>
                                                <clipPath id="clip2_874_10266">
                                                <rect width="42" height="33.85" fill="white" transform="translate(0.109375 0.5625)"/>
                                                </clipPath>
                                                </defs>
                                                </svg>
                                        Scalable - $35
                                        <div class="check-circle">
                                            <i class="bi bi-check2"></i>
                                        </div>
                                    </div>
                                    <div class="layout-option">
                                        <svg width="38" height="34" viewBox="0 0 38 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_874_10153)">
                                            <g clip-path="url(#clip1_874_10153)">
                                            <path d="M34.48 0H3.52C1.58 0 0 1.58 0 3.52V23.22C0 25.16 1.58 26.74 3.52 26.74H34.48C36.42 26.74 38 25.16 38 23.22V3.52C38 1.58 36.42 0 34.48 0ZM3.52 1.41H34.48C35.64 1.41 36.59 2.36 36.59 3.52V19.7H1.41V3.52C1.41 2.35 2.35 1.41 3.52 1.41ZM34.48 25.33H3.52C2.36 25.33 1.41 24.38 1.41 23.22V21.11H36.6V23.22C36.5976 23.7806 36.3732 24.3174 35.9758 24.7129C35.5785 25.1084 35.0406 25.3303 34.48 25.33Z" fill="#231F20"/>
                                            <path d="M11.9609 31.7891H26.0509V33.1991H11.9609V31.7891Z" fill="#231F20"/>
                                            <path d="M18.3008 26.2109H19.7108V32.9109H18.3008V26.2109Z" fill="#231F20"/>
                                            <path d="M4.86914 4.88281L8.46914 8.49281" stroke="#231F20"/>
                                            <path d="M4.60938 8.13281V4.63281H8.10937" stroke="#231F20"/>
                                            <path d="M32.8402 4.88281L29.2402 8.49281" stroke="#231F20"/>
                                            <path d="M33.0898 8.13281V4.63281H29.5898" stroke="#231F20"/>
                                            <path d="M4.86914 16.3891L8.46914 12.7891" stroke="#231F20"/>
                                            <path d="M4.60938 13.1484V16.6484H8.10937" stroke="#231F20"/>
                                            <path d="M32.8402 16.3891L29.2402 12.7891" stroke="#231F20"/>
                                            <path d="M33.0898 13.1484V16.6484H29.5898" stroke="#231F20"/>
                                            </g>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_874_10153">
                                            <rect width="38" height="33.2" fill="white"/>
                                            </clipPath>
                                            <clipPath id="clip1_874_10153">
                                            <rect width="38" height="33.2" fill="white"/>
                                            </clipPath>
                                            </defs>
                                            </svg>
                                            <svg width="38" height="34" viewBox="0 0 38 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_874_10269)">
                                                <g clip-path="url(#clip1_874_10269)">
                                                <path d="M34.48 0H3.52C1.58 0 0 1.58 0 3.52V23.22C0 25.16 1.58 26.74 3.52 26.74H34.48C36.42 26.74 38 25.16 38 23.22V3.52C38 1.58 36.42 0 34.48 0ZM3.52 1.41H34.48C35.64 1.41 36.59 2.36 36.59 3.52V19.7H1.41V3.52C1.41 2.35 2.35 1.41 3.52 1.41ZM34.48 25.33H3.52C2.36 25.33 1.41 24.38 1.41 23.22V21.11H36.6V23.22C36.5976 23.7806 36.3732 24.3174 35.9758 24.7129C35.5785 25.1084 35.0406 25.3303 34.48 25.33Z" fill="white"/>
                                                <path d="M11.9609 31.7891H26.0509V33.1991H11.9609V31.7891Z" fill="white"/>
                                                <path d="M18.3008 26.2109H19.7108V32.9109H18.3008V26.2109Z" fill="white"/>
                                                <path d="M4.86914 4.88281L8.46914 8.49281" stroke="#231F20"/>
                                                <path d="M4.60938 8.13281V4.63281H8.10937" stroke="#231F20"/>
                                                <path d="M32.8402 4.88281L29.2402 8.49281" stroke="#231F20"/>
                                                <path d="M33.0898 8.13281V4.63281H29.5898" stroke="#231F20"/>
                                                <path d="M4.86914 16.3891L8.46914 12.7891" stroke="#231F20"/>
                                                <path d="M4.60938 13.1484V16.6484H8.10937" stroke="#231F20"/>
                                                <path d="M32.8402 16.3891L29.2402 12.7891" stroke="#231F20"/>
                                                <path d="M33.0898 13.1484V16.6484H29.5898" stroke="#231F20"/>
                                                </g>
                                                </g>
                                                <defs>
                                                <clipPath id="clip0_874_10269">
                                                <rect width="38" height="33.2" fill="white"/>
                                                </clipPath>
                                                <clipPath id="clip1_874_10269">
                                                <rect width="38" height="33.2" fill="white"/>
                                                </clipPath>
                                                </defs>
                                                </svg>
                                        Fixed - $0
                                        <div class="check-circle">
                                            <i class="bi bi-check2"></i>
                                        </div>
                                    </div>
                                </div> -->

                                <div class="layout-info">
                                    Choosing Responsive will add at least 2 hours to the project delivery time.
                                </div>
                            </div>

                            <hr class="divider-mid" />
                            <div>
                                <div class="d-flex align-items-center mb-2 mt-4">
                                    <div class="step-number me-2">5</div>
                                    <div class="order-subtitle">Email Service Provider</div>
                                    <div class="info-icon ms-5">i</div>
                                </div>
                                <!-- pricing table -->

                                <div class="table-responsive" id="integrationTable" style="display: none;">
                                    <table class="table table-bordered align-middle">
                                        <thead>
                                            <tr class="pricing-table-head">
                                                <th class="header-yellow" style="width: 30%;">
                                                    <div class="tab-content">Your Selected<br>Email Service
                                                        Providers</div>
                                                </th>
                                                <th class="header-yellow" style="width: 40%;">
                                                    <div class="d-flex flex-column align-items-center">
                                                        <span>Type of Integration</span>
                                                        <div
                                                            class="d-flex justify-content-center flex-wrap gap-md-3 gap-0 mt-2 tab-content">
                                                            <span
                                                                class="d-flex align-items-center"><strong>Basic</strong><span
                                                                    class="info-icon ms-2">i</span></span>
                                                            <span
                                                                class="d-flex align-items-center"><strong>Advanced</strong>
                                                                <span class="info-icon ms-2">i</span></span>
                                                        </div>
                                                    </div>
                                                </th>
                                                <th class="header-yellow" style="width: 30%;">
                                                    <div class="tab-content">Do you want us to set up & test
                                                        from your account?
                                                        <!-- <span class="info-icon">i</span> -->
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <!-- <tbody>
                                            <tr>
                                                <td>Mailchimp</td>
                                                <td>
                                                    <div class="d-flex justify-content-center gap-4">
                                                        <label class="d-flex align-items-center">
                                                            <input class="form-check-input me-2 mt-0" type="checkbox"
                                                                name="emailProvider">
                                                            <span class="ms-2">$39</span>
                                                        </label>
                                                        <label class="d-flex align-items-center">
                                                            <input class="form-check-input me-2 mt-0" type="checkbox"
                                                                name="emailProvider">
                                                            <span class="ms-2">$69</span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <label class="d-flex justify-content-center align-items-center">
                                                        <input class="form-check-input me-2 mt-0" type="checkbox"
                                                            name="emailProvider">
                                                        <span class="ms-2 fw-bold">$29</span>
                                                    </label>
                                                </td>
                                            </tr>

                                        </tbody> -->
                                        <tbody id="integrationTableBody"></tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="3" class="p-3">
                                                    <label class="d-flex align-items-center">
                                                        <input class="form-check-input me-2 mt-0" type="checkbox"
                                                            name="emailProvider">
                                                        <span class="fw-bold d-flex align-items-center">
                                                            Would you like to know more about our campaign
                                                            management service?
                                                            <span class="info-icon ms-3">i</span>
                                                        </span>
                                                    </label>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- <div class="row row-cols-1 row-cols-md-3 g-3">
                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2 " type="checkbox" name="emailProvider">
                                            Campaign Monitor <span class="price m-0">$29</span>
                                        </label>
                                    </div>

                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            Campaign Monitor <span class="price m-0">$29</span>
                                        </label>
                                    </div>

                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            Marketo (V 2.0) <span class="price m-0">$39</span>
                                        </label>
                                    </div>

                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            Adestra <span class="price m-0">$39</span>
                                        </label>
                                    </div>

                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            Marketo (V 1.0) <span class="price m-0">$29</span>
                                        </label>
                                    </div>

                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            Pardot <span class="price m-0">$39</span>
                                        </label>
                                    </div>

                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            Pardot Lightning <span class="price m-0">$39</span>
                                            <span class="new-badge">New</span>
                                        </label>
                                    </div>

                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            Hubspot - HUBL <span class="price m-0">$39</span>
                                        </label>
                                    </div>

                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            IBM Watson <span class="price m-0">$39</span>
                                        </label>
                                    </div>

                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            iContact <span class="price m-0">$29</span>
                                        </label>
                                    </div>
                                </div> -->

                                <!-- Provider Options -->
                                <div class="row row-cols-1 row-cols-md-3 g-3" id="emailProviderContainer"></div>

                                <!-- More/Less Button -->
                                <div class="mt-4 align-items-center" id="toggleBtnWrapper" style="display: flex;">
                                    <div class="more-btn" id="toggleBtn">More</div>
                                    <div class="more-icon" id="toggleIcon"><i class="bi bi-plus-lg"></i></div>
                                </div>

                                <!-- Add More Button -->
                                <div class="mt-4 " id="addMoreWrapper" style="display: none;">
                                    <div class="more-btn" id="addMoreBtn">Add More</div>
                                </div>
                            </div>

                            <hr class="divider-mid" />

                            <div>
                                <div class="d-flex align-items-center mb-2 mt-4">
                                    <div class="step-number me-2">6</div>
                                    <div class="order-subtitle">Resolution</div>
                                    <div class="info-icon ms-5">i</div>
                                </div>
                                <div class="row row-cols-1 row-cols-md-3 g-3">
                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            Campaign Monitor <span class="price m-0">$29</span>
                                        </label>
                                    </div>

                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            Campaign Monitor <span class="price m-0">$29</span>
                                        </label>
                                    </div>

                                </div>
                            </div>
                            <hr class="divider-mid" />

                            <div>
                                <div class="d-flex align-items-center mb-2 mt-4">
                                    <div class="step-number me-2">7</div>
                                    <div class="order-subtitle">Interactive Add-Ons</div>
                                    <div class="info-icon ms-5">i</div>
                                </div>


                                <!-- -- -->
                                <div class="row row-cols-1 row-cols-md-3 g-3">
                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            Campaign Monitor <span class="price m-0">$29</span>
                                        </label>
                                    </div>

                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            Campaign Monitor <span class="price m-0">$29</span>
                                        </label>
                                    </div>

                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            Marketo (V 2.0) <span class="price m-0">$39</span>
                                        </label>
                                    </div>

                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            Adestra <span class="price m-0">$39</span>
                                        </label>
                                    </div>

                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            Marketo (V 1.0) <span class="price m-0">$29</span>
                                        </label>
                                    </div>

                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            Pardot <span class="price m-0">$39</span>
                                        </label>
                                    </div>
                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            Campaign Monitor <span class="price m-0">$29</span>
                                        </label>
                                    </div>

                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            Campaign Monitor <span class="price m-0">$29</span>
                                        </label>
                                    </div>

                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            Marketo (V 2.0) <span class="price m-0">$39</span>
                                        </label>
                                    </div>

                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            Pardot Lightning <span class="price m-0">$39</span>
                                            <span class="new-badge">New</span>
                                        </label>
                                    </div>

                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            Hubspot - HUBL <span class="price m-0">$39</span>
                                        </label>
                                    </div>

                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            IBM Watson <span class="price m-0">$39</span>
                                        </label>
                                    </div>

                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            iContact <span class="price m-0">$29</span>
                                        </label>
                                    </div>
                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            IBM Watson <span class="price m-0">$39</span>
                                        </label>
                                    </div>

                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            iContact <span class="price m-0">$29</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr class="divider-mid" />

                            <div>
                                <div class="d-flex align-items-center mb-2 mt-4">
                                    <div class="step-number me-2">8</div>
                                    <div class="order-subtitle">Email Framework</div>
                                    <div class="info-icon ms-5">i</div>
                                </div>
                                <div class="row row-cols-1 row-cols-md-3 g-3">
                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            Campaign Monitor <span class="price m-0">$29</span>
                                        </label>
                                    </div>

                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            Campaign Monitor <span class="price m-0">$29</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr class="divider-mid" />

                            <div>
                                <div class="d-flex align-items-center mb-2 mt-4">
                                    <div class="step-number me-2">9</div>
                                    <div class="order-subtitle">Email Rendering Test Report</div>
                                    <div class="info-icon ms-5">i</div>
                                </div>
                                <div class="row row-cols-1 row-cols-md-3 g-3">
                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            Campaign Monitor <span class="price m-0">$29</span>
                                        </label>
                                    </div>

                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            Campaign Monitor <span class="price m-0">$29</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr class="divider-mid" />
                            <!-- project Detail -->
                            <div>
                                <div class="d-flex align-items-center mb-2 mt-4">
                                    <div class="step-number me-2">10</div>
                                    <div class="order-subtitle">Project Details</div>
                                </div>

                                <form>
                                    <div class="mb-3">
                                        <input type="text" class="form-control project-input"
                                            placeholder="Project Name (This name will be referenced in your invoice.)">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label fw-semibold">Project Brief</label>
                                        <div class="custom-box mb-3">
                                            <textarea class="form-control" rows="4"
                                                placeholder="Kindly share detailed information regarding usage/coding standards of this Email. Attach design files in layered PSD/AI/EPS/PDF/SKETCH/ZIP/FIGMA format."></textarea>
                                            <div class="checkbox-section">
                                                <div class="form-check mb-0">
                                                    <input class="form-check-input project-check" type="checkbox"
                                                        value="" id="noFileCheck">
                                                    <label class="form-check-label" for="noFileCheck">
                                                        I don’t want to submit any file for this job.
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class=" btn-darkblue mb-3">ADD PROJECT TO
                                        CART</button>

                                    <div class="info-text">
                                        <strong>100% Money Back Guarantee.</strong> In case you don’t fall in
                                        Love with us!
                                    </div>

                                    <div class="info-text mt-2 d-flex align-items-center flex-wrap ">
                                        <p class="p-0 m-0">Accepted Payment Methods</p>
                                        <div class="payment-icons ms-4">
                                            <img src="assets/images/paymentImage.png" alt="PayPal">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="job-summary-box ">
                            <div class="summary-title">YOUR JOB SUMMARY</div>

                            <div class="summary-header">
                                Job 1 (72 hrs)
                            </div>

                            <div class="summary-body">
                                <div class="summary-row">
                                    <span class="box-text">1 Email Only Coding</span>
                                    <span class="fw-bold">$59</span>
                                </div>
                                <hr class="divider-box" />
                                <div class="summary-row">
                                    <span class="box-text">Responsive</span>
                                    <span class="fw-bold">$35</span>
                                </div>
                                <hr class="divider-box" />

                                <div class="summary-row">
                                    <span class="box-text">Outlook 120 DPI</span>
                                    <span class="fw-bold">$29</span>
                                </div>
                                <hr class="divider-box" />

                                <div class="summary-row">
                                    <span class="box-text">Email On Acid</span>
                                    <span class="fw-bold">$0</span>
                                </div>
                                <hr class="divider-box" />

                                <div class="delivery-time">
                                    Estimated Delivery Time<br>
                                    Wed, 7 May 2025, 1:16:20 PM | GMT
                                </div>
                            </div>

                            <div class="total-box">
                                <p class="m-0 p-0">Estimated Total (USD)</p>
                                <p class="m-0 p-0">$123</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Landing Page Content -->
            <div class="tab-pane fade" id="pills-landing" role="tabpanel" aria-labelledby="pills-landing-tab">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="step-title order-form-title mb-3">Place Your Email Template Order Here</div>
                        <div class="radio-group">
                            <input type="radio" name="packageType" id="only-coding"
                                onclick="GetPackageType('only-coding')" checked>
                            <input type="radio" name="packageType" id="coding-design"
                                onclick="GetPackageType('design')">
                            <div class="d-flex align-items-center mb-2">
                                <div class="step-number me-2">1</div>
                                <div class="order-subtitle">Choose Your Package</div>
                                <div class="info-icon ms-2" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                    i</div>
                            </div>

                            <ul class="nav nav-pills row text-center w-100 mb-4 custom-navlink-radius mt-5 g-0"
                                id="pills-tab" role="tablist">
                                <li class="col-6 p-0" role="presentation">
                                    <button class="nav-link w-100 h-100 package-card active"
                                        id="pills-landing-only-code-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-landing-only-code" type="button" role="tab"
                                        aria-controls="pills-landing-only-code" aria-selected="true">
                                        <div class="">
                                            <label
                                                class="d-flex align-items-center justify-content-center flex-column flex-md-row">
                                                <img src="assets/images/Background Border order.png" alt="" height="20"
                                                    width="20">
                                                <p class="order-card-heading">Only Coding</p>
                                            </label>
                                            <p class="order-card-content">Let us hand-code your designs to HTML.</p>
                                        </div>
                                    </button>
                                </li>
                                <li class="col-6 p-0" role="presentation">
                                    <button class="nav-link w-100 h-100 package-card " id="pills-landing-design-tab"
                                        data-bs-toggle="pill" data-bs-target="#pills-landing-design" type="button"
                                        role="tab" aria-controls="pills-landing-design" aria-selected="false">
                                        <div class="">
                                            <label
                                                class="d-flex align-items-center justify-content-center flex-column flex-md-row">
                                                <img src="assets/images/Background Border order.png" alt="" height="20"
                                                    width="20">
                                                <p class="order-card-heading">Design + Coding</p>
                                            </label>
                                            <p class="order-card-content">Let us create eye-catching designs & hand-code
                                                them for you.</p>
                                        </div>
                                    </button>
                                </li>
                            </ul>

                            <div class="row">
                                <div class="col-md-6 d-flex align-items-center gap-5">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="step-number me-2">2</div>
                                        <div class="order-subtitle step-text">Number of Unique Templates</div>
                                    </div>

                                    <div class="custom-number-input">
                                        <input type="number" value="1" id="number-of-unique-templates-design" />
                                        <div class="spinner-buttons">
                                            <button type="button"
                                                onclick="NumberIncrement('number-of-unique-templates-design')">▲</button>
                                            <button type="button"
                                                onclick="NumberDecrement('number-of-unique-templates-design')">▼</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="adaptation-container">
                                        <span class="adaptation-text">I also need adaptations of this
                                            email</span>
                                        <button class="circle-btn circle-btn-2" onclick="GetNeedAdaptations2()">
                                            <i class="bi bi-chevron-right"></i>
                                        </button>
                                        <div class="info-icon ms-2" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalCenter">i</div>
                                    </div>
                                </div>
                            </div>

                            <div class="sub-point" id="adaptations-options-2">

                                <div class="row align-items-center ">
                                    <div class="col-auto">
                                        <div class="step-number sub-step-num">2.1</div>
                                    </div>
                                    <div class="col">
                                        <div class="form-check d-flex align-items-start">
                                            <input class="form-check-input mt-1 me-2" type="checkbox" id="template21">
                                            <label class="form-check-label" for="template21">
                                                <strong>Adaptations (replication) from the same
                                                    Template</strong><br>
                                                <small class="text-muted">Number of templates with minimal
                                                    structure
                                                    change (30% off)</small>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="custom-number-input">
                                        <input type="number" value="1" id="adaptations-option-1" />
                                        <div class="spinner-buttons">
                                            <button type="button"
                                                onclick="NumberIncrement('adaptations-option-1')">▲</button>
                                            <button type="button"
                                                onclick="NumberDecrement('adaptations-option-1')">▼</button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Row 2 -->
                                <div class="row align-items-center mt-3">
                                    <div class="col-auto">
                                        <div class="step-number sub-step-num">2.2</div>
                                    </div>
                                    <div class="col">
                                        <div class="form-check d-flex align-items-start">
                                            <input class="form-check-input mt-1 me-2" type="checkbox" id="template22">
                                            <label class="form-check-label" for="template22">
                                                <strong>Adaptations (replication) from the same
                                                    Template</strong><br>
                                                <small class="text-muted">Number of templates with only Text,
                                                    Images
                                                    & Links changes (50% off)</small>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="custom-number-input">
                                        <input type="number" value="1" id="adaptations-option-2" />
                                        <div class="spinner-buttons">
                                            <button type="button"
                                                onclick="NumberIncrement('adaptations-option-2')">▲</button>
                                            <button type="button"
                                                onclick="NumberDecrement('adaptations-option-2')">▼</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="divider-mid" />

                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade active show" id="pills-landing-only-code" role="tabpanel"
                                    aria-labelledby="pills-landing-only-code-tab">
                                    <div>
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="step-number me-2 mb-4 mt-4">3</div>
                                            <div class="order-subtitle">Choose Price & Delivery Time (Prices are
                                                in USD)</div>
                                            <div class="info-icon ms-2" data-bs-toggle="modal"
                                                data-bs-target="#exampleModalCenter">i</div>
                                        </div>
                                        <div class="delivery-container">
                                            <div class="scroll-wrapper">
                                                <div class="delivery-scroll">

                                                    <div class="row w-100">
                                                        <div class="d-flex">
                                                            <div class="col-md-6">
                                                                <div class="card-option standardcardoption">
                                                                    <input type="radio" name="delivery-1" id="standard"
                                                                        checked>
                                                                    <label for="standard">
                                                                        <p class="order-main-cards"><img
                                                                                src="/assets/images/Background Border order.png"
                                                                                alt="" class="order-cards-images">
                                                                            Standard Delivery
                                                                        </p>
                                                                        <p>We will start your order asap.</p>
                                                                        <div class="price">$299/Page</div>
                                                                        <small>Delivery: 4 to 5 Days</small>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="card-option expresscardoption">
                                                                    <input type="radio" name="delivery-1" id="express">
                                                                    <label for="express">
                                                                        <p class="order-main-cards"><img
                                                                                src="/assets/images/Background Border order.png"
                                                                                alt=""
                                                                                class="order-cards-images">Express
                                                                            Delivery
                                                                        </p>
                                                                        <p>We will start your order asap.</p>
                                                                        <div class="price">$398/Page</div>
                                                                        <small>Delivery: 2 to 3 Days</small>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="divider-line"></div>
                                </div>

                                <div class="tab-pane fade" id="pills-landing-design" role="tabpanel"
                                    aria-labelledby="pills-landing-design-tab">
                                    <div>
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="step-number me-2 mb-4 mt-4">3</div>
                                            <div class="order-subtitle">Choose Price & Delivery Time (Prices are
                                                in USD)</div>
                                            <div class="info-icon ms-2" data-bs-toggle="modal"
                                                data-bs-target="#exampleModalCenter">i</div>
                                        </div>
                                        <div class="delivery-container">
                                            <div class="scroll-wrapper">
                                                <div class="delivery-scroll">
                                                    <div class="row w-100">
                                                        <div class="d-flex">
                                                            <div class="col-md-6">
                                                                <div class="card-option standardcardoption">
                                                                    <input type="radio" name="delivery" id="standard"
                                                                        checked>
                                                                    <label for="standard">
                                                                        <p class="order-main-cards"><img
                                                                                src="/assets/images/Background Border order.png"
                                                                                alt="" class="order-cards-images">
                                                                            Standard Delivery
                                                                        </p>
                                                                        <p>We will start your order asap.</p>
                                                                        <div class="price">$498/Page</div>
                                                                        <small>Delivery: 6 to 7 Days</small>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="card-option expresscardoption">
                                                                    <input type="radio" name="delivery" id="express">
                                                                    <label for="express">
                                                                        <p class="order-main-cards"><img
                                                                                src="/assets/images/Background Border order.png"
                                                                                alt=""
                                                                                class="order-cards-images">Express
                                                                            Delivery
                                                                        </p>
                                                                        <p>We will start your order asap.</p>
                                                                        <div class="price">$627/Page</div>
                                                                        <small>Delivery: 4 to 5 Days</small>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- <div>
                                <div class="d-flex align-items-center mb-2 mt-4">
                                    <div class="step-number me-2">4</div>
                                    <div class="fw-bold">Layout</div>
                                    <div class="info-icon ms-2">i</div>
                                </div>
                                <div class="d-flex gap-3 layout-buttons flex-wrap">
                                    <div class="layout-option selected">
                                        <img src="assets/images/computer1.png" alt="">
                                        Responsive - $35
                                        <div class="check-circle">
                                            <i class="bi bi-check2"></i>
                                        </div>
                                    </div>
                                    <div class="layout-option">
                                        <img src="assets/images/computer2.png" alt="">
                                        Scalable - $35
                                        <div class="check-circle">
                                            <i class="bi bi-check2"></i>
                                        </div>
                                    </div>
                                    <div class="layout-option">
                                        <img src="assets/images/computer3.png" alt="">
                                        Fixed - $0
                                        <div class="check-circle">
                                            <i class="bi bi-check2"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="layout-info">
                                    Choosing Responsive will add at least 2 hours to the project delivery time.
                                </div>
                            </div>

                            <hr class="divider-mid" /> -->
                            <div>
                                <div class="d-flex align-items-center mb-2 mt-4">
                                    <div class="step-number me-2">4</div>
                                    <div class="order-subtitle">Platforms/Page Builder</div>
                                    <div class="info-icon ms-5">i</div>
                                </div>
                                <!-- pricing table -->

                                <!-- <div class="table-responsive">
                                    <table class="table table-bordered align-middle">
                                        <thead>
                                            <tr class="pricing-table-head">
                                                <th class="header-yellow" style="width: 30%;">
                                                    <div class="tab-content">Your Selected<br>Email Service
                                                        Providers</div>
                                                </th>
                                                <th class="header-yellow" style="width: 40%;">
                                                    <div class="d-flex flex-column align-items-center">
                                                        <span>Type of Integration</span>
                                                        <div
                                                            class="d-flex justify-content-center flex-wrap gap-md-3 gap-0 mt-2 tab-content">
                                                            <span
                                                                class="d-flex align-items-center"><strong>Basic</strong><span
                                                                    class="info-icon ms-2">i</span></span>
                                                            <span
                                                                class="d-flex align-items-center"><strong>Advanced</strong>
                                                                <span class="info-icon ms-2">i</span></span>
                                                        </div>
                                                    </div>
                                                </th>
                                                <th class="header-yellow" style="width: 30%;">
                                                    <div class="tab-content">Do you want us to set up & test
                                                        from your account?
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Mailchimp</td>
                                                <td>
                                                    <div class="d-flex justify-content-center gap-4">
                                                        <label class="d-flex align-items-center">
                                                            <input class="form-check-input me-2 mt-0" type="checkbox"
                                                                name="emailProvider">
                                                            <span class="ms-2">$39</span>
                                                        </label>
                                                        <label class="d-flex align-items-center">
                                                            <input class="form-check-input me-2 mt-0" type="checkbox"
                                                                name="emailProvider">
                                                            <span class="ms-2">$69</span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <label class="d-flex justify-content-center align-items-center">
                                                        <input class="form-check-input me-2 mt-0" type="checkbox"
                                                            name="emailProvider">
                                                        <span class="ms-2 fw-bold">$29</span>
                                                    </label>
                                                </td>
                                            </tr>

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="3" class="p-3">
                                                    <label class="d-flex align-items-center">
                                                        <input class="form-check-input me-2 mt-0" type="checkbox"
                                                            name="emailProvider">
                                                        <span class="fw-bold d-flex align-items-center">
                                                            Would you like to know more about our campaign
                                                            management service?
                                                            <span class="info-icon ms-3">i</span>
                                                        </span>
                                                    </label>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div> -->
                                <div class="row row-cols-1 row-cols-md-3 g-3">
                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2 " type="checkbox" name="emailProvider">
                                            Campaign Monitor <span class="price m-0">$29</span>
                                        </label>
                                    </div>

                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            Campaign Monitor <span class="price m-0">$29</span>
                                        </label>
                                    </div>

                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            Marketo (V 2.0) <span class="price m-0">$39</span>
                                        </label>
                                    </div>

                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            Adestra <span class="price m-0">$39</span>
                                        </label>
                                    </div>

                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            Marketo (V 1.0) <span class="price m-0">$29</span>
                                        </label>
                                    </div>

                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            Pardot <span class="price m-0">$39</span>
                                        </label>
                                    </div>

                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            Pardot Lightning <span class="price m-0">$39</span>
                                            <span class="new-badge">New</span>
                                        </label>
                                    </div>

                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            Hubspot - HUBL <span class="price m-0">$39</span>
                                        </label>
                                    </div>

                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            IBM Watson <span class="price m-0">$39</span>
                                        </label>
                                    </div>

                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            iContact <span class="price m-0">$29</span>
                                        </label>
                                    </div>
                                </div>

                                <!-- More Button -->
                                <!-- <div class="mt-4 d-flex align-items-center">
                                    <a href="#" class="more-btn">More</a>
                                    <div class="more-icon"><i class="bi bi-plus-lg"></i></div>

                                </div> -->
                            </div>

                            <hr class="divider-mid" />

                            <div>
                                <div class="d-flex align-items-center mb-2 mt-4">
                                    <div class="step-number me-2">5</div>
                                    <div class="order-subtitle">Is the height of your landing page greater than 2000 pixel?
                                    </div>
                                    <div class="info-icon ms-5">i</div>
                                </div>
                                <div class="row row-cols-1 row-cols-md-3 g-3">
                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            Yes
                                        </label>
                                    </div>

                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            No
                                        </label>
                                    </div>

                                </div>
                            </div>
                            <hr class="divider-mid" />

                            <!-- <div>
                                <div class="d-flex align-items-center mb-2 mt-4">
                                    <div class="step-number me-2">7</div>
                                    <div class="fw-bold">Interactive Add-Ons</div>
                                    <div class="info-icon ms-5">i</div>
                                </div>


                                <div class="row row-cols-1 row-cols-md-3 g-3">
                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            Campaign Monitor <span class="price m-0">$29</span>
                                        </label>
                                    </div>

                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            Campaign Monitor <span class="price m-0">$29</span>
                                        </label>
                                    </div>

                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            Marketo (V 2.0) <span class="price m-0">$39</span>
                                        </label>
                                    </div>

                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            Adestra <span class="price m-0">$39</span>
                                        </label>
                                    </div>

                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            Marketo (V 1.0) <span class="price m-0">$29</span>
                                        </label>
                                    </div>

                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            Pardot <span class="price m-0">$39</span>
                                        </label>
                                    </div>
                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            Campaign Monitor <span class="price m-0">$29</span>
                                        </label>
                                    </div>

                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            Campaign Monitor <span class="price m-0">$29</span>
                                        </label>
                                    </div>

                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            Marketo (V 2.0) <span class="price m-0">$39</span>
                                        </label>
                                    </div>

                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            Pardot Lightning <span class="price m-0">$39</span>
                                            <span class="new-badge">New</span>
                                        </label>
                                    </div>

                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            Hubspot - HUBL <span class="price m-0">$39</span>
                                        </label>
                                    </div>

                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            IBM Watson <span class="price m-0">$39</span>
                                        </label>
                                    </div>

                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            iContact <span class="price m-0">$29</span>
                                        </label>
                                    </div>
                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            IBM Watson <span class="price m-0">$39</span>
                                        </label>
                                    </div>

                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            iContact <span class="price m-0">$29</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr class="divider-mid" />

                            <div>
                                <div class="d-flex align-items-center mb-2 mt-4">
                                    <div class="step-number me-2">8</div>
                                    <div class="fw-bold">Email Framework</div>
                                    <div class="info-icon ms-5">i</div>
                                </div>
                                <div class="row row-cols-1 row-cols-md-3 g-3">
                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            Campaign Monitor <span class="price m-0">$29</span>
                                        </label>
                                    </div>

                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            Campaign Monitor <span class="price m-0">$29</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr class="divider-mid" />

                            <div>
                                <div class="d-flex align-items-center mb-2 mt-4">
                                    <div class="step-number me-2">9</div>
                                    <div class="fw-bold">Email Rendering Test Report</div>
                                    <div class="info-icon ms-5">i</div>
                                </div>
                                <div class="row row-cols-1 row-cols-md-3 g-3">
                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            Campaign Monitor <span class="price m-0">$29</span>
                                        </label>
                                    </div>

                                    <div class="col">
                                        <label class="form-check-label d-flex align-items-center">
                                            <input class="form-check-input me-2" type="checkbox" name="emailProvider">
                                            Campaign Monitor <span class="price m-0">$29</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr class="divider-mid" /> -->

                            <div>
                                <div class="d-flex align-items-center mb-2 mt-4">
                                    <div class="step-number me-2">6</div>
                                    <div class="order-subtitle">Project Details</div>
                                </div>

                                <form>
                                    <div class="mb-3">
                                        <input type="text" class="form-control project-input"
                                            placeholder="Project Name (This name will be referenced in your invoice.)">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label fw-semibold">Project Brief</label>
                                        <div class="custom-box mb-3">
                                            <textarea class="form-control" rows="4"
                                                placeholder="Kindly share detailed information regarding usage/coding standards of this Email. Attach design files in layered PSD/AI/EPS/PDF/SKETCH/ZIP/FIGMA format."></textarea>
                                            <div class="checkbox-section">
                                                <div class="form-check mb-0">
                                                    <input class="form-check-input project-check" type="checkbox"
                                                        value="" id="noFileCheck">
                                                    <label class="form-check-label" for="noFileCheck">
                                                        I don’t want to submit any file for this job.
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <div>
                                            <button type="submit" class=" btn-transparent mb-3 blob-btn">
                                                PRODUCT DESIGN BRIEF
                                                <span class="blob-btn__inner">
                                                    <span class="blob-btn__blobs">
                                                        <span class="blob-btn__blob"></span>
                                                        <span class="blob-btn__blob"></span>
                                                        <span class="blob-btn__blob"></span>
                                                        <span class="blob-btn__blob"></span>
                                                    </span>
                                                </span>
                                            </button>
                                        </div>
                                        <div>
                                            <button type="submit" class=" btn-darkblue mb-3">ADD PROJECT TO
                                                CART</button>
                                        </div>
                                    </div>

                                    <div class="info-text">
                                        <strong>100% Money Back Guarantee.</strong> In case you don’t fall in
                                        Love with us!
                                    </div>

                                    <div class="info-text mt-2 d-flex align-items-center flex-wrap ">
                                        <p class="p-0 m-0">Accepted Payment Methods</p>
                                        <div class="payment-icons ms-4">
                                            <img src="assets/images/paymentImage.png" alt="PayPal">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="job-summary-box ">
                            <div class="summary-title">YOUR JOB SUMMARY</div>

                            <div class="summary-header">
                                Job 1 (72 hrs)
                            </div>

                            <div class="summary-body">
                                <div class="summary-row">
                                    <span class="box-text">1 Email Only Coding</span>
                                    <span class="fw-bold">$59</span>
                                </div>
                                <hr class="divider-box" />
                                <div class="summary-row">
                                    <span class="box-text">Responsive</span>
                                    <span class="fw-bold">$35</span>
                                </div>
                                <hr class="divider-box" />

                                <div class="summary-row">
                                    <span class="box-text">Outlook 120 DPI</span>
                                    <span class="fw-bold">$29</span>
                                </div>
                                <hr class="divider-box" />

                                <div class="summary-row">
                                    <span class="box-text">Email On Acid</span>
                                    <span class="fw-bold">$0</span>
                                </div>
                                <hr class="divider-box" />

                                <div class="delivery-time">
                                    Estimated Delivery Time<br>
                                    Wed, 7 May 2025, 1:16:20 PM | GMT
                                </div>
                            </div>

                            <div class="total-box">
                                <p class="m-0 p-0">Estimated Total (USD)</p>
                                <p class="m-0 p-0">$123</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Content  -->
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="contact-section">
                    <h2>GET IN TOUCH WITH US</h2>
                    <p class="small-text mainsubheading-global mt-3">We can help you with</p>

                    <div class="services-list mainsubheading-global">
                        <span>Modular Email Template Production</span> |
                        <span>Email Template Audit</span> |
                        <span>Custom Interactive Email Template</span> |
                        <span>Email Campaign Management</span> |
                        <span>Email Automation</span> |
                        <span>Program Audit</span> |
                        <span>Data Integration & Migration</span> |
                        <span>Dedicated Resource Team Hiring</span>
                    </div>

                    <hr class="divider-contact" />

                    <p class="text-center contact-head">
                        We believe in laser fast communication, expect us to get back to you max in next couple of
                        hours.
                    </p>

                    <form>
                        <div class="row g-3 order-contact">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Your Name" required />
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="E-mail" required />
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Phone" required />
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control"
                                    placeholder="Which service are you interested in ?" />
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="How soon do you wish to begin?" />
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control"
                                    placeholder="You're looking for expertise in which ESP/s?" />
                            </div>
                            <div class="col-12">
                                <textarea class="form-control form-textarea"
                                    placeholder="Tell us more about this project."></textarea>
                            </div>
                            <div class="col-12 text-md-start text-center">
                                <button type="submit" class=" btn-custom">Button </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>