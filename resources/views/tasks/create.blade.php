@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center mt-5">Create Task</h1>

        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" id="title" name="title" class="form-control" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea id="description" name="description" class="form-control"></textarea>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="due_date">Due Date</label>
                        <input type="date" id="due_date" name="due_date" class="form-control" required>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Create Task</button>
        </form>
    </div>
@endsection
