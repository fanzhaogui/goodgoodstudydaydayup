<?php
/**
 * User: Andy
 * Date: 2018/12/25
 * Time: 21:22
 */

namespace andy\pattern\SimpleFactory;


require_once __DIR__."/../vendor/autoload.php";


/**
 * 客户端
 *
 * Class Client
 * @package pattern\SimpleFactory
 */
class Client
{
    public function bad()
    {
        $program = new Bad();
        $result = $program->getResult(1, "+", 2);
        echo $result;
    }
}

$client = new Client();
$client->bad();