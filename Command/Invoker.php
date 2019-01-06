<?php
/**
 * User: Andy
 * Date: 2019/1/6
 * Time: 20:56
 */

namespace Fan\DesignPatterns\Command;

/**
 * 命令发送者
 *
 * Class Invoker
 * @package Fan\DesignPatterns\Command
 */
class Invoker
{
    /**
     * @var Command
     */
    protected $command;

    /**
     * Invoker setCommand.
     * @param Command $command
     */
    public function setCommand(Command $command)
    {
        $this->command = $command;
    }

    /**
     * 执行
     */
    public function run()
    {
        $this->command->execute();
    }
}