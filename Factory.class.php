<?php
/**
 * User: Andy
 * Date: 2018/12/8
 * Time: 23:33
 */

// 简单工厂模式
//
// 简单工厂模式最大的优点在于：实现对象的创建和对象的使用分离，将对象的创建交给专门的工厂类负责，但是其
// 最大的缺点在于：工厂类不够灵活， 增加新的具体产品需要修改工厂类的逻辑判断代码，而且产品较多时，工厂方法代码将会
// 非常复杂！

class Cat
{
    function __construct()
    {
        echo "I am a Cat class <br>";
    }
}

class Dog
{
    function __construct()
    {
        echo "T am a Dog class <br>";
    }
}

class Factory
{
    public static function CreateAnimal($name)
    {
        if ($name == "cat") {
            return new Cat();
        } elseif ($name == "dog") {
            return new Dog();
        }
    }
}

$cat = Factory::CreateAnimal("cat");
$dog = Factory::CreateAnimal("dog");
