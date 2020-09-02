@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <img src="#" alt="image" class="mx-auto d-block">
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card-header bg-primary font-weight-bolder text-white">
                    {{ __('Chercher') }}
                </div>
                <div class="card-body row">
                    <div class="col-4">
                        <label for="specialite" class="col-md-4 col-form-label text-md-right">{{__('Specialite')}}</label>
                        <div id="specialite" class="dropdown col-md-4">
                            <button id="specialitechoice" name="specialitechoice" type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown">
                                Specialite
                            </button>
                            <div id="speclist" class="dropdown-menu overflow-auto" style="height: 10rem">
                            </div>
                        </div> 
                    </div>
                    <div class="col-4">
                        <label for="wilaya" class="col-md-4 col-form-label text-md-right">{{__('Wilaya')}}</label>
                        <div id="wilaya" class="dropdown col-md-4">
                            <button id="wilayachoice" name="wilayachoice" type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown">
                                Wilaya
                            </button>
                            <div id="wilayalist" class="dropdown-menu overflow-auto" style="height: 10rem">
                            </div>
                        </div> 
                    </div>
                    <div class="col-4">
                        <label for="commune" class="col-md-4 col-form-label text-md-right">{{__('Commune')}}</label>
                        <div id="commune" class="dropdown col-md-4">
                            <button id="communechoice" name="communechoice" type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown">
                                Commune
                            </button>
                            <div id="communelist" class="dropdown-menu overflow-auto" style="height: 10rem">
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="clearfix">
                    <button id="chercher" name="chercher" type="button" class="btn btn-primary mr-5 float-right mb-5">
                        Chercher
                    </button>
                </div>
                <div class="row">
                    <div class="col-sm-5 mr-5 ml-5 border border-primary">
                        <table id="TableMedecins" class="table-bordered table-primary table-responsive table-hover">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Telephone</th>
                                    <th>Wilaya</th>
                                    <th>Commune</th>
                                    <th>Addresse</th>
                                    <th>Cabinet</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-5 border border-primary">
                        
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