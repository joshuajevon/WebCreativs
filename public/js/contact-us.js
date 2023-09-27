$(document).ready(function () {
    const redirected = sessionStorage.getItem("redirected"); // Get the 'redirected' value from session storage

    if (redirected === "false") {
        // Check if 'redirected' is set to 'false'
        $("html, body").animate(
            {
                scrollTop: $("#contact-form-section").offset().top,
            },
            1000
        );
    }
});

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

    const inputMessage = $("#message");
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
        inputName.css("border-color", "#BB2825");
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
            inputEmail.css("border-color", "black");
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
        inputSubject.css("border-color", "black");
        errorSubject.text("");
        isSubjectValid = true;
    }

    // check if message is empty
    if (valueMessage === "") {
        inputMessage.css("border-color", "#BB2825");
        errorMessage.text("Message cannot be empty");
        isMessageValid = false;
    } else {
        inputMessage.css("border-color", "black");
        errorMessage.text("");
        isMessageValid = true;
    }

    if (isNameValid && isEmailValid && isSubjectValid && isMessageValid) {
        document.querySelector("#form-contact-us").submit();
    }
}
