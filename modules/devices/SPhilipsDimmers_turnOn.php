<?php

if ($this->getProperty('saved_bright') == 0) {
  $this->setProperty('bright', 100);
} else {
  $this->setProperty('bright', $this->getProperty('saved_bright'));
}
if ($this->getProperty('cct') == 0) {
  $this->setProperty('cct', 100);
} else {
  $this->setProperty('cct', $this->getProperty('cct'));
}
