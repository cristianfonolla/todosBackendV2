<?php

<<<<<<< HEAD
namespace App\TodosBackend\Providers;
=======
namespace PaoloDavila\TodosBackend\Providers;
>>>>>>> 5f032173417b209584ba0481b77168133212ef43

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\ServiceProvider;

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Broadcast::routes();

        /*
         * Authenticate the user's personal channel...
         */
        Broadcast::channel('App.User.*', function ($user, $userId) {
            return (int) $user->id === (int) $userId;
        });
    }
}
