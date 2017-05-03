<?php

namespace App\TodosBackend\Policies;

/**
 * Class HasAdmin.
 *
 * @package App\TodosBackend\Policies
 */
trait HasAdmin
{
    public function before($user, $ability)
    {
        if ($user->hasRole('admin')) return true;
    }
}