<?php

<<<<<<< HEAD
namespace App\TodosBackend\Policies;
=======
namespace PaoloDavila\TodosBackend\Policies;
>>>>>>> 5f032173417b209584ba0481b77168133212ef43

/**
 * Class HasAdmin.
 *
<<<<<<< HEAD
 * @package App\TodosBackend\Policies
=======
 * @package PaoloDavila\TodosBackend\Policies
>>>>>>> 5f032173417b209584ba0481b77168133212ef43
 */
trait HasAdmin
{
    public function before($user, $ability)
    {
        if ($user->hasRole('admin')) return true;
    }
}