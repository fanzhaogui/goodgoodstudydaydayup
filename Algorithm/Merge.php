<?php
/**
 * User: Andy
 * Date: 2018/12/19
 * Time: 23:11
 */

// Merge 归并排序
//
// 归并排序是建立在归并操作上的一种有效的排序算法。
// 该算法是采用分治法 Divide and Conquer 的一个非常典型的应用，得到完全有序的序列
// 即先使每个子序列有序，再使子序列段间有序。若将两个有序表合并成一个有序表，称为2-路归并
//
// 1. 把长度为n的输入序列分成两个长度为n/2的子序列
// 2. 对这两个序列分别采用归并排序
// 3. 将两个排序好的子序列合并成一个最终的排序序列

// 归并排序是一种稳定的排序算法。和选中排序一样，归并排序的性能不受输入数据的影响，但表现比选择排序好的多，因为始终都是
// O(nlogn)的时间复杂度。
// 代价是需要额外的内存空间。
class Merge extends Strategy
{
    public $sortArr = [];
    public $result = [];

    public function __construct(Array $sortArr)
    {
        $this->sortArr = $sortArr;
    }

    public function using()
    {
        $res = $this->mergeSort($this->sortArr);
        echo "<hr><pre>";
        print_r($res);
    }

    // 递归切割每一个小块，从最小单元处理
    protected function mergeSort($arr)
    {
        $len = count($arr);
        if($len < 2) {
            return $arr;
        }
        $middle = floor($len/2);
        $left = array_slice($arr,0, $middle);
        $right = array_slice($arr, $middle);
        return $this->merge(self::mergeSort($left), self::mergeSort($right));
    }

    protected function merge($left, $right)
    {
        $result = [];
        while(count($left) > 0 && count($right) > 0) {
            if ($left[0] <= $right[0]) {
                array_push($result, array_shift($left));
            } else {
                array_push($result, array_shift($right));
            }
        }

        while (count($left)) {
            array_push($result, array_shift($left));
        }

        while (count($right)) {
            array_push($result, array_shift($right));
        }
        return $result;
    }
}