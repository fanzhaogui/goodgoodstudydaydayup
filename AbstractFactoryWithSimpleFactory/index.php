<?php
/**
 * User: Andy
 * Date: 2018/12/26
 * Time: 23:54
 */

namespace Fan\DesignPatterns\AbstractFactoryWithSimpleFactory;

require __DIR__ . "/../vendor/autoload.php";


class Client
{
    public function run()
    {
        $factory = new Factory();

        $user = $factory->createUser();
        $user->insert();
        $user->select();

        echo "<hr>";

        $factory = new Factory();
        $article = $factory->createArticle();
        $article->insert();
        $article->select();
    }

}
// Factory 中把db属性固定为MySQL了；
// 想要换数据库类型还需要手动修改db
// 我们还可以写个配置文件
// 从配置文件中读取
// 这样就不需要改动factory了

$c = new Client();
$c->run();

// 虽然有了简单工厂可以减少建一堆工厂了
// 但是这里面的多个 switch 明显是有点重复的
// 如何进一步优化？
//
// //