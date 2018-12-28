<?php
/**
 * User: Andy
 * Date: 2018/12/28
 * Time: 22:44
 */
namespace Fan\DesignPatterns\ObjectAdapter;

/**
 * 源类
 *
 * Class Adaptee
 * @package Fan\DesignPatterns\ClassAdaptee
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