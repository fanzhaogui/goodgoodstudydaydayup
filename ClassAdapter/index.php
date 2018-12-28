<?php
/**
 * User: Andy
 * Date: 2018/12/28
 * Time: 22:35
 */

namespace Fan\DesignPatterns\ClassAdapter;

require __DIR__ . "/../vendor/autoload.php";


class Client
{
    public function run()
    {
        // 原本的类
        $adaptee = new Adaptee();
        $adaptee->pay();

        // 适配器
        $adapter = new Adapter();
        $adapter->pay();

        $adapter->notify();
    }
}

$c = new Client();
$c->run();

// 类适配器
//
//通过适配器后
//我们可以在不改变原本的Adaptee类的情况下改变支付的币种 ： Target::pay
//
//并且可以灵活的增加新的方法：notify
