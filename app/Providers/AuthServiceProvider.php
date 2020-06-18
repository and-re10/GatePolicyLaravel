<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
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

        //Dans la gate je cherche l'utilisateur connecté($user -> elle n'est pas presente dans le CAN car c'est la variable de l'utilisateur connecté) et les utilisateurs affichés($users -> elle est presente dans le CAN et viens du foreach)
        // Gate::define('update-user', function($user, $users){

        //     //Je compare si le l'id de l'utilisateur affiché est le meme que celui de l'utilisateur connecté
        //     return $users->id === $user->id;

        // });
    }
}
