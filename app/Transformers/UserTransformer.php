<?php

namespace App\TodosBackend\Transformers;

use App\TodosBackend\Exceptions\IncorrectModelException;

class UserTransformer extends Transformer
{
    public function transform($resource)
    {
        if (!$resource instanceof \App\TodosBackend\Task) {
            throw new IncorrectModelException();
        }

        return [
            'name'      => $resource['name'],
            'email'     => $resource['email'],
        ];
    }
}
