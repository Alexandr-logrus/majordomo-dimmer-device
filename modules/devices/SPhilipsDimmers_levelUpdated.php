<?php

if ($this->getProperty('level')>0) {
 $this->setProperty('saved_level', $this->getProperty('level'));
 $this->setProperty('cct', $this->getProperty('saved_cct'));
 $this->setProperty('status', 1);
} else {
 $this->setProperty('status', 0);
}
