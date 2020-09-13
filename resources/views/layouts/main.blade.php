@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row" style="height: calc(100vh - 50px)">
        <div class="col-sm-2 border border-primary bg-dark">
            <div class="row">
                    <div class="col-sm-12 p-1 mb-5">
                        <img id="profilphoto" src="/images/admin.png" class="rounded-circle mx-auto d-block mb-5 mt-3" alt="Photo" width="150" height="150"> 
                        <h3 class="text-center text-light font-weight-bolder">Bienvenu {{ Auth::user()->prenom ?? 'Client' }}</h1>
                    </div>
                    <div class="col-sm-12 mb-5">
                        <button id="option1" class="btn TableSelect">Medecins</button>
                    </div>   
                    <div class="col-sm-12 ">
                        <button id="option2" class="btn TableSelect">Patients</button>
                    </div>
            </div>
        </div>
        
        <div class="col-sm-8">
            @yield('main')
        </div>
    </div>
</div>
@endsection