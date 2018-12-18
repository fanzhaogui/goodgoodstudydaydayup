<?php
/**
 * User: Andy
 * Date: 2018/12/19
 * Time: 0:38
 */

// Selection 选择排序
//
// 首先在未排序的序列中找到最大（小） 元素，存放到排序序列的其实位置，然后，再从剩余未排序的元素中继续寻找最大（小）元素
// 然后，放到已排序序列的末尾，以此类推，直到所有元素均排序完毕
//
//  1. 初始状态：无序区为R[1..n]，有序区为空
//  2. 第i趟排序(i=1,2,3…n-1)开始时，当前有序区和无序区分别为R[1..i-1]和R(i..n）。该趟排序从当前无序区中-选出关键字最小的记录 R[k]，将它与无序区的第1个记录R交换，使R[1..i]和R[i+1..n)分别变为记录个数增加1个的新有序区和记录个数减少1个的新无序区；
//  3. n-1趟结束，数组有序化了
class Selection extends Strategy
{
    public $selectionArr = [];

    function __construct(Array $selectionArr)
    {
        $this->selectionArr = $selectionArr;
    }

    public function using()
    {
        $len = count($this->selectionArr);
        for ($i = 0; $i < $len - 1; $i ++) {
            $minIndex = $i;
            for ($j = $i + 1; $j < $len; $j ++) {
                if ($this->selectionArr[$j] < $this->selectionArr[$minIndex]) {
                    $minIndex = $j;
                }
            }
            $temp = $this->selectionArr[$i];
            $this->selectionArr[$i] = $this->selectionArr[$minIndex];
            $this->selectionArr[$minIndex] = $temp;
        }
        echo "<pre>";
        print_r($this->selectionArr);
    }
}