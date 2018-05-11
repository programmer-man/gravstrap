<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf6014401ece1b3016ede1708339798b9
{
    public static $files = array (
        'de85a44be454aa97188dad52ed888bed' => __DIR__ . '/..' . '/panique/laravel-sass/sass-compiler.php',
    );

    public static $classMap = array (
        'scss_formatter' => __DIR__ . '/..' . '/leafo/scssphp/scss.inc.php',
        'scss_formatter_compressed' => __DIR__ . '/..' . '/leafo/scssphp/scss.inc.php',
        'scss_formatter_crunched' => __DIR__ . '/..' . '/leafo/scssphp/scss.inc.php',
        'scss_formatter_nested' => __DIR__ . '/..' . '/leafo/scssphp/scss.inc.php',
        'scss_parser' => __DIR__ . '/..' . '/leafo/scssphp/scss.inc.php',
        'scss_server' => __DIR__ . '/..' . '/leafo/scssphp/scss.inc.php',
        'scssc' => __DIR__ . '/..' . '/leafo/scssphp/scss.inc.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitf6014401ece1b3016ede1708339798b9::$classMap;

        }, null, ClassLoader::class);
    }
}
