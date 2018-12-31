<?php
/**
 * User: Andy
 * Date: 2018/12/31
 * Time: 17:30
 */

namespace Fan\DesignPatterns\TransparentComposite;

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
        $TransparentComposite = new Dir("TransparentComposite");

        $designPartterns->add($classAdapter);
        $designPartterns->add($objectAdapter);
        $designPartterns->add($TransparentComposite);

        $componentFile = new File("Component.php");
        $dirFile = new File("Dir.php");
        $fileFile = new File("File.php");
        $indexFile = new File("index.php");

        $TransparentComposite->add($componentFile);
        $TransparentComposite->add($dirFile);
        $TransparentComposite->add($fileFile);
        $TransparentComposite->add($indexFile);

        echo $designPartterns->display();
    }
}

// 整地来说，树枝节点和叶子能有一个统一的操作
// 就是文件夹就处理单节点下的文件和文件夹
// 文件就直接返回
// 以此类推
$c = new Client();
$c->run();