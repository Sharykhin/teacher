<?php
return array (
    'class' => 'CDbConnection',
    'connectionString' => 'mysql:host=127.0.0.1;port=3306;dbname=teacher',
    'username' => 'root',
    'password' => 'pass4root',
    'emulatePrepare' => true,
    'charset' => 'utf8',
    'enableParamLogging' => defined('YII_DEBUG') && YII_DEBUG ? true : 0,
    'enableProfiling' => defined('YII_DEBUG') && YII_DEBUG ? true : 0,
    'schemaCachingDuration' => 108000,
    'tablePrefix' => '',
);

