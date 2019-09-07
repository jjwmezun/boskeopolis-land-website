<?php
	namespace BoskeopolisLand;

	require_once( '../vendor/autoload.php' );

	use WaughJ\CopyrightYear\CopyrightYear;

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	$loader = new \Twig\Loader\FilesystemLoader( '../src/templates' );
	$twig = new \Twig\Environment
	(
		$loader,
		[
		]
	);
	echo $twig->render
	(
		'index.twig.html',
		[
			'copyright_year' => new CopyrightYear( '2017' )
		]
	);
