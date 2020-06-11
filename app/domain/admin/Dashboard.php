<?php

require_once "{$GLOBALS['config']['APP_DIR']}/functions/app/functions.php";
require_once "{$GLOBALS['config']['APP_DIR']}/database/queries/BookingQuery.php";

class Dashboard {
  private $bookingQuery;
  private $bookings;
  private $renderedBookings = [];
  private $renderedDays = [];

  public function __construct() {
    $this->bookingQuery = new BookingQuery();

    $this->bookings = $this->bookingQuery->getAllBookings();
  }

  public function getRenderedDays() {
    $this->prepareBookings();
    $this->prepareDays();

    return $this->renderedDays;
  }

  public function getRenderedBookings() {
    $this->prepareBookings();

    return $this->renderedBookings;
  }

  public function prepareDays() {
    $days = [];
    foreach ($this->renderedBookings as $booking) {
      $days[] = $booking['date'];
    }
    $days = array_unique($days);
    $bookingDays = [];
    foreach ($days as $day) {
      $bookingDay = [];
      $bookingDay['date'] = $day;
      $bookingDay['bookings'] = [];

      $bookingDays[] = $bookingDay;
    }

    foreach ($bookingDays as $bookingDay) {
      foreach ($this->renderedBookings as $booking) {
        if ($bookingDay['date'] === $booking['date']) {
          $bookingDay['bookings'][] = $booking;
        }
      }

      $this->renderedDays[] = $bookingDay;
    }
  }

  public function prepareBookings() {
    // delete past bookings
    // ...

    $rawBookings = $this->bookings;
    $renderedBookings = [];
    foreach ($rawBookings as $booking) {
      // get '16:00' out of '16:00:00'
      $booking['time'] = substr($booking['time'], 0, 5);

      $renderedBookings[] = $booking;
    }

    $this->renderedBookings = $renderedBookings;
  }

  public function getTodayDate() {
    $todayDate = date('Y-m-d');

    return getBeautifiedDate($todayDate);
  }
}
