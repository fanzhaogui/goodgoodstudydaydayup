<?php
/**
 * User: Andy
 * Date: 2018/12/31
 * Time: 17:22
 */

namespace Fan\DesignPatterns\SafeComposite;


/**
 * 文件夹
 *
 * Class Dir
 * @package Fan\DesignPatterns\SafeComposite
 */
class Dir extends Component
{
    /**
     * @var array
     */
    protected $children = [];

    /**
     * 添加子节点
     *
     * @param Component $component
     */
    public function add(Component $component)
    {
        $this->children[] = $component;
    }

    /**
     * @return string
     */
    public function display()
    {
        $nameStr = $this->name . "<br>";
        foreach ($this->children as $k=>$v) {
            $nameStr .= '--' . $v->display();
        }
        return $nameStr;
    }
}