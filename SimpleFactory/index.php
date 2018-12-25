<?php
/**
 * User: Andy
 * Date: 2018/12/25
 * Time: 21:22
 */

namespace Fan\DesignPatterns\SimpleFactory;

require_once __DIR__."/../vendor/autoload.php";


/**
 * 客户端
 *
 * Class Client
 * @package pattern\SimpleFactory
 */
class Client
{
    /**
     * 不好的示例
     */
    public function bad()
    {
        $program = new Bad();
        $result = $program->getResult(1, "+", 2);
        echo $result;
    }


    /**
     * 不好的示例2
     */
    public function bad2()
    {
        $operation = new Add();
        $operation->setNumA(1);
        $operation->setNumB(2);
        echo $operation->getResult();

        echo "<br>";

        $operation->setNumA(3);
        $operation->setNumB(4);
        echo $operation->getResult();
    }

    /**
     * 好的示例
     */
    public function good()
    {
        $factory = new Factory();
        $operation = $factory->create("+");
        $operation->setNumA(1);
        $operation->setNumB(2);
        echo $operation->getResult();
    }
}

$client = new Client();
$client->bad();
echo "<br>";

$client->bad2();

echo "<br>";
$client->good();

// 然而
// 如果需要再增加新的运算
// 那就需要更改Factory，增加case
// 这就违反了开放封闭原则：简单来说，就是对扩展开放，对修改封闭
// 理想情况下我们不应该再改动Factory类的
// 增加新运算应该使用扩展的方式
// 这就是简单工厂的弊端了
// -- 工厂方法