<?php

namespace Cristian\TodosBackend\Repositories;

use \Cristian\TodosBackend\Repositories\Contracts\Repository;
use Cristian\TodosBackend\User;

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