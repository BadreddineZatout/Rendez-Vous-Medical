<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.admin',[
            'patients' => User::select('users.nom', 'users.prenom', 'users.phone', 'wilayas.NomWilaya', 'communes.NomCommune')->join('wilayas', 'wilayas.id', '=', 'users.wilaya')->join('communes', 'communes.id', '=', 'users.commune')->where('users.user_type', 'Patient')->get(),
            'medecins' => User::select('users.nom', 'users.prenom', 'users.phone', 'wilayas.NomWilaya', 'communes.NomCommune')->join('wilayas', 'wilayas.id', '=', 'users.wilaya')->join('communes', 'communes.id', '=', 'users.commune')->where('users.user_type', 'Medecin')->get()
        ]);
    }
}
