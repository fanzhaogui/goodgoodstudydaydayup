<?php
/**
 * User: Andy
 * Date: 2019/1/6
 * Time: 23:04
 */

namespace Fan\DesignPatterns\Observer;

/**
 * 发邮件
 *
 * Class EmailObserver
 * @package Fan\DesignPatterns\Observer
 */
class EmailObserver implements Observer
{
    /**
     * 执行操作
     */
    public function update()
    {
        echo "发送邮件<br>";
    }
}