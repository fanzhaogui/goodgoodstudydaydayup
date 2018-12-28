<?php
/**
 * User: Andy
 * Date: 2018/12/29
 * Time: 0:57
 */

namespace Fan\DesignPatterns\Decorator;


class Egg extends Decorator
{
    public function name()
    {
        return $this->food->name()." + " . "蛋";
    }

    public function price()
    {
        return $this->food->price() + 1;
    }
}