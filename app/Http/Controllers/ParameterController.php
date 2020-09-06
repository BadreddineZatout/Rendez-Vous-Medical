<?php

namespace App\Http\Controllers;

use App\Parametre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ParameterController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'etatsysteme' => 'required',
            'HDchoice' => 'required',
            'HFchoice' => 'required',
            'cyclerdv' => 'required',
        ]);     
        

        $para = new Parametre();
        
        $para->Medecin = Auth::user()->id;
        $para->etat = $request->input('etatsysteme');
        $para->Debut = $request->input('HDchoice');
        $para->Fermeture = $request->input('HFchoice');
        $para->cycle = $request->input('cyclerdv');
        $para->NombreRdv = $request->input('nbr_rdv');
        $para->save();
        return redirect('/Medecin');
    }
}
