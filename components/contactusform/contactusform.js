
    document.addEventListener("DOMContentLoaded", function () {
        console.log("Contact Us form script loaded");
        setTimeout(function () {
            const form = document.getElementById("contactForm");
            if (!form) return; // Form not yet loaded

            form.addEventListener("submit", function (e) {
                e.preventDefault();

                let isValid = true;

                const fields = [
                    { id: "firstName", errorId: "firstNameError" },
                    { id: "lastName", errorId: "lastNameError" },
                    { id: "email", errorId: "emailError" },
                    { id: "phone", errorId: "phoneError" },
                    { id: "message", errorId: "messageError" },
                ];

                fields.forEach(({ id, errorId }) => {
                    const input = document.getElementById(id);
                    const error = document.getElementById(errorId);
                    if (input.value.trim() === "") {
                        error.classList.remove("d-none");
                        isValid = false;
                    } else {
                        error.classList.add("d-none");
                    }
                });

                const checkboxes = document.querySelectorAll('input[name="subject"]');
                const subjectError = document.getElementById("subjectError");
                const isAnyChecked = Array.from(checkboxes).some(cb => cb.checked);

                if (!isAnyChecked) {
                    subjectError.classList.remove("d-none");
                    isValid = false;
                } else {
                    subjectError.classList.add("d-none");
                }

                if (isValid) {
                    alert("Form submitted successfully!");
                    form.reset();

                    // Hide all errors after reset
                    fields.forEach(({ errorId }) => {
                        document.getElementById(errorId).classList.add("d-none");
                    });
                    subjectError.classList.add("d-none");
                }
            });
        }, 300); // 300ms delay, adjust as needed
    });
