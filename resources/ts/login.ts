const phoneInput = document.querySelector("input#phone");
const passwordInput = document.querySelector("input#password");
const loginForm = document.querySelector(".login-form");
const loginSubmit = document.querySelector(".login-form .btn");
var phoneCheck: boolean = false;
var passwordCheck: boolean = false;

phoneInput.addEventListener("keyup", () => {
    if (validation.validate(phoneInput, validation.num)) {
        phoneCheck = true;
    } else {
        phoneCheck = false;
    }
});
passwordInput.addEventListener("keyup", () => {
    if (validation.validate(passwordInput, validation.pwd)) {
        passwordCheck = true;
    } else {
        passwordCheck = false;
    }
});

loginSubmit.addEventListener("click", (e) => {
    e.preventDefault();
    if (passwordCheck == true && phoneCheck == true) {
        loginForm.action = "/login";
        loginForm.method = "POST";
        loginForm.submit();
    }
});
