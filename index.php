<?php

	setlocale (LC_TIME, 'fr_FR.utf8','fra');

	$route = [
		'home' => [
			'route' => '',
			'title' => 'Accueil'
		],
		'news' =>  [
			'route' => 'news',
			'title' => 'Actualités'
		],
		'new_detail' => [
			'route' => 'news',
			'title' => 'Détail Actualité'
		],
		'events' => [
			'route' => 'events',
			'title' => 'Evènements'
		],
		'event_detail' => [
			'route' => 'events',
			'title' => 'Détail Evènements'
		],
		'movies' => [
			'route' => 'movies',
			'title' => 'Films'
		],
		'movie_detail' => [
			'route' => 'movies',
			'title' => 'Détail Films'
		],
		'palmares' => [
			'route' => 'palmares',
			'title' => 'Palmarès'
		]
	];

	$GLOBALS['image'] = './assets/img/';

	if(isset($_GET['action']))
	{
		$view = $_GET['action'];
		$title = $route[$view]['title'];
		$directory = $route[$view]['route'];
	}
	else
	{
		$view = 'home';
		$title = 'Accueil';
		$directory = '';
    }

	require_once('views/template/template.php');