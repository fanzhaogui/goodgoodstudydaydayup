<?php
/**
 * User: Andy
 * Date: 2019/1/3
 * Time: 22:23
 */


namespace Fan\DesignPatterns\Flyweight;

/**
 * 共享的具体享元类
 * Class ConcreteFlyweight
 * @package Fan\DesignPatterns\Flyweight
 */
class ConcreteFlyweight extends Flyweight
{
    /**
     * @param $content
     */
    public function show($content)
    {
        echo "共享的享元", $this->name, $content , "<br>";
    }
}