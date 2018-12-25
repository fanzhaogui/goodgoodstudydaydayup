<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit88798c90f3cb8871fa59cc0f15b5142f
{
    public static $prefixLengthsPsr4 = array (
        'F' => // @see php7 以上对象下面的Fan的手写字母才能正确加载，5.4版本的可以正确加载
        array (
            'Fan\\DesignPatterns\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Fan\\DesignPatterns\\' =>
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit88798c90f3cb8871fa59cc0f15b5142f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit88798c90f3cb8871fa59cc0f15b5142f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
