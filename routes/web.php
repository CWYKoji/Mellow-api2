<?php

use Illuminate\Support\Facades\Route;
use App\Models\TodoList;
use App\Http\Controllers\TodoListsController;

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
    return TodoList::all();
});

Route::get('/todo-lists', [TodoListsController::class, 'index'])
->name('todo-lists.index');

Route::get('/todo-lists/{todolist}', [TodoListsController::class, 'get'])
->name('todo-lists.get');

Route::post('/todo-lists',[TodoListsController::class, 'store'])
->name('todo-list.store');
