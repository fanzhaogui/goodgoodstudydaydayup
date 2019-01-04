<?php
/**
 * User: Andy
 * Date: 2018/12/8
 * Time: 23:04
 */

//require_once "Factory.class.php";
//require_once "ConcreteFactory.class.php";
//require_once "AbstructFactory.class..php";
//require_once "Builder.class.php";
//require_once "Singleton.class..php";
//require_once "Adapter.class.php";
//require_once "DrawingAPI.class.php";
//require_once "Component.class.php";
require_once "lession_two/Strategy.php";
require_once "lession_two/Bubble.php";
require_once "lession_two/Fibonacci.php";
require_once "lession_two/Selection.php";
require_once "lession_two/Insertion.php";
require_once "lession_two/Shell.php";
require_once "lession_two/Merge.php";
require_once "lession_two/Quick.php";

$context = new Context();

// 斐波拉契数列
$fibonacci = new Fibonacci(10);
$context->setStrategy($fibonacci);
$context->using();

$sortArr = [1,5,6,7,4,5,66,77,43,2,3,4,55,323,452,332,2,123231,11,23,3];
// 1. 冒泡
$bubble = new Bubble($sortArr);
$context->setStrategy($bubble);
$context->using();

// 2. 选择排序法
$selection = new Selection($sortArr);
$context->setStrategy($selection);
$context->using();

// 3. 插入排序
$insertion = new Insertion($sortArr);
$context->setStrategy($insertion);
$context->using();

// 4. 希尔排序  有点懵
$shell = new Shell($sortArr);
$context->setStrategy($shell);
$context->using();

// 5. 归并排序
$merge = new Merge($sortArr);
$context->setStrategy($merge);
$context->using();

// 6. Quick 快速排序 - TODO ...
$quick = new Quick($sortArr);
$context->setStrategy($quick);
$context->using();




echo "<hr><br/>hello world!";
echo "<hr> demo ...<br/><hr> ";
?>
<a href="strategy/index.php">策略demo</a>
