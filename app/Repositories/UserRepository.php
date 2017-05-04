<?php

<<<<<<< HEAD
namespace App\TodosBackend\Repositories;

use \App\TodosBackend\Repositories\Contracts\Repository;
use App\TodosBackend\User;
=======
namespace PaoloDavila\TodosBackend\Repositories;

use \PaoloDavila\TodosBackend\Repositories\Contracts\Repository;
use PaoloDavila\TodosBackend\User;
>>>>>>> 5f032173417b209584ba0481b77168133212ef43

class UserRepository implements Repository
{
    /**
     * @param int   $id
     * @param array $columns
     *
     * @return mixed
     */
    public function find($id, $columns = array('*'))
    {
        return User::findOrFail($id);
    }

    public function findOrFail($id, $columns = ['*'])
    {
        return User::findOrFail($id);
    }
    public function paginate($perPage = 15, $columns = array('*'))
    {
        return User::paginate($perPage);
    }
    public function create(array $data)
    {
        User::create($data);
    }
    public function update(array $data, $id)
    {
        $user = $this->findOrFail($id);
        $user->update($data);
    }
    public function delete($id)
    {
        $user = $this->findOrFail($id);
        $user->delete();
    }
}