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

        $response->errorMessage = $this->query->createBooking($booking);
        $response->errorMessage === null ?
         $response->isFormValid = true : $response->isFormValid = false;

        echo json_encode($response);
      }
    } else {
      echo renderPage('booking/add', 'Add a booking', compact('form'));
    }
  }

  public function delete() {
    $id = (int) $_POST['id'];

    $response = new stdClass();
    $response->errorMessage = $this->query->deleteBooking($id);
    if ($response->errorMessage === null) {
      $response->isDeleted = true;
    } else {
      $response->isDeleted = false;
    }

    echo json_encode($response);
  }
}
