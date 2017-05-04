<?php

<<<<<<< HEAD
namespace App\TodosBackend\Providers;
=======
namespace PaoloDavila\TodosBackend\Providers;
>>>>>>> 5f032173417b209584ba0481b77168133212ef43

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
<<<<<<< HEAD
        'App\TodosBackend\Events\Register' => [
            'App\TodosBackend\Listeners\UserRegister',
=======
        'PaoloDavila\TodosBackend\Events\Register' => [
            'PaoloDavila\TodosBackend\Listeners\UserRegister',
>>>>>>> 5f032173417b209584ba0481b77168133212ef43
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
