<?php

namespace App\Http\Controllers;

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

        request()->validate([
            'task' => ['required', 'max:50', 'min:5']
        ]);

        return back()->with('msg', 'Task added');
    }
}
