<?php

namespace Src;

use Core\Routes as ConfigRoutes;

class Routes extends ConfigRoutes
{
  public function initRoutes()
  {
    $routes = [
      "home" => [
        "path" => "/",
        "action" => "index"
      ],
      "createTask" => [
        "path" => "/create-task",
        "action" => "createTask"
      ],
      "create" => [
        "path" => "/create",
        "action" => "create"
      ]
    ];

    $this->setRoutes($routes);
  }
}
