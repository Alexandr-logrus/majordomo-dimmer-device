<?php

if (SETTINGS_SITE_LANGUAGE && file_exists(ROOT . 'languages/SPhilipsDimmers_' . SETTINGS_SITE_LANGUAGE . '.php')) {
 include_once(ROOT . 'languages/SPhilipsDimmers_' . SETTINGS_SITE_LANGUAGE . '.php');
} else {
 include_once(ROOT . 'languages/SPhilipsDimmers_default.php');//
}

$this->device_types['dimmerph'] = array(
    'TITLE'=>'Philips light',
    'PARENT_CLASS'=>'SControllers',
    'CLASS'=>'SPhilipsDimmers',
    'PROPERTIES'=>array(
        'bright'=>array('DESCRIPTION'=>'Current brightness level','ONCHANGE'=>'brightUpdated','DATA_KEY'=>1),
        'saved_bright'=>array('DESCRIPTION'=>''),
        'cct'=>array('DESCRIPTION'=>'Цветовая температура','ONCHANGE'=>'cctUpdated','DATA_KEY'=>1),
        'online'=>array('DESCRIPTION'=>'В сети','DATA_KEY'=>1)
    ),
    'METHODS'=>array(
        'brightUpdated'=>array('DESCRIPTION'=>'Bright Updated'),
        'cctUpdated'=>array('DESCRIPTION'=>'cct Updated'),
        'snmUpdated'=>array('DESCRIPTION'=>'snm Updated'),
        'turnOn'=>array('DESCRIPTION'=>'Dimmer turnOn'),
        'turnOff'=>array('DESCRIPTION'=>'Dimmer turnOff')
    )
);
