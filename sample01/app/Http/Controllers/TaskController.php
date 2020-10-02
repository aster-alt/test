<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Requests\CreateTask;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        return view('tasks.index',[
            'tasks' => $tasks,
        ]);
    }

    public function new()
    {
        return view('tasks.new');
    }

    public function create(CreateTask $request)
    {
        $task = new Task();
        $task->title = $request->title;
        $task->comment = $request->comment;
        $task->created_at = Carbon::now();
        $task->updated_at = Carbon::now();
        $task->save();

        $tasks = Task::all();

        return view('tasks.index',[
            'tasks' => $tasks,
        ]);
    }

    public function edit(Request $request)
    {
        $task = Task::find($request->id);
        
        return view('tasks.edit',[
            'task' => $task,
        ]);
    }

    public function renew(Request $request)
    {
        $task = Task::find($request->id);
        $task->title = $request->title;
        $task->comment = $request->comment;
        $task->updated_at = Carbon::now();
        $task->save();

        $tasks = Task::all();

        return view('tasks.index',[
            'tasks' => $tasks,
        ]);
    }

    public function delete(Request $request)
    {
        $task = Task::find($request->id);
        $task->delete();

        $tasks = Task::all();

        return view('tasks.index',[
            'tasks' => $tasks,
        ]);
    }
}
