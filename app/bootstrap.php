<?php

require_once  __dir__ . '../../vendor/autoload.php';

//--- autoload classes
spl_autoload_register(function ($className){
    include '../'. $className . '.php';
});


$app = new \App\HomePage();
$app->renderHomePage();