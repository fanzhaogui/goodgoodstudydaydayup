<?php
/**
 * User: Andy
 * Date: 2018/12/26
 * Time: 23:45
 */

namespace Fan\DesignPatterns\AbstractFactoryWithSimpleFactory;

interface Article
{
    public function insert();

    public function select();
}