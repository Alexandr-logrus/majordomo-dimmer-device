<?php

if ($this->getProperty('bright') == 0) {
 $this->setProperty('cct', $this->getProperty('cct'));
 $this->setProperty('bright', $this->getProperty('saved_bright'));
} else {
 $this->setProperty('bright', $this->getProperty('bright'));
}
