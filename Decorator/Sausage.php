<?php
/**
 * User: Andy
 * Date: 2018/12/29
 * Time: 0:59
 */

namespace Fan\DesignPatterns\Decorator;

/**
 * 肠
 *
 * Class Sausage
 * @package Fan\DesignPatterns\Decorator
 */
class Sausage extends Decorator
{
   public function name()
   {
        return $this->food->name() . " + 肠";
   }

   public function price()
   {
       return $this->food->price() + 2;
   }
}