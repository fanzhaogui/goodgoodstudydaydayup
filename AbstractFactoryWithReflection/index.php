<?php
/**
 * User: Andy
 * Date: 2018/12/27
 * Time: 0:16
 */

namespace Fan\DesignPatterns\AbstractFactoryWithReflection;


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

$c = new Client();
$c->run();

// 当我们需要支持更多的数据库的时候
// 比如说 PostgreSQL
// 我们只需要新建 PostgreSQLUser 和 PostgreSQLArticle
// 这就符合开闭原则
// 可以方便的扩展，不需要修改cerateUser方法

// //
