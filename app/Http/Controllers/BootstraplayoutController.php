<?php

<<<<<<< HEAD
namespace App\TodosBackend\Http\Controllers;
=======
namespace PaoloDavila\TodosBackend\Http\Controllers;
>>>>>>> 5f032173417b209584ba0481b77168133212ef43

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class BootstraplayoutController extends BaseController
{
    //
    /**
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data = [];
        return view('bootstraplayout',$data);
    }

}
