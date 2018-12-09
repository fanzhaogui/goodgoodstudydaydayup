<?php
/**
 * User: Andy
 * Date: 2018/12/9
 * Time: 1:50
 */


abstract class Builder
{
    protected $car;

    abstract public function buildPartA();

    abstract public function buildPartB();

    abstract public function buildPartC();

    abstract public function getResult();
}

class CarBuilder extends Builder
{
    function __construct()
    {
        $this->car = new Car();
    }

    public function buildPartA()
    {
        // TODO: Implement buildPartA() method.
        $this->car->setPartA("发动机");
    }

    public function buildPartB()
    {
        // TODO: Implement buildPartB() method.
        $this->car->setPartB("轮子");
    }

    public function buildPartC()
    {
        // TODO: Implement buildPartC() method.
        $this->car->setPartC("其他零件");
    }

    public function getResult()
    {
        // TODO: Implement getResult() method.
        return $this->car;
    }
}


class Car
{
    protected $partA;
    protected $partB;
    protected $partC;

    public function setPartA($str)
    {
        $this->partA = $str;
    }

    public function setPartB($str)
    {
        $this->partB = $str;
    }

    public function setPartC($str)
    {
        $this->partC = $str;
    }

    public function show()
    {
        echo "这辆车是由";
        echo $this->partA . ",";
        echo $this->partB . ",";
        echo $this->partC . ",";
        echo "组成！";
    }
}

class Director
{
    public $myBuilder;

    public function startBuild()
    {
        $this->myBuilder->buildPartA();
        $this->myBuilder->buildPartB();
        $this->myBuilder->buildPartC();
        return $this->myBuilder->getResult();
    }

    public function setBuilder(Builder $builder)
    {
        $this->myBuilder = $builder;
    }
}

$carBuilder = new CarBuilder();
$director = new Director();
$director->setBuilder($carBuilder);
$newCar = $director->startBuild();
$newCar->show();