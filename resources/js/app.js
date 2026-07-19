resources / js / app.js;

import "./bootstrap";
import "bootstrap";
import "bootstrap-icons/font/bootstrap-icons.css";
import "./dashboard";

document.addEventListener("DOMContentLoaded", () => {
    const password = document.getElementById("password");
    const toggle = document.getElementById("togglePassword");

    if (password && toggle) {
        toggle.addEventListener("click", () => {
            const icon = toggle.querySelector("i");

            if (password.type === "password") {
                password.type = "text";

                icon.classList.replace("bi-eye", "bi-eye-slash");
            } else {
                password.type = "password";

                icon.classList.replace("bi-eye-slash", "bi-eye");
            }
        });
    }
});
