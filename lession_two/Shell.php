<?php
/**
 * User: Andy
 * Date: 2018/12/19
 * Time: 22:51
 */
// Shell Sort 希尔排序
//
//
class Shell extends Strategy
{
    public $sortArr = [];

    public function __construct(Array $sortArr)
    {
        $this->sortArr = $sortArr;
    }


    public function using()
    {
        $len = count($this->sortArr);
        $gap = 1;
        $temp = 0;
        if($len >= 2) {
            while ($gap < $len/3) { // 动态定义间隔序列
                $gap = $gap * 3 + 1;
            }

            for( ; $gap > 0; $gap = floor($gap/3)) {
                for ($i = $gap; $i < $len; $i ++) {
                    $temp = $this->sortArr[$i];
                    for ($j = $i - $gap; $j > 0 && $this->sortArr[$j] > $temp; $j -= $gap) {
                        $this->sortArr[$j + $gap] = $this->sortArr[$j];
                    }
                    $this->sortArr[$j + $gap] = $temp;
                }
            }
        }
        echo "<hr><pre>";
        print_r($this->sortArr);
    }
}