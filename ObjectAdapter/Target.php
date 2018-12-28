<?php
/**
 * User: Andy
 * Date: 2018/12/28
 * Time: 22:44
 */
namespace Fan\DesignPatterns\ObjectAdapter;

/**
 * 源类
 *
 * Interface Target
 * @package Fan\DesignPatterns\ClassAdaptee
 */
interface Target
{
    /**
     * 支付
     */
    public function pay();

    public function notify();
}