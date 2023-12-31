@extends('layouts.app')
@section('content')
    <form action="{{ route('task.store') }}" method="POST">
        @csrf
        <div class="m-lg-3">
            <label for="task">Task</label>
            <input type="text" name="task" class="form-control" placeholder="Enter your tasks">
            <input type="hidden" name="user_id" value="{{ $task = auth()->user()->id }}">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>
@endsection
