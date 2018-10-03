<?php

$this->device_types['dimmer'] = array(
    'TITLE'=>"Philips Zhirui Downlight",
    'PARENT_CLASS'=>'SControllers',
    'CLASS'=>'SPhilipsDimmers',
    'PROPERTIES'=>array(
        'level'=>array('DESCRIPTION'=>'Current brightness level','ONCHANGE'=>'levelUpdated','DATA_KEY'=>1),
        'saved_level'=>array('DESCRIPTION'=>''),
        'levelWork'=>array('DESCRIPTION'=>'Brightness level','ONCHANGE'=>'levelWorkUpdated'),
        'minWork'=>array('DESCRIPTION'=>'Min level','_CONFIG_TYPE'=>'num','_CONFIG_HELP'=>'SdDimmerMinMax'),
        'maxWork'=>array('DESCRIPTION'=>'Max level','_CONFIG_TYPE'=>'num','_CONFIG_HELP'=>'SdDimmerMinMax'),
        'cct'=>array('DESCRIPTION'=>'Цветовая температура','ONCHANGE'=>'cctUpdated','DATA_KEY'=>1),
        'saved_cct'=>array('DESCRIPTION'=>''),
        'snm'=>array('DESCRIPTION'=>'Сцена','ONCHANGE'=>'snmUpdated'),
        'dv'=>array('DESCRIPTION'=>'Таймер выключения'),
        'online'=>array('DESCRIPTION'=>'В сети','DATA_KEY'=>1)
    ),
    'METHODS'=>array(
        'cctUpdated'=>array('DESCRIPTION'=>'cct Updated'),
        'levelUpdated'=>array('DESCRIPTION'=>'Level Updated'),
        'levelWorkUpdated'=>array('DESCRIPTION'=>'Level Work Updated'),
        'snmUpdated'=>array('DESCRIPTION'=>''),
        'turnOn'=>array('DESCRIPTION'=>'Dimmer turnOn'),
        'turnOff'=>array('DESCRIPTION'=>'Dimmer turnOff')
    ));
