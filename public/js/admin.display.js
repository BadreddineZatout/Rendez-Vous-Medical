"use strict";
var TableMedecins = document.querySelector("#TableMedecins");
var TablePatients = document.querySelector("#TablePatients");
var SectionMedecins = document.querySelector("#SectionMedecins");
var SectionPatients = document.querySelector("#SectionPatients");
var BtnSectionMedecins = document.querySelector("#option1");
var BtnSectionPatients = document.querySelector("#option2");
BtnSectionMedecins.addEventListener("click", function () {
    SectionMedecins.classList.remove("display-none");
    SectionPatients.classList.add("display-none");
});
BtnSectionPatients.addEventListener("click", function () {
    SectionMedecins.classList.add("display-none");
    SectionPatients.classList.remove("display-none");
});
