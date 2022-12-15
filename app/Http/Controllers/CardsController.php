<?php

namespace App\Http\Controllers;

use App\Http\Resources\CardResource;
use Illuminate\Http\Request;
use App\Models\Card;

class CardsController extends Controller
{
    public function all(){

    }

    public function get(Card $card){

        return new CardResource($card);

    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required|min:3|max:255',
            'description' => 'nullable|sometimes|string',
            'todo_list_id' => 'required|exists:todo_lists,id'
        ]);

        $card = new Card;
        $card->title = $request->input('title');
        $card->description = $request->input('description');
        $card->todo_list_id = $request->input('todo_list_id');
        
        $card->save();
        
        return new CardResource($card);

    }

    public function update(Request $request, Card $card)
    {
        $request->validate([
            'title' => 'nullable|sometimes|required|min:3|max:255',
            'description' => 'nullable|sometimes|string',
            'todo_list_id' => 'nullable|sometimes|exists:todo_lists,id'
        ]);

        if($request->has('title')){
            $card->title = $request->input('title');
        }

        if($request->has('description')){
            $card->description = $request->input('description');
        }

        if($request->has('todo_list_id')){
            $card->todo_list_id = $request->input('todo_list_id');
        }

        $card->save();

        return new CardResource($card);


    }
}
