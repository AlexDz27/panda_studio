<?php

require_once "{$GLOBALS['config']['APP_DIR']}/security/Guard.php";
require_once "{$GLOBALS['config']['APP_DIR']}/domain/admin/Dashboard.php";

class DashboardController {
  private $guard;
  private $dashboard;
  private $bookingQuery;

  public $isAdminPage = true;

  public function __construct() {
    $this->guard = new Guard();
    $this->dashboard = new Dashboard();
    $this->bookingQuery = new BookingQuery();
  }

  public function bookings() {
    $this->guard->protect();

    $todayDate = $this->dashboard->getTodayDate();

    $days = $this->dashboard->getRenderedDays();

    echo renderPage(
      'admin/bookings',
      '_Администратор',
      [
        'days' => $days,
        'isAdminPage' => $this->isAdminPage,
        'todayDate' => $todayDate
      ]
    );
  }
}
