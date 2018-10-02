<?php

$this->device_types['dimmer'] = array(
    'TITLE'=>"philips.light.downlight",
    'PARENT_CLASS'=>'SControllers',
    'CLASS'=>'SPLDlDimmers',
    'PROPERTIES'=>array(
        'level'=>array('DESCRIPTION'=>'Current brightness level','ONCHANGE'=>'levelUpdated','DATA_KEY'=>1),
        'cct'=>array('DESCRIPTION'=>'Цветовая температура','DATA_KEY'=>1),
        'snm'=>array('DESCRIPTION'=>'Сцена','ONCHANGE'=>'snmUpdated'),
        'dv'=>array('DESCRIPTION'=>'Таймер выключения'),
        'online'=>array('DESCRIPTION'=>'В сети','DATA_KEY'=>1)
    ),
    'METHODS'=>array(
        'levelUpdated'=>array('DESCRIPTION'=>'Level Updated'),
        'snmUpdated'=>array('DESCRIPTION'=>''),
        'turnOn'=>array('DESCRIPTION'=>'Dimmer turnOn'),
        'turnOff'=>array('DESCRIPTION'=>'Dimmer turnOff')
    ));
