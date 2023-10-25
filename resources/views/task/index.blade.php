@extends('layouts.app')
@section('content')
    @foreach($task as $tasks)
        <div class="m-lg-3">
            <h>{{ $tasks->task }}</h>
            <div>
                <a class="btn btn-primary" href="{{ route('task.edit', $tasks->id) }}">Edit</a>
                <form style="display:inline-block" action="{{ route('task.delete', $tasks->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <input style="display:inline-block" type="submit" value="Done" class="btn btn-success">
                </form>
            </div>
        </div>
    @endforeach

@endsection
