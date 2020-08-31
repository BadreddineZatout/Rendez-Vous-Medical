<?php

namespace app\Role;

/***
 * Class UserRole
 * @package App\Role
 */
class UserRole {

    const ROLE_ADMIN = 'Admin';
    const ROLE_MEDECIN = 'Medecin';
    const ROLE_PATIENT = 'Patient';


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