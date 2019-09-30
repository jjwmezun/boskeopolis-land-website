<?php

declare( strict_types = 1 );
namespace BoskeopolisLand;

class Config
{
    public const DEBUG = true;
    public const SERVER_DIRECTORY = ( DEBUG ) ? '/var/www/boskeopolis-land' : '/usr/share/nginx/boskeopolis-land';
    public const URL_DIRECTORY = ( DEBUG ) ? 'http://bl.local' : 'https://www.boskeopolis-land.com';
}