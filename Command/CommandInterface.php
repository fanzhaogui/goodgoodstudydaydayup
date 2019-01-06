<?php
/**
 * User: Andy
 * Date: 2019/1/6
 * Time: 20:52
 */

namespace Fan\DesignPatterns\Command;

/**
 * Interface CommandInterface
 * @package Fan\DesignPatterns\Command
 */
interface CommandInterface
{
    /**
     * @return mixed
     */
    public function execute();
}