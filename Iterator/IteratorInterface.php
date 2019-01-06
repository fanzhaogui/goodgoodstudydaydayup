<?php
/**
 * User: Andy
 * Date: 2019/1/6
 * Time: 22:19
 */

namespace Fan\DesignPatterns\Iterator;

/**
 * 迭代器接口
 *
 * Interface IteratorInterface
 * @package Fan\DesignPatterns\Iterator
 */
interface IteratorInterface
{
    /**
     * 判断是否还有一个
     *
     * @return mixed
     */
    public function hasNext();

    /**
     * 获取下一个
     *
     * @return mixed
     */
    public function next();
}