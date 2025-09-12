// fetch("../../components/header/header.html")
//   .then((response) => response.text())
//   .then((html) => {
//     loadContactUs(html, "home-header");
//   })
//   .catch((error) => {
//     console.error("Error loading HTML:", error);
//   });

// fetch("../../components/shopifyheader/shopifyheader.html")
//   .then((response) => response.text())
//   .then((html) => {
//     loadContactUs(html, "shopify-header");
//   })
//   .catch((error) => {
//     console.error("Error loading HTML:", error);
//   });

// fetch("../../components/shopifysolution/shopifysolution.html")
//   .then((response) => response.text())
//   .then((html) => {
//     loadContactUs(html, "shopify-solution");
//   })
//   .catch((error) => {
//     console.error("Error loading HTML:", error);
//   });

// fetch("../../components/shopifyservices/shopifyservices.html")
//   .then((response) => response.text())
//   .then((html) => {
//     loadContactUs(html, "shopify-services");
//   })
//   .catch((error) => {
//     console.error("Error loading HTML:", error);
//   });

// fetch("../../components/shopifymigrate/shopifymigrate.html")
//   .then((response) => response.text())
//   .then((html) => {
//     loadContactUs(html, "shopify-migrate");
//   })
//   .catch((error) => {
//     console.error("Error loading HTML:", error);
//   });

// fetch("../../components/shopifydevelopment/shopifydevelopment.html")
//   .then((response) => response.text())
//   .then((html) => {
//     loadContactUs(html, "shopify-devlopment");
//   })
//   .catch((error) => {
//     console.error("Error loading HTML:", error);
//   });

fetch("../../components/slider/index.html")
  .then((response) => response.text())
  .then((html) => {
    loadContactUs(html, "digitalmarketing-slider1");
  })
  .catch((error) => {
    console.error("Error loading HTML:", error);
  });

// fetch("../../components/shopifyvoicethat/shopifyvoicethat.html")
//   .then((response) => response.text())
//   .then((html) => {
//     loadContactUs(html, "shopify-voicethat");
//   })
//   .catch((error) => {
//     console.error("Error loading HTML:", error);
//   });

// fetch("../../components/frequentlyaskquestion/frequentlyaskquestion.html")
//   .then((response) => response.text())
//   .then((html) => {
//     loadContactUs(html, "frequently-ask-question");
//   })
//   .catch((error) => {
//     console.error("Error loading HTML:", error);
//   });

// fetch("../../components/contact/index.html")
//   .then((response) => response.text())
//   .then((html) => {
//     loadContactUs(html, "marketing-contact-us");
//   })
//   .catch((error) => {
//     console.error("Error loading HTML:", error);
//   });

// fetch("../../components/footer/footer.html")
//   .then((response) => response.text())
//   .then((html) => {
//     loadContactUs(html, "marketing-footer");
//   })
//   .catch((error) => {
//     console.error("Error loading HTML:", error);
//   });

function loadContactUs(html, id) {
  const mainElement = document.getElementById(id);
  if (html && mainElement) {
    mainElement.innerHTML = html;
  } else {
    console.error("Contact Us content is not loaded yet.");
  }
}

function loadScript(url) {
  return fetch(url)
    .then((response) => response.text())
    .then((code) => {
      const script = document.createElement("script");
      script.text = code;
      document.body.appendChild(script);
    })
    .catch((error) => {
      console.error("Error loading script:", error);
    });
}

// Load your script files
loadScript(
  "../../../components/digitalmarkatingcutomer/digitalmarkatingcustomer.js "
);
loadScript("../../components/slider/script.js");
