<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        return view('tasks.index', compact('tasks'));
    }

    public function store()
    {
        // dd(request());

        $task = request()->validate([
            'task' => ['required', 'max:50', 'min:5']
        ]);

        Task::create($task);

        return back()->with('msg', 'Task added');
    }

    public function update(Task $task)
    {

        $update = request()->validate([
            'complete' => ['required', 'boolean']
        ]);

        $task->update($update);

        $message = request()->complete ? 'Task set to complete' : 'Task set to incomplete';

        return back()->with('msg', $message);
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return back()->with('msg', 'Task deleted');
    }
}
