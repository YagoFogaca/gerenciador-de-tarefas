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
            'hora' => $req->input('hora'),
            'dia' =>  $req->input('dia'),
            'check' => false,
            'tarefa' => $req->input('tarefa')
        ];

        $task = new Task($new_task);
        $task->save();
        return redirect()->back();
    }

    public function update()
    {
        return view('pages.update');
    }
}
