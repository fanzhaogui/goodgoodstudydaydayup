<?php
/**
 * User: Andy
 * Date: 2018/12/28
 * Time: 23:50
 */

namespace Fan\DesignPatterns\Bridge;

class Circle extends Graph
{
    public function draw()
    {
        echo "画一个 {$this->color->run()} 的圆形","<br>";
    }
}