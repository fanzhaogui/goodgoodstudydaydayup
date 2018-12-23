<?php
/**
 * User: Andy
 * Date: 2018/12/21
 * Time: 16:21
 */

namespace strategy;

// 满减算法
class ManJianStrategy extends StrategyAbstract
{
    public function doAction($money)
    {
        echo "满减算法：原价",$money,"元<br>";
    }
}