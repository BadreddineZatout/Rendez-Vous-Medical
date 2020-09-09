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
        infowindowContent.children["message"].textContent = "La Position de Medecin est Untrouvable";
        infowindow.open(map, marker);
    }
    else{
        infowindow.close();
        latlng = new google.maps.LatLng({lat: lat, lng: lng});
        map.panTo(latlng);
        map.setZoom(17);
        marker.setPosition(latlng);
        marker.setVisible(true);
    } 
}

window.addEventListener("DOMContentLoaded", initialize());







// const autocomplete = new google.maps.places.Autocomplete(input);
    // autocomplete.bindTo("bounds", map);
    // autocomplete.setFields(["address_components", "geometry", "icon", "name"]);
    // autocomplete.addListener('place_changed', ()=> {
    //     marker.setVisible(false);
    //     const place = autocomplete.getPlace();

    //     geocoder.geocode({'placeId': place.place_id}, function(results, status){
    //         if (status == google.maps.GeocoderStatus.OK){
    //             latitude = results[0].geometry.location.lat();
    //             longitude = results[0].geometry.location.lng();
    //         }
    //     });

    //     if (!place.geometry) {
    //         window.alert("No details available for input: '" + place.name + "'");
    //         input.value = "";
    //         return;
    //     }

    //     if (place.geometry.viewport) {
    //         map.fitBounds(place.geometry.viewport);
    //     } else {
    //         map.setCenter(place.geometry.location);
    //         map.setZoom(17);
    //     }
    //     marker.setPosition(place.geometry.location);
    //     marker.setVisible(true);
    // });