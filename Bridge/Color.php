<?php
/**
 * User: Andy
 * Date: 2018/12/28
 * Time: 23:18
 */

namespace Fan\DesignPatterns\Bridge;


/**
 * 颜色抽象类
 *
 * Class Color
 * @package Fan\DesignPatterns\Bridge
 */
abstract class Color
{
    /**
     * @return mixed
     */
    abstract public function run();
}