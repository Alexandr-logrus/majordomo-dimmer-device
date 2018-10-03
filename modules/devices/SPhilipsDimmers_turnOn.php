<?php

if ($this->getProperty('level') == 0) {
 $this->setProperty('level', $this->getProperty('saved_level'));
 $this->setProperty('cct', $this->getProperty('saved_cct'));
} else {
 $this->setProperty('level', $this->getProperty('level'));
 $this->setProperty('cct', $this->getProperty('cct'));
}
