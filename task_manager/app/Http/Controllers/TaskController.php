<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{

    public function index()
    {
        return view('pages.index');
    }

    public function create()
    {
        return view('pages.create');
    }

    public function createTask(Request $req)
    {
        $new_task = [
            'hora' => '18:20',
            'dia' => 'seg',
            'check' => false,
            'tarefa' => 'Testeee'
        ];

        $task = new Task($new_task);
        $task->save();
    }

    public function update()
    {
        return view('pages.update');
    }
}
