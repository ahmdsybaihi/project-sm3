@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Todo</h2>
    <form action="{{ route('todos.update', $todo->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $todo->title }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" id="description" class="form-control">{{ $todo->description }}</textarea>
        </div>

        <div class="form-check">
            <input type="checkbox" name="completed" id="completed" class="form-check-input" {{ $todo->completed ? 'checked' : '' }}>
            <label for="completed" class="form-check-label">Completed</label>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Update Todo</button>
    </form>
</div>
@endsection
