<?php
/**
 * User: Andy
 * Date: 2018/12/29
 * Time: 0:59
 */

namespace Fan\DesignPatterns\Decorator;

/**
 * 辣条
 *
 * Class Latiao
 * @package Fan\DesignPatterns\Decorator
 */
class Latiao extends Decorator
{
   public function name()
   {
        return $this->food->name() . " + 辣条";
   }

   public function price()
   {
       return $this->food->price() + 6;
   }
}