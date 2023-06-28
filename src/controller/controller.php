<?php

namespace Src\Controller;

use Core\Controller as ConfigController;

class Controller extends ConfigController
{
  public function index()
  {
    $this->run('index');
    exit();
  }

  public function page404()
  {
    $this->run('page404');
    exit();
  }
}
