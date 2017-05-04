<?php

<<<<<<< HEAD
namespace App\TodosBackend\Events;
=======
namespace PaoloDavila\TodosBackend\Events;
>>>>>>> 5f032173417b209584ba0481b77168133212ef43

use Illuminate\Broadcasting\Channel;
use Illuminate\Notifications\Notification;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use NotificationChannels\Gcm\GcmChannel;
use NotificationChannels\Gcm\GcmMessage;
<<<<<<< HEAD
use App\TodosBackend\GcmToken;
use App\TodosBackend\User;

/**
 * Class MessageSent
 * @package App\TodosBackend\Events
=======
use PaoloDavila\TodosBackend\GcmToken;
use PaoloDavila\TodosBackend\User;

/**
 * Class MessageSent
 * @package PaoloDavila\TodosBackend\Events
>>>>>>> 5f032173417b209584ba0481b77168133212ef43
 */
class MessageSent extends Notification implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user;
    public $token;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(User $user, GcmToken $token)
    {
        $this->user = $user;
        $this->token = $token;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('msg');
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [GcmChannel::class];
    }

    /**
     * @param $notifiable
     * @return $this
     */
    public function toGcm($notifiable)
    {
        return GcmMessage::create()
            ->badge(1)
            ->title($this->user->name)
            ->message($this->message->message)
            ->priority(GcmMessage::PRIORITY_HIGH);
    }
}
