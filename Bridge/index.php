<?php
/**
 * User: Andy
 * Date: 2018/12/28
 * Time: 23:51
 */

namespace Fan\DesignPatterns\Bridge;

require __DIR__ . "/../vendor/autoload.php";

class Client
{
    public function run()
    {
        $red = new Red();
        $yellow = new Yellow();
        $green = new Green();

        // 正方形
        $redSquare = new Square($red);
        $redSquare->draw();

        $yellowSquare = new Square($yellow);
        $yellowSquare->draw();

        $greenSquare = new Square($green);
        $greenSquare->draw();

        // 三角形
        $redTriangle = new Triangle($red);
        $redTriangle->draw();

        $yellowTriangle = new Triangle($yellow);
        $yellowTriangle->draw();

        $greenTriangle = new Triangle($green);
        $greenTriangle->draw();

        // 圆形
        $redCircle = new Circle($red);
        $redCircle->draw();

        $yellowCircle = new Circle($yellow);
        $yellowCircle->draw();

        $greenCircle = new Circle($green);
        $greenCircle->draw();

    }
}

$c = new Client();
$c->run();