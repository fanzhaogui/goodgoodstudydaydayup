<?php
/**
 * User: Andy
 * Date: 2018/12/19
 * Time: 0:11
 */

// 斐波拉契数列
//
// 楼梯问题等
class Fibonacci extends Strategy
{
    public $times = 0;
    protected $arr = [];

    function __construct($times)
    {
        $this->times = intval($times);
    }


    public function using()
    {
        echo "<hr/>";
        for($i = 1; $i <= $this->times; $i ++) {
            // var_dump($this->arr);
            echo $this->exec($i)."\r\n";
        }
    }

    protected function exec($n)
    {
        if ($n <= 0) {
            return 0;
        }
        if(array_key_exists($n, $this->arr)) {
            return $this->arr[$n];
        }
        if ($n <= 1) {
            $res = 1;
        } else {
            $res = self::exec($n - 1) + self::exec($n - 2);
        }
        if(!array_key_exists($n, $this->arr)) {
            $this->arr[$n] = $res;
        }
        return $res;
    }
}