const minutes = 1000 * 60;
const hours = minutes * 60;
const days = hours * 24;
const years = days * 365;

var today = new Date();
var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();

var nbr_rdv = 0;
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
            nbr_rdv = ~~(diff / 15);
            break;
        case "20min":
            nbr_rdv = ~~(diff / 20);
            break;
        case "30min":
            nbr_rdv = ~~(diff / 30);
            break;
        case "1h":
            nbr_rdv = ~~(diff / 60);
            break;
        case "2h":
            nbr_rdv = ~~(diff / 120);
            break;
    }
    alert(nbr_rdv);
}