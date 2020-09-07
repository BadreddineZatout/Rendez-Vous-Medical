const med = document.querySelector("#medbody");
const chercher = document.querySelector("#chercher");

chercher.addEventListener("click", () => {
    med.innerText = "";
    let s = document.querySelector("#specialitechoice").value;
    let w = document.querySelector("#wilayachoice").value;
    let c = document.querySelector("#communechoice").value;
    let xhr = new XMLHttpRequest();
    xhr.open("GET", `/medget/${s}/${w}/${c}`, true);
    xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded');
    xhr.addEventListener('load', () => {
        let results = JSON.parse(xhr.responseText);
        results.forEach(m => {
            let row = document.createElement('tr');
            med.appendChild(row);
            let nom = document.createElement('td');
            let prenom = document.createElement('td');
            let phone = document.createElement('td');
            let wilaya = document.createElement('td');
            let commune = document.createElement('td');
            let adresse = document.createElement('td');
            let cabinet = document.createElement('td');
            nom.innerText = m.nom;
            prenom.innerText = m.prenom;
            phone.innerText = m.phone;
            wilaya.innerText = m.wilaya;
            commune.innerText = m.NomCommune;
            adresse.innerText = m.adresse;
            cabinet.innerText = m.cabinet;
            row.appendChild(nom);
            row.appendChild(prenom);
            row.appendChild(phone);
            row.appendChild(wilaya);
            row.appendChild(commune);
            row.appendChild(adresse);
            row.appendChild(cabinet);
        });
    });
    xhr.send();
});