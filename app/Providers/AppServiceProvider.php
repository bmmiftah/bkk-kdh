<?php

namespace App\Providers;

use App\Models\User;
// use Illuminate\Auth\Access\Gate;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        
        Gate::define('admin', function(User $user) {
            return $user->role_id === 2;
        });

        // Gate::define('admin', function(User $user) {
        //     return $user->role_id === 2;
        // });
    }
}
