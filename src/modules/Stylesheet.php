<?php

declare( strict_types = 1 );
namespace BoskeopolisLand;

use WaughJ\FileLoader\FileLoader;

class Stylesheet
{
    public static function getList() : array
    {
        return
        [
            new Stylesheet( 'https://fonts.googleapis.com/css?family=Roboto:400,400i,900,900i&display=swap', true, false ),
            new Stylesheet( 'main' )
        ];
    }

    public function getUrl() : string
    {
        return $this->filename;
    }

    private function __construct( string $filename, bool $absolute = false, bool $version = true )
    {
        $this->filename = ( $absolute ) ? $filename : self::getFileLoader()->getSourceWithVersion( $filename );
    }

    private function getFileLoader() : FileLoader
    {
        if ( self::$fileloader === null )
        {
            self::$fileloader = new FileLoader
            ([
                'directory-url' => Config::URL_DIRECTORY,
                'directory-server' => Config::SERVER_DIRECTORY,
                'shared-directory' => 'css',
                'extension' => 'css'
            ]);
        }
        return self::$fileloader;
    }

    private $filename;

    private static $fileloader;

    private const LOCAL_DIRECTORY = 'css';
}