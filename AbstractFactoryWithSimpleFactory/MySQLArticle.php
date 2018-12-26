<?php
/**
 * User: Andy
 * Date: 2018/12/26
 * Time: 23:48
 */

namespace Fan\DesignPatterns\AbstractFactoryWithSimpleFactory;


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