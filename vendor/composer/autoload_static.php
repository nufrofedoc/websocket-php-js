<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb2035b0b8562401874d60c52be5722e7
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Workerman\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Workerman\\' => 
        array (
            0 => __DIR__ . '/..' . '/workerman/workerman',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb2035b0b8562401874d60c52be5722e7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb2035b0b8562401874d60c52be5722e7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb2035b0b8562401874d60c52be5722e7::$classMap;

        }, null, ClassLoader::class);
    }
}
