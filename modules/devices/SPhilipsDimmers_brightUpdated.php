<?php

if ($this->getProperty('bright') > 0) {
 $this->setProperty('saved_bright', $this->getProperty('bright'));
 $this->setProperty('cct', $this->getProperty('cct'));
 if ($this->getProperty('status') == 0) {
  $this->setProperty('status', 1);
 }
}
