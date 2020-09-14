"use strict";
var MedCard = /** @class */ (function () {
    function MedCard(id, src, nom, prenom, numero, commune, address, cabine) {
        this.div_info = [];
        this.span_title = [];
        this.icon = [];
        this.span_data = [];
        this.card = document.createElement("div");
        this.card.classList.add("card", "select");
        this.input = document.createElement("input");
        this.input.type = "radio";
        this.input.name = "select";
        this.input.id = id;
        this.input.value = id;
        this.label = document.createElement("label");
        this.label.setAttribute("for", id);
        this.wrap = document.createElement("div");
        this.wrap.classList.add("wrap");
        this.avatar = document.createElement("img");
        this.avatar.classList.add("avatar");
        this.avatar.setAttribute("src", src);
        this.details = document.createElement("div");
        this.details.classList.add("details");
        this.btnSubmit = document.createElement("button");
        this.btnSubmit.classList.add("btnSubmit");
        this.btnSubmit.innerText = "Reserer un rendez-vouz";
        this.div_info[0] = document.createElement("div");
        this.div_info[0].classList.add("info");
        this.name = document.createElement("h2");
        this.name.innerText = nom + " " + prenom;
        this.div_info[1] = document.createElement("div");
        this.div_info[1].classList.add("info");
        this.span_title[0] = document.createElement("span");
        this.span_title[0].classList.add("title");
        this.icon[0] = document.createElement("i");
        this.icon[0].classList.add("fas", "fa-phone");
        this.span_data[0] = document.createElement("span");
        this.span_data[0].innerText = numero;
        this.div_info[2] = document.createElement("div");
        this.div_info[2].classList.add("info");
        this.span_title[1] = document.createElement("span");
        this.span_title[1].classList.add("title");
        this.icon[1] = document.createElement("i");
        this.icon[1].classList.add("fas", "fa-map-signs");
        this.span_data[1] = document.createElement("span");
        this.span_data[1].innerText = commune;
        this.div_info[3] = document.createElement("div");
        this.div_info[3].classList.add("info");
        this.span_title[2] = document.createElement("span");
        this.span_title[2].classList.add("title");
        this.icon[2] = document.createElement("i");
        this.icon[2].classList.add("fas", "fa-map-marker-alt");
        this.span_data[2] = document.createElement("span");
        this.span_data[2].innerText = address;
        this.div_info[4] = document.createElement("div");
        this.div_info[4].classList.add("info");
        this.span_title[3] = document.createElement("span");
        this.span_title[3].classList.add("title");
        this.icon[3] = document.createElement("i");
        this.icon[3].classList.add("fas", "fa-building");
        this.span_data[3] = document.createElement("span");
        this.span_data[3].innerText = cabine;
        for (var i = 0; i < 5; i++) {
            if (i == 0) {
                this.div_info[0].appendChild(this.name);
                continue;
            }
            this.span_title[i - 1].appendChild(this.icon[i - 1]);
            this.span_title[i - 1].appendChild(this.span_data[i - 1]);
            this.div_info[i].appendChild(this.span_title[i - 1]);
        }
        for (var j = 0; j < 5; j++) {
            this.details.appendChild(this.div_info[j]);
        }
        this.wrap.appendChild(this.avatar);
        this.wrap.appendChild(this.details);
        this.wrap.appendChild(this.btnSubmit);
        this.label.appendChild(this.wrap);
        this.card.appendChild(this.input);
        this.card.appendChild(this.label);
        return this.card;
    }
    return MedCard;
}());
