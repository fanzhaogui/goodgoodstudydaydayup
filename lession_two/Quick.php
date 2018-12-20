<?php
/**
 * User: Andy
 * Date: 2018/12/20
 * Time: 23:38
 */

// Quick 快速排序
//
// 快速排序的基本思想：通过一趟排序将待排序记录分隔成独立的两部分，其中记录的关键字比另一部分的关键字小，
// 着可分别对这两部分记录继续进行操作，以达到整个序列有序
//
//
class Quick extends Strategy
{
    public $sortArr = [];

    public function __construct(Array $sort)
    {
        $this->sortArr = $sort;
    }

    public function using()
    {
        // $this->quickSort($this->sortArr);

        echo "<hr>quick:<pre>";
        print_r($this->sortArr);

    }

    // 假设 $arr = [2, 3, 1, 5, 4]
    // 5
    // 0
    // 4
    //  partition($arr, 0, 4)
    //      0; 1; $i <= 4
    public function quickSort($arr, $left = 0, $right = 0)
    {
        $len = count($arr);
        $partitionIndex = 0;
        $left = $left > 0 ? $left : 0;
        $right = $right > 0 ? $right : $len - 1;

        if($left < $right) {
            $partitionIndex = $this->partition($arr, $left, $right);
            var_dump($partitionIndex);
            die;
            self::quickSort($arr, $left, $partitionIndex - 1);
            self::quickSort($arr, $partitionIndex + 1, $right);
        }
        return $arr;
    }

    // 分区操作
    public function partition($arr, $left, $right)
    {
        $pivot = $left; // 设定基准值 pivot
        $index = $pivot + 1; // 键 大于基准值
        for ($i = $index; $i <= $right; $i++) {
            if ($arr[$i] < $arr[$pivot]) {
                /*var_dump($arr,$i,$index);die;
                $arr = $this->swap($arr, $i, $index);*/
                $index ++;
            }
        }
        // $arr = $this->swap($arr, $pivot, $index - 1);
        return $index - 1;
    }

    // 交换值
    public function swap1($arr, $i, $j)
    {
        $temp = $arr[$i];
        $arr[$i] = $arr[$j];
        $arr[$j] = $temp;
    }
}