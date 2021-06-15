<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitacaa0bd1aa00aa1e70de024d7da368cc
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitacaa0bd1aa00aa1e70de024d7da368cc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitacaa0bd1aa00aa1e70de024d7da368cc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitacaa0bd1aa00aa1e70de024d7da368cc::$classMap;

        }, null, ClassLoader::class);
    }
}
