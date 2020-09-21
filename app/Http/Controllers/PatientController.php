<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function __invoke($s, $w, $c){
        if (($s != 0) && ($w != 0)){
            if ($c==0){
                return User::select('users.id', 'users.nom', 'users.prenom', 'users.phone', 'users.sex', 'wilayas.NomWilaya', 'communes.NomCommune', 'users.adresse', 'users.cabinet', 'users.latitude', 'users.longitude')->join('wilayas', 'wilayas.id', '=', 'users.wilaya')->join('communes', 'communes.id', '=', 'users.commune')->where('users.specialite', $s)->where('users.wilaya', $w)->get();
            }else{
                return User::select('users.id', 'users.nom', 'users.prenom', 'users.phone', 'users.sex', 'wilayas.NomWilaya', 'communes.NomCommune', 'users.adresse', 'users.cabinet', 'users.latitude', 'users.longitude')->join('wilayas', 'wilayas.id', '=', 'users.wilaya')->join('communes', 'communes.id', '=', 'users.commune')->where('users.specialite', $s)->where('users.wilaya', $w)->where('users.commune', $c)->get();
            }
        }
    }
}
