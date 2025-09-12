// fetch("../../components/header/header.html")
//   .then((response) => response.text())
//   .then((html) => {
//     loadContactUs(html, "home-header");
//   })
//   .catch((error) => {
//     console.error("Error loading HTML:", error);
//   });

// fetch("../../components/orderotherservice/orderotherservice.html")
//   .then((response) => response.text())
//   .then((html) => {
//     loadContactUs(html, "order-other-service");
//   })
//   .catch((error) => {
//     console.error("Error loading HTML:", error);
//   });

// fetch("../../components/footer/footer.html")
//   .then((response) => response.text())
//   .then((html) => {
//     loadContactUs(html, "home-footer");
//   })
//   .catch((error) => {
//     console.error("Error loading HTML:", error);
//   });

//Design variables
let needAdaptations = false;

// Billing data variables
let packageType = "only-coding";
let adaptationsOption1 = false;
let adaptationsOption2 = false;
let deliveryTime = null;
let selectedLayoutId = "responsive"; // Default selected

// Page data
const deliveryTimeDataForOnlyCoding = [
  {
    id: "only-coding-timing-1",
    value: "72",
    price: "$59",
  },
  {
    id: "only-coding-timing-2",
    value: "48",
    price: "$69",
  },
  {
    id: "only-coding-timing-3",
    value: "24",
    price: "$99",
  },
  {
    id: "only-coding-timing-4",
    value: "12",
    price: "$129",
  },
  {
    id: "only-coding-timing-5",
    value: "8",
    price: "$159",
  },
];

const deliveryTimeDataForCodingDesign = [
  {
    id: "coding-design-timing-1",
    value: "6",
    price: "$59",
  },
  {
    id: "coding-design-timing-2",
    value: "5",
    price: "$69",
  },
  {
    id: "coding-design-timing-3",
    value: "4",
    price: "$99",
  },
  {
    id: "coding-design-timing-4",
    value: "3",
    price: "$129",
  },
  {
    id: "coding-design-timing-5",
    value: "2",
    price: "$159",
  },
];

const layoutOptions = [
  {
    id: "responsive",
    label: "Responsive",
    price: 35,
    image: "/assets/images/computer1.png",
  },
  {
    id: "scalable",
    label: "Scalable",
    price: 35,
    image: "/assets/images/computer2.png",
  },
  {
    id: "fixed",
    label: "Fixed",
    price: 0,
    image: "/assets/images/computer3.png",
  },
];

function loadContactUs(html, id) {
  const mainElement = document.getElementById(id);
  if (html && mainElement) {
    mainElement.innerHTML = html;
  } else {
    console.error("Contact Us content is not loaded yet.");
  }
}

// Function to load and execute JavaScript
async function loadScript(url) {
  try {
    const response = await fetch(url);
    const code = await response.text();
    const script = document.createElement("script");
    script.text = code;
    document.body.appendChild(script);
  } catch (error) {
    console.error("Error loading script:", error);
  }
}

// Load your script files
loadScript("/components/slider-2/script.js");

function GetNeedAdaptations() {
  const options = document.getElementById("adaptations-options");
  const icon = document.querySelector(".info-icon");
  const chevron = document.querySelector(".circle-btn i");

  if (!options) return;

  const isOpen = options.style.display === "block";

  options.style.display = isOpen ? "none" : "block";
  icon?.classList.toggle("need-adaptations-active", !isOpen);
  chevron?.classList.toggle("rotate-down", !isOpen);
}

function GetNeedAdaptations2() {
  const options = document.getElementById("adaptations-options-2");
  const icon = document.querySelector(".info-icon");
  const chevron = document.querySelector(".circle-btn-2 i");

  if (!options) return;

  const isOpen = options.style.display === "block";

  options.style.display = isOpen ? "none" : "block";
  icon?.classList.toggle("need-adaptations-active", !isOpen);
  chevron?.classList.toggle("rotate-down", !isOpen);
}

const emailProviders = [
  { name: "Campaign Monitor", price: "$29" },
  { name: "Campaign Monitor", price: "$29" },
  { name: "Marketo (V 2.0)", price: "$39" },
  { name: "Adestra", price: "$39" },
  { name: "Marketo (V 1.0)", price: "$29" },
  { name: "Pardot", price: "$39" },
  { name: "Pardot Lightning", price: "$39", isNew: true },
  { name: "Hubspot - HUBL", price: "$39" },
  { name: "IBM Watson", price: "$39" },
  { name: "iContact", price: "$29" },
  { name: "Campaign Monitor", price: "$29" },
  { name: "Campaign Monitor", price: "$29" },
  { name: "Marketo (V 2.0)", price: "$39" },
  { name: "Adestra", price: "$39" },
  { name: "Marketo (V 1.0)", price: "$29" },
  { name: "Pardot", price: "$39" },
  { name: "Pardot Lightning", price: "$39", isNew: true },
  { name: "Hubspot - HUBL", price: "$39" },
  { name: "IBM Watson", price: "$39" },
  { name: "iContact", price: "$29" },
];

const visibleCount = 10;
let expanded = false;

document.addEventListener("DOMContentLoaded", () => {
  const container = document.getElementById("emailProviderContainer");
  const toggleBtn = document.getElementById("toggleBtn");
  const toggleIcon = document.getElementById("toggleIcon");
  const integrationTable = document.getElementById("integrationTable");
  const tableBody = document.getElementById("integrationTableBody");

  function renderProviders() {
    // Step 1: Collect selected checkbox IDs before clearing
    const selectedIds = Array.from(
      document.querySelectorAll(".provider-checkbox:checked")
    ).map((cb) => cb.id);

    container.innerHTML = "";

    emailProviders.forEach((provider, index) => {
      const col = document.createElement("div");
      col.className =
        "col email-provider-item" +
        (!expanded && index >= visibleCount ? " hide-options" : "");

      const id = `checkbox-${index}`;
      const isChecked = selectedIds.includes(id); // check if this one was selected before

      col.innerHTML = `
        <label class="form-check-label d-flex align-items-center">
          <input class="form-check-input me-2 provider-checkbox" id="${id}" type="checkbox"
                 data-name="${provider.name}" data-price="${provider.price}"
                 ${isChecked ? "checked" : ""}>
          ${provider.name} <span class="price m-0">${provider.price}</span>
          ${provider.isNew ? '<span class="new-badge ms-2">New</span>' : ""}
        </label>
      `;

      container.appendChild(col);
    });

    toggleBtn.textContent = expanded ? "Show Less" : "More";
    toggleIcon.innerHTML = expanded
      ? "<i class='bi bi-dash-lg'></i>"
      : "<i class='bi bi-plus-lg'></i>";
    toggleIcon.classList.toggle("rotate", expanded);

    bindCheckboxListeners(); // rebind after rerender
    updateSelectedTable(); // re-render table with preserved selections
  }

  function bindCheckboxListeners() {
    const checkboxes = document.querySelectorAll(".provider-checkbox");

    checkboxes.forEach((cb) => {
      cb.addEventListener("change", updateSelectedTable);
    });
  }

  function toggleVisibilityOnSelection(hasSelection, selectedCount) {
    const providerList = document.getElementById("emailProviderContainer");
    const toggleBtnWrapper = document.getElementById("toggleBtnWrapper");
    const addMoreWrapper = document.getElementById("addMoreWrapper");

    if (hasSelection && selectedCount === 1) {
      providerList.style.display = "none";
      toggleBtnWrapper.style.display = "none";
      addMoreWrapper.style.display = "flex";
    } else {
      providerList.style.display = "flex";
      toggleBtnWrapper.style.display = "flex";
      addMoreWrapper.style.display = "none";
    }
  }

  function updateSelectedTable() {
    const checkedBoxes = document.querySelectorAll(
      ".provider-checkbox:checked"
    );
    const selectedProviders = Array.from(checkedBoxes).map((cb) => ({
      name: cb.dataset.name,
      price: cb.dataset.price,
    }));

    const hasSelection = selectedProviders.length > 0;
    toggleVisibilityOnSelection(hasSelection, selectedProviders.length);

    if (!hasSelection) {
      integrationTable.style.display = "none";
      tableBody.innerHTML = "";
      return;
    }

    integrationTable.style.display = "block";
    tableBody.innerHTML = "";

    selectedProviders.forEach((provider) => {
      const row = document.createElement("tr");
      row.innerHTML = `
        <td>${provider.name}</td>
        <td>
          <div class="d-flex justify-content-center gap-4">
            <label class="d-flex align-items-center">
              <input class="form-check-input me-2 mt-0" type="checkbox" name="basicIntegration">
              <span class="ms-2">$39</span>
            </label>
            <label class="d-flex align-items-center">
              <input class="form-check-input me-2 mt-0" type="checkbox" name="advancedIntegration">
              <span class="ms-2">$69</span>
            </label>
          </div>
        </td>
        <td>
          <label class="d-flex justify-content-center align-items-center">
            <input class="form-check-input me-2 mt-0" type="checkbox" name="setupTesting">
            <span class="ms-2 fw-bold">$29</span>
          </label>
        </td>
      `;
      tableBody.appendChild(row);
    });
  }

  toggleBtn.addEventListener("click", () => {
    expanded = !expanded;
    renderProviders();
  });

  document.getElementById("addMoreBtn").addEventListener("click", () => {
    document.getElementById("emailProviderContainer").style.display = "flex";
    document.getElementById("toggleBtnWrapper").style.display = "flex";
    document.getElementById("addMoreWrapper").style.display = "none";
  });

  renderProviders();
});

function NumberIncrement(id) {
  console.log("id", id);

  document.getElementById(id).stepUp();
}

function NumberDecrement(id) {
  console.log("id", id);

  const ele = document.getElementById(id);
  if (ele.value > 1) {
    ele.stepDown();
  }
}

function GetPackageType(packagename) {
  packageType = packagename;
  console.log("packagename", packagename);
  deliveryTime = null;
  GetDeliveryTimeContent();
  getDeliveryTimeList();
}

function selectLayout(id) {
  selectedLayoutId = id;
  // renderLayoutOptions();
}

function GetDeliveryTimeContent() {
  // if (packageType == "only-coding") {
  //   document.getElementById("only-coding-delivery-time-content").style.display =
  //     "flex";
  //   document.getElementById(
  //     "coding-design-delivery-time-content"
  //   ).style.display = "none";
  // } else {
  //   document.getElementById("only-coding-delivery-time-content").style.display =
  //     "none";
  //   document.getElementById(
  //     "coding-design-delivery-time-content"
  //   ).style.display = "flex";
  // }
}

function GetAdaptationsOptionContent() {
  adaptationsOption1 = document.getElementById(
    "adaptations-option-1-content"
  ).checked;
  adaptationsOption2 = document.getElementById(
    "adaptations-option-2-content"
  ).checked;

  console.log("adaptationsOption1", adaptationsOption1);
  console.log("adaptationsOption2", adaptationsOption2);
}

function setDeliveryTime(id) {
  deliveryTime = id;
  getDeliveryTimeList(); // Re-render the list with updated active class
}

function getDeliveryTimeList() {
  const container = document.getElementById("only-coding-delivery-time-list");

  if (!container) return;

  const dataList =
    packageType === "only-coding"
      ? deliveryTimeDataForOnlyCoding
      : deliveryTimeDataForCodingDesign;

  container.innerHTML = dataList
    .map((item, index) => {
      const isActive = deliveryTime ? deliveryTime === item.id : index === 0;

      return `
        <div class="delivery-time-option ${
          isActive ? "active" : ""
        }" onclick="setDeliveryTime('${item.id}')">
          <p class="d-flex flex-column align-items-center time-box-content ${
            isActive ? "active-time-round" : ""
          }">
            <span class="time">${item.value}</span>
            <small>${packageType === "only-coding" ? "hrs" : "days"}</small>
          </p>
          <div class="mt-2">${item.price}</div>
        </div>`;
    })
    .join("");

  // Set default delivery time if not yet selected
  if (!deliveryTime && dataList.length > 0) {
    deliveryTime = dataList[0].id;
  }
}

// function renderLayoutOptions() {
//   const container = document.getElementById("layout-options-container");

//   container.innerHTML = layoutOptions
//     .map((item) => {
//       const isSelected = item.id === selectedLayoutId;
//       return `
//         <div class="layout-option ${isSelected ? "selected" : ""}" onclick="selectLayout('${item.id}')">
//           <img src="${item.image}" alt="${item.label}">
//           ${item.label} - $${item.price}
//           <div class="check-circle">
//             <i class="bi bi-check2"></i>
//           </div>
//         </div>
//       `;
//     })
//     .join("");
// }

GetDeliveryTimeContent();
getDeliveryTimeList();
// renderLayoutOptions();

let selectedActiveTime = null;

const onlyCodingDeliveryOptions = [
  { hours: 72, price: "$59" },
  { hours: 48, price: "$69" },
  { hours: 24, price: "$99" },
  { hours: 12, price: "$119" },
  { hours: 8, price: "$139" },
];

const codingDesignDeliveryOptions = [
  { days: 6, price: "$159" },
  { days: 5, price: "$189" },
  { days: 4, price: "$239" },
  { days: 12, price: "$279" },
  { days: 8, price: "$299" },
];

const container = document.getElementById("deliveryOptionsContainer");
const container2 = document.getElementById("deliveryOptionsContainer-2");

// Render onlyCoding options
onlyCodingDeliveryOptions.forEach((option, index) => {
  const div = document.createElement("div");
  div.className = "delivery-time-option" + (index === 0 ? " active" : "");

  div.innerHTML = `
    <p class="d-flex flex-column align-items-center time-box-content time-round ${
      index === 0 ? "active-time-round" : ""
    }">
      <span class="time">${option.hours}</span>
      <small>hrs</small>
    </p>
    <div class="mt-2">${option.price}</div>
  `;

  div.addEventListener("click", () => {
    setActiveItem(container, div);
    selectedActiveTime = { hours: option.hours, price: option.price };
    console.log("Selected:", selectedActiveTime);
  });

  container.appendChild(div);
});

// Render codingDesign options
codingDesignDeliveryOptions.forEach((option, index) => {
  const div = document.createElement("div");
  div.className = "delivery-time-option" + (index === 0 ? " active" : "");

  div.innerHTML = `
    <p class="d-flex flex-column align-items-center time-box-content time-round ${
      index === 0 ? "active-time-round" : ""
    }">
      <span class="time">${option.days}</span>
      <small>days</small>
    </p>
    <div class="mt-2">${option.price}</div>
  `;

  div.addEventListener("click", () => {
    setActiveItem(container2, div);
    selectedActiveTime = { days: option.days, price: option.price };
  });

  container2.appendChild(div);
});

// Helper function to toggle active class
function setActiveItem(parent, activeDiv) {
  parent.querySelectorAll(".delivery-time-option").forEach((el) => {
    el.classList.remove("active");
    el.querySelector(".time-box-content")?.classList.remove(
      "active-time-round"
    );
  });

  activeDiv.classList.add("active");
  activeDiv
    .querySelector(".time-box-content")
    ?.classList.add("active-time-round");
}

const layouts = [
  {
    name: "Responsive",
    price: 35,
    selected: true,
    svgs: [
      `  <svg width="38" height="34" viewBox="0 0 38 34" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                            </svg>`,
      `<svg width="38" height="34" viewBox="0 0 38 34" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                                </svg>`,
    ],
  },
  {
    name: "Scalable",
    price: 35,
    selected: false,
    svgs: [
      `<svg width="43" height="35" viewBox="0 0 43 35" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                            </svg>`,
      `<svg width="43" height="35" viewBox="0 0 43 35" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                                </svg>`,
    ],
  },
  {
    name: "Fixed",
    price: 0,
    selected: false,
    svgs: [
      `<svg width="38" height="34" viewBox="0 0 38 34" fill="none" xmlns="http://www.w3.org/2000/svg">
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
</svg>`,
      `<svg width="38" height="34" viewBox="0 0 38 34" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_874_10269)">
<g clip-path="url(#clip1_874_10269)">
<path d="M34.48 0H3.52C1.58 0 0 1.58 0 3.52V23.22C0 25.16 1.58 26.74 3.52 26.74H34.48C36.42 26.74 38 25.16 38 23.22V3.52C38 1.58 36.42 0 34.48 0ZM3.52 1.41H34.48C35.64 1.41 36.59 2.36 36.59 3.52V19.7H1.41V3.52C1.41 2.35 2.35 1.41 3.52 1.41ZM34.48 25.33H3.52C2.36 25.33 1.41 24.38 1.41 23.22V21.11H36.6V23.22C36.5976 23.7806 36.3732 24.3174 35.9758 24.7129C35.5785 25.1084 35.0406 25.3303 34.48 25.33Z" fill="white"/>
<path d="M11.9609 31.7891H26.0509V33.1991H11.9609V31.7891Z" fill="white"/>
<path d="M18.3008 26.2109H19.7108V32.9109H18.3008V26.2109Z" fill="white"/>
<path d="M4.86914 4.88281L8.46914 8.49281Z" fill="white"/>
<path d="M4.86914 4.88281L8.46914 8.49281" stroke="white"/>
<path d="M4.60938 8.13281V4.63281H8.10937" fill="white"/>
<path d="M4.60938 8.13281V4.63281H8.10937" stroke="#231F20"/>
<path d="M32.8402 4.88281L29.2402 8.49281Z" fill="white"/>
<path d="M32.8402 4.88281L29.2402 8.49281" stroke="white"/>
<path d="M33.0898 8.13281V4.63281H29.5898" fill="white"/>
<path d="M33.0898 8.13281V4.63281H29.5898" stroke="#231F20"/>
<path d="M4.86914 16.3891L8.46914 12.7891Z" fill="white"/>
<path d="M4.86914 16.3891L8.46914 12.7891" stroke="white"/>
<path d="M4.60938 13.1484V16.6484H8.10937" fill="white"/>
<path d="M4.60938 13.1484V16.6484H8.10937" stroke="#231F20"/>
<path d="M32.8402 16.3891L29.2402 12.7891Z" fill="white"/>
<path d="M32.8402 16.3891L29.2402 12.7891" stroke="white"/>
<path d="M33.0898 13.1484V16.6484H29.5898" fill="white"/>
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
</svg>`,
    ],
  },
];

const layoutContainer = document.getElementById("layoutContainer");

function renderLayouts() {
  layoutContainer.innerHTML = ""; // Clear existing content

  layouts.forEach((layout, index) => {
    const div = document.createElement("div");
    div.className = `layout-option ${layout.selected ? "selected" : ""}`;

    // Initial SVG based on selection
    let currentSvg = layout.selected ? layout.svgs[1] : layout.svgs[0];

    div.innerHTML = `
      <div class="svg-wrapper">${currentSvg}</div>
      ${layout.name} - $${layout.price}
      <div class="check-circle"><i class="bi bi-check2"></i></div>
    `;

    // Click event
    div.addEventListener("click", () => {
      layouts.forEach((l, i) => {
        l.selected = i === index;
      });
      renderLayouts(); // re-render to reflect selection
    });

    // Hover events only if not selected
    if (!layout.selected) {
      div.addEventListener("mouseenter", () => {
        const svgWrapper = div.querySelector(".svg-wrapper");
        svgWrapper.innerHTML = layout.svgs[1]; // Hover state SVG
      });

      div.addEventListener("mouseleave", () => {
        const svgWrapper = div.querySelector(".svg-wrapper");
        svgWrapper.innerHTML = layout.svgs[0]; // Normal state SVG
      });
    }

    layoutContainer.appendChild(div);
  });
}

renderLayouts(); // Initial render
