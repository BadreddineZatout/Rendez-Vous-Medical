@extends('layouts.main')

@section('main')
    <script>
        document.getElementById('option1').innerHTML = "Liste des Rendez-Vous"
        document.getElementById('option2').innerHTML = "Parametres"
        document.getElementById('profilphoto').src = '/images/doctor.png'
    </script>
@endsection