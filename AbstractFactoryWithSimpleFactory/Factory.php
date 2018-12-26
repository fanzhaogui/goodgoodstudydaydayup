<?php
/**
 * User: Andy
 * Date: 2018/12/26
 * Time: 23:50
 */

namespace Fan\DesignPatterns\AbstractFactoryWithSimpleFactory;


class Factory
{
    public $db = "MySQL";

    public function __construct()
    {
        $config = include "config.php";
        $this->db = $config["dirver"];
    }

    public function createUser()
    {
        switch ($this->db) {
            case "MySQL":
                $user = new MySQLUser();
                break;
            case "SQLite":
                $user = new SQLiteUser();
                break;
            default:
                throw new \InvalidArgumentException("暂不支持的数据库类型");
                break;
        }
        return $user;
    }

    public function createArticle()
    {
        switch ($this->db) {
            case "MySQL":
                $article = new MySQLArticle();
                break;
            case "SQLite":
                $article = new SQLiteArticle();
                break;
            default:
                throw new \InvalidArgumentException("暂不支持的数据库类型");
                break;
        }
        return $article;
    }
}