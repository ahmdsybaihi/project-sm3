<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Routing\Controller;

class TodoController extends Controller
{
    // Menampilkan semua todos
    public function index()
    {
        // Mendapatkan data dari API
        $response = Http::get('https://jsonplaceholder.typicode.com/todos');

        if ($response->successful()) {
            $todos = $response->json();
            return view('todos.index', ['todos' => $todos]);
        } else {
            return view('todos.index')->withErrors(['msg' => 'Gagal mengakses data dari API']);
        }
    }

    // Menampilkan form untuk menambahkan todo baru
    public function create()
    {
        return view('todos.create');
    }

    // Menyimpan todo baru
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
        ]);

        Todo::create([
            'title' => $request->title,
            'description' => $request->description,
            'completed' => $request->has('completed'),
        ]);

        return redirect()->route('todos.index')->with('success', 'Todo created successfully.');
    }

    // Menampilkan detail todo
    public function show(Todo $todo)
    {
        return view('todos.show', compact('todo'));
    }

    // Menampilkan form edit untuk todo tertentu
    public function edit(Todo $todo)
    {
        return view('todos.edit', compact('todo'));
    }

    // Memperbarui todo
    public function update(Request $request, Todo $todo)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
        ]);

        $todo->update([
            'title' => $request->title,
            'description' => $request->description,
            'completed' => $request->has('completed'),
        ]);

        return redirect()->route('todos.index')->with('success', 'Todo updated successfully.');
    }

    // Menghapus todo
    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect()->route('todos.index')->with('success', 'Todo deleted successfully.');
    }
}
