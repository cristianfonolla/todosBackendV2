<?php

<<<<<<< HEAD
namespace App\TodosBackend\Http\Middleware;
=======
namespace PaoloDavila\TodosBackend\Http\Middleware;
>>>>>>> 5f032173417b209584ba0481b77168133212ef43

use Illuminate\Cookie\Middleware\EncryptCookies as BaseEncrypter;

class EncryptCookies extends BaseEncrypter
{
    /**
     * The names of the cookies that should not be encrypted.
     *
     * @var array
     */
    protected $except = [
        //
    ];
}
