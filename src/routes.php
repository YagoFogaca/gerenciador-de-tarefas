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
    ];

    $this->setRoutes($routes);
  }
}
