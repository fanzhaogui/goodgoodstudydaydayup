<?php
/**
 * User: Andy
 * Date: 2019/1/6
 * Time: 22:58
 */

namespace Fan\DesignPatterns\Observer;

/**
 * Class SubjectAbstract
 * @package Fan\DesignPatterns\Observer
 */
abstract class SubjectAbstract
{
    /**
     * @var array
     */
    private $observers = [];

    /**
     * @param Observer $observer
     */
    public function attach(Observer $observer)
    {
        $this->observers[] = $observer;
    }


    /**
     * 通知
     */
    public function notify()
    {
        foreach ($this->observers as $k => $v) {
            $v->update();
        }
    }
}