<?php

function isSameString($string, $stringToCheck) {
  $regexp = "~^{$string}$~";

  return preg_match($regexp, $stringToCheck) ? true : false;
}

function stringHasSubstring($string, $substring) {
  return strpos($string, $substring) !== false ? true: false;
}

function isNullOrEmptyString($string){
  return (!isset($string) || trim($string) === '');
}

function isEmptyString($string) {
  return $string === '';
}

function startsWith($string, $substring) {
  return strpos($string, $substring) === 0;
}
