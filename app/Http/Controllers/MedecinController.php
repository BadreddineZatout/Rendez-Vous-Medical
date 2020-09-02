<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rdv;
use App\User;

class MedecinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $today = date('Y/m/d');
        $rdvs = Rdv::select('NumeroRDV', 'Patient', 'HeureRDV')->where('DateRDV', $today)->get();
        foreach($rdvs as $r){
            $p = User::select('nom', 'prenom')->where('id', $r->Patient)->get();
            $r->Patient = $p->NomPatient . ' ' . $p->PrenomPatient;
        }
        return view('medecin.home',[
            'rdvs' => $rdvs,
        ]);
    }
}
