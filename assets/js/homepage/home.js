// fetch("../../components/header/header.html")
//   .then((response) => response.text())
//   .then((html) => {
//     loadContactUs(html, "home-header");
//   })
//   .catch((error) => {
//     console.error("Error loading HTML:", error);
//   });

// fetch("../../components/home-hero/homehero.html")
//   .then((response) => response.text())
//   .then((html) => {
//     loadContactUs(html, "home-hero-section");
//   })
//   .catch((error) => {
//     console.error("Error loading HTML:", error);
//   });

// fetch("../../components/potential/potential.html")
//   .then((response) => response.text())
//   .then((html) => {
//     loadContactUs(html, "home-potential");
//   })
//   .catch((error) => {
//     console.error("Error loading HTML:", error);
//   });

// home-elevate-business
// fetch("../../components/elevatebusiness/elevatebusiness.html")
// .then((response) => response.text())
// .then((html) => {
//   loadContactUs(html, "home-elevate-business");
// })
// .catch((error) => {
//   console.error("Error loading HTML:", error);
// });

// fetch("../../components/transformative/transformative.html")
//   .then((response) => response.text())
//   .then((html) => {
//     loadContactUs(html, "home-transformative");
//   })
//   .catch((error) => {
//     console.error("Error loading HTML:", error);
//   });

fetch("/components/slider-2/index.html")
  .then((response) => response.text())
  .then((html) => {
    loadContactUs(html, "home-advanced-features");
  })
  .catch((error) => {
    console.error("Error loading HTML:", error);
  });

// fetch("../../components/contact/index.html")
//   .then((response) => response.text())
//   .then((html) => {
//     loadContactUs(html, "home-contact-us");
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
    const script = document.createElement("script");
    script.text = code;
    document.body.appendChild(script);
  } catch (error) {
    console.error("Error loading script:", error);
  }
}

// Load your script files
loadScript("/components/slider-2/script.js");