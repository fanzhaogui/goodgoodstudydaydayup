<?php
/**
 * User: Andy
 * Date: 2018/12/25
 * Time: 23:42
 */

namespace Fan\DesignPatterns\FactoryMethod;

/**
 * 减法工厂
 *
 * Class SubFactory
 * @package Fan\DesignPatterns\FactoryMethod
 */
class SubFactory extends Factory
{
    public function create()
    {
        return new SubFactory();
    }
}