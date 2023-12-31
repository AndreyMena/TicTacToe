<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitabc00bf4ce7464cdf4d7a2b8a6579d4e
{
    public static $files = array (
        'c9d07b32a2e02bc0fc582d4f0c1b56cc' => __DIR__ . '/..' . '/laminas/laminas-servicemanager/src/autoload.php',
        '7e9bd612cc444b3eed788ebbe46263a0' => __DIR__ . '/..' . '/laminas/laminas-zendframework-bridge/src/autoload.php',
    );

    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Vendor\\Tictactoe\\' => 17,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Container\\' => 14,
            'PhpXmlRpc\\' => 10,
        ),
        'L' => 
        array (
            'Laminas\\ZendFrameworkBridge\\' => 28,
            'Laminas\\Xml\\' => 12,
            'Laminas\\XmlRpc\\' => 15,
            'Laminas\\Validator\\' => 18,
            'Laminas\\Uri\\' => 12,
            'Laminas\\Stdlib\\' => 15,
            'Laminas\\ServiceManager\\' => 23,
            'Laminas\\Server\\' => 15,
            'Laminas\\Math\\' => 13,
            'Laminas\\Loader\\' => 15,
            'Laminas\\Http\\' => 13,
            'Laminas\\Escaper\\' => 16,
            'Laminas\\Code\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Vendor\\Tictactoe\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'PhpXmlRpc\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpxmlrpc/phpxmlrpc/src',
        ),
        'Laminas\\ZendFrameworkBridge\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-zendframework-bridge/src',
        ),
        'Laminas\\Xml\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-xml/src',
        ),
        'Laminas\\XmlRpc\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-xmlrpc/src',
        ),
        'Laminas\\Validator\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-validator/src',
        ),
        'Laminas\\Uri\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-uri/src',
        ),
        'Laminas\\Stdlib\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-stdlib/src',
        ),
        'Laminas\\ServiceManager\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-servicemanager/src',
        ),
        'Laminas\\Server\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-server/src',
        ),
        'Laminas\\Math\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-math/src',
        ),
        'Laminas\\Loader\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-loader/src',
        ),
        'Laminas\\Http\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-http/src',
        ),
        'Laminas\\Escaper\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-escaper/src',
        ),
        'Laminas\\Code\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-code/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitabc00bf4ce7464cdf4d7a2b8a6579d4e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitabc00bf4ce7464cdf4d7a2b8a6579d4e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitabc00bf4ce7464cdf4d7a2b8a6579d4e::$classMap;

        }, null, ClassLoader::class);
    }
}
