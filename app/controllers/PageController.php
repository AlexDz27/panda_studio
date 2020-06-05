<?php

require_once $GLOBALS['config']['APP_DIR'] . '/functions/app/functions.php';

class PageController {
  public function home() {
    echo renderPage('home', [], 'Home page');
  }
}
