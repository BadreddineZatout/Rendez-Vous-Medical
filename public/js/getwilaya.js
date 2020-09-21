const wil = document.getElementById("wilayachoice");
const comm = document.getElementById("communechoice");
var results;
window.addEventListener("DOMContentLoaded", () => {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "/wilayaget", true);
    xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded');
    xhr.addEventListener('load', () => {
        results = JSON.parse(xhr.responseText);
        results.forEach(wilaya => {
            let li = document.createElement('option');
            li.innerText = wilaya.NomWilaya;
            li.value = wilaya.CodeWilaya;
            wil.appendChild(li);
        });
    });
    xhr.send();
});

wil.addEventListener("change", () => {
    let code = wil.value;
    let xhr = new XMLHttpRequest();
    xhr.open("GET", `/communget=${code}`, true);
    xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded');
    xhr.addEventListener('load', () => {
        comm.innerHTML = "";
        let touscomm = document.createElement('option');
            touscomm.innerText = "Tous Les Commune";
            touscomm.value = 0;
            comm.appendChild(touscomm);
        results = JSON.parse(xhr.responseText);
        results.forEach(commun => {
            let li = document.createElement('option');
            li.innerText = commun.NomCommune;
            li.value = commun.id;
            comm.appendChild(li);
        });
    });
    xhr.send();
});