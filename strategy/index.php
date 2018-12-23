<?php
/**
 * User: Andy
 * Date: 2018/12/21
 * Time: 16:20
 */

// 超市促销活动，分别有原价，八折，满300减50，使用策略模式……，程序如何设计。
namespace strategy;

require_once "../autoload.php";

// 满减折算
$mode1 = new StrategyFind(new ManJianStrategy());
$mode1->get(100);

// 打折活动
$mode2 = new StrategyFind(new DaZheStrategy());
$mode2->get(100);
