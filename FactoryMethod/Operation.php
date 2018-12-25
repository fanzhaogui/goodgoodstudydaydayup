<?php
/**
 * User: Andy
 * Date: 2018/12/25
 * Time: 23:31
 */

namespace Fan\DesignPatterns\FactoryMethod;

/**
 * Class Operation
 * @package Fan\DesignPatterns\FactoryMethod
 */
abstract class Operation
{
    protected $numA;
    protected $numB;

    abstract function getResult();

    public function setNumA($num)
    {
        $this->numA = $num;
    }

    public function setNumB($num)
    {
        $this->numB = $num;
    }
}