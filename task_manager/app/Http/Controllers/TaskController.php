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
        $days = [
            0 => [
                'hora' => '',
                'dia' => 'seg',
                'check' => false,
                'tarefa' => ''
            ],
            1 => [
                'hora' => '',
                'dia' => 'ter',
                'check' => false,
                'tarefa' => ''
            ],
            2 => [
                'hora' => '',
                'dia' => 'qua',
                'check' => false,
                'tarefa' => ''
            ],
            3 => [
                'hora' => '',
                'dia' => 'qui',
                'check' => false,
                'tarefa' => ''
            ],
            4 => [
                'hora' => '',
                'dia' => 'sex',
                'check' => false,
                'tarefa' => ''
            ],
            5 => [
                'hora' => '',
                'dia' => 'sáb',
                'check' => false,
                'tarefa' => ''
            ]
        ];

        $new_task = [
            'hora' => $req->input('hora'),
            'dia' =>  strtolower($req->input('dia')),
            'check' => false,
            'tarefa' => $req->input('tarefa')
        ];

        if ($new_task['dia'] === 'td') {
            foreach ($days as $day => $value) {
                $value['hora'] = $new_task['hora'];
                $value['tarefa'] = $new_task['tarefa'];
                $task = new Task($value);
                $task->save();
            }
        } else {
            $task = new Task($new_task);
            $task->save();
        }
        return redirect()->back();
    }

    public function update()
    {
        return view('pages.update');
    }
}
