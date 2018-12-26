<?php
/**
 * User: Andy
 * Date: 2018/12/26
 * Time: 23:13
 */

namespace Fan\DesignPatterns\AbstractFactory;

require __DIR__ . "/../vendor/autoload.php";


/**
 * 客户端
 *
 * Class Client
 * @package Fan\DesignPatterns\AbstractFactory
 */
class Client
{
    public function run()
    {
        // 使用 MySQL
        $factory = new MySQLFactory();
        $user = $factory->createUser();
        $user->insert();
        $user->select();

        echo "<hr>";

        $factory = new MySQLFactory();
        $user = $factory->createArticle();
        $user->insert();
        $user->select();

        echo "<hr>";
        $factory = new SQLiteFactory();
        $user = $factory->createUser();
        $user->insert();
        $user->select();

        echo "<hr>";
        $factory = new SQLiteFactory();
        $article = $factory->createArticle();
        $article->insert();
        $article->select();
    }
}

$c = new Client();
$c->run();

// 抽象工厂的优点是产品跟客户端完全分离
// 我们再Client中只调用了Factory
// 甚至连产品的类名都不需要知道
// 但是缺点也很明显
// 那如果要增加一个category表
// 那我们需要增加Category接口类， MySQLCategory SQLiteCategory
// 还需要在Factory, MySQLFactory, SQLiteFactory中增加createCategory方法
// 分别新增3个文件和修改3个文件才行
//
// 如何减轻？
//
//
// //