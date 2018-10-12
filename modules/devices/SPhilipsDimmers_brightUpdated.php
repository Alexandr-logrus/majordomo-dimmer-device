<?php

if ($this->getProperty('bright')>0) {
 $this->setProperty('saved_bright', $this->getProperty('bright'));
 $this->setProperty('cct', $this->getProperty('cct'));
 $this->setProperty('status', 1);
} else {
 $this->setProperty('status', 0);
}
