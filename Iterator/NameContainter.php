<?php
/**
 * User: Andy
 * Date: 2019/1/6
 * Time: 22:00
 */

namespace Fan\DesignPatterns\Iterator;

/**
 * Class NameContainter
 * @package Fan\DesignPatterns\Iterator
 */
class NameContainter implements ContainerInterface
{
    /**
     * @var array
     */
    protected $nameArray = [];

    /**
     * 添加一个名字
     *
     * @param $name
     */
    public function add($name)
    {
        $this->nameArray[] = $name;
    }

    /**
     * @return NameIterator
     */
    public function getIterator()
    {
        return new NameIterator($this->nameArray);
    }
}