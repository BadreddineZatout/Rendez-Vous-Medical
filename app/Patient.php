<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Patient extends Model
{   
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'NomPatient', 'PrenomPatient', 'DateNaissance','Telephone','Wilaya', 'Commune', 'adresse'
    ];


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'DateNaissance' => 'date',
    ];
}
