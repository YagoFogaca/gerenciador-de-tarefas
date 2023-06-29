<?php

namespace Core;

abstract class Database
{
  public static function connection()
  {
    try {
      $connection = new \PDO(
        'mysql:host=localhost;dbname=task_manager;charsert=utf8',
        "root",
        ""
      );

      return $connection;
    } catch (\PDOException $error) {
      throw new \Exception('Falha na conexão com o banco de dados: ' . $error->getMessage());
    }
  }
}
