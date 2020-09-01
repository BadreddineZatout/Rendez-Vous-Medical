// const { parseJSON } = require("jquery");

const wilaya = document.getElementById("wilayachoice");
const wilayaList = document.getElementById("wilayalist");
wilaya.addEventListener("click", () => {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "/wilayaget", true);
    xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded');
    xhr.addEventListener('load', () => {
        let results = JSON.parse(xhr.responseText);
        results.forEach(wilaya => {
            let li = document.createElement('a');
            li.innerText = wilaya.NomWilaya;
            li.classList.add("dropdown-item");
            wilayaList.appendChild(li);
        });
    });

    xhr.send();
});