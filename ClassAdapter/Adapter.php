<?php
/**
 * User: Andy
 * Date: 2018/12/28
 * Time: 22:33
 */

namespace Fan\DesignPatterns\ClassAdapter;

/**
 * 适配器
 *
 * Class Adapter
 * @package Fan\DesignPatterns\ClassAdapter
 */
class Adapter extends Adaptee implements Target
{
    public function __construct()
    {
        $this->money = "$5";
    }

    public function notify()
    {
        echo "通知","<br>";
    }
}