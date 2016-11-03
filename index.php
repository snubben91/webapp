<?php

function __autoload($class){
    include(__DIR__."\\".$class.".php");
}

include(__DIR__."/models/app.php");
include(__DIR__."/webapp.php");
$app = new \models\app();
?>
