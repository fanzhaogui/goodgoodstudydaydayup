<?php
/**
 * User: Andy
 * Date: 2018/12/19
 * Time: 22:32
 */

// Insertion 插入排序法
//
// 描述是一种简单直观的排序算法，它的工作原理是通过构建有序序列，对于未排序数据，在已排序序列中从后向前扫描，找到相应的位置并插入
//
// 1. 从第一个元素开始，该元素可以认为已经被排序
// 2. 取出下一个元素，在已经排序的元素序列中从后往前扫描
// 3. 如果该元素（已排序）大于新的元素，将该元素移动到下一个位置
// 4. 重复步骤3，直到找到已排序的元素小于或者等于新元素的位置
// 5. 将新元素插入到该位置后
// 6. 重复步骤2~5
class Insertion extends Strategy
{
    public $sortArr = [];

    public function __construct(Array $sortArr)
    {
        $this->sortArr = $sortArr;
    }

    public function using()
    {
        $len = count($this->sortArr);
        if($len >=2 ) {
            $preIndex = $current = 0;
            for ($i = 1; $i < $len; $i ++) {
                $preIndex = $i - 1;
                $current = $this->sortArr[$i];
                // 如果当前元素 $current 比前面一个元素小，则交换当前元素和下标为$preIndex的元素位置
                while ($preIndex >= 0 && $this->sortArr[$preIndex] > $current) { // 4
                    $this->sortArr[$preIndex + 1] = $this->sortArr[$preIndex]; // 3
                    $preIndex --; // 2
                }
            }
        }
        echo "<hr/><pre>";
        print_r($this->sortArr);
    }
}