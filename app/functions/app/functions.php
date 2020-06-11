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
  
  $output = render('layouts/header', ['title' => $pageTitle]);
  $output .= render("pages/$pagePath", $vars);
  $output .= render('layouts/footer');

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
