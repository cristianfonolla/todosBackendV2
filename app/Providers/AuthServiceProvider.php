<?php

<<<<<<< HEAD
namespace App\TodosBackend\Providers;
=======
namespace PaoloDavila\TodosBackend\Providers;
>>>>>>> 5f032173417b209584ba0481b77168133212ef43

use Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Passport\Passport;
use Route;

/**
 * Class AuthServiceProvider.
 *
<<<<<<< HEAD
 * @package App\TodosBackend\Providers
=======
 * @package PaoloDavila\TodosBackend\Providers
>>>>>>> 5f032173417b209584ba0481b77168133212ef43
 */
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
<<<<<<< HEAD
        'App\TodosBackend\Task' => 'App\TodosBackend\Policies\TaskPolicy',
//        'App\TodosBackend\User' => 'App\TodosBackend\Policies\UserPolicy',
=======
        'PaoloDavila\TodosBackend\Task' => 'PaoloDavila\TodosBackend\Policies\TaskPolicy',
//        'PaoloDavila\TodosBackend\User' => 'PaoloDavila\TodosBackend\Policies\UserPolicy',
>>>>>>> 5f032173417b209584ba0481b77168133212ef43
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Route::group(['middleware' => 'cors'], function() {
            Passport::routes();
        });

        Passport::enableImplicitGrant();

        $this->defineGates();
    }

    protected function defineGates()
    {
        Gate::define('gate-name',function() {
        });

        Gate::define('impossible-gate',function() {
            return false; //No autoritzat
        });

        Gate::define('easy-gate',function() {
            return true; //Autoritzat
        });

    }
}
