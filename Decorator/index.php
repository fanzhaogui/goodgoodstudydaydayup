<?php
/**
 * User: Andy
 * Date: 2018/12/29
 * Time: 0:51
 */


namespace Fan\DesignPatterns\Decorator;

require __DIR__ . "/../vendor/autoload.php";

class Client
{
    public function run()
    {
        // 手抓饼
        $shouzhuabing = new ShouZhuabing();
        echo $shouzhuabing->name();
        echo $shouzhuabing->price() ."元";
        echo "<hr>";

        // 烤冷面
        $kaolengmain = new KaoLengmian();
        echo $kaolengmain->name();
        echo $kaolengmain->price() . "￥";
        echo "<hr>";


        // 手抓饼 + 蛋
        $eggShou = new Egg($shouzhuabing);
        echo $eggShou->name();
        echo $eggShou->price();
        echo "<hr>";

        // 手抓饼 + 肠
        $sauShou = new Sausage($shouzhuabing);
        echo $sauShou->name();
        echo $sauShou->price();
        echo "<hr>";

        // 手抓饼 + 辣条
        $laShou = new Latiao($shouzhuabing);
        echo $laShou->name();
        echo $laShou->price();
        echo "<hr>";
    }
}


$c = new Client();

$c->run();