<?php
/**
 * User: Andy
 * Date: 2018/12/31
 * Time: 20:14
 */

namespace Fan\DesignPatterns\Facade;

/**
 * 文件夹
 *
 * Class File
 * @package Fan\DesignPatterns\Facade
 */
class File
{
    /**
     * 获取文件的内容
     * @return string
     */
    public function content()
    {
        return "某个文件的内容";
    }
}