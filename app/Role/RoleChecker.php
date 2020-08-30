<?php

namespace app\Role;

use App\User;
use PhpParser\Node\Stmt\Echo_;

/**
 * Class RoleChecker
 * @package App\Role
 */

 class RoleChecker {
     /**
     * @param User $user
     * @param string $role
     * @return bool
     */
    public function check (User $user, string $role){
        if ($user->hasRole(UserRole::ROLE_ADMIN)) return true;
        if ($user->hasRole(UserRole::ROLE_MEDECIN)) return true;
        if ($user->hasRole(UserRole::ROLE_PATIENT)) return true;
        return $user->hasRole($role);
    }
 }