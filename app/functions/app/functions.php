<?php

// Rendering

function render($path, $vars = []) {
  $viewPath = $GLOBALS['config']['VIEWS_PATH'];

  extract($vars);

  ob_start();
  include "$viewPath/$path.php";
  $output = ob_get_clean();

  return $output;
}

function renderPage($pagePath, $title = '', $vars = []) {
  $pageTitle = buildPageTitle($title);
  $vars['title'] = $pageTitle;
  
  $output = render('layouts/header', $vars);
  $output .= render("pages/$pagePath", $vars);
  $output .= render('layouts/footer', $vars);

  return $output;
}

function buildPageTitle($title) {
  $pageTitle = "{$GLOBALS['config']['APP_PAGE_TITLE']} $title";
  define('ONLY_TITLE_TOKEN', '_'); // underscore

  if (isEmptyString($title)) {
    $pageTitle = "{$GLOBALS['config']['APP_TITLE']} $title";
  } elseif (startsWith($title, ONLY_TITLE_TOKEN)) {
    $pageTitle = substr($title, 1);
  }

  return $pageTitle;
}

// App

function getClassNameFromPath($classPath) {
  $exploded = explode('/', $classPath);

  return explode('.', end($exploded))[0];
}

function getControllerPathByName($name) {
  $path = $GLOBALS['config']['CONTROLLERS_PATH'];

  return "$path/{$name}.php";
}

// Domain

// $date format is yyyy-mm-dd
function getBeautifiedDate($date) {
  $year = substr($date, 0, 4);
  $month = substr($date, 5, 2);
  $day = substr($date, 8, 2);

  $beautifiedMonth = null;
  switch ($month) {
    case '01':
      $beautifiedMonth = 'января';
      break;
    case '02':
      $beautifiedMonth = 'февраля';
      break;
    case '03':
      $beautifiedMonth = 'марта';
      break;
    case '04':
      $beautifiedMonth = 'апреля';
      break;
    case '05':
      $beautifiedMonth = 'мая';
      break;
    case '06':
      $beautifiedMonth = 'июня';
      break;
    case '07':
      $beautifiedMonth = 'июля';
      break;
    case '08':
      $beautifiedMonth = 'августа';
      break;
    case '09':
      $beautifiedMonth = 'сентября';
      break;
    case '10':
      $beautifiedMonth = 'октября';
      break;
    case '11':
      $beautifiedMonth = 'ноября';
      break;
    case '12':
      $beautifiedMonth = 'декабря';
      break; 
  }

  return "$day $beautifiedMonth $year";
}
