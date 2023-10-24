@extends('layouts.app')
@section('content')
    <form action="{{ route('task.update', $task->id) }}" method="post">
        @csrf
        @method('patch')
        <div class="m-lg-3">
            <label for="task" >Task</label>
            <input type="text" name="task" class="form-control" placeholder="Enter your tasks" value="{{$task->task}}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
