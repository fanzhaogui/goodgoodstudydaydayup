<?php
/**
 * User: Andy
 * Date: 2018/12/26
 * Time: 23:08
 */

namespace Fan\DesignPatterns\AbstractFactory;

/**
 * 应用于 SQLite 的 Article
 *
 * Class SQLiteArticle
 * @package Fan\DesignPatterns\AbstractFactory
 */
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