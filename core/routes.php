<?php

namespace Core;

abstract class Routes
{
  protected $routes;

  abstract function initRoutes();

  public function __construct()
  {
    $this->initRoutes();

    $this->run($this->getUrl());
  }

  protected function setRoutes($routes)
  {
    $this->routes = $routes;
  }

  protected function run($url)
  {
    $class = "Src\\Controller\\Controller";
    $controller = new $class;
    $checkRoutes = [
      "check" => false,
      "action" => '',
    ];

    foreach ($this->routes as $routes => $route) {
      if ($url === $route['path']) {
        $checkRoutes = [
          "check" => true,
          "action" => $route['action'],
        ];
      }
    }


    if (!$checkRoutes['check']) {
      $controller->page404();
      exit();
    }

    $controller->{$checkRoutes['action']}();
  }

  protected function getUrl()
  {
    return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
  }
}
