<?php
/**
 * User: Andy
 * Date: 2018/12/27
 * Time: 0:16
 */

namespace Fan\DesignPatterns\AbstractFactoryWithReflection;


interface Article
{
    public function insert();

    public function select();
}