<?php

namespace myRoommie\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'myRoommie\Model' => 'myRoommie\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     * @param  Gate $gate
     * @return void
     */
    public function boot(Gate $gate)
    {
        $this->registerPolicies();


        Gate::define('isOwner', function ($hosteller){
           return $hosteller->role == 'owner';
        });


        Gate::define('isManager', function ($hosteller){
           return $hosteller->role == 'manager';
        });


        Gate::define('isPortal', function ($hosteller){
           return $hosteller->role == 'portal';
        });


    }
}
