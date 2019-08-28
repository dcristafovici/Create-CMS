<?php

require_once __DIR__ .'/../config/init.php';
new \ishop\App();
var_dump(\ishop\App::$app->getProperties());
 ?>
