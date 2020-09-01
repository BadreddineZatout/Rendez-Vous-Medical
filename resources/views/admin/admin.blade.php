@extends('layouts.main')

@section('main')
<script>
    var med = document.getElementById("TableMedecins");
    var pat = document.getElementById("TablePatients");
    med.style.visibility = "hidden";
    pat.style.visibility = "hidden";
    alert ("it's working");
    document.getElementById("option1").addEventListener("click", medecinDisplay);
    document.getElementById("option2").addEventListener("click", patientDisplay);

    function medecinDisplay(){
        pat.style.display = "none";
        med.style.display = "block";
    }
    function patientDisplay(){
        med.style.display = "none";
        pat.style.display = "block";
    }
</script>

    <table id="TableMedecins" class="table-bordered table-hover">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Telephone</th>
                <th>Wilaya</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($medecins as $medecin)
                <tr>
                    <td>{{$medecin->NomMedecin}}</td>
                    <td>{{$medecin->PrenomMedecin}}</td>
                    <td>{{$medecin->Wilaya}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <table id="TablePatients" class="table-bordered table-hover">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Telephone</th>
                <th>Wilaya</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($patients as $patient)
                <tr>
                    <td>{{$patient->NomPatien}}</td>
                    <td>{{$patient->PrenomPatien}}</td>
                    <td>{{$patient->Telephone}}</td>
                    <td>{{$patient->Wilaya}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection