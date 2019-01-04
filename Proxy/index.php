<?php
/**
 * User: Andy
 * Date: 2019/1/4
 * Time: 23:08
 */

namespace Fan\DesignPatterns\Proxy;

require __DIR__ . "/../vendor/autoload.php";


class Client
{
    public function run()
    {
       $proxy = new Proxy();
       $proxy->action();
    }
}

$c = new Client();
// 因为我们在客户端和真实的主题间加了一层代理
// 那么我们就可以做很多的事情了
// 比如说我们在不修改正式代理的情况下做一些权限控制
$c->run();