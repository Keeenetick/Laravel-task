<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Task;

class TasksController extends Controller
{
    
    public function index(){
        return view('tasks.index');
    }

    public function create(){
        return view('tasks.create');
    }

    public function store(Request $request){
        $task = new Task;
        $task->fill($request->all());
        $this->validate($request,[
        'title' => 'required',
        'description' => 'required'
        ]);
        $task->save();
        return redirect()->route('tasks.index');
    

    }
}

