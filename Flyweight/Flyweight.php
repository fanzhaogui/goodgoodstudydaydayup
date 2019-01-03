<?php
/**
 * User: Andy
 * Date: 2019/1/3
 * Time: 22:16
 */

namespace Fan\DesignPatterns\Flyweight;

/**
 * 享元抽象类
 *
 * Class Flyweight
 * @package Fan\DesignPatterns\Flyweight
 */
abstract class Flyweight
{
    /**
     * @var
     */
    protected $name;

    /**
     * Flyweight constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @param $content
     */
    public function show($content){}
}