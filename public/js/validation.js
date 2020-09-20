"use strict";
var validation = {
    name: /^[a-zA-Z]{3,}([ ][a-zA-Z]{3,})*$/,
    handle: /^[a-zA-Z]+[a-zA-Z0-9._-]*[a-zA-Z0-9]+$/,
    email: /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]+))$/,
    pwd: /^[a-zA-Z0-9!#@éè&çà%-\.\&\ù\_\$\^\*]{8,50}$/,
    num: /^(0)[567][0-9]{8}$/,
    validate: function (element, pattern) {
        if (pattern.test(element.value)) {
            element.style.borderColor = "green";
            return true;
        }
        else {
            if (element.value == "") {
                element.style.borderColor = "transparent";
                return false;
            }
            else {
                element.style.borderColor = "red";
                return false;
            }
        }
    },
};
