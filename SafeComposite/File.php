<?php
/**
 * User: Andy
 * Date: 2018/12/31
 * Time: 17:26
 */

namespace Fan\DesignPatterns\SafeComposite;

/**
 * 文件
 *
 * Class File
 * @package Fan\DesignPatterns\SafeComposite
 */
class File extends Component
{
    public function display()
    {
        return "---" . $this->name . "<br>";
    }
}