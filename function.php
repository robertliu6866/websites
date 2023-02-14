<?php
//$_SERVER['REQUEST_URI']：訪問此頁面需要的URL
function urlIs($value){
    return $_SERVER['REQUEST_URI']=== $value;
}