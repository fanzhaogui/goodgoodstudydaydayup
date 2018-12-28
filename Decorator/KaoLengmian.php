<?php
/**
 * User: Andy
 * Date: 2018/12/29
 * Time: 0:25
 */

namespace Fan\DesignPatterns\Decorator;

/**
 * 烤冷面
 *
 * Class KaoLengmian
 * @package Fan\DesignPatterns\Decorator
 */
class KaoLengmian implements Food
{
    public function name()
    {
        return "烤冷面";
    }

    public function price()
    {
        return 6;
    }
}