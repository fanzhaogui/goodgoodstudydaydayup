<?php
/**
 * User: Andy
 * Date: 2018/12/25
 * Time: 21:22
 */

namespace Baijunyao\DesignPatterns\SimpleFactory;

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