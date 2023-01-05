<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0dc1b9151ce3a466df80a9f1f49a4d7a
{
    public static $files = array (
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Slim\\' => 5,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Container\\' => 14,
        ),
        'M' => 
        array (
            'Message\\' => 8,
        ),
        'F' => 
        array (
            'FastRoute\\' => 10,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Slim\\' => 
        array (
            0 => __DIR__ . '/..' . '/slim/slim/Slim',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Message\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Models',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0dc1b9151ce3a466df80a9f1f49a4d7a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0dc1b9151ce3a466df80a9f1f49a4d7a::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit0dc1b9151ce3a466df80a9f1f49a4d7a::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit0dc1b9151ce3a466df80a9f1f49a4d7a::$classMap;

        }, null, ClassLoader::class);
    }
}