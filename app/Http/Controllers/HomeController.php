<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

<<<<<<< HEAD
namespace App\TodosBackend\Http\Controllers;

use App\TodosBackend\Http\Requests;
=======
namespace PaoloDavila\TodosBackend\Http\Controllers;

use PaoloDavila\TodosBackend\Http\Requests;
>>>>>>> 5f032173417b209584ba0481b77168133212ef43
use Illuminate\Http\Request;

/**
 * Class HomeController
<<<<<<< HEAD
 * @package App\TodosBackend\Http\Controllers
=======
 * @package PaoloDavila\TodosBackend\Http\Controllers
>>>>>>> 5f032173417b209584ba0481b77168133212ef43
 */
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        return view('adminlte::home');
    }
}