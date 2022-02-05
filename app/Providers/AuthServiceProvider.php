<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

       

        Gate::define('manage-users', function ($user){
            return $user->hasRole('superadmin');
        });

        Gate::define('create-posts', function ($user){
            return $user->hasAnyRoles(['admin','superadmin']);
        });

        Gate::define('delete-posts', function ($user){
            return $user->hasAnyRoles(['admin','superadmin']);
        });

        Gate::define('view-posts', function ($user){
            return $user->hasAnyRoles(['user','admin','superadmin']);
        });

        Gate::define('rate-posts', function ($user){
            return $user->hasAnyRoles(['user','admin','superadmin']);
        });
        Gate::define('is-admin', function ($user){
            return $user->hasAnyRoles(['admin','superadmin']);
        });

             //
    }
}
