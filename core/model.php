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
}
