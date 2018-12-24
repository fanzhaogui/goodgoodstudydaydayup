<?php
/**
 * User: Andy
 * Date: 2018/12/24
 * Time: 22:50
 */

class ComposerAutoloaderInit88798c90f3cb8871fa59cc0f15b5142f
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if('Composer\Autoload\ClassLoader' == $class) {
            require __DIR__ . "/ClassLoader.php";
        }
    }

    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        //  注册给定的函数作为 __autoload 的实现
        spl_autoload_register(array('ComposerAutoloaderInit88798c90f3cb8871fa59cc0f15b5142f', 'loadClassLoader'), true, true);

        self::$loader = $loader = new \Composer\Autoload\ClassLoader();

        // 注销已注册的__autoload()函数
        spl_autoload_unregister(array('ComposerAutoloaderInit88798c90f3cb8871fa59cc0f15b5142f', 'loadClassLoader'));

        $userStaticLoader = PHP_VERSION_ID >= "50600" && !define("HHVM_VERSION") && (!function_exists('zend_loader_file_encoded') || !zend_loader_file_encoded());

        if($userStaticLoader) {
            require_once __DIR__ . "/autoload_static.php";
            call_user_func(\Composer\Autoload\ComposerStaticInit88798c90f3cb8871fa59cc0f15b5142f::getInitializer($loader));
        } else {
            $map = require __DIR__ . "autoload_namespaces.php";
            foreach ($map as $namespace => $path) {
                $loader->set($namespace, $path);
            }
            $map = require __DIR__ . '/autoload_psr4.php';
            foreach ($map as $namespace => $path) {
                $loader->setPsr4($namespace, $path);
            }
            $classMap = require __DIR__ . '/autoload_classmap.php';
            if ($classMap) {
                $loader->addClassMap($classMap);
            }
        }
        $loader->register(true);
        return $loader;
    }
}