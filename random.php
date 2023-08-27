<?php

$arr = $arr_history = array('abc', 'def', 'xyz', 'qqq');

  $arr_history = $arr;
  $key = array_rand($arr_history, 1);
  $selected = $arr_history[$key];
  echo $selected . PHP_EOL;


?>