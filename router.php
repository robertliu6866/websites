
<?php
//https://www.php.net/manual/zh/function.parse-url.php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];




$routes =[
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php' ,
    '/testing' => 'controllers/testing.php',
    '/notes' => 'controllers/notes.php' ,
    '/note' => 'controllers/note.php' ,


];


function routeToController($uri,$routes){

    
    if (array_key_exists($uri,$routes)){
        
        require $routes[$uri];
        
    }else {
        abort(404);
    }
}

function  abort($code = 404){
    http_response_code($code);
    
    require "views/{$code}.php";
     die();

}

 routeToController($uri,$routes);