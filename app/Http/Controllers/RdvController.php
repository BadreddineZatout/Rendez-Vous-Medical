<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RDV;

class RdvController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $data)
    {
       $rdv = new RDV();

       $rdv->Patient = Auth::user()->id;
       $rdv->Medecin = $data->Medecin;
       $rdv->DateRDV = $data->DateRDV;
       $rdv->HeureRDV = $data->HeureRDV;

       $rdv->save();
       return redirect("/Patient");
    }
}
