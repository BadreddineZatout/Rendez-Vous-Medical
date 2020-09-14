@extends('layouts.app')

@section('content')

{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" /> --}}
<link rel="stylesheet" href="./css/patient.css">
<link rel="stylesheet" href="./css/card.css">
{{-- <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initialize" async defer></script> --}}
<script src="{{ asset('js/getwilaya.js') }}" defer></script>
<script src="{{ asset('js/getspec.js') }}" defer></script>
<script src="{{ asset('js/getmedecin.js') }}" defer></script>
{{-- <script src="{{ asset('js/mapInput.js') }}" defer></script> --}}
<script src="{{ asset('js/card.display.js') }}" defer></script>

<div class="content">
    <div class="SelectContainer">
        <select id="specialitechoice" name="specialitechoice" class="">
            <option id="s" value=0 selected> Choisir la specialité</option>
        </select>
        <select id="wilayachoice" name="wilayachoice" class="">
            <option id='w' value=0 selected> Choisir la Wilaya</option>
        </select>
        <select id="communechoice" name="communechoice" class="">
            <option value=0 selected> Choisir la Commune</option>
        </select>
        <button id="chercher" name="chercher" class="btn">Chercher</button>
    </div>
</div>

@endsection