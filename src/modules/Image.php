<?php

declare( strict_types = 1 );
namespace BoskeopolisLand;

use WaughJ\HTMLImage\HTMLImage;
use WaughJ\FileLoader\FileLoader;

class Image extends HTMLImage
{
    public function __construct( string $local, array $attributes = [] )
    {
        parent::__construct( $local, self::getFileLoader(), $attributes );
    }

    public static function getFileLoader() : FileLoader
    {
        if ( self::$loader === null )
        {
            self::$loader = new FileLoader
            ([
                'directory-url' => Config::URL_DIRECTORY,
                'directory-server' => Config::SERVER_DIRECTORY,
                'shared-directory' => 'images'
            ]);
        }
        return self::$loader;
    }

    private static $loader;
}