<?php include 'header.php' ?>

<title>Contact Us</title>
<meta name="description" content="Contact AS Technical Solutions GmbH via our secure contact form for inquiries about our products and services." />
<meta name="keywords" content="contact, AS Technical Solutions, contact form, butcher machines, meat processing" />

<br />

<!-- Contact form -->
<div class="contact-form">
    <div id="form-container">
        <a id="a9eee32f24869b4478b14b5e497e57a0" href="https://www.gratis-kontaktformular.de/r22318-vergleich" target="_blank">Cost-effective at www.gratis-kontaktformular.de/ here</a>
        <script src="https://www.gratis-kontaktformular.de/formular2.php?i=a9eee32f24869b4478b14b5e497e57a0" type="text/javascript"></script>
    </div>
</div>

<script>
    // Function to translate the form
    function translateForm() {
        console.log("Attempting to translate form...");

        // Translate the heading
        const heading = document.querySelector('#form-container h2');
        if (heading && heading.textContent.trim() === 'Schreiben Sie uns Ihr Anliegen') {
            heading.textContent = 'Send Us Your Inquiry';
            console.log("Heading translated to 'Send Us Your Inquiry'");
        } else {
            console.log("Heading not found or already translated:", heading ? heading.textContent : "No heading found");
        }

        // Translate form labels
        const labels = document.querySelectorAll('#form-container label');
        labels.forEach(label => {
            const labelText = label.textContent.trim();
            if (labelText === 'Anrede:') {
                label.textContent = 'Salutation:';
                console.log("Label 'Anrede:' translated to 'Salutation:'");
            }
            if (labelText === 'Vorname:') {
                label.textContent = 'First Name:';
                console.log("Label 'Vorname:' translated to 'First Name:'");
            }
            if (labelText === 'Nachname:') {
                label.textContent = 'Last Name:';
                console.log("Label 'Nachname:' translated to 'Last Name:'");
            }
            if (labelText === 'Strasse:') {
                label.textContent = 'Street:';
                console.log("Label 'Strasse:' translated to 'Street:'");
            }
            if (labelText === 'Nr.:') {
                label.textContent = 'No.:';
                console.log("Label 'Nr.:' translated to 'No.:'");
            }
            if (labelText === 'PLZ:') {
                label.textContent = 'Postal Code:';
                console.log("Label 'PLZ:' translated to 'Postal Code:'");
            }
            if (labelText === 'Ort:') {
                label.textContent = 'City:';
                console.log("Label 'Ort:' translated to 'City:'");
            }
            if (labelText === 'E-Mail:*') {
                label.textContent = 'Email:*';
                console.log("Label 'E-Mail:*' translated to 'Email:*'");
            }
            if (labelText === 'Telefon:') {
                label.textContent = 'Phone:';
                console.log("Label 'Telefon:' translated to 'Phone:'");
            }
            if (labelText === 'Nachricht:*') {
                label.textContent = 'Message:*';
                console.log("Label 'Nachricht:*' translated to 'Message:*'");
            }
        });

        // Translate dropdown options (e.g., "Herr" to "Mr.")
        const salutationSelect = document.querySelector('#form-container select');
        if (salutationSelect) {
            const options = salutationSelect.querySelectorAll('option');
            options.forEach(option => {
                if (option.textContent === 'Herr') {
                    option.textContent = 'Mr.';
                    console.log("Option 'Herr' translated to 'Mr.'");
                }
                if (option.textContent === 'Frau') {
                    option.textContent = 'Ms.';
                    console.log("Option 'Frau' translated to 'Ms.'");
                }
            });
        } else {
            console.log("Salutation dropdown not found");
        }

        // Translate the privacy notice
        const privacyNotice = document.querySelector('#form-container p');
        if (privacyNotice && privacyNotice.textContent.includes('Die mit * gekennzeichneten Felder müssen ausgefüllt werden')) {
            privacyNotice.innerHTML = 'Fields marked with * are mandatory. We take data protection very seriously and handle your data with care. Read the <a href="privacy-policy.php">privacy policy</a> of this contact form.';
            console.log("Privacy notice translated");
        }

        // Translate the submit button
        const submitButton = document.querySelector('#form-container input[type="submit"]');
        if (submitButton && submitButton.value === 'Senden') {
            submitButton.value = 'Send';
            console.log("Submit button translated to 'Send'");
        }
    }

    // Use MutationObserver to watch for changes in the DOM
    const observer = new MutationObserver((mutations, observer) => {
        const formContainer = document.querySelector('#form-container');
        mutations.forEach(mutation => {
            if (mutation.addedNodes.length) {
                const form = formContainer.querySelector('form');
                if (form) {
                    console.log("Form detected, applying translations...");
                    translateForm();
                    observer.disconnect(); // Stop observing once the form is translated
                }
            }
        });
    });

    // Start observing the form container for changes
    const formContainer = document.querySelector('#form-container');
    if (formContainer) {
        observer.observe(formContainer, {
            childList: true,
            subtree: true
        });
    } else {
        console.error("Form container not found");
    }

    // Fallback: Retry translation after 5 seconds in case the form loads very slowly
    setTimeout(() => {
        console.log("Retrying translation after 5 seconds...");
        translateForm();
    }, 5000);
</script>

<style>
    .contact-form {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        color: #fff;
        font-family: Arial, sans-serif;
    }

    .contact-form h2 {
        color: #0a94c7;
        text-align: center;
        margin-bottom: 20px;
    }

    .contact-form label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .contact-form input,
    .contact-form select,
    .contact-form textarea {
        width: 100%;
        padding: 8px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .contact-form input[type="submit"] {
        background-color: #0b0bcf;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .contact-form input[type="submit"]:hover {
        background-color: #0a94c7;
    }

    .contact-form p {
        font-size: 14px;
        margin-top: 10px;
        text-align: center;
    }

    .contact-form a {
        color: #0a94c7;
        text-decoration: none;
    }

    .contact-form a:hover {
        text-decoration: underline;
    }
</style>

<?php include 'footer.php' ?>