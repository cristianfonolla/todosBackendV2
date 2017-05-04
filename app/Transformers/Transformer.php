<?php

<<<<<<< HEAD
namespace App\TodosBackend\Transformers;

use \App\TodosBackend\Transformers\Contracts\Transformer as TransformerContract;
=======
namespace PaoloDavila\TodosBackend\Transformers;

use \PaoloDavila\TodosBackend\Transformers\Contracts\Transformer as TransformerContract;
>>>>>>> 5f032173417b209584ba0481b77168133212ef43

abstract class Transformer implements TransformerContract {
    public function transformCollection($resources) {
        return array_map(function($resource) {
            return $this->transform($resource);
        }, $resources);
    }
}