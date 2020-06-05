<?php

// require_once 'Handlers/FilePath.php';

class Route {
  public $uri;
  public $controllerPath;
  public $action;

  public function __construct($uri, string $controllerPath, string $action) {
    $this->uri = $uri;
    $this->controllerPath = $controllerPath;
    $this->action = $action;
  }
}
