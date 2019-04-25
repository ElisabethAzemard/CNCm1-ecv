<!DOCTYPE html>
<html lang="FR-fr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Document</title>
		<link rel="stylesheet" href="assets/css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	</head>

	<body>
		
		<?php

			include_once('header.php');

			include_once('views/' . $directory . '/' . $view . '.php');

			include_once('footer.php');

		?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="http://localhost/festival/assets/js/main.js"></script>
	</body>
</html>