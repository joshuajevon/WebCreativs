function subscribe(e) {
    e.preventDefault();

    const inputEmail = $("#subscribe-email");
    let valueEmail = inputEmail.val();
    const subscribeValidationMessage = $("#subscribe-validation-message");

    let isEmailValid = false;

    const regexEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

    subscribeValidationMessage.text("");

    // Check if email is empty
    if (valueEmail === "") {
        subscribeValidationMessage
            .text("Email cannot be empty")
            .css("color", "rgb(153, 27, 27)");
        isEmailValid = false;
    } else {
        // check if email is valid format
        if (regexEmail.test(valueEmail)) {
            // Email is valid
            subscribeValidationMessage.text("");
            isEmailValid = true;
        } else {
            // Email is not valid
            subscribeValidationMessage
                .text("Email is not valid")
                .css("color", "rgb(153, 27, 27)");
            isEmailValid = false;
        }
    }

    if (isEmailValid) {
        subscribeValidationMessage
            .html(
                "<svg class='animate-spin mr-3 h-5 w-5 text-custom-light-green' xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24'><circle class='opacity-25' cx='12' cy='12' r='10' stroke='currentColor' stroke-width='4'></circle><path class='opacity-75' fill='currentColor' d='M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z'></path></svg> Subscribing..."
            )
            .css("color", "#6f7748");

        $("#subscribe-submit-button").addClass(
            "opacity-50 pointer-events-none"
        );

        const formData = $("#form-subscribe").serialize(); // Serialize the form data

        $.ajax({
            type: "POST",
            url: "/store-email", // Update this with the correct route
            data: formData,
            success: function (response) {
                // Handle a successful response (e.g., show a success message)
                if (response.status === "success") {
                    // Clear form fields if needed
                    $("#form-subscribe")[0].reset();

                    // Display a success message to the user
                    subscribeValidationMessage
                        .text(response.message)
                        .css("color", "#6f7748");

                    // Change submit button to default
                    $("#subscribe-submit-button").removeClass(
                        "opacity-50 pointer-events-none"
                    );
                } else if (response.status === "duplicate") {
                    // Display a duplicate message to the user
                    subscribeValidationMessage
                        .text(response.message)
                        .css("color", "rgb(153, 27, 27)");

                    // Change submit button to default
                    $("#subscribe-submit-button").removeClass(
                        "opacity-50 pointer-events-none"
                    );
                } else {
                    // Handle errors if necessary
                    subscribeValidationMessage
                        .text(
                            "An error occurred while submitting the form, please try again."
                        )
                        .css("color", "rgb(153, 27, 27)");

                    // Change submit button to default
                    $("#subscribe-submit-button").removeClass(
                        "opacity-50 pointer-events-none"
                    );
                }
            },
            error: function () {
                // Handle AJAX errors if necessary
                subscribeValidationMessage
                    .text(
                        "An error occurred while submitting the form, please try again."
                    )
                    .css("color", "rgb(153, 27, 27)");

                // Change submit button to default
                $("#subscribe-submit-button").removeClass(
                    "opacity-50 pointer-events-none"
                );
            },
        });
    }
}
