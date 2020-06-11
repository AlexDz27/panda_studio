<?php

require_once "{$GLOBALS['config']['APP_DIR']}/security/Guard.php";
require_once "{$GLOBALS['config']['APP_DIR']}/database/queries/BookingQuery.php";

class DashboardController {
  private $guard;
  private $bookingQuery;

  public function __construct() {
    $this->guard = new Guard();
    $this->bookingQuery = new BookingQuery();
  }

  public function dashboard() {
    $this->guard->protect();

    $bookings = $this->bookingQuery->getAllBookings();

    echo renderPage('booking/dashboard', '_Администратор', compact('bookings'));
  }
}
