<?php
/**
 * User: Andy
 * Date: 2019/1/6
 * Time: 20:59
 */

namespace Fan\DesignPatterns\Command;

require __DIR__ . "/../vendor/autoload.php";

class Client
{
    /**
     * 运行
     */
    public function run()
    {
        // 命令行设定接受者
        $receiver = new Receiver();
        $command = new Command($receiver);

        // 命令接受者调用命令
        $invoker = new Invoker();
        $invoker->setCommand($command);
        $invoker->run();
    }
}

$c = new Client();
$c->run();