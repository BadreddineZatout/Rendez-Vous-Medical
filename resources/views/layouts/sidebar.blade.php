@extends('layouts.app')

@section('content')

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