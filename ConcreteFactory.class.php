<?php
/**
 * User: Andy
 * Date: 2018/12/8
 * Time: 23:56
 */

// 工厂方法模式
//
// Product 抽象产品类
// ConcreteProduct 具体产品类
// Factory 抽闲工厂类
// ConcreteFactory 具体工厂类

// 通过定义一个抽象的核心工厂类
// 定义创建产品对象的接口，创建具体产品实例的工作延迟期工厂子类去完成

// 好处：核心类只关注工厂类的接口定义，而具体的产品实例交给具体的工厂子类去创建。当系统需要新增一个产品，无需修改现有
// 系统的代码，只需要添加一个具体产品类和其对应的工作子类，使系统的扩展性很好，符合面向对象编程的 开闭原则；




interface Animal {
    public function say();
    public function run();
}

class Cat implements Animal
{
    public function say()
    {
        // TODO: Implement say() method.
        echo "I'am cat ...<br>";
    }

    public function run()
    {
        // TODO: Implement run() method.
        echo "I'am run slowly <br>";
    }
}

class Dog implements Animal
{
    public function say()
    {
        // TODO: Implement say() method.
        echo "I'am Dog <br>";
    }

    public function run()
    {
        echo "I'am run faster <br>";
    }
}

abstract class Factory {
    abstract static function createAnimal();
}

class CatFactory extends Factory
{
    public static function createAnimal()
    {
        return new Cat();
    }
}

class DogFactory extends Factory
{
    public static function createAnimal()
    {
        return new Dog();
    }
}

$cat = CatFactory::createAnimal();
$cat->say();
$cat->run();

$dog = DogFactory::createAnimal();
$dog->say();
$dog->run();