<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;
use App\Rdv;
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
            $p = Patient::select('NomPatient', 'PrenomPatient')->where('IdPatient', $r->Patient);
            $r->Patient = $p->NomPatient . ' ' . $p->PrenomPatient;
        }
        return view('medecin.home',[
            'rdvs' => $rdvs,
        ]);
    }
}
