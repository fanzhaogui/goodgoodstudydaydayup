<?php
/**
 * User: Andy
 * Date: 2018/12/31
 * Time: 20:16
 */
namespace Fan\DesignPatterns\Facade;


/**
 * 外观对象
 *
 * Class Facade
 * @package Fan\DesignPatterns\Facade
 */
class Facade
{
    /**
     * @var File
     */
    private $file;

    /**
     * @var Encrypt
     */
    private $encrypt;

    /**
     * Facade constructor.
     */
    public function __construct()
    {
        $this->file = new File();
        $this->encrypt = new Encrypt();
    }

    /**
     * 获取文件内容的加密
     */
    public function encryptContent()
    {
        echo $this->file->content();
        echo "<br>";
        echo $this->encrypt->encrypt();
    }
}