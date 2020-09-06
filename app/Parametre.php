<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parametre extends Model
{
    protected $fillable = [
        'Medecin',  'etat', 'Debut', 'Fermeture', 'cycle', 'NombreRdv'
    ];

    protected $cast = [
        'Debut' => 'time',
        'Fermeture' => 'time',
    ];
}
