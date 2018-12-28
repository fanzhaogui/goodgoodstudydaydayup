<?php
/**
 * User: Andy
 * Date: 2018/12/28
 * Time: 22:44
 */
namespace Fan\DesignPatterns\ObjectAdapter;

use Fan\DesignPatterns\Prototype\Car;

require __DIR__ . "/../vendor/autoload.php";


/**
 * Class Client
 * @package Fan\DesignPatterns\ObjectAdapter
 */
class Client
{
    public function run()
    {
        $adaptee = new Adaptee();
        $adaptee->pay();

        $adapter = new Adapter($adaptee);
        $adapter->pay();

        $adapter->notify();
    }
}

$c = new Client();
$c->run();

// 对象适配器
//
//  通过适配器后
//  我们可以在不改变原本的Adaptee 类的情况下改变支付的币种
//  并且可以灵活的增加新的方法
//  相比类的适配器
//  对象适配器不需要继承
// 因此也更加灵活一些
// //
