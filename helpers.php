<?php

use App\Models\User;

// function dump(...$variables){
//     echo '<pre>';
//     var_dump(...$variables);
//     echo '</pre>';
// }
// function dd(...$variables){
//     dump(...$variables);
//     die;
// }

function view($viewName, $vars = []){
    extract($vars);
    include __DIR__ . "/views/$viewName.php";
}
function redirect($route){
    header("Location: $route");
}

function auth(){
    return isset($_SESSION['userId']) ? User::find($_SESSION['userId']) : false;
}