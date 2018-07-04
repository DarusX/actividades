<?php

namespace App\Providers;

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
        'App\Activity' => 'App\Policies\ActivityPolicy',
        'App\User' => 'App\Policies\UserPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::resource('activity', 'App\Policies\ActivityPolicy', [
            'index' => 'index'
        ]);
        Gate::resource('user', 'App\Policies\UserPolicy', [
            'index' => 'index'
        ]);
    }
}
