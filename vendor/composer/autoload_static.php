<?php
/**
 * User: Andy
 * Date: 2018/12/24
 * Time: 23:02
 */

namespace Composer\Autoload;

class ComposerStaticInit88798c90f3cb8871fa59cc0f15b5142f
{
    public static $prefixLengthsPsr4 = array(
        'B' =>
            array(
                'andy\\pattern\\' => 25,
            ),
    );
    public static $prefixDirsPsr4 = array(
        'andy\\pattern\\' =>
            array(
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