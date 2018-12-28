<?php
/**
 * User: Andy
 * Date: 2018/12/29
 * Time: 0:25
 */

namespace Fan\DesignPatterns\Decorator;

/**
 * 手抓饼
 *
 * Class ShouZhuabing
 * @package Fan\DesignPatterns\Decorator
 */
class ShouZhuabing implements Food
{
    public function name()
    {
        return "手抓饼";
    }

    public function price()
    {
        return 5;
    }
}