<?php
/**
 * User: Andy
 * Date: 2018/12/28
 * Time: 22:29
 */

namespace Fan\DesignPatterns\ClassAdapter;

/**
 * 源类
 *
 * Class Adaptee
 * @package Fan\DesignPatterns\ClassAdapter
 */
class Adaptee
{
    /**
     * 金额
     *
     * @var string
     */
    public $money = "￥34";

    /**
     * 支付
     */
    public function pay()
    {
        echo "支付".$this->money,"<br>";
    }
}