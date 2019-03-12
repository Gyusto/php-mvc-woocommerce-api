<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit75cf7ab65a96815bcd9adec479a6362a
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Automattic\\WooCommerce\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Automattic\\WooCommerce\\' => 
        array (
            0 => __DIR__ . '/..' . '/automattic/woocommerce/src/WooCommerce',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit75cf7ab65a96815bcd9adec479a6362a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit75cf7ab65a96815bcd9adec479a6362a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}