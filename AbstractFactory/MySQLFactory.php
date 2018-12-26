<?php
/**
 * User: Andy
 * Date: 2018/12/26
 * Time: 23:10
 */

namespace Fan\DesignPatterns\AbstractFactory;

/**
 * MySQL 工厂
 *
 * Class MySQLFactory
 * @package Fan\DesignPatterns\AbstractFactory
 */
class MySQLFactory implements Factory
{
    /**
     * 创建 MySQLUser 产品
     *
     * @return MySQLUser
     */
    public function createUser()
    {
        return new MySQLUser();
    }

    public function createArticle()
    {
        return new MySQLArticle();
    }
}