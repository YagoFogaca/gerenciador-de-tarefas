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
      'Seg' => [],
      'Ter' => [],
      'Qua' => [],
      'Qui' => [],
      'Sex' => [],
      'Sáb' => []
    ];

    $tasks = $this->findAll();

    foreach ($days as $day => &$array) {
      // $day retorna os dias Segunda ...
      foreach ($tasks as $task) {
        // Retorna o array da tarefa
        if ($task['dia'] === strtolower($day)) {
          array_push($array, $task);
        }
      }
    }
    return $days;
  }

  public function findByIdTasks($id)
  {
    $task = $this->findById($id);
    if (!$task) {
      throw new \PDOException('Tarefa não encontrada');
    }

    return $task;
  }

  public function updateTask($id, $task)
  {
    $taskUpdate = $this->findByIdTasks($id);
    $taskUpdate = array_merge($taskUpdate, $task);

    $taskUpdated = $this->update($id, $taskUpdate);
    if (!$taskUpdated) {
      throw new \PDOException('Tarefa não foi atualizada');
    }

    return true;
  }

  public function deleteTask($id)
  {
    $taskDeleted = $this->delete($id);
    if (!$taskDeleted) {
      throw new \PDOException('Tarefa não foi deletada');
    }

    return true;
  }

  public function deleteAllTask()
  {
    $tasksDeleted = $this->deleteAll();
    if (!$tasksDeleted) {
      throw new \PDOException('Tarefas não foram deletadas');
    }

    return true;
  }
}
