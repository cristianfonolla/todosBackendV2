<?php

namespace Cristian\TodosBackend\Policies;

/**
 * Class HasAdmin.
 *
 * @package Cristian\TodosBackend\Policies
 */
trait HasAdmin
{
    /**
     * @param $user
     * @param $ability
     * @return bool
     */
    public function before($user, $ability)
    {
        if ($user->hasRole('admin')) return true;
    }
}
