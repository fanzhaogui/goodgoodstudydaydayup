<?php
/**
 * User: Andy
 * Date: 2018/12/25
 * Time: 23:35
 */

namespace Fan\DesignPatterns\FactoryMethod;

/**
 * 减法
 *
 * Class Sub
 * @package Fan\DesignPatterns\FactoryMethod
 */
class Sub extends Operation
{
    /**
     * 计算结果
     *
     * @return int|mixed
     */
    public function getResult()
    {
        return $this->numA - $this->numB;
    }
}