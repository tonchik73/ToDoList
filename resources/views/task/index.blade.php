@extends('layouts.app')
@section('content')
    @foreach($task as $tasks)
        <div class="m-lg-3">
            <h3>{{ $tasks->task }}</h3>
            <div>
                <a class="btn btn-primary" href="{{ route('task.edit', $tasks->id) }}">Edit</a>
                <form action="{{ route('task.delete', $tasks->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Done" class="btn btn-success">
                </form>
            </div>
        </div>
    @endforeach

@endsection
