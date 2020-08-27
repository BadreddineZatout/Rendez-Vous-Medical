@extends('layouts.main')

@section('main')
    <script>
        document.getElementById('option1').innerHTML = "Parametres"
        document.getElementById('option2').innerHTML = "Liste des Rendez-Vous"
        document.getElementById('profilphoto').src = '/images/doctor.png'
    </script>
@endsection