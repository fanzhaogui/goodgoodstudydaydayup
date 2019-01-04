<?php
/**
 * User: Andy
 * Date: 2019/1/4
 * Time: 23:05
 */

namespace Fan\DesignPatterns\Proxy;

/**
 * 真实主题
 *
 * Class RealSubject
 * @package Fan\DesignPatterns\Proxy
 */
class RealSubject implements Subject
{
    public function action()
    {
        echo "执行操作";
    }
}