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
            'patients' => User::select('Nom', 'Prenom', 'phone', 'Wilaya', 'Commune')->where('user_type', 'Patient')->get(),
            'medecins' => User::select('Nom', 'Prenom', 'phone', 'Wilaya', 'Commune')->where('user_type', 'Medecin')->get()
        ]);
    }
}
