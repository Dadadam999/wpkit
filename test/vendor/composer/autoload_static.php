<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit19518b7209962c4a060c2ac5a8599c85
{
    public static $prefixLengthsPsr4 = array (
        '\\' => 
        array (
            '\\' => 1,
        ),
    );

    public static $prefixDirsPsr4 = array (
        '\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit19518b7209962c4a060c2ac5a8599c85::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit19518b7209962c4a060c2ac5a8599c85::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit19518b7209962c4a060c2ac5a8599c85::$classMap;

        }, null, ClassLoader::class);
    }
}