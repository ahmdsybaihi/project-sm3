@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Todo Details</h2>
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">{{ $todo->title }}</h3>
            <p class="card-text">{{ $todo->description }}</p>
            <p>Status: {{ $todo->completed ? 'Completed' : 'Incomplete' }}</p>
        </div>
    </div>
    <a href="{{ route('todos.edit', $todo->id) }}" class="btn btn-secondary mt-3">Edit Todo</a>
</div>
@endsection
