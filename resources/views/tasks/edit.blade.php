@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-center mt-5">Edit Task</h2>

        <form action="{{ route('tasks.update', $task->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" value="{{ $task->title }}" required>
                </div>

                <div class="col-md-6">
                    <label>Description</label>
                    <textarea class="form-control" name="description">{{ $task->description }}</textarea>
                </div>

                <div class="col-md-6">
                    <label>Status</label>
                    <select class="form-control" name="status">
                        <option value="pending" {{ $task->status == 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="completed" {{ $task->status == 'completed' ? 'selected' : '' }}>Completed</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label>Due date</label>
                    <input type="date" class="form-control" name="due_date" value="{{ $task->due_date->format('Y-m-d') }}" required>
                </div>
            </div>

            <button class="btn btn-success mt-2">Update</button>
        </form>
    </div>
@endsection
