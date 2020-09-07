<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function __invoke($s, $w, $c){
        if (($s != 0) && ($w != 0)){
            if ($c==0){
                return User::select('users.nom', 'users.prenom', 'users.phone', 'users.wilaya', 'communes.NomCommune', 'users.adresse', 'users.cabinet')->join('communes', 'communes.id', '=', 'users.commune')->where('users.specialite', $s)->where('users.wilaya', $w)->get();
            }else{
                return User::select('users.nom', 'users.prenom', 'users.phone', 'users.wilaya', 'communes.NomCommune', 'users.adresse', 'users.cabinet')->join('communes', 'communes.id', '=', 'users.commune')->where('users.specialite', $s)->where('users.wilaya', $w)->where('users.commune', $c)->get();
            }

        }
    }
}
