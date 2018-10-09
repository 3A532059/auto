<?php
/**
 * Created by PhpStorm.
 * User: chen ziting
 * Date: 2018/10/9
 * Time: 下午 08:54
 */
namespace Demo\Hello;
class Someone
{
    function __construct($name)
    {
        echo 'Hello '.$name.'~<br>'.PHP_EOL;
    }
}