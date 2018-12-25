<?php
/**
 * User: Andy
 * Date: 2018/12/25
 * Time: 23:44
 */


namespace Fan\DesignPatterns\FactoryMethod;

require __DIR__ . "/../vendor/autoload.php";

/**
 * 客户端
 *
 * Class Client
 * @package Fan\DesignPatterns\FactoryMethod
 */
class Client
{
    /**
     * 不好的示例   直接 new 具体的产品
     */
    public function bad()
    {
        // 计算 1+2
        $operation = new Add();
        $operation->setNumA(1);
        $operation->setNumB(2);
        $result = $operation->getResult();
        echo $result;

        echo '<br>';

        // 计算 3+4
        $operation = new Add();
        $operation->setNumA(3);
        $operation->setNumB(4);
        $result = $operation->getResult();
        echo $result;
    }

    /**
     * 好的示例  new 产品对应的工厂
     */
    public function good()
    {
        $factory = new AddFactory();
        $operation = $factory->create();
        $operation->setNumA(1);
        $operation->setNumB(2);
        $result = $operation->getResult();
        echo $result;
    }
}

$client = new Client();
$client->bad();
echo '<br>';
$client->good();

// 通过代码我们可以看出；
// 工厂方法不需要再做判断了
// 但是增加了工作量
// 每增加一个产品都需要增加对应的工厂
// 这就形成了一种特殊的代码重复
// 不过 设计模式并不是独立使用的
// 很多时候都是多个模式互相配合来弱化各自的缺点