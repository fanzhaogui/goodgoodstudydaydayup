<?php
/**
 * User: Andy
 * Date: 2018/12/25
 * Time: 21:15
 */

namespace andy\pattern\SimpleFactory;


/**
 * 减法
 *
 * Class Sub
 * @package pattern\SimpleFactory
 */
class Sub extends Operation
{
    public function getResult()
    {
        return $this->numA - $this->numB;
    }
}