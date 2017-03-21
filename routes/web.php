<?php

use App\Task;

Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => 'can:show,App\Task'], function () {
        Route::get('/tasks', function () {
            return view('tasks');
        });
    });

    Route::get('tasks1', function()
    {
        $tasks = Task::all();
        return view('tasks.index', ['tasks' => $tasks]);
    });

    Route::get('/profile/tokens', function () {
        return view('tokens');
    });

    Route::get('users', function () {
        dd(App\User::paginate());
    });

    Route::get('/boxmodel', function () {
        return view('boxmodel');
    });

    Route::get('/float', function () {
        return view('float');
    });

    Route::get('/layoutfloat', function () {
        return view('layoutfloat');
    });

    Route::get('/Csstable', function () {
        return view('csstable');
    });

    Route::get('/bootstraplayout1', function () {
        return view('bootstraplayout1');
    });

    #adminlte_routes
    Route::get('provatest', 'ProvatestController@index')->name('provatest');

    Route::get('flexboxlayout', 'FlexboxlayoutController@index')->name('flexboxlayout');

});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/phpinfo', function () {
    phpinfo();
});