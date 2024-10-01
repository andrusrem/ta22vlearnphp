<?php

use App\Router;

if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
}

require __DIR__ . '/../vendor/autoload.php';

session_start();
require 'helpers.php';

require 'routes.php';


$router = new Router($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
$match = $router->match();
if($match){
    if(is_callable($match->action)){
        call_user_func($match->action);
    } else if (is_array($match->action) && count($match->action) === 2){
        $class = $match->action[0]; // 'App\Controllers\PublicController'
        $controller = new $class();
        $method = $match->action[1]; // index
        $controller->$method(); 
    }
} else {
    echo '404';
}