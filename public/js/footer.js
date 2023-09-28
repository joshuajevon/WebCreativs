function subscribe(e) {
    e.preventDefault();

    const inputEmail = $("#subscribe-email");
    let valueEmail = inputEmail.val();
    const failEmail = $("#subscribe-fail-message");
    const successEmail = $("#subscribe-success-message");

    const regexEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

    // Check if email is empty
    if (valueEmail === "") {
        failEmail.text("Email cannot be empty");
    } else {
        // check if email is valid format
        if (regexEmail.test(valueEmail)) {
            // Email is valid
            // Check for duplicate email
            (async () => {
                await fetch("/api/store-email", {
                    method: "POST",
                    body: JSON.stringify(valueEmail),
                    headers: {
                        "Content-type":
                            "application/json; image/png; charset=UTF-8",
                    },
                }).then((res) => {
                    res.json().then((data) => {
                        if (data.code == 200) {
                            failEmail.text("");
                            successEmail.text("Thanks for subscribing!");
                        } else if (data.code == 400) {
                            successEmail.text("");
                            failEmail.text("Email is already subscribed!");
                        }
                    });
                });
            })();

            failEmail.text("");
        } else {
            // Email is not valid
            failEmail.text("Email is not valid");
        }
    }
}
