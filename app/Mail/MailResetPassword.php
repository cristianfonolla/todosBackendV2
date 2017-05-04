<?php

<<<<<<< HEAD
namespace App\TodosBackend\Mail;
=======
namespace PaoloDavila\TodosBackend\Mail;
>>>>>>> 5f032173417b209584ba0481b77168133212ef43

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailResetPassword extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('view.name');
    }
}
