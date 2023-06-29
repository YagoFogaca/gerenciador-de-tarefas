<?php

namespace Src\Model;

use Core\Model as ModelConfig;

class Model extends ModelConfig
{
  public function createTask($task)
  {
    $days = [
      0 => [
        'hora' => '',
        'dia' => 'seg',
        'tarefa' => ''
      ],
      1 => [
        'hora' => '',
        'dia' => 'ter',
        'tarefa' => ''
      ],
      2 => [
        'hora' => '',
        'dia' => 'qua',
        'tarefa' => ''
      ],
      3 => [
        'hora' => '',
        'dia' => 'qui',
        'tarefa' => ''
      ],
      4 => [
        'hora' => '',
        'dia' => 'sex',
        'tarefa' => ''
      ],
      5 => [
        'hora' => '',
        'dia' => 'sáb',
        'tarefa' => ''
      ]
    ];

    $task['dia'] = strtolower($task['dia']);
    $task['tarefa'] = strtolower($task['tarefa']);

    if ($task['dia'] === 'td') {
      foreach ($days as $day => &$value) {
        $value['hora'] = $task['hora'];
        $value['tarefa'] = $task['tarefa'];
        $this->create($value);
      }
    } else {
      $this->create($task);
    }
  }

  public function findAllTasks()
  {
    $days = [
      'Segunda' => [],
      'Terça' => [],
      'Quarta' => [],
      'Quinta' => [],
      'Sexta' => [],
      'Sábado' => []
    ];

    $tasks = $this->findAll();

    // foreach ($days as $day => &$array) {
    //   // print_r($day);
    //   foreach ($tasks as $task) {
    //     // print_r($task);
    //     // tem que ser igual a task[dia] $day
    //     // array_push($array, $task);
    //   }
    // }

    // Array
    // (
    //     [0] => Array
    //         (
    //             [id] => 3
    //             [hora] => 20:19
    //             [dia] => seg
    //             [tarefa] => teste 1
    //         )

    //     [1] => Array
    //         (
    //             [id] => 4
    //             [hora] => 23:19
    //             [dia] => ter
    //             [tarefa] => teste 2
    //         )

    // )

    return $tasks;
  }
}
