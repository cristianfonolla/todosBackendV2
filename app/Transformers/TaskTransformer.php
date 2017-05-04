<?php

<<<<<<< HEAD
namespace App\TodosBackend\Transformers;

use App\TodosBackend\Exceptions\IncorrectModelException;
use App\TodosBackend\Task;
=======
namespace PaoloDavila\TodosBackend\Transformers;

use PaoloDavila\TodosBackend\Exceptions\IncorrectModelException;
use PaoloDavila\TodosBackend\Task;
>>>>>>> 5f032173417b209584ba0481b77168133212ef43

/**
 * Class TaskTransformer.
 *
<<<<<<< HEAD
 * @package App\TodosBackend\Transformers
=======
 * @package PaoloDavila\TodosBackend\Transformers
>>>>>>> 5f032173417b209584ba0481b77168133212ef43
 */
class TaskTransformer extends Transformer
{
    /**
     * Transform a task.
     *
     * @param $resource
     * @return array
     * @throws IncorrectModelException
     */
    public function transform($resource)
    {
        if (!$resource instanceof Task) {
            throw new IncorrectModelException();
        }

        return [
            'id'       => (int) $resource['id'],
            'name'     => $resource['name'],
            'done'     => (bool) $resource['done'],
            'priority' => (int) $resource['priority'],
            'user_id'  => (int) $resource['user_id'],
        ];
    }
}
