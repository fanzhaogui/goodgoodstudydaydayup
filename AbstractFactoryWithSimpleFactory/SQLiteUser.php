<?php
/**
 * User: Andy
 * Date: 2018/12/26
 * Time: 23:49
 */

namespace Fan\DesignPatterns\AbstractFactoryWithSimpleFactory;


class SQLiteUser implements User
{
    public function insert()
    {
        echo "向 SQLite 数据库中插入 User <br>";
    }

    public function select()
    {
        echo "从 SQLite 数据库中查询 User <br>";
    }
}