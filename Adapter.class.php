<?php
/**
 * User: Andy
 * Date: 2018/12/9
 * Time: 2:04
 */



class Adaptee
{
    public function realRequest()
    {
        echo "这是适配者真正的调用方法";
    }
}

interface Targe {
    public function request();
}

class Adapter implements Targe
{
    protected $adaptee;
    function __construct(Adaptee $adaptee)
    {
        $this->adaptee = $adaptee;
    }

    public function request()
    {
        echo "适配器转换....";
        // TODO: Implement request() method.
        $this->adaptee->realRequest();
    }
}

$adaptee = new Adaptee();
$target = new Adapter($adaptee);
$target->request();