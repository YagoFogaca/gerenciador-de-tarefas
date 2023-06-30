<?php

namespace Src\Controller;

use Core\Controller as ConfigController;
use Src\Model\Model;

class Controller extends ConfigController
{
  public function index()
  {
    try {
      $model = new Model();
      $this->view->tasks = $model->findAllTasks();
      $this->run('index');
      exit();
    } catch (\PDOException $error) {
      $msgError = $error->getMessage();
      echo "<script>alert('$msgError')</script>";
    }
  }

  public function createTask()
  {
    $this->run('create');
    exit();
  }

  public function create()
  {
    try {
      $model = new Model();
      $model->createTask($_POST);
      echo '<script>alert("Criado com sucesso")</script>';
      $this->run('create');
      exit();
    } catch (\PDOException $error) {
      $msgError = $error->getMessage();
      echo "<script>alert('$msgError')</script>";
    }
  }

  public function updateTask()
  { {
      try {
        $model = new Model();

        $this->view->task = $model->findByIdTasks($_GET['id']);
        $this->run('update');
        exit();
      } catch (\PDOException $error) {
        $msgError = $error->getMessage();
        echo "<script>alert('$msgError')</script>";
      }
    }
  }

  public function update()
  {
    try {
      $model = new Model();
      $model->updateTask($_GET['id'], $_POST);
      header("Location: /update?id= {$_GET['id']}");
    } catch (\PDOException $error) {
      $msgError = $error->getMessage();
      echo "<script>alert('$msgError')</script>";
    }
  }

  public function delete()
  {
    try {
      $model = new Model();
      $model->deleteTask($_GET['id']);
      header("Location: /");
    } catch (\PDOException $error) {
      $msgError = $error->getMessage();
      echo "<script>alert('$msgError')</script>";
    }
  }

  public function deleteAll()
  {
    try {
      $model = new Model();
      $model->updateTask($_GET['id'], $_POST);
      header("Location: /update?id= {$_GET['id']}");
    } catch (\PDOException $error) {
      $msgError = $error->getMessage();
      echo "<script>alert('$msgError')</script>";
    }
  }

  public function page404()
  {
    $this->run('page404');
    exit();
  }
}
