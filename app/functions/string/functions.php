<?php

function isSameString($string, $stringToCheck) {
  $regexp = "~^{$string}$~";

  return preg_match($regexp, $stringToCheck) ? true : false;
}

function stringHasSubstring($string, $substring) {
  return strpos($string, $substring) !== false ? true: false;
}

function isNullOrEmptyString($str){
  return (!isset($str) || trim($str) === '');
}
