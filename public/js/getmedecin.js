"use strict";
var chercher = document.querySelector("#chercher");
var ListMed = document.querySelector("#ListMed");
var MapMed = document.querySelector("#MapMed  ");
chercher.addEventListener("click", function () {
    var s = document.querySelector("#specialitechoice").value;
    var w = document.querySelector("#wilayachoice").value;
    var c = document.querySelector("#communechoice").value;
    get_med(s, w, c);
});
// filter.addEventListener("click", () => {
//     let s = document.querySelector("#specialitechoice").value;
//     let w = document.querySelector("#wilayachoice").value;
//     let c = document.querySelector("#communechoice").value;
//     // med.innerText = "";
//     if (filter.checked) get_med(s, w, 0);
//     else get_med(s, w, c);
// });
function get_med(s, w, c) {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "/medget/" + s + "/" + w + "/" + c, true);
    xhr.setRequestHeader("content-type", "application/x-www-form-urlencoded");
    xhr.addEventListener("load", function () {
        // let results = JSON.parse(xhr.responseText);
        MapMed.classList.remove("display-none");
        ListMed.classList.remove("display-none");
        results.forEach(function (m) {
            var card = new MedCard(1, "./images/doctor.png", "tesllv", "testt", "0666223355", "batna", "batna", "Cabine B");
            ListMed.appendChild(card);
            // row.addEventListener("click", () => {
            //     let lat = m.latitude;
            //     let lng = m.longitude;
            //     changeLocation(lat, lng);
            // });
        });
    });
    xhr.send();
}
