<?php
/**
 * User: Andy
 * Date: 2018/12/26
 * Time: 22:56
 */

namespace Fan\DesignPatterns\AbstractFactory;


/**
 * User 产品接口
 *
 * Interface User
 * @package Fan\DesignPatterns\AbstractFactory
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