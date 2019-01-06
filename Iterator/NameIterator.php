<?php
/**
 * User: Andy
 * Date: 2019/1/6
 * Time: 22:21
 */

namespace Fan\DesignPatterns\Iterator;

/**
 * 姓名迭代器
 *
 * Class NameInterator
 * @package Fan\DesignPatterns\Iterator
 */
class NameIterator implements IteratorInterface
{
    /**
     * @var array
     */
   protected $nameArray = [];

    /**
     * @var int
     */
   protected $index = 0;

    /**
     * NameInterator constructor.
     * @param $nameArray
     */
   public function __construct($nameArray)
   {
       $this->nameArray = $nameArray;
   }

    /**
     * 判断是否还有下一个姓名
     *
     * @return bool
     */
   public function hasNext()
   {
        return $this->index < count($this->nameArray);
   }

    /**
     * 下一个姓名
     */
   public function next()
   {
        if ($this->hasNext()) {
            echo $this->nameArray[$this->index] . "<br>";
            $this->index ++;
        }
   }
}