<?php
if ($params['NEW_VALUE'] > 0) {
 if ($this->getProperty('status') == 0) {
  $this->setProperty('status', 1);
 }
 $this->setProperty('saved_bright', $params['NEW_VALUE']);
 if ($params['SOURCE'] != 'cctUpdated') {
  $this->setProperty('cct', $this->getProperty('cct'), '', 'brightUpdated');
 }
}