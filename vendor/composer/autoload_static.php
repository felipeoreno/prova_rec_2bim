<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit22431d3f447bc52bbc90ade15a3e2fdc
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit22431d3f447bc52bbc90ade15a3e2fdc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit22431d3f447bc52bbc90ade15a3e2fdc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit22431d3f447bc52bbc90ade15a3e2fdc::$classMap;

        }, null, ClassLoader::class);
    }
}
