<?php

if ($device_type == 'dimmerph') {
 if (preg_match('/' . LANG_DEVICES_PATTERN_TURNON . '/uis', $command)) {
  sayReplySafe(LANG_TURNING_ON . ' ' . $device_title . $add_phrase, 2);
  $run_code .= "callMethodSafe('$linked_object.turnOn');";
  $opposite_code .= "callMethodSafe('$linked_object.turnOff');";
  $processed = 1;
  //$reply_confirm = 1;
 }
 elseif (preg_match('/' . LANG_DEVICES_PATTERN_TURNOFF . '/uis', $command)) {
  sayReplySafe(LANG_TURNING_OFF . ' ' . $device_title . $add_phrase, 2);
  $run_code .= "callMethodSafe('$linked_object.turnOff');";
  $opposite_code .= "callMethodSafe('$linked_object.turnOn');";
  $processed = 1;
  //$reply_confirm = 1;
 }
 elseif (preg_match('/' . LANG_SPhilipsDimmers_PATTERN_BRIGHTNESS . '/uis', $command)) {
  if(preg_match('/(?:\s)(\d{1,2}|100)(?:%|\s|$)/uis', $command, $matches)) {
   $run_code .= "setGlobal('$linked_object.bright', $matches[1]);";
   $processed = 1;
   $reply_confirm = 1;
  }
 }
 elseif (preg_match('/' . LANG_SPhilipsDimmers_PATTERN_COLORTEMPERATURE . '/uis', $command)) {
  if(preg_match('/(?:\s)(\d{1,2}|100)(?:%|\s|$)/uis', $command, $matches)) {
   $run_code .= "setGlobal('$linked_object.cct', $matches[1]);";
   $processed = 1;
   $reply_confirm = 1;
  }
 }
}
