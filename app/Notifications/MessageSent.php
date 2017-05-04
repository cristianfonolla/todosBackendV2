<?php

<<<<<<< HEAD
namespace App\TodosBackend\Notifications;
=======
namespace PaoloDavila\TodosBackend\Notifications;
>>>>>>> 5f032173417b209584ba0481b77168133212ef43

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use NotificationChannels\Gcm\GcmChannel;
use NotificationChannels\Gcm\GcmMessage;
use NotificationChannels\OneSignal\OneSignalMessage;
<<<<<<< HEAD
use App\TodosBackend\Message;
use App\TodosBackend\User;
=======
use PaoloDavila\TodosBackend\Message;
use PaoloDavila\TodosBackend\User;
>>>>>>> 5f032173417b209584ba0481b77168133212ef43
use Storage;

/**
 * Class MessageSent
<<<<<<< HEAD
 * @package App\TodosBackend\Notifications
=======
 * @package PaoloDavila\TodosBackend\Notifications
>>>>>>> 5f032173417b209584ba0481b77168133212ef43
 */
class MessageSent extends Notification
{
    use Queueable;

    /**
     * @var
     */
    public $user;

    /**
     * @var
     */
    public $message;

    /**
     * @var
     */
    public $imageURL;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(User $user, Message $message)
    {
        $this->user = $user;
        $this->message = $message;
        $this->imageURL = Storage::url('todosVueLogoLauncher.png');
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [GcmChannel::class, TelegramChannel::class];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        //
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            $this->user,
            $this->message
        ];
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
            ->data('message', $this->message)
            ->data('user', $this->user)
            ->data('image-type', 'circular')
            ->data('style', 'inbox')
            ->data('summaryText', 'There are %n% notifications"');
    }

    /**
     * @param $notifiable
     * @return $this
     */
    public function toOneSignal($notifiable)
    {
        return OneSignalMessage::create()
            ->subject($this->user)
            ->body($this->message);
    }

    /**
     * @param $notifiable
     * @return mixed
     */
    public function toTelegram($notifiable)
    {
        $url = url('https://todosbackend.pdavila.2dam.acacha.org');

        return TelegramMessage::create()
            ->to('@dam21617alum')
            ->content($this->message->message)
            ->button('Go to my todosBackend', $url);
    }
}
