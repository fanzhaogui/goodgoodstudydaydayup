<?php
/**
 * User: Andy
 * Date: 2018/12/26
 * Time: 23:08
 */

namespace Fan\DesignPatterns\AbstractFactory;

/**
 * 应用于MySQL 的 User
 *
 * Class MySQLUser
 * @package Fan\DesignPatterns\AbstractFactory
 */
class MySQLArticle implements Article
{
    public function insert()
    {
        echo "向mysql 数据库中插入 Article <br>";
    }

    public function select()
    {
        echo "从mysql 数据库中查询 Article <br>";
    }
}