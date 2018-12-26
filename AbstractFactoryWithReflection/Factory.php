<?php
/**
 * User: Andy
 * Date: 2018/12/27
 * Time: 0:16
 */

namespace Fan\DesignPatterns\AbstractFactoryWithReflection;

use ReflectionClass;
use ReflectionException;

class Factory
{
    public $db = "MySQL";

    public $namespace = 'Fan\DesignPatterns\AbstractFactoryWithReflection\\';

    public function __construct()
    {
        $config = include "config.php";
        $this->db = $config["dirver"];
    }

    public function createUser()
    {
        $className = $this->namespace . $this->db ."User";
        try {
            $class = new ReflectionClass($className);
            $user = $class->newInstance();
        } catch (ReflectionException $e) {
            throw new \InvalidArgumentException("暂不支持的数据库类型");
        }
        return $user;
    }

    public function createArticle()
    {
        $className = $this->namespace . $this->db ."Article";
        try {
            $class = new ReflectionClass($className);
            $user = $class->newInstance();
        } catch (ReflectionException $e) {
            throw new \InvalidArgumentException("暂不支持的数据库类型");
        }
        return $user;
    }
}
