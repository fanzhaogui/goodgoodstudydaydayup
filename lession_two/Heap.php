<?php
/**
 * User: Andy
 * Date: 2019/1/8
 * Time: 23:39
 */


/**
 * 堆排序
 * Class Heap
 */
class Heap {

    public $len;
    public $arr;

    public function __construct($arr)
    {
        $this->arr = $arr;
        $this->len = count($arr);
    }

    // 建立大项堆
    public function buildMaxHeap()
    {
        for ($i = floor($this->len/2); $i >= 0; $i --) {
            $this->heapify($i, $this->len);
        }
    }

    // 堆调整
    public function heapify($i, $len)
    {
        $left = 2 * $i + 1; // 3
        $right = 2 * $i + 2; // 4
        $largest = $i; // 1

        if ($left < $len && $this->arr[$left] > $this->arr[$largest]) {
            $largest = $left;
        }

        if ($right < $len && $this->arr[$right] > $this->arr[$largest]) {
            $largest = $right;
        }

        if ($largest != $i) {
            $this->swap($i, $largest);
            $this->heapify($largest, $len);
        }
    }

    // 交换值
    function swap($i, $j)
    {
        $temp = $this->arr[$i];
        $this->arr[$i] = $this->arr[$j];
        $this->arr[$j] = $temp;
    }

    function heapSort()
    {
        $this->buildMaxHeap();
        for ($i = $this->len - 1; $i > 0; $i --) {
            $this->swap( 0, $i);
            $this->len --;
            $this->heapify(0, $this->len);
        }
        return $this->arr;
    }
}

$sortArr = [1,5,6,7,4,5,66,77,43,2,3,4,55,323,452,332,2,123231,11,23,3];
$heap = new Heap($sortArr);
$heapSortArr = $heap->heapSort();

var_dump($heapSortArr);