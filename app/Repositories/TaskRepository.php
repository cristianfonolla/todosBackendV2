<?php

<<<<<<< HEAD
namespace App\TodosBackend\Repositories;

use \App\TodosBackend\Repositories\Contracts\Repository;
use App\TodosBackend\Task;
=======
namespace PaoloDavila\TodosBackend\Repositories;

use \PaoloDavila\TodosBackend\Repositories\Contracts\Repository;
use PaoloDavila\TodosBackend\Task;
>>>>>>> 5f032173417b209584ba0481b77168133212ef43

class TaskRepository implements Repository
{

    /**
     * @param int   $id
     * @param array $columns
     *
     * @return mixed
     */
    public function find($id, $columns = array('*'))
    {
        return Task::findOrFail($id);
    }

    public function findOrFail($id, $columns = ['*'])
    {
        return Task::findOrFail($id);
    }
    public function paginate($perPage = 15, $columns = array('*'))
    {
        return Task::paginate($perPage);
    }
    public function create(array $data)
    {
        Task::create($data);
    }
    public function update(array $data, $id)
    {
        $task = $this->findOrFail($id);
        $task->update($data);
    }
    public function delete($id)
    {
        $task = $this->findOrFail($id);
        $task->delete();
    }
}