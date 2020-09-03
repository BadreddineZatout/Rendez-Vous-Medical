<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Commune;

class CommuneController extends Controller
{
    public function __invoke($code)
    {
        return Commune::select('NomCommune', 'Wilaya')->where('Wilaya',$code)->get();
    }
}
