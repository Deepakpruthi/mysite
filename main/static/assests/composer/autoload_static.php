<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita66301cd3574207440f65614b4131d98
{
    public static $prefixLengthsPsr4 = array (
        'Q' => 
        array (
            'QuickBooksOnline\\API\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'QuickBooksOnline\\API\\' => 
        array (
            0 => __DIR__ . '/..' . '/quickbooks/v3-php-sdk/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita66301cd3574207440f65614b4131d98::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita66301cd3574207440f65614b4131d98::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
