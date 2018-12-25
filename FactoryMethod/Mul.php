<?php
/**
 * User: Andy
 * Date: 2018/12/25
 * Time: 23:34
 */

namespace Fan\DesignPatterns\FactoryMethod;

class Mul extends Operation
{
    public function getResult()
    {
        return $this->numA * $this->numB;
    }
}