<?php
/**
 * User: Andy
 * Date: 2018/12/28
 * Time: 0:26
 */

namespace Fan\DesignPatterns\Prototype;


/**
 * Class ShallowDrive
 * @package Fan\DesignPatterns\Prototype
 */
class ShallowDrive
{
    private $car;

    /**
     * ShallowDrive constructor.
     */
    public function __construct()
    {
        echo "准备完成！";
    }


    /**
     * 选择要开的车
     *
     * @param $car
     */
    public function setCar($car)
    {
        $this->car = $car;
    }

    /**
     * 展示
     */
    public function show()
    {
        echo "开始驾驶" . $this->car->name;
        echo "<br>";
    }
}