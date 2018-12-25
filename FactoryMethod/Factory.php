<?php
/**
 * User: Andy
 * Date: 2018/12/25
 * Time: 23:38
 */

namespace Fan\DesignPatterns\FactoryMethod;


/**
 * 抽象工厂类
 *
 * Class Factory
 * @package Fan\DesignPatterns\FactoryMethod
 */
abstract class Factory
{
    /**
     * 创建产品
     *
     * @return mixed
     */
    abstract public function create();
}