<?php

<<<<<<< HEAD
namespace App\TodosBackend\Policies;

use App\TodosBackend\User;
use App\TodosBackend\Task;
=======
namespace PaoloDavila\TodosBackend\Policies;

use PaoloDavila\TodosBackend\User;
use PaoloDavila\TodosBackend\Task;
>>>>>>> 5f032173417b209584ba0481b77168133212ef43
use Illuminate\Auth\Access\HandlesAuthorization;

/**
 * Class TaskPolicy.
 *
<<<<<<< HEAD
 * @package App\TodosBackend\Policies
=======
 * @package PaoloDavila\TodosBackend\Policies
>>>>>>> 5f032173417b209584ba0481b77168133212ef43
 */
class TaskPolicy extends BasePolicy
{
    use HandlesAuthorization,HasAdmin;

    protected function model()
    {
        return 'task';
    }
}
