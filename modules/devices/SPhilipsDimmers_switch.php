<?php 

if ($this->getProperty('status')) {
 $this->callMethod('turnOff');
} else {
 $this->callMethod('turnOn');
}
