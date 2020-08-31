<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\CurrentDeviceLogout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::check()){
            $user = Auth::user();
            $role = $user->user_type;
            if ($role == 'Admin') return redirect('/Admin');
            elseif ($role == 'Medecin') return redirect('/Medecin');
            else return redirect('/Patient');
        }else return view('auth/login');
    }

    public function aller(){
        $user = Auth::user();
        $role = $user->user_type;
        if ($role == 'Admin') return redirect('/Admin');
        elseif ($role == 'Medecin') return redirect('/Medecin');
        else return redirect('/Patient');
    }
}
