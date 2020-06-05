<?php

function isSameString($string, $stringToCheck) {
  $regexp = "~^{$string}$~";

  return preg_match($regexp, $stringToCheck) ? true : false;
}
