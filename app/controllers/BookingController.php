<?php

require_once $GLOBALS['config']['APP_DIR'] . '/forms/AddBookingForm.php';

class BookingController {
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

        echo json_encode($response);
      } else {
        $response->isFormValid = true;
        echo json_encode($response);
      }
    } else {
      echo renderPage('booking/add', 'Add a booking', compact('form'));
    }
  }
}
