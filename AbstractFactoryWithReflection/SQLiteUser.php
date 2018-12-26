<?php
/**
 * User: Andy
 * Date: 2018/12/27
 * Time: 0:16
 */

namespace Fan\DesignPatterns\AbstractFactoryWithReflection;


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