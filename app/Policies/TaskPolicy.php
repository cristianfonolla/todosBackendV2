<?php

namespace App\TodosBackend\Policies;

use App\TodosBackend\User;
use App\TodosBackend\Task;
use Illuminate\Auth\Access\HandlesAuthorization;

/**
 * Class TaskPolicy.
 *
 * @package App\TodosBackend\Policies
 */
class TaskPolicy extends BasePolicy
{
    use HandlesAuthorization,HasAdmin;

    protected function model()
    {
        return 'task';
    }
}
