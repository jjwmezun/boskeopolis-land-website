<?php

declare( strict_types = 1 );
namespace BoskeopolisLand;

use WaughJ\HTMLImage\HTMLImage;
use WaughJ\HTMLTag\HTMLTag;

class Logo
{
    public function __construct()
    {
        $loader = Image::getFileLoader();
        $image = new Image( 'boskeopolis-land-logo.png', [ 'class' => 'center-img', 'alt' => 'Boskeopolis Land' ] );
        $source = new HTMLTag( 'source', [ 'srcset' => $loader->getSourceWithVersion( 'boskeopolis-land-logo.png' ), 'media' => "(min-width:800px)" ] );
        $content = ( string )( $source ) . ( string )( $image );
        $this->content = ( string )( new HTMLTag( 'picture', [], $content ) );
    }

    public function __toString()
    {
        return $this->content;
    }

    private $content;
}