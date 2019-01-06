<?php
/**
 * User: Andy
 * Date: 2019/1/6
 * Time: 23:03
 */

namespace Fan\DesignPatterns\Observer;

/**
 * Interface Observer
 * @package Fan\DesignPatterns\Observer
 */
interface Observer
{
    /**
     * @return mixed
     */
    public function update();
}