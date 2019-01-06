<?php
/**
 * User: Andy
 * Date: 2019/1/6
 * Time: 22:00
 */

namespace Fan\DesignPatterns\Iterator;

/**
 * 容器接口
 *
 * Interface ContainerInterface
 * @package Fan\DesignPatterns\Iterator
 */
interface ContainerInterface
{
    /**
     * 添加一个名字
     *
     * @param $name
     * @return mixed
     */
   public function add($name);

    /**
     * 获取迭代器
     *
     * @return mixed
     */
   public function getIterator();
}