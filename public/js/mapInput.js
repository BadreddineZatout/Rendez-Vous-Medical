var latitude = 35.539830;
var longitude = 6.149844;;
var map;
var marker;
var infowindow;
var infowindowContent;


function initialize(){
    map = new google.maps.Map(document.getElementById("address-map"), {
        center: {lat: latitude, lng: longitude},
        zoom: 17,
    });

    marker = new google.maps.Marker({
        map: map,
        position: {lat: latitude, lng: longitude},
    }); 
    infowindow = new google.maps.InfoWindow();
    infowindowContent = document.getElementById("infowindow-content");
    infowindow.setContent(infowindowContent);
}

function changeLocation(lat, lng){
    if (lat==null || lng==null){
        marker.setVisible(false);
        infowindowContent.children["message"].textContent = "La Position de Medecin est Untrouvable";
        infowindow.open(map, marker);
    }
    else{
        infowindow.close();
        latlng = new google.maps.LatLng({lat: lat, lng: lng});
        map.panTo(latlng);
        map.setZoom(15);
        marker.setPosition(latlng);
        marker.setVisible(true);
    } 
}

window.addEventListener("DOMContentLoaded", initialize());