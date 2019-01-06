<?php
/**
 * User: Andy
 * Date: 2019/1/6
 * Time: 23:01
 */

namespace Fan\DesignPatterns\Observer;

/**
 * Class Subject
 * @package Fan\DesignPatterns\Observer
 */
class Subject extends SubjectAbstract
{
    public function publish()
    {
        echo "我做了某件事<br>";
        $this->notify();
    }
}