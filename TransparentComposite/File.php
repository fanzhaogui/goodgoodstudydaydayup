<?php
/**
 * User: Andy
 * Date: 2018/12/31
 * Time: 17:26
 */

namespace Fan\DesignPatterns\TransparentComposite;

/**
 * 文件
 *
 * Class File
 * @package Fan\DesignPatterns\TransparentComposite
 */
class File extends Component
{
    public function add(Component $component)
    {
        throw new \Exception("文件不能添加子节点");
    }

    public function display()
    {
        return "---" . $this->name . "<br>";
    }
}