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

$context = new Context();

$sortArr = [1,5,6,7,4,5,66,77,43,2,3,4,55,323,452,332,2,123231,11,23,3];
// 冒泡
$bubble = new Bubble($sortArr);
$context->setStrategy($bubble);
$context->using();

// 斐波拉契数列
$fibonacci = new Fibonacci(10);
$context->setStrategy($fibonacci);
$context->using();

// 选择排序法
$selection = new Selection($sortArr);
$context->setStrategy($selection);
$context->using();


echo "<hr><br/>hello world!";