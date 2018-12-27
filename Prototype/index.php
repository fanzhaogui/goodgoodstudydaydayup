<?php
/**
 * User: Andy
 * Date: 2018/12/28
 * Time: 0:31
 */

namespace Fan\DesignPatterns\Prototype;

require __DIR__ . "/../vendor/autoload.php";

class Client
{
    /**
     * 浅复制
     *
     *   clone 是浅复制
     *   也就是说 $cloneDrive 的car 和 $shallowDrive的car是一个应用
     *   如果我们改变了 $car
     *   $cloneDrive的也被改变
     */
    public function shallowCopy()
    {
        $car = new Car();
        $car->name = "特斯拉";
        $shalloDrive = new ShallowDrive();
        $shalloDrive->setCar($car);
        $shalloDrive->show();

        $cloneDrive = clone $shalloDrive;
        $cloneDrive->show();

        echo "<hr>";
        $car->name = "宝马";
        $shalloDrive->show();
        $cloneDrive->show();
    }

    /**
     * 如我们所愿
     * $cloneDriver 并没有随$deepDriver的car变化
     *
     */
    public function deepCopy()
    {
        $car = new Car();
        $car->name = "特斯拉";
        $deepDriver = new DeeoDrive();
        $deepDriver->setCar($car);
        $deepDriver->show();

        $cloneDriver = clone $deepDriver;
        $cloneDriver->show();

        echo "<hr>";

        $car->name = "宝马";
        $deepDriver->show();
        $cloneDriver->show();
    }
}

$c = new Client();
$c->shallowCopy();
echo "<hr>";
$c->deepCopy();

// 创建型的设计模式 --- end