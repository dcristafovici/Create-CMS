<?php

use ishop\Router;

// Default Routes To Admin Panel

Router::add('^admin$',['controller' => 'main', 'action' => 'index', 'prefix'=>'admin']);
Router::add('^admin/?(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$' ,['prefix'=>'admin']);


// Default Routes
Router::add('^$',['controller' => 'main', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');
