<?php

	$route = [
		'home' => '',
		'news' => 'news',
		'new_detail' => 'news',
		'events' => 'events',
		'event_detail' => 'events',
		'movies' => 'movies',
		'movie_detail' => 'movies',
		'palmares' => 'palmares'
	];

	if(isset($_GET['action'])) {
		$view = $_GET['action'];
		$directory = $route[$view];
	}
	else {
		$view = 'home';
		$directory = '';
    }

	require_once('views/template/template.php');