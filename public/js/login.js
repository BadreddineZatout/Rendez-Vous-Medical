"use strict";
var phoneInput = document.querySelector("input#phone");
var passwordInput = document.querySelector("input#password");
var loginForm = document.querySelector(".login-form");
var loginSubmit = document.querySelector(".login-form .btn");
var phoneCheck = false;
var passwordCheck = false;
phoneInput.addEventListener("keyup", function () {
    if (validation.validate(phoneInput, validation.num)) {
        phoneCheck = true;
    }
    else {
        phoneCheck = false;
    }
});
passwordInput.addEventListener("keyup", function () {
    if (validation.validate(passwordInput, validation.pwd)) {
        passwordCheck = true;
    }
    else {
        passwordCheck = false;
    }
});
// loginSubmit.addEventListener("click", function (e) {
//     e.preventDefault();
//     if (passwordCheck == true && phoneCheck == true) {
//         loginForm.action = "/login";
//         loginForm.method = "POST";
//         loginForm.submit();
//     }
// });
