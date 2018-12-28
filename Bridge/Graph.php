<?php
/**
 * User: Andy
 * Date: 2018/12/28
 * Time: 23:22
 */

namespace Fan\DesignPatterns\Bridge;

/**
 * 形状抽象类
 *
 * Class Graph
 * @package Fan\DesignPatterns\Bridge
 */
abstract class Graph
{
    /**
     * 颜色
     *
     * @var Color
     */
    protected $color;

    /**
     * Graph constructor.
     * @param Color $color
     */
    public function __construct(Color $color)
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    abstract public function draw();
}