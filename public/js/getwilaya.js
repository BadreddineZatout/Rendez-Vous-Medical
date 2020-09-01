const wil = document.getElementById("wilayachoice");
const wilayaList = document.getElementById("wilayalist");
const comm = document.getElementById("communechoice");
const communeList = document.getElementById("communelist");
wilaya.addEventListener("click", () => {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "/wilayaget", true);
    xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded');
    xhr.addEventListener('load', () => {
        wilayaList.innerHTML = "";
        let results = JSON.parse(xhr.responseText);
        let result0 = results[0];
        result0.forEach(wilaya => {
            let li = document.createElement('a');
            li.innerText = wilaya.NomWilaya;
            li.classList.add("dropdown-item");
            li.addEventListener("click", function(){
                comm.innerHTML = "Commune";
                communeList.innerHTML = "";
                wil.innerHTML = li.innerText;
                let result1 = results[1];
                result1.forEach(commune =>{
                    if (commune.Wilaya == wilaya.CodeWilaya){
                        let item = document.createElement("a");
                        item.innerText = commune.NomCommune;
                        item.classList.add("dropdown-item");
                        item.addEventListener("click", function(){
                            comm.innerHTML = item.innerText;
                        });
                        communeList.appendChild(item);
                    }

                });
            });
            wilayaList.appendChild(li);
        });
    });
    xhr.send();
});

/*const wilaya = document.getElementById("wilayachoice");
const wilayaList = document.getElementById("wilayalist");
wilaya.addEventListener("click", () => {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "/wilayaget", true);
    xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded');
    xhr.addEventListener('load', () => {
        document.getElementById("wilayalist").innerHTML = "";
        let results = JSON.parse(xhr.responseText);
        results.forEach(wilaya => {
            let li = document.createElement('a');
            li.innerText = wilaya.NomWilaya;
            li.classList.add("dropdown-item");
            li.addEventListener("click", function(){
                document.getElementById('wilayachoice').innerHTML = li.innerText;
            });
            wilayaList.appendChild(li);
        });
    });
    xhr.send();
});*/