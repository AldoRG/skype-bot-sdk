<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcefd3fcfce6f0456c1280f118ad8407e
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        'd9d39f82a605ebe5918f683dd402334c' => __DIR__ . '/..' . '/padraic/humbug_get_contents/src/function.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Yaml\\' => 23,
            'Symfony\\Component\\Stopwatch\\' => 28,
            'Symfony\\Component\\Filesystem\\' => 29,
            'Symfony\\Component\\EventDispatcher\\' => 34,
            'Symfony\\Component\\Debug\\' => 24,
            'Symfony\\Component\\Console\\' => 26,
            'Symfony\\Component\\Config\\' => 25,
            'SkypeBot\\' => 9,
            'Satooshi\\' => 9,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'H' => 
        array (
            'Humbug\\SelfUpdate\\' => 18,
            'Humbug\\' => 7,
        ),
        'C' => 
        array (
            'CodeClimate\\PhpTestReporter\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Yaml\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/yaml',
        ),
        'Symfony\\Component\\Stopwatch\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/stopwatch',
        ),
        'Symfony\\Component\\Filesystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/filesystem',
        ),
        'Symfony\\Component\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/event-dispatcher',
        ),
        'Symfony\\Component\\Debug\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/debug',
        ),
        'Symfony\\Component\\Console\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/console',
        ),
        'Symfony\\Component\\Config\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/config',
        ),
        'SkypeBot\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Satooshi\\' => 
        array (
            0 => __DIR__ . '/..' . '/satooshi/php-coveralls/src/Satooshi',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Humbug\\SelfUpdate\\' => 
        array (
            0 => __DIR__ . '/..' . '/padraic/phar-updater/src',
        ),
        'Humbug\\' => 
        array (
            0 => __DIR__ . '/..' . '/padraic/humbug_get_contents/src/Humbug',
        ),
        'CodeClimate\\PhpTestReporter\\' => 
        array (
            0 => __DIR__ . '/..' . '/codeclimate/php-test-reporter/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'G' => 
        array (
            'Guzzle\\Tests' => 
            array (
                0 => __DIR__ . '/..' . '/guzzle/guzzle/tests',
            ),
            'Guzzle' => 
            array (
                0 => __DIR__ . '/..' . '/guzzle/guzzle/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcefd3fcfce6f0456c1280f118ad8407e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcefd3fcfce6f0456c1280f118ad8407e::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitcefd3fcfce6f0456c1280f118ad8407e::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}