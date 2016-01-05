<?php

include 'error.inc';

/**
 * No handling of error codes.
 */

$values = [
  'apple',
  'banana',
  'orange',
];

array_map(function ($value) {

  echo "Calling with $value...\n";

  foo($value);

  echo "Life is good with $value.\n\n";

}, $values);
