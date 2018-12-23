<?php
/**
 * User: Andy
 * Date: 2018/12/21
 * Time: 16:14
 */

spl_autoload_register(function ($class) {
    $file = __DIR__."/".$class.".php";
    require_once($file);
});