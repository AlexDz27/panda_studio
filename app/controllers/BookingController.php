<?php

require_once $GLOBALS['config']['APP_DIR'] . '/forms/AddBookingForm.php';
require_once $GLOBALS['config']['APP_DIR'] . '/database/queries/BookingQuery.php';
require_once $GLOBALS['config']['APP_DIR'] . '/functions/app/functions.php';

class BookingController {
  private $query;

  public function __construct() {
    $this->query = new BookingQuery();
  }

  public function add() {
    header("Access-Control-Allow-Origin: *"); // todo: remove

    $form = new AddBookingForm();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $form->setData($_POST);
      $form->validate();

      $response = new stdClass();
      if (!$form->isValid) {
        $errors = $form->errors;

        $response->isFormValid = false;
        $response->errors = $errors;

        http_response_code(400);
        echo json_encode($response);
      } else {
        $booking = [];
        $booking['date'] = $form->date;
        $booking['beautified_date'] = getBeautifiedDate($form->date);
        $booking['time'] = $form->time;
        $booking['name'] = $form->name;
        $booking['phone'] = $form->phone;

        $response->isFormValid = true;
        echo json_encode($response);

        $this->query->createBooking($booking);
      }
    } else {
      echo renderPage('booking/add', 'Add a booking', compact('form'));
    }
  }
}
