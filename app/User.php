<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom', 'prenom', 'user_type', 'wilaya', 'commune', 'phone', 'password', 'sex', 'adresse', 'date_naissance', 'cabinet', 'specialite', 'latitude', 'longitude',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /***
    * @param $role
    * @return mixed
    */
    public function hasRole($role)
    {
        return ($role == $this->getRole());
    }


    /**
    * @return array
    */
    public function getRole()
    {
        $role = $this->getAttribute('user_type');

        if (is_null($role)) {
            $role = 'NO ROLE';
        }

        return $role;
    }  
}
