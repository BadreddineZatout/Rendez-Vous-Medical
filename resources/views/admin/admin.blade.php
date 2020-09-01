@extends('layouts.main')

@section('main')
    <table id="TableMedecins" class="table-bordered table-primary table-responsive table-hover ml-5 mt-5">
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
                    <td>{{$medecin->NomMedecin}}</td>
                    <td>{{$medecin->PrenomMedecin}}</td>
                    <td>{{$medecin->Contact}}</td>
                    <td>{{$medecin->Wilaya}}</td>
                    <td>{{$medecin->Commune}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <table id="TablePatients" class="table-bordered table-primary table-responsive table-hover ml-5 mt-5">
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
                    <td>{{$patient->NomPatien}}</td>
                    <td>{{$patient->PrenomPatien}}</td>
                    <td>{{$patient->Telephone}}</td>
                    <td>{{$patient->Wilaya}}</td>
                    <td>{{$patient->Commune}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        var med = document.getElementById("TableMedecins");
        var pat = document.getElementById("TablePatients");
        med.style.display = "none";
        pat.style.display = "none";
        document.getElementById("option1").addEventListener("click", medecinDisplay);
        document.getElementById("option2").addEventListener("click", patientDisplay);
    
        function medecinDisplay(){
            pat.style.display = "none";
            med.style.display = "table";
        }
        function patientDisplay(){
            med.style.display = "none";
            pat.style.display = "table";
        }
    </script>
@endsection