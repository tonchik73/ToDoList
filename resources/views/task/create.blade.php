@extends('layouts.app')
@section('content')
    <form action="{{ route('task.store') }}" method="POST">
        @csrf
        <div class="m-lg-3">
            <label for="task" >Task</label>
            <input type="text" name="task" class="form-control" placeholder="Enter your tasks">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>

    </form>
@endsection
