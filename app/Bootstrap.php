<?php
//--- load configuration
require_once __DIR__ . '../config/config.php';

require_once  __DIR__ . '../../vendor/autoload.php';

//--- autoload classes
spl_autoload_register(function ($className){
    include '../'. $className . '.php';
});


$app = new \App\HomePage();
$app->renderHomePage();