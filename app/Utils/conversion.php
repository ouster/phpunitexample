<?php

// courtesy of Mark Moloney @ Shine Technologies

// using PHP voodoo
function object_to_array($d) {
  if (is_object($d)) {
    $d = get_object_vars($d);
  }
  if (is_array($d)) {
    return array_map(__FUNCTION__, $d);
  } else {
    return $d;
  }
}

function array_to_object($d) {
  if (is_array($d)) {
    return (object)array_map(__FUNCTION__, $d);
  } else {
    return $d;
  }
}
