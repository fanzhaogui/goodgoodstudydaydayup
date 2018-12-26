<?php
/**
 * User: Andy
 * Date: 2018/12/26
 * Time: 22:58
 */


namespace Fan\DesignPatterns\AbstractFactory;


/**
 * 工厂接口
 *
 * Interface Factory
 * @package Fan\DesignPatterns\AbstractFactory
 */
interface Factory
{
    /**
     * 创建 User 产品
     *
     * @return mixed
     */
    public function createUser();

    /**
     * 创建文章产品
     *
     * @return mixed
     */
    public function createArticle();
}