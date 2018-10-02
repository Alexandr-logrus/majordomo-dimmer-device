<?php

if ($this->getProperty('level')>0) {
 $this->setProperty('status', 1);
} else {
 $this->setProperty('status', 0);
}
