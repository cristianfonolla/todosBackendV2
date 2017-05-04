<?php

<<<<<<< HEAD
namespace App\TodosBackend\Http\Controllers\Auth;

use App\TodosBackend\Http\Controllers\Controller;
=======
namespace PaoloDavila\TodosBackend\Http\Controllers\Auth;

use PaoloDavila\TodosBackend\Http\Controllers\Controller;
>>>>>>> 5f032173417b209584ba0481b77168133212ef43
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Display the form to request a password reset link.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLinkRequestForm()
    {
        return view('adminlte::auth.passwords.email');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
}
