const med = document.querySelector("#medbody");
const chercher = document.querySelector("#chercher");
const filter = document.querySelector("#filtercommune");
var searchDiv = document.querySelector("#search");
searchDiv.style.display = "none";

chercher.addEventListener("click", () => {
    // med.innerText = "";
    let s = document.querySelector("#specialitechoice").value;
    let w = document.querySelector("#wilayachoice").value;
    let c = document.querySelector("#communechoice").value;
    if (filter.checked) get_med(s, w, 0);
    else get_med(s, w, c);
    if (s != 0 && w != 0) {
        searchDiv.style.display = "";
    } else alert("il faut choisir la specilalité et la wilaya");
});

filter.addEventListener("click", () => {
    let s = document.querySelector("#specialitechoice").value;
    let w = document.querySelector("#wilayachoice").value;
    let c = document.querySelector("#communechoice").value;
    // med.innerText = "";
    if (filter.checked) get_med(s, w, 0);
    else get_med(s, w, c);
});

function get_med(s, w, c) {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", `/medget/${s}/${w}/${c}`, true);
    xhr.setRequestHeader("content-type", "application/x-www-form-urlencoded");
    xhr.addEventListener("load", () => {
        // let results = JSON.parse(xhr.responseText);
        results.forEach((m) => {
            let card = new MedCard(
                1,
                "img.jpg",
                "zatout",
                "badro",
                "0657207206",
                "batna",
                "batna",
                "something"
            );
            document.getElementById("test").appendChild(card);

            // row.addEventListener("click", () => {
            //     let lat = m.latitude;
            //     let lng = m.longitude;
            //     changeLocation(lat, lng);
            // });
        });
    });
    xhr.send();
}
