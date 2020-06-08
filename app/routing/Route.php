<?php

class Route {
  public $uri;
  public $controllerName;
  public $action;

  public function __construct($uri, string $controllerName, string $action) {
    $this->uri = $uri;
    $this->controllerName = $controllerName;
    $this->action = $action;
  }
}
