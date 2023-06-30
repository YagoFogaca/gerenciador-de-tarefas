<?php

namespace Core;

use Core\Database;

abstract class Model
{
  private $db;

  public function __construct()
  {
    $this->db = Database::connection();
  }

  protected function create(array $taks)
  {
    $query = $this->db->prepare('INSERT INTO tarefa (hora, dia, tarefa) VALUES (:hora, :dia, :tarefa)');
    $query->bindValue(":hora", $taks['hora']);
    $query->bindValue(":dia", $taks['dia']);
    $query->bindValue(":tarefa", $taks['tarefa']);
    $query->execute();

    if (!$query) {
      throw new \PDOException('Erro ao criar a tarefa');
    }

    return true;
  }

  protected function findAll()
  {
    $query = $this->db->prepare('SELECT * FROM tarefa');
    $query->execute();

    return $query->fetchAll(\PDO::FETCH_ASSOC);
  }

  protected function findById($id)
  {
    $query = $this->db->prepare('SELECT * FROM tarefa WHERE id=:id');
    $query->bindValue(":id", $id);
    $query->execute();

    return $query->fetch(\PDO::FETCH_ASSOC);
  }

  protected function update($id, $task)
  {
    $query = $this->db->prepare('UPDATE tarefa SET dia = :dia, hora = :hora, tarefa = :tarefa WHERE id = :id');
    $query->bindValue(':dia', $task['dia']);
    $query->bindValue(':hora', $task['hora']);
    $query->bindValue(':tarefa', $task['tarefa']);
    $query->bindValue(':id', $id);
    $results = $query->execute();
    return $results;
  }
}
