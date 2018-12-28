<?php
/**
 * User: Andy
 * Date: 2018/12/29
 * Time: 0:22
 */

namespace Fan\DesignPatterns\Decorator;


/**
 * 食物
 *
 * Interface Food
 * @package Fan\DesignPatterns\Decorator
 */
interface Food
{
    /**
     * 名称
     *
     * @return mixed
     */
    public function name();

    /**
     * 价格
     *
     * @return mixed
     */
    public function price();
}