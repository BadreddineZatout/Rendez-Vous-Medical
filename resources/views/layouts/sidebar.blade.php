@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />

<div class="sidebar">
    <div class="profile">
        <i class="fas fa-user"></i>
        <div class="Welcome"><span>Bienvenu </span><span class="UserName">{{ Auth::user()->prenom ?? 'Client' }}</span></div>
    </div>
    <nav class="navigation">
        <button id="option1" class="btn"><i class="fas {{ $icon1 }}"></i><span>{{ $param1 }}</span></button>
        <button id="option2" class="btn"><i class="fas {{ $icon2 }}"></i><span>{{ $param2 }}</span></button>
    </nav>
</div>

@yield('main')

@endsection