<?php
/**
 * User: Andy
 * Date: 2018/12/25
 * Time: 21:00
 */

namespace andy\pattern\SimpleFactory;

/**
 * 不好的示例
 *
 * Class Bad
 * @package pattern\SimpleFactory
 */
class Bad
{
    /**
     * getResult 计算结果
     * @param $numA
     * @param $operate
     * @param $numB
     */
    public function getResult($numA, $operate, $numB)
    {
        switch ($operate) {
            case "+":
                $result = $numA + $numB;
                break;
            case "-":
                $result = $numA - $numB;
                break;
            case "*":
                $result = $numA * $numB;
                break;
            case "/":
                if($numB != 0) {
                    $result = $numA / $numB;
                } else {
                    throw new \InvalidArgumentException("除数不能为0！");
                }
                break;
            default:
                throw new \InvalidArgumentException("暂不支持的运算！");
        }
        return $result;
    }
}

