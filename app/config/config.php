<?php

$config = [
  // App domain specific
  'APP_TITLE' => 'Panda',

  // App src specific
  'APP_DIR' => getcwd() . '/app'
];

// Paths
$config['VIEWS_PATH'] = $config['APP_DIR'] . '/views';
$config['LAYOUTS_PATH'] = $config['VIEWS_PATH'] . '/layouts';
$config['TEMPLATES_PATH'] = $config['VIEWS_PATH'] . '/templates';
$config['PAGES_PATH'] = $config['TEMPLATES_PATH'] . '/pages';
$config['BLOCKS_PATH'] = $config['VIEWS_PATH'] . '/blocks';

$config['CONTROLLERS_PATH'] = $config['APP_DIR'] . '/controllers';

$GLOBALS['config'] = $config;

return $config;
