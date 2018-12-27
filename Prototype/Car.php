<?php
/**
 * User: Andy
 * Date: 2018/12/28
 * Time: 0:23
 */

namespace Fan\DesignPatterns\Prototype;

/**
 * 车
 *
 * Class Car
 * @package Fan\DesignPatterns\Prototype
 */
class Car
{
    /**
     * 车名
     *
     * @var
     */
    public $name;

    /**
     * 设置车名
     *
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}