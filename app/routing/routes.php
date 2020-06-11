<?php

require_once __DIR__ . '/../config/config.php';
require_once 'Route.php';

// $controllersPath = $GLOBALS['config']['CONTROLLERS_PATH'];
return [
  // new Route('/', $controllersPath . '/PageController.php', 'home'),
  // new Route('/add', $controllersPath . '/BookingController.php', 'add'),
  new Route('/', 'PageController', 'home'),
  new Route('/add', 'BookingController', 'add'),
  new Route('/admin', '/admin/DashboardController', 'dashboard'),

  // new Route('/asd/123', $controllersPath . '/PageController.php', 'asd')
];
