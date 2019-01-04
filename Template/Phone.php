<?php
/**
 * User: Andy
 * Date: 2019/1/4
 * Time: 23:26
 */

namespace Fan\DesignPatterns\Template;


/**
 * Class Phone
 * @package Fan\DesignPatterns\Template
 */
abstract class Phone
{
    /**
     * 定义操作顺序
     */
    final public function action()
    {
        $this->powerOn();
        $this->showLogo();
        $this->callUp();
    }

    /**
     * 开奖
     */
    protected function powerOn()
    {
        echo "power on <br>";
    }

    /**
     * @return mixed
     */
    abstract public function showLogo();

    /**
     * 打电话
     */
    protected function callUp()
    {
        echo "Call Up <br>";
    }
}