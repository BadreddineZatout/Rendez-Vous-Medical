<?php

namespace App\Http\Controllers;

use App\Commune;
use App\Specialite;
use App\Wilaya;
use Illuminate\Http\Request;

class ListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('auth.register',[
             'wilayas' => Wilaya::all(),
             /*'communes' => Commune::all(),
             'specialites' => Specialite::all() */
         ]);   
    }
    public function __invoke()
    {
        return   Wilaya::select('NomWilaya')->get();
    }
}
