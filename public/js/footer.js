function subscribe(e) {
    e.preventDefault();

    const inputEmail = $("#subscribe-email");
    let valueEmail = inputEmail.val();
    const errorEmail = $("#error-subscribe");

    const regexEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

    let isEmailValid = false;

    // Check if email is empty
    if (valueEmail === "") {
        errorEmail.text("Email cannot be empty");
        isEmailValid = false;
    } else {
        // check if email is valid format
        if (regexEmail.test(valueEmail)) {
            // Email is valid
            errorEmail.text("");
            isEmailValid = true;
        } else {
            // Email is not valid
            errorEmail.text("Email is not valid");
            isEmailValid = false;
        }
    }

    if (isEmailValid) {
        // $("#form-subscribe").submit();
    }
}
