<?php

declare( strict_types = 1 );
namespace BoskeopolisLand;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

function endsWith( string $haystack, string $needle )
{
	$length = strlen( $needle );
	if ( $length == 0 )
	{
		return true;
	}
	return ( substr( $haystack, -$length ) === $needle );
}

function execute() : Response
{
	require_once( '../vendor/autoload.php' );

	$request = Request::createFromGlobals();
	$path = $request->getPathInfo();

	if ( !endsWith( $path, '/' ) )
	{
		$response = new RedirectResponse( $path . '/' );
		$response->send();
	}

	if ( in_array( $path, [ '', '/' ] ) )
	{
		$template = new Template
		(
			'index',
			[
				[
					'name' => '¿What is <i>Boskeopolis Land</i>',
					'url'  => '#what-is-boskeopolis-land'
				],
				[
					'name' => 'Latest Development Articles',
					'url'  => '#latest-development-articles'
				],
				[
					'name' => 'Source Code',
					'url'  => '#source-code'
				]
			]
		);
	}
	else
	{
		$template = new Template( '404', [] );
	}

	$response = new Response( $template->getHTML() );
	return $response->send();
}
