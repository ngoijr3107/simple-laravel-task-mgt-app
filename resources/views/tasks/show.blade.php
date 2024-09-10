@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-center mt-5">Task Details</h2>

        <div class="card">
            <div class="card-header">
                <h4>{{ $task->title }}</h4>
            </div>

            <div class="card-body">
                <p><strong>Description:</strong></p>
                <p>{{ $task->description }}</p>

                <p><strong>Status:</strong></p>
                <p>{{ ucfirst($task->status) }}</p>

                <p><strong>Due Date:</strong></p>
                <p>{{ $task->due_date->format('Y-m-d') }}</p>

                <p><strong>Created By:</strong></p>
                <p>{{ $task->user->name }}</p>
            </div>

            <div class="card-footer">
                <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Back to Task List</a>
                <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Edit Task</a>
            </div>
        </div>
    </div>
@endsection
