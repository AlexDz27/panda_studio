<?php

require_once "{$GLOBALS['config']['APP_DIR']}/database/Database.php";

class BookingQuery {
  private $db;

  public function __construct() {
    $this->db = new Database();
  }

  // SELECT
  public function getAllBookings() {
    $query = "SELECT * FROM booking WHERE id = 5";
    $statement = $this->db->pdo->prepare($query);
    $statement->execute();

    $bookings = $statement->fetchAll();
    return $bookings;
  }

  // INSERT
  public function createBooking($booking) {
    $query = "INSERT INTO booking (date, time, name, phone) VALUES (:date, :time, :name, :phone)";
    $statement = $this->db->pdo->prepare($query);
    $statement->execute(
      [
        'date' => $booking['date'],
        'time' => $booking['time'],
        'name' => $booking['name'],
        'phone' => $booking['phone']
      ]
    );
  }
}
