<?php

date_default_timezone_set("Europe/Prague");

require_once  __dir__ . '../../vendor/autoload.php';

//--- autoload classes
spl_autoload_register(function ($className){
    include '../'. $className . '.php';
});

require_once  __dir__ . '../../app/config/config.php';

$app = new \App\HomePage();
$app->renderHomePage();