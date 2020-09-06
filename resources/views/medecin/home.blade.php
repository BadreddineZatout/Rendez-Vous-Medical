@extends('layouts.main')

@section('main')
    <script src="{{ asset('js/saveParametre.js') }}" defer></script>
    <script>
        document.getElementById('option1').innerHTML = "Liste des Rendez-Vous"
        document.getElementById('option2').innerHTML = "Parametres"
        document.getElementById('profilphoto').src = '/images/doctor.png'
    </script>
    <div id="parametre" class="card my-5" style="margin-left: 13em">
        <div class="card-header bg-primary font-weight-bolder text-white">{{ __('parametres') }}</div>
        <div class="card-body">
            <form id="paraform" action="">
                @csrf
                <input id="nbr_rdv" name="nbr_rdv" value="" style="display: none;">
                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right">{{__('Etat du Systeme')}}</label>
                    <div class="col-md-6 mt-2">
                        <input type="radio" id="oui" name="etatsysteme" value=1>
                        <label class="mr-5" for="oui">Oui</label>
                        <input type="radio" id="non" name="etatsysteme" value=0>
                        <label for="non">Non</label>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="HD" class="col-md-4 col-form-label text-md-right">{{__('Heure de Debut')}}</label>
                    <div id="HD" class="dropdown col-md-4">
                        <input id="HDchoice" name="HDchoice" type="time" class="form-control btn btn-outline-primary">
                    </div> 
                </div>

                <div class="form-group row">
                    <label for="HF" class="col-md-4 col-form-label text-md-right">{{__('Heure de Fermeture')}}</label>
                    <div id="HF" class="dropdown col-md-4">
                        <input id="HFchoice" name="HFchoice" type="time" class="form-control btn btn-outline-primary">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="cycle" class="col-md-4 col-form-label text-md-right">{{__('Durée de Rendez Vous')}}</label>
                    <div class="col mt-2">
                        <input type="radio" id="c1" name="cyclerdv" value="15min" onclick="calculNombreRdv('15min')">
                        <label class="mr-3" for="c1" onclick="calculNombreRdv('15min')">15min</label>
                        <input type="radio" id="c2" name="cyclerdv" value="20min" onclick="calculNombreRdv('20min')">
                        <label class="mr-3" for="c2" onclick="calculNombreRdv('20min')">20min</label>
                        <input type="radio" id="c3" name="cyclerdv" value="30min" onclick="calculNombreRdv('30min')">
                        <label class="mr-3" for="c3" onclick="calculNombreRdv('30min')">30min</label>
                        <input type="radio" id="c4" name="cyclerdv" value="1h" onclick="calculNombreRdv('1h')">
                        <label class="mr-3" for="c4" onclick="calculNombreRdv('1h')">1h</label>
                        <input type="radio" id="c5" name="cyclerdv" value="2h" onclick="calculNombreRdv('2h')">
                        <label for="c5" onclick="calculNombreRdv('2h')">2h</label>
                    </div>
                </div>  

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button id="btnform" type="submit" class="btn btn-primary">
                            {{ __('Sauvegarder') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div>
        <table id="TableRdv" class="table-bordered table-primary table-responsive table-hover ml-5 mt-5">
            <thead>
                <tr>
                    <th>Numero Rendez Vous</th>
                    <th>Patient</th>
                    <th>Heure du Rendez Vous</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rdvs as $rdv)
                    <tr>
                        <td>{{$rdv->NumeroRDV}}</td>
                        <td>{{$rdv->Patient}}</td>
                        <td>{{$rdv->HeureRDV}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        var p = document.getElementById("parametre");
        var r = document.getElementById("TableRdv");
        p.style.display = "none";
        r.style.display = "none";
        document.getElementById("option1").addEventListener("click", RdvDisplay);
        document.getElementById("option2").addEventListener("click", parametreDisplay);

        function RdvDisplay(){
            p.style.display = "none";
            r.style.display = "table";
        }
        function parametreDisplay(){
            r.style.display = "none";
            p.style.display = "block";
        }
    </script>
@endsection