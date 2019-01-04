<?php
/**
 * User: Andy
 * Date: 2019/1/4
 * Time: 23:33
 */

namespace Fan\DesignPatterns\Template;

require __DIR__ . "/../vendor/autoload.php";

class Client
{
    public function run()
    {
        $xiaomi = new Xiaomi();
        $xiaomi->action();

        $huawei = new Huawei();
        $huawei->action();
    }
}

// 从代码中我们可以看出
// 从抽象类中使用了final，这是模板方法标志性的关键字
// 他决定了执行的顺序等行为只能由父级抽象类决定
// 而子类只需要完成具体的操作内容
$c = new Client();
$c->run();