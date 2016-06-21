<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3d0ec7b58916d3e18b1a748cf95293e2
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $prefixesPsr0 = array (
        'F' => 
        array (
            'Flow\\JSONPath\\Test' => 
            array (
                0 => __DIR__ . '/..' . '/flow/jsonpath/tests',
            ),
            'Flow\\JSONPath' => 
            array (
                0 => __DIR__ . '/..' . '/flow/jsonpath/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3d0ec7b58916d3e18b1a748cf95293e2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3d0ec7b58916d3e18b1a748cf95293e2::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit3d0ec7b58916d3e18b1a748cf95293e2::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
