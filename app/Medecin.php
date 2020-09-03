<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Medecin extends Model
{   
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'NomMedecin', 'PrenomMedecin', 'Adresse', 'Cabinet', 'Telephone', 'Specialite', 'Wilaya', 'Commune' 
    ];
}
