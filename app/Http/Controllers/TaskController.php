<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::latest()->get();
        return view('home', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',

        ]);
        $validated['is_done'] = $request->has('is_done') ? 1 : 0;
        Task::create($validated);

        return redirect()->route('task.index')->with('task creer avec success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        return view('edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);
        // Si le champ is_done existe, il vaut 1, sinon 0
        $validated['is_done'] = $request->has('is_done') ? 1 : 0;

        $task->update($validated);

        return redirect()->route('task.index')->with('success', 'Tâche mise à jour avec succès!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('task.index')->with('success', 'Tâche supprimer avec succès!');
    }
}
