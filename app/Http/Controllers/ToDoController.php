<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\ToDo;

class ToDoController extends Controller
{
    public function index()
    {
    	$todos = ToDo::all();
    	return view('todo')->with('todos',$todos);
    }

    public function store(Request $request)
    {
    	$todo = new ToDo;
    	$todo->list = $request->todo;
    	$todo->save();
    	Session::flash('success','Your To do was created!');
    	return redirect()->back();
    }

    public function delete($id)
    {
    	$todo = ToDo::find($id);
    	$todo->delete();
    	Session::flash('success','Your To do was deleted!');
    	return redirect()->back();
    }

    public function updateview($id)
    {
    	$todo = ToDo::find($id);
    	return view('updateTodo')->with('todo',$todo);
    }

    public function update($id,Request $request)
    {
    	$todo = ToDo::find($id);
    	$todo->list = $request->todo;
    	$todo->save();
    	Session::flash('success','Your To do is updated!');
    	return redirect()->route('todo');
    }

    public function completed($id)
    {
    	$todo = ToDo::find($id);
    	$todo->completed = 1;
    	$todo->save();
    	Session::flash('success','Your To do was marked completed!');
    	return redirect()->back();
    }
}
