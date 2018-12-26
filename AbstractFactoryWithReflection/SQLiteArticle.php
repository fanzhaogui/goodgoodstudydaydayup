<?php
/**
 * User: Andy
 * Date: 2018/12/27
 * Time: 0:16
 */

namespace Fan\DesignPatterns\AbstractFactoryWithReflection;


class SQLiteArticle implements Article
{
    public function insert()
    {
        echo "向 SQLite 数据库中插入 Article <br>";
    }

    public function select()
    {
        echo "从 SQLite 数据库中查询 Article <br>";
    }
}