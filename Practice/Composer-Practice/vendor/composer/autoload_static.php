<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit672b7e83a73d8e0fd6e88d9afbd51ffd
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit672b7e83a73d8e0fd6e88d9afbd51ffd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit672b7e83a73d8e0fd6e88d9afbd51ffd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit672b7e83a73d8e0fd6e88d9afbd51ffd::$classMap;

        }, null, ClassLoader::class);
    }
}