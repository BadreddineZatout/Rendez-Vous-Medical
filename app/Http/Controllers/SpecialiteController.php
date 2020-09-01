<?php

namespace App\Http\Controllers;

use App\Specialite;
use Illuminate\Http\Request;

class SpecialiteController extends Controller
{
    public function __invoke()
    {
        return Specialite::select('NomSpecialite')->get();
    }
}
