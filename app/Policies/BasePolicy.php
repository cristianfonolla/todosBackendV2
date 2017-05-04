<?php

<<<<<<< HEAD
namespace App\TodosBackend\Policies;

use App\TodosBackend\Task;
use App\TodosBackend\User;
=======
namespace PaoloDavila\TodosBackend\Policies;

use PaoloDavila\TodosBackend\Task;
use PaoloDavila\TodosBackend\User;
>>>>>>> 5f032173417b209584ba0481b77168133212ef43

/**
 * Class BasePolicy.
 *
<<<<<<< HEAD
 * @package App\TodosBackend\Policies
=======
 * @package PaoloDavila\TodosBackend\Policies
>>>>>>> 5f032173417b209584ba0481b77168133212ef43
 */
abstract class BasePolicy
{
    abstract protected function model();

    /**
     * Determine whether the user can list the tasks.
     *
<<<<<<< HEAD
     * @param  \App\TodosBackend\User  $user
=======
     * @param  \PaoloDavila\TodosBackend\User  $user
>>>>>>> 5f032173417b209584ba0481b77168133212ef43
     * @return mixed
     */
    public function show(User $user)
    {
        if ($user->hasPermissionTo('show-' . $this->model())) return true;
    }

    /**
     * Determine whether the user can view the task.
     *
<<<<<<< HEAD
     * @param  \App\TodosBackend\User  $user
     * @param  \App\TodosBackend\Task  $task
=======
     * @param  \PaoloDavila\TodosBackend\User  $user
     * @param  \PaoloDavila\TodosBackend\Task  $task
>>>>>>> 5f032173417b209584ba0481b77168133212ef43
     * @return mixed
     */
    public function view(User $user, Task $task)
    {
        if ($user->hasPermissionTo('view-' . $this->model())) return true;
    }

    /**
     * Determine whether the user can create tasks.
     *
<<<<<<< HEAD
     * @param  \App\TodosBackend\User  $user
=======
     * @param  \PaoloDavila\TodosBackend\User  $user
>>>>>>> 5f032173417b209584ba0481b77168133212ef43
     * @return mixed
     */
    public function create(User $user)
    {
        if ($user->hasPermissionTo('create-' . $this->model())) return true;
    }

    /**
     * Determine whether the user can update the task.
     *
<<<<<<< HEAD
     * @param  \App\TodosBackend\User  $user
     * @param  \App\TodosBackend\Task  $task
=======
     * @param  \PaoloDavila\TodosBackend\User  $user
     * @param  \PaoloDavila\TodosBackend\Task  $task
>>>>>>> 5f032173417b209584ba0481b77168133212ef43
     * @return mixed
     */
    public function update(User $user, Task $task)
    {
        if ($user->hasPermissionTo('update-' . $this->model())) return true;
//        if ($user->isAdmin()) return true;
//        if ($user->hasRole('editor')) return true;
//        return $user->id == $task->user_id;
    }

    /**
     * Determine whether the user can delete the task.
     *
<<<<<<< HEAD
     * @param  \App\TodosBackend\User  $user
     * @param  \App\TodosBackend\Task  $task
=======
     * @param  \PaoloDavila\TodosBackend\User  $user
     * @param  \PaoloDavila\TodosBackend\Task  $task
>>>>>>> 5f032173417b209584ba0481b77168133212ef43
     * @return mixed
     */
    public function delete(User $user, Task $task)
    {
        if ($user->hasPermissionTo('delete-' . $this->model())) return true;
    }
}
