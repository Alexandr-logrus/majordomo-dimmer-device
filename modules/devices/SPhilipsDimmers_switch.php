<?php 

$currentStatus=$this->getProperty('status');

if ($currentStatus) {
 $this->callMethod('turnOff');
} else {
 $this->callMethod('turnOn');
}
