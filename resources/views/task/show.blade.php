@extends('layouts.app')
@section('content')
    <div class="m-lg-3">{{ $task->task }}</div>
    <div class="m-lg-3">
        <a href="{{ route('task.index') }}">Back</a>
    </div>
@endsection
