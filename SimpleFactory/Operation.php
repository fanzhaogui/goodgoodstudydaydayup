<?php
/**
 * User: Andy
 * Date: 2018/12/25
 * Time: 21:09
 */

namespace Baijunyao\DesignPatterns\SimpleFactory;

/**
 * 操作类型抽象类
 *
 * Class Operation
 * @package pattern\SimpleFactory
 */
abstract class Operation
{
    /**
     * 运算符号左边的值
     *
     * @var int
     */
    protected $numA = 0;

    /**
     * 运算符号右边的值
     *
     * @var int
     */
    protected $numB = 0;

    /**
     * 计算结果
     *
     * @return mixed
     */
    abstract function getResult();

    /**
     * 给A赋值
     *
     * @param $number
     */
    public function setNumA($number)
    {
        $this->numA = $number;
    }

    /**
     * 给B值赋值
     *
     * @param $number
     */
    public function setNumB($number)
    {
        $this->numB = $number;
    }
}