const wil = document.getElementById("wilayachoice");
const comm = document.getElementById("communechoice");
wil.addEventListener("click", () => {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "/wilayaget", true);
    xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded');
    xhr.addEventListener('load', () => {
        wil.innerHTML = "";
        let results = JSON.parse(xhr.responseText);
        let result0 = results[0];
        result0.forEach(wilaya => {
            let li = document.createElement('option');
            li.innerText = wilaya.NomWilaya;
            li.addEventListener("click", function(){
                comm.innerHTML = "";
                wil.innerHTML = li.innerText;
                let result1 = results[1];
                result1.forEach(commune =>{
                    if (commune.Wilaya == wilaya.CodeWilaya){
                        let item = document.createElement("option");
                        item.innerText = commune.NomCommune;
                        /*item.addEventListener("click", function(){
                            comm.innerHTML = item.innerText;
                        });*/
                        comm.appendChild(item);
                    }
                });
            });
            wil.appendChild(li);
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