<?php
/**
 * User: Andy
 * Date: 2018/12/26
 * Time: 23:17
 */

namespace Fan\DesignPatterns\AbstractFactory;

interface Article
{
    public function insert();

    public function select();
}