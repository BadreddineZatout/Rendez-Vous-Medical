"use strict";
var chercher = document.querySelector("#chercher");
var ListMed = document.querySelector("#ListMed");
var MapMed = document.querySelector("#MapMed");
chercher.addEventListener("click", function () {
    var s = document.querySelector("#specialitechoice").value;
    var w = document.querySelector("#wilayachoice").value;
    var c = document.querySelector("#communechoice").value;
    ListMed.innerHTML = "";
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
        MapMed.classList.remove("display-none");
        ListMed.classList.remove("display-none");
        let results = JSON.parse(xhr.responseText);
        results.forEach(m => {
            if (m.sex == 'Masculin'){
                var card = new MedCard(m.id, "./images/doctor.png", m.nom, m.prenom, m.phone, m.NomCommune, m.adresse, m.cabinet);
            }else{
                var card = new MedCard(m.id, "./images/doctor.png", m.nom, m.prenom, m.phone, m.NomCommune, m.adresse, m.cabinet);
            }
            ListMed.appendChild(card);
            card.addEventListener("click", () => {
                let lat = m.latitude;
                let lng = m.longitude;
                changeLocation(lat, lng);
            });
        });
    });
    xhr.send();
}
