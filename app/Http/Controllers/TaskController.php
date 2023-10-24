<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $task = Task::all();
        return view('task.index', compact('task'));
    }

    public function create()
    {
        return view('task.create');
    }

    public function store()
    {
        $data = request()->validate([
            'task' => 'string',
        ]);
        Task::create($data);
        return redirect()->route('task.index');
    }

    /*
        public function show(Task $task)
        {
            return view('task.show', compact('task'));
        }
    */
    public function edit(Task $task)
    {
        return view('task.edit', compact('task'));
    }

    public function update(Task $task)
    {
        $data = request()->validate([
            'task' => 'string',
        ]);
        $task->update($data);
        return redirect()->route('task.index', $task->id);
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('task.index');
    }
}
