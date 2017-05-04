<?php

<<<<<<< HEAD
namespace App\TodosBackend\Providers;

use App\TodosBackend\User;
=======
namespace PaoloDavila\TodosBackend\Providers;

use PaoloDavila\TodosBackend\User;
>>>>>>> 5f032173417b209584ba0481b77168133212ef43
use Illuminate\Support\ServiceProvider;
use Spatie\Permission\Models\Role;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      User::created(function ($user) {
        $user->assignRole('admin');
      });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
