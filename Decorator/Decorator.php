<?php
/**
 * User: Andy
 * Date: 2018/12/29
 * Time: 0:56
 */

namespace Fan\DesignPatterns\Decorator;

/**
 * 装饰 配料
 *
 * Class Decorator
 * @package Fan\DesignPatterns\Decorator
 */
abstract class Decorator implements Food
{
    /**
     * @var Food
     */
    protected $food;

    public function __construct(Food $food)
    {
        $this->food = $food;
    }
}