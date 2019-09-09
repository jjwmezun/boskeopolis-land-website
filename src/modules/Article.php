<?php

namespace BoskeopolisLand;

class Article
{
	public function __construct( array $atts )
	{
		$this->name = $atts[ 'name' ];
		$this->url = $atts[ 'url' ];
		$this->date = $atts[ 'date' ];
		$this->content = $atts[ 'content' ];
	}

	public function getName() : string
	{
		return $this->name;
	}

	public function getURL() : string
	{
		return $this->url;
	}

	public function getDateRaw() : string
	{
		return $this->date;
	}

	public function getDateString() : string
	{
		return date_format( date_create( $this->date ), 'Y F j' );
	}

	public function getContent() : string
	{
		return $this->content;
	}

	private $name;
	private $url;
	private $date;
	private $content;
}
