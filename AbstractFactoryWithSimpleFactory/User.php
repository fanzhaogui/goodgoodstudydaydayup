<?php
/**
 * User: Andy
 * Date: 2018/12/26
 * Time: 23:45
 */

namespace Fan\DesignPatterns\AbstractFactoryWithSimpleFactory;

/**
 * User 产品接口
 *
 * Interface User
 * @package Fan\DesignPatterns\AbstractFactoryWithSimpleFactory
 */
interface User
{
    /**
     * 新增
     *
     * @return mixed
     */
    public function insert();

    /**
     * 查询
     *
     * @return mixed
     */
    public function select();
}