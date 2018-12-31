<?php
/**
 * User: Andy
 * Date: 2018/12/31
 * Time: 17:12
 */

namespace Fan\DesignPatterns\SafeComposite;

/**
 * 包含树节点 和 叶子节点方法的抽象类
 *
 * Class Component
 * @package Fan\DesignPatterns\SafeComposite
 */
abstract class Component
{
    /**
     * @var
     */
    protected $name;

    /**
     * Component constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }


    /**
     *
     * @return mixed
     */
    abstract public function display();
}