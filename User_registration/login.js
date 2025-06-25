document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("login-form");
    const usernameInput = document.getElementById("username");
    const passwordInput = document.getElementById("password");
    const rememberMeCheckbox = document.getElementById("remember-me");
    const usernameError = document.getElementById("username-error");
    const passwordError = document.getElementById("password-error");
    const submitButton = document.querySelector(".login-btn");

    // Validate form inputs
    function validateForm(event) {
        let isValid = true;

        // Clear previous errors
        usernameError.textContent = "";
        passwordError.textContent = "";

        if (usernameInput.value.trim() === "") {
            usernameError.textContent = "Username cannot be empty.";
            isValid = false;
        }

        if (passwordInput.value.trim() === "") {
            passwordError.textContent = "Password cannot be empty.";
            isValid = false;
        }

        if (!isValid) {
            event.preventDefault();
        }

        return isValid;
    }

    // Handle Remember Me functionality
    function handleRememberMe() {
        if (rememberMeCheckbox.checked) {
            localStorage.setItem("rememberedUsername", usernameInput.value);
        } else {
            localStorage.removeItem("rememberedUsername");
        }
    }

    // Pre-fill the username field
    const rememberedUsername = localStorage.getItem("rememberedUsername");
    if (rememberedUsername) {
        usernameInput.value = rememberedUsername;
        rememberMeCheckbox.checked = true;
    }
});
