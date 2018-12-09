<?php
/**
 * User: Andy
 * Date: 2018/12/9
 * Time: 1:32
 */


class Singleton
{
    private static $instance;
    private function __construct()
    {
    }
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    public static function getInstance()
    {
        if(!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function say()
    {
        echo "这是用单例模式创建的对象实例<br>";
    }

    public function operation()
    {
        echo "这里可以添加其他的方法和操作<br>";
    }
}

$act = Singleton::getInstance();
$act->say();
$act->operation();