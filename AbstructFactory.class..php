<?php
/**
 * User: Andy
 * Date: 2018/12/9
 * Time: 1:06
 */

// 抽象工厂模式
//
// 提供一个创建一系列相关或相互依赖对象的接口，而无须指定他们具体的类。
// 抽象工厂模式又称Kit模式，属于对象创建型模式

// 此模式是对工厂方法模式的进一步扩展
// 在工厂模式中，一个具体工厂负责生产一类具体的产品，即一对一的关系，但是，如果需要一个具体的工厂生产多种产品对象
// 那么就需要用到抽象的工厂模式了

interface TV {
    public function open();
    public function watch();
}
interface PC {
    public function work();
    public function play();
}

// 产品等级结构
//
// 产品等级结构即产品的继承结构，如一个抽象类似电视机，其子类有海尔电视机、海信电视机、TCL电视机
// 则抽象电视机与具体品牌的电视机之间构成了一个产品等级结构，抽象电视机是父类，而具体品牌的电视机是子类

class HaierTv implements TV
{
    public function open()
    {
        // TODO: Implement open() method
        echo "I'm open haier TV <br>";
    }

    public function watch()
    {
        // TODO: Implement watch() method.
        echo "I'm watching haier TV <br>";
    }
}

class LenovoPc implements PC
{
    public function work()
    {
        // TODO: Implement work() method.
        echo "I.m working with lenovo computer <br>";
    }

    public function play()
    {
        // TODO: Implement play() method.
        echo "play games with lenovo computer <br>";
    }
}

// 产品族
//
// 在抽象工厂模式中，产品族是指由同一个工厂生产的，位于不同产品等级结构中的一组产品
// 如海尔电器工厂生产的海尔电视机，海尔电冰箱
// 海尔电视机位于电视机产品等级结构中，海尔电冰箱位于电冰箱产品等级机构中

abstract class Factory {
    abstract public static function createTv();
    abstract public static function createPc();
}

class ProductFactory extends Factory {
    public static function createTv()
    {
        return new HaierTv();
    }

    public static function createPc()
    {
        return new LenovoPc();
    }
}

$newTv = ProductFactory::createTv();
$newTv->open();
$newTv->watch();

$newPc = ProductFactory::createPc();
$newPc->work();
$newPc->play();


