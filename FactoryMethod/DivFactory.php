<?php
/**
 * User: Andy
 * Date: 2018/12/25
 * Time: 23:40
 */

namespace Fan\DesignPatterns\FactoryMethod;


/**
 * 加法工厂
 *
 * Class AddFactory
 * @package Fan\DesignPatterns\FactoryMethod
 */
class DivFactory extends Factory
{
    public function create()
    {
        return new Div();
    }
}