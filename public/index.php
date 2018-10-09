<?php
/**
 * Created by PhpStorm.
 * User: chenziting
 * Date: 2018/10/9
 * Time: 下午 09:00
 */
require '../vendor/autoload.php';
use \Demo\HelloWorld as World;
use Demo\Hello\Lara;
use Demo\Hello;
$world = new World();
$lara= new Lara();
$vincent= new Hello\Someone('Vincent');
$mary = new \Demo\Hello\Someone('Mary');
$john = new Demo\Hello\Someone('John');