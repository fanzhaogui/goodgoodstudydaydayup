<?php
/**
 * User: Andy
 * Date: 2018/12/28
 * Time: 23:24
 */

namespace Fan\DesignPatterns\Bridge;



class Square extends Graph
{
    public function draw()
    {
        echo "画一个 {$this->color->run()} 的正方形","<br>";
    }
}