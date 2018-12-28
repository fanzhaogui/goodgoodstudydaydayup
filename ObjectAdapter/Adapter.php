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
 * Class Adapter
 * @package Fan\DesignPatterns\ObjectAdapter
 */
class Adapter implements Target
{

    public function __construct(Adaptee $adaptee)
    {
        $this->adaptee = $adaptee;
        $adaptee->money = "$5";
    }

    /**
     * 支付
     */
    public function pay()
    {
        echo "支付".$this->adaptee->money,"<br>";
    }

    public function notify()
    {
        echo "通知<br>";
    }
}