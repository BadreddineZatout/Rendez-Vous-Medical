@extends('layouts.app')

@section('content')

<div class="sidebar">
    <div class="profile">
        <img id="profilphoto" src="/images/admin.png"> 
        <h3>Bienvenu {{ Auth::user()->prenom ?? 'Client' }}</h1>
    </div>
    <nav class="navigation">
        <button id="option1" class="btn">Medecins</button>
        <button id="option2" class="btn">Patients</button>
    </nav>
</div>

@yield('main')

@endsection