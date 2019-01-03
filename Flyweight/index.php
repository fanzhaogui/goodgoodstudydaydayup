<?php
/**
 * User: Andy
 * Date: 2019/1/3
 * Time: 22:29
 */

namespace Fan\DesignPatterns\Flyweight;

require __DIR__ . "/../vendor/autoload.php";


class Client
{
    public function run()
    {
        $flyweight = new FlyweightFactory();

        $zhangsan1 = $flyweight->getFlyweight('170cm的模特');
        $zhangsan1->show("第1件L号的衣服");

        $zhangsan2 = $flyweight->getFlyweight('170cm的模特');
        $zhangsan2->show("第99件L号的衣服");

        var_dump($zhangsan1 == $zhangsan2);

        $lisi = $flyweight->getFlyweight("180的模特");
        $lisi->show("第1件xxl号的衣服");

        $wangmazi = new UnsharedConcreteFlyweight("190cm的模特");
        $wangmazi->show("第1件xxxl的衣服");
        $wangmazi->delete();
        $wangmazi->show("第1件xxxl的衣服");
    }
}

// 缺点
// 一个是增加了代码的复杂度
// 上面的代码中就把模特分成了可以共享的通用享元类
// 和有无法共享的代码的非共享享元类
// 再个是需要有一个享元的工厂
// 这个工厂往复杂了写就是一个连接池
// 当类比较少的时候反而为增加内存的占用了
$c = new Client();
$c->run();