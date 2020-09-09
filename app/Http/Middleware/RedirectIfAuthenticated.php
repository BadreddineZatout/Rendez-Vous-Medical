<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use App\Role\UserRole;
use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $role = $user->user_type;
            if ($role == UserRole::ROLE_MEDECIN)
            {
                return redirect('medecin/home');
            }
            elseif ($role == UserRole::ROLE_ADMIN){
                return redirect('admin/admin');
            }
            elseif ($role == UserRole::ROLE_PATIENT){
                return redirect('patient/rdv');
            }else return redirect('/');
        }
        return $next($request);
    }
}
