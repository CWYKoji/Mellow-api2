<?php

use App\Http\Controllers\CardsController;
use App\Http\Controllers\TodoListsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::post('todo-lists', [TodoListsController::class, 'store']);
Route::get('todo-lists', [TodoListsController::class, 'all']);
Route::patch('todo-lists/{todolist}', [TodoListsController::class, 'update']);
Route::delete('todo-lists/{todolist}', [TodoListsController::class, 'delete']);

Route::post('cards', [CardsController::class, 'store']);
Route::get('cards/{card}', [CardsController::class, 'get']);
Route::patch('cards/{card}', [CardsController::class, 'update']);



