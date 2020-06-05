<?php

require_once __DIR__ . '/../config/config.php';
require_once 'Route.php';

$controllersPath = $GLOBALS['config']['CONTROLLERS_PATH'];
return [
  new Route('/', $controllersPath . '/PageController.php', 'home'),
  // new Route('/qwe', $controllersPath . '/PageController.php', 'qwe'),
  // new Route('/asd/123', $controllersPath . '/PageController.php', 'asd')
];
