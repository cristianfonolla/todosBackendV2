<?php

<<<<<<< HEAD
namespace App\TodosBackend\Transformers;

use App\TodosBackend\Exceptions\IncorrectModelException;
=======
namespace PaoloDavila\TodosBackend\Transformers;

use PaoloDavila\TodosBackend\Exceptions\IncorrectModelException;
>>>>>>> 5f032173417b209584ba0481b77168133212ef43

class UserTransformer extends Transformer
{
    public function transform($resource)
    {
<<<<<<< HEAD
        if (!$resource instanceof \App\TodosBackend\Task) {
=======
        if (!$resource instanceof \PaoloDavila\TodosBackend\Task) {
>>>>>>> 5f032173417b209584ba0481b77168133212ef43
            throw new IncorrectModelException();
        }

        return [
            'name'      => $resource['name'],
            'email'     => $resource['email'],
        ];
    }
}
