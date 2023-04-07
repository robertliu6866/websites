<?php
use Core\Response;

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

//$_SERVER['REQUEST_URI']：訪問此頁面需要的URL
function urlIs($value){
    return $_SERVER['REQUEST_URI']=== $value;
}

function abort($code= 404)
{
    http_response_code($code);
    
    require base_path("views/{$code}.php");

     die();

}

// 認證邏輯 如果不是參數回傳403或者404
function authorize($condition, $status = Response::FORBIDDEN){

    if(! $condition){
         abort($status);
    }

}
//引入後面$path 資料 
function  base_path($path)
{
     return BASE_PATH .$path;
}



function  view($path,$attributes = [])

{
  extract($attributes);
 

    require base_path('views/'. $path);
}

