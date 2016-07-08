<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4b2b61d0a379d61f5af6234eb6e67cac
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tests\\' => 6,
        ),
        'M' => 
        array (
            'Measurements\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
        ),
        'Measurements\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4b2b61d0a379d61f5af6234eb6e67cac::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4b2b61d0a379d61f5af6234eb6e67cac::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}