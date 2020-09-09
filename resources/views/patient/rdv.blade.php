@extends('layouts.app')

@section('content')
<script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initialize" async defer></script>
<script src="{{ asset('js/getwilaya.js') }}" defer></script>
<script src="{{ asset('js/getspec.js') }}" defer></script>
<script src="{{ asset('js/getmedecin.js') }}" defer></script>
<script src="{{ asset('js/mapInput.js') }}" defer></script>

<img src="/images/image.jpg" alt="image" class="mx-auto d-block mb-5" style="height: 20em; width: 100%">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 border border-primary">
                <div class="card-header bg-primary font-weight-bolder text-white">
                    {{ __('Chercher') }}
                </div>
                <div class="card-body row">
                    <div class="col-4">
                        <strong><label for="specialite" class="col-md-4 col-form-label text-md-right">{{__('Specialite')}}</label></strong>
                        <div id="specialite" class="dropdown col">
                            <select id="specialitechoice" name="specialitechoice" class="form-control overflow-auto btn btn-outline-primary">
                                <option id="s" value=0 selected> Choisir la specialité</option>
                            </select>
                        </div> 
                    </div>
                    <div class="col-4">
                        <strong><label for="wilaya" class="col-md-4 col-form-label text-md-right">{{__('Wilaya')}}</label></strong>
                        <div id="wilaya" class="dropdown col">
                            <select id="wilayachoice" name="wilayachoice" class="form-control overflow-auto btn btn-outline-primary">
                                <option id='w' value=0 selected> Choisir la Wilaya</option>
                            </select>
                        </div> 
                    </div>
                    <div class="col-4">
                        <strong><label for="commune" class="col-md-4 col-form-label text-md-right">{{__('Commune')}}</label></strong>
                        <div id="commune" class="dropdown col">
                            <select id="communechoice" name="communechoice" class="form-control btn btn-outline-primary">
                                <option value=0 selected> Choisir la Commune</option>
                            </select>
                        </div> 
                    </div>
                </div>
                <div class="clearfix">
                    <button id="chercher" name="chercher" type="button" class="btn btn-primary mr-5 float-right mb-5">
                        Chercher
                    </button>
                </div>

                <div class=" row form-group ml-5 custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="filtercommune">
                    <label class="custom-control-label" for="filtercommune"><strong>Tous les medecins</strong></label>
                </div>
                
                <div class="row">
                    <div class="col-sm-5 mr-5 ml-5 border border-primary">
                        <table id="TableMedecins" class="table-bordered table-responsive table-hover">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Telephone</th>
                                    <th>Wilaya</th>
                                    <th>Commune</th>
                                    <th>Adresse</th>
                                    <th>Cabinet</th>
                                </tr>
                            </thead>
                            <tbody id="medbody">
                                
                            </tbody>
                        </table>
                    </div>
                    <div id="address-map-container" class="col-sm-5 border border-primary" style="width:100%;height:400px;">
                        <div id="address-map" style="height: 100%; width: 100%"></div>
                    </div>
                </div>
                <div class="clearfix">
                    <button id="rdv" name="rdv" type="button" class="btn btn-primary mr-5 float-right mt-5">
                        Resever Rendez Vous
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection