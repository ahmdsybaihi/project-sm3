<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #e9ecef;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 1400px;
            margin: auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .title {
            font-size: 2.5em;
            text-align: center;
            margin-bottom: 30px;
            color: #343a40;
            text-transform: uppercase;
        }

        .todo-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 20px;
        }

        .todo-card {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            flex: 1 1 300px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.15);
            transition: transform 0.2s, box-shadow 0.2s;
            border-left: 5px solid #007bff;
            position: relative;
        }

        .todo-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .todo-title {
            font-size: 1.5em;
            font-weight: bold;
            color: #343a40;
            margin-bottom: 10px;
        }

        .todo-info {
            font-size: 1em;
            color: #6c757d;
            margin-bottom: 6px;
        }

        .todo-status {
            font-weight: bold;
            padding: 4px 8px;
            border-radius: 4px;
            display: inline-block;
            margin-top: 10px;
        }

        .todo-status.complete {
            background-color: #28a745;
            color: #ffffff;
        }

        .todo-status.incomplete {
            background-color: #dc3545;
            color: #ffffff;
        }

        /* Button styling */
        .btn {
            display: inline-block;
            padding: 6px 12px;
            margin-top: 10px;
            text-decoration: none;
            color: #fff;
            border-radius: 4px;
            font-size: 0.9em;
            cursor: pointer;
        }

        .btn-create {
            background-color: #007bff;
            margin-bottom: 15px;
            display: inline-block;
        }

        .btn-edit {
            background-color: #ffc107;
            margin-right: 5px;
        }

        .btn-delete {
            background-color: #dc3545;
        }

        .btn-delete:hover {
            background-color: #c82333;
        }

        .btn-edit:hover {
            background-color: #e0a800;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="title">Todo List</div>

        <!-- Tombol untuk membuat todo baru -->
        <a href="{{ route('todos.create') }}" class="btn btn-create">Create New Todo</a>

        <div class="todo-list">
            @foreach($todos as $todo)
                <div class="todo-card">
                    <div class="todo-title">Todo: {{ $todo['title'] }}</div>
                    <div class="todo-info"><strong>User ID:</strong> {{ $todo['userId'] }}</div>
                    <div class="todo-info todo-status {{ $todo['completed'] ? 'complete' : 'incomplete' }}">
                        {{ $todo['completed'] ? 'Completed' : 'Incomplete' }}
                    </div>

                    <!-- Tombol Edit dan Delete -->
                    <a href="{{ route('todos.edit', $todo['id']) }}" class="btn btn-edit">Edit</a>

                    <form action="{{ route('todos.destroy', $todo['id']) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-delete" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
