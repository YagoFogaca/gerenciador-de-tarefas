<?php

namespace Core;

abstract class Controller
{
  protected $view;

  public function __construct()
  {
    $this->view = new \stdClass();
  }

  protected function run($page)
  {
    $this->view->page = $page;
    require_once '../src/view/layout/index.phtml';
  }

  protected function content()
  {
    require_once '../src/view/' . $this->view->page . '.phtml';
  }
}
