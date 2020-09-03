const specialite = document.getElementById("specialitechoice");
window.addEventListener("DOMContentLoaded", () => {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "/specget", true);
    xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded');
    xhr.addEventListener('load', () => {
        let results = JSON.parse(xhr.responseText);
        results.forEach(spec => {
            let li = document.createElement('option');
            li.innerText = spec.NomSpecialite;
            li.value = spec.id;
            specialite.appendChild(li);
        });
    });
    xhr.send();
});
specialite.addEventListener("change", ()=>{
    document.getElementById("s").remove();
});