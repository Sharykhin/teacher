<?php
/**
 * This is the bootstrap file for test application.
 * This file should be removed when the application is deployed for production.
 */

// change the following paths if necessary
$yii=dirname(__FILE__).'/framework/yii.php';
$config=dirname(__FILE__).'/application/config/test.php';

// remove the following line when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
if(!preg_match("/^\/public/",$_SERVER['REQUEST_URI'])) {
    $_SERVER['REQUEST_URI'] = "/public".$_SERVER['REQUEST_URI'];
}

require_once($yii);
Yii::createWebApplication($config)->run();
