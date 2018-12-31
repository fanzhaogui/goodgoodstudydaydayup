<?php
/**
 * User: Andy
 * Date: 2018/12/31
 * Time: 20:23
 */

namespace Fan\DesignPatterns\Facade;

require  __DIR__ . "/../vendor/autoload.php";

class Client
{
    public function run()
    {
        $facade = new Facade();
        $facade->encryptContent();
    }
}

$c = new Client();
$c->run();