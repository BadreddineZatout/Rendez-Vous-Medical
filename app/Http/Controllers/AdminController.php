<?php

namespace App\Http\Controllers;

use App\Medecin;
use App\Patient;
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
        $patient = new Patient();
        $medecin = new medecin();
        return view('admin.admin',[
            'patients' => Patient::all(),
            'medecins' => Medecin::all()
        ]);
    }
}
