<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $task = auth()->user()->usersTasks;

        return view('task.index', compact('task'));
    }

    public function create()
    {
        return view('task.create');
    }

    public function store()
    {
        $task = auth()->user();
        $data = request()->validate([
            'task' => 'string',
            'user_id' => '',
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
