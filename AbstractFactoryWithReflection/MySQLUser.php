<?php
/**
 * User: Andy
 * Date: 2018/12/27
 * Time: 0:16
 */

namespace Fan\DesignPatterns\AbstractFactoryWithReflection;


class MySQLUser implements User
{
    public function insert()
    {
        echo "向mysql 数据库中插入 User <br>";
    }

    public function select()
    {
        echo "从mysql 数据库中查询 User <br>";
    }
}