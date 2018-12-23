<?php
/**
 * User: Andy
 * Date: 2018/12/21
 * Time: 16:21
 */
namespace strategy;

// 策略工厂类
class StrategyFind
{
    private $strategy_mode;

    /**
     * 初始时，传入具体的策略对象
     * @param $mode
     */
    public function __construct(StrategyAbstract $model)
    {
        $this->strategy_mode = $model;
    }

    /**
     * 执行打折算法
     * @param $money
     */
    public function get($money)
    {
        $this->strategy_mode->doAction($money);
    }
}