<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1f265c031b61bb3501375dd876088424
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1f265c031b61bb3501375dd876088424::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1f265c031b61bb3501375dd876088424::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1f265c031b61bb3501375dd876088424::$classMap;

        }, null, ClassLoader::class);
    }
}
