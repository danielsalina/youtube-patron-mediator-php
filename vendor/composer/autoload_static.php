<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2c67ad17139f35e1b99e59f74dbf4577
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mediator\\' => 9,
        ),
        'C' => 
        array (
            'Components\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mediator\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Mediator',
        ),
        'Components\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Components',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2c67ad17139f35e1b99e59f74dbf4577::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2c67ad17139f35e1b99e59f74dbf4577::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2c67ad17139f35e1b99e59f74dbf4577::$classMap;

        }, null, ClassLoader::class);
    }
}
