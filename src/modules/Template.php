<?php

declare( strict_types = 1 );
namespace BoskeopolisLand;

use WaughJ\CopyrightYear\CopyrightYear;

class Template
{
    public function __construct( string $page, array $nav_list )
    {
        if ( !self::hasBeenInitialized() )
        {
            self::init();
        }

        $attributes = 
        [
            'nav' => $nav_list,
            'copyright_year' => new CopyrightYear( 2017 ),
            'articles' => ArticlesList::getList(),
            'stylesheets' => Stylesheet::getList(),
            'logo' => new Logo()
        ];

        $content = self::$twig->render
        (
            "{$page}.twig.html",
            $attributes
        );
        $this->content = $content;
    }

    public function getHTML() : string
    {
        return $this->content;
    }

    public static function hasBeenInitialized() : bool
    {
        return self::$twig !== null;
    }

    public static function init() : void
    {
        $loader = new \Twig\Loader\FilesystemLoader( Config::SERVER_DIRECTORY . '/src/templates' );
        self::$twig = new \Twig\Environment
        (
            $loader,
            [
                'cache' => Config::SERVER_DIRECTORY . '/.twig-cache'
            ]
        );
    }

    private $content = '';
    private static $twig = null;
}