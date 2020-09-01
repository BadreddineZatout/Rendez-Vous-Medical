const specialite = document.getElementById("specialitechoice");
const specList = document.getElementById("speclist");
specialite.addEventListener("click", () => {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "/specget", true);
    xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded');
    xhr.addEventListener('load', () => {
        document.getElementById("speclist").innerHTML = "";
        let results = JSON.parse(xhr.responseText);
        results.forEach(spec => {
            let li = document.createElement('a');
            li.innerText = spec.NomSpecialite;
            li.classList.add("dropdown-item");
            li.addEventListener("click", function(){
                document.getElementById('specialitechoice').innerHTML = li.innerText;
            });
            specList.appendChild(li);
        });
    });
    xhr.send();
});