<?php
/**
 * User: Andy
 * Date: 2019/1/6
 * Time: 20:58
 */

namespace Fan\DesignPatterns\Command;

/**
 * 执行操作
 *
 * Class Receiver
 * @package Fan\DesignPatterns\Command
 */
class Receiver
{
    /**
     * 执行操作
     */
    public function action()
    {
        echo "执行操作<br>";
    }
}