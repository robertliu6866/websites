<?php
namespace Core;
//簡單的認證程序 
class Validator
{

    public static function string($value, $min = 1, $max = INF)
    {
        $value = trim($value);

        return strlen($value) >= $min && strlen($value) <= $max;
    }
//filter_var — 使用特定的过滤器过滤一个变量

    public static  function email($value){
      return   filter_var($value,FILTER_VALIDATE_EMAIL);

    }
}