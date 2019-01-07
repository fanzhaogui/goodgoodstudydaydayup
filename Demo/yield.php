<?php
/**
 * User: Andy
 * Date: 2019/1/7
 * Time: 23:46
 */

/**
 * 与return不同，yield可以在函数中的任何地方使用，因此逻辑可以更自然地流动。以下列斐波纳契发生器为例
 *
 * @param $n
 * @return Generator
 * @see http://php.net/manual/zh/class.generator.php
 */
function fib($n)
{
    $cur = 1;
    $prev = 0;
    for ($i = 0; $i < $n; $i ++) {
        yield $cur;

        $temp = $cur;
        $cur = $prev + $cur;
        $prev = $temp;
    }
}

$fibs = fib(9);

foreach ($fibs as $fib) {
    echo " ".$fib;
}