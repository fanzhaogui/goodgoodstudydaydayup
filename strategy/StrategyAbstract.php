<?php
/**
 * User: Andy
 * Date: 2018/12/21
 * Time: 15:54
 */

// ../image/summary/strategy.png

// 抽象活动算法类
namespace strategy;

abstract class StrategyAbstract{
    /**
     * 具体活动算法
     */
    public abstract function doAction($money);
}

// 具体算法产品











