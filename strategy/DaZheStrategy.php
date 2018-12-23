<?php
/**
 * User: Andy
 * Date: 2018/12/21
 * Time: 16:22
 */

namespace strategy;


// 打折算法产品类
class DaZheStrategy extends StrategyAbstract
{
    public function doAction($money)
    {
        echo "打折算法：原价{$money}元<br>";
    }
}