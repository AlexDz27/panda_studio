<?php

$config['MODE'] = 'dev';
if ($config['MODE'] === 'prod') {
  error_reporting(0);
  ini_set('display_errors', 0);
}

// App domain specific
$config['APP_TITLE'] = 'Студия "Панда"';
$config['APP_PAGE_TITLE'] = "{$config['APP_TITLE']} | ";
$config['APP_TIMEZONE'] = 'Europe/Minsk';

// App src specific
$config['APP_DIR'] = getcwd() . '/app';
if ($config['MODE'] === 'dev') {
  $config['URI_REMOVE_CHARS_COUNT'] = 13;
} elseif ($config['MODE'] === 'prod') {
  $config['URI_REMOVE_CHARS_COUNT'] = 13;
}

// URLs
if ($config['MODE'] === 'dev') {
  $config['APP_URL'] = "http://{$_SERVER['SERVER_NAME']}/panda_studio";
} elseif ($config['MODE'] === 'prod') {
  $config['APP_URL'] = "http://{$_SERVER['SERVER_NAME']}";
}

// Paths
$config['VIEWS_PATH'] = $config['APP_DIR'] . '/views';
$config['LAYOUTS_PATH'] = $config['VIEWS_PATH'] . '/layouts';
$config['TEMPLATES_PATH'] = $config['VIEWS_PATH'] . '/templates';
$config['PAGES_PATH'] = $config['TEMPLATES_PATH'] . '/pages';
$config['BLOCKS_PATH'] = $config['VIEWS_PATH'] . '/blocks';

$config['CONTROLLERS_PATH'] = $config['APP_DIR'] . '/controllers';

// Database
$config['db']['charset'] = 'utf8mb4';
if ($config['MODE'] === 'dev') {
  $config['db']['host'] = '127.0.0.1';
  $config['db']['dbname'] = 'panda_studio';
  $config['db']['user'] = 'root';
  $config['db']['password'] = '';
} elseif ($config['MODE'] === 'prod') {
  $config['db']['host'] = '127.0.0.1';
  $config['db']['dbname'] = 'panda_studio';
  $config['db']['user'] = 'root';
  $config['db']['password'] = '';
}

// AJAX endpoints
// -- dev
if ($config['MODE'] === 'dev') {
  $config['ajax']['BOOK_FORM'] = 'http://localhost/panda_studio/booking/add';
  $config['ajax']['DELETE_BOOKING'] = 'http://localhost/panda_studio/booking/delete';
} elseif ($config['MODE'] === 'prod') {
  $config['ajax']['BOOK_FORM'] = "http://{$_SERVER['SERVER_NAME']}/booking/add";
  $config['ajax']['DELETE_BOOKING'] = "http://{$_SERVER['SERVER_NAME']}/booking/delete";
}

// Access to security domain TODO: change to more secure
if ($config['MODE'] === 'dev') {
  $config['security']['login'] = 'admin';
  $config['security']['password'] = '123';
} elseif ($config['MODE'] === 'prod') {
  $config['security']['login'] = 'admin';
  $config['security']['password'] = 'pnd_stud_2277';
}

$GLOBALS['config'] = $config;
return $config;
