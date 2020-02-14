<?php

$dictionary = array(

 'SPhilipsDimmers_PATTERN_BRIGHTNESS' => 'brighness',
 'SPhilipsDimmers_PATTERN_COLORTEMPERATURE' => 'color temperature'

);

foreach ($dictionary as $k => $v) {
 if (!defined('LANG_' . $k)) {
  @define('LANG_' . $k, $v);
 }
}
