<?php
/**
 * User: Andy
 * Date: 2018/12/31
 * Time: 17:30
 */

namespace Fan\DesignPatterns\SafeComposite;

require __DIR__ . "/../vendor/autoload.php";


class Client
{
    /**
     * 运行
     */
    public function run()
    {
        $designPartterns = new Dir('goodgoodstudydaydayup');

        $classAdapter = new Dir("ClassAdapter");
        $objectAdapter = new Dir("ObjectAdapter");
        $safeComposite = new Dir("SafeComposite");

        $designPartterns->add($classAdapter);
        $designPartterns->add($objectAdapter);
        $designPartterns->add($safeComposite);

        $componentFile = new File("Component.php");
        $dirFile = new File("Dir.php");
        $fileFile = new File("File.php");
        $indexFile = new File("index.php");

        $safeComposite->add($componentFile);
        $safeComposite->add($dirFile);
        $safeComposite->add($fileFile);
        $safeComposite->add($indexFile);

        echo $designPartterns->display();
    }
}

// 整地来说，树枝节点和叶子能有一个统一的操作
// 就是文件夹就处理单节点下的文件和文件夹
// 文件就直接返回
// 以此类推
$c = new Client();
$c->run();