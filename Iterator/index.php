<?php
/**
 * User: Andy
 * Date: 2019/1/6
 * Time: 22:25
 */

namespace Fan\DesignPatterns\Iterator;

require __DIR__ . "/../vendor/autoload.php";

class Client
{
    public function run()
    {
        $nameContainter = new NameContainter();
        $nameContainter->add("张三");
        $nameContainter->add("李四");
        $nameContainter->add("王麻子");

        $nameIterator = $nameContainter->getIterator();

        while ($nameIterator->hasNext()) {
            echo $nameIterator->next();
        }
    }
}

// 现可以直接使用内置迭代器
$c = new Client();
$c->run();