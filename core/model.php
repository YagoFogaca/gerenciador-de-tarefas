<?php

namespace Core;

use Core\Database;

class Model
{
  private $db = Database::connection();

  protected function create(array $taks)
  {
    $query = $this->db->prepare('INSERT INTO tarefa (hora, dia, tarefa) VALUES (:hora, :dia, :tarefa)');
    $query->bindValue(":titulo", $taks['hora']);
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

    return $query->fetchAll(\PDO::FETCH_OBJ);
  }
}
