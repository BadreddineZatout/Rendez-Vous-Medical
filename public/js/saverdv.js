const medCard = document.getElementById('card1');


var xhr = new XMLHttpRequest();
xhr.open("POST", `/rdv=${data}`, true);
xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded');
xhr.addEventListener('load', () => {

});
xhr.send();