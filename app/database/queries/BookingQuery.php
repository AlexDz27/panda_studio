<?php

require_once "{$GLOBALS['config']['APP_DIR']}/database/Database.php";

class BookingQuery {
  private $db;

  public function __construct() {
    $this->db = new Database();
  }

  // SELECT
  public function getAllBookings() {
    $query = "SELECT * FROM booking ORDER BY date ASC, time ASC";
    $statement = $this->db->pdo->prepare($query);
    $statement->execute();

    $bookings = $statement->fetchAll();
    return $bookings;
  }

  // INSERT
  public function createBooking($booking) {
    $query = "INSERT INTO booking (date, beautified_date, time, name, phone) VALUES (:date, :beautified_date, :time, :name, :phone)";
    try {
      $statement = $this->db->pdo->prepare($query);
      $statement->execute(
        [
          'date' => $booking['date'],
          'beautified_date' => $booking['beautified_date'],
          'time' => $booking['time'],
          'name' => $booking['name'],
          'phone' => $booking['phone']
        ]
      );
    } catch (Exception $exception) {
      return $exception->getMessage();      
    }
  }

  // DELETE
  public function deleteOldBookings() {
    $query = "DELETE FROM booking WHERE date < NOW() - INTERVAL 1 DAY";

    $statement = $this->db->pdo->prepare($query);
    $statement->execute();
  }

  public function deleteBooking($id) {
    $query = "DELETE FROM booking WHERE id = :id";

    $statement = $this->db->pdo->prepare($query);
    $statement->execute(['id' => $id]);
  }
}
