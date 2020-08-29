@extends('layouts.main')

@section('main')
    <script>
        document.getElementById('option1').innerHTML = "Liste des Rendez-Vous"
        document.getElementById('option2').innerHTML = "Parametres"
        document.getElementById('profilphoto').src = '/images/doctor.png'
    </script>
    <div id="parametre" class="card my-5" style="margin-left: 13em">
        <div class="card-header bg-primary font-weight-bolder text-white">{{ __('parametres') }}</div>
        <div class="card-body">
            <form action="">
                @csrf
                
                <div class="form-group row">
                    <label for="etat" class="col-md-4 col-form-label text-md-right">{{__('Etat du Systeme')}}</label>
                    <div class="col-md-6 mt-2">
                        <input type="radio" id="oui" name="etatsysteme" value="Oui">
                        <label class="mr-5" for="oui">Oui</label>
                        <input type="radio" id="non" name="etatsysteme" value="Non">
                        <label for="non">Non</label>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="HD" class="col-md-4 col-form-label text-md-right">{{__('Date de Debut')}}</label>
                    <div id="HD" class="dropdown col-md-4">
                        <button id="HDchoice" type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown">
                            Heure de Debut
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#" onclick="document.getElementById('HDchoice').innerHTML = '6h'">6h</a>
                          <a class="dropdown-item" href="#" onclick="document.getElementById('HDchoice').innerHTML = '7h'">7h</a>
                          <a class="dropdown-item" href="#" onclick="document.getElementById('HDchoice').innerHTML = '8h'">8h</a>
                        </div>
                      </div> 
                </div>

                <div class="form-group row">
                    <label for="HF" class="col-md-4 col-form-label text-md-right">{{__('Date de Fermeture')}}</label>
                    <div id="HF" class="dropdown col-md-4">
                        <button id="HFchoice" type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown">
                            Heure de Fermeture
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#" onclick="document.getElementById('HFchoice').innerHTML = '12h'">12h</a>
                          <a class="dropdown-item" href="#" onclick="document.getElementById('HFchoice').innerHTML = '15h'">15h</a>
                          <a class="dropdown-item" href="#" onclick="document.getElementById('HFchoice').innerHTML = '16h'">16h</a>
                        </div>
                      </div> 
                </div>

                <div class="form-group row">
                    <label for="cycle" class="col-md-4 col-form-label text-md-right">{{__('Cycle de Rendez Vous')}}</label>
                    <div class="col-md-8 mt-2">
                        <input type="radio" id="c1" name="cyclerdv" value="15min">
                        <label class="mr-3" for="c1">15min</label>
                        <input type="radio" id="c2" name="cyclerdv" value="20min">
                        <label class="mr-3" for="c2">20min</label>
                        <input type="radio" id="c3" name="cyclerdv" value="30min">
                        <label class="mr-3" for="c3">30min</label>
                        <input type="radio" id="c4" name="cyclerdv" value="1h">
                        <label class="mr-3" for="c4">1h</label>
                        <input type="radio" id="c5" name="cyclerdv" value="2h">
                        <label for="c5">2h</label>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nombre" class="col-md-4 col-form-label text-md-right">{{__('Nombre de Rendez Vous')}}</label>
                    <div id="nombre" class="dropdown col-md-4">
                        <button id="nombrerdv" type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown">
                          Nombre de Rendez Vous
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#" onclick="document.getElementById('nombrerdv').innerHTML = 1">1</a>
                          <a class="dropdown-item" href="#" onclick="document.getElementById('nombrerdv').innerHTML = 2">2</a>
                          <a class="dropdown-item" href="#" onclick="document.getElementById('nombrerdv').innerHTML = 3">3</a>
                        </div>
                      </div> 
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Sauvegarder') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection