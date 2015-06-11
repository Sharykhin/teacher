<?php
// change the following paths if necessary
$a=5;
$development = isset($_SERVER['SERVER_ADDR'])
    ? strpos($_SERVER['SERVER_ADDR'], '127') === 0
    : $_SERVER['SERVER_NAME'] == 'localhost';

// Выбираем конфигурацию development-main.php, если сайт работает на localhost
if ($development || defined('APPLICATION_ENV') || getenv('APPLICATION_ENV') !== false) {
    // Комментируем перед выпуском в продакшен:
    // в режиме разработки необходимо демонстрировать все ошибки
    // независимо от среды
    ini_set('display_errors', 'On');
    define('YII_DEBUG', true);
    defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', 3);
    // путь к фреймворку Yii
    $yii=dirname(__FILE__).'/../vendor/framework/yii.php';

} else { //production считается во всех случаях, когда не выполнены условия
    // путь к фреймворку Yii, при необходимости заменить на yii.php
    $yii=dirname(__FILE__).'/../vendor/framework/yiilite.php';
    // путь к основному конфигурационному файлу Yii
}
$config=dirname(__FILE__).'/../application/config/main.php';


require_once($yii);
Yii::createWebApplication($config)->run();
