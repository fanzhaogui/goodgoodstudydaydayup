<?php
/**
 * User: Andy
 * Date: 2019/1/6
 * Time: 20:54
 */

namespace Fan\DesignPatterns\Command;

/**
 * 具体命令类
 *
 * Class Command
 * @package Fan\DesignPatterns\Command
 */
class Command implements CommandInterface
{
    protected $receiver;

    public function __construct(Receiver $receiver)
    {
        $this->receiver = $receiver;
    }

    public function execute()
    {
        $this->receiver->action();
    }
}