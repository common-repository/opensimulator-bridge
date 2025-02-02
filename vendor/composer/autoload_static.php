<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcd8b7332cc7fb96f3c7396d0f3b76284
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PhpXmlRpc\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PhpXmlRpc\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpxmlrpc/phpxmlrpc/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'wposbridge\\Opensim' => __DIR__ . '/../..' . '/class-opensim.php',
        'wposbridge\\Profile' => __DIR__ . '/../..' . '/class-profile.php',
        'wposbridge\\Settings' => __DIR__ . '/../..' . '/class-settings.php',
        'wposbridge\\Xmlrpc' => __DIR__ . '/../..' . '/class-xmlrpc.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcd8b7332cc7fb96f3c7396d0f3b76284::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcd8b7332cc7fb96f3c7396d0f3b76284::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcd8b7332cc7fb96f3c7396d0f3b76284::$classMap;

        }, null, ClassLoader::class);
    }
}
