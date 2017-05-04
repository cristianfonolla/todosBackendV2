<?php

<<<<<<< HEAD
namespace App\TodosBackend\Events;
=======
namespace PaoloDavila\TodosBackend\Events;
>>>>>>> 5f032173417b209584ba0481b77168133212ef43

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

/**
 * Class Register
<<<<<<< HEAD
 * @package App\TodosBackend\Events
=======
 * @package PaoloDavila\TodosBackend\Events
>>>>>>> 5f032173417b209584ba0481b77168133212ef43
 */
class Register
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * @var
     */
    public $user;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }
}
