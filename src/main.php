<?php
	namespace BoskeopolisLand;

	require_once( '../vendor/autoload.php' );

	use WaughJ\CopyrightYear\CopyrightYear;

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
		'index.twig.html',
		[
			'nav' =>
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
			],
			'copyright_year' => new CopyrightYear( '2017' ),
			'articles' => ArticlesList::getList()
		]
	);
