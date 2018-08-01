<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Task;


class TasksController extends Controller
{
    
    public function index(){
        $tasks = Task::all(); 
        return view('tasks.index', ['tasks' =>$tasks]);
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

    public function edit($id){
        $MyTask = Task::find($id);
        return view ('tasks.edit', ['task'=>$MyTask]);
    }

    public function update(Request $request, $id){
        $this->validate($request,[
            'title' => 'required',
           'description' => 'required'
            ]);
            $MyTask = Task::find($id);
            $MyTask->fill($request->all());
            $MyTask->save();
            return redirect()->route('task.index');
    }
}

