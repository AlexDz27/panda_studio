<?php

// App domain specific
$config['APP_TITLE'] = 'Panda Studio';
$config['APP_PAGE_TITLE'] = "{$config['APP_TITLE']} | ";

// App src specific
$config['APP_DIR'] = getcwd() . '/app';

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

// Access to security domain TODO: change to more secure
$config['security']['login'] = 'admin';
$config['security']['password'] = '123';

$GLOBALS['config'] = $config;
return $config;
