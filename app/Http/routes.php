<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('tasks', 'TasksController@index')->name('tasks.index');

//Route::get('tasks/create', 'TasksController@create')->name('tasks.create');
//Route::post('tasks/store', 'TasksController@store')->name('tasks.store');
//Route::get('tasks/{id}/edit', 'TasksController@edit')->name('tasks.edit');
//Route::put('tasks/{id}/update', 'TasksController@update')->name('tasks.update');
//Route::get('tasks/{id}/show', 'TasksController@show')->name('tasks.show');
//Route::delete('tasks/{id}/destroy','TasksController@destroy')->name('tasks.destroy');


Route::resource('tasks', 'TasksController');