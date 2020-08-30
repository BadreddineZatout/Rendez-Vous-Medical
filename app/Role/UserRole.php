<?php

namespace app\Role;

/***
 * Class UserRole
 * @package App\Role
 */
class UserRole {

    const ROLE_ADMIN = 'ROLE_ADMIN';
    const ROLE_MEDECIN = 'ROLE_MEDECIN';
    const ROLE_PATIENT = 'ROLE_PATIENT';


    /***
     * @return array
     */
    public static function getRoleList()
    {
        return [
            static::ROLE_ADMIN =>'Admin',
            static::ROLE_MEDECIN => 'Medecin',
            static::ROLE_PATIENT => 'Patient',
        ];
    }

}