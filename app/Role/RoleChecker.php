<?php

namespace app\Role;

use App\User;
use PhpParser\Node\Stmt\Echo_;

/**
 * Class RoleChecker
 * @package App\Role
 */

 class RoleChecker {

    //const $DefaultUser  = new User();
     /**
     * @param User $user
     * @param string $role
     * @return bool
     */
    
     public function check ($user, string $role = 'NO ROLE'){
        if (is_null($user)) return false;
        if ($user->hasRole($role)) return true;
        else return false;
    }
 }