<?php
/**
 * User: Andy
 * Date: 2018/12/25
 * Time: 21:15
 */

namespace Baijunyao\DesignPatterns\SimpleFactory;


/**
 * 加法
 *
 * Class Add
 * @package pattern\SimpleFactory
 */
class Add extends Operation
{
    public function getResult()
    {
        return $this->numA + $this->numB;
    }
}