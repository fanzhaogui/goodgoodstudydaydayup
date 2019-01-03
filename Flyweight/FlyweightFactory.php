<?php
/**
 * User: Andy
 * Date: 2019/1/3
 * Time: 22:27
 */

namespace Fan\DesignPatterns\Flyweight;


/**
 * 享元工厂
 *
 * Class FlyweightFactory
 * @package Fan\DesignPatterns\Flyweight
 */
class FlyweightFactory
{
    /**
     * @var array
     */
    private $flyweight = [];

    /**
     * @param $name
     * @return mixed
     */
    public function getFlyweight($name)
    {
        if(!isset($this->flyweight[$name])) {
            $this->flyweight[$name] = new ConcreteFlyweight($name);
        }

        return $this->flyweight[$name];
    }
}