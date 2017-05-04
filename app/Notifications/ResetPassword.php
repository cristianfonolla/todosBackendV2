<?php

<<<<<<< HEAD:app/Notifications/ResetPassword.php
namespace App\TodosBackend\Notifications;
=======
namespace PaoloDavila\TodosBackend\Notifications;
>>>>>>> 5f032173417b209584ba0481b77168133212ef43:app/Notifications/ResetPassword.php

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

/**
 * Class ResetPassword
<<<<<<< HEAD:app/Notifications/ResetPassword.php
 * @package App\TodosBackend\Notifications
=======
 * @package PaoloDavila\TodosBackend\Notifications
>>>>>>> 5f032173417b209584ba0481b77168133212ef43:app/Notifications/ResetPassword.php
 */
class ResetPassword extends Notification
{
    use Queueable;

    /**
     * @var
     */
    public $token;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $url = 'password/reset' . $this->token;

        return (new MailMessage)
            ->markdown('notifications.email',['url' => $url])
            ->subject('Password Reset!');
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
            //
        ];
    }
}
