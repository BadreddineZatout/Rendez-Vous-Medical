const minutes = 1000 * 60;
const para = document.getElementById("btnform");
const paraform = document.querySelector('#paraform');

var today = new Date();
var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
var nbr_rdv = document.querySelector('#nbr_rdv');

function calculNombreRdv(cyclerdv){
    let hd = document.getElementById("HDchoice").value;
    let hf = document.getElementById("HFchoice").value;
    let d1 = date + ' ' + hd;
    let d2 = date + ' ' + hf;
    let date1 = new Date(d1);
    let date2 = new Date(d2);
    d1 = date1.getTime();
    d2 = date2.getTime();
    let diff = (d2 - d1) / minutes;
    switch (cyclerdv){
        case "15min":
            nbr_rdv.value = ~~(diff / 15);
            break;
        case "20min":
            nbr_rdv.value = ~~(diff / 20);
            break;
        case "30min":
            nbr_rdv.value = ~~(diff / 30);
            break;
        case "1h":
            nbr_rdv.value = ~~(diff / 60);
            break;
        case "2h":
            nbr_rdv.value = ~~(diff / 120);
            break;
    }
}

para.addEventListener("click", (e)=>{
    e.preventDefault();
    paraform.action = "/Medecin/parasave";
    paraform.method = "POST";
    paraform.submit();

});

// para.addEventListener("click", (e)=>{
//     e.preventDefault();
//     let xhr = new XMLHttpRequest();
//     let csrf_token = document.querySelector('meta[name=csrf-token]').content;
//     xhr.open("POST", `/Medecin/?parasave=${nbr_rdv}`, true);
//     xhr.setRequestHeader('X-CSRF-Token', csrf_token);
//     xhr.addEventListener('load', ()=>{
//         console.log("sent");
//     });
//     xhr.send();
// });