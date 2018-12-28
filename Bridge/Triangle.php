<?php
/**
 * User: Andy
 * Date: 2018/12/28
 * Time: 23:39
 */

namespace Fan\DesignPatterns\Bridge;


class Triangle extends Graph
{
    public function draw()
    {
        echo "画一个{$this->color->run()}的三角形","<br>";
    }
}