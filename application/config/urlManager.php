<?php
return array(
   // 'urlRuleClass'=>'BaseUrlRule',
    'urlFormat'=>'path',
    'caseSensitive'=>false,
    'showScriptName' => false,
    'rules'=>array(
        'admin/dashboard'=>'admin/default/dashboard',
        'admin/users/list'=>'users/users/index',
        'logout'=>'admin/default/logout',
        '<controller:\w+>/<id:\d+>'=>'<controller>/view',
        '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
        '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',


       // '<module:\w+><controller:\w+>/<action:\w+>'=>'<module><controller>/<action>',

    )
);