// function contactUs(e) {
//     e.preventDefault();

//     const inputName = $("#name");
//     let valueName = inputName.val();
//     const errorName = $("#error-name");

//     const inputEmail = $("#email");
//     let valueEmail = inputEmail.val();
//     const errorEmail = $("#error-email");

//     const inputSubject = $("#subject");
//     let valueSubject = inputSubject.val();
//     const errorSubject = $("#error-subject");

//     const inputMessage = $("#mail");
//     let valueMessage = inputMessage.val();
//     const errorMessage = $("#error-message");

//     const regexEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

//     let isNameValid = false;
//     let isEmailValid = false;
//     let isSubjectValid = false;
//     let isMessageValid = false;

//     // Check if name is empty
//     if (valueName === "") {
//         inputName.css("border-color", "#BB2825");
//         errorName.text("Name cannot be empty");
//         isNameValid = false;
//     } else {
//         inputName.css("border-color", "#6f7748");
//         errorName.text("");
//         isNameValid = true;
//     }

//     // Check if email is empty
//     if (valueEmail === "") {
//         inputEmail.css("border-color", "#BB2825");
//         errorEmail.text("Email cannot be empty");
//         isEmailValid = false;
//     } else {
//         // check if email is valid format
//         if (regexEmail.test(valueEmail)) {
//             // Email is valid
//             inputEmail.css("border-color", "#6f7748");
//             errorEmail.text("");
//             isEmailValid = true;
//         } else {
//             // Email is not valid
//             inputEmail.css("border-color", "#BB2825");
//             errorEmail.text("Email is not valid");
//             isEmailValid = false;
//         }
//     }

//     // check if subject is empty
//     if (valueSubject === "") {
//         inputSubject.css("border-color", "#BB2825");
//         errorSubject.text("Subject cannot be empty");
//         isSubjectValid = false;
//     } else {
//         inputSubject.css("border-color", "#6f7748");
//         errorSubject.text("");
//         isSubjectValid = true;
//     }

//     // check if message is empty
//     if (valueMessage === "") {
//         inputMessage.css("border-color", "#BB2825");
//         errorMessage.text("Message cannot be empty");
//         isMessageValid = false;
//     } else {
//         inputMessage.css("border-color", "#6f7748");
//         errorMessage.text("");
//         isMessageValid = true;
//     }

//     if (isNameValid && isEmailValid && isSubjectValid && isMessageValid) {
//         document.querySelector("#form-contact-us").submit();
//     }
// }

function contactUs(e) {
    e.preventDefault();

    const inputName = $("#name");
    let valueName = inputName.val();
    const errorName = $("#error-name");

    const inputEmail = $("#email");
    let valueEmail = inputEmail.val();
    const errorEmail = $("#error-email");

    const inputSubject = $("#subject");
    let valueSubject = inputSubject.val();
    const errorSubject = $("#error-subject");

    const inputMessage = $("#mail");
    let valueMessage = inputMessage.val();
    const errorMessage = $("#error-message");

    const regexEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

    let isNameValid = false;
    let isEmailValid = false;
    let isSubjectValid = false;
    let isMessageValid = false;

    // Check if name is empty
    if (valueName === "") {
        inputName.css("border-color", "#BB2825");
        errorName.text("Name cannot be empty");
        isNameValid = false;
    } else {
        inputName.css("border-color", "#6f7748");
        errorName.text("");
        isNameValid = true;
    }

    // Check if email is empty
    if (valueEmail === "") {
        inputEmail.css("border-color", "#BB2825");
        errorEmail.text("Email cannot be empty");
        isEmailValid = false;
    } else {
        // check if email is valid format
        if (regexEmail.test(valueEmail)) {
            // Email is valid
            inputEmail.css("border-color", "#6f7748");
            errorEmail.text("");
            isEmailValid = true;
        } else {
            // Email is not valid
            inputEmail.css("border-color", "#BB2825");
            errorEmail.text("Email is not valid");
            isEmailValid = false;
        }
    }

    // check if subject is empty
    if (valueSubject === "") {
        inputSubject.css("border-color", "#BB2825");
        errorSubject.text("Subject cannot be empty");
        isSubjectValid = false;
    } else {
        inputSubject.css("border-color", "#6f7748");
        errorSubject.text("");
        isSubjectValid = true;
    }

    // check if message is empty
    if (valueMessage === "") {
        inputMessage.css("border-color", "#BB2825");
        errorMessage.text("Message cannot be empty");
        isMessageValid = false;
    } else {
        inputMessage.css("border-color", "#6f7748");
        errorMessage.text("");
        isMessageValid = true;
    }

    if (isNameValid && isEmailValid && isSubjectValid && isMessageValid) {
        $("#contact-form-submit-button")
            .html(
                "<svg class='animate-spin -ml-1 mr-3 h-5 w-5 text-white' xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24'><circle class='opacity-25' cx='12' cy='12' r='10' stroke='currentColor' stroke-width='4'></circle><path class='opacity-75' fill='currentColor' d='M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z'></path></svg> Submitting"
            )
            .addClass("opacity-50 pointer-events-none");

        const formData = $("#form-contact-us").serialize(); // Serialize the form data

        $.ajax({
            type: "POST",
            url: "/contact", // Update this with the correct route
            data: formData,
            success: function (response) {
                // Handle a successful response (e.g., show a success message)
                if (response.success) {
                    // Clear form fields if needed
                    $("#form-contact-us")[0].reset();

                    // Display a success message to the user
                    $("#success-message").text(response.message);

                    // Change submit button to default
                    $("#contact-form-submit-button")
                        .html("Submit")
                        .removeClass("opacity-50 pointer-events-none");
                } else {
                    // Handle errors if necessary
                    $("#fail-message").text(
                        "An error occurred while submitting the form, please try again."
                    );

                    // Change submit button to default
                    $("#contact-form-submit-button")
                        .html("Submit")
                        .removeClass("opacity-50 pointer-events-none");
                }
            },
            error: function () {
                // Handle AJAX errors if necessary
                $("#fail-message").text(
                    "An error occurred while submitting the form, please try again."
                );

                // Change submit button to default
                $("#contact-form-submit-button")
                    .html("Submit")
                    .removeClass("opacity-50 pointer-events-none");
            },
        });
    }
}
