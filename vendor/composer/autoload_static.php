<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit50077b39cedfc41c51ea193d200591a7
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'ChargewpWpbTimeline\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ChargewpWpbTimeline\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit50077b39cedfc41c51ea193d200591a7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit50077b39cedfc41c51ea193d200591a7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit50077b39cedfc41c51ea193d200591a7::$classMap;

        }, null, ClassLoader::class);
    }
}
