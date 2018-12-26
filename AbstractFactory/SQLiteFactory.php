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
 * Class SQLiteFactory
 * @package Fan\DesignPatterns\AbstractFactory
 */
class SQLiteFactory implements Factory
{
    /**
     * 创建 SQLiteUser 产品
     *
     * @return SQLiteUser
     */
    public function createUser()
    {
        return new SQLiteUser();
    }

    public function createArticle()
    {
        return new SQLiteArticle();
    }
}