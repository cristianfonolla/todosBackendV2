<?php

<<<<<<< HEAD
namespace App\TodosBackend\Http\Controllers;
=======
namespace PaoloDavila\TodosBackend\Http\Controllers;
>>>>>>> 5f032173417b209584ba0481b77168133212ef43

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class LayoutfloatController extends BaseController
{
    //
    /**
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data = [];
        return view('layoutfloat',$data);
    }

}
