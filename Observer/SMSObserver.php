<?php
/**
 * User: Andy
 * Date: 2019/1/6
 * Time: 23:04
 */

namespace Fan\DesignPatterns\Observer;

class SMSObserver implements Observer
{
    public function update()
    {
        echo "发送短信<br>";
    }
}