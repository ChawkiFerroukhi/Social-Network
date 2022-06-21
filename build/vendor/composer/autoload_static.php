<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite60d75c0fe27c7fe210a4e3d6f48dd80
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'models\\' => 7,
        ),
        'c' => 
        array (
            'classes\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
        ),
        'classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite60d75c0fe27c7fe210a4e3d6f48dd80::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite60d75c0fe27c7fe210a4e3d6f48dd80::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite60d75c0fe27c7fe210a4e3d6f48dd80::$classMap;

        }, null, ClassLoader::class);
    }
}