<?php
/**
 * User: Andy
 * Date: 2018/12/18
 * Time: 23:35
 */

// Bubble 冒泡排序
//
// 1. 比较相邻的元素，如果第一个比第二个，就交换他们两个
// 2. 对每一对相邻元素作相同的工作，从开始第一对到结尾的最后一对，这样最后的元素应该会是最大的数
// 3. 针对所有的元素重复以上的步骤，初了最后一个；
// 4. 重复1~3，直到排序完成
class Bubble extends Strategy
{
    protected $arr = [];
    function __construct(Array $arr)
    {
        $this->arr = $arr;
    }

    public function using()
    {
        $len = count($this->arr);
        // 1  2  3  4  5
        // $len = 5; $len - 1 = 4
        // $i = 0  时  $j < $len - 1 - 0 = 4; $j 的最大值为 3, $j+1的最大值为4
        // 第一次会排序算出最大值
        // 第二次时，无需比较最后一个值
        // $i = 1  时  $j < $len - 1 - 1 = 3; $j 的最大值为 2, $j+1的最大值为3
        for ($i = 0; $i < $len - 1; $i ++) {
            for ($j = 0; $j < $len - $i - 1; $j ++) {
                if ($this->arr[$j] > $this->arr[$j+1]) { // 比较相邻元素
                    $temp = $this->arr[$j + 1]; // 将比较大的值往后移动
                    $this->arr[$j + 1] = $this->arr[$j];
                    $this->arr[$j] = $temp;
                }
            }
        }
        echo "<hr/><pre>";
        print_r($this->arr);
    }
}