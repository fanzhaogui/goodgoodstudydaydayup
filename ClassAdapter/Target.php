<?php
/**
 * User: Andy
 * Date: 2018/12/28
 * Time: 22:31
 */


namespace Fan\DesignPatterns\ClassAdapter;

/**
 * 目标类接口
 *
 * Interface Target
 * @package Fan\DesignPatterns\ClassAdapter
 */
interface Target
{
    /**
     * 支付
     *
     * @return mixed
     */
    public function pay();

    /**
     * 通知
     *
     * @return mixed
     */
    public function notify();
}