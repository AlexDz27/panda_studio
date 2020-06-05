<?php

class BookingController {
  public function add() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      var_dump($_POST);
      $bookingPostData = $_POST;
    }
  }
}
