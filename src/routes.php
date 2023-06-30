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
      ],
      "update" => [
        "path" => "/update",
        "action" => "updateTask"
      ],
      "updateTask" => [
        "path" => "/update-task",
        "action" => "update"
      ],
      "deleteTask" => [
        "path" => "/delete",
        "action" => "delete"
      ],
      "deleteTasks" => [
        "path" => "/delete-task",
        "action" => "deleteAll"
      ]
    ];

    $this->setRoutes($routes);
  }
}
