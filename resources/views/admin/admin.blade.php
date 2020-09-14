@extends('layouts.sidebar')

<link rel="stylesheet" href="./css/admin.css">

@section('main')

    <div class="content">
            <link rel="stylesheet" href="./css/admin.css">
    <script src="./js/admin.display.js" defer></script>

    <div id="SectionMedecins" class="SectionMedecins display-none">
        <table id="TableMedecins" class="display-table table-bordered table-primary table-responsive table-hover ml-5 mt-5">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Telephone</th>
                    <th>Wilaya</th>
                    <th>Commune</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($medecins as $medecin)
                    <tr>
                        <td>{{$medecin->nom}}</td>
                        <td>{{$medecin->prenom}}</td>
                        <td>{{$medecin->phone}}</td>
                        <td>{{$medecin->NomWilaya}}</td>
                        <td>{{$medecin->NomCommune}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div id="SectionPatients" class="SectionPatients display-none">
        <table id="TablePatients" class="display-table table-bordered table-primary table-responsive table-hover ml-5 mt-5">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Telephone</th>
                    <th>Wilaya</th>
                    <th>Commune</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($patients as $patient)
                    <tr>
                        <td>{{$patient->nom}}</td>
                        <td>{{$patient->prenom}}</td>
                        <td>{{$patient->phone}}</td>
                        <td>{{$patient->NomWilaya}}</td>
                        <td>{{$patient->NomCommune}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    </div>

@endsection