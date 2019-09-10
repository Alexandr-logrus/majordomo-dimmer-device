<?php

if ($this->getProperty('bright') > 0) {
 $this->setProperty('saved_bright', $this->getProperty('bright'));
 if ($params['SOURCE'] != 'cctUpdated') {
  $this->setProperty('cct', $this->getProperty('cct'), '', 'brightUpdated');
 }
 if ($this->getProperty('status') == 0) {
  $this->setProperty('status', 1);
 }
}
