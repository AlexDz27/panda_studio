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

function renderPage($pagePath, $vars = [], $title) {
  $output = render('layouts/header', ['title' => $title]);
  $output .= render("pages/$pagePath");
  $output .= render('layouts/footer');

  return $output;
}

// App

function getClassNameFromPath($classPath) {
  $exploded = explode('/', $classPath);

  return explode('.', end($exploded))[0];
}
