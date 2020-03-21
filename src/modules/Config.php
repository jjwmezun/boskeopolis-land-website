<?php

declare( strict_types = 1 );
namespace BoskeopolisLand;

class Config
{
    public const DEBUG = false;
    public const SERVER_DIRECTORY = ( self::DEBUG ) ? '/var/www/boskeopolis-land' : '/usr/share/nginx/boskeopolis-land';
    public const PUBLIC_SERVER_DIRECTORY = self::SERVER_DIRECTORY . '/public';
    public const URL_DIRECTORY = ( self::DEBUG ) ? 'http://bl.local' : 'https://www.boskeopolis-land.com';
}