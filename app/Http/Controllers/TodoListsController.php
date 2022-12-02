<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTodoListRequest;
use App\Models\TodoList;
use Illuminate\Http\Request;


class TodoListsController extends Controller
{
    public function index()
    {
        return TodoList::all();
    }

    public function get(TodoList $todoList){
        return $todoList->with('cards')->get();
    }

    public function store(CreateTodoListRequest $request){

    }
}
