<?php

if ($this->getProperty('status') == 0) {
 $this->setProperty('status', 1);
}
if ($this->getProperty('saved_bright') == 0) {
 if ($params['SOURCE'] != 'brightUpdated') {
  $this->setProperty('bright', 100, '', 'cctUpdated');
 }
} else {
 if ($params['SOURCE'] != 'brightUpdated') {
  $this->setProperty('bright', $this->getProperty('saved_bright'), '', 'cctUpdated');
 }
}
