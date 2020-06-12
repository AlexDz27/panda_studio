<?php

// App domain specific
$config['APP_TITLE'] = 'Студия "Панда"';
$config['APP_PAGE_TITLE'] = "{$config['APP_TITLE']} | ";
$config['APP_TIMEZONE'] = 'Europe/Minsk';

// App src specific
$config['APP_DIR'] = getcwd() . '/app';
$config['URI_REMOVE_CHARS_COUNT'] = 13;

// URLs
$config['APP_URL'] = "http://{$_SERVER['SERVER_NAME']}/panda_studio";

// Paths
$config['VIEWS_PATH'] = $config['APP_DIR'] . '/views';
$config['LAYOUTS_PATH'] = $config['VIEWS_PATH'] . '/layouts';
$config['TEMPLATES_PATH'] = $config['VIEWS_PATH'] . '/templates';
$config['PAGES_PATH'] = $config['TEMPLATES_PATH'] . '/pages';
$config['BLOCKS_PATH'] = $config['VIEWS_PATH'] . '/blocks';

$config['CONTROLLERS_PATH'] = $config['APP_DIR'] . '/controllers';

// Database
// -- dev
$config['db']['host'] = '127.0.0.1';
$config['db']['dbname'] = 'panda_studio';
$config['db']['user'] = 'root';
$config['db']['password'] = '';
$config['db']['charset'] = 'utf8mb4';
// -- prod
// $config['db']['host'] = '127.0.0.1';
// $config['db']['dbname'] = 'panda_studio';
// $config['db']['user'] = 'root';
// $config['db']['password'] = '';
// $config['db']['password'] = 'utf8mb4';

// AJAX endpoints
// -- dev
$config['ajax']['BOOK_FORM'] = 'http://localhost/panda_studio/booking/add';
$config['ajax']['DELETE_BOOKING'] = 'http://localhost/panda_studio/booking/delete';
// -- prod
// $config['ajax']['BOOK_FORM'] = 'http://localhost/panda_studio/booking/add';
// $config['ajax']['DELETE_BOOKING'] = 'http://localhost/panda_studio/booking/delete';

// Access to security domain TODO: change to more secure
$config['security']['login'] = 'admin';
$config['security']['password'] = '123';

$GLOBALS['config'] = $config;
return $config;
