<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('show', function () {
    return view('show');
});
Route::get('tasks', function () {
    $tasks = [
        'first-task'=>'Tasks 1',
        'second-task'=>'Tasks 2',
        'third-task'=>'Tasks 3'
    ];
    return view('tasks', compact('tasks'));
});
Route::get('show/{id}', function ($id) {
    $tasks = [
        'first-task'=>'Tasks 1',
        'second-task'=>'Tasks 2',
        'third-task'=>'Tasks 3'
    ];
    try {
        $task = $tasks[$id];
        return view('show', compact('task'));
      }catch(Exception $e) {
        return view('tasks', compact('tasks'));
      }


});
