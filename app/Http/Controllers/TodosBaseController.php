<?php

<<<<<<< HEAD
namespace App\TodosBackend\Http\Controllers;
=======
namespace PaoloDavila\TodosBackend\Http\Controllers;
>>>>>>> 5f032173417b209584ba0481b77168133212ef43

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as IlluminateController;

/**
 * Class BaseController.
 *
<<<<<<< HEAD
 * @package App\TodosBackend\Http\Controllers
=======
 * @package PaoloDavila\TodosBackend\Http\Controllers
>>>>>>> 5f032173417b209584ba0481b77168133212ef43
 */
class TodosBaseController extends IlluminateController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}