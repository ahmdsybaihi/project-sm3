@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create New Todo</h2>
    <form action="{{ route('todos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>

        <div class="form-check">
            <input type="checkbox" name="completed" id="completed" class="form-check-input">
            <label for="completed" class="form-check-label">Completed</label>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Save Todo</button>
    </form>
</div>
@endsection
