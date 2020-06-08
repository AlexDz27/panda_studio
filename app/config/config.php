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

$GLOBALS['config'] = $config;
return $config;
