<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index($todo_id = null){
        $todo = null;
        if($todo_id != null){
            $todo = Todo::whereId($todo_id)->first();
        }
        return view('welcome',[
            'todo' => $todo,
            'todos'=>Todo::latest()->get()
        ]);
    }

    public function store(Request $request){
        // validate 
        $todo = new Todo();
        $todo->title = $request->title;
        $todo->save();

        return back();
    }

    public function update(Request $request, $todo_id){
        // validate 
        $todo = Todo::findOrFail($todo_id);

        $todo->title = $request->title;
        $todo->save();

        return redirect('/');
    }

    
}
