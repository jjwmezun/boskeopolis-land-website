<?php
	namespace BoskeopolisLand;

	use WaughJ\CopyrightYear\CopyrightYear;

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	function execute( string $page, array $nav_list = [] ) : void
	{
		require_once( '../vendor/autoload.php' );

		$loader = new \Twig\Loader\FilesystemLoader( '../src/templates' );
		$twig = new \Twig\Environment
		(
			$loader,
			[
				'cache' => '/usr/share/nginx/boskeopolis-land/.twig-cache'
			]
		);
		echo $twig->render
		(
			"{$page}.twig.html",
			[
				'nav' =>
				$nav_list,
				'copyright_year' => new CopyrightYear( '2017' ),
				'articles' => ArticlesList::getList()
			]
		);
	}
