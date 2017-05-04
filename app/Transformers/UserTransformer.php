<?php

namespace Cristian\TodosBackend\Transformers;

use Cristian\TodosBackend\Exceptions\IncorrectModelException;

class UserTransformer extends Transformer
{
    public function transform($resource)
    {
        if (!$resource instanceof \Cristian\TodosBackend\Task) {
            throw new IncorrectModelException();
        }

        return [
            'name'      => $resource['name'],
            'email'     => $resource['email'],
        ];
    }
}
