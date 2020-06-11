<?php

require_once "{$GLOBALS['config']['APP_DIR']}/config/config.php";

class Database {
  public $pdo;

  public function __construct() {
    $host = $GLOBALS['config']['db']['host'];
    $db = $GLOBALS['config']['db']['dbname'];
    $user = $GLOBALS['config']['db']['user'];
    $password = $GLOBALS['config']['db']['password'];
    $charset = $GLOBALS['config']['db']['charset'];

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $options = [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      PDO::ATTR_EMULATE_PREPARES => false
    ];

    try {
      $this->pdo = new PDO($dsn, $user, $password, $options);
    } catch (\PDOException $e) {
      throw new \PDOException($e->getMessage(), (int) $e->getCode());
    }
  }

  public function getAllBookings() {
    $query = "SELECT * FROM booking";
    $statement = $this->pdo->prepare($query);
    $statement->execute();

    $bookings = $statement->fetchAll();
    return $bookings;
  }
}
