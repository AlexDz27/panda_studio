<?php

require_once __DIR__ . '/../config/config.php';
require_once 'Route.php';

return [
  new Route('/', 'PageController', 'home'),
  new Route('/booking/add', 'BookingController', 'add'),
  new Route('/booking/delete', 'BookingController', 'delete'),
  new Route('/admin', '/admin/DashboardController', 'bookings'),
];
