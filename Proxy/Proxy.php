<?php
/**
 * User: Andy
 * Date: 2019/1/4
 * Time: 23:06
 */

namespace Fan\DesignPatterns\Proxy;

class Proxy implements Subject
{
    public function __construct()
    {
        $this->realSubject = new RealSubject();
    }

    public function action()
    {
        $this->realSubject->action();
    }

}