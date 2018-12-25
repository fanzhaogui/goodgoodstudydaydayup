<?php
/**
 * User: Andy
 * Date: 2018/12/25
 * Time: 21:15
 */

namespace Fan\DesignPatterns\SimpleFactory;


/**
 * 乘法
 *
 * Class Mul
 * @package pattern\SimpleFactory
 */
class Mul extends Operation
{
    public function getResult()
    {
        return $this->numA * $this->numB;
    }
}