<?php

<<<<<<< HEAD
namespace App\TodosBackend\Listeners;

use App\TodosBackend\Events\Register;
=======
namespace PaoloDavila\TodosBackend\Listeners;

use PaoloDavila\TodosBackend\Events\Register;
>>>>>>> 5f032173417b209584ba0481b77168133212ef43
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserRegister
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Register  $event
     * @return void
     */
    public function handle(Register $event)
    {
        $event->user->assignRole('admin');
    }
}
