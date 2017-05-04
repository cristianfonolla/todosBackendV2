<?php

<<<<<<< HEAD
namespace App\TodosBackend\Http\Controllers;

use App\TodosBackend\Repositories\TaskRepository;
use App\TodosBackend\Task;
use App\TodosBackend\Transformers\TaskTransformer;
=======
namespace PaoloDavila\TodosBackend\Http\Controllers;

use PaoloDavila\TodosBackend\Repositories\TaskRepository;
use PaoloDavila\TodosBackend\Task;
use PaoloDavila\TodosBackend\Transformers\TaskTransformer;
>>>>>>> 5f032173417b209584ba0481b77168133212ef43
use Auth;
use Gate;
use Illuminate\Http\Request;

/**
 * Class TasksController
 *
<<<<<<< HEAD
 * @package App\TodosBackend\Http\Controllers
=======
 * @package PaoloDavila\TodosBackend\Http\Controllers
>>>>>>> 5f032173417b209584ba0481b77168133212ef43
 */
class TasksController extends Controller
{
    /**
     * Repository object
     *
     * @var TaskRepository
     */
    protected $repository;

    /**
     * TasksController constructor.
     *
     * @param TaskTransformer $transformer
     * @param TaskRepository $repository
     */
    public function __construct(TaskTransformer $transformer, TaskRepository $repository)
    {
        parent::__construct($transformer);

        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
//        $user = Auth::user();
<<<<<<< HEAD
//        if ($user->can('show', \App\TodosBackend\Task::class)) {
//            //
//        }

        //$this->authorize('show', \App\TodosBackend\Task::class);
=======
//        if ($user->can('show', \PaoloDavila\TodosBackend\Task::class)) {
//            //
//        }

        //$this->authorize('show', \PaoloDavila\TodosBackend\Task::class);
>>>>>>> 5f032173417b209584ba0481b77168133212ef43

        // The current user can update the post...
        $tasks = Task::paginate(15);
        return $this->generatePaginatedResponse($tasks, ['propietari' => 'Paolo Davila']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!$request->has('user_id')) {
            $request->merge(['user_id' => Auth::id()]);
        }

        Task::create($request->all());

        return response([
            'error'   => false,
            'created' => true,
            'message' => 'Task created!',
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       //$task = Task::findOrFail($id);
        $task = $this->repository->find($id);

        return $this->transformer->transform($task);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id)->update($request->all());

        //$this->authorize('update', $task);

        return response([
        'error'   => false,
        'updated' => true,
        'message' => 'Task updated!',
    ], 200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Task::findOrFail($id)->delete();

        return response([
            'error'   => false,
            'deleted' => true,
            'message' => 'Task deleted!',
        ], 200);
    }
}
