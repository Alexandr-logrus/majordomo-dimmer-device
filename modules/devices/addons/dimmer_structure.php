<?php

$this->device_types['dimmer'] = array(
    'TITLE'=>"Philips Zhirui Downlight",
    'PARENT_CLASS'=>'SControllers',
    'CLASS'=>'SPhilipsDimmers',
    'PROPERTIES'=>array(
        'bright'=>array('DESCRIPTION'=>'Current brightness level','ONCHANGE'=>'brightUpdated','DATA_KEY'=>1),
        'saved_bright'=>array('DESCRIPTION'=>''),
        'brightWork'=>array('DESCRIPTION'=>'Brightness level','ONCHANGE'=>'brightWorkUpdated'),
        'minWork'=>array('DESCRIPTION'=>'Min brigh','_CONFIG_TYPE'=>'num','_CONFIG_HELP'=>'SdDimmerMinMax'),
        'maxWork'=>array('DESCRIPTION'=>'Max brigh','_CONFIG_TYPE'=>'num','_CONFIG_HELP'=>'SdDimmerMinMax'),
        'cct'=>array('DESCRIPTION'=>'Цветовая температура','ONCHANGE'=>'cctUpdated','DATA_KEY'=>1),
        'online'=>array('DESCRIPTION'=>'В сети','DATA_KEY'=>1)
    ),
    'METHODS'=>array(
        'brightUpdated'=>array('DESCRIPTION'=>'Bright Updated'),
        'brightWorkUpdated'=>array('DESCRIPTION'=>'Bright Work Updated'),
        'cctUpdated'=>array('DESCRIPTION'=>'Bright Updated'),
        'snmUpdated'=>array('DESCRIPTION'=>''),
        'turnOn'=>array('DESCRIPTION'=>'Dimmer turnOn'),
        'turnOff'=>array('DESCRIPTION'=>'Dimmer turnOff')
    ));
