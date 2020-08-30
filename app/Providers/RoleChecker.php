<?php

namespace App\Providers;

use App\Http\Middleware\CheckUserRole;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class RoleChecker extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(CheckUserRole::class, function(Application $app) {
            return new CheckUserRole(
                $app->make(RoleChecker::class)
            );
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
