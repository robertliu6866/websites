<?php


const BASE_PATH = __DIR__ . '/../';

require BASE_PATH.'Core/function.php';


//spl_autoload_register 
spl_autoload_register(function ($class){
    //Core\Database 
    // become Core/Database 
   $class = str_replace('\\',DIRECTORY_SEPARATOR,$class);


//reruire ＄class自動加載的函數
require base_path("{$class}.php");

});


// require base_path('Database.php');
// require base_path('Response.php');
$router = new \Core\Router();

$routes =  require base_path('routes.php');


//https://www.php.net/manual/zh/function.parse-url.php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
//$_POST來自表單值
//https://www.runoob.com/php/php-coalescing-operator.html

$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];
//  routeToController($uri,$routes);
$router->route($uri, $method);



 








