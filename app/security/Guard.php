<?php

class Guard {
  private $login;
  private $password;

  public function __construct() {
    $this->login = $GLOBALS['config']['security']['login'];
    $this->password = $GLOBALS['config']['security']['password'];
  }

  public function protect() {
    if (!isset($_SERVER['PHP_AUTH_USER'])) {
      // Invokes pop-up with login and password
      header('WWW-Authenticate: Basic realm="Dashboard"');

      // If user cancels authentication
      header('HTTP/1.1 401 Unauthorized');
      echo 'Похоже, Вы отменили процесс идентификации. Чтобы продолжить, перезагрузите страницу и введите логин и пароль.';
      die();
    }

    // If login or password are wrong
    if ($_SERVER['PHP_AUTH_USER'] !== $this->login && $_SERVER['PHP_AUTH_PW'] !== $this->password) {
      header('HTTP/1.1 401 Unauthorized');
      echo 'Неверный логин или пароль.';
      die();
    }
  }
}
