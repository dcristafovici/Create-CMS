<?php

require_once __DIR__ .'/../config/init.php';
require_once LIBS .'/functions.php';
new \ishop\App();

throw new Exception('Страница', 404);

 ?>
