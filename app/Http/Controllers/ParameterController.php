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
        // TODO Change create to save
        return Parametre::create([
            'Medecin' => Auth::user()->id,
            'etat' => $request->input('etatsysteme'),
            'Debut' => $request->input('HDchoice'),
            'Fermeture' => $request->input('HFchoice'),
            'cycle' => $request->input('cyclerdv'),
            'NombreRdv' => $request->input('nbr_rdv'),
        ]);
    }
}
