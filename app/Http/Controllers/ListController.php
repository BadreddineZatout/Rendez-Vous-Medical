<?php

namespace App\Http\Controllers;

use App\Commune;
use App\Specialite;
use App\Wilaya;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function __invoke()
    {
        return [Wilaya::select('NomWilaya', 'CodeWilaya')->get(), Commune::select('NomCommune', 'Wilaya')->get()];
    }
}
