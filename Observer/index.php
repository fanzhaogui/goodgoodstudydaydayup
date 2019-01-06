<?php
/**
 * User: Andy
 * Date: 2019/1/6
 * Time: 23:06
 */

namespace Fan\DesignPatterns\Observer;

require __DIR__ . "/../vendor/autoload.php";

class Client
{
    public function run()
    {
        $email = new EmailObserver();
        $sms = new SMSObserver();
        $subject = new Subject();

        $subject->attach($email);
        $subject->attach($sms);
        $subject->publish();
    }
}

$c = new Client();
$c->run();