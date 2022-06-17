<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {

        return view('tasks.index');
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
}
