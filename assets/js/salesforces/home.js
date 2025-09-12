// fetch("../../components/header/header.html")
//   .then((response) => response.text())
//   .then((html) => {
//     loadContactUs(html, "home-header");
//   })
//   .catch((error) => {
//     console.error("Error loading HTML:", error);
//   });

//   fetch("../../components/salseforsesconclution/salseforsesconclution.html")
//   .then((response) => response.text())
//   .then((html) => {
//     loadContactUs(html, "salseforses-conclution");
//   })
//   .catch((error) => {
//     console.error("Error loading HTML:", error);
//   });

// fetch("../../components/salseforsesheader/salseforsesheader.html")
//   .then((response) => response.text())
//   .then((html) => {
//     loadContactUs(html, "salseforses-header");
//   })
//   .catch((error) => {
//     console.error("Error loading HTML:", error);
//   });

// fetch("../../components/salseforcebusinespotential/salseforcebusinespotential.html")
//   .then((response) => response.text())
//   .then((html) => {
//     loadContactUs(html, "salseforce-businespotential");
//   })
//   .catch((error) => {
//     console.error("Error loading HTML:", error);
//   });

fetch("../../components/salesforceconclusionslider/salesforceconclusionslider.html")
  .then((response) => response.text())
  .then((html) => {
    loadContactUs(html, "salesforce-conclusionslider");
  })
  .catch((error) => {
    console.error("Error loading HTML:", error);
  });


// fetch("../../components/salseforseservices/salseforseservices.html")
//   .then((response) => response.text())
//   .then((html) => {
//     loadContactUs(html, "salsefor-seservices");
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
  // .then((response) => response.text())
  // .then((html) => {
  //   loadContactUs(html, "shopify-voicethat");
  // })
  // .catch((error) => {
  //   console.error("Error loading HTML:", error);
  // });

  
// fetch("../../components/frequentlyaskquestion/frequentlyaskquestion.html")
//   .then((response) => response.text())
//   .then((html) => {
//     loadContactUs(html, "frequently-ask-question");
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
    const script = document.createElement('script');
    script.text = code;
    document.body.appendChild(script);
  } catch (error) {
    console.error("Error loading script:", error);
  }
}

// Load your script files
loadScript("/components/salesforceconclusionslider/salesforceconclusionslider.js");
loadScript("../../../components/digitalmarketingcustomer/digitalmarketingcustomer.js ");
loadScript("../../components/slider/script.js");