<?php

namespace BoskeopolisLand;

class DevArticlesList
{
	public function __construct()
	{
		$curl = curl_init();
		curl_setopt_array
		(
			$curl,
			[
				CURLOPT_URL => 'https://www.mezunian.com/feed/',
				CURLOPT_RETURNTRANSFER => 1,
				CURLOPT_HEADER => 1
			]
		);
		$this->content = curl_exec( $curl );
		$this->status = @curl_getinfo( $curl, CURLINFO_HTTP_CODE );
		curl_close( $curl );
	}

	public function __toString()
	{
		return ( $this->status === 200 )
			? $this->content
			: '';
	}

	private $content;
}
