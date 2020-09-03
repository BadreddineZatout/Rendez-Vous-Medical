<?php

namespace App\Http\Controllers;

use App\Wilaya;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function __invoke()
    {
        return Wilaya::select('NomWilaya', 'CodeWilaya')->get();
    }
}
