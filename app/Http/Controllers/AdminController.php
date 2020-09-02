<?php

namespace App\Http\Controllers;

use App\Commune;
use App\Medecin;
use App\Patient;
use App\Wilaya;
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
            'patients' => Patient::all(),
            'medecins' => Medecin::all()
        ]);
    }
}
