<?php
/**
 * User: Andy
 * Date: 2018/12/25
 * Time: 21:15
 */

namespace andy\pattern\SimpleFactory;


/**
 * 除法
 *
 * Class Div
 * @package pattern\SimpleFactory
 */
class Div extends Operation
{
    public function getResult()
    {
        if ($this->numB == 0) {
            throw new \InvalidArgumentException("除数不能为零");
        }
        return $this->numA / $this->numB;
    }
}