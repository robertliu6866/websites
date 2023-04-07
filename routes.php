<?php
//路由控制器鏈接
// return [
//     '/' => 'controllers/index.php',
//     '/about' => 'controllers/about.php',
//     '/testing' => 'controllers/testing.php',
//     '/notes' => 'controllers/notes/index.php' ,
//     '/note' => 'controllers/notes/show.php' ,
   
//     '/notes/create' => 'controllers/notes/create.php',
//     '/contact' => 'controllers/contact.php' ,
    

// ]; 

$router->get('/','controllers/index.php');
$router->get('/about','controllers/about.php');
$router->get('/contact','controllers/contact.php');
$router->get('/testing','controllers/testing.php');

$router->get('/notes','controllers/notes/index.php');
$router->get('/note','controllers/notes/show.php');
$router->get('/notes/create', 'controllers/notes/create.php');