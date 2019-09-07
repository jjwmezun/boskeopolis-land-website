<?php

namespace BoskeopolisLand;

class DevArticlesList
{
	public function __construct()
	{
		$this->list = [];
		$data = simplexml_load_string( file_get_contents( '../data/data.xml' ) );
        foreach ( $data->channel[ 0 ]->item as $post )
        {
            $post_wp = $post->children( 'wp', true );
            if ( $post_wp->post_type == 'post' )
            {
                $post_categories = ( array )( $post->category );
				foreach ( $post_categories as $cat )
				{
					$nicename = self::findNicename( ( array )( $cat ) );
					if ( $nicename === 'boskeopolis-land' )
					{
						$this->list[] =
						[
							'title' => $post->title,
							'content' => $post->children( 'content', true )
						];
					}
				}
                //if ( in_array( '', $post_categories ) )
                {
                    //$poem = new Poem();
                    //$poem->setTitle( $post->title );
                    //$poem->setSlug( $post_wp->post_name );
                    //$poem->setBody( $post->children( 'content', true ) );
                    //$poem->setPubdate( new \DateTime( $post_wp->post_date ) );
                }
            }
        }
	}

	public function getList() : array
	{
		return $this->list;
	}

	private static function findNicename( array $list ) : string
	{
		if ( array_key_exists( "nicename", $list ) )
		{
			return ( string )( $list[ 'nicename' ] );
		}
		else if ( array_key_exists( "@attributes", $list ) )
		{
			return self::findNicename( ( array )( $list[ "@attributes" ] ) );
		}
	}

	private $list;
}
