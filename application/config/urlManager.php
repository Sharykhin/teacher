<?php
return array(
   // 'urlRuleClass'=>'BaseUrlRule',
    'urlFormat'=>'path',
    'caseSensitive'=>false,
    'showScriptName' => false,
    'rules'=>array(
        'admin/dashboard'=>'admin/default/dashboard',
        'admin/users'=>'users/users/admin',
        'admin/content'=>'content/content/admin',
        'admin/content/list'=>'content/content/index',
        'logout'=>'admin/default/logout',
//        'admin/<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
        '<controller:\w+>/<id:\d+>'=>'<controller>/view',
        '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
        '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',


       // '<module:\w+><controller:\w+>/<action:\w+>'=>'<module><controller>/<action>',

    )
);