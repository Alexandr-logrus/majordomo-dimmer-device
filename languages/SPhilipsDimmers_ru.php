<?php

$dictionary = array(

 'SPhilipsDimmers_PATTERN_BRIGHTNESS' => 'ярк|ярч|яркость',
 'SPhilipsDimmers_PATTERN_COLORTEMPERATURE' => 'температур|температура'

);

foreach ($dictionary as $k => $v) {
 if (!defined('LANG_' . $k)) {
  define('LANG_' . $k, $v);
 }
}
