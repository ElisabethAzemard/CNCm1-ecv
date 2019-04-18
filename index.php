<?php

	$route = [
		'home' => '',
		'actualites' => 'actualites',
		'actualite_detail' => 'actualites',
		'evenements' => 'evenements',
		'evenement_detail' => 'evenements',
		'films' => 'films',
		'film_detail' => 'films',
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