<?php

<<<<<<< HEAD
namespace App\TodosBackend\Http\Middleware;
=======
namespace PaoloDavila\TodosBackend\Http\Middleware;
>>>>>>> 5f032173417b209584ba0481b77168133212ef43

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
    ];
}
