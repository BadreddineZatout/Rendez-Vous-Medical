@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="./css/patient.css">
<link rel="stylesheet" href="./css/card.css">
<script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initialize" async defer></script>
<script src="{{ asset('js/getwilaya.js') }}" defer></script>
<script src="{{ asset('js/getspec.js') }}" defer></script>
<script src="{{ asset('js/getmedecin.js') }}" defer></script>
<script src="{{ asset('js/mapInput.js') }}" defer></script>
<script src="{{ asset('js/card.display.js') }}" defer></script>

<div class="content">
    <div class="SelectContainer">
        <select id="specialitechoice" name="specialitechoice">
            <option id="s" value=0 selected> Choisir la specialité</option>
        </select>
        <select id="wilayachoice" name="wilayachoice">
            <option id='w' value=0 selected> Choisir la Wilaya</option>
        </select>
        <select id="communechoice" name="communechoice">
            <option value=0 selected>Tous Les Commune</option>
        </select>
        <button id="chercher" name="chercher" class="btn">Chercher</button>
    </div>
    <div id="ListMed" class="ListMed display-none"></div>
    <div id="MapMed"" class="MapMed display-none">
        <div id="infowindow-content">
            <span id="message" class="title"></span>
        </div>
    </div>
</div>

@endsection