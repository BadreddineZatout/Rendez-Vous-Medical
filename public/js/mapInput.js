var latitude = 35.553056;
var longitude = 6.151416;
var input = "";

function initialize(){
    const geocoder = new google.maps.Geocoder;
    const map = new google.maps.Map(document.getElementById("address-map"), {
        center: {lat: latitude, lng: longitude},
        zoom: 13
    });
    const marker = new google.maps.Marker({
        map: map,
        position: {lat: latitude, lng: latitude}
    });
    marker.setVisible(true);

    /*const autocomplete = new google.map.places.autocomplete(input);
    autocomplete.key = "adresse";

    google.maps.event.addListener(autocomplete, 'place_changed', ()=> {
        marker.setVisible(false);
        const place = autocomplete.getPlace();

        geocoder.geocode({'placeId': place.place_id}, function(results, status){
            if (status == google.maps.GeocoderStatus.OK){
                latitude = results[0].geometry.location.lat();
                longitude = results[0].geometry.location.lng();
            }
        });

        if (!place.geometry) {
            window.alert("No details available for input: '" + place.name + "'");
            input.value = "";
            return;
        }

        if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
        } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);
        }
        marker.setPosition(place.geometry.location);
        marker.setVisible(true);
    });*/
}

window.addEventListener("DOMContentLoaded", initialize());