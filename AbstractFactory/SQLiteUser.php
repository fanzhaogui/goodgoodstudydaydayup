<?php
/**
 * User: Andy
 * Date: 2018/12/26
 * Time: 23:08
 */

namespace Fan\DesignPatterns\AbstractFactory;

/**
 * 应用于 SQLite 的 User
 *
 * Class SQLiteUser
 * @package Fan\DesignPatterns\AbstractFactory
 */
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