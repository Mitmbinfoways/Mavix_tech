
// ------------------------------------------------------------------------------------------------------------------
// fetch("../../components/header/header.html")
//     .then((response) => response.text())
//     .then((html) => {
//         loadContactForm(html, "digitalmarketing-nav");
//     })
//     .catch((error) => {
//         console.error("Error loading HTML:", error);
//     });

// fetch("../../components/contactusform/contactusform.html")
//     .then((response) => response.text())
//     .then((html) => {
//         loadContactForm(html, "contactus-form");
//     })
//     .catch((error) => {
//         console.error("Error loading HTML:", error);
//     });
// fetch("../../components/contactheader/contactheader.html")
//     .then((response) => response.text())
//     .then((html) => {
//         loadContactForm(html, "contact-header");
//     })
//     .catch((error) => {
//         console.error("Error loading HTML:", error);
//     });



// fetch("../../components/footer/footer.html")
//     .then((response) => response.text())
//     .then((html) => {
//         loadContactForm(html, "marketing-footer");
//     })
//     .catch((error) => {
//         console.error("Error loading HTML:", error);
//     });





function loadContactForm(html, id) {
    console.log("id", id);
    
    const mainElement = document.getElementById(id);
    if (html && mainElement) {
        mainElement.innerHTML = html;
    } else {
        console.error("Contact Us content is not loaded yet.");
    }
}


// ...existing code...

// Function to load and execute JavaScript
// function loadContact(url) {
//     return fetch(url)
//         .then(response => response.text())
//         .then(code => {
//             const script = document.createElement('script');
//             script.text = code;
//             document.body.appendChild(script);
//         })
//         .catch(error => {
//             console.error("Error loading script:", error);
//         });
// }

// Load your script files
// loadScript("../../../components/digitalmarkatingcutomer/digitalmarkatingcustomer.js ");
// loadScript("../../components/contactusform/contactusform.js");



