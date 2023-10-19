<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Task;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function index() {
        return Task::all();
    }

    public function show(Task $task) {
        // Mostrar una nota específica
        return $task;
    }

    public function store(Request $request)
    {
        // Crear una nueva nota
        $task = Task::create($request->all());
        return $task;
    }

    public function update(Request $request, Task $task) {
        // Actualizar una nota
        $task->update($request->all());
        return $task;
    }


    public function destroy(Task $task) {
        // Eliminar una nota
        $task->delete();
        return response()->json(null, 204); // Respuesta exitosa sin contenido
        }

    public function latest() {
        $lastTasks = Task::orderBy('created_at', 'desc')->get();
        return $lastTasks;
    }

    public function done(Task $task) {
            $task->update(['done' => true]);
            return $task;
        }

    public function undone(Task $task) {
        $task->update(['done' => false]);
        return $task;
        }
}
