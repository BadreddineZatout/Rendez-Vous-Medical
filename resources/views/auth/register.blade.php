@extends('layouts.app')

@section('content')
<script src="{{ asset('js/getwilaya.js') }}" defer></script>
<script src="{{ asset('js/getspec.js') }}" defer></script>

<div id="d1" class="container mt-5">
    <div class="row justify-content-center ">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary font-weight-bolder text-white">
                    {{ __('Register') }}
                </div>

                <div class="card-body">
                    <form id="form" method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>

                                @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="prenom" class="col-md-4 col-form-label text-md-right">{{ __('Prenom') }}</label>
                            <div class="col-md-6">
                                <input id="prenom" name="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" value="{{ old('prenom') }}" required autocomplete="prenom">
                                
                                @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="wilaya" class="col-md-4 col-form-label text-md-right">{{__('Wilaya')}}</label>
                            <div id="wilaya" class="dropdown col-md-4">
                                <select id="wilayachoice" name="wilayachoice" class="form-control overflow-auto btn btn-outline-primary @error('wilayachoice') is-invalid @enderror">
                                    <option id='w' selected> Choisir la Wilaya</option>
                                </select>
                                  @error('wilayachoice')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="commune" class="col-md-4 col-form-label text-md-right">{{__('Commune')}}</label>
                            <div id="commune" class="dropdown col-md-4">
                                <select id="communechoice" name="communechoice" class="form-control btn btn-outline-primary @error('communechoice') is-invalid @enderror">
                                    <option selected> Choisir la Commune</option>
                                </select>
                                @error('communechoice')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> 
                        </div>
                        <div class="form-group row">
                            <label for="adr" class="col-md-4 col-form-label text-md-right @error('adr') is-invalid @enderror">{{ __('Adresse') }}</label>
                            <div class="col-md-6">
                                <input id="adr" name="adr" type="text" class="form-control" value="{{ old('adr') }}" required>
                                @error('adr')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Numero Telephone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{__('Type utilisateur')}}</label>
                            <div class="col-md-6 mt-2">
                                <!--<input type="radio" id="admin" name="role" value="Admin">
                                <label class="mr-3" for="admin">Admin</label>-->
                                <input type="radio" id="medecin" name="role" value="Medecin" onclick="ToggleMedecin()">
                                <label class="mr-3" for="medecin" onclick="ToggleMedecin()">Medecin</label>
                                <input type="radio" id="patient" name="role" value="Patient" onclick="TogglePatient()">
                                <label class="mr-3" for="patient" onclick="TogglePatient()">Patient</label>
                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div id="datenaissance" class="form-group row">
                            <label for="dn" class="col-md-4 col-form-label text-md-right">{{ __('Date de Naissance') }}</label>
                            <div class="col-md-6">
                                <input id="dn" name="dn" type="date" class="form-control" value="{{ old('dn') }}">
                            </div>
                        </div>

                        <div id="cab" class="form-group row">
                            <label for="cabinet" class="col-md-4 col-form-label text-md-right">{{ __('Cabinet') }}</label>
                            <div class="col-md-6">
                                <input id="cabinet" name="cabinet" type="text" class="form-control @error('cabinet') is-invalid @enderror" value="{{ old('cabinet') }}">
                                @error('cabinet')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div id="spec" class="form-group row">
                            <label for="specialite" class="col-md-4 col-form-label text-md-right">{{__('Specialite')}}</label>
                            <div id="specialite" class="dropdown col-md-4">
                                <select id="specialitechoice" name="specialitechoice" class="form-control overflow-auto btn btn-outline-primary">
                                    <option id="s" value={{Null}} selected> Choisir la specialité</option>
                                </select>
                            </div> 
                        </div>

                        <div id="gps" class="form-group row">
                            <label for="pos" class="col-md-4 col-form-label text-md-right">{{ __('Position GPS') }}</label>

                            <div id="pos" class="col-md-6">
                                <input id="lat" type="text" class="form-control" name="lat" placeholder="Latitude" autocomplete="lat">
                                <input id="lng" type="text" class="form-control mt-1" name="lng" placeholder="Longiude" autocomplete="lng">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var dn = document.getElementById("datenaissance");
    var cabinet = document.getElementById("cab");
    var spec = document.getElementById("spec");
    var gps = document.getElementById("gps");

    dn.style.display = "none";
    cabinet.style.display = "none";
    spec.style.display = "none";
    gps.style.display = "none";

    function TogglePatient(){
        cabinet.style.display ="none";
        spec.style.display = "none";
        gps.style.display = "none";
        dn.style.display = "";
    }
    function ToggleMedecin(){
        dn.style.display = "none";
        cabinet.style.display = "";
        spec.style.display = "";
        gps.style.display = "";
    }
</script>
@endsection
