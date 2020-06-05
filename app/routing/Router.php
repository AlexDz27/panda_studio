<?php

require_once 'app/functions/string/functions.php';
require_once 'app/functions/app/functions.php';

class Router {
  private $uri;
  private $routes;

  private $matchedRoute;

  public function __construct() {
    $this->route();
  }

  public function route() {
    $this->getRoutes();
    $this->getUri();

    $this->matchRoute();

    $this->handleRoute();
  }

  private function handleRoute() {
    $controllerPath = $this->matchedRoute->controllerPath;
    require_once $controllerPath;

    $controllerClassName = getClassNameFromPath($controllerPath);
    $controller = new $controllerClassName();

    $controller->{$this->matchedRoute->action}();
  }

  private function matchRoute() {
    $isMatchFound = false;
    foreach ($this->routes as $route) {
      if (isSameString($this->uri, $route->uri)) {
        $this->matchedRoute = $route;
        $isMatchFound = true;
        break;
      }
    }

    if (!$isMatchFound) {
      echo '404';
      http_response_code(404);
      die();
    }
  }

  // to get routes like '/page', '/foo', 'bar'
  private function getUri() {
    $requestUri = $_SERVER['REQUEST_URI']; 
    // remove when on prod. 9 is for '/frame_ps/example <--' to remove '/frame_ps' '/panda_studio'
    $this->uri = substr($requestUri, 13);
  }

  private function getRoutes() {
    $this->routes = require_once 'routes.php';
  }
}
