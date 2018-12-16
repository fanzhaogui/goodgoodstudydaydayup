<?php
/**
 * User: Andy
 * Date: 2018/12/16
 * Time: 22:46
 */

// Stragety pattern 策略模式
//
// 定义一系列算法，将每一个算法封装起来，并让他们可以相互转换。策略模式让算法独立于使用它的客户而变化，也称为 政策模式 Policy

// 常见示例： 快速排序，冒泡排序，选择排序等


// 如果我们需要在一个算法类中提供以上那些算法，一个常见的解决方法就是：
// 在类中定义多个方法，每个方法定义一种具体的算法，然后使用 if...else... 去判断到低是那种算法好
abstract class Strategy {
    abstract function using();
}

class StrategyA extends Strategy
{
    public function using()
    {
        echo "这是使用策略A的方法 <br>";
    }
}
class StrategyB extends Strategy
{
    public function using()
    {
        echo "这是使用策略B的方法 <br>";
    }
}

// 环境类
class Context
{
    protected $strategy;
    public function setStrategy(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function using()
    {
        $this->strategy->using();
    }
}

$context = new Context();
$strategyA = new StrategyA();
$strategyB = new StrategyB();
$context->setStrategy($strategyA);
$context->using();

$context->setStrategy($strategyB);
$context->using();
